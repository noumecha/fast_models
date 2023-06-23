<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 *
 * Fnews Teaser Metro service
 *
 *  @Layout(
 *  id = "f_news_teaser_metro_service",
 *  label = @Translation("f_news_teaser_metro_service (ERROR, use orther f_news_teaser_metro_service )"),
 *  category = @Translation("remove before 2x fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_metro_service",
 *  library = "fast_models/f_news_teaser_metro_service",
 *  default_region = "content",
 *  regions = {
 *      "metro_teaser_image" = {
 *          "label" = @Translation("metro_teaser_image"),
 *      },
 *      "metro_teaser_title" = {
 *          "label" = @Translation("metro_teaser_title"),
 *      },
 *      "metro_teaser_link" = {
 *          "label" = @Translation("metro_teaser_link"),
 *      },
 *      "metro_teaser_link_one" = {
 *          "label" = @Translation("metro_teaser_link_one"),
 *      },
 *      "metro_teaser_link_date" = {
 *          "label" = @Translation("metro_teaser_link_date"),
 *      }
 *  }
 * )
 *
 * @deprecated mauvaise integration, cela ne correspond pas à un model html.(
 *             remove at before 2x)
 */
class FnewsTeaserMetroService extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_metro_service_small_map.png");
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
      'fntms' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'metro_teaser_image' => [
            'text_html' => [
              'label' => 'Image',
              'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_metro_tile_square/public/2019-07/mt-service-teaser-1.jpg?itok=imyoNul2'
                                 alt=''>"
            ]
          ],
          'metro_teaser_title' => [
            'url' => [
              'label' => 'Titre',
              'value' => [
                'link' => "#",
                'text' => "First Service",
                'class' => "node-title"
              ]
            ]
          ],
          'metro_teaser_link' => [
            'url' => [
              'label' => ' Lien 1',
              'value' => [
                'link' => "#",
                'text' => "tristique ",
                'class' => "link-label"
              ]
            ]
          ],
          'metro_teaser_link_one' => [
            'url' => [
              'label' => ' Lien 2',
              'value' => [
                'link' => "#",
                'text' => "allo",
                'class' => "link-label"
              ]
            ]
          ],
          'metro_teaser_link_date' => [
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