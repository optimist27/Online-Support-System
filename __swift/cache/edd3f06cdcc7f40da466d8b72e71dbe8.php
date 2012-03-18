<?php
ob_start(); /* template body */ ?><div style="FLOAT: left; WIDTH: <?php echo $this->scope["_inlineChatDivWidth"];?>px; BACKGROUND: #FFFFFF; BORDER: SOLID 1px #bcb5a6;">
<iframe width="<?php echo $this->scope["_settings"]["livesupport_chatwidth"];?>" height="<?php echo $this->scope["_settings"]["livesupport_chatheight"];?>" scrolling="auto" frameborder="0" src="" name="inlinechatframe" id="inlinechatframe">ERROR: No IFRAME Support Detected</iframe>
</div><div style="FLOAT: left; MARGIN-LEFT: -8px; MARGIN-TOP: -8px;"><a href="javascript: closeInlineProactiveRequest_<?php echo $this->scope["_randomSuffix"];?>();"><img src="<?php echo $this->scope["_themePath"];?>images/icon_close.png" border="0" align="absmiddle" /></a></div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>