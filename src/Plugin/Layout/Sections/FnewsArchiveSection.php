<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;

/**
 * 
 * Fnews Archive Sections
 * 
 * @Layout (
 *  id = "f_news_archive",
 *  label = @Translation("f_news_archive"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_archive",
 *  library = "fast_models/f_news_archive",
 *  default_region = "content",
 *  regions = {
 *      "s_title" = {
 *          "label" = @Translation("s_title"),
 *      },
 *      "s_bar" = {
 *          "label" = @Translation("s_bar"),
 *      },
 *      "left_link" = {
 *          "label" = @Translation("left_link"),
 *      },
 *      "left_link_one" = {
 *          "label" = @Translation("left_link_one"),
 *      },
 *      "left_link_two" = {
 *          "label" = @Translation("left_link_two"),
 *      },
 *      "left_link_three" = {
 *          "label" = @Translation("left_link_three"),
 *      },
 *      "left_link_four" = {
 *          "label" = @Translation("left_link_four"),
 *      },
 *      "left_link_five" = {
 *          "label" = @Translation("left_link_five"),
 *      },
 *      "left_link_six" = {
 *          "label" = @Translation("left_link_six"),
 *      },
 *      "search_link" = {
 *          "label" = @Translation("search_link"),     
 *      },
 *      "search_link_one" = {
 *          "label" = @Translation("search_link_one"),     
 *      },
 *      "search_link_two" = {
 *          "label" = @Translation("search_link_two"),     
 *      },
 *      "search_link_three" = {
 *          "label" = @Translation("search_link_three"),     
 *      },
 *      "search_link_four" = {
 *          "label" = @Translation("search_link_four"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsArchiveSection extends FormatageModels
{
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) 
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_archive_map.png");
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
            'left_content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu left',
                    'loader' => 'static'
                ],
                'fields' => [
                    "left_link" => [
                        'text_html' => [
                            'label' => 'left title 1',
                            'value' => "<a href='#'>mars 2022</a><span>(1)</span>"
                        ]
                    ],
                    "left_link_one" => [
                        'text_html' => [
                            'label' => 'left title 2',
                            'value' => "<a href='#'>april 2020</a><span>(10)</span>"
                        ]
                    ],
                    "left_link_two" => [
                        'text_html' => [
                            'label' => 'left title 3',
                            'value' => "<a href='#'>home 2015</a><span>(8)</span>"
                        ]
                    ],
                    "left_link_three" => [
                        'text_html' => [
                            'label' => 'left title 4',
                            'value' => "<a href='#'>août 2019</a><span>(3)</span>"
                        ]
                    ],
                    "left_link_four" => [
                        'text_html' => [
                            'label' => 'left title 5',
                            'value' => "<a href='#'>janvier 2022</a><span>(12)</span>"
                        ]
                    ],
                    "left_link_five" => [
                        'text_html' => [
                            'label' => 'left title 6',
                            'value' => "<a href='#'>june 2023</a><span>(3)</span>"
                        ]
                    ],
                    "left_link_six" => [
                        'text_html' => [
                            'label' => 'left title 7',
                            'value' => "<a href='#'>october 2021</a><span>(17)</span>"
                        ]
                    ]
                ]
            ],
            'right_content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu right',
                    'loader' => 'static'
                ],
                'fields' => [
                    "s_title" => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<h5 class='afc-search__title'>Search</h5>"
                        ]
                    ],
                    "s_bar" => [
                        'text_html' => [
                            'label' => 'Search bar',
                            'value' => "<input type='text' placeholder='Search...' class='form-control'>"
                        ]
                    ],
                    'search_link' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "<a href='#'>home</a>"
                        ]
                    ],
                    'search_link_one' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => "<a href='#'>archive</a>"
                        ]
                    ],
                    'search_link_two' => [
                        'text_html' => [
                            'label' => 'lien 3',
                            'value' => "<a href='#'>home</a>"
                        ]
                    ],
                    'search_link_three' => [
                        'text_html' => [
                            'label' => 'lien 4',
                            'value' => "<a href='#'>posts</a>"
                        ]
                    ],
                    'search_link_four' => [
                        'text_html' => [
                            'label' => 'lien 5',
                            'value' => "<a href='#'>product</a>"
                        ]
                    ]  
                ]
            ]
        ];
    }

}