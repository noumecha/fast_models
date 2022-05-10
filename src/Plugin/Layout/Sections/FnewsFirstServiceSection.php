<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * f_news first service section
 * 
 * @Layout (
 *  id = "f_news_first_service",
 *  label = @Translation("f_news_first_service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_first_service",
 *  library = "fast_models/f_news_first_service",
 *  default_region = "content",
 *  regions = {
 *      "image_left" = {
 *          "label" = @Translation("image_left"),     
 *      },
 *      "service_day" = {
 *          "label" = @Translation("service_day"),
 *      },
 *      "service_date" = {
 *          "label" = @Translation("sevice_date"),
 *      },
 *      "service_promote" = {
 *          "label" = @Translation("service_promote"),     
 *      },
 *      "service_tristique" = {
 *          "label" = @Translation("service_tristique"),     
 *      },
 *      "service_allo" = {
 *          "label" = @Translation("service_allo"),
 *      },
 *      "service_text" = {
 *          "label" = @Translation("service_text"),
 *      },
 *      "service_link" = {
 *          "label" = @Translation("service_link"),
 *      },
 *      "service_link_one" = {
 *          "label" = @Translation("service_link_one"),     
 *      }
 * }
 * )
 * 
 */

class FnewsFirstServiceSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_first_service_map.png");
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
            'fnews_first_servie' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image_left' => [
                        'text_html' => [
                            'label' => 'Image gauche',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/mt-service-teaser-1.jpg?itok=ETDkpW4R'  alt=''>"
                        ]
                    ],
                    'service_day' => [
                        'text_html' => [
                            'label' => 'Jour',
                            'value' => "9"
                        ]
                    ],
                    'service_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "july,2019"
                        ]
                    ],
                    'service_promote' => [
                        'text_html' => [
                            'label' => 'lien 1',
                            'value' => "promoted"
                        ]
                    ],
                    'service_tristique' => [
                        'url' => [
                            'label' => 'lien 2',
                            'value' => [
                                'link' => "#",
                                'text' => "tristique",
                                'class' => "link-label"
                            ]
                        ]
                    ],
                    'service_allo' => [
                        'url' => [
                            'label' => 'lien 3',
                            'value' => [
                                'link' => "#",
                                'text' => "allo",
                                'class' => "link-label"
                            ]
                        ]
                    ],
                    'service_link' => [
                        'url' => [
                            'label' => 'lien bas 1',
                            'value' => [
                                'link' => "#",
                                'text' => "First Service",
                                'class' => "node-title"
                            ]
                        ]
                    ],
                    'service_text' => [
                        'text_html' => [
                            'label' => 'texte',
                            'value' => "Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform fully tested expertise <a href='#'>with competitive technologies.</a> Appropriately communicate adaptive imperatives rather than value-added potentialities. Conveniently harness."
                        ]
                    ],
                    'service_link_one' => [
                        'url' => [
                            'label' => 'lien bas 2',
                            'value' => [
                                'link' => "#",
                                'text' => "read more",
                                'class' => "node-readmore"
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

}