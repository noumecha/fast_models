<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * FM Archive Teaser
 * 
 * @Layout (
 *  id = "fast_models_archive_teaser",
 *  label = @Translation("fast_models_archive_teaser"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "fast_models_archive_teaser",
 *  library = "fast_models/fast_models_archive_teaser",
 *  default_region = "content",
 *  regions = {
 *      "archiver" = {
 *          "label" = @Translation("archiver"),     
 *      }      
 *  }
 * )
 * 
 */

class FastModelsArchiveTeaser extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/fast_models_archive_teaser_map.png");
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
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fmat' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'archiver' => [
                        'text_html' => [
                            'label' => 'Lien',
                            'value' => '<a href="#">mars 2022</a><span>(1)</span>'
                        ]
                    ]
                ]
            ]
        ];
    }

}