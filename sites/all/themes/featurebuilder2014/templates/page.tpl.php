
<div class="wrapper <?php print $classes; ?>">

	<!-------------------------- Header ------------------------------>
	<?php if ($page['top']): ?>
	<div class="layout-top layout">
			<?php print render($page['top']); ?>
	</div>
	<?php endif; ?>

	<?php if ($page['header']): ?>
	<div class="layout-header layout">
			<?php print render($page['header']); ?>
	</div>
	<?php endif; ?>

	<?php if ($page['subheader']): ?>
	<div class="layout-subheader layout">
			<?php print render($page['subheader']); ?>
	</div>
    <?php endif; ?>

    <?php if ($page['featured_fullwidth']): ?>
	<div class="layout-featured-fullwidth layout">
			<?php print render($page['featured_fullwidth']); ?>
	</div>
	<?php endif; ?>

    <?php if ($page['featured']): ?>
	<div class="layout-featured layout">
			<?php print render($page['featured']); ?>
	</div>
	<?php endif; ?>

	<!-------------------------- Middle ------------------------------>

	<div class="layout-middle layout">
		<div class="layout-inner">

      		<div class="content">
      			<div class="content-inner">


					<?php if ($page['above_content']): ?>
						<?php print render($page['above_content']); ?>
					<?php endif; ?>

					<?php if ($page['sidebar_first']): ?>
						<?php print render($page['sidebar_first']); ?>
					<?php endif; ?>

					<?php if ($page['content']): ?>

						<?php print render($title_prefix); ?>      

						<?php print render($page['content']) ?>

						<?php print render($title_suffix); ?>

					<?php endif; ?>

					<?php if ($page['sidebar_second']): ?>
						<?php print render($page['sidebar_second']); ?>
					<?php endif; ?>

					<?php if ($page['below_content']): ?>
						<?php print render($page['below_content']); ?>
					<?php endif; ?>

			</div>
			</div>

		</div>
	</div>


	<!-------------------------- Canyons ------------------------------>
	
	<?php if ($page['canyon']): ?>
	<div class="layout-canyon layout">
			<?php print render($page['canyon']); ?>
	</div>
	<?php endif; ?>

    <?php if ($page['canyon_fullwidth']): ?>
	<div class="layout-canyon-fullwidth layout">
			<?php print render($page['canyon_fullwidth']); ?>
	</div>
	<?php endif; ?>


     <!-------------------------- Footer ------------------------------>

     <?php if ($page['footer']): ?>
     <div class="layout-footer layout">
     		<?php print render($page['footer']); ?>
     </div>
  	 <?php endif; ?>

     <?php if ($page['subfooter']): ?>
     <div class="layout-subfooter layout">
     		<?php print render($page['subfooter']); ?>
     </div>
  	 <?php endif; ?>

</div>
