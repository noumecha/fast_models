<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * F_news Teaser Service Sections
 * @Layout (
 *  id = "f_news_teaser_service",
 *  label = @Translation("f_news_teaser_service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_service",
 *  library = "fast_models/f_news_teaser_service",
 *  default_region = "content",
 *  regions = {
 *      "t_image" = {
 *          "label" = @Translation("t_image"),
 *      },
 *      "teaser_day" = {
 *          "label" = @Translation("teaser_day"),
 *      },
 *      "teaser_date" = {
 *          "label" = @Translation("teaser_date"),     
 *      },
 *      "teaser_color" = {
 *          "label" = @Translation("teaser_color"),     
 *      },
 *      "teaser_color_one" = {
 *          "label" = @Translation("teaser_color_one"),     
 *      },
 *      "teaser_color_two" = {
 *          "label" = @Translation("teaser_color_two"),
 *      },
 *      "teaser_color_three" = {
 *          "label" = @Translation("teaser_color_three"),
 *      },
 *      "teaser_link" = {
 *          "label" = @Translation("teaser_link"),
 *      },
 *      "teaser_link_one" = {
 *          "label" = @Translation("teaser_link_one"),
 *      },
 *      "teaser_title" = {
 *          "label" = @Translation("teaser_title"),     
 *      },
 *      "teaser_price" = {
 *          "label" = @Translation("teaser_price"),
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserService extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_service_map.png");
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
            'fts' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    't_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/mt-service-teaser-3.jpg?itok=-TumY7Ot'
                                 alt=''>"
                        ]
                    ],
                    'teaser_day' => [
                        'text_html' => [
                            'label' => 'Jour',
                            'value' => "9"
                        ]
                    ],
                    'teaser_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "july,2019"
                        ]
                    ],
                    'teaser_color' => [
                        'text_html' => [
                            'label' => 'Coleur un',
                            'value' => "green",
                        ]
                    ],
                    'teaser_color_one' => [
                        'text_html' => [
                            'label' => 'Couleur deux',
                            'value' => "purpple"
                        ]
                    ],
                    'teaser_color_two' => [
                        'text_html' => [
                            'label' => 'Couleur trois',
                            'value' => "green"
                        ]
                    ],
                    'teaser_color_three' => [
                        'text_html' => [
                            'label' => 'Couleur quatre',
                            'value' => "purpple"
                        ]
                    ],
                    'teaser_link' => [
                        'url' => [
                            'label' => 'Lien 1',
                            'value' => [
                                'link' => "#",
                                'text' => "tristique",
                                'class' => "link-label"
                            ]
                        ]
                    ],
                    'teaser_link_one' => [
                        'url' => [
                            'label' => 'Lien 2',
                            'value' => [
                                'link' => "#",
                                'text' => "vitae",
                                'class' => "link-label"
                            ]
                        ]
                    ],
                    'teaser_title' => [
                        'url' => [
                            'label' => 'Titre',
                            'value' => [
                                'link' => "#",
                                'text' => "First Service",
                                'class' => "node-title"
                            ]
                        ]
                    ],
                    'teaser_price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => "$29.00"
                        ]
                    ]
                ]
            ]
        ];
    } 

}