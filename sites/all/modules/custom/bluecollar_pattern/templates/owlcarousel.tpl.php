<h1>Owl Carousel</h1>
<a class="pattern__library"><i class="fa fa-bolt" aria-hidden="true"></i> <strong>Library: </strong>
  http://owlgraphic.com/owlcarousel/index.html#demo</a>
<p>Owl Carousel is a modern, robust carousel library. For demos and documentation see the above link.</p>
<script type="application/javascript">
  jQuery(document).ready(function () {

    var owl = jQuery("#owl-demo");

    owl.owlCarousel({
      items: 10, //10 items above 1000px browser width
      itemsDesktop: [1000, 5], //5 items between 1000px and 901px
      itemsDesktopSmall: [900, 3], // betweem 900px and 601px
      itemsTablet: [600, 2], //2 items between 600 and 0
      itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
    });

    // Custom Navigation Events
    jQuery(".owl-next").click(function () {
      owl.trigger('owl.next');
    })
    jQuery(".owl-prev").click(function () {
      owl.trigger('owl.prev');
    })
    jQuery(".owl-play").click(function () {
      owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
    })
    jQuery(".owl-stop").click(function () {
      owl.trigger('owl.stop');
    })

  });
</script>

<div id="owl-demo" class="owl-carousel owl-theme">
  <div class="item">1</div>
  <div class="item">2</div>
  <div class="item">3</div>
  <div class="item">4</div>
  <div class="item">5</div>
  <div class="item">6</div>
  <div class="item">7</div>
  <div class="item">8</div>
  <div class="item">9</div>
  <div class="item">10</div>
  <div class="item">11</div>
  <div class="item">12</div>
  <div class="item">13</div>
  <div class="item">14</div>
  <div class="item">15</div>
  <div class="item">16</div>
</div>

<div class="customNavigation">
  <a class="owl-nav owl-prev">Previous</a>
  <a class="owl-nav owl-next">Next</a>
  <a class="owl-nav owl-play">Autoplay</a>
  <a class="owl-nav owl-stop">Stop</a>
</div>

<style>
  #owl-demo .item {
    background: #327084;
    padding: 30px 0px;
    margin: 10px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
  }
  .customNavigation {
    text-align: center;
  }
  .customNavigation a {
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }
  .owl-nav {
    display: inline-block;
    padding: 4px 12px;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 22px;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-color: #f3f3f3;
    color: #327084;
    border: 0px solid #cccccc;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }


</style>