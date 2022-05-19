<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Fnews In case Section :
 * 
 * @Layout (
 *  id = "f_news_in_case",
 *  label = @Translation("f_news in case"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_in_case",
 *  library = "fast_models/f_news_in_case",
 *  default_region = "content",
 *  regions = {
 *      "title_center" = {
 *          "label" = @Translation("title_center"),     
 *      },
 *      "teasers_in_case" = {
 *          "label" = @Translation("teasers_in_case"),     
 *      },
 *      "link" = {
 *          "label" = @Translation("link"),     
 *      }
 *  }
 * )
 */

class FnewsInCaseSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_in_case_map.png");
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
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'in_case' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu 1',
                    'loader' => 'static',
                ],
                'fields' => [
                    'title_center' => [
                        'text_html' => [
                            'label' => "Titre",
                            'value' => "In case you missed it"
                        ]
                    ],
                    'teasers_in_case' => [
                        'text_html' => [
                            'label' => 'Content Section',
                            'value' => ""
                        ]
                    ],
                    'link' => [
                        'url' => [
                            'label' => 'lien bas',
                            'value' => [
                                "link" => "#",
                                "text" => "More",
                                "class" => ""
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

}