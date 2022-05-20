<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * F_news Proposition Section 
 * 
 * @Layout (
 *  id = "f_news_proposition",
 *  label = @Translation("f_news proposition"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "f_news_proposition",
 *  library = "fast_models/f_news_proposition",
 *  default_region = "content",
 *  regions = {
 *      "title_left" = {
 *          "label" = @Translation("title_left"),     
 *      },
 *      "title_r" = {
 *          "label" = @Translation("title_r"),
 *      },
 *      "left_proposition" = {
 *          "label" = @Translation("left_proposition")     
 *      },
 *      "right_proposition" = {
 *          "label" = @Translation("right_proposition"),     
 *      },
 *      "link" = {
 *          "label" = @Translation("link"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsPropositionSection extends FormatageModelsSection 
{
   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/fnews_proposition_map.png");
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
   * {@inheritdoc}
   */
  public function defaultConfiguration() {

      return parent::defaultConfiguration() + [
        'css' => '',
        'prop_left' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'title_left' => [
                    'text_html' => [
                        'label' => 'Titre Gauche',
                        'value' => "<p>
                                        Latest Posts
                                    </p>"
                    ]
                ],
                'left_proposition' => [
                    'text_html' => [
                        'label' => 'Contenu gauche',
                        'value' => ""
                    ]
                ],
                'right_proposition' => [
                    'text_html' => [
                        'label' => 'Contenu droite',
                        'value' => ""
                    ]
                ],
                'link' => [
                    'url' => [
                        'label' => 'link',
                        'value' => [
                            "link" => "#",
                            "text" => "More",
                            "class" => "link"
                        ]
                    ]
                ]
            ]
        ],
      ];
  }

}