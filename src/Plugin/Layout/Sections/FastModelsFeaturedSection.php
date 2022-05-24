<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fast Models Fnews Featured Section
 * 
 * @Layout (
 *  id = "fast_models_featured_section",
 *  label = @Translation("fast_models_featured_section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_featured_section",
 *  library = "fast_models/fm_featured_section",
 *  default_region = "featured_title",
 *  regions = {
 *      "featured_title" = {
 *          "label" = @Translation("featured_title"),     
 *      },
 *      "featured_subtitle" = {
 *          "label" = @Translation("featured_subtitle"),     
 *      },
 *      "featured_content" = {
 *          "label" = @Translation("featured_content"),     
 *      },
 *      "featured_link" = {
 *          "label" = @Translation("featured_link"),     
 *      }
 *  }
 * )
 * 
 */

class FastModelsFeaturedSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fast_models_featured_section_map.png");
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

    /***
     * 
     * {@inheritdoc}
     * 
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'ffs' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'featured_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "Featured"
                        ]
                    ],
                    'featured_subtitle' => [
                        'text_html' => [
                            'label' => 'Sous titre',
                            'value' => "Read our latest news and announcements"
                        ]
                    ],
                    'featured_content' => [
                        'text_html' => [
                            'label' => 'cards',
                            'value' => ""
                        ]
                    ],
                    'featured_link' => [
                        'url' => [
                            'label' => 'Bouton',
                            'value' => [
                                'link' => "#",
                                'text' => "More",
                                'class' => "link"
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

}