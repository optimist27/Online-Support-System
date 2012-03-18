<?php
ob_start(); /* template body */ ?></div>
      <div id="bottomfooter" class="bottomfooterpadding"><?php echo $this->scope["_defaultFooter"];?></div>
    </div>

  </div>
  </body>

</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>