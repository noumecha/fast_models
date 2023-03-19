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
                    ]
                ]
            ]
        ];
    }


}