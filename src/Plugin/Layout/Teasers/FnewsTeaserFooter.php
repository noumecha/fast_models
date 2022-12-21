<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews footer teaser 
 * 
 * @Layout (
 *  id = "f_news_teaser_footer",
 *  label = @Translation("f_news_teaser_footer"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_footer",
 *  library = "fast_models/f_news_teaser_footer",
 *  default_region = "content",
 *  regions = {
 *      "teaser_fimage" = {
 *          "label" = @Translation("teaser_fimage"),     
 *      },
 *      "teaser_fdate" = {
 *          "label" = @Translation("teaser_fdate"),     
 *      },
 *      "teaser_ftext" = {
 *          "label" = @Translation("teaser_ftext"),     
 *      }
 *  }
 * )
 */

class FnewsTeaserFooter extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_footer_map.png");
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
            'ftt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_fimage' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<a href='#' class='fn-article__img'>
                                            <img src='https://img.bfmtv.com/c/630/420/871/7b9f41477da5f240b24bd67216dd7.jpg' alt=''>
                                        </a>"
                        ]
                    ],
                    'teaser_ftext' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => "Here’s what happened to the stock market"
                        ]
                    ],
                    'teaser_fdate' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => "04 may, 2020"
                        ]
                    ]
                ]
            ]
        ];
    }


}