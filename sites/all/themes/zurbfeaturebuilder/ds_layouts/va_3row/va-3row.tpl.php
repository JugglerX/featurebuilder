
<?php

/**
 * @file
 * Display Suite 3 row template.
 */
?>

<<?php print $layout_wrapper; ?> id="node-<?php print $node->nid; ?>" class="<?php print $classes;?> ds ds-3row">

  <div class="ds-inner">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($top): ?>
  <<?php print $top_wrapper ?> class="group group-top<?php print $top_classes; ?>">
  <?php print $top; ?>
  </<?php print $top_wrapper ?>>
  <?php endif; ?>

   <?php if ($middle): ?>
  <<?php print $middle_wrapper ?> class="group group-middle<?php print $middle_classes; ?>">
  <?php print $middle; ?>
  </<?php print $middle_wrapper ?>>
  <?php endif; ?>


 <?php if ($bottom): ?>
  <<?php print $bottom_wrapper ?> class="group group-bottom<?php print $bottom_classes; ?>">
  <?php print $bottom; ?>
  </<?php print $bottom_wrapper ?>>
  <?php endif; ?>

  </div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
