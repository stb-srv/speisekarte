<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Grav;

class SpeisekartePlugin extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            // Keine Admin-spezifischen Funktionen aktiv
            return;
        }

        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    public function onTwigSiteVariables()
    {
        $config = $this->config->get('plugins.speisekarte', []);
        $speisen = $config['speisen'] ?? [];
        $legende = $config['legende'] ?? [];
        $kategorien = $config['kategorien'] ?? [];
        $spalten = $config['spalten'] ?? 2; // Fallback: 2 Spalten

        // Sortiere Speisen nach Kategorie, dann nach Nummer
        usort($speisen, function ($a, $b) {
            $cmp = strcmp($a['kategorie'] ?? '', $b['kategorie'] ?? '');
            if ($cmp === 0) {
                return intval($a['nummer'] ?? 0) - intval($b['nummer'] ?? 0);
            }
            return $cmp;
        });

        // Debug: speise-Daten inkl. Preise ins Log schreiben
        $this->grav['log']->info('Speisen: ' . json_encode($speisen));

        $this->grav['twig']->twig_vars['speisen'] = $speisen;
        $this->grav['twig']->twig_vars['legende'] = $legende;
        $this->grav['twig']->twig_vars['kategorien'] = $kategorien;
        $this->grav['twig']->twig_vars['spalten'] = $spalten;
    }

    public static function getCategories()
    {
        $grav = Grav::instance();
        $categories = $grav['config']->get('plugins.speisekarte.kategorien', []);
        $options = [];
        foreach ($categories as $category) {
            if (!empty($category['name'])) {
                $options[$category['name']] = $category['name'];
            }
        }
        return $options;
    }

    public static function getLegendeOptions()
    {
        $grav = Grav::instance();
        $legende = $grav['config']->get('plugins.speisekarte.legende', []);
        $options = [];
        foreach ($legende as $item) {
            if (!empty($item['code']) && !empty($item['beschreibung'])) {
                $options[$item['code']] = $item['beschreibung'];
            }
        }
        return $options;
    }
}
