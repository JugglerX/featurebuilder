<h1>Modal</h1>
<h3 class="subheader">Foundation includes Reveal our jQuery modal plugin.</h3>
<hr>
<h2>Autodesk Modal</h2>
<h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;button class="button" data-reveal-id="myModal">Click Me For A Modal&lt;/button>
&lt;div id="myModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
  &lt;div class="reveal-modal__header">
    &lt;div class="reveal-modal__title">Modal Title&lt;/div>
    &lt;a class="reveal-modal__close--black close-reveal-modal" aria-label="Close">×&lt;/a>
  &lt;/div>
  &lt;div class="reveal-modal__body">
    &lt;h2>What type of download are you looking for?&lt;/h2>
    &lt;p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date&lt;/p>
  &lt;/div>
&lt;/div></code></pre>

<h4 class="sg">Rendered HTML</h4>
<button class="button" data-reveal-id="myModal">Autodesk Modal<i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<div id="myModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
  <div class="reveal-modal__header">
    <div class="reveal-modal__title">Modal Title</div>
    <a class="close-reveal-modal reveal-modal__close--black" aria-label="Close">×</a>
  </div>
  <div class="reveal-modal__body">
    <h2>What type of download are you looking for?</h2>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
  </div>
</div>

<button class="button" data-reveal-id="myModal2">Modal With Long Content<i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<div id="myModal2" class="reveal-modal reveal-modal--autodesk" data-reveal aria-hidden="true" role="dialog">
  <div class="reveal-modal__header">
    <div class="reveal-modal__title">Modal Title</div>
    <a class="close-reveal-modal reveal-modal__close--black" aria-label="Close">×</a>
  </div>
  <div class="reveal-modal__body">
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
    <h2>What type of download are you looking for?</h2>
    <h4>Service Packs &amp; Fixes</h4>
    <p>Find service packs, hotfixes, object enablers, language packs and other downloads to keep your product up-to-date</p>
    <h4>Full Product Versions</h4>
    <p>How to download the latest versions and previous versions of products and how to update your software</p>
  </div>
</div>

<style>
  .bright-1 {
    background: #dbfcdb;
  }
  .bright-2 {
    background: #f9f4b3;
  }
</style>



<h3>iFrame Modal</h3>

<p>When embedding an iframe inside a modal, apply the <code>.reveal-modal__body--iframe</code> class. Optionally apply <code>.reveal-modal--no-padding</code> so the iframe is flush with the frame</p>
<ul>
  <li>Do not set <code>iframe scrolling="yes" or iframe scrolling="no"</code></li>
  <li>iOS (iPhone and iPad Devices) require iframes to have an explicit height set. The default is set to height: 1000px - but this may leave empty space at the bottom of some iframes. So for best results set a specific height. </li>

</ul>

<h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;button class="button" data-reveal-id="myModal3">Modal With iFrame&lt;i class="fa fa-angle-double-up" aria-hidden="true">&lt;/i>&lt;/button>
&lt;div id="myModal3" class="reveal-modal reveal-modal--no-padding" data-reveal aria-hidden="true" role="dialog">
  &lt;div class="reveal-modal__header">
    &lt;div class="reveal-modal__title">Modal Title&lt;/div>
    &lt;a class="close-reveal-modal reveal-modal__close--black" aria-label="Close">×&lt;/a>
  &lt;/div>
  &lt;div class="reveal-modal__body reveal-modal__body--iframe">
    &lt;iframe frameborder="0" src="https://knowledge-local.autodesk.com/sites/all/themes/autodesk_foundation5/templates/iframe.html">&lt;/iframe>
  &lt;/div>
&lt;/div></code></pre>

<h4 class="sg">Rendered HTML</h4>
<button class="button" data-reveal-id="myModal3">Modal With iFrame<i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<div id="myModal3" class="reveal-modal reveal-modal--no-padding" data-reveal aria-hidden="true" role="dialog">
  <div class="reveal-modal__header">
    <div class="reveal-modal__title">Modal Title</div>
    <a class="close-reveal-modal reveal-modal__close--black" aria-label="Close">×</a>
  </div>
  <div class="reveal-modal__body reveal-modal__body--iframe">
    <iframe frameborder="0" src="https://knowledge-local.autodesk.com/sites/all/themes/autodesk_foundation5/templates/iframe.html"></iframe>
  </div>
</div>
<h4>Setting a specific height for your iframe on iOs devices</h4>
<pre><code class="language-css">#myModal3 {
  html.ios & {
    iframe {
      @media #{$small-only} {height: 2000px;}
      @media #{$small-medium-only} {height: 1400px;}
      @media #{$medium-up} {height: 800px;}
      @media #{$large-up} {height: 800px;}
    }
  }
}</code></pre>


<h3>ngModal</h3>
<p>We use a seperate modal library for Angular Modals called ngModal. Using the below markup for your modal template will create a modal that uses the same styling as the Reveal Modal above.</p>
<h4 class="sg">HTML</h4>
<pre><code class="language-html">&lt;script type="text/ng-template" id="ArticleSaveErrorDialog">
    &lt;div id="article_save_error_dialog" ng-model="ngDialogData">
        &lt;div class="dialog_header">&lt;h3>{{l10n_strings.SAVE_NOT_RESPONDING}}&lt;/h3>&lt;/div>
        &lt;div class="dialog_body">
            &lt;p>{{l10n_strings.TRY_AGAIN_LATER}}&lt;/p>
        &lt;/div>
    &lt;/div>
&lt;/script></code></pre>


<h3>Modal Settings</h3>
<h5>Responsive</h5>
<ul>
  <li>The modal is responsive by default.</li>
  <li>The modal is always position 5vh from the top of the window.</li>
  <li>The modal height is set by it's content. But has a max height of 90vh</li>
  <li>The modal width is 80% with a max-width of 1000px</li>
  <li>On mobile, the modal is 100% wide x 100% height</li>
</ul>

<h5>Click to Close</h5>
  <ul>
    <li>The user can click on the overlay background to close the modal. Also referred to as clicking "outside" the modal.</li>
    <li>The user press the "esc" key to close the modal</li>
  </ul>
<p><em>To override these defaults</em></p>
<pre><code class="language-javascript">// Place code in js/app/scripts.js or your custom module
jQuery(document).foundation({
  reveal: {
    close_on_background_click: false,
    close_on_esc: false
  }
});

// Reboots the reveal default options with the settings above
jQuery('#myModal').foundation('reveal', 'reflow');
jQuery('#myModal').foundation('reveal','open');</code></pre>

<br>
<h5>Scrolling</h5>
<ul>
  <li>When the modal is revealed, document scrolling is disabled. We use jQuery to add a class of .modal-open to the html tag.</li>
  <li>If a modal contains an iframe, we use jQuery to set the scrolling attribute.</li>
</ul>

<pre><code class="language-javascript">// js/app/scripts.js
// sets .modal-open class on &lt;html>
$(document).on('open.fndtn.reveal', '[data-reveal]', function () {
  $('html').addClass('modal-open');
});

$(document).on('close.fndtn.reveal', '[data-reveal]', function () {
  $('html').removeClass('modal-open');
});

// sets iframe scrolling=""
Detectizr.detect({detectScreen:false});
if (jQuery("html").hasClass("ios")) {
  jQuery("#myModal3 iframe").attr("scrolling","no");
} else {
  jQuery("#myModal3 iframe").attr("scrolling","yes");
}</code></pre>
<pre><code class="language-css">/* scss/components/_modal.scss */
html.modal-open body {
  overflow: hidden
}</code></pre>

<br>
<h5>Avoiding Right Click</h5>
<p>It is preferrable to use a <code>&lt;button></code> tag over a <code>&lt;a></code> tag for the modal trigger. using an a tag means the user can right-click and open in a new browser, which will often lead to nothing.</p>