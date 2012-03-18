<{include file="header.tpl"}>
  <body style="background-image: none;" onload="javascript: window.print();">
	<div class="reheaderbar">
	<div class="rebarlogo">
	<img src="<{$_headerImageCP}>" border="0" />
	</div>
	</div>

	<div id="printcontent">
		<b><{$_language[ch_chatid]}></b> <{$_chatID}><BR />
		<b><{$_language[ch_department]}></b> <{$_chatDepartment}><BR />
		<b><{$_language[ch_userfullname]}></b> <{$_chatFullName}><BR />
		<b><{$_language[ch_useremail]}></b> <{$_chatEmail}><BR />
		<b><{$_language[ch_subject]}></b> <{$_chatSubject}><BR />
		<b><{$_language[ch_staff]}></b> <{$_chatStaff}><BR />
		<HR class="chatprinthr" />
		<{foreach key=key item=_item from=$_chatConversation}>
		<{if $_settings[livechat_timestamps] == true}><{$_item[timestamp]}> <{/if}><font color="<{if $_item[msgtype] == 'client'}>blue<{elseif $_item[msgtype] == 'staff'}>red<{else}>green<{/if}>"><{if $_item[msgtype] == 'system'}><b><{$_item[message]}></b></font><{else}><{$_item[name]}>:</font> <{$_item[message]}><{/if}><BR />
		<{/foreach}>
		<HR class="chatprinthr" />
		<{$_language[ch_supportcenter]}> <{$_swiftPath}><BR />
	</div>
</body>
</html>