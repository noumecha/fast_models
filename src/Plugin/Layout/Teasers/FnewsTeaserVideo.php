<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews teaser video
 * @Layout(
 *  id = "f_news_teaser_video",
 *  label = @Translation("f_news_teaser_video"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_video",
 *  library = "fast_models/f_news_teaser_video",
 *  default_region = "content",
 *  regions = {
 *      "teaser_video_image" = {
 *          "label" = @Translation("teaser_video_image"),     
 *      },
 *      "teaser_video_date" = {
 *          "label" = @Translation("teaser_video_date"),     
 *      },
 *      "teaser_video_cat" = {
 *          "label" = @Translation("teaser_video_cat"),     
 *      },
 *      "teaser_video_link" = {
 *          "label" = @Translation("teaser_video_link"),
 *      },
 *      "teaser_video_role" = {
 *          "label" = @Translation("teaser_video_role"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserVideo extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_video_map.png");
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
            'fntv' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_video_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img class="card-img"
                                        src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/video_thumbnails/ViuDsy7yb8M.jpg?itok=NZNg1pjc"
                                        alt=""/>'
                        ]
                    ],
                    'teaser_video_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => " <p> Apr 30, 2020 </p>"
                        ]
                    ],
                    '' => [
                        'text_html' => [
                            'label' => 'Category',
                            'value' => "/ Health"
                        ]
                    ],
                    'teaser_video_link' => [
                        'url' => [
                            'label' => 'Titre',
                            'value' => [
                                'link' => "#",
                                'text' => "Things that can help to boost your immune system",
                                'class' => "link"
                            ]
                        ]
                    ],
                    'teaser_video_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "<p>Admin</p>"
                        ]
                    ]
                ]
            ]
        ];
    }

}