<?php
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<body onLoad="javascript: window.location.href = '<?php echo $this->scope["_redirectURL"];?>';"><center><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<script language="Javascript" type="text/javascript">
$(function(){
setTimeout(function() { window.location = '<?php echo $this->scope["_redirectURL"];?>'; }, 2000);
});
</script>
<table width="300" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td colspan="2">
	<div class="uiredirectcontainer">
	<div class="uiredirectinner">

	<table width="100%"  border="0" cellspacing="0" cellpadding="3">
	<tr><td>

	<table width="100%"  border="0" cellspacing="0" cellpadding="3">
              <tr>
                <td width="100%" align="center" valign="top" class="smalltext"><?php echo $this->scope["_language"]["redirectloading"];?></td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
			</table>

	</td></tr></table>

	<table width="100%"  border="0" cellspacing="0" cellpadding="6">
	<tr><td colspan="2" align="center">
	<img src="<?php echo $this->scope["_themePath"];?>images/barloading<?php echo $this->scope["_defaultSkinSuffix"];?>.gif" border="0" align="absmiddle" />
	</td></tr>

	<tr><td width="100" align="left">&nbsp;</td></tr>
	</table>

	</div>
	</div>
	</td>
  </tr>


</table>

</center>
</body></html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>