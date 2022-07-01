<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 *
 * f_news first service section
 *
 * @Layout (
 *  id = "f_news_first_service",
 *  label = @Translation("f_news_first_service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_first_service",
 *  library = "fast_models/f_news_first_service",
 *  default_region = "content",
 *  regions = {
 *      "image_left" = {
 *          "label" = @Translation("image_left"),
 *      },
 *      "service_day" = {
 *          "label" = @Translation("service_day"),
 *      },
 *      "service_date" = {
 *          "label" = @Translation("sevice_date"),
 *      },
 *      "service_promote" = {
 *          "label" = @Translation("service_promote"),
 *      },
 *      "head_nav" = {
 *          "label" = @Translation("head_nav"),
 *      },
 *      "service_text" = {
 *          "label" = @Translation("service_text"),
 *      },
 *      "service_title" = {
 *          "label" = @Translation("service_title"),
 *      },
 *      "read_more_text" = {
 *          "label" = @Translation("read_more_text"),
 *      }
 * }
 * )
 *
 */
class FnewsFirstServiceSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/fnews_first_service_map.png");
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
    if (is_array($build['head_nav']))
      // $build['head_nav'] = $this->getMenus($build['head_nav']);
      return $build;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  private function getMenus(array $fn_scd_nav) {
    foreach ($fn_scd_nav as $k => $m) {
      if (isset($m['#base_plugin_id']) && $m['#base_plugin_id'] === 'field_block') {
        
        $fn_scd_nav[$k]['#attributes'] = [
          'class' => [
            'blog-btn'
          ]
        ];
        // set a new theme hoock () : refers to .theme.inc file
        $fn_scd_nav[$k]['content']['#theme'] = 'layoutfield_f_news_teaser_service';
      }
    }
    return $fn_scd_nav;
  }
  
  /**
   *
   * {@inheritdoc}
   *
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'css' => '',
      'fnews_first_servie' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'image_left' => [
            'text_html' => [
              'label' => 'Image gauche',
              'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2019-07/mt-service-teaser-1.jpg?itok=ETDkpW4R'  alt=''>"
            ]
          ],
          'service_day' => [
            'text_html' => [
              'label' => 'Jour',
              'value' => "9"
            ]
          ],
          'service_date' => [
            'text_html' => [
              'label' => 'Date',
              'value' => "july,2019"
            ]
          ],
          'service_promote' => [
            'text_html' => [
              'label' => 'lien 1',
              'value' => "promoted"
            ]
          ],
          'head_nav' => [
            'text_html' => [
              'label' => 'Head nav',
              'value' => '<div class="head-nav">
                            <div class="link-label"> <a href="#">tristique</div>
                            <div class="link-label"> <a href="#">allo</div>
                        </div>'
            ]
          ],
          'service_title' => [
            'text_html' => [
              'label' => 'Title',
              'value' => "First Service"
            ]
          ],
          'service_text' => [
            'text_html' => [
              'label' => 'description',
              'value' => "Phosfluorescently e-enable adaptive synergy for strategic quality vectors. Continually transform fully tested expertise <a href='#'>with competitive technologies.</a> Appropriately communicate adaptive imperatives rather than value-added potentialities. Conveniently harness."
            ]
          ],
          'read_more_text' => [
            'text_html' => [
              'label' => 'Read More text',
              'value' => "read more"
            ]
          ]
        ]
      ]
    ];
  }
  
}