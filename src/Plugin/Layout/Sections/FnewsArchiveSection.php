<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fnews Archive Sections
 * 
 * @Layout (
 *  id = "f_news_archive",
 *  label = @Translation("f_news_archive"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_archive",
 *  library = "fast_models/f_news_archive",
 *  default_region = "content",
 *  regions = {
 *      "s_title" = {
 *          "label" = @Translation("s_title"),
 *      },
 *      "s_bar" = {
 *          "label" = @Translation("s_bar"),
 *      },
 *      "archive_left" = {
 *          "label" = @Translation("archive_left"),     
 *      },
 *      "archive_right" = {
 *          "label" = @Translation("archive_right"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsArchiveSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fnews_archive_map.png");
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
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu left',
                    'loader' => 'static'
                ],
                'fields' => [
                    "archive_left" => [
                        'text_html' => [
                            'label' => 'Archive Content left',
                            'value' => ""
                        ]
                    ],
                    "s_title" => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<h5 class='afc-search__title'>Search</h5>"
                        ]
                    ],
                    "s_bar" => [
                        'text_html' => [
                            'label' => 'Search bar',
                            'value' => "<input type='text' placeholder='Search...' class='form-control'>"
                        ]
                    ],
                    "archive_right" => [
                        'text_html' => [
                            'label' => 'Archive Content left',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    }

}