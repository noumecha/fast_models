<?php

namespace Drupal\fast_models\Plugin\Layout\Sections\Menus;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 *
 * Fast Models fn second menu
 *
 * @Layout (
 *   id = "fast_models_fn_second_menu",
 *   label = @Translation("fast_models_fn_second_menu"),
 *   category = @Translation("Formatage Models"),
 *   path = "layouts/sections/menus",
 *   template = "fast_models_fn_second_menu",
 *   library = "fast_models/fast_models_fn_second_menu",
 *   default_region = "fn_second_nav_content",
 *   regions = {
 *      "fn_second_nav_content" = {
 *          "label" = @Translation("fn_second_nav_content"),
 *      },
 *      "fn_second_nav_logo" = {
 *          "label" = @Translation("fn_second_nav_logo"),     
 *      },
 *      "fn_second_nav_search" = {
 *          "label" = @Translation("fn_second_nav_search"),     
 *      },
 *      "fn_popup_icon" = {
 *          "label" = @Translation("fn_popup_icon"),     
 *      },
 *      "fn_popup_search" = {
 *          "label" = @Translation("fn_popup_search"),     
 *      }
 *   }
 * )
 *
 */

class FastModelsFnewsSecondMenu extends FormatageModelsSection
{

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/menus/fast_models_fn_second_menu_map.png");
    }

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
     *
     */
    public function build(array $regions) {
        
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        if (is_array($build['fn_second_nav_content']))
            $build['fn_second_nav_content'] = $this->getMenus($build['fn_second_nav_content']);
        return $build;
    }

    /**
     * 
     * {@inheritdoc}
     */
    private function getMenus(array $fn_scd_nav) {
        foreach ($fn_scd_nav as $k => $m) {
            if (isset($m['#base_plugin_id']) && $m['#base_plugin_id'] === 'system_menu_block') {
                               
                $fn_scd_nav[$k]['#attributes'] = [
                    'class' => [
                        'sn-bloc'
                    ]
                ];
                // set a new theme hoock () : refers to .theme.inc file
                $fn_scd_nav[$k]['content']['#theme'] = 'layoutmenu_fast_models_fn_second_menu';
                //
                $this->formatListMenus($fn_scd_nav[$k]['content']['#items']);
            }
        }
        return $fn_scd_nav;
    }

    /**
     * 
     * {@inheritdoc}
     */

    private function formatListMenus(array &$items) {
        foreach ($items as $k => $item) {
            if (!empty($item['attributes'])) {
                $attribute = $item['attributes'];
                $attribute->addClass('nav-item');
                if (!empty($item['below'])) {
                $this->formatListMenus($item['below']);
                $items[$k]['below'] = $item['below'];
                }
            }
        }
    }

    /**
     * 
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmfsm' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'fn_second_nav_content' => [
                        'text_html' => [
                            'label' => 'Menu Content',
                            'value' => ""
                        ]
                    ],
                    'fn_second_nav_search' => [
                        'text_html' => [
                            'label' => 'Search icone',
                            'value' => "<span class='wbu-search'></span>"
                        ]
                    ],
                    'fn_second_nav_logo' => [
                        'text_html' => [
                            'label' => 'Logo',
                            'value' => "<a href='#' class=''>storibon</a>"
                        ]
                    ],
                    'fn_popup_icon' => [
                        'text_html' => [
                            'label' => "Pop Up icon",
                            'value' => "<i class='wbu-close'></i>"
                        ]
                    ],
                    'fn_popup_search' => [
                        'text_html' => [
                            'label' => 'Pop Up Search',
                            'value' => '<input type="text" class="form-control" placeholder="Search...">'
                        ]
                    ]
                ]
            ]
        ];
    }

}