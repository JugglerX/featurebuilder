<h1>Show/Hide Classes</h1>
<h3 class="subheader">Visibility classes let you show or hide elements based on screen size.</h3>
<hr>

<p class="panel">
  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
  <strong class="show-for-small-medium-up">This text is shown on small-medium screens and up.</strong>
  <strong class="show-for-small-medium-only">This text is shown only on a small-medium screen.</strong>
  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
</p>

<hr>
<h2>Show by Screen Size</h2>
<p>In this example, we use the <strong>show</strong> visibility classes to show certain strings of text based on the device on which users view a page. If their browser meets the class's conditions, the element will be shown. If not, it will be hidden.</p>
<div class="row">

    <div class="medium-6 columns">
    <h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;p class="panel">
    &lt;strong class="show-for-small-only">This text is shown only on a small screen.&lt;/strong>
    &lt;strong class="show-for-small-medium-up">This text is shown on small-medium screens and up.&lt;/strong>
    &lt;strong class="show-for-small-medium-only">This text is shown only on a small-medium screen.&lt;/strong>
    &lt;strong class="show-for-medium-up">This text is shown on medium screens and up.&lt;/strong>
    &lt;strong class="show-for-medium-only">This text is shown only on a medium screen.&lt;/strong>
    &lt;strong class="show-for-large-up">This text is shown on large screens and up.&lt;/strong>
    &lt;strong class="show-for-large-only">This text is shown only on a large screen.&lt;/strong>
    &lt;/p>
</pre></code>
    </div>
    <div class="medium-6 columns">
    <h4 class="sg">Rendered HTML</h4>
        <p class="panel">
            <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
            <strong class="show-for-small-medium-up">This text is shown on small-medium screens and up.</strong>
            <strong class="show-for-small-medium-only">This text is shown only on a small-medium screen.</strong>
            <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
            <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
            <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
            <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
        </p>
    </div>
</div>

<hr>
<h2>Hide by Screen Size</h2>
<p>This example shows the opposite: It uses the <strong>hide</strong> visibility classes to state which elements should disappear based on your device's screen size or orientation. Users will see elements on every browser <strong>except</strong> those that meet these conditions.</p>
<div class="row">
  <div class="medium-6 columns">
  <h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;strong class="hide-for-small-only">You are &lt;em>not&lt;/em> on a small screen.&lt;/strong>
&lt;strong class="hide-for-small-medium-up">You are &lt;em>not&lt;/em> on a small-medium, medium or large screen&lt;/strong>
&lt;strong class="hide-for-small-medium-only">You are &lt;em>not&lt;/em> on a small-medium screen.&lt;/strong>
&lt;strong class="hide-for-medium-up">You are &lt;em>not&lt;/em> on a medium or large screen&lt;/strong>
&lt;strong class="hide-for-medium-only">You are &lt;em>not&lt;/em> on a medium screen.&lt;/strong>
&lt;strong class="hide-for-large-only">You are &lt;em>not&lt;/em> on a large screen.&lt;/strong>
&lt;strong class="hide-for-large-up">You are &lt;em>not&lt;/em> on a large screen or up.&lt;/strong>
</code></pre>
  </div>
  <div class="medium-6 columns">
  <h4 class="sg">Rendered HTML</h4>
    <p class="panel">
        <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
        <strong class="hide-for-small-medium-up">You are <em>not</em> on a small-medium, medium or large screen</strong>
        <strong class="hide-for-small-medium-only">You are <em>not</em> on a small-medium screen.</strong>
        <strong class="hide-for-medium-up">You are <em>not</em> on a medium or large screen</strong>
        <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
        <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
        <strong class="hide-for-large-up">You are <em>not</em> on a large screen or up.</strong>
    </p>
  </div>
</div>
