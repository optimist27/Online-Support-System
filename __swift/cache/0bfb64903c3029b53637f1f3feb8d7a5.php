<?php
ob_start(); /* template body */ ?></div>
				</div>
			</div>
			<?php echo $this->scope["_footerScript"];?>

			<?php if ((isset($this->scope["_displayChatPostContainer"]) ? $this->scope["_displayChatPostContainer"] : null) == true) {
?>
			<div id="chatpostcontainer">
				<form name="chatpostform" method="post" action="index.php" target="_top" onSubmit="return ProcessLiveChatSubmit();">
				<div id="chatcontrolregion">
					<div id="chatpostmsgwrap"><textarea name="msg" id="chatpostmsg" onKeyPress="return HandlePostEnter(event);" onKeyUp="return HandlePostKeyUp(event);" disabled="disabled"></textarea></div>
					<input id="chatpostbutton" type="submit" name="Submit" value="<?php echo $this->scope["_language"]["send"];?>"></input>
				</div>

				</form>
			</div>
			<?php 
}?>

			<div id="bottomfooter"><a href="http://www.kayako.com" class="bottomfooterlink" target="_blank"><?php echo $this->scope["_poweredByNotice"];?></a></div>
		</div>
		<script type='text/javascript'>
QueryLoader.init();
</script>
	</body>

</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>