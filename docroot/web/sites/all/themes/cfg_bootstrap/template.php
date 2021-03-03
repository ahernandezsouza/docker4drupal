<?php

/**
 * @file
 * Bootstrap sub-theme.
 *
 * Place your custom PHP code in this file.
 */


  function cfg_bootstrap_theme() {
    $items = array();
      
    $items['user_login'] = array(
      'render element' => 'form',
      'path' => drupal_get_path('theme', 'cfg_bootstrap') . '/templates',
      'template' => 'user-login',
      'preprocess functions' => array(
         'cfg_bootstrap_preprocess_user_login'
      ),
    );
    /*$items['user_register_form'] = array(
      'render element' => 'form',
      'path' => drupal_get_path('theme', 'yourtheme') . '/templates',
      'template' => 'user-register-form',
      'preprocess functions' => array(
        'yourtheme_preprocess_user_register_form'
      ),
    );
    $items['user_pass'] = array(
      'render element' => 'form',
      'path' => drupal_get_path('theme', 'yourtheme') . '/templates',
      'template' => 'user-pass',
      'preprocess functions' => array(
        'yourtheme_preprocess_user_pass'
      ),
    );*/
    return $items;
  }
  
  function cfg_bootstrap_preprocess_user_login(&$vars) {
    //$vars['intro_text'] = t('This is my awesome login form');
    $vars['form']['name']["#prefix"] = "";
    $vars['form']['name']["#title"] = "";
    $vars['name'] = render($vars['form']['name']);
    $vars['form']['pass']["#suffix"] = "";
    $vars['form']['pass']["#title"] = "";
    $vars['pass'] = render($vars['form']['pass']);
    $vars['form']['actions']["#suffix"] = "";
    $vars['form']['actions']['submit']["#icon"] = "";
    $vars['submit'] = render($vars['form']['actions']['submit']);
    $vars['rendered'] = drupal_render_children($vars['form']);
  }
  ?>