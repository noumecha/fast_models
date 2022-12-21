<?php

namespace Drupal\fast_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Fnews member Teaser
 * 
 * @Layout (
 *  id = "f_news_teaser_member",
 *  label = @Translation("f_news_teaser_member"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/teasers",
 *  template = "f_news_teaser_member",
 *  library = "fast_models/f_news_teaser_member",
 *  default_region = "content",
 *  regions = {
 *      "teaser_member_image" = {
 *          "label" = @Translation("teaser_member_image"),
 *      },
 *      "teaser_member_role" = {
 *          "label" = @Translation("teaser_member_role"),
 *      },
 *      "teaser_member_name" = {
 *          "label" = @Translation("teaser_member_name"),*     
 *      },
 *      "teaser_member_icon" = {
 *          "label" = @Translation("teaser_member_icon"),     
 *      },
 *      "teaser_member_icon_one" = {
 *          "label" = @Translation("teaser_member_icon_one"),
 *      },
 *      "teaser_member_icon_two" = {
 *          "label" = @Translation("teaser_member_icon_two"),     
 *      },
 *      "teaser_member_icon_three" = {
 *          "label" = @Translation("teaser_member_icon_three"),     
 *      }
 *  }
 * )
 * 
 */

class FnewsTeaserMember extends FormatageModelsTeasers
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/teasers/f_news_teaser_member_map.png");
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
            'fntm' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'teaser_member_image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => "<img src='https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_member_photo/public/2019-07/mt-team-member-6.jpg?h=162673f0&itok=wl_aJPhY'
                                 alt='' class='__img'>"
                        ]
                    ],
                    'teaser_member_role' => [
                        'text_html' => [
                            'label' => 'Role',
                            'value' => "Director of Membership"
                        ]
                    ],
                    'teaser_member_name' => [
                        'url' => [
                            'label' => 'Nom',
                            'value' => [
                                'link' => "#",
                                'text' => "Charlotte Bonnano",
                                'class' => "name"
                            ]
                        ]
                    ],
                    'teaser_member_icon' => [
                        'text_html' => [
                            'label' => 'Icone 1',
                            'value' => "<svg class='__svg' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img
                                            width='20' height='20' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'>
                                            <path fill='currentColor'
                                            d='M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.578a9.3 9.3 0 0 1-2.958 1.13a4.66 4.66 0 0 0-7.938 4.25a13.229 13.229 0 0 1-9.602-4.868c-.4.69-.63 1.49-.63 2.342A4.66 4.66 0 0 0 3.96 9.824a4.647 4.647 0 0 1-2.11-.583v.06a4.66 4.66 0 0 0 3.737 4.568a4.692 4.692 0 0 1-2.104.08a4.661 4.661 0 0 0 4.352 3.234a9.348 9.348 0 0 1-5.786 1.995a9.5 9.5 0 0 1-1.112-.065a13.175 13.175 0 0 0 7.14 2.093c8.57 0 13.255-7.098 13.255-13.254c0-.2-.005-.402-.014-.602a9.47 9.47 0 0 0 2.323-2.41l.002-.003Z' />
                                        </svg>"
                        ]
                    ],
                    'teaser_member_icon_one' => [
                        'text_html' => [
                            'label' => 'Icone 2',
                            'value' => "<svg class='__svg' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img'
                                            width='20' height='20' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'>
                                            <path fill='currentColor' fill-rule='evenodd'
                                            d='M0 12.067C0 18.033 4.333 22.994 10 24v-8.667H7V12h3V9.333c0-3 1.933-4.666 4.667-4.666c.866 0 1.8.133 2.666.266V8H15.8c-1.467 0-1.8.733-1.8 1.667V12h3.2l-.533 3.333H14V24c5.667-1.006 10-5.966 10-11.933C24 5.43 18.6 0 12 0S0 5.43 0 12.067Z'
                                            clip-rule='evenodd' />
                                        </svg>"
                        ]
                    ],
                    'teaser_member_icon_two' => [
                        'text_html' => [
                            'label' => 'Icone 3',
                            'value' => "<svg class='__svg' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img'
                                            width='20' height='20' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'>
                                            <path fill='currentColor' fill-rule='evenodd'
                                            d='M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z'
                                            clip-rule='evenodd' />
                                        </svg>"
                        ]
                    ],
                    'teaser_member_icon_three' => [
                        'text_html' => [
                            'label' => 'Icone 4',
                            'value' => "<svg class='__svg' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' role='img'
                                            width='20' height='20' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'>
                                            <g fill='none'>
                                                <g clip-path='url(#svgIDa)'>
                                                    <path fill='currentColor'
                                                      d='M23.5 6.507a2.786 2.786 0 0 0-.766-1.27a3.05 3.05 0 0 0-1.338-.742C19.518 4 11.994 4 11.994 4a76.624 76.624 0 0 0-9.39.47a3.16 3.16 0 0 0-1.338.76c-.37.356-.638.795-.778 1.276A29.09 29.09 0 0 0 0 12c-.012 1.841.151 3.68.488 5.494c.137.479.404.916.775 1.269c.371.353.833.608 1.341.743c1.903.494 9.39.494 9.39.494a76.8 76.8 0 0 0 9.402-.47a3.05 3.05 0 0 0 1.338-.742a2.78 2.78 0 0 0 .765-1.27A28.38 28.38 0 0 0 24 12.023a26.579 26.579 0 0 0-.5-5.517ZM9.602 15.424V8.577l6.26 3.424l-6.26 3.423Z' />
                                                </g>
                                                <defs>
                                                    <clipPath id='svgIDa'>
                                                        <path fill='#fff' d='M0 0h24v24H0z' />
                                                    </clipPath>
                                                </defs>
                                            </g>
                                        </svg>"
                        ]
                    ]
                ]
            ]
        ];
    }


}