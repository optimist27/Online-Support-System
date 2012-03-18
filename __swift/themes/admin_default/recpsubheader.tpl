  <tr height="4">
    <td><img src="<{$themepath}>space.gif" width="1" height="4"></td>
  </tr>
  <tr height="1">
    <td bgcolor="#C6C3C6"><img src="<{$themepath}>space.gif" width="1" height="1"></td>
  </tr>
  <tr height="4">
    <td bgcolor="#F0F0F0"><img src="<{$themepath}>space.gif" width="1" height="4"></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
		<{foreach key=key value=item from=$menu}>
		<td <{if $cpmenu eq "hover"}>onMouseOver<{else}>onClick<{/if}>="javascript:switchTab(<{$key}>, <{$item[3]}>);"><table width="<{$item[1]}>"  border="0" cellspacing="0" cellpadding="0">
          <tr height="21">
			<{if $key neq "1"}>
            <td bgcolor="#414142" width="1"><img src="<{$themepath}>space.gif" width="1" height="1"></td>
            <td width="1" bgcolor="#A5A2A5"><img src="<{$themepath}>space.gif" width="1" height="21"></td>
			<{/if}>

            <td id="tb_menusection<{$key}>" align="center" class="<{if $selectedmenu eq $key}>menusection<{$item[3]}><{elseif $session[iswinapp] == 1}>remenusectionwinapp<{else}>remenusectiondefault<{/if}>"><span><{$item[0]}></span></td>
          </tr>
        </table></td>
		<{/foreach}>

        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#414142" width="1"><img src="<{$themepath}>space.gif" width="1" height="1"></td>
            <td width="1" bgcolor="#A5A2A5"><img src="<{$themepath}>space.gif" width="1" height="21"></td>
            <td bgcolor="#727172">&nbsp;</td>
          </tr>
        </table></td>
        <td width="100%" bgcolor="#727172"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#727172"><img src="<{$themepath}>space.gif" width="1" height="21"></td>
          </tr>
        </table></td>
      </tr>

      <tr id="tb_menuline" class="menuline<{$selectedmenuclass}>" height="1">
        <td colspan="<{$menucolspan}>"><img src="<{$themepath}>space.gif" width="1" height="5"></td>
      </tr>

	  <tr id="tb_menulinks" align="left" class="menulinks<{$selectedmenuclass}>" valign="middle">
        <td colspan="<{$menucolspan}>"> <table width="100%"  border="0" cellspacing="0" cellpadding="0" height="5" height="100%">
          <tr valign="middle">
            <td width="94%" valign="middle"><div id="linksdiv" class="menulinks<{$selectedmenuclass}>" style="padding-left:5px;padding-top:5px;padding-bottom:5px;width:100%;height:13px;"><script language="Javascript">document.write(menulinks[<{$selectedmenu}>]);</script></div></td>
            <td width="6%"><img src="<{$themepath}>space.gif" width="1"></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>

  <tr height="1">
    <td bgcolor="#C6C3C6" colspan="6" id="popupRef"><img src="<{$themepath}>space.gif" width="1" height="1"></td>
  </tr>