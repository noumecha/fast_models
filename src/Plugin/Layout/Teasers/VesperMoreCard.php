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
 *  id = "vesper_more_card",
 *  label = @Translation("vesper more card"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "vesper_more_card",
 *  library = "fast_models/vesper_more_card",
 *  default_region = "content",
 *  regions = {
 *      "image" = {
 *          "label" = @Translation("image"),
 *      },
 *      "title" = {
 *          "label" = @Translation("title"),
 *      },
 *      "desc" = {
 *          "label" = @Translation("desc"),    
 *      },
 *      "read_more" = {
 *          "label" = @Translation("read_more"),     
 *      }
 *  }
 * )
 * 
 */

class VesperMoreCard extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/more-card-item.png");
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
    private function getMenus(array $fn_scd_nav) {
        foreach ($fn_scd_nav as $k => $m) {
            if (isset($m['#base_plugin_id']) && $m['#base_plugin_id'] === 'field_block') {
                               
                $fn_scd_nav[$k]['#attributes'] = [
                    'class' => [
                        'blog-btn'
                    ]
                ];
                // set a new theme hoock () : refers to .theme.inc file
                $fn_scd_nav[$k]['content']['#theme'] = 'layoutfield_f_news_bloag_teaser';
            }
        }
        return $fn_scd_nav;
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
            'vesper_more_card' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<a href="#"><img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/imgmore-services-2.jpg" alt=""></a>'
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
                    ],
                    'read_more' => [
                        'text_html' => [
                            'label' => 'read more',
                            'value' => '<a href="#" >Read More</a>'
                        ]
                    ],
                ]
            ]
        ];
    }

}