<?php
ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title><?php echo $this->scope["_defaultTitle"];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->scope["_language"]["charset"];?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<script language="Javascript" type="text/javascript">
var _baseName = '<?php echo $this->scope["_baseName"];?>';
var themepath = "<?php echo $this->scope["_themePath"];?>";
var swiftpath = "<?php echo $this->scope["_swiftPath"];?>";
var _swiftPath = "<?php echo $this->scope["_swiftPath"];?>";
var swiftsessionid = '';
var swiftiswinapp = 0;
var cparea = "<?php echo $this->scope["_area"];?>";
var enTinyMCE = false;
var isMainHeader = false;
var menuhiddenfieldval = '1';
var pagetype = 'login';
var moduleAction = '';
var finalDocHeight = 400;
var finalHeightDiff = 0;

var strOpConstants = {'OP_CONTAINS':'<?php echo $this->scope["_language"]["opcontains"];?>', 'OP_NOTCONTAINS':"<?php echo $this->scope["_language"]["opnotcontains"];?>", 'OP_EQUAL':'<?php echo $this->scope["_language"]["opequal"];?>', 'OP_NOTEQUAL':'<?php echo $this->scope["_language"]["opnotequal"];?>', 'OP_GREATER':'<?php echo $this->scope["_language"]["opgreater"];?>', 'OP_LESS':'<?php echo $this->scope["_language"]["opless"];?>', 'OP_REGEXP':'<?php echo $this->scope["_language"]["opregexp"];?>'};
var swiftLanguage = {'strue':'<?php echo $this->scope["_language"]["strue"];?>', 'sfalse':'<?php echo $this->scope["_language"]["sfalse"];?>', 'name':'<?php echo $this->scope["_language"]["name"];?>', 'title':'<?php echo $this->scope["_language"]["title"];?>', 'value':'<?php echo $this->scope["_language"]["value"];?>', 'engagevisitor':'<?php echo $this->scope["_language"]["engagevisitor"];?>', 'customengagevisitor':'<?php echo $this->scope["_language"]["customengagevisitor"];?>', 'inlinechat':'<?php echo $this->scope["_language"]["inlinechat"];?>', 'url':'<?php echo $this->scope["_language"]["url"];?>', 'vactionvariables':'<?php echo $this->scope["_language"]["vactionvariables"];?>', 'vactionvexp':'<?php echo $this->scope["_language"]["vactionvexp"];?>', 'vactionsalerts':'<?php echo $this->scope["_language"]["vactionsalerts"];?>', 'loading': '<?php echo $this->scope["_language"]["loading"];?>', 'pwtooshort': '<?php echo $this->scope["_language"]["pwtooshort"];?>', 'pwveryweak': '<?php echo $this->scope["_language"]["pwveryweak"];?>', 'pwunsafeword': '<?php echo $this->scope["_language"]["pwunsafeword"];?>', 'pwweak': '<?php echo $this->scope["_language"]["pwweak"];?>', 'pwmedium': '<?php echo $this->scope["_language"]["pwmedium"];?>', 'pwstrong': '<?php echo $this->scope["_language"]["pwstrong"];?>', 'pwverystrong': '<?php echo $this->scope["_language"]["pwverystrong"];?>', 'starttypingtags': '<?php echo $this->scope["_language"]["starttypingtags"];?>'};
</script>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->scope["_baseName"];?>/Core/Default/Compressor/css/jqueryui:staff:colorpicker:popup:kql:notification" />
<script type="text/javascript" src="<?php echo $this->scope["_baseName"];?>/Core/Default/Compressor/js/jquery:jqueryplugins:jqueryui:colorpicker:corecp:<?php echo $this->scope["_area"];?>cp:kajax:tinymce:popup:kql:notification"></script>
</head><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>