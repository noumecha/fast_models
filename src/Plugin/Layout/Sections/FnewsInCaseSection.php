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
 *      "text_link" = {
 *          "label" = @Translation("text_link"),     
 *      },
 *      "text_link_one" = {
 *          "label" = @Translation("text_link_one")
 *      },
 *      "text_link_two" = {
 *          "label" = @Translation("text_link_two"),     
 *      },
 *      "text_link_three" = {
 *          "label" = @Translation("text_link_three"),     
 *      },
 *      "text_link_four" = {
 *          "label" = @Translation("text_link_four"),
 *      },
 *      "text_link_five" = {
 *          "label" = @Translation("text_link_five"),     
 *      },
 *      "image_bg" = {
 *          "label" = @Translation("image_bg"),     
 *      },
 *      "image_bg_one" = {
 *          "label" = @Translation("image_bg_one"),     
 *      },
 *      "image_bg_two" = {
 *          "label" = @Translation("image_bg_two"),     
 *      },
 *      "image_bg_three" = {
 *          "label" = @Translation("image_bg_three"),     
 *      },
 *      "image_bg_four" = {
 *          "label" = @Translation("image_bg_four"),     
 *      },
 *      "image_bg_five" = {
 *          "label" = @Translation("image_bg_five"),     
 *      },
 *      "date_link" = {
 *          "label" = @Translation("date"),
 *      },
 *      "date_link_one" = {
 *          "label" = @Translation("date_link_one"),     
 *      },
 *      "date_link_two" = {
 *          "label" = @Translation("date_link_two"),     
 *      },
 *      "date_link_three" = {
 *          "label" = @Translation("date_link_three"),     
 *      },
 *      "date_link_four" = {
 *          "label" = @Translation("date_link_four"),     
 *      },
 *      "date_link_five" = {
 *          "label" = @Translation("date_link_five"),     
 *      },
 *      "author" = {
 *          "label" = @Translation("author"),     
 *      },
 *      "author_one" = {
 *          "label" = @Translation("author_one"),
 *      },
 *      "author_two" = {
 *          "label" = @Translation("author_two"),     
 *      },
 *      "author_three" = {
 *          "label" = @Translation("author_three"),     
 *      },
 *      "author_four" = {
 *          "label" = @Translation("author_four"),
 *      },
 *      "author_five" = {
 *          "label" = @Translation("author_five"),     
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
                    'image_bg' => [
                        'text_html' => [
                            'label' => 'bg image',
                            'value' => "<img class='bloc-img__img '
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2020-05/mt-post-18.jpg?itok=GSguAV2f'
                                        alt=''>"
                        ]
                    ],
                    'text_link' => [
                        'text_html' => [
                            'label' => 'paragraphe',
                            'value' => "Eighteenth Post ImageHere’s what happened to the stock market"
                        ]
                    ],
                    'date_link' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "May 04, 2020 / Finance"
                        ]
                    ],
                    'author' => [
                        'text_html' => [
                            'label' => 'auteur',
                            'value' => "admin"
                        ]
                    ]
                ]
            ],
            'in_case_one' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu one',
                    'loader' => 'static',
                ],
                'fields' => [
                    'image_bg_one' => [
                        'text_html' => [
                            'label' => 'bg image',
                            'value' => "<img class='bloc-img__img '
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2020-05/mt-post-17.jpg?itok=C1sohboM'
                                        alt=''>"
                        ]
                    ],
                    'text_link_one' => [
                        'text_html' => [
                            'label' => 'paragraphe',
                            'value' => "Eighteenth Post Image Here’s what happened to the stock market"
                        ]
                    ],
                    'date_link_one' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "May 04, 2020 / Finance"
                        ]
                    ],
                    'author_one' => [
                        'text_html' => [
                            'label' => 'auteur',
                            'value' => "admin"
                        ]
                    ]
                ]
            ],
            'in_case_two' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu two',
                    'loader' => 'static',
                ],
                'fields' => [
                    'image_bg_two' => [
                        'text_html' => [
                            'label' => 'bg image',
                            'value' => "<img class='bloc-img__img '
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2020-05/mt-post-16.jpg?itok=XO2qrnIL'
                                        alt=''>"
                        ]
                    ],
                    'text_link_two' => [
                        'text_html' => [
                            'label' => 'paragraphe',
                            'value' => "Eighteenth Post Image Here’s what happened to the stock market"
                        ]
                    ],
                    'date_link_two' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "May 04, 2020 / Finance"
                        ]
                    ],
                    'author_two' => [
                        'text_html' => [
                            'label' => 'auteur',
                            'value' => "admin"
                        ]
                    ]
                ]
            ],
            'in_case_three' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu three',
                    'loader' => 'static',
                ],
                'fields' => [
                    'image_bg_three' => [
                        'text_html' => [
                            'label' => 'bg image',
                            'value' => "<img class='bloc-img__img '
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2020-04/mt-post-15.jpg?itok=Gi9N0xkj'
                                        alt=''>"
                        ]
                    ],
                    'text_link_three' => [
                        'text_html' => [
                            'label' => 'paragraphe',
                            'value' => "Eighteenth Post Image Here’s what happened to the stock market"
                        ]
                    ],
                    'date_link_three' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "May 04, 2020 / Finance"
                        ]
                    ],
                    'author_three' => [
                        'text_html' => [
                            'label' => 'auteur',
                            'value' => "admin"
                        ]
                    ]
                ]
            ],
            'in_case_four' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu four',
                    'loader' => 'static',
                ],
                'fields' => [
                    'image_bg_four' => [
                        'text_html' => [
                            'label' => 'bg image',
                            'value' => "<img class='bloc-img__img '
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2020-04/mt-post-14.jpg?itok=s8bXJYtM'
                                        alt=''>"
                        ]
                    ],
                    'text_link_four' => [
                        'text_html' => [
                            'label' => 'paragraphe',
                            'value' => "Eighteenth Post Image Here’s what happened to the stock market"
                        ]
                    ],
                    'date_link_four' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "May 04, 2020 / Finance"
                        ]
                    ],
                    'author_four' => [
                        'text_html' => [
                            'label' => 'auteur',
                            'value' => "admin"
                        ]
                    ]
                ]
            ],
            'in_case_five' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu five',
                    'loader' => 'static',
                ],
                'fields' => [
                    'image_bg_five' => [
                        'text_html' => [
                            'label' => 'bg image',
                            'value' => "<img class='bloc-img__img '
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2020-04/mt-post-13.jpg?itok=bIEoGEAj'
                                        alt=''>"
                        ]
                    ],
                    'text_link_five' => [
                        'text_html' => [
                            'label' => 'paragraphe',
                            'value' => "Eighteenth Post Image Here’s what happened to the stock market"
                        ]
                    ],
                    'date_link_five' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "May 04, 2020 / Finance"
                        ]
                    ],
                    'author_five' => [
                        'text_html' => [
                            'label' => 'auteur',
                            'value' => "admin"
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