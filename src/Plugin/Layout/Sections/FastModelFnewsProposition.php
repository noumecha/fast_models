<?php

namespace Drupal\fast_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * f_news first service section
 * 
 * @Layout (
 *  id = "fast_model_fnews_proposition",
 *  label = @Translation("f_news_proposition"),
 *  category = @Translation("fast_models"),
 *  path = "layouts/sections",
 *  template = "fast_model_fnews_proposition",
 *  library = "fast_models/fast_model_fnews_proposition",
 *  default_region = "content",
 *  regions = {
 *      "latest_title" = {
 *          "label" = @Translation("latest_title"),     
 *      },
 *      "latest_list" = {
 *          "label" = @Translation("latest_list"),
 *      },
 *      "read_title" = {
 *          "label" = @Translation("read_title"),
 *      },
 *      "read_list" = {
 *          "label" = @Translation("read_list"),
 *      },
 *      "more_btn_text" = {
 *          "label" = @Translation("more_btn_text"),
 *      },
 * }
 * )
 * 
 */

class FastModelFnewsProposition extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'fast_models') . "/icons/sections/proposition.png");
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
            'fnews_proposition' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'latest_title' => [
                        'text_html' => [
                            'label' => 'latest_title',
                            'value' => "<p> Latest Posts </p>"
                        ]
                    ],
                    'read_title' => [
                        'text_html' => [
                            'label' => 'read_title',
                            'value' => "<p> Most Read </p>"
                        ]
                    ],
                    'more_btn_text' => [
                        'text_html' => [
                            'label' => 'read_title',
                            'value' => '<a href="#">More</a>'
                        ]
                    ]
                    'read_list' => [
                        'text_html' => [
                            'label' => 'read_list',
                            'value' => '<div class="row">

                    <div class=" col-lg-6 col-md-6 featured-single-card">
                        <div class="img-handler">

                            <a href="#" class="img-sup"><img class="card-img" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-18.jpg?itok=UdwkXLYg" alt=""></a>
                        </div>
                        <div class="pub-info">
                            <p>
                                Apr 30, 2020 / Health
                            </p>
                        </div>
                        <div class="card-text-descriptor">
                            <a href="">Things that can help to boost your immune system</a>
                        </div>
                        <div class="role">
                            <p>Admin</p>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6">
                        <div class="featured-single-card">
                            <div class="img-handler">

                                <a href="#" class="img-sup"><img class="card-img" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-17.jpg?itok=x-SjIpHf" alt=""></a>
                            </div>
                            <div class="pub-info">
                                <p>
                                    Apr 30, 2020 / Health
                                </p>
                            </div>
                            <div class="card-text-descriptor">
                                <a href="">Things that can help to boost your immune system</a>
                            </div>
                            <div class="role">
                                <p>Admin</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-single-card">
                            <div class="img-handler">

                                <a href="#" class="img-sup"><img class="card-img" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-05/mt-post-16.jpg?itok=VzOi5lt_" alt=""></a>
                            </div>
                            <div class="pub-info">
                                <p>
                                    Apr 30, 2020 / Health
                                </p>
                            </div>
                            <div class="card-text-descriptor">
                                <a href="">Things that can help to boost your immune system</a>
                            </div>
                            <div class="role">
                                <p>Admin</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-single-card">
                            <div class="img-handler">

                                <a href="#" class="img-sup"><img class="card-img" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_large/public/2020-04/mt-post-15.jpg?itok=x6E9VFYp" alt=""></a>
                            </div>
                            <div class="pub-info">
                                <p>
                                    Apr 30, 2020 / Health
                                </p>
                            </div>
                            <div class="card-text-descriptor">
                                <a href="">Things that can help to boost your immune system</a>
                            </div>
                            <div class="role">
                                <p>Admin</p>
                            </div>
                        </div>
                    </div>'
                        ]
                    ]
                    'latest_list' => [
                        'text_html' => [
                            'label' => 'read_title',
                            'value' => '<div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-18.jpg?itok=KlDfSRjU" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">

                            <h5 class="post-link">
                                <a href="#">Here\'s what happened to the stock market</a>
                            </h5>
                            <p class="posted-date">
                                04 May, 2020
                            </p>
                        </div>
                    </div>
                    <div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-17.jpg?itok=SOsCQMtS" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">

                            <h5 class="post-link">
                                <a href="#">Here\'s what happened to the stock market Here\'s what happened to the stock
                                    market Here\'s what happened to the stock market</a>
                            </h5>
                            <p class="posted-date">
                                04 May, 2020
                            </p>
                        </div>

                    </div>
                    <div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-05/mt-post-16.jpg?itok=ZiSiWhGA" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">

                            <h5 class="post-link">
                                <a href="#">Here\'s what happened to the stock market</a>
                            </h5>
                            <p class="posted-date">
                                04 May, 2020
                            </p>
                        </div>

                    </div>
                    <div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-15.jpg?itok=auXz3mfG" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">

                            <h5 class="post-link">
                                <a href="#">Here\'s what happened to the stock market</a>
                            </h5>
                            <p class="posted-date">
                                04 May, 2020
                            </p>
                        </div>

                    </div>
                    <div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-14.jpg?itok=HHoDHXj3" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">
                            <div class="info d-block">

                                <h5 class="post-link">
                                    <a href="#">Here\'s what happened to the stock market</a>
                                </h5>
                                <p class="posted-date">
                                    04 May, 2020
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-13.jpg?itok=6iRdfWyk" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">

                            <h5 class="post-link">
                                <a href="#">Here\'s what happened to the stock market</a>
                            </h5>
                            <p class="posted-date">
                                04 May, 2020
                            </p>
                        </div>

                    </div>
                    <div class="single-post d-flex">
                        <div class="post-img-handler">
                            <a href="#" class="link">
                                <img height="80px" src="https://demo.morethanthemes.com/flashyplus-news8/default/sites/default/files/styles/mt_teaser_compact/public/2020-04/mt-post-12.jpg?itok=8FzLk5k9" alt="" class="post-img">
                            </a>
                        </div>
                        <div class="info d-block">

                            <h5 class="post-link">
                                <a href="#">Here\'s what happened to the stock market</a>
                            </h5>
                            <p class="posted-date">
                                04 May, 2020
                            </p>
                        </div>

                    </div>'
                        ]
                    ]
                ]
            ]
        ];
    }

}