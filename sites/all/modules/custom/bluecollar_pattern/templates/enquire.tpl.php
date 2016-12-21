<h1>Enquire</h1>
<h3 class="subheader">Media queries in Javascript.</h3>
<hr>

<p>Media queries are available in javascript as a global object. They can be accessed in any custom/modules .js file, or themes/autodesk_foundation5/js/ .js files. We use the <code>breakpoints module</code>. Breakpoints are defined in the <code>autodesk_foundation5.info</code> file. They are also available as a global php variables and in various areas of Drupal such as the context module.</p>

<h3>Breakpoints Object</h3>
<p>View the breakpoints object to see available media queries</p>
<pre><code class="language-js">console.log(Drupal.settings.breakpoints)</code></pre>

<h3>matchMedia</h3>
<p>Native javascript media query matching</p>
<pre><code class="language-js">if (window.matchMedia("(min-width: 400px)").matches) {
/* the viewport is at least 400 pixels wide */
}

if (window.matchMedia(Drupal.settings.breakpoints["small-only"].breakpoint).matches) {
/* the viewport matches the "small-only" breakpoint */
}</code></pre>

<h3>Enquire JS</h3>
<p>Register a breakpoint with enquire and perform actions based on event emitters. For more information see the <a href="http://wicky.nillia.ms/enquire.js/">enquire.js documentation</a></p>
<pre><code class="language-js">// The same as enquire.register("(max-width: 767px)", {
enquire.register(Drupal.settings.breakpoints["small-only"].breakpoint, {
    // OPTIONAL
    // If supplied, triggered when a media query matches.
    match : function() {
        console.log("found!");
    },
    // OPTIONAL
    // If supplied, triggered when the media query transitions
    // *from a matched state to an unmatched state*.
    unmatch : function() {},
    // OPTIONAL
    // If supplied, triggered once, when the handler is registered.
    setup : function() {},
    // OPTIONAL, defaults to false
    // If set to true, defers execution of the setup function
    // until the first time the media query is matched
    deferSetup : true,
    // OPTIONAL
    // If supplied, triggered when handler is unregistered.
    // Place cleanup code here
    destroy : function() {}
});
</code></pre>

