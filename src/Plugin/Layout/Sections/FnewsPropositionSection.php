<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;

/**
 * F_news Proposition Section 
 * 
 * @Layout (
 *  id = "f_news_proposition",
 *  label = @Translation("f_news proposition"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_proposition",
 *  library = "fast_models/f_news_proposition",
 *  default_region = "",
 *  regions = {
 *      "title_left" = {
 *          "label" = @Translation("title_left"),     
 *      },
 *      "title_right" = {
 *          "label" = @Translation("title_right"),
 *      },
 *      "small_image" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image1" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text1" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date1" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image2" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text2" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date2" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image3" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text3" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date3" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image4" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text4" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date4" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image5" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text5" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date5" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image6" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text6" = {
 *          "label" = @Translation("small_image_text"),     
 *      }
 *      "small_image_date6" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "image_right" = {
 *          "label" = @Translation("image_right"),     
 *      },
 *      "image_right_date" = {
 *          "label" = @Translation("image_right_date"),     
 *      },
 *      "image_right_text" = {
 *          "label" = @Translation("image_righ_text"),
 *      },
 *      "image_right_author" = {
 *          "label" = @Translation("image_right_author"),     
 *      },
 *      "image_right1" = {
 *          "label" = @Translation("image_right"),     
 *      },
 *      "image_right_date1" = {
 *          "label" = @Translation("image_right_date"),     
 *      },
 *      "image_right_text1" = {
 *          "label" = @Translation("image_righ_text"),
 *      },
 *      "image_right_author1" = {
 *          "label" = @Translation("image_right_author"),     
 *      },
 *      "image_right2" = {
 *          "label" = @Translation("image_right"),     
 *      },
 *      "image_right_date2" = {
 *          "label" = @Translation("image_right_date"),     
 *      },
 *      "image_right_text2" = {
 *          "label" = @Translation("image_righ_text"),
 *      },
 *      "image_right_author2" = {
 *          "label" = @Translation("image_right_author"),     
 *      },
 *      "image_right3" = {
 *          "label" = @Translation("image_right"),     
 *      },
 *      "image_right_date3" = {
 *          "label" = @Translation("image_right_date"),     
 *      },
 *      "image_right_text3" = {
 *          "label" = @Translation("image_righ_text"),
 *      },
 *      "image_right_author3" = {
 *          "label" = @Translation("image_right_author"),     
 *      },
 *      "link" = {
 *          "label" = @Translation("link"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsPropositionSection extends FormatageModels 
{
   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_proposition_map.jpg");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
   */
  public function build(array $regions) {
    
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {

      return parent::defaultConfiguration() + [
        'css' => '',
        'prop_left' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'title_left' => [
                    'text_html' => [
                        'label' => 'Titre Gauche',
                        'value' => 'Latest Post'
                    ]
                ],
                'small_image' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => "
                            <a href='#' class='link'>
                                <img height='80px'
                                     src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-18.jpg?itok=KlDfSRjU'
                                     alt='' class='post-img'>
                            </a>"
                    ]
                ],
                'small_image_text' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => "<a href='#'>Here's what happened to the stock market</a>"
                    ]
                ],
                'small_image_date' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => '<p>04 May, 2020</p>'
                    ]
                ]

            ]
        ],
        'prop_left1' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'small_image1' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => ''
                    ]
                ],
                'small_image_text1' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => ''
                    ]
                ],
                'small_image_date1' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => ''
                    ]
                ]

            ]
        ],
        'prop_left2' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'small_image2' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => ''
                    ]
                ],
                'small_image_text2' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => ''
                    ]
                ],
                'small_image_date2' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => ''
                    ]
                ]

            ]
        ],
        'prop_left3' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'small_image3' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => ''
                    ]
                ],
                'small_image_text3' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => ''
                    ]
                ],
                'small_image_date3' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => ''
                    ]
                ]

            ]
        ],
        'prop_left4' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'small_image4' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => ''
                    ]
                ],
                'small_image_text4' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => ''
                    ]
                ],
                'small_image_date4' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => ''
                    ]
                ]

            ]
        ],
        'prop_left5' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'small_image5' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => ''
                    ]
                ],
                'small_image_text5' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => ''
                    ]
                ],
                'small_image_date5' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => ''
                    ]
                ]

            ]
        ],
        'prop_left6' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'small_image6' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => ''
                    ]
                ],
                'small_image_text6' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => ''
                    ]
                ],
                'small_image_date6' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => ''
                    ]
                ]

            ]
        ],
        'prop_right' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'title_right' => [
                    'text_html' => [
                        'label' => 'Titre Droite',
                        'value' => ''
                    ]
                ],
                'image_right' => [
                    'text_html' => [
                        'label' => 'image right',
                        'value' => ''
                    ]
                ],
                'image_right_date' => [
                    'text_html' => [
                        'label' => 'image right date',
                        'value' => ''
                    ]
                ],
                'image_right_text' => [
                    'text_html' => [
                        'label' => 'image right text',
                        'value' => ''
                    ]
                ],
                'image_right_author' => [
                    'text_html' => [
                        'label' => 'image right author',
                        'value' => ''
                    ]
                ]
            ]
        ],
        'prop_right1' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'image_right1' => [
                    'text_html' => [
                        'label' => 'image right',
                        'value' => ''
                    ]
                ],
                'image_right_date1' => [
                    'text_html' => [
                        'label' => 'image right date',
                        'value' => ''
                    ]
                ],
                'image_right_text1' => [
                    'text_html' => [
                        'label' => 'image right text',
                        'value' => ''
                    ]
                ],
                'image_right_author1' => [
                    'text_html' => [
                        'label' => 'image right author',
                        'value' => ''
                    ]
                ]
            ]
        ],
        'prop_right2' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'image_right2' => [
                    'text_html' => [
                        'label' => 'image right',
                        'value' => ''
                    ]
                ],
                'image_right_date2' => [
                    'text_html' => [
                        'label' => 'image right date',
                        'value' => ''
                    ]
                ],
                'image_right_text2' => [
                    'text_html' => [
                        'label' => 'image right text',
                        'value' => ''
                    ]
                ],
                'image_right_author2' => [
                    'text_html' => [
                        'label' => 'image right author',
                        'value' => ''
                    ]
                ]
            ]
        ],
        'prop_right3' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'image_right3' => [
                    'text_html' => [
                        'label' => 'image right',
                        'value' => ''
                    ]
                ],
                'image_right_date3' => [
                    'text_html' => [
                        'label' => 'image right date',
                        'value' => ''
                    ]
                ],
                'image_right_text3' => [
                    'text_html' => [
                        'label' => 'image right text',
                        'value' => ''
                    ]
                ],
                'image_right_author3' => [
                    'text_html' => [
                        'label' => 'image right author',
                        'value' => ''
                    ]
                ],
                'link' => [
                    'url' => [
                        'label' => 'link',
                        'value' => [
                            "link" => "#",
                            "text" => "More",
                            "class" => ""
                        ]
                    ]
                ]
            ]
        ],

      ];

  }

}