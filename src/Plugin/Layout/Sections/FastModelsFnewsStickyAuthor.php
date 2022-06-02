<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Fast models hero blog section
 * 
 * @Layout (
 *  id = "fast_models_sticky_author",
 *  label = @Translation("fast_models_sticky_author"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_sticky_author",
 *  library = "fast_models/fast_models_sticky_author",
 *  default_region = "fast_models_sticky_author",
 *  regions = {
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
 */
class FastModelsFnewsStickyAuthor extends FormatageModelsSection
{

     /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) 
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition,$styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fast_models_article_card_section_map.png");
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
     */
    public function defaultConfiguration() 
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmfsa' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
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