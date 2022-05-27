<?php

namespace Drupal\fast_models\Plugin\Layout\Sections\Menus;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fast Models fn first menu
 * 
 * @Layout (
 *   id = "fast_models_fn_first_menu",
 *   label = @Translation("fast_models_fn_first_menu"),
 *   category = @Translation("Formatage Models"),
 *   path = "layouts/sections/menus",
 *   template = "fast_models_fn_first_menu",
 *   default_region = "fn_first_nav",
 *   regions = {
 *      "fn_first_nav" = {
 *          "label" = @Translation("fn_first_nav"),     
 *      }
 *   }
 * )
 * 
 */

class FastModelsFnewsFirstMenu extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) 
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/menus/fast_models_fn_first_menu_map.png");
    }

    /**
     * 
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
     * 
     */
    public function build(array $regions) 
    {
        
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        
        return $build;
    }

    /**
     * 
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmfnfm' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'fn_first_nav' => [
                        'text_html' => [
                            'label' => 'Menu content',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    }

}