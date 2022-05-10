<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\FormatageModels;

/**
 * 
 * F_news Filter Section
 * @Layout (
 *  id = "f_news_filter_section",
 *  label = @Translation("f_news_filter_section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_filter_section",
 *  library = "fast_models/f_news_filter_section",
 *  default_region = "content",
 *  regions = {
 *      "hide_button" = {
 *          "label" = @Translation("hide_button"),     
 *      },
 *      "filter_title_" = {
 *          "label" = @Translation("filter_title"),     
 *      },
 *      "filter_title_one" = {
 *          "label" = @Translation("filter_title_one"),
 *      },
 *      "filter_title_two" = {
 *          "label" = @Translation("filter_title_two"),     
 *      },
 *      "filter_search_bar" = {
 *          "label" = @Translation("filter_search_bar"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      },
 *      "filter_checkbox" = {
 *          "label" = @Translation("filter_checkbox"),     
 *      }
 * }
 * )
 * 
 */

class FnewsFilterSection extends FormatageModels
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_filter_section_map.png");
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
            'ffs' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [

                ]
            ]
        ];
    }

}