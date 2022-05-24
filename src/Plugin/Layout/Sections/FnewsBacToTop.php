<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * f_news first service section
 * 
 * @Layout (
 *  id = "fast_model_f_news_bac_to_top",
 *  label = @Translation("f_news_first_service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_model_f_news_bac_to_top",
 *  library = "fast_models/f_news_bac_to_top",
 *  default_region = "content",
 *  regions = {
 *      "icon" = {
 *          "label" = @Translation("icon"),
 *      }
 * }
 * )
 * 
 */

class FnewsFirstServiceSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/f_news_bac_top.png");
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
     * 
     */
    public function defaultConfiguration() 
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'icon' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'icon' => [
                        'text_html' => [
                            'label' => 'icon',
                            'value' => "<i class='wbu-angles-up'></i>"
                        ]
                    ]
                ]
            ]
        ];
    }

}