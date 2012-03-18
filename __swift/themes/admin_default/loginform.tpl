<{include file="header.tpl"}>
<body>
<div class="loginformcontainer">
<center>
<script language="Javascript" type="text/javascript">
$(function(){
	$('#username').focus();
	$('#newpassword').pstrength();
	$('#newpasswordagain').pstrength();
});
</script>
<form name="loginform" action="<{$_baseName}>/Core/Default/Login" method="post">
<table width="340" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td colspan="2" align="center" valign="top"><img src="<{$_themePath}>images/<{$_product}>.gif" /><br/><br/></td>
  </tr>
  <tr>
    <td width="30" align="left" valign="top"><span class="smalltext">&nbsp;</span></td>
    <td align="right" valign="top"><span class="smalltext"><{$_currentDate}></span></td>
  </tr>
  <tr>
    <td colspan="2">
	<div class="loginformparent">
	<div class="loginformsub">

	<table width="100%"  border="0" cellspacing="0" cellpadding="3">
	<tr><td>

	<table width="100%"  border="0" cellspacing="0" cellpadding="3">
				<tr class="gridrow1">
					<td width="37%" align="left" valign="top" class="smalltext"><{$_language[username]}>:</td>
					<td width="63%" align="left" valign="top"><input type="text" name="username" id="username" class="logintext" value="<{$_userName}>" size="25" /></td>
				</tr>
				<tr class="gridrow2">
					<td align="left" valign="top" class="smalltext"><{$_language[password]}>:</td>
					<td align="left" valign="top"><input type="password" name="password" id="password" class="loginpassword" value="<{$_password}>" size="25" /></td>
				</tr>
				<{if $_errorString != ""}>
				<tr class="rowerror" title="" onmouseover="" onmouseout="" onclick="">
				<td align="center" colspan="2"><{$_errorString}>
				</td>
				</tr>
				<{/if}>
				<{if $_passwordExpired == true}>
				<tr class="gridrow1">
					<td align="left" valign="top" class="smalltext"><{$_language[newpassword]}>:</td>
					<td align="left" valign="top"><input type="password" name="newpassword" id="newpassword" class="loginpassword" size="25" /></td>
				</tr>
				<tr class="gridrow2">
					<td align="left" valign="top" class="smalltext"><{$_language[passwordagain]}>:</td>
					<td align="left" valign="top"><input type="password" name="newpasswordagain" id="newpasswordagain" class="loginpassword" size="25" /></td>
				</tr>
				<tr class="gridrow1">
					<td align="left" valign="top" colspan="2"><{$_passwordExpiredMessage}></td>
				</tr>
				<{/if}>
			</table>

	</td></tr></table>

	<table width="100%"  border="0" cellspacing="0" cellpadding="6">
	<tr><td colspan="2">
	<div class="loginrule">&nbsp;</div>
	</td></tr>

	<tr><td width="100" align="left"><input type="button" name="cancel" class="rebutton" onmouseover="this.className='rebuttongreen';" onmouseout="this.className='rebutton';" value="<{$_language[options]}>" onclick="javascript:toggleLoginOptions();" onfocus="blur();" /></td><td align="right"><input type="submit" name="submitbutton" class="rebutton" onmouseover="this.className='rebuttonblue';" onmouseout="this.className='rebutton';" value="<{$_language[login]}>" onfocus="blur();" /></td></tr>
	</table>

	</div>
	</div>

	<div class="loginoptions" style=" DISPLAY: <{if $displayloginoptions == '1'}>block<{else}>none<{/if}>;" id="loginoptions">

	<table width="100%" border="0" cellspacing="0" cellpadding="3">
	<tr><td align='left' valign='top'>

	<table width="100%" border="0" cellspacing="0" cellpadding="3" class="smalltext">
              <tr class="gridrow1">
                <td width="37%" align="left" valign="top"><{$_language[rememberme]}>:</td>
                <td width="63%" align="left" valign="top"><label for="rememberyes"><input type="radio" name="remember" class="swiftradio" id="rememberyes" value="1"<{if $_rememberMeCheckbox == true}> checked<{/if}> /> <{$_language[yes]}></label> &nbsp;<label for="rememberno"><input style="margin-left: 4px;" type="radio" name="remember" id="rememberno" value="0"<{if $_rememberMeCheckbox == false}> checked<{/if}> /> <{$_language[no]}></label></td>
              </tr>
              <tr class="gridrow2">
                <td width="37%" align="left" valign="top"><{$_language[language]}>:</td>
                <td width="63%" align="left" valign="top"><select name="languagecode" class="swiftselect">
				<{foreach key=_key item=_item from=$_languageList}>
				<option value="<{$_item[0]}>" <{if $_item[2] == true}> selected<{/if}>><{$_item[1]}></option>
				<{/foreach}>
				</select>
				</td>
              </tr>
			</table>

	</td></tr></table>

	</div>

	</td>
  </tr>


</table>














<input type="hidden" name="_ca" value="login"/>
<input type="hidden" name="_redirectAction" value="<{$_redirectAction}>"/>
</form>

<br /><div class="smalltext"><{$_poweredByNotice}><br /><{$_copyright}></div><br />
</center>
</div>
<script type='text/javascript'>
QueryLoader.init();
</script>

</body>
</html>