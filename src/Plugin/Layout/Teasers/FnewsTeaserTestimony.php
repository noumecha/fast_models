<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Teaser Testimony
 * 
 * @Layout (
 *  id = "f_news_teaser_testimony",
 *  label = @Translation("f_news_teaser_testimony"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_testimony",
 *  library = "fast_models/f_news_teaser_testimony",
 *  default_region = "content",
 *  regions = {
 *      "teaser_testimony_text" = {
 *          "label" = @Translation("teaser_testimony_text"),
 *      },
 *      "teaser_testimony_image" = {
 *          "label" = @Translation("teaser_testimony_image"),
 *      },
 *      "teaser_testimony_name" = {
 *          "label" = @Translation("teaser_testimony_name"),     
 *      },
 *      "teaser_testimony_role" = {
 *          "label" = @Translation("teaser_testimony_role"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserTestimony extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_testimony_map.png");
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
            'fntt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_testimony_text' => [
                        'text_html' => [
                            'label' => 'Texte',
                            'value' => "In voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur."
                        ]
                    ],
                    'teaser_testimony_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_testimonial/public/2019-07/mt-testimonial-1.jpg?h=87136cbf&amp;itok=tPsNYyMV'
                                     alt='Testimonial image' typeof='Image' class='__img'>"
                        ]
                    ],
                    'teaser_testimony_name' => [
                        'url' => [
                            'label' => 'Nom',
                            'value' => [
                                'link' => "#",
                                'text' => "John Smith",
                                'class' => "name-link"
                            ]
                        ]
                    ],
                    'teaser_testimony_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "Founder & CEO, Company name"
                        ]
                    ]
                ]
            ]
        ];
    }

}