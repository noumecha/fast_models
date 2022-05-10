<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;

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
 *      "teaser_image" = {
 *          "label" = @Translation("teaser_image"),
 *      },
 *      "teaser_day" = {
 *          "label" = @Translation("teaser_day"),
 *      },
 *      "teaser_date" = {
 *          "label" = @Translation("teaser_date"),     
 *      },
 *      "teaser_color" = {
 *          "label" = @Translation("teaser_color"),     
 *      },
 *      "teaser_color_one" = {
 *          "label" = @Translation("teaser_color_one"),     
 *      },
 *      "teaser_link" = {
 *          "label" = @Translation("teaser_link"),
 *      },
 *      "teaser_link_one" = {
 *          "label" = @Translation("teaser_link_one"),
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

class FnewsTeaserService extends FormatageModels
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
            'fts' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ""
                        ]
                    ]
                ]
            ]
        ];
    } 

}