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
 *  default_region = "content",
 *  regions = {
 *      "title_left" = {
 *          "label" = @Translation("title_left"),     
 *      },
 *      "title_r" = {
 *          "label" = @Translation("title_r"),
 *      },
 *      "small_image" = {
 *          "label" = @Translation("small_image"),     
 *      },
 *      "small_image_text" = {
 *          "label" = @Translation("small_image_text"),     
 *      },
 *      "small_image_date" = {
 *          "label" = @Translation("small_image_date"),     
 *      },
 *      "small_image_one" = {
 *          "label" = @Translation("small_image_one"),     
 *      },
 *      "small_image_text_one" = {
 *          "label" = @Translation("small_image_text_one"),     
 *      },
 *      "small_image_date_one" = {
 *          "label" = @Translation("small_image_date_one"),     
 *      },
 *      "small_image_two" = {
 *          "label" = @Translation("small_image_two"),     
 *      },
 *      "small_image_text_two" = {
 *          "label" = @Translation("small_image_text_two"),     
 *      },
 *      "small_image_date_two" = {
 *          "label" = @Translation("small_image_date_two"),     
 *      },
 *      "small_image_three" = {
 *          "label" = @Translation("small_image_three"),     
 *      },
 *      "small_image_text_three" = {
 *          "label" = @Translation("small_image_text_three"),     
 *      },
 *      "small_image_date_three" = {
 *          "label" = @Translation("small_image_date_three"),     
 *      },
 *      "small_image_four" = {
 *          "label" = @Translation("small_image_four"),     
 *      },
 *      "small_image_text_four" = {
 *          "label" = @Translation("small_image_text_four"),     
 *      },
 *      "small_image_date_four" = {
 *          "label" = @Translation("small_image_date_four"),     
 *      },
 *      "small_image_five" = {
 *          "label" = @Translation("small_image_five"),     
 *      },
 *      "small_image_text_five" = {
 *          "label" = @Translation("small_image_text_five"),     
 *      },
 *      "small_image_date_five" = {
 *          "label" = @Translation("small_image_date_five"),     
 *      },
 *      "small_image_six" = {
 *          "label" = @Translation("small_image_six"),     
 *      },
 *      "small_image_text_six" = {
 *          "label" = @Translation("small_image_text_six"),     
 *      },
 *      "small_image_date_six" = {
 *          "label" = @Translation("small_image_date_six"),     
 *      },
 *      "image_r" = {
 *          "label" = @Translation("image_r"),     
 *      },
 *      "image_r_date" = {
 *          "label" = @Translation("image_r_date"),     
 *      },
 *      "image_r_text" = {
 *          "label" = @Translation("image_r_text"),
 *      },
 *      "image_r_author" = {
 *          "label" = @Translation("image_r_author"),     
 *      },
 *      "image_r_one" = {
 *          "label" = @Translation("image_r_one"),     
 *      },
 *      "image_r_date_one" = {
 *          "label" = @Translation("image_r_date_one"),     
 *      },
 *      "image_r_text_one" = {
 *          "label" = @Translation("image_r_text_one"),
 *      },
 *      "image_r_author_one" = {
 *          "label" = @Translation("image_r_author_one"),     
 *      },
 *      "image_r_two" = {
 *          "label" = @Translation("image_r_two"),     
 *      },
 *      "image_r_date_two" = {
 *          "label" = @Translation("image_r_date_two"),     
 *      },
 *      "image_r_text_two" = {
 *          "label" = @Translation("image_r_text_two"),
 *      },
 *      "image_r_author_two" = {
 *          "label" = @Translation("image_r_author_two"),     
 *      },
 *      "image_r_three" = {
 *          "label" = @Translation("image_r_three"),     
 *      },
 *      "image_r_date_three" = {
 *          "label" = @Translation("image_r_date_three"),     
 *      },
 *      "image_r_text_three" = {
 *          "label" = @Translation("image_r_text_three"),
 *      },
 *      "image_r_author_three" = {
 *          "label" = @Translation("image_r_author_three"),     
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
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_proposition_map.png");
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
                        'value' => "<p>
                                        Latest Posts
                                    </p>"
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
                'small_image_one' => [
                    'text_html' => [
                        'label' => 'small image one',
                        'value' => "
                            <a href='#' class='link'>
                                <img height='80px'
                                     src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-17.jpg?itok=SOsCQMtS'
                                     alt='' class='post-img'>
                            </a>"
                    ]
                ],
                'small_image_text_one' => [
                    'text_html' => [
                        'label' => 'small image text one',
                        'value' => "<a href='#'>Stocks making the biggest moves midday</a>"
                    ]
                ],
                'small_image_date_one' => [
                    'text_html' => [
                        'label' => 'small image date one',
                        'value' => "<p>
                                    04 May, 2020
                                    </p>"
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
                'small_image_two' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => "<a href='#' class='link'>
                                    <img height='80px'
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-16.jpg?itok=ZiSiWhGA'
                                        alt='' class='post-img'>
                                </a>"
                    ]
                ],
                'small_image_text_two' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => "<a href='#'>simple steps to spring clean your finances</a>"
                    ]
                ],
                'small_image_date_two' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => "<p>
                                        04 May, 2020
                                    </p>"
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
                'small_image_three' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => "<a href='#' class='link'>
                                    <img height='80px'
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-15.jpg?itok=auXz3mfG'
                                        alt='' class='post-img'>
                                </a>"
                    ]
                ],
                'small_image_text_three' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => "<a href='#'>habits every runner should have in their routine</a>"
                    ]
                ],
                'small_image_date_three' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => "<p>
                                        04 May, 2020
                                    </p>"
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
                'small_image_four' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => "<a href='#' class='link'>
                                    <img height='80px'
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-14.jpg?itok=HHoDHXj3'
                                        alt='' class='post-img'>
                                </a>"
                    ]
                ],
                'small_image_text_four' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => "<a href='#'>Stylish office chairs</a>"
                    ]
                ],
                'small_image_date_four' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => "<p>
                                        04 May, 2020
                                    </p>"
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
                'small_image_five' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => "<a href='#' class='link'>
                                    <img height='80px'
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-13.jpg?itok=6iRdfWyk'
                                        alt='' class='post-img'>
                                    </a>"
                    ]
                ],
                'small_image_text_five' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => "<a href='#'>Things that can help to boost your immune system</a>"
                    ]
                ],
                'small_image_date_five' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => "<p>
                                        04 May, 2020
                                    </p>"
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
                'small_image_six' => [
                    'text_html' => [
                        'label' => 'small image',
                        'value' => "<a href='#' class='link'>
                                    <img height='80px'
                                        src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-12.jpg?itok=8FzLk5k9'
                                        alt='' class='post-img'>
                                </a>"
                    ]
                ],
                'small_image_text_six' => [
                    'text_html' => [
                        'label' => 'small image text',
                        'value' => "<a href='#'>What to expect when calling a mental health hotline</a>"
                    ]
                ],
                'small_image_date_six' => [
                    'text_html' => [
                        'label' => 'small image date',
                        'value' => "<p>
                                        04 May, 2020
                                    </p>"
                    ]
                ]

            ]
        ],
        'prop_right' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu Droit',
                'loader' => 'static'
            ],
            'fields' => [
                'title_r' => [
                    'text_html' => [
                        'label' => 'Titre Droit',
                        'value' => "<p>
                                        Most Read
                                    </p>"
                    ]
                ],
                'image_r' => [
                    'text_html' => [
                        'label' => 'image r',
                        'value' => "<a href='#' class='img-sup'><img class='card-img'
                                            src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-18.jpg?itok=UdwkXLYg'
                                            alt=''></a>"
                    ]
                ],
                'image_r_date' => [
                    'text_html' => [
                        'label' => 'image r date',
                        'value' => "<p>
                                        Apr 30, 2020 / Health
                                    </p>"
                    ]
                ],
                'image_r_text' => [
                    'text_html' => [
                        'label' => 'image r text',
                        'value' => "<a href=''>Things that can help to boost your immune system</a>"
                    ]
                ],
                'image_r_author' => [
                    'text_html' => [
                        'label' => 'image r author',
                        'value' => "<p>Admin</p>"
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
                'image_r_one' => [
                    'text_html' => [
                        'label' => 'image r one',
                        'value' => "<a href='#' class='img-sup'><img class='card-img'
                                            src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-17.jpg?itok=x-SjIpHf'
                                            alt=''></a>"
                    ]
                ],
                'image_r_date_one' => [
                    'text_html' => [
                        'label' => 'image r date one',
                        'value' => "<p>
                                        Apr 30, 2020 / Health
                                    </p>"
                    ]
                ],
                'image_r_text_one' => [
                    'text_html' => [
                        'label' => 'image r text one',
                        'value' => "<a href=''>Things that can help to boost your immune system</a>"
                    ]
                ],
                'image_r_author_one' => [
                    'text_html' => [
                        'label' => 'image r author one',
                        'value' => "<p>Admin</p>"
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
                'image_r_two' => [
                    'text_html' => [
                        'label' => 'image r two',
                        'value' => "<a href='#' class='img-sup'><img class='card-img'
                                            src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-16.jpg?itok=VzOi5lt_'
                                            alt=''></a>"
                    ]
                ],
                'image_r_date_two' => [
                    'text_html' => [
                        'label' => 'image r date two',
                        'value' => "<p>
                                        Apr 30, 2020 / Health
                                    </p>"
                    ]
                ],
                'image_r_text_two' => [
                    'text_html' => [
                        'label' => 'image r text two',
                        'value' => "<a href=''>Things that can help to boost your immune system</a>"
                    ]
                ],
                'image_r_author_two' => [
                    'text_html' => [
                        'label' => 'image r author two',
                        'value' => "<p>Admin</p>"
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
                'image_r_three' => [
                    'text_html' => [
                        'label' => 'image right three',
                        'value' => "<a href='#' class='img-sup'><img class='card-img'
                                            src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-04/mt-post-15.jpg?itok=x6E9VFYp'
                                            alt=''></a>"
                    ]
                ],
                'image_r_date_three' => [
                    'text_html' => [
                        'label' => 'image right date three',
                        'value' => "<p>
                                        Apr 30, 2020 / Health
                                    </p>"
                    ]
                ],
                'image_r_text_three' => [
                    'text_html' => [
                        'label' => 'image right text three',
                        'value' => "<a href=''>Things that can help to boost your immune system</a>"
                    ]
                ],
                'image_r_author_three' => [
                    'text_html' => [
                        'label' => 'image right author three',
                        'value' => "<p>Admin</p>"
                    ]
                ],
                'link' => [
                    'url' => [
                        'label' => 'link',
                        'value' => [
                            "link" => "#",
                            "text" => "More",
                            "class" => "link"
                        ]
                    ]
                ]
            ]
        ],

      ];

  }

}