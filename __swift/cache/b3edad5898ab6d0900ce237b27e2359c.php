<?php
ob_start(); /* template body */ ?><div id="corewidgetbox"><div class="widgetrow"><?php 
$_fh7_data = (isset($this->scope["_widgetContainer"]) ? $this->scope["_widgetContainer"] : null);
if ($this->isArray($_fh7_data) === true)
{
	foreach ($_fh7_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */

if ((isset($this->scope["_item"]["displayinindex"]) ? $this->scope["_item"]["displayinindex"]:null) == '1') {
?><span onclick="javascript: window.location.href='<?php echo $this->scope["_item"]["widgetlink"];?>';"><a href="<?php echo $this->scope["_item"]["widgetlink"];?>" class="widgetrowitem defaultwidget" style="<?php if ((isset($this->scope["_item"]["defaulticon"]) ? $this->scope["_item"]["defaulticon"]:null) != '') {
?>background-image: url(<?php echo $this->scope["_item"]["defaulticon"];?>);<?php 
}?>"><span class="widgetitemtitle"><?php echo $this->scope["_item"]["defaulttitle"];?></span></a></span><?php 
}

/* -- foreach end output */
	}
}?></div></div>
			<?php if ((isset($this->scope["_showIndexNews"]) ? $this->scope["_showIndexNews"] : null) == true) {
?>
			<div class="boxcontainer">
			<div class="boxcontainerlabel"><?php if ((isset($this->scope["_settings"]["nw_enablerss"]) ? $this->scope["_settings"]["nw_enablerss"]:null) == '1') {
?><div style="float: right;"><a href="<?php echo $this->scope["_swiftPath"];?>rss/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/News/Feed" title="<?php echo $this->scope["_language"]["rssfeed"];?>" target="_blank"><img src="<?php echo $this->scope["_themePath"];?>images/icon_rss.png" align="absmiddle" alt="<?php echo $this->scope["_language"]["rssfeed"];?>" border="0" /></a></div><?php 
}
echo $this->scope["_language"]["latestupdates"];?></div>

			<div class="boxcontainercontent">
				<?php if ((isset($this->scope["_newsCount"]) ? $this->scope["_newsCount"] : null) > 0) {
?>
				<table cellpadding="0" cellspacing="0" border="0">
				<?php 
$_fh8_data = (isset($this->scope["_newsContainer"]) ? $this->scope["_newsContainer"] : null);
if ($this->isArray($_fh8_data) === true)
{
	foreach ($_fh8_data as $this->scope['newsitemid']=>$this->scope['_newsItem'])
	{
/* -- foreach start output */
?>
					<tr>
						<td width="60" align="left" valign="top">
							<div class="datecontainerparent">
							<div class="monthholder"><div class="monthsub"><?php echo $this->scope["_newsItem"]["parsedmonth"];?></div></div>
							<div class="dateholder"><div class="datecontainer"><?php echo $this->scope["_newsItem"]["parseddate"];?></div></div>
							</div>
						</td>

						<td width="100%" valign="top">
							<div class="newsavatar"><img src="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Base/StaffProfile/DisplayAvatar/<?php echo $this->scope["_newsItem"]["staffid"];?>/<?php echo $this->scope["_newsItem"]["emailhash"];?>/60" align="absmiddle" border="0" /></div>
							<div class="newstitle"><a class="newstitlelink" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/News/NewsItem/View/<?php echo $this->scope["_newsItem"]["newsitemid"];?>/<?php echo $this->scope["_newsItem"]["urlextension"];?>" title="<?php echo $this->scope["_newsItem"]["subject"];?>"><?php echo $this->scope["_newsItem"]["subject"];?></a>
							<div class="newsinfo"><?php echo $this->scope["_language"]["postedby"];?> <?php echo $this->scope["_newsItem"]["author"];?> <?php echo $this->scope["_language"]["on"];?> <?php echo $this->scope["_newsItem"]["date"];?></div>
					</tr>
					<tr><td colspan="2" class="newscontents">
						<?php echo $this->scope["_newsItem"]["contents"];?>

						<br />
						<a class="newsreadmorelink" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/News/NewsItem/View/<?php echo $this->scope["_newsItem"]["newsitemid"];?>/<?php echo $this->scope["_newsItem"]["urlextension"];?>" title="<?php echo $this->scope["_newsItem"]["subject"];?>"><?php echo $this->scope["_language"]["readmore"];?></a>
					</td></tr>
					<tr>
					<td colspan="2"><hr class="newshr" /><br /><br /></td>
					</tr>
				<?php 
/* -- foreach end output */
	}
}?>

				</table>
				<br />
				<div class="newsfooter">
				<a class="newsreadmorelink" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/News/List"><?php echo $this->scope["_language"]["viewallnews"];?></a>
				</div>
				<?php 
}?>

				<?php if ((isset($this->scope["_newsCount"]) ? $this->scope["_newsCount"] : null) == 0) {
?>
				<div class="infotextcontainer">
				<?php echo $this->scope["_language"]["noinfoinview"];?>

				</div>
				<?php 
}?>

			</div>
			</div>
			<?php 
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>