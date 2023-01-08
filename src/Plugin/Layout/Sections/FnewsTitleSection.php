<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fnews title section 
 * 
 * @Layout (
 *  id = "f_news_title_section",
 *  label = @Translation("f_news_title_section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_title_section",
 *  library = "fast_models/f_news_title_section",
 *  default_region = "content",
 *  regions = {
 *      "fnews_title" = {
 *          "label" = @Translation("fnews_title"),     
 *      },
 *      "fnews_subtitle" = {
 *          "label" = @Translation("fnews_subtitle"),     
 *      },
 *      "tech_content" = {
 *          "label" = @Translation("tech_content"),     
 *      },
 *      "more_btn_text" = {
 *          "label" = @Translation("more_btn_text"),
 *      }
 *  }
 * )
 * 
 */

class FnewsTitleSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fnews_title_map.png");
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
     * {@inheritdoc}
     * 
     */
    public function defaultConfiguration() 
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fnt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'fnews_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "Tech Stories"
                        ]
                    ],
                    'more_btn_text' => [
                        'url' => [
                            'label' => 'read_title',
                            'value' => [
                                'text' => 'More',
                                'href' => '#',
                                'class' => 'link',
                            ]
                        ]
                    ],
                    'fnews_subtitle' => [
                        'text_html' => [
                            'label' => 'Sous titre',
                            'value' => "Read our latest news and announcements"
                        ]
                    ],
                    'tech_content' => [
                        'text_html' => [
                            'label' => 'Tech teaser content',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    }

}