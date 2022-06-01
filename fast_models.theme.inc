<?php

function template_preprocess_layoutmenu_fast_models_fn_first_menu(&$vars) {
  $vars['items'] = $vars['element']['#items'];
  $vars['children'] = $vars['element']['#children'];
}
function template_preprocess_layoutmenu_fast_models_fn_second_menu(&$vars) {
  $vars['items'] = $vars['element']['#items'];
  $vars['children'] = $vars['element']['#children'];
}
function template_preprocess_layoutfield_f_news_teaser_service(&$vars) {
 
}
