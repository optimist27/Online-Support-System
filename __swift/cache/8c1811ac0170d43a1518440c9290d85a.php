<?php
ob_start(); /* template body */ ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html>

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->scope["_language"]["charset"];?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <title><?php if ((isset($this->scope["_pageTitle"]) ? $this->scope["_pageTitle"] : null) != "") {

echo $this->scope["_pageTitle"];

}
else {

echo $this->scope["_companyName"];

}?> - <?php echo $this->scope["_poweredByNotice"];?></title>
    <meta name="KEYWORDS" content="Home" />
    <!-- <meta name="description" content="DISPLAY SOME KB STUFF OR NEWS HERE" /> -->
    <meta name="robots" content="index,follow" />

    <link rel="shortcut icon" href="/favicon.ico" />
	<?php if ((isset($this->scope["_settings"]["nw_enablerss"]) ? $this->scope["_settings"]["nw_enablerss"]:null) == '1') {
?>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $this->scope["_swiftPath"];?>rss/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/News/Feed" />
	<?php 
}?>

	<script language="Javascript" type="text/javascript">
	var _themePath = "<?php echo $this->scope["_themePath"];?>";
	var _swiftPath = "<?php echo $this->scope["_swiftPath"];?>";
	var _baseName = "<?php echo $this->scope["_baseName"];?>";
	var datePickerDefaults = {showOn: "both", buttonImage: "<?php echo $this->scope["_themePath"];?>images/icon_calendar.gif", changeMonth: true, changeYear: true, buttonImageOnly: true, dateFormat: '<?php if ((isset($this->scope["_settings"]["dt_caltype"]) ? $this->scope["_settings"]["dt_caltype"]:null) == 'us') {
?>mm/dd/yy<?php 
}
else {
?>dd/mm/yy<?php 
}?>'};
	</script>

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Core/Default/Compressor/css/jqueryui:popup:client:colorpicker" />
	<script type="text/javascript" src="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Core/Default/Compressor/js/jquery:jqueryplugins:jqueryui:colorpicker:coresc:popup"></script>
  </head>


  <body class="bodymain">

    <div id="main">

      <div id="topbanner"><a href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>"><img border="0" src="<?php echo $this->scope["_headerImageSC"];?>" alt="Kayako <?php echo $this->scope["_productTitle"];?> Logo" id="logo" /></a></div>

      <div id="toptoolbar">

        <span id="toptoolbarrightarea">
		<select class="swiftselect" name="languageid" id="languageid" onchange="javascript: LanguageSwitch(false);">
		<?php 
$_fh0_data = (isset($this->scope["_languageContainer"]) ? $this->scope["_languageContainer"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['_languageID']=>$this->scope['_languageItem'])
	{
/* -- foreach start output */
?>
		<?php if ((isset($this->scope["_languageItem"]["isenabled"]) ? $this->scope["_languageItem"]["isenabled"]:null) == '1') {
?>
		<option value="<?php echo $this->scope["_languageID"];?>"<?php if ((isset($this->scope["_activeLanguageID"]) ? $this->scope["_activeLanguageID"] : null) == (isset($this->scope["_languageID"]) ? $this->scope["_languageID"] : null)) {
?> selected<?php 
}?>><?php echo $this->scope["_languageItem"]["title"];?></option>
		<?php 
}?>

		<?php 
/* -- foreach end output */
	}
}?>

		</select>
        </span>

        <ul id="toptoolbarlinklist"><?php 
$_fh1_data = (isset($this->scope["_widgetContainer"]) ? $this->scope["_widgetContainer"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */

if ((isset($this->scope["_item"]["displayinnavbar"]) ? $this->scope["_item"]["displayinnavbar"]:null) == '1') {
?><li<?php if ((isset($this->scope["_item"]["isactive"]) ? $this->scope["_item"]["isactive"]:null) == true) {
?> class="current"<?php 
}?>><a class="toptoolbarlink" style="<?php if ((isset($this->scope["_item"]["defaultsmallicon"]) ? $this->scope["_item"]["defaultsmallicon"]:null) != '') {
?>background-image: url(<?php echo $this->scope["_item"]["defaultsmallicon"];?>);<?php 
}?>" href="<?php echo $this->scope["_item"]["widgetlink"];?>"><?php echo $this->scope["_item"]["defaulttitle"];?></a></li><?php 
}

/* -- foreach end output */
	}
}?></ul>

      </div>

      <div id="maincore">



        <div id="maincoreleft">

          <div id="leftloginsubscribebox">
            <?php if ((isset($this->scope["_userIsLoggedIn"]) ? $this->scope["_userIsLoggedIn"] : null) == true) {
?>
            <div class="tabrow" id="leftloginsubscribeboxtabs"><a id="leftloginsubscribeboxlogintab" href="#" class="atab"><span class="tableftgap">&nbsp;</span><span class="tabbulk"><span class="tabtext"><?php echo $this->scope["_language"]["myaccount"];?></span></span></a></div>
            <div id="leftloginbox" class="switchingpanel active">
              <div class="maitem maprofile" onclick="javascript: Redirect('<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/UserAccount/Profile');"><?php echo $this->scope["_language"]["maprofile"];?></div>
			  <?php if (( (isset($this->scope["_settings"]["user_orgprofileupdate"]) ? $this->scope["_settings"]["user_orgprofileupdate"]:null) == 'allusers' && (isset($this->scope["_user"]["userorganizationid"]) ? $this->scope["_user"]["userorganizationid"]:null) != '0' ) || ( (isset($this->scope["_user"]["userrole"]) ? $this->scope["_user"]["userrole"]:null) == 2 && (isset($this->scope["_settings"]["user_orgprofileupdate"]) ? $this->scope["_settings"]["user_orgprofileupdate"]:null) == 'managersonly' && (isset($this->scope["_user"]["userorganizationid"]) ? $this->scope["_user"]["userorganizationid"]:null) != '0' )) {
?>
              <div class="maitem maorganization" onclick="javascript: Redirect('<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/UserAccount/MyOrganization');"><?php echo $this->scope["_language"]["maorganization"];?></div>
			  <?php 
}?>

			  <?php 
$_fh2_data = (isset($this->scope["_navbarMenuItemContainer"]) ? $this->scope["_navbarMenuItemContainer"] : null);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['_itemID']=>$this->scope['_navbarMenuItem'])
	{
/* -- foreach start output */
?>
              <div class="maitem<?php if ((isset($this->scope["_navbarMenuItem"]["class"]) ? $this->scope["_navbarMenuItem"]["class"]:null) != '') {
?> <?php echo $this->scope["_navbarMenuItem"]["class"];

}?>" onclick="javascript: Redirect('<?php echo $this->scope["_navbarMenuItem"]["link"];?>');"><?php echo $this->scope["_navbarMenuItem"]["title"];?></div>
			  <?php 
/* -- foreach end output */
	}
}?>

              <div class="maitem mapreferences" onclick="javascript: Redirect('<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/UserAccount/Preferences');"><?php echo $this->scope["_language"]["mapreferences"];?></div>
              <div class="maitem machangepassword" onclick="javascript: Redirect('<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/UserAccount/ChangePassword');"><?php echo $this->scope["_language"]["machangepassword"];?></div>
              <div class="maitem malogout" onclick="javascript: Redirect('<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/User/Logout');"><?php echo $this->scope["_language"]["malogout"];?></div>
            </div>

            <?php 
}
else {
?>
            <form method="post" action="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/User/Login" name="LoginForm">
            <div class="tabrow" id="leftloginsubscribeboxtabs"><a id="leftloginsubscribeboxlogintab" href="#" onclick="javascript: ActivateLoginTab();" class="atab"><span class="tableftgap">&nbsp;</span><span class="tabbulk"><span class="tabtext"><?php echo $this->scope["_language"]["login"];?></span></span></a><?php if ((isset($this->scope["_canSubscribeNews"]) ? $this->scope["_canSubscribeNews"] : null) == true) {
?><a id="leftloginsubscribeboxsubscribetab" href="#" onclick="javascript: ActivateSubscribeTab();" class="atab inactive"><span class="tableftgap">&nbsp;</span><span class="tabbulk"><span class="tabtext"><?php echo $this->scope["_language"]["subscribe"];?></span></span></a><?php 
}?></div>
            <div id="leftloginbox" class="switchingpanel active">
			  <input type="hidden" name="_redirectAction" value="<?php echo $this->scope["_redirectAction"];?>" />
              <div class="inputframe zebraeven"><input class="loginstyled<?php if ((isset($this->scope["_userLoginEmail"]) ? $this->scope["_userLoginEmail"] : null) != '') {


}
else {
?>label<?php 
}?>" value="<?php if ((isset($this->scope["_userLoginEmail"]) ? $this->scope["_userLoginEmail"] : null) != '') {

echo $this->scope["_userLoginEmail"];

}
else {

echo $this->scope["_language"]["loginenteremail"];

}?>" onfocus="javascript: ResetLabel(this, '<?php echo $this->scope["_language"]["loginenteremail"];?>', 'loginstyled');" name="scemail" type="text"></div>
              <div class="inputframe zebraodd"><input class="loginstyled" value="<?php echo $this->scope["_userLoginPassword"];?>" name="scpassword" type="password"></div>
              <div class="inputframe zebraeven"><input id="leftloginboxrememberme" name="rememberme" value="1" type="checkbox"<?php if ((isset($this->scope["_userRememberMe"]) ? $this->scope["_userRememberMe"] : null) == true) {
?> checked<?php 
}?>><label for="leftloginboxrememberme"><span id="leftloginboxremembermetext"><?php echo $this->scope["_language"]["rememberme"];?></span></label></div>
              <hr class="vdivider">
              <div id="logintext"><a href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/UserLostPassword/Index"><?php echo $this->scope["_language"]["lostpassword"];?></a></div>
              <div id="loginsubscribebuttons"><input class="rebutton" value="<?php echo $this->scope["_language"]["login"];?>" type="submit" /></div>
            </div>
            </form>
            <?php if ((isset($this->scope["_canSubscribeNews"]) ? $this->scope["_canSubscribeNews"] : null) == true) {
?>
	        <form method="post" action="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/News/Subscriber/Subscribe" name="SubscribeForm">
			<div id="leftsubscribebox" class="switchingpanel">
              <div class="inputframe zebraeven"><input class="emailstyledlabel" value="<?php echo $this->scope["_language"]["loginenteremail"];?>" onfocus="javascript: ResetLabel(this, '<?php echo $this->scope["_language"]["loginenteremail"];?>', 'emailstyled');" name="subscribeemail" type="text"></div>
              <hr class="vdivider">
              <div id="logintext">&nbsp;</div>
              <div id="loginsubscribebuttons"><input class="rebutton" value="<?php echo $this->scope["_language"]["buttonsubmit"];?>" type="submit"></div>
			</div>
            </form>
			<?php 
}?>

            <?php 
}?>

          </div>

		  <?php if ((isset($this->scope["_filterKnowledgebase"]) ? $this->scope["_filterKnowledgebase"] : null) == true) {
?>
			<div class="leftnavboxbox">
				<div class="leftnavboxtitle"><span class="leftnavboxtitleleftgap">&nbsp;</span><span class="leftnavboxtitlebulk"><span class="leftnavboxtitletext"><?php echo $this->scope["_language"]["filterkb"];?></span></span></div>
				<div class="leftnavboxcontent">
				<?php 
$_fh3_data = (isset($this->scope["_navKnowledgebaseCategoryContainer"]) ? $this->scope["_navKnowledgebaseCategoryContainer"] : null);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['_knowledgebaseCategoryID']=>$this->scope['_knowledgebaseCategory'])
	{
/* -- foreach start output */
?>
				<a class="zebraeven" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Knowledgebase/List/Index/<?php echo $this->scope["_knowledgebaseCategoryID"];?>/<?php echo $this->scope["_knowledgebaseCategory"]["seotitle"];?>"><?php echo $this->scope["_knowledgebaseCategory"]["title"];
if ((isset($this->scope["_knowledgebaseCategory"]["totalarticles"]) ? $this->scope["_knowledgebaseCategory"]["totalarticles"]:null) > 0) {
?> <span class="graytext">(<?php echo $this->scope["_knowledgebaseCategory"]["totalarticles"];?>)</span><?php 
}?></a>
				<?php 
/* -- foreach end output */
	}
}?>

				</div>
			</div>
		  <?php 
}?>


		  <?php if ((isset($this->scope["_filterNews"]) ? $this->scope["_filterNews"] : null) == true) {
?>
			<div class="leftnavboxbox">
				<div class="leftnavboxtitle"><span class="leftnavboxtitleleftgap">&nbsp;</span><span class="leftnavboxtitlebulk"><span class="leftnavboxtitletext"><?php echo $this->scope["_language"]["filternews"];?></span></span></div>
				<div class="leftnavboxcontent">
				<?php 
$_fh4_data = (isset($this->scope["_newsCategoryContainer"]) ? $this->scope["_newsCategoryContainer"] : null);
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['_newsCategoryID']=>$this->scope['_newsCategory'])
	{
/* -- foreach start output */
?>
				<a class="zebraeven" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/News/List/Index/<?php echo $this->scope["_newsCategoryID"];?>"><?php echo $this->scope["_newsCategory"]["categorytitle"];
if ((isset($this->scope["_newsCategory"]["totalitems"]) ? $this->scope["_newsCategory"]["totalitems"]:null) > 0) {
?> <span class="graytext">(<?php echo $this->scope["_newsCategory"]["totalitems"];?>)</span><?php 
}?></a>
				<?php 
/* -- foreach end output */
	}
}?>

				</div>
			</div>
		  <?php 
}?>


		  <?php if ((isset($this->scope["_settings"]["ls_displaystatus"]) ? $this->scope["_settings"]["ls_displaystatus"]:null) == '1') {
?>
		  <div id="leftlivechatbox">
          <!-- BEGIN TAG CODE --><div><div id="proactivechatcontainernc2v4biell"></div><table border="0" cellspacing="2" cellpadding="2"><tr><td align="center" id="swifttagcontainernc2v4biell"><div style="display: inline;" id="swifttagdatacontainer"></div></td> </tr><tr><td align="center"><!-- DO NOT REMOVE --><div style="MARGIN-TOP: 2px; WIDTH: 100%; TEXT-ALIGN: center;"><span style="FONT-SIZE: 9px; FONT-FAMILY: Tahoma, Arial, Helvetica, sans-serif;"><a href="http://www.kayako.com/products/live-chat-software/" style="TEXT-DECORATION: none; COLOR: #000000" target="_blank">Live Chat Software</a><span style="COLOR: #000000"> by </span>Kayako</span></div><!-- DO NOT REMOVE --></td></tr></table></div> <script type="text/javascript">var swiftscriptelemnc2v4biell=document.createElement("script");swiftscriptelemnc2v4biell.type="text/javascript";var swiftrandom = Math.floor(Math.random()*1001); var swiftuniqueid = "nc2v4biell"; var swifttagurlnc2v4biell="<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/HTML/HTMLButtonBase";setTimeout("swiftscriptelemnc2v4biell.src=swifttagurlnc2v4biell;document.getElementById('swifttagcontainernc2v4biell').appendChild(swiftscriptelemnc2v4biell);",1);</script><!-- END TAG CODE -->
		  </div>
		  <?php 
}?>


        </div>



        <div id="maincorecontent">

			<!--
			<div id="breadcrumbbar">
				<span class="breadcrumb lastcrumb"><?php echo $this->scope["_language"]["home"];?></span>
			</div>
			-->

            <form method="post" id="searchform" action="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/Search/Index" name="SearchForm">
			<div class="searchboxcontainer">
				<div class="searchbox">
					<span class="searchbuttoncontainer">
						<a class="searchbutton" href="javascript: void(0);" onclick="$('#searchform').submit();"><span></span><?php echo $this->scope["_language"]["searchbutton"];?></a>
					</span>
					<span class="searchinputcontainer"><input type="text" name="searchquery" class="searchquery" onclick="javascript: if ($(this).val() == '<?php echo $this->scope["_language"]["pleasetypeyourquestion"];?>' || $(this).val() == '<?php echo $this->scope["_language"]["pleasetypeyourquery"];?>') { $(this).val('').addClass('searchqueryactive'); }" value="<?php if ((isset($this->scope["_baseIndex"]) ? $this->scope["_baseIndex"] : null) == true) {

echo $this->scope["_language"]["pleasetypeyourquestion"];

}
else {

echo $this->scope["_language"]["pleasetypeyourquery"];

}?>" /></span>
				</div>
			</div>
			</form>

			<!-- BEGIN DIALOG PROCESSING -->
			<?php 
$_fh5_data = (isset($this->scope["_errorContainer"]) ? $this->scope["_errorContainer"] : null);
if ($this->isArray($_fh5_data) === true)
{
	foreach ($_fh5_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
			<div class="dialogerror"><div class="dialogerrorsub"><div class="dialogerrorcontent"><?php echo $this->scope["_item"]["message"];?></div></div></div>
			<?php 
/* -- foreach end output */
	}
}?>

			<?php 
$_fh6_data = (isset($this->scope["_infoContainer"]) ? $this->scope["_infoContainer"] : null);
if ($this->isArray($_fh6_data) === true)
{
	foreach ($_fh6_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
			<div class="dialoginfo"><div class="dialoginfosub"><div class="dialoginfocontent"><?php echo $this->scope["_item"]["message"];?></div></div></div>
			<?php 
/* -- foreach end output */
	}
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>