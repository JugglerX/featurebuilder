<h1>Layout</h1>
<hr>
<p>Using the grid on a Drupal website requires a convetion</p>

<p>The basic templating system uses the following files, found in /templates</p>

html.tpl.php
page.tpl.php

By default the page template begins “on the grid”
<div id=“#main” class=“columns small-12”></div>

This means if have a node, taxonomy or custom template that renders inside page, you

node
taxonomy
custom template from a module

<div id=“#main” class=“columns small-12”>

</div>

<div class="hero">
    <p>Region: Hero</p>
    <em>always goes fullwidth</em>
    </div>

        <div class="layout-top">
            <div class="row">
                <div class="column small-12">
                    <h1 id="page-title" class="title">Page Title</h1>
                    <div class="region region-highlighted"></div>
                </div>
            </div>
        </div>

