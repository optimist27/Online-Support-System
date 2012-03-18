<?php
ob_start(); /* template body */ ?>var menulinks = new Array();

<?php 
$_fh2_data = (isset($this->scope["_menuLinks"]) ? $this->scope["_menuLinks"] : null);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
menulinks[<?php echo $this->scope["key"];?>] = new Array();

	<?php 
$_fh1_data = (isset($this->scope["_item"]) ? $this->scope["_item"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['linkkey']=>$this->scope['_linkitem'])
	{
/* -- foreach start output */
?>
	menulinks[<?php echo $this->scope["key"];?>][<?php echo $this->scope["linkkey"];?>] = "<a <?php if ((isset($this->scope["_linkitem"]["20"]) ? $this->scope["_linkitem"]["20"]:null) != '') {
?>id=\"<?php echo $this->scope["_linkitem"]["20"];?>\" <?php 
}?>href=\"javascript: void(0);\" onclick=\"<?php if ((isset($this->scope["_linkitem"]["14"]) ? $this->scope["_linkitem"]["14"]:null) != "") {

echo $this->scope["_linkitem"]["14"];

}
else {
?>javascript: CollapseBarMenu(); loadViewportData('<?php echo $this->scope["_linkitem"]["1"];?>', false, true);<?php 
}?>\" class=\"remoteloadmenu\"><div onclick=\"ActivateMenuItem(this); this.blur();\" class=\"topnavmenuitem<?php if ((isset($this->scope["_linkitem"]["25"]) ? $this->scope["_linkitem"]["25"]:null) == '1') {
?> topnavmenuitemdynamic<?php 
}?>\" alt='<?php echo $this->scope["_linkitem"]["0"];?>' id='linkmenu<?php echo $this->scope["key"];?>_<?php echo $this->scope["linkkey"];?>'><?php if ((isset($this->scope["_linkitem"]["12"]) ? $this->scope["_linkitem"]["12"]:null) == true) {
?><span id=\"itemspanleft\">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php 
}
echo $this->scope["_linkitem"]["0"];
if ((isset($this->scope["_linkitem"]["15"]) ? $this->scope["_linkitem"]["15"]:null) == true) {
?>&nbsp;<img src='<?php echo $this->scope["_themePath"];?>images/menudrop.gif' border='0' /><?php 
}?>&nbsp;&nbsp;&nbsp;&nbsp; <?php if ((isset($this->scope["_linkitem"]["13"]) ? $this->scope["_linkitem"]["13"]:null) == true) {
?><span id=\"itemspanright\">&nbsp;</span><?php 
}?></div></a>";
	<?php 
/* -- foreach end output */
	}
}?>

<?php 
/* -- foreach end output */
	}
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>