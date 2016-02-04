<!DOCTYPE HTML>
<html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, maximum-scale=1."/>

  <!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

</head>

<body ng-app="wsApp" class="<?php print $classes; ?>" <?php print $attributes;?>>

  <script type="text/javascript">
var $buoop = {};
$buoop.ol = window.onload;
window.onload=function(){
 try {if ($buoop.ol) $buoop.ol();}catch (e) {}
 var e = document.createElement("script");
 e.setAttribute("type", "text/javascript");
 e.setAttribute("src", "//browser-update.org/update.js");
 document.body.appendChild(e);
}
</script>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
