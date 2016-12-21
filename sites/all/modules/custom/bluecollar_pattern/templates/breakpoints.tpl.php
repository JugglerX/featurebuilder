<h1>Breakpoints</h1>
<hr>

<pre><code class="language-scss">// Old Breakpoints
// small: 767px
// medium: 768px - 1279px
// large: 1280px - 1440px

// Transitional Breakpoints
$small-range: (0px, 767px);
$small-medium-range: (768px, 1023px);
$medium-range: (768px, 1279px);
$large-range: (1280px, 5000px);

// Proposed Final Breakpoints
// $small-range: (0px, 767px);
// $small-medium-range: (768px, 1023px);
// $medium-range: (1024px, 1279px);
// $large-range: (1280px, 5000px);</code></pre>
<hr>
<h3>Respond With Classes</h3>
<p>Apply classes to markup to control grid and column sizing at different breakpoints.
<h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;div class="row"&gt;
    &lt;div class="small-12 small-medium-9 medium-8 large-8 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-12 small-medium-3 medium-4 large-4 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<hr>
<h3>Respond With Sass</h3>

<p>Use these media queries in SASS. Choose between scaling or fixed ranges.
    <code>#{small-up}</code> would apply to <em>0px</em> and up until <code>#{medium-up}</code> overrides it.
    <code>#{small-only}</code> applies to a fixed range between <em>0px - 767px</em>.</p>
<h4 class="sg">SCSS</h4>

<pre><code class="language-scss">@media #{$small-up} {}              // 0px and up
@media #{$small-only} {}            // 0px - 767px
@media #{$small-medium-up} {}       // 768px and up
@media #{$small-medium-only} {}     // 768px - 1023px
@media #{$medium-up} {}             // 1024px and up
@media #{$medium-only} {}           // 1024px - 1279px
@media #{$large-up} {}              // 1280px and up
@media #{$large-only} {}            // 1280px - 5000px
</code></pre>
