<?php
ob_start(); /* template body */ ?><select name="departmentid" class="swiftselect">
<?php 
$_fh4_data = (isset($this->scope["_departmentStatusContainer"]["online"]) ? $this->scope["_departmentStatusContainer"]["online"]:null);
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
<option value='<?php echo $this->scope["_item"]["departmentid"];?>' class='deponline'><?php echo $this->scope["_item"]["displaytitle"];?> - <?php echo $this->scope["_language"]["online"];?></option>
<?php 
/* -- foreach end output */
	}
}?>

<?php 
$_fh5_data = (isset($this->scope["_departmentStatusContainer"]["offline"]) ? $this->scope["_departmentStatusContainer"]["offline"]:null);
if ($this->isArray($_fh5_data) === true)
{
	foreach ($_fh5_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
<option value='<?php echo $this->scope["_item"]["departmentid"];?>' class='depoffline'><?php echo $this->scope["_item"]["displaytitle"];?> - <?php echo $this->scope["_language"]["offline"];?></option>
<?php 
/* -- foreach end output */
	}
}?>

</select><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>