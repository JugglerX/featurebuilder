
<?php

/**
 * @file
 * Display Suite 3 Column Stacked template.
 */
?>

<<?php print $layout_wrapper; ?> id="node-<?php print $node->nid; ?>" class="<?php print $classes;?> ds ds-2col-stacked">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="ds-inner">  

  <?php if ($top): ?>
  <<?php print $top_wrapper ?> class="group group-top<?php print $top_classes; ?>">
  <?php print $top; ?>
  </<?php print $top_wrapper ?>>
  <?php endif; ?>

  <?php if ($left): ?>
  <<?php print $left_wrapper ?> class="group group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>
  <?php endif; ?>

  <?php if ($right): ?>
  <<?php print $right_wrapper ?> class="group group-right<?php print $right_classes; ?>">
    <?php print $right; ?>
  </<?php print $right_wrapper ?>>
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