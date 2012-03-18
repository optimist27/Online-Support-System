<{foreach key=_widgetHolderID item=_widgetHolder from=$_widgetContainer}>
<div class="container">
<div class="row">
	<{foreach key=_widgetID item=_widget from=$_widgetHolder[widgets]}>
	<div class="threecol<{if $_widget[islast] == true}> last<{/if}>">
		<div class="widget<{$_widget[class]}>">
		<div class="title"><{$_widget[title]}></div>
		<div class="border"></div>
		<{$_widget[contents]}>
		</div>
	</div>

	<{/foreach}>
</div>
</div>
<{/foreach}>