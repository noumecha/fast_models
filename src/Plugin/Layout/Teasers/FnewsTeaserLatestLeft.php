<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Teaser Latest Left
 * @Layout (
 *  id = "f_news_teaser_latest_left",
 *  label = @Translation("f_news_teaser_latest_left"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_latest_left",
 *  library = "fast_models/f_news_teaser_latest_left",
 *  default_region = "content",
 *  regions = {
 *       "teaser_latest_image" = {
 *          "label" = @Translation("teaser_latest_image"),     
 *       },
 *       "teaser_latest_date" = {
 *           "label" = @Translation("teaser_latest_date"),
 *       },
 *       "teaser_latest_text" = {
 *           "label" = @Translation("teaser_latest_text"),
 *       }
 *  }
 * )
 * 
 */

class FnewsTeaserLatestLeft extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_latest_left_map.png");
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
            'ftll' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_latest_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<a href='#' class='link'>
                                            <img height='80px'
                                            src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-18.jpg?itok=KlDfSRjU'
                                            alt='' class='post-img'>
                                        </a>"
                        ]
                    ],
                    'teaser_latest_text' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<a href='#'>Here's what happened to the stock market</a>"
                        ]
                    ],
                    'teaser_latest_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "<p> 04 May, 2020 </p>"
                        ]
                    ]
                ]
            ]
        ];
    }

}