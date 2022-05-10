<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
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
 *      "teaser_image" = {
 *          "label" = @Translation("teaser_image"),
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'formatage_models') . "/icones/teasers/f_news_teaser_service.png");
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
                    'teaser_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ""
                        ]
                    ],
                    'teaser_day' => [
                        'text_html' => [
                            'label' => 'Jour',
                            'value' => ""
                        ]
                    ],
                    'teaser_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => ""
                        ]
                    ],
                    'teaser_color' => [
                        'text_html' => [
                            'label' => 'Coleur un',
                            'value' => "",
                        ]
                    ],
                    'teaser_color_one' => [
                        'text_html' => [
                            'label' => 'Couleur deux',
                            'value' => ""
                        ]
                    ],
                    'teaser_color_two' => [
                        'text_html' => [
                            'label' => 'Couleur trois',
                            'value' => ""
                        ]
                    ],
                    'teaser_color_three' => [
                        'text_html' => [
                            'label' => 'Couleur quatre',
                            'value' => ""
                        ]
                    ],
                    'teaser_link' => [
                        'text_html' => [
                            'label' => 'Lien 1',
                            'value' => ""
                        ]
                    ],
                    'teaser_link_one' => [
                        'text_html' => [
                            'label' => 'Lien 2',
                            'value' => ""
                        ]
                    ],
                    'teaser_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => ""
                        ]
                    ],
                    'teaser_price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    } 

}