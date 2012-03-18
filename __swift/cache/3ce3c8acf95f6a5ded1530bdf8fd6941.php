<?php
ob_start(); /* template body */ ;
echo call_user_func(array('SWIFT_TemplateEngine', 'RenderTemplate'), "chatheader");?>

<form name="chatform" id="chatform" method="post" action="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/LiveChat/Chat/Start" target="_top" enctype="multipart/form-data" onsubmit="return ValidateChatForm(false);">
<?php if ((isset($this->scope["_promptType"]) ? $this->scope["_promptType"] : null) == 'call') {

echo $this->scope["_language"]["livechatheadercall"];

}
else {

echo $this->scope["_language"]["livechatheader"];

}?><br /><br />
<table width="100%"  border="0" cellspacing="1" cellpadding="2">
	<tr>
		<td width="100" class="fieldtitle" align="left" valign="middle"><?php echo $this->scope["_language"]["fielddepartment"];?></td>
		<td width="" align="left" valign="middle"><?php echo call_user_func(array('SWIFT_TemplateEngine', 'RenderTemplate'), "chatdepartmentlist");?></td>
	</tr>
	<tr>
		<td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
		<td>&nbsp;</td>
	</tr>
	<?php if ((isset($this->scope["_getFullname"]) ? $this->scope["_getFullname"] : null) == "") {
?>
	<tr>
		<td class="fieldtitle" align="left" valign="middle"><?php echo $this->scope["_language"]["fieldfullname"];?></td>
		<td align="left" valign="middle"><input type="text" name="fullname" id="chatfullname" class="swifttext required" value="<?php echo $this->scope["_fullName"];?>"></td>
	</tr>
	<?php 
}?>

	<?php if ((isset($this->scope["_getEmail"]) ? $this->scope["_getEmail"] : null) == "") {
?>
	<tr>
		<td class="fieldtitle" align="left" valign="middle"><?php echo $this->scope["_language"]["fieldemail"];?></td>
		<td align="left" valign="middle"><input type="text" name="email" id="chatemail" class="swifttext required email" value="<?php echo $this->scope["_email"];?>"></td>
	</tr>
	<?php 
}?>

	<?php if ((isset($this->scope["_promptType"]) ? $this->scope["_promptType"] : null) == 'call') {
?>
	<tr>
		<td class="fieldtitle" align="left" valign="middle"><?php echo $this->scope["_language"]["fieldphone"];?></td>
		<td><select name="countrycode" class="swiftselect required"><?php 
$_fh0_data = (isset($this->scope["_countryList"]) ? $this->scope["_countryList"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?><option value="<?php echo $this->scope["_item"]["value"];?>"<?php if ((isset($this->scope["_item"]["selected"]) ? $this->scope["_item"]["selected"]:null) == true) {
?> selected<?php 
}?>><?php echo $this->scope["_item"]["title"];?></option><?php 
/* -- foreach end output */
	}
}?></select></td>
	</tr>
	<tr>
		<td class="fieldtitle" align="left" valign="middle">&nbsp;</td>
		<td><input type="text" name="phonenumber" id="phonenumber" class="swifttext required" value="" /></td>
	</tr>
	<?php 
}?>

	<?php if ((isset($this->scope["_getSubject"]) ? $this->scope["_getSubject"] : null) == "") {
?>
	<tr>
		<td class="fieldtitle" align="left" valign="middle"><?php echo $this->scope["_language"]["fieldchatsubject"];?></td>
		<td align="left" valign="middle"><textarea name="subject" id="chatsubject" class="swifttextwide" rows="2" cols="30" maxlength="255"><?php echo $this->scope["_subject"];?></textarea></td>
	</tr>
	<?php 
}?>

	</table>
	<?php echo call_user_func(array('SWIFT_TemplateEngine', 'RenderTemplate'), "customfields");?>

	<table width="100%"  border="0" cellspacing="1" cellpadding="2">
	<tr>
		<td width="100" class="fieldtitle" align="left" valign="middle">&nbsp;</td>
		<td align="left" valign="middle"><input type="submit" class="rebuttonblue" value="<?php if ((isset($this->scope["_promptType"]) ? $this->scope["_promptType"] : null) == 'call') {

echo $this->scope["_language"]["callme"];

}
else {

echo $this->scope["_language"]["buttonstartchat"];

}?>" /></td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2"><div id="chaterror" class="errorrowhidden"><?php echo $this->scope["_language"]["requiredfieldempty"];?></div><div id="chatemailerror" class="errorrowhidden"><?php echo $this->scope["_language"]["emailinvalid"];?></div></td>
	</tr>
</table>
<?php if ((isset($this->scope["_getFullname"]) ? $this->scope["_getFullname"] : null) != "") {
?><input type="hidden" name="fullname" value="<?php echo $this->scope["_getFullname"];?>"><?php 
}?>

<?php if ((isset($this->scope["_getEmail"]) ? $this->scope["_getEmail"] : null) != "") {
?><input type="hidden" name="email" value="<?php echo $this->scope["_getEmail"];?>"><?php 
}?>

<?php if ((isset($this->scope["_getUserID"]) ? $this->scope["_getUserID"] : null) != "") {
?><input type="hidden" name="userid" value="<?php echo $this->scope["_getUserID"];?>"><?php 
}?>

<input type="hidden" name="sessionid" value="<?php echo $this->scope["_getSessionID"];?>">
<input type="hidden" name="prompttype" value="<?php echo $this->scope["_promptType"];?>">
</form>
<?php echo call_user_func(array('SWIFT_TemplateEngine', 'RenderTemplate'), "chatfooter");
 /* end template body */
return $this->buffer . ob_get_clean();
?>