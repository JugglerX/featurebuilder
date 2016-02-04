
  <?php if ($page['top']): ?>
    <div class="layout-top layout">
      <div class="row">
        <div class="medium-12 column">
          <?php print render($page['top']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div class="layout-header layout">
      <div class="row">
        <?php print render($page['header']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['subheader']): ?>
    <div class="layout-subheader layout">
      <div class="row">
        <div class="medium-12 column">
          <?php print render($page['subheader']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['featured_fullwidth']): ?>
    <div class="layout-featured-fullwidth layout">
      <?php print render($page['featured_fullwidth']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div class="layout-featured layout ">
      <div class="row">
        <div class="medium-12 columns">
          <?php print render($page['featured']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="layout-middle layout">
    <div class="row">

      <?php if ($page['above_content']): ?>
        <div class="above-content medium-12 column">
          <?php print render($page['above_content']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['content']): ?>
        <div class="content <?php print $main_grid; ?> columns">
          <?php print render($title_prefix); ?>
          <?php print render($page['content']) ?>
          <?php print render($title_suffix); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_first'])): ?>
        <div class="sidebar <?php print $sidebar_first_grid; ?> columns">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <div class="sidebar <?php print $sidebar_sec_grid; ?> columns">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['below_content']): ?>
        <div class="below-content medium-12 column">
          <?php print render($page['below_content']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($page['canyon']): ?>
    <div class="layout-canyon layout">
      <div class="row">
        <div class="medium-12 column">
          <?php print render($page['canyon']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['canyon_fullwidth']): ?>
    <div class="layout-canyon-fullwidth layout">
      <?php print render($page['canyon_fullwidth']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['footer']): ?>
    <div class="layout-footer layout">
      <div class="row">
        <?php print render($page['footer']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($page['subfooter']): ?>
    <div class="layout-subfooter layout">
      <div class="row">
        <div class="medium-12 column">
          <?php print render($page['subfooter']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

