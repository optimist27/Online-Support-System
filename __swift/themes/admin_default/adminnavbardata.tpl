					<div class="renavsectionadmin"><div class="navsub">
					<div class="navtitle"><img src="<{$_themePath}>images/doublearrowsnav.gif" align="absmiddle" border="0" />&nbsp;<{$_language[options]}></div>
				<div style="height: 1px;"><img src="<{$_themePath}>images/space.gif" width="1" height="1"></div>
				    <div id='parent'>
							<{foreach key=key item=_item from=$_adminNavigationBar}>
							<{if $_item[3] == ""}>
					        <div class='BarItem' onclick="LoadBarMenu('item<{$key}>', this, false)" id="Bar<{$key}>"><img style='vertical-align: middle' src="<{$_themePath}>images/<{$_item[1]}>" border="0">&nbsp;<{$_item[0]}></div>
							<{else}>
					        <div class='BarItem' onclick="javascript:ResetTopMenuToHome(); CollapseBarMenu(); SetActiveBarItem(this); loadViewportData('<{$_baseName}><{$_item[3]}>');"><img style='vertical-align: middle' src="<{$_themePath}>images/<{$_item[1]}>" border="0">&nbsp;<{$_item[0]}></div>
							<{/if}>
							<div class='BarOptions' id='item<{$key}>'>
								<{foreach key=itemkey item=_baritem from=$_item[5]}>
								<a class="remoteload" href="javascript: void(0);" onclick="javascript: ResetTopMenuToHome(); loadViewportData('<{$_baseName}><{$_baritem[1]}>');"><div class='BarOption' onclick="resetTopMenu(); SetActiveBarOption(this); "><div class="BarOptionPad"><{$_baritem[0]}></div></div></a>
								<{/foreach}>
							</div>

							<{/foreach}>
					</div>
					</div></div>
