<?php
ob_start(); /* template body */ ;

$_fh14_data = (isset($this->scope["_customFields"]) ? $this->scope["_customFields"] : null);
if ($this->isArray($_fh14_data) === true)
{
	foreach ($_fh14_data as $this->scope['key']=>$this->scope['_customFieldGroup'])
	{
/* -- foreach start output */
?>
		<table class="hlineheader"><tr><th rowspan="2" nowrap><?php echo $this->scope["_customFieldGroup"]["title"];?></th><td>&nbsp;</td></tr><tr><td class="hlinelower">&nbsp;</td></tr></table>
			<table width="100%" border="0" cellspacing="1" cellpadding="4">
				<?php 
$_fh13_data = (isset($this->scope["_customFieldGroup"]["_fields"]) ? $this->scope["_customFieldGroup"]["_fields"]:null);
if ($this->isArray($_fh13_data) === true)
{
	foreach ($_fh13_data as $this->scope['key']=>$this->scope['_customField'])
	{
/* -- foreach start output */
?>
				<?php if ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'custom' && (isset($this->scope["_customField"]["valuetype"]) ? $this->scope["_customField"]["valuetype"]:null) != 'static') {
?>
				<!-- PLACE CUSTOM FIELD TYPE HTML CODE HERE -->
				<?php 
}
else {
?>
				<tr>
					<td width="<?php if ((isset($this->scope["_isLiveChat"]) ? $this->scope["_isLiveChat"] : null)) {
?>100<?php 
}
else {
?>200<?php 
}?>" align="left" valign="middle" class="<?php if ((isset($this->scope["_isLiveChat"]) ? $this->scope["_isLiveChat"] : null)) {


}
else {
?>zebraodd<?php 
}?>"><?php echo $this->scope["_customField"]["title"];?>:<?php if ((isset($this->scope["_customField"]["isrequired"]) ? $this->scope["_customField"]["isrequired"]:null) == '1') {
?><span class="customfieldrequired">*</span><?php 
}?></td>
					<td><?php if ((isset($this->scope["_customField"]["valuetype"]) ? $this->scope["_customField"]["valuetype"]:null) == 'static') {

echo $this->scope["_customField"]["fieldvalue"];

}
else {
?>
					<?php if ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'text') {
?>
					<input name="<?php echo $this->scope["_customField"]["fieldname"];?>" type="text" autocomplete="off" size="20" class="swifttextlarge" value="<?php echo $this->scope["_customField"]["fieldvalue"];?>">
					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'textarea') {
?>
					<textarea name="<?php echo $this->scope["_customField"]["fieldname"];?>" class="swifttextarea" rows="5" cols="100"><?php echo $this->scope["_customField"]["fieldvalue"];?></textarea>
					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'password') {
?>
					<input name="<?php echo $this->scope["_customField"]["fieldname"];?>" type="password" autocomplete="off" size="20" class="swifttextlarge swiftpassword" value="<?php echo $this->scope["_customField"]["fieldvalue"];?>">
					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'checkbox') {
?>
						<?php 
$_fh6_data = (isset($this->scope["_customField"]["fieldvalue"]) ? $this->scope["_customField"]["fieldvalue"]:null);
if ($this->isArray($_fh6_data) === true)
{
	foreach ($_fh6_data as $this->scope['optionkey']=>$this->scope['_customFieldOption'])
	{
/* -- foreach start output */
?>
						<label for="<?php echo $this->scope["_customField"]["fieldname"];?>[<?php echo $this->scope["optionkey"];?>]"><input type="checkbox" id="<?php echo $this->scope["_customField"]["fieldname"];?>[<?php echo $this->scope["optionkey"];?>]" name="<?php echo $this->scope["_customField"]["fieldname"];?>[<?php echo $this->scope["optionkey"];?>]" value="<?php echo $this->scope["_customFieldOption"]["value"];?>"<?php if ((isset($this->scope["_customFieldOption"]["checked"]) ? $this->scope["_customFieldOption"]["checked"]:null) == 1) {
?> checked<?php 
}?> /> <?php echo $this->scope["_customFieldOption"]["title"];?></label><br />
						<?php 
/* -- foreach end output */
	}
}?>

					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'radio') {
?>
						<?php 
$_fh7_data = (isset($this->scope["_customField"]["fieldvalue"]) ? $this->scope["_customField"]["fieldvalue"]:null);
if ($this->isArray($_fh7_data) === true)
{
	foreach ($_fh7_data as $this->scope['optionkey']=>$this->scope['_customFieldOption'])
	{
/* -- foreach start output */
?>
						<label for="<?php echo $this->scope["_customField"]["fieldname"];?>[<?php echo $this->scope["optionkey"];?>]"><input type="radio" id="<?php echo $this->scope["_customField"]["fieldname"];?>[<?php echo $this->scope["optionkey"];?>]" name="<?php echo $this->scope["_customField"]["fieldname"];?>" value="<?php echo $this->scope["_customFieldOption"]["value"];?>"<?php if ((isset($this->scope["_customFieldOption"]["checked"]) ? $this->scope["_customFieldOption"]["checked"]:null) == 1) {
?> checked<?php 
}?> /> <?php echo $this->scope["_customFieldOption"]["title"];?></label><br />
						<?php 
/* -- foreach end output */
	}
}?>

					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'select') {
?>
						<select name="<?php echo $this->scope["_customField"]["fieldname"];?>" class="swiftselect">
						<?php 
$_fh8_data = (isset($this->scope["_customField"]["fieldvalue"]) ? $this->scope["_customField"]["fieldvalue"]:null);
if ($this->isArray($_fh8_data) === true)
{
	foreach ($_fh8_data as $this->scope['optionkey']=>$this->scope['_customFieldOption'])
	{
/* -- foreach start output */
?>
						<option value="<?php echo $this->scope["_customFieldOption"]["value"];?>"<?php if ((isset($this->scope["_customFieldOption"]["selected"]) ? $this->scope["_customFieldOption"]["selected"]:null) == 1) {
?> selected<?php 
}?>><?php echo $this->scope["_customFieldOption"]["title"];?></option>
						<?php 
/* -- foreach end output */
	}
}?>

						</select>
					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'selectmultiple') {
?>
						<select name="<?php echo $this->scope["_customField"]["fieldname"];?>[]" class="swiftselect" multiple>
						<?php 
$_fh9_data = (isset($this->scope["_customField"]["fieldvalue"]) ? $this->scope["_customField"]["fieldvalue"]:null);
if ($this->isArray($_fh9_data) === true)
{
	foreach ($_fh9_data as $this->scope['optionkey']=>$this->scope['_customFieldOption'])
	{
/* -- foreach start output */
?>
						<option value="<?php echo $this->scope["_customFieldOption"]["value"];?>"<?php if ((isset($this->scope["_customFieldOption"]["selected"]) ? $this->scope["_customFieldOption"]["selected"]:null) == 1) {
?> selected<?php 
}?>><?php echo $this->scope["_customFieldOption"]["title"];?></option>
						<?php 
/* -- foreach end output */
	}
}?>

						</select>
					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'selectlinked') {
?>
						<select name="<?php echo $this->scope["_customField"]["fieldname"];?>[0]" class="swiftselect" onChange="javascript: LinkedSelectChanged(this, '<?php echo $this->scope["_customField"]["fieldname"];?>');">
						<?php 
$_fh10_data = (isset($this->scope["_customField"]["fieldvalue"]) ? $this->scope["_customField"]["fieldvalue"]:null);
if ($this->isArray($_fh10_data) === true)
{
	foreach ($_fh10_data as $this->scope['optionkey']=>$this->scope['_customFieldOption'])
	{
/* -- foreach start output */
?>
						<option value="<?php echo $this->scope["_customFieldOption"]["value"];?>"<?php if ((isset($this->scope["_customFieldOption"]["selected"]) ? $this->scope["_customFieldOption"]["selected"]:null) == 1) {
?> selected<?php 
}?>><?php echo $this->scope["_customFieldOption"]["title"];?></option>
						<?php 
/* -- foreach end output */
	}
}?>

						</select>
						<?php if ((isset($this->scope["_customField"]["fieldvaluelinked"]) ? $this->scope["_customField"]["fieldvaluelinked"]:null) != false) {
?>
							<?php 
$_fh12_data = (isset($this->scope["_customField"]["fieldvaluelinked"]) ? $this->scope["_customField"]["fieldvaluelinked"]:null);
if ($this->isArray($_fh12_data) === true)
{
	foreach ($_fh12_data as $this->scope['linkedoptionkey']=>$this->scope['_customFieldOptionContainer'])
	{
/* -- foreach start output */
?>
								<div id="selectsuboptioncontainer_<?php echo $this->scope["linkedoptionkey"];?>" class="linkedselectcontainer linkedselectcontainer_<?php echo $this->scope["_customField"]["fieldname"];?>" style="display: <?php if ((isset($this->scope["_customFieldOptionContainer"]["display"]) ? $this->scope["_customFieldOptionContainer"]["display"]:null) == true) {
?>block<?php 
}
else {
?>none<?php 
}?>;">
								<select name="<?php echo $this->scope["_customField"]["fieldname"];?>[1][<?php echo $this->scope["linkedoptionkey"];?>]" class="swiftselect">
								<?php 
$_fh11_data = (isset($this->scope["_customFieldOptionContainer"]["_options"]) ? $this->scope["_customFieldOptionContainer"]["_options"]:null);
if ($this->isArray($_fh11_data) === true)
{
	foreach ($_fh11_data as $this->scope['optionkey']=>$this->scope['_customFieldOption'])
	{
/* -- foreach start output */
?>
								<option value="<?php echo $this->scope["_customFieldOption"]["value"];?>"<?php if ((isset($this->scope["_customFieldOption"]["selected"]) ? $this->scope["_customFieldOption"]["selected"]:null) == 1) {
?> selected<?php 
}?>><?php echo $this->scope["_customFieldOption"]["title"];?></option>
								<?php 
/* -- foreach end output */
	}
}?>

								</select>
								</div>
							<?php 
/* -- foreach end output */
	}
}?>

						<?php 
}?>

					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'file') {
?>
					<input name="<?php echo $this->scope["_customField"]["fieldname"];?>" type="file" size="20" class="swifttextlarge" /><?php if ((isset($this->scope["_customField"]["fieldvalue"]) ? $this->scope["_customField"]["fieldvalue"]:null) != '') {
?><br /><?php echo $this->scope["_customField"]["fieldvalue"];

}?>

					<?php 
}
elseif ((isset($this->scope["_customField"]["fieldtype"]) ? $this->scope["_customField"]["fieldtype"]:null) == 'date') {
?>
					<table border="0" cellpadding="0" cellspacing="0"><tr><td><input type="text" name="<?php echo $this->scope["_customField"]["fieldname"];?>" id="<?php echo $this->scope["_customField"]["fieldname"];?>" size="12" value="<?php echo $this->scope["_customField"]["fieldvalue"];?>" class="swifttextsmall"/></td><td width="2"><img src="<?php echo $this->scope["_themePath"];?>images/space.gif" width="2" border="0"/></td><td align="left" valign="top"><div style="padding: 4px 0 0 4px;"><a href="javascript: void(0);" onclick="javascript: ClearDateField('<?php echo $this->scope["_customField"]["fieldname"];?>');"><img src="<?php echo $this->scope["_themePath"];?>images/icon_calendarcross.gif" border="0" /></a></div></td></tr></table><script type="text/javascript">QueueFunction(function(){ $("#<?php echo $this->scope["_customField"]["fieldname"];?>").datepicker(datePickerDefaults); });</script>
					<?php 
}?>


					<?php 
}?>

					<?php if ((isset($this->scope["_customField"]["description"]) ? $this->scope["_customField"]["description"]:null) != '' && (isset($this->scope["_customField"]["valuetype"]) ? $this->scope["_customField"]["valuetype"]:null) == 'field') {
?><br /><span class="smalltext"><?php echo $this->scope["_customField"]["description"];?></span><?php 
}?></td>
				</tr>
				<?php 
}?>

				<?php 
/* -- foreach end output */
	}
}?>

			</table>
		<br/>
		<?php 
/* -- foreach end output */
	}
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>