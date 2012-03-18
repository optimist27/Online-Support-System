<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><{$_productTitle}></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
	var _swiftPath = "<{$_swiftPath}>";
</script>
<script type="text/javascript" src="../__swift/thirdparty/jQueryUI/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../__swift/thirdparty/jQuery/plugins.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="../__swift/themes/setup/stylesheet.css" />
<script type="text/javascript" src="../__swift/resources/KAJAX/kajax.js"></script>
<script type="text/javascript">
	// Workaround for the stupid 100% width bug in IE
	function ClearError() { return true; }
	window.onerror = ClearError;
</script>
</head>

<body>
<div class="centerarea">
<img src="../__swift/themes/setup/images/<{$_product}>big.gif" alt="<{$_product}>" />
<div class="logotext">Kayako <{$_productName}></div>
<hr class="contenthr" /><br />
<{if $_productInstalled == true}>
<a href="index.php?/Core/Upgrade" class="moduletitlered"><{$_language[upgrade]}></a><br /><br />
<{/if}>
<a href="index.php?/Core/Setup" class="moduletitle"><{$_language[setup]}></a><br />
<a href="index.php?/Core/Diagnostics" class="moduletitle"><{$_language[diagnostics]}></a><br /><br />
<div class="bottomtext">
<hr class="contenthr" />
<span class="smalltext"><{$_copyright}></span></div>
</div>
</body>
</html>