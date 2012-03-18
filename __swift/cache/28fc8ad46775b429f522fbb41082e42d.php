<?php
ob_start(); /* template body */ ?><a href="javascript:startChat_<?php echo $this->scope["_randomSuffix"];?>('0');" onMouseOver="window.status='<?php echo $this->scope["_staffStatusText"];?>'; return true;" onMouseOut="window.status=''; return true;"><img src="<?php if ((isset($this->scope["_customImage"]) ? $this->scope["_customImage"] : null) != false) {

echo $this->scope["_customImage"];

}
else {

echo $this->scope["_themePath"];?>images/<?php if ((isset($this->scope["_staffStatus"]) ? $this->scope["_staffStatus"] : null) == "online") {
?>staff<?php echo $this->scope["_promptPhone"];?>online.png<?php 
}
elseif ((isset($this->scope["_staffStatus"]) ? $this->scope["_staffStatus"] : null) == "away") {
?>staff<?php echo $this->scope["_promptPhone"];?>away.png<?php 
}
elseif ((isset($this->scope["_staffStatus"]) ? $this->scope["_staffStatus"] : null) == "back") {
?>staffbackin5.png<?php 
}
else {
?>staff<?php echo $this->scope["_promptPhone"];?>offline.png<?php 
}

}?>" border="0" alt="<?php echo $this->scope["_staffStatusText"];?>" title="<?php echo $this->scope["_staffStatusText"];?>"></a><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>