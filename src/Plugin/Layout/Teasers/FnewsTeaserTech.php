<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * fnews teaser tech stories
 * @Layout(
 *  id = "f_news_teaser_tech",
 *  label = @Translation("f_news_teaser_tech"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_tech",
 *  library = "fast_models/f_news_teaser_tech",
 *  default_region = "content",
 *  regions = {
 *      "teaser_tech_date" = {
 *          "label" = @Translation("teaser_tech_date"),     
 *      },
 *      "teaser_tech_title" = {
 *          "label" = @Translation("teaser_tech_title"),     
 *      },
 *      "teaser_tech_text" = {
 *          "label" = @Translation("teaser_tech_text"),     
 *      },
 *      "teaser_tech_image" = {
 *          "label" = @Translation("teaser_tech_image"),     
 *      },
 *      "teaser_tech_role" = {
 *          "label" = @Translation("teaser_tech_role"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserTech extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_tech_map.png");
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
    public function  defaultConfiguration() 
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'fnttech' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_tech_date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "<p>Apr 30, 2020</p>",
                        ]
                    ],
                    'teaser_tech_title' => [
                        'url' => [
                            'label' => 'Titre',
                            'value' => [
                                'link' => "#",
                                'text' => "Stunning photos of our universe",
                                'class' => "link"
                            ]
                        ]
                    ],
                    'teaser_tech_text' => [
                        'text_html' => [
                            'label' => 'Texte',
                            'value' => "<p> A tellus risus dis. Orci sagittis sociosqu senectus est facilisis est facilisis neque rutrum
                                        dapibus! </p>"
                        ]
                    ],
                    'teaser_tech_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img class="img"
                                 src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/thumbnail/public/pictures/2019-08/avatar_0.jpg?itok=QV437nlh"
                                 alt="">'
                        ]
                    ],
                    'teaser_tech_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "<p> Admin </p>"
                        ]
                    ]
                ]
            ]
        ];
    }

}