<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Four column section block 
 *  @Layout (
 *  id = "fast_models_three_col",
 *  label = @Translation("fast_models_three_col"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_three_col",
 *  library = "fast_models/fast_models_three_col",
 *  default_region = "col_one",
 *  regions = {
 *      "col_one" = {
 *          "label" = @Translation("col_one"),     
 *      },
 *      "col_two" = {
 *          "label" = @Translation("col_two"),     
 *      },
 *      "col_three" = {
 *          "label" = @Translation("col_three"),     
 *      }
 *  }
 * )
 */

class FastModelThreeCol extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fast_models_three_col_map.png");

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
            'threecol' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'col_one' => [
                        'text_html' => [
                            'label' => 'col 1',
                            'value' => ''
                        ]
                    ],
                    'col_two' => [
                        'text_html' => [
                            'label' => 'col 2',
                            'value' => ''
                        ]
                    ],
                    'col_three' => [
                        'text_html' => [
                            'label' => 'col 3',
                            'value' => ''
                        ]
                    ],
                    'col_one' => [
                        'text_html' => [
                            'label' => 'col 4',
                            'value' => ''
                        ]
                    ]
                ]
            ]
        ];
    }

}