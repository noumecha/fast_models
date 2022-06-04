<?php
use Drupal\Core\Render\Element;
// preprocess function for first menu nav 
function template_preprocess_layoutmenu_fast_models_fn_first_menu(&$vars) {
  $vars['items'] = $vars['element']['#items'];
  $vars['children'] = $vars['element']['#children'];
}
// preprocess function for second menu nav 
function template_preprocess_layoutmenu_fast_models_fn_second_menu(&$vars) {
  $vars['items'] = $vars['element']['#items'];
  $vars['children'] = $vars['element']['#children'];
}
// preprocess function for field 
function template_preprocess_layoutfield_f_news_teaser_service(&$vars) {
  $elements = Element::children($vars['element']);
  $items = [];
    foreach ($elements as $delta) {
      $items[$delta] = $vars['element'][$delta];
    }
    $vars['items'] = $items;
}
// preprocess function for blog teaser tag 
function template_preprocess_layoutfield_f_news_blog_teaser(&$vars)
{
  $elements = Element::children($vars['element']);
  $items = [];
  foreach($elements as $delta)
  {
    $items[$delta] = $vars['element'][$delta];
  }
  $vars['items'] = $items;
} 

// preprocess function for article tag field 
function template_preprocess_layoutfield_f_news_article_tag(&$vars)
{
  $elements = Element::children($vars['element']);
  $items = [];
  foreach($elements as $delta)
  {
    $items[$delta] = $vars['element'][$delta];
  }
  $vars['items'] = $items;
}