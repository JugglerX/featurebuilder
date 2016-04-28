<?php

/**
 * @file
 * Display Suite 2 column template.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes;?> ds ds-2col">
  <div class="node-inner">

    <?php print render($title_suffix); ?>
    
    <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
    </<?php print $left_wrapper ?>>

    <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
    <?php print $right; ?>
    </<?php print $right_wrapper ?>>

  </div>
</div>    



