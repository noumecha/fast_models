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
 *  id = "fast_model_fnews_proposition",
 *  label = @Translation("f_news_proposition"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_model_fnews_proposition",
 *  library = "fast_models/fast_model_fnews_proposition",
 *  default_region = "content",
 *  regions = {
 *      "latest_title" = {
 *          "label" = @Translation("latest_title"),     
 *      },
 *      "latest_list" = {
 *          "label" = @Translation("latest_list"),
 *      },
 *      "read_title" = {
 *          "label" = @Translation("read_title"),
 *      },
 *      "read_list" = {
 *          "label" = @Translation("read_list"),
 *      },
 *      "more_btn_text" = {
 *          "label" = @Translation("more_btn_text"),
 *      }
 * }
 * )
 * 
 */

class FastModelFnewsProposition extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/proposition.png");
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
            'fnews_proposition' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'latest_title' => [
                        'text_html' => [
                            'label' => 'latest_title',
                            'value' => "<p> Latest Posts </p>"
                        ]
                    ],
                    'read_title' => [
                        'text_html' => [
                            'label' => 'read_title',
                            'value' => "<p> Most Read </p>"
                        ]
                    ],
                    'more_btn_text' => [
                        'text_html' => [
                            'label' => 'read_title',
                            'value' => '<a href="#">More</a>'
                        ]
                    ],
                    'read_list' => [
                        'text_html' => [
                            'label' => 'read_list',
                            'value' => '<p class="posted-date"> 04 May, 2020 </p>'
                        ]
                    ],
                    'latest_list' => [
                        'text_html' => [
                            'label' => 'read_title',
                            'value' => 'posted-date"> 04 May </p>'
                        ]
                    ]
                ]
            ]
        ];
    }

}