<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fnews hero bog Section 
 * 
 * @Layout (
 *  id = "f_news_hero_blog",
 *  label = @Translation("f_news_hero_blog"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_hero_blog",
 *  library = "fast_models/f_news_hero_blog",
 *  default_region = "content",
 *  regions = {
 *      "hero_link" = {
 *          "label" = @Translation("hero_link"),
 *      }, 
 *      "hero_link_two" = {
 *          "label" = @Translation("hero_link_two"),
 *      },
 *      "hero_simple_title" = {
 *          "label" = @Translation("hero_simple_title"),
 *      },
 *      "hero_title" = {
 *          "label" = @Translation("hero_title"),    
 *      },
 *      "hero_sublink" = {
 *          "label" = @Translation("hero_sublink"),     
 *      },
 *      "hero_date" = {
 *          "label" = @Translation("hero_date"),
 *      },
 *      "hero_icon_contener" = {
 *          "label" = @Translation("hero_icon_contener"),     
 *      }
 *  }
 *)
*/

class FnewsHeroBlogSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fnews_hero_blog_map.png");
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
            'region_css_hero_link': => 'hbf-list__item',
            'region_css_hero_sublink': => 'hbf-tag__item',
            'fnews_hero_blog' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'hero_link' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "<a href='#'>home</a>"
                        ]
                    ], 
                    'hero_link_two' => [
                        'text_html' => [
                            'label' => 'lien 2',
                            'value' => "<a href='#'>solo</a>"
                        ]
                    ],
                    'hero_simple_title' => [
                        'text_html' => [
                            'label' => 'Titre simple',
                            'value' => "finance"
                        ]
                    ],
                    'hero_title' => [
                        'text_html' => [
                            'label' => 'Gros Titre',
                            'value' => "Stay Informed. Our Latest News And Announcements."
                        ]
                    ],
                    'hero_sublink' => [
                        'text_html' => [
                            'label' => 'Lien Bas 1',
                            'value' => "<a href='#'>Finance</a>"
                        ]
                    ],
                    'hero_date' => [
                        'text_html' => [
                            'label' => 'Lien Bas date',
                            'value' => "<a href='#'>may 02, 2302</a>"
                        ]
                    ],
                    'hero_icon_contener' => [
                        'text_html' => [
                            'label' => 'icones',
                            'value' => '<a href="#" class="hbt-social__btn facebookShare">
                                            <svg>
                                                <use xlink:href="#facebook-f "></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="hbt-social__btn twitterShare">
                                            <svg>
                                                <use xlink:href="#twitter"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="hbt-social__btn emailShare">
                                            <svg>
                                                <use xlink:href="#envelope"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="hbt-social__btn printButton">
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