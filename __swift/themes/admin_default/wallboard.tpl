<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Wallboard</title>
<meta http-equiv="Content-Type" content="text/html; charset=<{$_language[charset]}>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script language="Javascript" type="text/javascript">
var _baseName = '<{$_baseName}>';
var _themePath = "<{$_themePath}>images/";
var _baseThemePath = "<{$_themePath}>/";
var _swiftPath = "<{$_swiftPath}>";
</script>
<script type="text/javascript" src="https://use.typekit.com/lan4vzb.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" type="text/css" media="all" href="<{$_baseName}>/Core/Default/Compressor/css/wallboard" />
<script type="text/javascript" src="<{$_baseName}>/Core/Default/Compressor/js/jquery:jqueryplugins:wallboard:kajax"></script>

<!-- The 1140px Grid -->
<link rel="stylesheet" href="<{$_swiftPath}>__swift/themes/admin_default/cssgrid/1140.css" type="text/css" media="screen" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="<{$_swiftPath}>__swift/themes/admin_default/cssgrid/ie.css" type="text/css" media="screen" />
<![endif]-->

<!-- Type and image presets - NOT ESSENTIAL -->
<link rel="stylesheet" href="<{$_swiftPath}>__swift/themes/admin_default/cssgrid/typeimg.css" type="text/css" media="screen" />
<!-- Make minor type adjustments for 1024 monitors -->
<link rel="stylesheet" href="<{$_swiftPath}>__swift/themes/admin_default/cssgrid/smallerscreen.css" media="only screen and (max-width: 1023px)" />
<!-- Resets grid for mobile -->
<link rel="stylesheet" href="<{$_swiftPath}>__swift/themes/admin_default/cssgrid/mobile.css" media="handheld, only screen and (max-width: 767px)" />
</head>
<body>
<div id="wallboardcontainer">
<form id="wallboardform" action="<{$_baseName}>/Core/Default/Index/1" method="post">
<{$_widgetRenderHTML}>
</form>
</div>
<div id="soundtrumpet"></div>
<div id="soundalert"></div>
<div id="soundsonar"></div>
</body>
</html>