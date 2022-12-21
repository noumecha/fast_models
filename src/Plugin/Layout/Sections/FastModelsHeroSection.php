<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fast Models fn hero section
 * 
 * @Layout (
 *  id = "fast_models_hero_section",
 *  label = @Translation("fast_models_hero_section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_hero_section",
 *  library = "fast_models/fast_models_hero_section",
 *  default_region = "hero_section_controls",
 *  regions = {
 *       "hero_section_controls" = {
 *          "label" = @Translation("hero_section_controls"),
 *       },
 *       "hero_section_card" = {
 *          "label" = @Translation("hero_section_card"),
 *       },
 *       "hero_section_teaser_title" = {
 *          "label" = @Translation("hero_section_teaser_title"),
 *       },
 *       "hero_section_articles" = {
 *          "label" = @Translation("hero_section_articles"),
 *       }
 *      }
 * )
 * 
 */

class FastModelsHeroSection extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) 
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition,$styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fast_models_hero_section_map.png");
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
            'fmhs' => [
                'builder-form' => true,
                'info' => [
                    'title' => "Contenu",
                    'loader' => 'static'
                ],
                'fields' => [
                    'hero_section_controls' => [
                        'text_html' => [
                            'label' => 'Controls slider',
                            'value' => ""
                        ]
                    ],
                    'hero_section_card' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ""
                        ]
                    ],
                    'hero_section_articles' => [
                        'text_html' => [
                            'label' => 'Articles',
                            'value' => ""
                        ]
                    ],
                    'hero_section_teaser_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    }

}