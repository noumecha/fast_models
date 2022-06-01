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
 *      "btn_promoted" = {
 *          "label" = @Translation("btn_promoted"),     
 *      },
 *      "tag_btn_list" = {
 *          "label" = @Translation("tag_btn_list"),     
 *      },
 *      "blog_teaser_price" = {
 *          "label" = @Translation("blog_teaser_price"),     
 *      },
 *      "blog_teaser_title" = {
 *          "label" = @Translation("blog_teaser_title"),     
 *      },
 *      "blog_teaser_desc" = {
 *          "label" = @Translation("blog_teaser_desc"),     
 *      },
 *      "info_date" = {
 *          "label" = @Translation("info_date"),     
 *      },
 *      "info_author" = {
 *          "label" = @Translation("info_author"),
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
        $build["tag_show"]["fee1312f-1da6-4047-90b3-33bd04291165"]["content"]["#theme"] = "layoutfield_f_news_blog_teaser";
        //dump($build);
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
                    'btn_promoted' => [
                        'text_html' => [
                            'label' => 'Lien promoted',
                            'value' => "promoted"
                        ]
                    ],
                    'tag_btn_list' => [
                        'text_html' => [
                            'label' => 'list tags',
                            'value' => '<div class="blog-btn ">
                            <a href="#" class="link-btn">Sports</a>
                        </div>
                        <div class="blog-btn ">
                            <a href="#" class="link-btn">Lifestyle</a>
                        </div>'
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
                    'info_date' => [
                        'text_html' => [
                            'label' => '',
                            'value' => "MON, 05/04/2020 - 20:17"
                        ]
                    ],
                    'info_author' => [
                        'text_html' => [
                            'label' => 'info author',
                            'value' => "admin2"
                        ]
                    ],
                    'blog_teaser_desc' => [
                        'text_html' => [
                            'label' => 'bloc description',
                            'value' => " A tellus risus dis. Orci sagittis sociosqu senectus est facilisis est facilisis neque rutrum"
                        ]
                    ]
                ]
            ]
        ];
    }

}