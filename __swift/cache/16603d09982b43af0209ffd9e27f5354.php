<?php
ob_start(); /* template body */ ?>					<div class="renavsectionadmin"><div class="navsub">
					<div class="navtitle"><img src="<?php echo $this->scope["_themePath"];?>images/doublearrowsnav.gif" align="absmiddle" border="0" />&nbsp;<?php echo $this->scope["_language"]["options"];?></div>
				<div style="height: 1px;"><img src="<?php echo $this->scope["_themePath"];?>images/space.gif" width="1" height="1"></div>
				    <div id='parent'>
							<?php 
$_fh4_data = (isset($this->scope["_adminNavigationBar"]) ? $this->scope["_adminNavigationBar"] : null);
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
							<?php if ((isset($this->scope["_item"]["3"]) ? $this->scope["_item"]["3"]:null) == "") {
?>
					        <div class='BarItem' onclick="LoadBarMenu('item<?php echo $this->scope["key"];?>', this, false)" id="Bar<?php echo $this->scope["key"];?>"><img style='vertical-align: middle' src="<?php echo $this->scope["_themePath"];?>images/<?php echo $this->scope["_item"]["1"];?>" border="0">&nbsp;<?php echo $this->scope["_item"]["0"];?></div>
							<?php 
}
else {
?>
					        <div class='BarItem' onclick="javascript:ResetTopMenuToHome(); CollapseBarMenu(); SetActiveBarItem(this); loadViewportData('<?php echo $this->scope["_baseName"];
echo $this->scope["_item"]["3"];?>');"><img style='vertical-align: middle' src="<?php echo $this->scope["_themePath"];?>images/<?php echo $this->scope["_item"]["1"];?>" border="0">&nbsp;<?php echo $this->scope["_item"]["0"];?></div>
							<?php 
}?>

							<div class='BarOptions' id='item<?php echo $this->scope["key"];?>'>
								<?php 
$_fh3_data = (isset($this->scope["_item"]["5"]) ? $this->scope["_item"]["5"]:null);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['itemkey']=>$this->scope['_baritem'])
	{
/* -- foreach start output */
?>
								<a class="remoteload" href="javascript: void(0);" onclick="javascript: ResetTopMenuToHome(); loadViewportData('<?php echo $this->scope["_baseName"];
echo $this->scope["_baritem"]["1"];?>');"><div class='BarOption' onclick="resetTopMenu(); SetActiveBarOption(this); "><div class="BarOptionPad"><?php echo $this->scope["_baritem"]["0"];?></div></div></a>
								<?php 
/* -- foreach end output */
	}
}?>

							</div>

							<?php 
/* -- foreach end output */
	}
}?>

					</div>
					</div></div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>