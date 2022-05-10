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
 *      "author_image" = {
 *          "label" = @Translation("author_image"),     
 *      },
 *      "author_name" = {
 *          "label" = @Translation("author_name"),
 *      },
 *      "paragraph" = {
 *          "label" = @Translation("paragraph"),
 *      },
 *      "full_image" = {
 *          "label" = @Translation("full_image"),     
 *      },
 *      "paragraph_one" = {
 *          "label" = @Translation("paragraph_one"),
 *      },
 *      "text_quote" = {
 *          "label" = @Translation("text_quote"),     
 *      },
 *      "full_image_video" = {
 *          "label" = @Translation("full_image_video"),
 *      },
 *      "single_title" = {
 *          "label" = @Translation("single_title"),
 *      },
 *      "paragraph_two" = {
 *          "label" = @Translation("paragraph_two"),     
 *      },
 *      "tag_button" = {
 *          "label" = @Translation("tag_button"),     
 *      },
 *      "tag_button_one" = {
 *          "label" = @Translation("tag_button_one"),     
 *      }
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_single_showcase_map.png");
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
                    'author_image' => [
                        'text_html' => [
                            'label' => 'image auteur',
                            'value' => "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzrtaXGkXhkLIV4Du-Lg0JPJ5I84RQb8RvIA&usqp=CAU'
                                        alt='' class='ss-author__img'>"
                        ]
                    ],
                    'author_name' => [
                        'text_html' => [
                            'label' => 'Nom auteur',
                            'value' => "admin"
                        ]
                    ],
                    'paragraph' => [
                        'text_html' => [
                            'label' => 'Paragraphe un',
                            'value' => "Phosfluorescently e-enable adaptive synergy for strategic quality vectors.
                                        Continually
                                        transform fully tested expertise
                                        with competitive technologies. Appropriately communicate adaptive imperatives rather than value-added."
                        ]
                    ],
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
                    'text_quote' => [
                        'text_html' => [
                            'label' => 'Quote',
                            'value' => 'Completely parallel task market positioning interfaces through visionary niche
                                        markets,
                                        proactively
                                        incentivize sticky quality vectors before future-proof internal or "organic" sources.'
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
                    'single_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "Showcase specifics"
                        ]
                    ],
                    'paragraph_two' => [
                        'text_html' => [
                            'label' => 'Paragraphe trois',
                            'value' => "Compellingly <a href='#'>recaptiualize enterprise-wide web-readiness</a>
                                        for
                                        robust strategic theme areas. Synergistically
                                        reconceptualize user-centric functionalities via revolutionary strategic theme areas. Progressively
                                        transition
                                        out-of-the-box leadership skills rather than top-line and <a href='#'>this is a hover link.</a>"
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
                    ]
                ]
            ]
        ];  
    }

}