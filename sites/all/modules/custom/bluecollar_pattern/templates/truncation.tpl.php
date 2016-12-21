<h1>Truncation</h1>
<h3>Single line Truncation</h3>
<div class="truncation-example">
    <span class="truncation-name">Robert Austin</span>
    <span class="truncation-subject">Travelling to Lake Tahoe this summer</span>
    <span class="truncation-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel lobortis nisl, eget posuere mauris. In scelerisque erat dolor, vel iaculis quam eleifend sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer tellus tortor, maximus sed imperdiet id, dignissim euismod nisl. Ut eget maximus ante. Integer non nunc aliquam odio egestas sollicitudin. Quisque non dictum ex.</span>
</div>

<div class="truncation-example-two">
    <span class="truncation-name">Robert Austin</span>
    <span class="truncation-subject">Travelling to Lake Tahoe this summer</span>
    <span class="truncation-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel lobortis nisl, eget posuere mauris. In scelerisque erat dolor, vel iaculis quam eleifend sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer tellus tortor, maximus sed imperdiet id, dignissim euismod nisl. Ut eget maximus ante. Integer non nunc aliquam odio egestas sollicitudin. Quisque non dictum ex.</span>
</div>


<h3>Multi line Truncation</h3>
<p>CSS doesnt support multi line truncation. We need to mask the text. Masking requires an explicit height is set on the container. It uses overflow hidden to hide text that does not fit in the container.</p>
<div class="truncation-example-three">
    <span class="truncation-name">Robert Austin</span>
    <span class="truncation-subject">Travelling to Lake Tahoe this summer</span>
    <span class="truncation-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel lobortis nisl, eget posuere mauris. In scelerisque erat dolor, vel iaculis quam eleifend sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </span>
</div>

<div class="row">
    <div class="small-12 medium-4 columns">
        <div class="truncation-example-three">
            <span class="truncation-name">Robert Austin</span>
            <span class="truncation-subject">Travelling to Lake Tahoe this summer</span>
            <span class="truncation-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel lobortis nisl, eget posuere mauris. In scelerisque erat dolor, vel iaculis quam eleifend sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </span>
        </div>
    </div>
    <div class="small-12 medium-4 columns">
        <div class="truncation-example-three">
            <span class="truncation-name">Robert Austin</span>
            <span class="truncation-subject">Travelling to Lake Tahoe this summer</span>
            <span class="truncation-description">This column has a medium amount of text. This column has a medium amount of text. This column has a medium amount of text. </span>
        </div>
    </div>
    <div class="small-12 medium-4 columns">
        <div class="truncation-example-three">
            <span class="truncation-name">Robert Austin</span>
            <span class="truncation-subject">Travelling to Lake Tahoe this summer</span>
            <span class="truncation-description">This column only has a small amount of text.</span>
        </div>
    </div>
</div>


<h3>Dynamic Length Strings & Translation</h3>
<p>Setting a fixed width often breaks when text changes, or is translated.</p>
<p>The original design has a set width of 120px for each menu item.</p>
<div class="row">
    <div class="small-12 column">
        <div class="truncation-example-four">
            <span class="truncation-number">3</span>
            <span class="truncation-title">Home</span>
        </div>
        <div class="truncation-example-four">
            <span class="truncation-number">72</span>
            <span class="truncation-title">Community</span>
        </div>
        <div class="truncation-example-four">
            <span class="truncation-number">1345</span>
            <span class="truncation-title">Customers</span>
        </div>
    </div>
</div>

<p>Unfortunately one of the menu items changed.</p>
<div class="row">
    <div class="small-12 column">
        <div class="truncation-example-four">
            <span class="truncation-number">3</span>
            <span class="truncation-title">Home</span>
        </div>
        <div class="truncation-example-four">
            <span class="truncation-number">72</span>
            <span class="truncation-title">Community</span>
        </div>
        <div class="truncation-example-four">
            <span class="truncation-number">1345</span>
            <span class="truncation-title">Customer Service</span>
        </div>
    </div>
</div>

<p>And the text is much longer in German</p>
<div class="row">
    <div class="small-12 column">
        <div class="truncation-example-four">
            <span class="truncation-number">3</span>
            <span class="truncation-title">Hasn</span>
        </div>
        <div class="truncation-example-four">
            <span class="truncation-number">72</span>
            <span class="truncation-title">Communospargent</span>
        </div>
        <div class="truncation-example-four">
            <span class="truncation-number">1345</span>
            <span class="truncation-title">Custodioalian Largressant Confidant</span>
        </div>
    </div>
</div>

<hr>
<h4>Avoiding bad breaks</h4>
<ul>
    <li>Design as if the text is 3 times as long. Design for the longest translated string first, and then a little extra.
    <li>Avoid using a fixed width or height for as long as possible.</li>
    <li>Consider how your design will look if the text wraps over several lines, but other elements only have a single line</li>
</ul>