<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fast Models fn lal Teaser 
 * 
 * @Layout (
 *  id = "fast_models_lal_teaser",
 *  label = @Translation("fast_models_lal_teaserr"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "fast_models_lal_teaser",
 *  library = "fast_models/fast_models_lal_teaser",
 *  default_region = "lal_date",
 *  regions = {
 *      "lal_date" = {
 *          "label" = @Translation("lal_date"),     
 *      },
 *      "lal_title" = {
 *          "label" = @Translation("lal_title"),     
 *      }
 *  }
 * )
 * 
 */
class FastModelsLalTeaser extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/fast_models_lal_teaser_map.png");
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
            'fmlt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'lal_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "1 years ago"
                        ]
                    ],
                    'lal_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "<a href='#'> Simple steps to spring clean your finances </a>"
                        ]
                    ]
                ]
            ]
        ];
    }

}