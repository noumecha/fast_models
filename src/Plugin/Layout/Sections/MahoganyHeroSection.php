<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 *  Hero Section for mahogany theme : by TMC
 * 
 * @Layout (
 *  
 *  id = "mahogany_hero",
 *  label = @Translation("Mahogany Hero Section"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "mahogany_hero",
 *  library = "fast_models/mahogany_hero",
 *  default_region = "image",
 *  regions = {
 *      "image" = {
 *          "label" = @Translation("image"),      
 *      },
 *      "titled" = {
 *          "label" = @Translation("titled"),     
 *      },
 *      "link" = {
 *          "label" = @Translation("link"),     
 *      },
 *  }
 * )
 * 
 */

class MahoganyHeroSection extends FormatageModelsSection {

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/mahogany_hero_map.png");
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
   * this function is user to config the regions 
   * 
   */
  public function defaultConfiguration()
    {
      return parent::defaultConfiguration() + [
            'css' => '',
            'region_css_titled' => 'text-white h1',
            'region_css_link' => 'text-white',
            'mahogany' => [
              'builder-form' => true,
              'info' => [
                  'title' => 'Contenu',
                  'loader' => 'static'
                ],
                'fields' => [
                  'titled' => [
                      'text_html' => [
                          'label' => 'Titre',
                          'value' => "Flooring that feels like <span>home</span>"
                        ]
                    ],
                  'image' => [
                      'img_bg' => [
                          'label' => 'Image Background',
                          'fids' => []
                        ]
                    ],
                  'link' => [
                      'url' => [
                          'label' => "Boutton",
                          'value' => [
                              "link" => "#",
                              "text" => "Visit Online Store",
                              "class" => "btn btn-primary btn-lg"
                          ]
                        ]
                    ]
                ]
            ]
        ];
    }

}