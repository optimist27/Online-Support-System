<?php
ob_start(); /* template body */ ;
echo $this->scope["_notificationContentsText"];?>


------------------------------------------------------
<?php echo $this->scope["_language"]["notificationstaffcp"];?> <?php echo $this->scope["_swiftPath"];?>staff<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>