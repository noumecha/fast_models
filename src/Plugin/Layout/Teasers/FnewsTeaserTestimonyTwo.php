<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews Teaser Testimony Two
 * 
 * @Layout (
 *  id = "f_news_teaser_testimony_two",
 *  label = @Translation("f_news_teaser_testimony_two"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "ff_news_teaser_testimony_two",
 *  library = "fast_models/f_news_teaser_testimony_two",
 *  default_region = "content",
 *  regions = {
 *      "teaser_testimony_two_image" = {
 *          "label" = @Translation("teaser_testimony_two_image"),     
 *      },
 *      "teaser_testimony_two_text" = {
 *          "label" = @Translation("teaser_testimony_two_text"),     
 *      },
 *      "teaser_testimony_two_name" = {
 *          "label" = @Translation("teaser_testimony_two_name"),     
 *      },
 *      "teaser_testimony_two_role" = {
 *          "label" = @Translation("teaser_testimony_two_role"),
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserTestimonyTwo extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_testimony_two_map.png");
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
            'fnttt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_testimony_two_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_testimonial/public/2019-07/mt-testimonial-5.jpg?h=87136cbf&itok=GhQsqNXW'
                                 width='130px' height='130px' alt='Testimonial image' typeof='Image' class='__img'>"
                        ]
                    ],
                    'teaser_testimony_two_text' => [
                        'text_html' => [
                            'label' => 'Texte',
                            'value' => "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit."
                        ]
                    ],
                    'teaser_testimony_two_name' => [
                        'url' => [
                            'label' => 'Nom',
                            'value' => [
                                'link' => "#",
                                'text' => "Michelle F. Behne",
                                'class' => "name-link"
                            ]
                        ]
                    ],
                    'teaser_testimony_two_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "Counseloor at Reseach for all"
                        ]
                    ]
                ]
            ]
        ];
    }

}