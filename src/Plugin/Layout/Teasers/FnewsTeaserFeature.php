<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Teaser Feature 
 * 
 * @Layout (
 *  id = "f_news_teaser_feature",
 *  label = @Translation("f_news_teaser_feature"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_feature",
 *  library = "fast_models/f_news_teaser_feature",
 *  default_region = "content",
 *  regions = {
 *      "teaser_feature_image" = {
 *          "label" = @Translation("teaser_feature_image"),
 *      },
 *      "teaser_feature_date" = {
 *          "label" = @Translation("teaser_feature_date"),     
 *      },
 *      "teaser_feature_title" = {
 *          "label" = @Translation("teaser_feature_title"),     
 *      },
 *      "teaser_feature_role" = {
 *          "label" = @Translation("teaser_feature_role"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserFeature extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_feature_map.png");
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
            'fntf' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_feature_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img class="card-img"
                                 src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-04/mt-post-13.jpg?itok=9yJYiqQt"
                                 alt="">'
                        ]
                    ],
                    'teaser_feature_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "<p> Apr 30, 2020 / Health </p>"
                        ]
                    ],
                    'teaser_feature_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<a href=''>Things that can help to boost your immune system</a>"
                        ]
                    ],
                    'teaser_feature_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "<p>Admin</p>"
                        ]
                    ],  
                ]
            ]
        ];
    }

}