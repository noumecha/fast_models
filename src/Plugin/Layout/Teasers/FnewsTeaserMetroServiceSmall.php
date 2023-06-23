<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 *
 * Fnews Teaser Metro service Small
 *
 *  @Layout(
 *  id = "f_news_teaser_metro_service_small",
 *  label = @Translation("f_news_teaser_metro_service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_metro_service_small",
 *  library = "fast_models/f_news_teaser_metro_service",
 *  default_region = "content",
 *  regions = {
 *      "metro_teaser_small_image" = {
 *          "label" = @Translation("metro_teaser_image"),
 *      },
 *      "metro_teaser_small_title" = {
 *          "label" = @Translation("metro_teaser_title"),
 *      },
 *      "head_nav" = {
 *          "label" = @Translation("head_nav"),
 *      },
 *      "metro_teaser_small_link_date" = {
 *          "label" = @Translation("metro_teaser_link_date"),
 *      }
 *  }
 * )
 */
class FnewsTeaserMetroServiceSmall extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_metro_service_map.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
   *
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
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'css' => '',
      'fntmss' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'metro_teaser_small_image' => [
            'text_html' => [
              'label' => 'Image',
              'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2019-07/mt-service-teaser-1.jpg?itok=imyoNul2'
                                 alt=''>"
            ]
          ],
          'metro_teaser_small_title' => [
            'text_html' => [
              'label' => 'Titre',
              'value' => "First Service"
            ]
          ],
          'head_nav' => [
            'text_html' => [
              'label' => 'head_nav',
              'value' => '<div class="link-label"> <a href="#">tristique</a></div>
                            <div class="link-label"> <a href="#">vitae</a></div>'
            ]
          ],
          'metro_teaser_small_link_date' => [
            'text_html' => [
              'label' => 'Date',
              'value' => "19 Jul, 2019"
            ]
          ]
        ]
      ]
    ];
  }
  
}