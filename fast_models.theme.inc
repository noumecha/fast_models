<?php

function template_preprocess_layoutmenu_fast_models_fn_first_menu(&$vars) {
  $vars['items'] = $vars['element']['#items'];
  $vars['children'] = $vars['element']['#children'];
}