<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Blog Teasers
 * 
 * @Layout (
 *  id = "agence_constant_teaser_service",
 *  label = @Translation("Agence constant teaser service"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "agence_constant_teaser_service",
 *  library = "fast_models/agence_constant_teaser_service",
 *  default_region = "content",
 *  regions = {
 *      "icone" = {
 *          "label" = @Translation("icone"),
 *      },
 *      "title" = {
 *          "label" = @Translation("title"),
 *      },
 *      "desc" = {
 *          "label" = @Translation("desc"),    
 *      }
 *  }
 * )
 * 
 */

class AgenceConstantTeaserService extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/ac-teaser-service.png");
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
     * 
     */
    public function defaultConfiguration() 
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'vesper_service_card' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'icone' => [
                        'text_html' => [
                            'label' => 'Icone',
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24" fill="CurrentColor">

                                    <path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919c-.92 1.174-2.286 2.14-4.1 2.9c-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5c-2 .6-4.114.9-6.341.9c-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2c.007-.08.01-.146.01-.2c.254.014.641.02 1.161.02c2.666 0 5.146-.367 7.439-1.1c.187.373.381.793.58 1.26c-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759c.601-1.187 1.524-2.322 2.771-3.401c1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62a8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081c.932-.066 1.765-.1 2.5-.1c.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3c1.2 1.414 1.854 3.027 1.96 4.84c-.812-.04-1.632-.06-2.459-.06z"/>

                                </svg>'
                        ]
                    ],
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => '<a href="">Limere Radses</a>'
                        ]
                    ],
                    'desc' => [
                        'text_html' => [
                            'label' => 'desc',
                            'value' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,totam rem."
                        ]
                    ]
                ]
            ]
        ];
    }

}