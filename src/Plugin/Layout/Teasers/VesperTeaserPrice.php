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
 *  id = "vesper_teaser_price",
 *  label = @Translation("vesper price teaser"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "vesper_teaser_price",
 *  library = "fast_models/vesper_teaser_price",
 *  default_region = "content",
 *  regions = {
 *      "icone" = {
 *          "label" = @Translation("icone"),
 *      },
 *      "title" = {
 *          "label" = @Translation("title"),
 *      },
 *      "price" = {
 *          "label" = @Translation("price"),
 *      },
 *      "desc" = {
 *          "label" = @Translation("desc"),    
 *      },
 *      "list_item" = {
 *          "label" = @Translation("list_item"),     
 *      },
 *      "link" = {
 *          "label" = @Translation("link"),     
 *      }
 *  }
 * )
 * 
 */

class VesperServiceCard extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/price-teaser.png");
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
                            'value' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z" fill="CurrentColor"></path>
                                    </svg>'
                        ]
                    ],
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => 'Limere Radses'
                        ]
                    ],
                    'price' => [
                        'text_html' => [
                            'label' => 'price',
                            'value' => '<sup>$</sup>0<span> / month</span>'
                        ]
                    ],
                    'desc' => [
                        'text_html' => [
                            'label' => 'desc',
                            'value' => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,totam rem."
                        ]
                    ],
                    'list_item' => [
                        'text_html' => [
                            'label' => 'list items',
                            'value' => ' <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>'
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'link',
                            'value' => '<a href="#" class="btn-buy">Buy Now</a>'
                        ]
                    ]

                ]
            ]
        ];
    }

}