<{include file="header.tpl"}>
  <body style="background-image: none;" onload="javascript: window.print();">
	<div class="reheaderbar">
	<div class="rebarlogo">
	<img src="<{$_headerImageCP}>" border="0" />
	</div>
	</div>

	<div id="printcontent">
		<b><{$_language[r_title]}></b> <{$_reportTitle}><BR />
		<b><{$_language[r_date]}></b> <{$_reportDate}><BR />
		<HR class="chatprinthr" />
		<{$_reportContents}>
	</div>
</body>
</html>