<?php
ob_start(); /* template body */ ?><div style="FLOAT: left; WIDTH: 500px; BACKGROUND: #FFFFFF url(<?php echo $this->scope["_themePath"];?>images/mainbackground.gif) REPEAT; BORDER: SOLID 1px #bcb5a6;">
<div style="BACKGROUND: #FFFFFF url(<?php echo $this->scope["_themePath"];?>images/icon_proactiveuserbackground.gif) NO-REPEAT bottom left; BORDER: SOLID 1px #bcb5a6; MARGIN: 8px;">
<div style="TEXT-ALIGN: center;"><img src="<?php echo $this->scope["_headerImageSC"];?>" border="0" align="absmiddle" /></div>
<HR align="center" style="WIDTH: 80%; BORDER: none; COLOR: #bcb5a6; BACKGROUND-COLOR: #bcb5a6; HEIGHT: 1px; MARGIN-TOP: 10px; MARGIN-BOTTOM: 3px;" />
<div style="PADDING-LEFT: 120px; TEXT-ALIGN: left; MARGIN-TOP: 30px; HEIGHT: 80px; FONT: 45px Trebuchet MS, Georgia, Verdana, Arial, Helvetica; COLOR: #333333;">
<?php echo $this->scope["_language"]["proactivetitle"];?>

</div>
<div style="PADDING-LEFT: 120px; VERTICAL-ALIGN: top; MARGIN-TOP: 0px; PADDING-TOP: 0px; HEIGHT: 200px; FONT: 18pt Trebuchet MS, Georgia, Verdana, Arial, Helvetica; COLOR: #776849;">
<?php echo $this->scope["_language"]["proactivemsg"];?><br />
<div style="PADDING-TOP: 30px; PADDING-LEFT: 80px; TEXT-ALIGN: center;"><div style="BORDER: SOLID 0 #FFFFFF; TEXT-ALIGN: center; BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/proactivebutton.gif) no-repeat; HEIGHT: 37px; WIDTH: 135px; COLOR: #000000; FONT-WEIGHT: bold; FONT-FAMILY: Trebuchet MS, Georgia, Helvetica, Verdana, Tahoma; FONT-SIZE: 16px; MARGIN: 0px; PADDING-TOP: 6px; PADDING-BOTTOM: 15px; VERTICAL-ALIGN: middle; CURSOR: pointer;" onmouseover="this.style.color='red';" onmouseout="this.style.color='#000000'" onclick="javascript:doProactiveRequest_<?php echo $this->scope["_randomSuffix"];?>();"><?php echo $this->scope["_language"]["proactivechatnow"];?></div></div>
</div>
</div>
</div><div style="FLOAT: left; MARGIN-LEFT: -8px; MARGIN-TOP: -8px;"><a href="javascript:closeProactiveRequest_<?php echo $this->scope["_randomSuffix"];?>();"><img src="<?php echo $this->scope["_themePath"];?>images/icon_close.png" border="0" align="absmiddle" /></a></div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>