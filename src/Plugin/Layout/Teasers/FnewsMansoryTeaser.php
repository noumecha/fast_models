<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Mansory Teasers
 * 
 * @Layout (
 *  id = "f_news_mansory_teaser",
 *  label = @Translation("f_news_mansory_teaser"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_mansory_teaser",
 *  library = "fast_models/f_news_mansory_teaser",
 *  default_region = "content",
 *  regions = {
 *      "mansory_teaser_image" = {
 *          "label" = @Translation("mansory_teaser_image"),     
 *      },
 *      "mansory_teaser_name" = {
 *          "label" = @Translation("mansory_teaser_name"),     
 *      },
 *      "mansory_teaser_role" = {
 *          "label" = @Translation("mansory_teaser_role"),
 *      }
 *  }
 * )
 * 
 */

class FnewsMansoryTeaser extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_mansory_teaser_map.png");
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
            'fnmt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'mansory_teaser_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_member_photo/public/2019-07/mt-team-member-6.jpg?h=162673f0&itok=wl_aJPhY'
                                        alt='' class='__img'>"
                        ]
                    ],
                    'mansory_teaser_name' => [
                        'url' => [
                            'label' => 'Nom',
                            'value' => [
                                'link' => "#",
                                'text' => "Charlotte Bonnano",
                                'class' => "name"
                            ]
                        ]
                    ],
                    'mansory_teaser_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "Director of Membership"
                        ]
                    ]
                ]
            ]
        ];
    }

}