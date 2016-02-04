<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes;?>ds-1col">
	<div class="node-inner">

		<?php print render($title_suffix); ?>
		<?php print $ds_content; ?>

	</div>
</div>		



