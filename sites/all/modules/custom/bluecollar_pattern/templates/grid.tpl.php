    <h1 id="grid">Grid</h1>
    <div id="component-name" name="Grid"></div>
    <h3 class="subheader">Create powerful multi-device layouts quickly and easily with the default 12-column, nest-able Foundation grid. </h3>

    <hr>
    <h3>Basic</h3>

    <p>Start by adding an element with a class of <code>row</code>. This will create a horizontal block to contain vertical columns.
        Then add divs with a <code>column</code> class within that row. You can use <code>column</code> or <code>columns</code> - the only difference is grammar.
        Specify the widths of each column with the <code>small-#</code>, <code>small-medium-#</code>, <code>medium-#</code>, and <code>large-#</code> classes.</p>
    <h4>HTML</h4>

<pre><code class="language-html">&lt;div class="row"&gt;
    &lt;div class="small-2 large-4 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-4 large-4 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-6 large-4 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="large-3 columns"&gt;...&lt;/div&gt;
    &lt;div class="large-6 columns"&gt;...&lt;/div&gt;
    &lt;div class="large-3 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="small-6 large-2 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-6 large-8 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-12 large-2 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="small-3 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-9 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="large-4 columns"&gt;...&lt;/div&gt;
    &lt;div class="large-8 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="small-6 large-5 columns"&gt;...&lt;/div&gt;
    &lt;div class="small-6 large-7 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="large-6 columns"&gt;...&lt;/div&gt;
    &lt;div class="large-6 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>



    <h4>Rendered HTML</h4>

    <div class="row display">
        <div class="small-2 large-4 columns"><span class="hide-for-large-up">2</span><span class="show-for-large-up">4</span></div>
        <div class="small-4 large-4 columns">4</div>
        <div class="small-6 large-4 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">4</span></div>
    </div>
    <div class="row display">
        <div class="large-3 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">3</span></div>
        <div class="large-6 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">6</span></div>
        <div class="large-3 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">3</span></div>
    </div>
    <div class="row display">
        <div class="small-6 large-2 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">2</span></div>
        <div class="small-6 large-8 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">8</span></div>
        <div class="small-12 large-2 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">2</span></div>
    </div>
    <div class="row display">
        <div class="small-3 columns">3</div>
        <div class="small-9 columns">9</div>
    </div>
    <div class="row display">
        <div class="large-4 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">4</span></div>
        <div class="large-8 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">8</span></div>
    </div>
    <div class="row display">
        <div class="small-6 large-5 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">5</span></div>
        <div class="small-6 large-7 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">7</span></div>
    </div>
    <div class="row display">
        <div class="large-6 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">6</span></div>
        <div class="large-6 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">6</span></div>
    </div>

    <hr>
    <h3>Nesting</h3>

    <p>You can nest the grids indefinitely, though at a certain point it will get absurd.</p>
    <h4>HTML</h4>

<pre><code class="language-html">&lt;div class="row">
    &lt;div class="small-8 columns">8
        &lt;div class="row">
            &lt;div class="small-8 columns">8 Nested
                &lt;div class="row">
                    &lt;div class="small-8 columns">8 Nested Again&lt;/div>
                    &lt;div class="small-4 columns">4&lt;/div>
                &lt;/div>
            &lt;/div>
            &lt;div class="small-4 columns">4&lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="small-4 columns">4&lt;/div>
&lt;/div></code></pre>


    <h4>Rendered HTML</h4>

    <div class="row display">
        <div class="small-8 columns">8
            <div class="row">
                <div class="small-8 columns">8 Nested
                    <div class="row">
                        <div class="small-8 columns">8 Nested Again</div>
                        <div class="small-4 columns">4</div>
                    </div>
                </div>
                <div class="small-4 columns">4</div>
            </div>
        </div>
        <div class="small-4 columns">4</div>
    </div>

    <hr>
    <h3 id="offsets">Offsets</h3>
    <p>Move blocks up to 11 columns to the right by using classes like <code>.large-offset-1</code> and <code>.small-offset-3</code>.</p>
    <h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-1 columns"</span>&gt;</span>1<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-11 columns"</span>&gt;</span>11<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-1 columns"</span>&gt;</span>1<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-10 large-offset-1 columns"</span>&gt;</span>10, offset 1<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-1 columns"</span>&gt;</span>1<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-9 large-offset-2 columns"</span>&gt;</span>9, offset 2<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-1 columns"</span>&gt;</span>1<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-8 large-offset-3 columns"</span>&gt;</span>8, offset 3<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>



    <h4>Rendered HTML</h4>

    <div class="row display">
        <div class="large-1 columns">1</div>
        <div class="large-11 columns">11</div>
    </div>
    <div class="row display">
        <div class="large-1 columns">1</div>
        <div class="large-10 large-offset-1 columns">10, offset 1</div>
    </div>
    <div class="row display">
        <div class="large-1 columns">1</div>
        <div class="large-9 large-offset-2 columns">9, offset 2</div>
    </div>
    <div class="row display">
        <div class="large-1 columns">1</div>
        <div class="large-8 large-offset-3 columns">8, offset 3</div>
    </div>


    <hr>
    <h3 id="incomplete-rows">Incomplete Rows</h3>
    <p>In order to work around browsers' different rounding behaviors, Foundation will float the last column in a row to the right so the edge aligns. If your row doesn't have a count that adds up to 12 columns, you can tag the last column with a class of <code>end</code> in order to override that behavior.</p>
    <h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-3 columns"</span>&gt;</span>3<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-3 columns"</span>&gt;</span>3<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-3 columns"</span>&gt;</span>3<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-3 columns"</span>&gt;</span>3<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-3 columns"</span>&gt;</span>3<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-3 columns end"</span>&gt;</span>3 end<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>



    <h4>Rendered HTML</h4>

    <div class="row display-end">
        <div class="medium-3 columns">3</div>
        <div class="medium-3 columns">3</div>
        <div class="medium-3 columns">3</div>
    </div>
    <div class="row display-end">
        <div class="medium-3 columns">3</div>
        <div class="medium-3 columns">3</div>
        <div class="medium-3 columns end">3 end</div>
    </div>


    <hr>
    <h3 id="collapse-uncollapse-rows">Collapse/Uncollapse Rows</h3>
    <p>The <code>collapse</code> class lets you remove column gutters (padding).</p>
    <p>There are times when you won't want each media query to be collapsed or uncollapsed. In this case, use the media query size you want and collapse or uncollapse and add that to your <code>row</code> element. Example removes the gutter at the large breakpoint and then adds the gutter to columns at medium and small.</p>
    <h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row medium-uncollapse large-collapse"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-6 columns"</span>&gt;</span>
            Removes gutter at large media query
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-6 columns"</span>&gt;</span>
            Removes gutter at large media query
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>



    <h4>Rendered HTML</h4>


    <p class="lead">Scale the browser down to a medium or smaller size to see the difference.</p>

    <div class="row medium-uncollapse large-collapse">
        <div class="small-6 columns">
            <div class="panel">
                <p class="show-for-small-only">On small, I have gutters!</p>
                <p class="show-for-medium-only">On a medium screen, I have gutters!</p>
                <p class="show-for-large-up">On a large screen, I have no gutters!</p>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="panel">
                <p class="show-for-small-only">On small, I have gutters!</p>
                <p class="show-for-medium-only">On a medium screen, I have gutters!</p>
                <p class="show-for-large-up">On a large screen, I have no gutters!</p>
            </div>
        </div>
    </div>


    <hr>
    <h3 id="centered-columns">Centered Columns</h3>
    <p>Center your columns by adding a class of <code>small-centered</code> to your <code>column</code>. Large will inherit small centering by default, but you can also center solely on large by applying a <code>large-centered</code> class. To uncenter on large screens use <code>large-uncentered</code>.</p>
    <h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-3 small-centered columns"</span>&gt;</span>3 centered<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-6 large-centered columns"</span>&gt;</span>6 centered<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-9 small-centered large-uncentered columns"</span>&gt;</span>9 centered<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-11 small-centered columns"</span>&gt;</span>11 centered<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>



    <h4>Rendered HTML</h4>

    <div class="row display">
        <div class="small-3 small-centered columns">3 centered</div>
    </div>
    <div class="row display">
        <div class="small-6 large-centered columns">6 centered, large</div>
    </div>
    <div class="row display">
        <div class="small-9 small-centered large-uncentered columns">9 centered small</div>
    </div>
    <div class="row display">
        <div class="small-11 small-centered columns">11 centered</div>
    </div>

    <hr>
    <h3 id="source-ordering">Source Ordering</h3>
    <p>Using these source ordering classes, you can shift columns around between our breakpoints. This means if you place sub-navigation below main content on small displays, you have the option to position the sub-navigation on either the left or right of the page for large displays. Prefix push/pull with the size of the device you want to apply the styles to. <code>medium-push-#</code>, <code>large-push-#</code> is the syntax you'll use. Use <code>large-reset-order</code> to reset pushed or pulled columns to their original position on large screens.</p>
    <h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-10 small-push-2 columns"</span>&gt;</span>10<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-2 small-pull-10 columns"</span>&gt;</span>2, last<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-9 large-push-3 columns"</span>&gt;</span>9<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-3 large-pull-9 columns"</span>&gt;</span>3, last<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-8 large-push-4 columns"</span>&gt;</span>8<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"large-4 large-pull-8 columns"</span>&gt;</span>4, last<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-5 small-push-7 medium-7 medium-push-5 columns"</span>&gt;</span>7<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"small-7 small-pull-5 medium-5 medium-pull-7 columns"</span>&gt;</span>5, last<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"row"</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-6 medium-push-6 columns"</span>&gt;</span>6<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"medium-6 medium-pull-6 columns"</span>&gt;</span>6, last<span class="tag">&lt;/<span class="title">div</span>&gt;</span>
            <span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>


    <h4>Rendered HTML</h4>

    <div class="row display">
        <div class="small-10 small-push-2 columns">10</div>
        <div class="small-2 small-pull-10 columns">2, last</div>
    </div>
    <div class="row display">
        <div class="large-9 large-push-3 columns">9</div>
        <div class="large-3 large-pull-9 columns">3, last</div>
    </div>
    <div class="row display">
        <div class="large-8 large-push-4 columns">8</div>
        <div class="large-4 large-pull-8 columns">4, last</div>
    </div>
    <div class="row display">
        <div class="small-5 small-push-7 medium-7 medium-push-5 columns">7</div>
        <div class="small-7 small-pull-5 medium-5 medium-pull-7 columns">5, last</div>
    </div>
    <div class="row display">
        <div class="medium-6 medium-push-6 columns">6</div>
        <div class="medium-6 medium-pull-6 columns">6, last</div>
    </div>


    <hr>
    <h2 id="customize-with-sass">Customize with Sass</h2>
    <p>Customizing the grid is easy with the Sass variables provided in the <code>_settings.scss</code> file.</p>
    <h4>SCSS</h4>

<pre><code class="language-scss">$row-width: rem-calc(1000);
$column-gutter: rem-calc(30);
$total-columns: 12 ;</code></pre>



    <h3>Basic</h3>

    <p>You can use the <code>grid-row()</code> and <code>grid-column()</code> mixins to create your own rows and columns with semantic markup, like so:</p>
    <div class="row">
        <div class="large-6 columns">
            <h4 class="sg">SCSS</h4>
<pre><code class="language-scss">.custom-row-class {
    @include grid-row();
    .custom-column-class {
        @include grid-column(12);
    }
}</code></pre>

        </div>
        <div class="large-6 columns">
            <h4>HTML</h4>
<pre><code class="language-html">&lt;div class="your-row-class-name">
    &lt;div class="your-column-class-name">
        &lt;!-- Your content goes here -->
    &lt;/div>
&lt;/div></code></pre>


        </div>
    </div>

    <h3>Advanced</h3>

    <p>You can further customize your grid columns using the provided options in the <code>grid-column()</code> mixin:</p>
    <h5 id="row-mixin-options">Row Mixin Options</h5>
    <h4>SCSS</h4>

<pre><code class="language-scss"><div class="code-container"><span class="class">.your-class-name</span> {
  <span class="at_rule">@<span class="keyword">include</span><span class="preprocessor"> grid-row</span>($behavior:<span class="preprocessor"> nest</span>) //<span class="preprocessor"> Other</span><span class="preprocessor"> options</span><span class="preprocessor"> include</span><span class="preprocessor"> collapse</span><span class="preprocessor"> and</span><span class="preprocessor"> nest-collapse.</span>
  //<span class="preprocessor"> Default</span> $behavior<span class="preprocessor"> value</span><span class="preprocessor"> is</span><span class="preprocessor"> false</span>
}</span></div></code></pre>


<h5 id="column-mixin-options">Column Mixin Options</h5>
<h4>SCSS</h4>

<pre><code class="language-scss">.custom-grid-class {
    @include grid-column(
    // Control the number of columns
    $columns:4,
    // Specify whether or not this is the last column in the row
    $last-column:true,
    // Choose whether or not to center this column
    $center:true,
    // Choose the number of columns to offset this element by
    $offset:3,
    // Specify how many columns to push this element past
    $push:3,
    // Specify how many columns to pull this element past
    $pull:9,
    // Set to true to remove column padding
    $collapse:true,
    // Specify the float direction
    $float:right
  );
}</code></pre>







