<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Teaser Latest Right
 * 
 * @Layout (
 *  id = "f_news_teaser_latest_right",
 *  label = @Translation("f_news_teaser_latest_right"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_latest_right",
 *  library = "fast_models/f_news_teaser_latest_right",
 *  default_region = "content",
 *  regions = {
 *      "teaser_latest_right_image" = {
 *          "label" = @Translation("teaser_latest_right_image"),     
 *      },
 *      "teaser_latest_right_date" = {
 *          "label" = @Translation("teaser_latest_right_date"),     
 *      },
 *      "teaser_latest_right_text" = {
 *          "label" = @Translation("teaser_latest_right_text"),     
 *      },
 *      "teaser_latest_right_author" = {
 *          "label" = @Translation("teaser_latest_right_author"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserLatestRight extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_latest_right_map.png");
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
            'ftlr' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_latest_right_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<a href='#' class='img-sup'><img class='card-img'
                                         src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-18.jpg?itok=UdwkXLYg'
                                         alt=''></a>"
                        ]
                    ],
                    'teaser_latest_right_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "<p> Apr 30, 2020 / Health </p>"
                        ]
                    ],
                    'teaser_latest_right_text' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<a href=''>Things that can help to boost your immune system</a>"
                        ]
                    ],
                    'teaser_latest_right_author' => [
                        'text_html' => [
                            'label' => 'Auteur',
                            'value' => "<p>Admin</p>"
                        ]
                    ]
                ]
            ]
        ];
    }

}