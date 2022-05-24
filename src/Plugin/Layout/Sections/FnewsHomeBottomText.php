<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Fnews Home Bottom Text Section
 * 
 * @Layout (
 *  id = "f_news_home_bottom_text",
 *  label = @Translation("f_news_home_bottom_text"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_home_bottom_text",
 *  library = "fast_models/f_news_home_bottom_text",
 *  default_region = "content",
 *  regions = {
 *      "bottom_title" = {
 *          "label" = @Translation("bottom_title"),
 *      },
 *      "bottom_subtitle" = {
 *          "label" = @Translation("bottom_subtitle"),     
 *      },
 *      "bottom_text" = {
 *          "label" = @Translation("bottom_text"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsHomeBottomText extends FormatageModelsSection
{

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/f_news_home_bottom_text_map.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
   */
  public function build(array $regions) {
    
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
        'fnhbt' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'bottom_title' => [
                    'text_html' => [
                        'label' => 'Titre',
                        'value' => "<p>Be the first to get our news and offers</p>"
                    ]
                ],
                'bottom_subtitle' => [
                    'text_html' => [
                        'label' => 'Sous titre',
                        'value' => "<p>Readers from all around the world enjoy our newsletter. Sign up and enjoy tips and special offers in your
                                    inbox.</p>"
                    ]
                ],
                'bottom_text' => [
                    'text_html' => [
                        'label' => 'Texte',
                        'value' => "<p>The subscription service is currently unavailable. Please check again later.</p>"
                    ]
                ]
            ]
        ]
      ];
  }

}