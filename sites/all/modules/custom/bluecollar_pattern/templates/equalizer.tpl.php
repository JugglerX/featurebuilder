<h1>Equalizer</h1>
<h3 class="subheader">Create equal height columns without using minimum-height.</h3>
<hr>


<p>You can create an equal height container using a few data attributes. Apply the <code>data-equalizer</code> attribute to a parent container. Then apply the <code>data-equalizer-watch</code> attribute to each element you'd like to have an equal height. The height of <code>data-equalizer-watch</code> attribute will be equal to that of the tallest element.</p>
<div class="row">
  <div class="small-12 columns">
    <h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;div class="row" data-equalizer="" data-options="equalize_on_stack: true">
  &lt;div class="medium-4 columns">
    &lt;div class="panel panel--solid" data-equalizer-watch="">
      &lt;h3>Panel 1&lt;/h3>
      &lt;p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.&lt;/p>
    &lt;/div>
  &lt;/div>
  &lt;div class="medium-4 columns">
    &lt;div class="panel panel--solid" data-equalizer-watch="">
      &lt;h3>Panel 2&lt;/h3>
      &lt;p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. estas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p>
    &lt;/div>
  &lt;/div>
  &lt;div class="medium-4 columns">
    &lt;div class="panel panel--solid" data-equalizer-watch="">
      &lt;h3>Panel 3&lt;/h3>
      &lt;p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;/p>
    &lt;/div>
  &lt;/div>
&lt;/div></code></pre>
  </div>
</div>

<h4 class="sg">RENDERED HTML</h4>

<div class="row" data-equalizer="" data-options="equalize_on_stack: true">
  <div class="medium-4 columns">
    <div class="panel panel--solid" data-equalizer-watch="">
      <h3>Panel 1</h3>
      <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="panel panel--solid" data-equalizer-watch="">
      <h3>Panel 2</h3>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. estas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </div>
  </div>
  <div class="medium-4 columns">
    <div class="panel panel--solid" data-equalizer-watch="">
      <h3>Panel 3</h3>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </div>
  </div>
</div>

<hr>
<h2>Stacked Columns</h2>
<p>If you have a grid of columns (more than 1 row) you need to apply the following option</p>
<pre><code class="language-html">&lt;div class="row" data-equalizer="" data-options="equalize_on_stack: true”></code></pre>