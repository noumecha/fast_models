<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fast models fn controls teaser 
 * 
 * @Layout (
 *  id = "fast_models_controls_teaser",
 *  label = @Translation("fast_models_controls_teaser"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "fast_models_controls_teaser",
 *  library = "fast_models/fast_models_controls_teaser",
 *  default_region = "controls_title",
 *  regions = {
 *      "controls_buttons" = {
 *          "label" = @Translation("controls_buttons"),     
 *      },
 *      "controls_title" = {
 *          "label" = @Translation("controls_title"),     
 *      }
 *  }
 * )
 * 
 */
class FastModelsControlsTeaser extends FormatageModelsTeasers
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager)
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/fast_models_controls_teaser_map.png");
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
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmct' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'controls_buttons' => [
                        'text_html' => [
                            'label' => 'Bouttons',
                            'value' => '
                                <button class="sc-btn play-pause">
                                    <i class="wbu-pause"></i>
                                    <i class="wbu-play"></i>
                                </button>
                                <button class="sc-btn"><i class="wbu-angle-left"></i></button>
                                <button class="sc-btn"><i class="wbu-angle_right"></i></button>
                            '
                        ]
                    ],
                    'controls_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<a href='#'>Where can you find fresh fruits nowadays</a>"
                        ]
                    ]
                ]
            ]
        ];
    }

}