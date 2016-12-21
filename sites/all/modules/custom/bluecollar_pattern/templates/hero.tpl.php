<h1>Hero</h1>
<hr>
<h3>Hero - Medium Sized Image - Responsive Images</h3>
<?php
//D7
$block = module_invoke('block', 'block_view', '71');
print render($block['content']);
?>

<pre><code class="language-markup">&lt;div class="hero" data-interchange="[/sites/all/themes/autodesk_foundation5/images/standard/support-hero-320.jpg, (small)],
                                [/sites/all/themes/autodesk_foundation5/images/standard/support-hero-768.jpg, (medium)],
                                [/sites/all/themes/autodesk_foundation5/images/standard/support-hero-1280.jpg, (large)],
                                [/sites/all/themes/autodesk_foundation5/images/standard/support-hero-2560.jpg, (xlarge)]"&gt;
    &lt;div class="row" data-equalizer=""&gt;
        &lt;div class="small-12 medium-7 large-5 columns"&gt;
            &lt;h1&gt;Support &amp; Learning&lt;/h1&gt;
            &lt;p&gt;Find tutorials, documentation, downloads, troubleshooting articles, and more&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<hr>
<h3>Hero - Large Sized Image, Single Image</h3>
<div class="hero hero--large" style="background-image: url('https://knowledge.autodesk.com/sites/all/themes/autodesk_foundation5/images/standard/contribution-marketing-hero-1280.jpg');">
  <div class="row" data-equalizer="">
    <div class="small-12 medium-7 large-6 columns">
      <h1>Build Your Professional Reputation</h1>
      <h2>with the Autodesk Knowledge Network</h2>
    </div>
  </div>
</div>

<pre><code class="language-markup">&lt;div class="hero hero--large" style="background-image: url('https://knowledge.autodesk.com/sites/all/themes/autodesk_foundation5/images/standard/contribution-marketing-hero-1280.jpg');">
  &lt;div class="row" data-equalizer="">
    &lt;div class="small-12 medium-7 large-6 columns">
      &lt;h1>Build Your Professional Reputation with the Autodesk Knowledge Network&lt;/h1>
    &lt;/div>
  &lt;/div>
&lt;/div>
</code></pre>