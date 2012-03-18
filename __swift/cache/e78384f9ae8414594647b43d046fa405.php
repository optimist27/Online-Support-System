<?php
ob_start(); /* template body */ ;
echo $this->scope["_contentsText"];?>

------------------------------------------------------
<?php echo $this->scope["_language"]["supportcenterfield"];?> <?php echo $this->scope["_basePath"];
echo $this->scope["_templateGroupPrefix"];
 /* end template body */
return $this->buffer . ob_get_clean();
?>