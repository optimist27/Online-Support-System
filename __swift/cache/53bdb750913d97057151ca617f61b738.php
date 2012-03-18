<?php
ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title><?php echo $this->scope["_defaultTitle"];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->scope["_language"]["charset"];?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<script language="Javascript" type="text/javascript">
var themepath = "<?php echo $this->scope["_themePath"];?>";
var swiftpath = "<?php echo $this->scope["_swiftPath"];?>";
var _swiftPath = "<?php echo $this->scope["_swiftPath"];?>";
var _baseName = "<?php echo $this->scope["_baseName"];?>";
var swiftsessionid = "<?php echo $this->scope["_session"]["sessionid"];?>";
var swiftiswinapp = "<?php echo $this->scope["_session"]["iswinapp"];?>";
var cparea = "<?php echo $this->scope["_area"];?>";
var enTinyMCE = false;
var pagetype = 'content';
var finalDocHeight = "<?php echo $this->scope["_finalHeight"];?>";
var finalHeightDiff = <?php echo $this->scope["_finalHeightDifference"];?>;
var selectedMenu = '<?php echo $this->scope["_selectedMenu"];?>';
var isMainHeader = true;
var menuhiddenfieldval = '<?php echo $this->scope["_menuHiddenFieldValue"];?>';
var globalImageLoading = false;
var logoutText = '<?php echo $this->scope["_language"]["logout"];?>: <?php echo $this->scope["_userName"];?>';
var strOpConstants = {'OP_CONTAINS':'<?php echo $this->scope["_language"]["opcontains"];?>', 'OP_NOTCONTAINS':"<?php echo $this->scope["_language"]["opnotcontains"];?>", 'OP_EQUAL':'<?php echo $this->scope["_language"]["opequal"];?>', 'OP_NOTEQUAL':'<?php echo $this->scope["_language"]["opnotequal"];?>', 'OP_GREATER':'<?php echo $this->scope["_language"]["opgreater"];?>', 'OP_LESS':'<?php echo $this->scope["_language"]["opless"];?>', 'OP_REGEXP':'<?php echo $this->scope["_language"]["opregexp"];?>', 'OP_CHANGED':'<?php echo $this->scope["_language"]["opchanged"];?>', 'OP_CHANGEDTO':'<?php echo $this->scope["_language"]["opchangedto"];?>', 'OP_CHANGEDFROM':'<?php echo $this->scope["_language"]["opchangedfrom"];?>', 'OP_NOTCHANGED':'<?php echo $this->scope["_language"]["opnotchanged"];?>', 'OP_NOTCHANGEDFROM':'<?php echo $this->scope["_language"]["opnotchangedfrom"];?>', 'OP_NOTCHANGEDTO':'<?php echo $this->scope["_language"]["opnotchangedto"];?>'};

var swiftLanguage = {'matchand': '<?php echo $this->scope["_language"]["matchand"];?>', 'pfieldreveal': '<?php echo $this->scope["_language"]["pfieldreveal"];?>', 'pfieldhide': '<?php echo $this->scope["_language"]["pfieldhide"];?>', 'matchor': '<?php echo $this->scope["_language"]["matchor"];?>', 'strue':'<?php echo $this->scope["_language"]["strue"];?>', 'sfalse':'<?php echo $this->scope["_language"]["sfalse"];?>', 'name':'<?php echo $this->scope["_language"]["name"];?>', 'title':'<?php echo $this->scope["_language"]["title"];?>', 'value':'<?php echo $this->scope["_language"]["value"];?>', 'engagevisitor':'<?php echo $this->scope["_language"]["engagevisitor"];?>', 'customengagevisitor':'<?php echo $this->scope["_language"]["customengagevisitor"];?>', 'inlinechat':'<?php echo $this->scope["_language"]["inlinechat"];?>', 'url':'<?php echo $this->scope["_language"]["url"];?>', 'vactionvariables':'<?php echo $this->scope["_language"]["vactionvariables"];?>', 'vactionvexp':'<?php echo $this->scope["_language"]["vactionvexp"];?>', 'vactionsalerts':'<?php echo $this->scope["_language"]["vactionsalerts"];?>', 'open':'<?php echo $this->scope["_language"]["open"];?>', 'close':'<?php echo $this->scope["_language"]["close"];?>', 'geoipprocessrunning': '<?php echo $this->scope["_language"]["geoipprocessrunning"];?>', 'continueprocessquestion': '<?php echo $this->scope["_language"]["continueprocessquestion"];?>', 'vactionsetdepartment': '<?php echo $this->scope["_language"]["vactionsetdepartment"];?>', 'vactionsetskill': '<?php echo $this->scope["_language"]["vactionsetskill"];?>', 'vactionsetcolor': '<?php echo $this->scope["_language"]["vactionsetcolor"];?>', 'vactionbanvisitor': '<?php echo $this->scope["_language"]["vactionbanvisitor"];?>', 'vactionsetgroup': '<?php echo $this->scope["_language"]["vactionsetgroup"];?>', 'hexcode': '<?php echo $this->scope["_language"]["hexcode"];?>', 'type': '<?php echo $this->scope["_language"]["type"];?>', 'banip': '<?php echo $this->scope["_language"]["banip"];?>', 'banclassa': '<?php echo $this->scope["_language"]["banclassa"];?>', 'banclassb': '<?php echo $this->scope["_language"]["banclassb"];?>', 'banclassc': '<?php echo $this->scope["_language"]["banclassc"];?>', 'notificationsubject': '<?php echo $this->scope["_language"]["notificationsubject"];?>', 'notificationuser': '<?php echo $this->scope["_language"]["notificationuser"];?>', 'notificationuserorganization': '<?php echo $this->scope["_language"]["notificationuserorganization"];?>', 'notificationstaff': '<?php echo $this->scope["_language"]["notificationstaff"];?>', 'notificationteam': '<?php echo $this->scope["_language"]["notificationteam"];?>', 'notificationdepartment': '<?php echo $this->scope["_language"]["notificationdepartment"];?>', 'loading': '<?php echo $this->scope["_language"]["loading"];?>', 'pwtooshort': '<?php echo $this->scope["_language"]["pwtooshort"];?>', 'pwveryweak': '<?php echo $this->scope["_language"]["pwveryweak"];?>', 'pwunsafeword': '<?php echo $this->scope["_language"]["pwunsafeword"];?>', 'pwweak': '<?php echo $this->scope["_language"]["pwweak"];?>', 'pwmedium': '<?php echo $this->scope["_language"]["pwmedium"];?>', 'pwstrong': '<?php echo $this->scope["_language"]["pwstrong"];?>', 'pwverystrong': '<?php echo $this->scope["_language"]["pwverystrong"];?>', 'cyesterday': '<?php echo $this->scope["_language"]["cyesterday"];?>', 'ctoday': '<?php echo $this->scope["_language"]["ctoday"];?>', 'ccurrentwtd': '<?php echo $this->scope["_language"]["ccurrentwtd"];?>', 'ccurrentmtd': '<?php echo $this->scope["_language"]["ccurrentmtd"];?>', 'ccurrentytd': '<?php echo $this->scope["_language"]["ccurrentytd"];?>', 'cl7days': '<?php echo $this->scope["_language"]["cl7days"];?>', 'cl30days': '<?php echo $this->scope["_language"]["cl30days"];?>', 'cl90days': '<?php echo $this->scope["_language"]["cl90days"];?>', 'cl180days': '<?php echo $this->scope["_language"]["cl180days"];?>', 'cl365days': '<?php echo $this->scope["_language"]["cl365days"];?>', 'starttypingtags': '<?php echo $this->scope["_language"]["starttypingtags"];?>', 'edit': '<?php echo $this->scope["_language"]["edit"];?>', 'insert': '<?php echo $this->scope["_language"]["insert"];?>', 'ctomorrow': '<?php echo $this->scope["_language"]["ctomorrow"];?>', 'cnextwfd': '<?php echo $this->scope["_language"]["cnextwfd"];?>', 'cnextmfd': '<?php echo $this->scope["_language"]["cnextmfd"];?>', 'cnextyfd': '<?php echo $this->scope["_language"]["cnextyfd"];?>', 'cn7days': '<?php echo $this->scope["_language"]["cn7days"];?>', 'cn30days': '<?php echo $this->scope["_language"]["cn30days"];?>', 'cn90days': '<?php echo $this->scope["_language"]["cn90days"];?>', 'cn180days': '<?php echo $this->scope["_language"]["cn180days"];?>', 'cn365days': '<?php echo $this->scope["_language"]["cn365days"];?>'};
</script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->scope["_baseName"];?>/Core/Default/Compressor/css/jqueryui:staff:colorpicker:popup:kql:notification:circleplayer" />
<script type="text/javascript" src="<?php echo $this->scope["_baseName"];?>/Core/Default/Compressor/js/jquery:jqueryplugins:jqueryui:colorpicker:corecp:<?php echo $this->scope["_area"];?>cp:kajax:tinymce:popup:kql:notification:circleplayer"></script>
<?php echo call_user_func(array('SWIFT_UserInterfaceControlPanel', 'RenderControlPanelMenu'));?>

<script type="text/javascript">
var datePickerDefaults = {showOn: "both", buttonImage: "<?php echo $this->scope["_themePath"];?>images/icon_calendar.gif", changeMonth: true, changeYear: true, buttonImageOnly: true, dateFormat: '<?php if ((isset($this->scope["_settings"]["dt_caltype"]) ? $this->scope["_settings"]["dt_caltype"]:null) == 'us') {
?>mm/dd/yy<?php 
}
else {
?>dd/mm/yy<?php 
}?>'};
</script>
</head>
<body background="<?php echo $this->scope["_themePath"];?>images/bgblocks.gif" kajaximagepath="<?php echo $this->scope["_themePath"];?>images/">
<?php if ((isset($this->scope["_session"]["iswinapp"]) ? $this->scope["_session"]["iswinapp"]:null) != "1" && (isset($this->scope["_settings"]["g_displaytopheader"]) ? $this->scope["_settings"]["g_displaytopheader"]:null) == 1) {
?>
<div class="reheaderbar">
<div class="rebarlogo">
<a href="<?php echo $this->scope["_baseName"];?>/Core/Dashboard/Index"><img src="<?php echo $this->scope["_headerImageCP"];?>" border="0" /></a>
</div>
<div class="cptopmenulink">
<a href="<?php echo $this->scope["_swiftPath"];?>" class="menulink" target="_blank"><?php echo $this->scope["_language"]["menusupportcenter"];?></a><?php if ((isset($this->scope["_area"]) ? $this->scope["_area"] : null) != 'staff') {
?> | <a class="menulink" href="<?php echo $this->scope["_swiftPath"];?>staff/index.php" target="_blank"><?php echo $this->scope["_language"]["menustaffcp"];?></a><?php 
}
if ((isset($this->scope["_area"]) ? $this->scope["_area"] : null) == 'staff' && (isset($this->scope["_staffIsAdmin"]) ? $this->scope["_staffIsAdmin"] : null) == true) {
?> | <a class="menulink" href="<?php echo $this->scope["_swiftPath"];?>admin/index.php" target="_blank"><?php echo $this->scope["_language"]["menuadmincp"];?></a><?php 
}?>

</div>
</div>
<div class="rebartopspacer"></div>
<?php 
}?>

<script language="Javascript" type="text/javascript">
var swmenubg1 = "menudefbg";
var swmenubg2 = "remenusectiondefault";
var swtabmenutype = "<?php if ((isset($this->scope["_controlPanelMenu"]) ? $this->scope["_controlPanelMenu"] : null) == "hover") {
?>onMouseOver<?php 
}
else {
?>onClick<?php 
}?>";
var swtabmenu = new Array(); var swtabmenucolspan = '<?php echo $this->scope["_menuColumnSpan"];?>'; var swtabselmenu = '<?php echo $this->scope["_selectedMenu"];?>'; var swtabselmenuclass = '<?php echo $this->scope["_selectedMenuClass"];?>';
swtabmenu = [<?php 
$_fh0_data = (isset($this->scope["_menu"]) ? $this->scope["_menu"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>['<?php echo $this->scope["key"];?>', '<?php echo $this->scope["_item"]["1"];?>', '<?php echo $this->scope["_item"]["4"];?>', '<?php echo $this->scope["_item"]["0"];?>'],<?php 
/* -- foreach end output */
	}
}?>];
buildTopTabMenu();
</script>

<script language="Javascript" type="text/javascript">
switchTab(<?php echo $this->scope["_selectedMenu"];?>, <?php echo $this->scope["_selectedMenuClass"];?>);
</script>
<?php echo $this->scope["_extendedRefreshScript"];?>

<table border="0" cellspacing="0" cellpadding="0" width="100%"><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>