<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;


/**
 * 
 *  FnewsRightLeftImage
 * @Layout(
 *  id = "f_news_right_left_image",
 *  label = @Translation("f_news_right_left_image"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_right_left_image",
 *  library = "fast_models/f_news_right_left_image",
 *  default_region = "content",
 *  regions = {
 *      "right_left_title" = {
 *          "label" = @Translation("right_left_title"),     
 *      },
 *      "right_left_text" = {
 *          "label" = @Translation("right_left_text"),
 *      },
 *      "right_left_button" = {
 *          "label" = @Translation("right_left_button"),     
 *      },
 *      "right_left_image" = {
 *          "label" = @Translation("right_left_image"),
 *      }
 *  }
 * )
 * 
 */

class FnewsRightLeftImageSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/f_news_right_left_image_map.png");
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
            'fnrls' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'right_left_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "Name of First Feature"
                        ]
                    ],
                    'right_left_text' => [
                        'text_html' => [
                            'label' => 'Paragraphe',
                            'value' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore."
                        ]
                    ],
                    'right_left_button' => [
                        'text_html' => [
                            'label' => 'Button',
                            'value' => "learn more <i class='btn-angle-right'></i>"
                        ]
                    ],
                    'right_left_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/mt-service-2-highlight-1.jpg?itok=Gr5UxBWz'
                         alt=''>"
                        ]
                    ]
                ]
            ]
        ];
    }

}