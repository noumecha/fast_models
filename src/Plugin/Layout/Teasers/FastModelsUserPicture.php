<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * FM User oneline with Image
 * 
 * @Layout (
 *  id = "fast_models_user_picture",
 *  label = @Translation("fast model user picture"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "fast_models_user_picture",
 *  library = "fast_models/fast_models_user_picture",
 *  default_region = "content",
 *  regions = {
 *      "author" = {
 *          "label" = @Translation("author"),  
 *      },
 *      "img_author" = {
 *          "label" = @Translation("img_author"),  
 *      }     
 *  }
 * )
 * 
 */

class FastModelsUserPicture extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/fast_models_archive_teaser_map.png");
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
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmat' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'author' => [
                        'text_html' => [
                            'label' => 'author',
                            'value' => 'Maxwell'
                        ]
                    ],
                    'img_author' => [
                        'text_html' => [
                            'label' => 'img author',
                            'value' => ' <img class="img"
                                     src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/thumbnail/public/pictures/2019-08/avatar_0.jpg?itok=QV437nlh"
                                     alt="">'
                        ]
                    ]
                ]
            ]
        ];
    }

}