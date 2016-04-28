<?php

/**
 * Override or insert variables into the page template for HTML output.
 */
function featurebuilder2016_process_html(&$variables) {

}

/**
 * Override or insert variables into the page template.
 */
function featurebuilder2016_process_page(&$variables) {
  // Convenience variables
  if (!empty($variables['page']['sidebar_first'])){
    $left = $variables['page']['sidebar_first'];
  }

  if (!empty($variables['page']['sidebar_second'])) {
    $right = $variables['page']['sidebar_second'];
  }

  // Dynamic sidebars
  if (!empty($left) && !empty($right)) {
    $variables['main_grid'] = 'large-6 push-3';
    $variables['sidebar_first_grid'] = 'large-3 pull-6';
    $variables['sidebar_sec_grid'] = 'large-3';
  } elseif (empty($left) && !empty($right)) {
    $variables['main_grid'] = 'large-9';
    $variables['sidebar_first_grid'] = '';
    $variables['sidebar_sec_grid'] = 'large-3';
  } elseif (!empty($left) && empty($right)) {
    $variables['main_grid'] = 'large-9 push-3';
    $variables['sidebar_first_grid'] = 'large-3 pull-9';
    $variables['sidebar_sec_grid'] = '';
  } else {
    $variables['main_grid'] = 'large-12';
    $variables['sidebar_first_grid'] = '';
    $variables['sidebar_sec_grid'] = '';
  }
}

/**
 * Override or insert variables into the block template.
 */
function featurebuilder2016_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
}

/**
 * Show contextual links on all nodes
 */
function featurebuilder2016_node_view_alter( &$build ) {
  $build['#contextual_links']['node'] = array('node', array($build['#node']->nid));
}
