<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fnews Single Showcase
 * 
 * @Layout (
 *  id = "f_news_single_showcase",
 *  label = @Translation("f_news_single_showcase"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_single_showcase",
 *  library = "fast_models/f_news_single_showcase",
 *  default_region = "content",
 *  regions = {
 *      "full_image" = {
 *          "label" = @Translation("full_image"),     
 *      },
 *      "paragraph_one" = {
 *          "label" = @Translation("paragraph_one"),
 *      },
 *      "full_image_video" = {
 *          "label" = @Translation("full_image_video"),
 *      },
 *      "tag_button" = {
 *          "label" = @Translation("tag_button"),     
 *      },
 *      "tag_button_one" = {
 *          "label" = @Translation("tag_button_one"),     
 *      },
 *       "sticky_author_image" = {
 *          "label" = @Translation("sticky_author_image"),
 *       },
 *       "sticky_author_role" = {
 *          "label" = @Translation("sticky_author_role"),
 *       },
 *       "sticky_author_pub" = {
 *          "label" = @Translation("sticky_author_pub"),
 *       },
 *       "sticky_author_date_one" = {
 *          "label" = @Translation("sticky_author_date_one"),
 *       },
 *       "sticky_author_update" = {
 *          "label" = @Translation("sticky_author_update"),
 *       },
 *       "sticky_author_date_two" = {
 *          "label" = @Translation("sticky_author_date_two"),
 *       },
 *       "sticky_author_number" = {
 *          "label" = @Translation("sticky_author_number"),
 *       },
 *       "sticky_author_read" = {
 *          "label" = @Translation("sticky_author_read"),
 *       },
 *       "sticky_author_status" = {
 *          "label" = @Translation("sticky_author_status"),      
 *       },
 *       "sticky_author_status_one" = {
 *          "label" = @Translation("sticky_author_status_one"),
 *       },
 *       "sticky_author_icon_contener" = {
 *          "label" = @Translation("sticky_author_icon_contener"),
 *       }
 *  }
 * )
 * 
 */

class FnewsSingleShowcaseSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fnews_single_showcase_map.png");
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
    public function defaultConfiguration ()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fnews_single' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'full_image' => [
                        'text_html' => [
                            'label' => 'Image un',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/mt-showcase-5.jpg?itok=MkgEbZN4'
                                        alt=''>"
                        ]
                    ],
                    'paragraph_one' => [
                        'text_html' => [
                            'label' => 'Paragraphe deux',
                            'value' => "Phosfluorescently e-enable adaptive synergy for strategic quality vectors.
                                        Continually
                                        transform fully tested expertise
                                        with competitive technologies. Appropriately communicate adaptive imperatives rather than value-added
                                        potentialities.
                                        Conveniently harness frictionless outsourcing whereas <a href='#'>state of the art interfaces</a>.
                                        Quickly
                                        enable prospective technology
                                        rather than open-source technologies."
                        ]
                    ],
                    'full_image_video' => [
                        'text_html' => [
                            'label' => 'Video image',
                            'value' => "<a href='https://www.youtube.com/watch?v=ViuDsy7yb8M' class='video-sup'>
                                            <img class='card-img'
                                                src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/video_thumbnails/ViuDsy7yb8M.jpg?itok=NZNg1pjc'
                                            alt=''>
                                        </a>"
                        ]
                    ],
                    'tag_button' => [
                        'text_html' => [
                            'label' => 'Boutton un',
                            'value' => "<span href='#' class='link-btn'>tag 1</span>"
                        ]
                    ],
                    'tag_button_one' => [
                        'text_html' => [
                            'label' => 'Boutton deux',
                            'value' => "<span href='#' class='link-btn'>tag 1</span>"
                        ]
                    ],
                    'sticky_author_image' => [
                        'text_html' => [
                            'label' => 'image auteur',
                            'value' => '<a href="#"><img
                                        src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/thumbnail/public/pictures/2019-08/avatar_0.jpg?itok=QV437nlh"
                                        alt="" class=""></a>'
                        ]
                    ],
                    'sticky_author_role' => [
                        'text_html' => [
                            'label' => 'role auteur',
                            'value' => '<div class="author-by">by</div> admin'
                        ]
                    ],
                    'sticky_author_pub' => [
                        'text_html' => [
                            'label' => 'publied mode',
                            'value' => 'Published'
                        ]
                    ],
                    'sticky_author_date_one' => [
                        'text_html' => [
                            'label' => 'date pub',
                            'value' => '1 year ago'
                        ]
                    ],
                    'sticky_author_update' => [
                        'text_html' => [
                            'label' => 'Update text',
                            'value' => 'Last Updated'
                        ]
                    ],
                    'sticky_author_date_two' => [
                        'text_html' => [
                            'label' => 'Update date',
                            'value' => '1 year ago'
                        ]
                    ],
                    'sticky_author_number' => [
                        'text_html' => [
                            'label' => 'Number',
                            'value' => "1"
                        ]
                    ],
                    'sticky_author_read' => [
                        'text_html' => [
                            'label' => 'Read',
                            'value' => "min read"
                        ]
                    ],
                    'sticky_author_status' => [
                        'text_html' => [
                            'label' => 'Statut 1',
                            'value' => 'A –'
                        ]
                    ],
                    'sticky_author_status_one' => [
                        'text_html' => [
                            'label' => 'status 2',
                            'value' => 'A +'
                        ]
                    ],
                    'sticky_author_icon_contener' => [
                        'text_html' => [
                            'label' => 'Image contener',
                            'value' => '<a href="#" class="saf-social__btn">
                                            <svg>
                                                <use xlink:href="#facebook-f"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="saf-social__btn">
                                            <svg>
                                                <use xlink:href="#twitter"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="saf-social__btn">
                                            <svg>
                                                <use xlink:href="#envelope"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="saf-social__btn">
                                            <svg>
                                                <use xlink:href="#print"></use>
                                            </svg>
                                        </a>'
                        ]
                    ]
                ]
            ]
        ];  
    }

}