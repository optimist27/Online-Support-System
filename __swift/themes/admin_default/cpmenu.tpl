var menulinks = new Array();

<{foreach key=key item=_item from=$_menuLinks}>
menulinks[<{$key}>] = new Array();

	<{foreach key=linkkey item=_linkitem from=$_item}>
	menulinks[<{$key}>][<{$linkkey}>] = "<a <{if $_linkitem[20] != ''}>id=\"<{$_linkitem[20]}>\" <{/if}>href=\"javascript: void(0);\" onclick=\"<{if $_linkitem[14] neq ""}><{$_linkitem[14]}><{else}>javascript: CollapseBarMenu(); loadViewportData('<{$_linkitem[1]}>', false, true);<{/if}>\" class=\"remoteloadmenu\"><div onclick=\"ActivateMenuItem(this); this.blur();\" class=\"topnavmenuitem<{if $_linkitem[25] == '1'}> topnavmenuitemdynamic<{/if}>\" alt='<{$_linkitem[0]}>' id='linkmenu<{$key}>_<{$linkkey}>'><{if $_linkitem[12] eq true}><span id=\"itemspanleft\">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<{/if}><{$_linkitem[0]}><{if $_linkitem[15] == true}>&nbsp;<img src='<{$_themePath}>images/menudrop.gif' border='0' /><{/if}>&nbsp;&nbsp;&nbsp;&nbsp; <{if $_linkitem[13] eq true}><span id=\"itemspanright\">&nbsp;</span><{/if}></div></a>";
	<{/foreach}>
<{/foreach}>