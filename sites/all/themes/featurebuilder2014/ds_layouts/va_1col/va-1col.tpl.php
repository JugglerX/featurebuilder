
<?php

/**
 * @file
 * Display Suite 3 Column Stacked template.
 */
?>

<<?php print $layout_wrapper; ?> id="node-<?php print $node->nid; ?>" class="<?php print $classes;?> ds ds-1col">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="ds-inner">  

  <?php if ($middle): ?>
  <<?php print $middle_wrapper ?> class="group group-middle<?php print $middle_classes; ?>">
  <?php print $middle; ?>
  </<?php print $middle_wrapper ?>>
  <?php endif; ?>

  </div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>