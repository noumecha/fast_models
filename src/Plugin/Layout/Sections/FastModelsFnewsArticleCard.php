<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fast Models fn last-article-card
 * 
 * @Layout (
 *  id = "fast_models_article_card_section",
 *  label = @Translation("fast_models_article_card_section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_models_article_card_section",
 *  library = "fast_models/fast_models_article_card_section",
 *  default_region = "fast_models_article_card_section",
 *  regions = {
 *      "card_article_image" = {
 *          "label" = @Translation("card_article_image"),     
 *      },
 *      "card_article_caption" = {
 *          "label" = @Translation("card_article_caption"),     
 *      },
 *      "card_article_title" = {
 *          "label" = @Translation("card_article_title"),     
 *      },
 *      "card_article_text" = {
 *          "label" = @Translation("card_article_text"),     
 *      }
 *  }
 * )
 * 
 */
class FastModelsFnewsArticleCard extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fast_models_article_card_section_map.png");
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
            'fmacs' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'card_article_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<a href="#"> <img src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/post-1-hero-slide-1.jpg?itok=JRn7F-aO"
                                        alt="">  </a>'
                        ]
                    ],
                    'card_article_caption' => [
                        'text_html' => [
                            'label' => 'Image caption',
                            'value' => "A tellus risus dis. Orci sagittis sociosqu senectus est facilisis est facilisis neque rutrum dapibus!"
                        ]
                    ],
                    'card_article_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => '<a href="#">Top 10 stuff you did not know about San Franscisco</a>'
                        ]
                    ],
                    'card_article_text' => [
                        'text_html' => [
                            'label' => 'Texte',
                            'value' => 'A tellus risus dis. Orci sagittis sociosqu senectus est facilisis est
                                        facil isis neque rutrum daisis neque rutrum dapibus'
                        ]
                    ],
                ]
            ]
        ];
    }

}