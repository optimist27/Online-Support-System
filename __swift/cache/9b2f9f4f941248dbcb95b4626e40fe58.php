<?php
ob_start(); /* template body */ ?><font face="Candara, Verdana, Arial, Helvetica" size="3"><?php echo $this->scope["_contentsHTML"];?><br />
<HR style="margin-bottom: 6px; height: 1px; BORDER: none; color: #cfcfcf; background-color: #cfcfcf;" />
<?php echo $this->scope["_language"]["supportcenterfield"];?> <?php echo $this->scope["_basePath"];
echo $this->scope["_templateGroupPrefix"];?><br />
</font><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>