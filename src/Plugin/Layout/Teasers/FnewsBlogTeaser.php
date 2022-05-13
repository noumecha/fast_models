<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Blog Teasers
 * 
 * @Layout (
 *  id = "f_news_blog_teaser",
 *  label = @Translation("f_news_blog_teaser"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_blog_teaser",
 *  library = "fast_models/f_news_blog_teaser",
 *  default_region = "content",
 *  regions = {
 *      "blog_teaser_image" = {
 *          "label" = @Translation("blog_teaser_image"),
 *      },
 *      "blog_teaser_day" = {
 *          "label" = @Translation("blog_teaser_day"),
 *      },
 *      "blog_teaser_date" = {
 *          "label" = @Translation("blog_teaser_date"),     
 *      },
 *      "blog_teaser_btn_link" = {
 *          "label" = @Translation("blog_teaser_btn_link"),     
 *      },
 *      "blog_teaser_btn_link_one" = {
 *          "label" = @Translation("blog_teaser_btn_link_one"),     
 *      },
 *      "blog_teaser_btn_link_two" = {
 *          "label" = @Translation("blog_teaser_btn_link_two"),     
 *      },
 *      "blog_teaser_price" = {
 *          "label" = @Translation("blog_teaser_price"),     
 *      },
 *      "blog_teaser_title" = {
 *          "label" = @Translation("blog_teaser_title"),     
 *      },
 *      "blog_teaser_info" = {
 *          "label" = @Translation("blog_teaser_info"),     
 *      },
 *      "blog_teaser_preview" = {
 *          "label" = @Translation("blog_teaser_preview"),
 *      },
 *      "blog_teaser_link" = {
 *          "label" = @Translation("blog_teaser_link"),     
 *      },
 *      "blog_teaser_paragraphe" = {
 *          "label" = @Translation("blog_teaser_paragraphe"),     
 *      },
 *      "blog_teaser_link_two" = {
 *          "label" = @Translation("blog_teaser_link_two"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsBlogTeaser extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_blog_teaser_map.png");
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
            'fnews_blog_teaser' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'blog_teaser_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img class='card-img'
                                 src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-18.jpg?itok=UdwkXLYg'
                                 alt=''>"
                        ]
                    ],
                    'blog_teaser_day' => [
                        'text_html' => [
                            'label' => 'Jour',
                            'value' => "9"
                        ]
                    ],
                    'blog_teaser_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "july,2019"
                        ]
                    ],
                    'blog_teaser_btn_link' => [
                        'url' => [
                            'label' => 'Lien 1',
                            'value' => [
                                'link' => "#",
                                'text' => "promoted",
                                'class' => "link-btn"
                            ]
                        ]
                    ],
                    'blog_teaser_btn_link_one' => [
                        'url' => [
                            'label' => 'Lien 2',
                            'value' => [
                                'link' => "#",
                                'text' => "Sports",
                                'class' => "link-btn"
                            ]
                        ]
                    ],
                    'blog_teaser_btn_link_two' => [
                        'url' => [
                            'label' => 'Lien 3',
                            'value' => [
                                'link' => "#",
                                'text' => "Sports",
                                'class' => "link-btn"
                            ]
                        ]
                    ],
                    'blog_teaser_price' => [
                        'text_html' => [
                            'label' => 'Prix',
                            'value' => "$29.00"
                        ]
                    ],
                    'blog_teaser_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<a class='link-title' href=''>Here’s what happened to the stock market</a>"
                        ]
                    ],
                    'blog_teaser_info' => [
                        'text_html' => [
                            'label' => '',
                            'value' => "<p>
                                            MON, 05/04/2020 - 20:17 / BY ADMIN
                                        </p>"
                        ]
                    ],
                    'blog_teaser_preview' => [
                        'text_html' => [
                            'label' => 'Preview',
                            'value' => "<p>
                                            A tellus risus dis. Orci sagittis sociosqu senectus est facilisis est facilisis neque rutrum
                                            dapibus!
                                        </p>"
                        ]
                    ],
                    'blog_teaser_link' => [
                        'url' => [
                            'label' => 'Lien bas 1',
                            'value' => [
                                'link' => "#",
                                'text' => "Read More",
                                'class' => "read-more-btn"
                            ]
                        ]
                    ],
                    'blog_teaser_paragraphe' => [
                        'text_html' => [
                            'label' => 'Paragaphe bas',
                            'value' => "<a href='#' class='log-link'>Log In</a> to post comments"
                        ]
                    ],
                    'blog_teaser_link_two' => [
                        'url' => [
                            'label' => 'Lien bas 2',
                            'value' => [
                                'link' => "#",
                                'text' => "1 comment",
                                'class' => "link-comment"
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

}