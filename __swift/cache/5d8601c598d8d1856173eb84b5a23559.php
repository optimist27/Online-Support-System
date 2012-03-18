<?php
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<body>
<div class="loginformcontainer">
<center>
<script language="Javascript" type="text/javascript">
$(function(){
	$('#username').focus();
	$('#newpassword').pstrength();
	$('#newpasswordagain').pstrength();
});
</script>
<form name="loginform" action="<?php echo $this->scope["_baseName"];?>/Core/Default/Login" method="post">
<table width="340" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td colspan="2" align="center" valign="top"><img src="<?php echo $this->scope["_themePath"];?>images/<?php echo $this->scope["_product"];?>.gif" /><br/><br/></td>
  </tr>
  <tr>
    <td width="30" align="left" valign="top"><span class="smalltext">&nbsp;</span></td>
    <td align="right" valign="top"><span class="smalltext"><?php echo $this->scope["_currentDate"];?></span></td>
  </tr>
  <tr>
    <td colspan="2">
	<div class="loginformparent">
	<div class="loginformsub">

	<table width="100%"  border="0" cellspacing="0" cellpadding="3">
	<tr><td>

	<table width="100%"  border="0" cellspacing="0" cellpadding="3">
				<tr class="gridrow1">
					<td width="37%" align="left" valign="top" class="smalltext"><?php echo $this->scope["_language"]["username"];?>:</td>
					<td width="63%" align="left" valign="top"><input type="text" name="username" id="username" class="logintext" value="<?php echo $this->scope["_userName"];?>" size="25" /></td>
				</tr>
				<tr class="gridrow2">
					<td align="left" valign="top" class="smalltext"><?php echo $this->scope["_language"]["password"];?>:</td>
					<td align="left" valign="top"><input type="password" name="password" id="password" class="loginpassword" value="<?php echo $this->scope["_password"];?>" size="25" /></td>
				</tr>
				<?php if ((isset($this->scope["_errorString"]) ? $this->scope["_errorString"] : null) != "") {
?>
				<tr class="rowerror" title="" onmouseover="" onmouseout="" onclick="">
				<td align="center" colspan="2"><?php echo $this->scope["_errorString"];?>

				</td>
				</tr>
				<?php 
}?>

				<?php if ((isset($this->scope["_passwordExpired"]) ? $this->scope["_passwordExpired"] : null) == true) {
?>
				<tr class="gridrow1">
					<td align="left" valign="top" class="smalltext"><?php echo $this->scope["_language"]["newpassword"];?>:</td>
					<td align="left" valign="top"><input type="password" name="newpassword" id="newpassword" class="loginpassword" size="25" /></td>
				</tr>
				<tr class="gridrow2">
					<td align="left" valign="top" class="smalltext"><?php echo $this->scope["_language"]["passwordagain"];?>:</td>
					<td align="left" valign="top"><input type="password" name="newpasswordagain" id="newpasswordagain" class="loginpassword" size="25" /></td>
				</tr>
				<tr class="gridrow1">
					<td align="left" valign="top" colspan="2"><?php echo $this->scope["_passwordExpiredMessage"];?></td>
				</tr>
				<?php 
}?>

			</table>

	</td></tr></table>

	<table width="100%"  border="0" cellspacing="0" cellpadding="6">
	<tr><td colspan="2">
	<div class="loginrule">&nbsp;</div>
	</td></tr>

	<tr><td width="100" align="left"><input type="button" name="cancel" class="rebutton" onmouseover="this.className='rebuttongreen';" onmouseout="this.className='rebutton';" value="<?php echo $this->scope["_language"]["options"];?>" onclick="javascript:toggleLoginOptions();" onfocus="blur();" /></td><td align="right"><input type="submit" name="submitbutton" class="rebutton" onmouseover="this.className='rebuttonblue';" onmouseout="this.className='rebutton';" value="<?php echo $this->scope["_language"]["login"];?>" onfocus="blur();" /></td></tr>
	</table>

	</div>
	</div>

	<div class="loginoptions" style=" DISPLAY: <?php if ((isset($this->scope["displayloginoptions"]) ? $this->scope["displayloginoptions"] : null) == '1') {
?>block<?php 
}
else {
?>none<?php 
}?>;" id="loginoptions">

	<table width="100%" border="0" cellspacing="0" cellpadding="3">
	<tr><td align='left' valign='top'>

	<table width="100%" border="0" cellspacing="0" cellpadding="3" class="smalltext">
              <tr class="gridrow1">
                <td width="37%" align="left" valign="top"><?php echo $this->scope["_language"]["rememberme"];?>:</td>
                <td width="63%" align="left" valign="top"><label for="rememberyes"><input type="radio" name="remember" class="swiftradio" id="rememberyes" value="1"<?php if ((isset($this->scope["_rememberMeCheckbox"]) ? $this->scope["_rememberMeCheckbox"] : null) == true) {
?> checked<?php 
}?> /> <?php echo $this->scope["_language"]["yes"];?></label> &nbsp;<label for="rememberno"><input style="margin-left: 4px;" type="radio" name="remember" id="rememberno" value="0"<?php if ((isset($this->scope["_rememberMeCheckbox"]) ? $this->scope["_rememberMeCheckbox"] : null) == false) {
?> checked<?php 
}?> /> <?php echo $this->scope["_language"]["no"];?></label></td>
              </tr>
              <tr class="gridrow2">
                <td width="37%" align="left" valign="top"><?php echo $this->scope["_language"]["language"];?>:</td>
                <td width="63%" align="left" valign="top"><select name="languagecode" class="swiftselect">
				<?php 
$_fh0_data = (isset($this->scope["_languageList"]) ? $this->scope["_languageList"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['_key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
				<option value="<?php echo $this->scope["_item"]["0"];?>" <?php if ((isset($this->scope["_item"]["2"]) ? $this->scope["_item"]["2"]:null) == true) {
?> selected<?php 
}?>><?php echo $this->scope["_item"]["1"];?></option>
				<?php 
/* -- foreach end output */
	}
}?>

				</select>
				</td>
              </tr>
			</table>

	</td></tr></table>

	</div>

	</td>
  </tr>


</table>














<input type="hidden" name="_ca" value="login"/>
<input type="hidden" name="_redirectAction" value="<?php echo $this->scope["_redirectAction"];?>"/>
</form>

<br /><div class="smalltext"><?php echo $this->scope["_poweredByNotice"];?><br /><?php echo $this->scope["_copyright"];?></div><br />
</center>
</div>
<script type='text/javascript'>
QueryLoader.init();
</script>

</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>