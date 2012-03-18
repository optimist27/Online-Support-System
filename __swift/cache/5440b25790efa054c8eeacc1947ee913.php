<?php
ob_start(); /* template body */ ?></div>
<?php echo $this->scope["_footerButtonHTML"];?>

</div>
</td>
<td align="left" valign="top" class="maintableright"><img src="../__swift/themes/setup/images/space.gif" height="1" width="8" alt="" /></td>
</tr>
</table>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="maintable footercontainer">
<tr>
<td valign="bottom" align="center" class="footertext">
<hr class="contenthr" />
<?php echo $this->scope["_poweredByNotice"];?> v<?php echo $this->scope["_version"];?><br />
<?php echo $this->scope["_copyright"];?>

</td></tr>
</table>
</form>
<?php if ((isset($this->scope["_isAJAX"]) ? $this->scope["_isAJAX"] : null) != true) {
?>
</div>


	</div>
	</div>
</div>
</body>
</html>
<?php 
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>