<?php
ob_start(); /* template body */ ;
echo call_user_func(array('SWIFT_TemplateEngine', 'RenderTemplate'), "chatheader");?>

<div id="chatcontentcontainer">
</div>

<div id="chatstatuswrapper">
<div id="chatstatusbar" class="chatstatusbarhidden">
</div>
</div>


<?php echo call_user_func(array('SWIFT_TemplateEngine', 'RenderTemplate'), "chatfooter");
 /* end template body */
return $this->buffer . ob_get_clean();
?>