<h1>Tooltip</h1>
<p>Tooltip implemented with the <a href="http://iamceege.github.io/tooltipster/">Tooltipster</a> library</p>
<a class="pattern__library"><i class="fa fa-bolt" aria-hidden="true"></i> <strong>Library: </strong>
    http://iamceege.github.io/tooltipster/</a>
<hr>
<h2>Icon Tooltip</h2>
<h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;span class="tooltipster-icon" data-tooltip-content="#tooltip-one">&lt;i class="fa fa-info-circle" aria-hidden="true">&lt;/i>&lt;/span>

&lt;div class="tooltipster-region">
    &lt;div id="tooltip-one">
        &lt;p>We detect your company from the primary email address in your &lt;a href="#">Autodesk Profile.&lt;/a>&lt;/p>
    &lt;/div>
&lt;/div></code></pre>
<h4 class="sg">JS</h4>
<pre><code class="language-javascript">$('.tooltipster-icon').tooltipster({
    animation: 'fade',
    delay: [300,100],
    trigger: 'custom',
    triggerOpen: {
        mouseenter: true,
        touchstart: true
    },
    triggerClose: {
        mouseleave: true,
        click: true,
        scroll: true,
        tap: true
    },
    interactive: true,
    side: "right",
    arrow: true,
    maxWidth: 250
});</code></pre>



<h4 class="sg">Rendered HTML</h4>
<span class="tooltipster-icon" data-tooltip-content="#tooltip-one"><i class="fa fa-info-circle" aria-hidden="true"></i></span>

<div class="tooltipster-region">
    <div id="tooltip-one">
        We detect your company from the primary email address in your <a href="#">Autodesk Profile.</a>
    </div>
</div>

<br>
<br>
<h2>Text Tooltip</h2>
<h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;p>This is a text &lt;span class="tooltipster-text" data-tooltip-content="#tooltip-two">tooltip&lt;/span> using Tooltipster.&lt;/p>

&lt;div class="tooltipster-region">
    &lt;div id="tooltip-two">
        &lt;p>text in a tooltip&lt;/p>
    &lt;/div>
&lt;/div></code></pre>

<h4 class="sg">JS</h4>
<pre><code class="language-javascript">$('.tooltipster-text').tooltipster({
  animation: 'fade',
    delay: [300,100],
    trigger: 'custom',
    triggerOpen: {
        mouseenter: true,
        touchstart: true
    },
    triggerClose: {
        mouseleave: true,
        click: true,
        scroll: true,
        tap: true
    },
    interactive: true,
    side: "right",
    arrow: true,
    maxWidth: 250
});</code></pre>


<h4 class="sg">Rendered HTML</h4>
<p>This is a text <span class="tooltipster-text" data-tooltip-content="#tooltip-two">tooltip</span> using Tooltipster.</p>

<div class="tooltipster-region">
    <div id="tooltip-two">
        text in a tooltip
    </div>
</div>

<br>
<br>
<h3>Tooltipster Options</h3>
<p>You can specify your own options by using the .tooltipster() method on your custom selector. All available options can be found in the <a href="http://iamceege.github.io/tooltipster/#options">Tooltipster documention</a></p>
<pre><code class="language-js">$(document).ready(function() {
    $('.tooltipster').tooltipster({
        animation: 'fade',
        delay: [300,100],
        trigger: 'custom',
        triggerOpen: {
            mouseenter: true,
            touchstart: true
        },
        triggerClose: {
            mouseleave: true,
            click: true,
            scroll: true,
            tap: true
        },
        interactive: true,
        side: "right",
        arrow: true,
        maxWidth: 250
    })
});</code></pre>