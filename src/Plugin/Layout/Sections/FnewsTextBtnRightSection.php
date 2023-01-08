<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fnews Text Btn Right Section
 * 
 * @Layout (
 *  id = "f_news_text_btn_right",
 *  label = @Translation("f_news_text_btn_right"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_text_btn_right",
 *  library = "fast_models/f_news_text_btn_right",
 *  default_region = "content",
 *  regions = {
 *      "text_btn_right_title" = {
 *          "label" = @Translation("text_btn_right_title"),
 *      },
 *      "text_btn_right_button" = {
 *          "label" = @Translation("text_btn_right_button"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTextBtnRightSection extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/f_news_text_btn_right_map.png");
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
            'fntbs' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'text_btn_right_title' => [
                        'text_html' => [
                            'label' => 'Titre Gauche',
                            'value' => "Phosfluorescently e-enable adaptive synergy for strategic quality vectors
                                        with advanced technologies to communicate
                                        better."
                        ]
                    ],
                    'text_btn_right_button' => [
                        'text_html' => [
                            'label' => 'Boutton Droit',
                            'value' => "<span>contact us</span><i class='btn-angle-right'></i>"
                        ]
                    ]
                ]
            ]
        ];
    }

}