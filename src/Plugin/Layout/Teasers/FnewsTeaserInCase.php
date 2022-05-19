<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Teaser for in Case Section
 * 
 * @Layout (
 *  id = "f_news_teaser_in_case",
 *  label = @Translation("f_news_teaser_in_case"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_in_case",
 *  library = "fast_models/f_news_teaser_in_case",
 *  default_region = "content",
 *  regions = {
 *      "teaser_in_case_image" = {
 *          "label" = @Translation("teaser_in_case_image"),
 *      },
 *      "teaser_in_case_text" = {
 *          "label" = @Translation("teaser_in_case_text"),     
 *      },
 *      "teaser_in_case_date" = {
 *          "label" = @Translation("teaser_in_case_date"),     
 *      },
 *      "teaser_in_case_author" = {
 *          "label" = @Translation("teaser_in_case_author"),
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserInCase extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_in_case_map.png");
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
            'ftic' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_in_case_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ""
                        ]
                    ],
                    'teaser_in_case_text' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ""
                        ]
                    ],
                    'teaser_in_case_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => ""
                        ]
                    ],
                    'teaser_in_case_author' => [
                        'text_html' => [
                            'label' => 'Auteur',
                            'value' => ""
                        ]
                    ],
                ]
            ]
        ];
    }

}