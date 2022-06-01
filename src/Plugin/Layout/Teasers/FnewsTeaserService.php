<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * F_news Teaser Service Sections
 * @Layout (
 *  id = "f_news_teaser_service",
 *  label = @Translation("f_news_teaser_service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_service",
 *  library = "fast_models/f_news_teaser_service",
 *  default_region = "content",
 *  regions = {
 *      "t_image" = {
 *          "label" = @Translation("t_image"),
 *      },
 *      "date_show_day" = {
 *          "label" = @Translation("date_show_day"),
 *      },
 *      "date_show_date" = {
 *          "label" = @Translation("date_show_date"),
 *      },
 *      "tag_show" = {
 *          "label" = @Translation("tag_show"),     
 *      },
 *      "head_nav" = {
 *          "label" = @Translation("head_nav"),     
 *      },
 *      "teaser_title" = {
 *          "label" = @Translation("teaser_title"),     
 *      },
 *      "teaser_price" = {
 *          "label" = @Translation("teaser_price"),
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserService extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_service_map.png");
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
        $build["head_nav"]["7d339ed1-f3bd-4407-83d1-2bfeeeb92d43"]["content"]["#theme"] = "layoutfield_f_news_teaser_service";
        $build["tag_show"]["f49ef975-9c7f-444e-b36a-05ababb03b4c"]["content"]["#theme"] = "layoutfield_f_news_teaser_service_tag";

       
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
            'fts' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    't_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/mt-service-teaser-3.jpg?itok=-TumY7Ot'
                                 alt=''>"
                        ]
                    ],
                    'date_show_day' => [
                        'text_html' => [
                            'label' => 'Jour',
                            'value' => "9"
                        ]
                    ],
                    'date_show_date' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => "july,2022"
                        ]
                    ],
                    'tag_show' => [
                        'text_html' => [
                            'label' => 'tag_show',
                            'value' => '<div class="tag-show__tag">green</div>
                            <div class="tag-show__tag">purple</div>',
                        ]
                    ],
                    'head_nav' => [
                        'text_html' => [
                            'label' => 'head_nav',
                            'value' => '<div class="link-label"> <a href="#">tristique</a></div>
                            <div class="link-label"> <a href="#">vitae</a></div>',
                        ]
                    ],
                    'teaser_title' => [
                        'url' => [
                            'label' => 'Titre',
                            'value' => [
                                'link' => "#",
                                'text' => "First Service",
                                'class' => "node-title"
                            ]
                        ]
                    ],
                    'teaser_price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => "$29.00"
                        ]
                    ]
                ]
            ]
        ];
    } 

}