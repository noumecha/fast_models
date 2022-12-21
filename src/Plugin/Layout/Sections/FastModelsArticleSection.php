<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fast models fnews article section 
 * 
 * @Layout (
 *  id = "fast_models_article_section",
 *  label = @Translation("fast_models_article_section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_article_section",
 *  library = "fast_models/fast_models_article_section",
 *  default_region = "fast_models_article_section",
 *  regions = {
 *      "article_image" = {
 *          "label" = @Translation("article_image"),     
 *      },
 *      "article_text" = {
 *          "label" = @Translation("article_text"),     
 *      },
 *      "article_video" = {
 *          "label" = @Translation("article_video"),     
 *      }
 *  }
 * )
 * 
 */
class FastModelsArticleSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fast_models_article_section_map.png");
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
            'fmas' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'article_image' => [
                        'text_html' => [
                            'label' => 'Image Article',
                            'value' => ''
                        ]
                    ],
                    'article_text' => [
                        'text_html' => [
                            'label' => 'Text Article',
                            'value' => ''
                        ]
                    ],
                    'article_video' => [
                        'text_html' => [
                            'label' => 'Video Article',
                            'value' => ''
                        ]
                    ]
                ]
            ]
        ];
    }

}