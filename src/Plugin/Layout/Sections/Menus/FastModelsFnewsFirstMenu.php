<?php

namespace Drupal\fast_models\Plugin\Layout\Sections\Menus;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 *
 * Fast Models fn first menu
 *
 * @Layout (
 *   id = "fast_models_fn_first_menu",
 *   label = @Translation("fast_models_fn_first_menu"),
 *   category = @Translation("Formatage Models"),
 *   path = "layouts/sections/menus",
 *   template = "fast_models_fn_first_menu",
 *   library = "fast_models/fast_models_fn_first_menu",
 *   default_region = "fn_first_nav",
 *   regions = {
 *      "fn_first_nav" = {
 *          "label" = @Translation("fn_first_nav"),
 *      }
 *   }
 * )
 *
 */
class FastModelsFnewsFirstMenu extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/menus/fast_models_fn_first_menu_map.png");
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
    
    $build['fn_first_nav']['3ca6f07a-95f8-40e2-86e0-0fe4f860d323']['#attributes'] = [
      'class' => [
        'first-nav'
      ]
    ];
    $build['fn_first_nav']['3ca6f07a-95f8-40e2-86e0-0fe4f860d323']['#children'] = '<div class="first-nav__brand">
            <a href="#">
                F+ news
            </a>
        </div>
        <a href="#" class="menu-icons">
            <span class="burger"> <i class="wbu-bars"></i></span>
            <span class="xmark"> <i class="wbu-close"></i></span>
        </a>
';
    
    $build['fn_first_nav']['3ca6f07a-95f8-40e2-86e0-0fe4f860d323']['content']['#attributes'] = [
      'class' => [
        'nav-list'
      ]
    ];
    //
    $build['fn_first_nav']['3ca6f07a-95f8-40e2-86e0-0fe4f860d323']['content']['#theme'] = 'layoutmenu_fast_models_fn_first_menu';
    //
    $this->formatListMenus($build['fn_first_nav']['3ca6f07a-95f8-40e2-86e0-0fe4f860d323']['content']['#items']);

    dump($build);
    
    return $build;
  }

  private function getMenus(array $fn_first_nav)
  {



  }
  
  private function formatListMenus(array &$items) {
    foreach ($items as $k => $item) {
      if (!empty($item['attributes'])) {
        /**
         *
         * @var \Drupal\Core\Template\Attribute $attribute
         */
        $attribute = $item['attributes'];
        $attribute->addClass('nav-item');
        // add sub menu
        if ($item['is_expanded']) {
          $attribute->addClass('sub-alt');
        }
        // menu actif
        if ($item['in_active_trail']) {
          $attribute->addClass('nav-item--active');
        }
        $items[$k]['attributes'] = $attribute;
        //
        if (!empty($item['below'])) {
          $this->formatListMenus($item['below']);
          $items[$k]['below'] = $item['below'];
        }
      }
    }
  }
  
  /**
   *
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'css' => '',
      'fmfnfm' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'fn_first_nav' => [
            'text_html' => [
              'label' => 'Menu content',
              'value' => ""
            ]
          ]
        ]
      ]
    ];
  }
  
}