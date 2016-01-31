
<?php

/**
 * @file
 * Display Suite 2 Column template.
 */
?>

<<?php print $layout_wrapper; ?> id="node-<?php print $node->nid; ?>" class="<?php print $classes;?> ds ds-2col">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="ds-inner">  

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

  </div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>