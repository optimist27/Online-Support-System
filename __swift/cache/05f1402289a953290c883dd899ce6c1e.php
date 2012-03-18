<?php
ob_start(); /* template body */ ?>/*
* Begin Reports CSS
*/
.reportstablecontainer {
	BORDER: 3px SOLID #e1e1e1;
}

.reportstable {
	BORDER: 1px SOLID #a1a1a1;
	FONT-FAMILY: 'Lucida Console', Monaco, 'Courier New', Courier, serif;
	FONT-SIZE: 12px;
}

.reportstable td {
	PADDING: 6px;
	BACKGROUND: #ffffff;
}

.reporttdtitle, .reporttdytitle {
	BACKGROUND: #f7f6f6 !important;
	BORDER-BOTTOM: 1px SOLID #a1a1a1;
	TEXT-SHADOW: 0 1px 0 rgba(255, 255, 255, 0.8);
	FONT-SIZE: 14px;
}

.reporttdytitle {
	BACKGROUND: #fdfcfc !important;
	BORDER-RIGHT: 1px SOLID #a1a1a1;
}

.reportsheading {
	FONT-SIZE: 14px;
	MARGIN: 0px 0px 10px 0px;
	COLOR: #4a4949;
}

.reportsline {
	BORDER: 0px;
	HEIGHT: 1px;
	BACKGROUND: #a1a1a1;
}

.reporthistorycontainer {
	PADDING-BOTTOM: 12px;
}

.reporthistorycontentsborder {
	PADDING: 3px;
	BACKGROUND: #ecebeb;
}

.reporthistorycontents {
	BORDER: 1px SOLID #a1a1a1;
	BACKGROUND: #FFFFFF;
	PADDING: 12px;
}

.reporthistorycontents .title {
	COLOR: #006699;
	FONT-SIZE: 14px;
}

.reporthistorycontents .avatarcontainer {
	BORDER: 1px SOLID #8b8f90;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
	PADDING: 5px 7px 5px 6px;
	-MOZ-BOX-SHADOW: 2px 2px 2px #f3f3f3;
	-WEBKIT-BOX-SHADOW: 2px 2px 2px #f3f3f3;
	BOX-SHADOW: 2px 2px 2px #f3f3f3;
	WIDTH: 50px;
	FLOAT: left;
	BACKGROUND: #ffffff;
}

.reporthistorycontents .avatar {
	BORDER: 1px SOLID #f0f0f1;
	PADDING: 0;
	MARGIN: 0;
}

.reporthistorycontents .basetitle {
	MARGIN-LEFT: 75px;
}


.reporthistorycontents .date {
	COLOR: #333333;
	FONT-SIZE: 11px;
}

.reporthistorycontents .code {
	COLOR: #333333;
	BACKGROUND: #eff3f6;
	FONT-FAMILY: 'Lucida Console', Monaco, 'Courier New', Courier, serif;
	FONT-SIZE: 12px;
	BORDER: 1px DASHED #d3d8db;
	PADDING: 4px;
	MARGIN-TOP: 6px;
}

.reportdesccontainer {
	PADDING-BOTTOM: 8px;
	OVERFLOW: auto;
	POSITION: relative;
}

.reportdescpointer {
	WIDTH: 19px;
	HEIGHT: 10px;
	POSITION: absolute;
	LEFT: 40px;
	TOP: 4px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/reportdescpointer.gif);
}

.reportdesccontentsborder {
	MARGIN-TOP: 10px;
	PADDING: 3px;
	BACKGROUND: #e1e1e1;
}

.reportdesccontents {
	BORDER: 1px SOLID #a1a1a1;
	BACKGROUND: #FFFFFF;
	PADDING: 8px;
}

.reportdesccontents .title {
	COLOR: #006699;
	FONT-SIZE: 14px;
}

.reportdesccontents .text {
	COLOR: #333333;
	FONT-SIZE: 12px;
}

.reportdesccontents .code {
	COLOR: #333333;
	BACKGROUND: #eff3f6;
	FONT-FAMILY: 'Lucida Console', Monaco, 'Courier New', Courier, serif;
	FONT-SIZE: 12px;
	BORDER: 1px DASHED #d3d8db;
	PADDING: 4px;
}

/*
* End Reports CSS
*/



/*
* Begin Troubleshooter CSS
*/

.troubleshootercategory {
	PADDING: 4px;
}

.troubleshootercategorycontainer {
	BORDER: 1px SOLID WHITE;
	CURSOR: pointer;
}

.troubleshootercategorycontainer:hover {
	BACKGROUND: #ffefbb;
	BORDER-COLOR: #efe8da;
	CURSOR: pointer;
}

.troubleshootercategorytitle {
	BACKGROUND: url("<?php echo $this->scope["_themePath"];?>images/icon_folderyellow3.gif") no-repeat 0 2px;
	PADDING: 2px 0 4px 20px;
}

.troubleshootercategorydesc {
	PADDING-BOTTOM: 4px;
}

.troubleshootercategoryfooter {
	MARGIN-BOTTOM: 18px;
	PADDING-BOTTOM: 2px;
	BORDER-BOTTOM: 1px DASHED #CCCCCC;
}

.trsteptitle {
	font-size: 80%;
	PADDING-BOTTOM: 8px;
}

.trsteptitlemain {
 font-family: Calibri, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 28px; font-weight: bold;
}

.trstepcontents {
	font-size: 12px;
}

.trstephr {
	margin-bottom: 16px; height: 1px; BORDER: none; BORDER-TOP: 1px solid #cfcfcf; color: white; background-color: white;
}

.trattachments {
	FONT: Georgia,Arial,sans-serif;
	WIDTH: 100%;
	MARGIN-BOTTOM: 10px;
	PADDING-BOTTOM: 6px;
}

.trattachmentitem {
	PADDING: 4px 0 5px 18px;
	MARGIN: 0 10px 0 0;
	CURSOR: pointer;
	BACKGROUND-REPEAT: no-repeat;
	BACKGROUND-POSITION: 0px 3px;
	DISPLAY: inline;
}

.troubleshooterstepradio {
	BACKGROUND: #fff9d7;
}

.troubleshooterstepsubject {
	BACKGROUND: #f8f8f8;
}

/*
* End Troubleshooter CSS
*/

/* BEGIN KNOWLEDGEBASE STYLES */
.kbcategorynew { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_newfolder_faded.gif) no-repeat; CURSOR: pointer; }
.kbcategorynew:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_newfolder.gif); }

.kbarticlenew { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_newkbarticle_faded.png) no-repeat; CURSOR: pointer; }
.kbarticlenew:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_newkbarticle.png); }

.kbarticlesearch { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_searchkbarticle_faded.png) no-repeat; CURSOR: pointer; }
.kbarticlesearch:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_searchkbarticle.png); }

.kbarticlecontainer {
	padding: 0 10px 16px 38px; border-bottom: 1px SOLID #ececec; margin: 0 0 30px 0; background: url(<?php echo $this->scope["_themePath"];?>images/icon_viewkbarticle.png) no-repeat 0px 1px;
}

.kbarticle {
	color: #277dca; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; font-size: 20px; font-weight: bold;
}

.kbarticletext {
	color: #969696; font-family: Verdana, Arial, Helvetica, Georgia, serif; font-size: 12px;
}

.kbarticlefeatured {
	background-color: #fff4d3; border: 1px SOLID #f2ebde; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; background-position: 4px 6px; padding: 4px 10px 16px 42px;
}

.kbarticlelist {

}

.kbarticlelist .kbarticlelistitem {
	background: url(<?php echo $this->scope["_themePath"];?>images/icon_viewkbarticlesmall.png) no-repeat 0px 1px; min-height: 20px; PADDING: 0px 0 0 20px;
}

.kbarticlecategorylistitem {
	background: url(<?php echo $this->scope["_themePath"];?>images/icon_viewkbarticlesmall.png) no-repeat 0px 1px; PADDING: 0px 0 0 20px; margin-top: 8px; line-height: 1.4em; min-height: 20px;
}

.kbrightstrip {
	margin-right: 12px;
}

.kbcategorytitlecontainer {
	margin: 0 12px 20px 0;
}

.kbcategorytitle {
	color: #333333; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; font-size: 18px; padding: 0 0 4px 20px; border-bottom: 1px SOLID #ececec; font-weight: bold;
	background: url(<?php echo $this->scope["_themePath"];?>images/icon_folderyellow3.gif) no-repeat 0px 4px; cursor: pointer; margin: 0 0 10px 0;
}

.kbcategorytitle:hover {
	color: red !important;
}

.kbcategorytitle:hover > a {
	color: red !important;
}

.kbcategorytitle .kbcategorycount {
	font-size: 14px; margin-left: 4px; color: #989898;
}

.kbtitle {
	font-size: 80%;
}

.kbtitlemain {
 font-family: Calibri, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 28px; font-weight: bold;
}

.kbinfo {
	font-size: 11px; padding-top: 2px; padding-bottom: 14px; color: gray; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif;
}

.kbavatar {
	FLOAT: right; BORDER: 1px SOLID lightgray; PADDING: 3px;
}

.kbcontents {
	font-size: 12px;
}

.kbhr {
	margin-bottom: 16px; height: 1px; BORDER: none; BORDER-TOP: 1px solid #cfcfcf; color: white; background-color: white;
}

.kbrating {
	margin-top: 25px;
}

.kbratinghelpful {
	DISPLAY: inline; margin-right: 40px; CURSOR: pointer;
}

.kbratingnothelpful {
	DISPLAY: inline; margin-right: 40px; CURSOR: pointer;
}

.kbratingstars {
	DISPLAY: inline; FONT-SIZE: 11px; margin-right: 40px;
}

.kbratingstars span {
	PADDING-TOP: 2px;
}

.kbattachments {
	FONT: Georgia,Arial,sans-serif;
	WIDTH: 100%;
	MARGIN-BOTTOM: 10px;
	PADDING-BOTTOM: 6px;
}

.kbattachmentitem {
	PADDING: 4px 0 5px 18px;
	MARGIN: 0 10px 0 0;
	CURSOR: pointer;
	BACKGROUND-REPEAT: no-repeat;
	BACKGROUND-POSITION: 0px 3px;
	DISPLAY: inline;
}

/* END KNOWLEDGEBASE STYLES */

/* BEGIN CUSTOM BASE STYLES */
.hlineheader, .hlineheaderext { margin: 0; padding: 0; white-space: nowrap; color:#333333; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia,serif; text-decoration: none; font-size: 14px; font-weight: none; }
.hlineheaderext { padding: 0 25px 0 0; }
.hlineheader th, .hlineheaderext th { margin: 0; padding: 0 8px 0 0; }
.hlineheader td, .hlineheaderext td { font-size: 50%; margin: 0; padding: 0; }
td.hlinelower { border-top: 1px solid #cfcfcf; width: 100%; }
.viewmore { margin: 6px 0 0 0; background: url(<?php echo $this->scope["_themePath"];?>images/icon_viewmore.png) no-repeat; width: 16px; height: 16px; cursor: pointer; }
.dashboardmsg { FONT-STYLE: italic; }
.dashboardtabdatacontainer, .tabdatacontainer { PADDING: 4px; }
.rebuttonwide2 { border: 0 solid white; background: url(<?php echo $this->scope["_themePath"];?>images/buttonwide2_sprite.png) no-repeat top left; background-position: 0 0; height: 36px; width: 95px; color: #333333; font-family: candara, trebuchet ms, tahoma, verdana, tahoma, sans-serif; font-size: 16px; font-weight: bold; margin: 5px 5px 5px 0; padding: 5px 0 10px 0; vertical-align: middle; cursor: pointer; }
.rebuttonwide2:hover { background-position: 0 -86px; }

.datecontainerparent { WIDTH: 54px; HEIGHT: 88px; }
.monthholder { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/smallcalendartop.gif) no-repeat; DISPLAY: block; TEXT-ALIGN: center; VERTICAL-ALIGN: middle; PADDING: 0px; COLOR: #FFFFFF; FONT: bold 11px Verdana,Arial,Helvetica; WIDTH: 54px; HEIGHT: 22px; text-shadow:0 1px 0 rgba(112, 165, 232, 0.5); }
.monthsub { PADDING-TOP: 4px; }
.dateholder { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/smallcalendarbottom.gif) no-repeat; DISPLAY: block; TEXT-ALIGN: center; VERTICAL-ALIGN: middle; PADDING: 0px; COLOR: #555555; FONT: 10px Verdana,Arial,Helvetica; WIDTH: 54px; HEIGHT: 66px; }
.datesub { PADDING-TOP: 6px; PADDING-BOTTOM: 6px; }
.datecontainer { FONT: 28px Trebuchet MS, Calibri, Verdana, Arial, Helvetica; padding-top: 3px; }
.newshr {
	margin-bottom: 16px; height: 1px; BORDER: none; BORDER-TOP: 1px solid #cfcfcf; color: white; background-color: white;
}

.newstitle {
	font-size: 80%; margin-left: 10px; padding: 3px; padding-top: 0px; margin-top: 0px;
}

.newstitlelink {
	color: #277dca !important; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 28px; font-weight: bold;
}

.newsavatar {
	FLOAT: right; BORDER: 1px SOLID lightgray; PADDING: 3px;
}

.newsreadmorelink {
	color: #277dca !important; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 22px; font-weight: bold;
}

.newsinfo {
	font-size: 11px; padding-top: 2px; padding-bottom: 14px; color: gray;
}

.newscontents {
	font-size: 12px;
}

a img {
	BORDER: 0px;
}

.newsfooter {
	TEXT-ALIGN: center;
}

/* END CUSTOM BASE STYLES */

/*
* Begin Comments CSS
*/

.commentslabel {
	color: #333333; font-family: Calibri, Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 22px; padding-bottom: 6px;
}

.commentchild {
	background: URL("<?php echo $this->scope["_themePath"];?>images/downarrow.gif") no-repeat 0px 22px; padding-left: 18px;
}

.clearfix {
	clear: both;
}

.commentcontentsholder {
	font: 16px Georgia,"Times New Roman",Times,serif; margin-bottom: 20px; PADDING-BOTTOM: 12px; PADDING-TOP: 15px;
}

.commentdatelabel {
	font: 14px Georgia,"Times New Roman",Times,serif; color: #666666;
}

.commentnamelabel {
	font: 16px Georgia,"Times New Roman",Times,serif; color: #333333; margin-bottom: 6px; padding-top: 4px;
}

.commentavatar {
	float: left; width: 80px;
}

.commentdataholder {
	line-height: 16px; margin-left: 20px;
}

.commentdataholderstaff {
	background: #fff1c8; padding: 12px 12px 0 12px; border-radius: 12px; -moz-border-radius: 12px; -webkit-border-radius: 12px;
}

/*
* End Comments CSS
*/

/* Styles for jQuery menu widget
Author:	Maggie Wachs, maggie@filamentgroup.com
Date:		September 2008
*/

/* REQUIRED STYLES - the menus will only render correctly with these rules */

.fg-menu-container { position: relative; top:0; left:-999px; padding: .4em; max-height:400px; min-height:400px; height:auto; overflow: auto; overflow-x: hidden; }
.fg-menu-container.fg-menu-flyout { overflow: visible; }

.fg-menu, .fg-menu ul { list-style-type:none; padding: 0; margin:0; }

.fg-menu { position:relative; }
.fg-menu-flyout .fg-menu { position:static; }

.fg-menu ul { position:absolute; top:0; }
.fg-menu ul ul { top:-1px; }

.fg-menu-container.fg-menu-ipod .fg-menu-content,
.fg-menu-container.fg-menu-ipod .fg-menu-content ul { background: none !important; }

.fg-menu.fg-menu-scroll,
.fg-menu ul.fg-menu-scroll {  }

.fg-menu li { clear:both; float:left; width:100%; margin: 0; padding:0; border: 0; }
.fg-menu li li { font-size:1em; } /* inner li font size must be reset so that they don't blow up */

.fg-menu-flyout ul ul { padding: .4em; }
.fg-menu-flyout li { position:relative; }

.fg-menu-scroll {  }

.fg-menu-breadcrumb { margin: 0; padding: 0; }

.fg-menu-footer {  margin-top: .4em; padding: .4em; }
.fg-menu-header {  margin-bottom: .4em; padding: .4em; }

.fg-menu-breadcrumb li { float: left; list-style: none; margin: 0; padding: 0 .2em; font-size: .9em; opacity: .7; }
.fg-menu-breadcrumb li.fg-menu-prev-list,
.fg-menu-breadcrumb li.fg-menu-current-crumb { clear: left; float: none; opacity: 1; }
.fg-menu-breadcrumb li.fg-menu-current-crumb { padding-top: .2em; }

.fg-menu-breadcrumb a,
.fg-menu-breadcrumb span { float: left; }

.fg-menu-footer a:link,
.fg-menu-footer a:visited { float:left; width:100%; text-decoration: none; }
.fg-menu-footer a:hover,
.fg-menu-footer a:active {  }

.fg-menu-footer a span { float:left; cursor: pointer; }

.fg-menu-breadcrumb .fg-menu-prev-list a:link,
.fg-menu-breadcrumb .fg-menu-prev-list a:visited,
.fg-menu-breadcrumb .fg-menu-prev-list a:hover,
.fg-menu-breadcrumb .fg-menu-prev-list a:active { background-image: none; text-decoration:none; }

.fg-menu-breadcrumb .fg-menu-prev-list a { float: left; padding-right: .4em; }
.fg-menu-breadcrumb .fg-menu-prev-list a .ui-icon { float: left; }

.fg-menu-breadcrumb .fg-menu-current-crumb a:link,
.fg-menu-breadcrumb .fg-menu-current-crumb a:visited,
.fg-menu-breadcrumb .fg-menu-current-crumb a:hover,
.fg-menu-breadcrumb .fg-menu-current-crumb a:active { display:block; background-image:none; font-size:1.3em; text-decoration:none; }



/* REQUIRED LINK STYLES: links are "display:block" by default; if the menu options are split into
	selectable node links and 'next' links, the script floats the node links left and floats the 'next' links to the right	*/

.fg-menu a:link,
.fg-menu a:visited,
.fg-menu a:hover,
.fg-menu a:active { float:left; width:92%; padding:.3em 3%; text-decoration:none; outline: 0 !important; }

.fg-menu a { border: 1px dashed transparent; }

.fg-menu a.ui-state-default:link,
.fg-menu a.ui-state-default:visited,
.fg-menu a.ui-state-default:hover,
.fg-menu a.ui-state-default:active,
.fg-menu a.ui-state-hover:link,
.fg-menu a.ui-state-hover:visited,
.fg-menu a.ui-state-hover:hover,
.fg-menu a.ui-state-hover:active,
 .fg-menu a.ui-state-active:link,
 .fg-menu a.ui-state-active:visited,
 .fg-menu a.ui-state-active:hover,
.fg-menu a.ui-state-active:active { border-style: solid; font-weight: normal; }

.fg-menu a span { display:block; cursor:pointer; }


 /* SUGGESTED STYLES - for use with jQuery UI Themeroller CSS */

.fg-menu-indicator span { float:left; }
.fg-menu-indicator span.ui-icon { float:right; }

.fg-menu-content.ui-widget-content,
.fg-menu-content ul.ui-widget-content { border:0; }


/* ICONS AND DIVIDERS */

.fg-menu.fg-menu-has-icons a:link,
.fg-menu.fg-menu-has-icons a:visited,
.fg-menu.fg-menu-has-icons a:hover,
.fg-menu.fg-menu-has-icons a:active { padding-left:20px; }

.fg-menu .horizontal-divider hr, .fg-menu .horizontal-divider span { padding:0; margin:5px .6em; }
.fg-menu .horizontal-divider hr { border:0; height:1px; }
.fg-menu .horizontal-divider span { font-size:.9em; text-transform: uppercase; padding-left:.2em; }



/*
* BEGIN STAFF CP > TICKETS
*/
.ticketbillinghr { margin-bottom: 6px; height: 1px; BORDER: none; color: #cfcfcf; background-color: #cfcfcf; WIDTH: 99%; }

.ticketpostbox {
	text-decoration: none;
	MARGIN: 0 0 0 30px;
	COLOR: #333333;
	WIDTH: 150px;
}

.ticketpostlockcontainer
{
	BORDER: 1px SOLID #e7bcbc;
	-moz-border-radius: 4px 4px 4px 4px;
	BACKGROUND-COLOR: #ffeef0;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	MARGIN-TOP: 5px;
}

.ticketpostlocktitle
{
	BORDER-BOTTOM: 1px SOLID #e7bcbc;
	PADDING: 4px;
	MARGIN: 4px;
}

.ticketpostlockcontents
{
	PADDING: 6px;
	MARGIN: 4px;
	BACKGROUND: #ffffff;
	FONT-FAMILY: Calibri, Verdana, Tahoma, Helvetica;
	FONT-SIZE: 1.4em;
}

.macrocategorynew { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_newfolder_faded.gif) no-repeat; CURSOR: pointer; }
.macrocategorynew:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_newfolder.gif); }

.macroreplynew { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_newchatballoon_dotted_faded.png) no-repeat; CURSOR: pointer; }
.macroreplynew:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_newchatballoon_dotted.png); }

.macroreplysearch { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_searchchatballoon_dotted_faded.png) no-repeat; CURSOR: pointer; }
.macroreplysearch:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_searchchatballoon_dotted.png); }

.ticketattachmentitem, .attachmentitem { padding: 4px; }
.ticketattachmentitemdelete, .attachmentitemdelete { margin-right: 4px; width: 18px; display: inline-block; background: url("<?php echo $this->scope["_themePath"];?>images/icon_delete.gif") no-repeat 0px 1px; height: 18px; cursor: pointer; }

.ticketinfoitem, .ticketinfoitemtext, .navinfoitem, .navinfoitemtext, .ticketpostinfoitem, .ticketpostinfoitemtext {
	PADDING: 5px 0px 0px 5px;
	BORDER-BOTTOM: #F0EADE 1px SOLID;
	BACKGROUND-COLOR: #FFFFFF;
	COLOR: #313131;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
}

.ticketinfoitemtext, .navinfoitemtext, .ticketpostinfoitemtext {
	CURSOR: default;
}

.ticketinfoitemtitle, .navinfoitemtitle, .ticketpostinfoitemtitle {
	TEXT-ALIGN: left;
	FONT-SIZE: 0.9em;
}

.ticketinfoitemcontent, .ticketinfoitemlink, .navinfoitemcontent, .navinfoitemlink, .ticketpostinfoitemcontent, .ticketpostinfoitemlink {
    FONT-SIZE: 1.3em;
    FONT-FAMILY: Calibri, Arial, Verdana, Helvetica, sans-serif;
	FONT-WEIGHT: bold;
	CURSOR: pointer;
}

.ticketinfoitemcontainer, .navinfoitemcontainer, .ticketpostinfoitemcontainer {
	PADDING: 3px 0 3px 0;
}

.ticketinfoitemlink:hover, .navinfoitemlink:hover, .ticketpostinfoitemlink:hover {
	COLOR: red;
}

.ticketpostinfoitem {
	BACKGROUND-COLOR: transparent;
	COLOR: #000000;
}

.ticketworkflowitem {
	HEIGHT: 18px;
	PADDING: 5px 0px 0px 5px;
	BORDER-BOTTOM: #F0EADE 1px SOLID;
	BACKGROUND-COLOR: #FFFDF8;
	CURSOR: pointer;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
}


.ticketworkflowitem:hover {
	COLOR: red;
}

#ticketnotescontainerdiv, #ticketbillingcontainerdiv {
	PADDING: 10px 8px 0 8px;
}

.duedatetext {
}

.ticketpostsholder {
}

.ticketpostcontainer {
	BACKGROUND: #f6f1e7;
	BORDER-TOP: 1px SOLID #d3c7b6;
	BORDER-LEFT: 1px SOLID #d3c7b6;
	BORDER-RIGHT: 1px SOLID #b5a48c;
	BORDER-BOTTOM: 1px SOLID #b5a48c;
	MARGIN: 8px;
	POSITION: relative;
}

.ticketpostpaginationtoolbar {
	BACKGROUND: #f6f1e7;
	BORDER-TOP: 1px SOLID #d3c7b6;
	BORDER-LEFT: 1px SOLID #d3c7b6;
	BORDER-RIGHT: 1px SOLID #b5a48c;
	BORDER-BOTTOM: 1px SOLID #b5a48c;
	MARGIN: 8px;
	POSITION: relative;
}

.ticketpostbar {
	WIDTH: 240px;
	FLOAT: left;
	PADDING: 10px;
}

.ticketpostbarbottom {
	POSITION: absolute;
	BOTTOM: 0px;
	LEFT: 0px;
	FONT: Georgia,Arial,sans-serif;
	WIDTH: 240px;
	BORDER-TOP: 1px SOLID #ded5c7;
}

.ticketpostbarname {
	FONT: 18px Candara, Trebuchet MS, Verdana, Arial, Helvetica;
	FONT-WEIGHT: bold;
	COLOR: #b24c58;
	PADDING: 0 0 0 10px;
	TEXT-SHADOW: 0 1px 0 rgba(0, 0, 0, 0.15);
	TEXT-ALIGN: center;
	MARGIN-LEFT: -50px;
}

.ticketpostbardesignation {
	FONT: 11px Candara, Trebuchet MS, Verdana, Arial, Helvetica;
	FONT-WEIGHT: bold;
	COLOR: #333333;
	PADDING: 0 0 0 10px;
	TEXT-SHADOW: 0 1px 0 rgba(0, 0, 0, 0.15);
	TEXT-ALIGN: center;
	MARGIN-LEFT: -50px;
}

.ticketpostavatar {
	BACKGROUND: #f9f5ed;
	BORDER-TOP: 1px SOLID #d3c7b6;
	BORDER-LEFT: 1px SOLID #d3c7b6;
	BORDER-RIGHT: 1px SOLID #b5a48c;
	BORDER-BOTTOM: 1px SOLID #b5a48c;
	WIDTH: 100px;
	MARGIN: 25px 0px 10px 0px;
	LEFT: 50%;
	MARGIN-LEFT: -80px;
	POSITION: relative;
	PADDING: 6px;
}

.tpavatar {

}

.ticketpostbarbadgeblue, .ticketpostbarbadgered, .ticketpostbarbadgegreen {
	FONT: 10px Verdana, Tahoma, Arial, Helvetica;
	COLOR: #000000;
	WIDTH: 71px;
	HEIGHT: 21px;
	MARGIN: 10px 0px 10px 0px;
	LEFT: 50%;
	MARGIN-LEFT: -57px;
	POSITION: relative;
}

.ticketpostbarbadgeblue {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/badge1blue.gif) top left no-repeat;
}

.ticketpostbarbadgered {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/badge1red.gif) top left no-repeat;
}

.ticketpostbarbadgegreen {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/badge1green.gif) top left no-repeat;
}

.ticketpostbarbadgeblue .tpbadgetext, .ticketpostbarbadgered .tpbadgetext, .ticketpostbarbadgegreen .tpbadgetext {
	WIDTH: 70px;
	TEXT-ALIGN: center;
	PADDING: 3px 0 0 0;
}


.ticketpostcontentsbottom {
	POSITION: absolute;
	BOTTOM: 0px;
	LEFT: 0px;
	BORDER-TOP: 1px SOLID #ded5c7;
	FONT: Georgia,Arial,sans-serif;
	WIDTH: 100%;
}

.ticketpostcontentsbottom .ticketpostbottomcontents,.ticketpostbarbottom .ticketpostbottomcontents {
	PADDING: 8px;
	HEIGHT: 16px;
}

.ticketpostedited {
	FONT: 11px Verdana, Arial, Helvetica;
	FONT-WEIGHT: bold;
	FONT-STYLE: italic;
	PADDING: 15px 0 0 0;
}

.ticketpostbottomcontents {
	FLOAT: left;
}

.ticketpostclearer {
	CLEAR: both;
}

.ticketpostcontents {
	MARGIN-LEFT: 236px;
	BACKGROUND: #ffffff;
	HEIGHT: auto;
	BORDER-LEFT: 4px SOLID #ded5c7;
	POSITION: relative;
}

.ticketpostcontentsbar, .ticketpostcontentsbargreen {
	POSITION: relative;
	FLOAT: left;
	DISPLAY: block;
	MARGIN: 10px 0px 0 -40px;
	BACKGROUND: #98BDC6;
	WIDTH: 100%;
	HEIGHT: 20px;
	BORDER: 1px solid #6E8D94;
	TEXT-SHADOW: 0 1px 0 rgba(139, 174, 183, 1);
}

.ticketpostcontentsbargreen {
	BACKGROUND: #98c6a9;
	BORDER-COLOR: #6e947c;
	TEXT-SHADOW: 0 1px 0 rgba(142, 186, 159, 1);
}

.ticketbarquote {
	MARGIN: 2px 3px 0 0;
	FLOAT: right;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_quote.gif) no-repeat;
	HEIGHT: 16px;
	WIDTH: 16px;
	CURSOR: pointer;
}

.ticketpostcontentsbar .ticketbarcontents, .ticketpostcontentsbargreen .ticketbarcontents {
	PADDING: 3px 0 0 6px;
	FONT: Georgia,Arial,sans-serif;
	COLOR: #ffffff;
}

.ticketpostcontentsbar span.ticketbardatefold, .ticketpostcontentsbargreen span.ticketbardatefold {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/ticketdatefold.png) no-repeat center center;
	DISPLAY: block;
	BOTTOM: -15px;
	LEFT: 0;
	HEIGHT: 14px;
	POSITION: absolute;
	WIDTH: 19px;
}

.ticketpostcontentsbargreen span.ticketbardatefold {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/ticketdatefoldgreen.png) no-repeat center center;
}

.ticketpostcontentsattachments {
	BORDER-BOTTOM: 1px SOLID #ded5c7;
	FONT: Georgia,Arial,sans-serif;
	WIDTH: 100%;
	MARGIN-BOTTOM: 10px;
	PADDING-BOTTOM: 6px;
}

.ticketpostcontentsattachmentitem {
	PADDING: 4px 0 5px 18px;
	MARGIN: 0 10px 0 0;
	CURSOR: pointer;
	BACKGROUND-REPEAT: no-repeat;
	BACKGROUND-POSITION: 0px 3px;
	DISPLAY: inline;
}

.ticketpostcontentsdetails {
	PADDING: 50px 0 0 0;
}

.ticketpostcontentsholder {
	PADDING: 0 0 15px 20px;
}

.ticketpostcontentsdetailscontainer {
	FONT: Candara, Calibri, Georgia, Arial, Verdana, Helvetica, sans-serif;
	FONT-SIZE: 14px;
	COLOR: #333333;
	MARGIN-BOTTOM: 30px;
	CURSOR: text;
}

.ticketpostbottomright {
	FLOAT: right;
	PADDING: 8px;
}

.ticketgeneralcontainer, .ticketreleasecontainer, .ticketreplycontainer, .ticketforwardcontainer, .ticketfucontainer {
	BACKGROUND: #ffffff;
}

.ticketgeneraltitlecontainer {
	PADDING: 8px 8px 10px 8px;
}

.ticketgeneralinfocontainer {
	PADDING: 6px 8px 5px 8px;
	FONT: Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 10px;
	COLOR: #5a5a5a;
}

.ticketlockinfocontainer, .ticketbillinginfocontainer, .ticketbillinginfocontainer2 {
	PADDING: 6px 8px 5px 8px;
	FONT: Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 10px;
	COLOR: #5a5a5a;
	BACKGROUND-COLOR: #fff4d3;
}

.ticketbillinginfocontainer2 {
	BORDER-BOTTOM: 1px SOLID #d3c7b6;
	BORDER-TOP: 1px SOLID white;
}

.ui-datepicker {
	z-index: 1004;
}

.tickettitlelink {
	COLOR: #b24c58 !important;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 1em;
	FONT-WEIGHT: bold;
}

.tickettitlelink:hover {
	COLOR: red !important;
}

.ticketgeneraldepartment {
	COLOR: #333333;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 1em;
	FONT-WEIGHT: bold;
}

.ticketgenerallink {
	COLOR: #4c56b2;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 1em;
	FONT-WEIGHT: bold;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_link.gif) 0px 0px no-repeat;
	PADDING: 0px 0 0 18px;
	MARGIN: 5px 0 0 0;
}

.ticketgenerallinkticket {
	COLOR: #333333;
	FONT: Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/linkdownarrow.gif) 10px 4px no-repeat;
	PADDING: 6px 0 0 25px;
	HEIGHT: 16px;
}

.ticketgeneraltitle {
	COLOR: #333333;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 1.8em;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/linkdownarrow.gif) 10px 4px no-repeat;
	PADDING: 0px 0 8px 25px;
}

.ticketgeneralproperties, .ticketreleaseproperties, .ticketreplyproperties, .ticketforwardproperties, .ticketfuproperties {
	HEIGHT: 65px;
}

.ticketescalationpathproperties {
	HEIGHT: 45px;
	DISPLAY: block;
}

.ticketescalationpathpropertiesobject {
	PADDING: 5px 12px 6px 12px;
	DISPLAY: block;
	FLOAT: left;
	WIDTH: 160px;
	COLOR: #ffffff;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	HEIGHT: 39px;
	BACKGROUND: transparent;
}

.ticketescalationpathpropertiescontent {
	PADDING: 2px 0 0 0;
	TEXT-ALIGN: center;
	FONT-SIZE: 1.2em;
	FONT-WEIGHT: bold;
}

.ticketescalationpathpropertiesdivider {
	PADDING: 7px 0 0 0;
	DISPLAY: block;
	FLOAT: left;
}

.ticketescalationpathpropertiestitle {
	TEXT-ALIGN: center;
	FONT-SIZE: 0.9em;
}

.ticketescalationpatharrow {
	HEIGHT: 16px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/escalationpatharrow.gif) repeat-x 10px 0px;
}

.ticketgeneralpropertiesselect, .ticketreleasepropertiesselect, .ticketreplypropertiesselect, .ticketforwardpropertiesselect, .ticketfupropertiesselect {
	DISPLAY: none;
	PADDING: 4px 0 0 0;
	TEXT-ALIGN: center;
}

.ticketreleasepropertiesselect, .ticketreplypropertiesselect, .ticketforwardpropertiesselect, .ticketfupropertiesselect {
	DISPLAY: block;
}

.ticketreplypropertiesobject, .ticketforwardpropertiesobject, .ticketreleasepropertiesobject, .ticketgeneralpropertiesobject, .ticketgeneralpropertiesobjectwide, .ticketgeneralpropertiesobjectmed, .ticketfupropertiesobject {
	PADDING: 10px 12px 6px 12px;
	DISPLAY: block;
	FLOAT: left;
	WIDTH: 160px;
	COLOR: #ffffff;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	HEIGHT: 49px;
	BACKGROUND: transparent;
}

.ticketgeneralpropertiesflag {
	PADDING: 20px 7px 6px 5px;
	DISPLAY: block;
	FLOAT: right;
	WIDTH: 15px;
	HEIGHT: 39px;
	BACKGROUND: transparent;
	VERTICAL-ALIGN: middle;
}

.ticketgeneralpropertiesobjectwide {
	WIDTH: 220px;
}

.ticketgeneralpropertiesobjectmed {
	WIDTH: 160px;
}

.ticketgeneralpropertiestitle, .ticketreleasepropertiestitle, .ticketreplypropertiestitle, .ticketforwardpropertiestitle, .ticketfupropertiestitle {
	TEXT-ALIGN: center;
	FONT-SIZE: 0.9em;
	CURSOR: pointer;
}

.ticketreleasepropertiestitle, .ticketfupropertiestitle {
	CURSOR: default;
}

.ticketgeneralpropertiescontent {
	PADDING: 4px 0 0 0;
	TEXT-ALIGN: center;
	FONT-SIZE: 1.3em;
	FONT-WEIGHT: bold;
	CURSOR: pointer;
}

.ticketgeneralpropertiesdivider, .ticketreleasepropertiesdivider, .ticketfupropertiesdivider {
	PADDING: 10px 0 0 0;
	DISPLAY: block;
	FLOAT: left;
}

.matopitemcontainer {
	DISPLAY: inline;
	PADDING: 4px 0 0 15px;
}

.matopitem {
	BACKGROUND: #f8f3eb;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	COLOR: #333333;
    FONT-SIZE: 1.4em;
    FONT-FAMILY: Calibri, Verdana, Arial, Helvetica;
	FONT-WEIGHT: bold;
	BORDER: 1px SOLID #e1d7c6;
	PADDING: 1px 8px 3px 8px;
	MARGIN-RIGHT: 3px;
	MARGIN-TOP: 5px;
	DISPLAY: inline;
	CURSOR: pointer;
}

.ticketviewfielddragcontainer {
	list-style-type: none;
	margin: 2px;
	padding: 10px;
}

.ticketviewfielddragcontainer li {
	BACKGROUND: #fcfaf4;
	COLOR: #333333;
	FONT: 12px Verdana, Tahoma, Helvetica;
	BORDER: 1px SOLID #ddd6c7;
	PADDING: 8px;
	MARGIN: 10px;
	DISPLAY: inline-block;
	CURSOR: move;
}

.ticketviewfielddragcontainer li:hover {
	BACKGROUND: #ffefbb;
}

.ticketviewcolumncontainer {
	min-height: 24px;
	BACKGROUND: #ffefbb;
	BORDER: 4px SOLID #fed22f;
}

#ticketviewfielddragtarget {
	min-height: 24px;
	WIDTH: 97%;
	MARGIN: 0px;
	PADDING: 0px 10px 0px 10px;
}

#ticketviewfielddragtarget li {
	BACKGROUND: #fcfaf4;
	COLOR: #333333;
	FONT: 12px Verdana, Tahoma, Helvetica;
	BORDER: 1px SOLID #ddd6c7;
	PADDING: 8px;
	MARGIN: 10px 2px 10px 2px;
	DISPLAY: inline-block;
	CURSOR: move;
}

#ticketviewfielddragtarget li:hover {
	BACKGROUND: #ffefbb;
}

/*
* END STAFF CP > TICKETS
*/

/*
* Begin jQuery.QLoader CSS
*/

.QOverlay {
	DISPLAY: none;
	background-color: #000000;
	z-index: 9999;
}

.QLoader {
	DISPLAY: none;
	background-color: #CCCCCC;
	height: 1px;
}

/*
* End jQuery.QLoader CSS
*/

/* BEGIN jQuery.Rating Plugin CSS - http://www.fyneworks.com/jquery/star-rating/ */
div.rating-cancel,div.star-rating{float:left;width:17px;height:15px;text-indent:-999em;cursor:pointer;display:block;background:transparent;overflow:hidden}
div.rating-cancel,div.rating-cancel a{background:url(<?php echo $this->scope["_themePath"];?>images/icon_ratingdelete.gif) no-repeat 0 -16px}
div.star-rating,div.star-rating a{background:url(<?php echo $this->scope["_themePath"];?>images/icon_ratingstar.gif) no-repeat 0 0px}
div.rating-cancel a,div.star-rating a{display:block;width:16px;height:100%;background-position:0 0px;border:0}
div.star-rating-on a{background-position:0 -16px!important}
div.star-rating-hover a{background-position:0 -32px}
/* Read Only CSS */
div.star-rating-readonly a{cursor:default !important}
/* Partial Star CSS */
div.star-rating{background:transparent!important;overflow:hidden!important}
/* END jQuery.Rating Plugin CSS */


/* BEGIN ADMIN CP > SLA */
.slascheduletitledefault
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/settabletitlebg.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #f5f0e8;
	BORDER-BOTTOM: 1px SOLID #ddd6c7;
	PADDING: 5px;
}

.slascheduletitleopen
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/slascheduleopenbg.gif) REPEAT-X TOP LEFT;
	COLOR: #FFFFFF;
	FONT: 11px Verdana, Tahoma, Helvetica;
	FONT-WEIGHT: bold;
	BORDER-TOP: 1px SOLID #005858;
	BORDER-BOTTOM: 1px SOLID #256e6e;
	PADDING: 5px;
}

.slascheduletitleopen24
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/slascheduleopen24bg.gif) REPEAT-X TOP LEFT;
	COLOR: #FFFFFF;
	FONT: 11px Verdana, Tahoma, Helvetica;
	FONT-WEIGHT: bold;
	BORDER-TOP: 1px SOLID #0b690b;
	BORDER-BOTTOM: 1px SOLID #0b690b;
	PADDING: 5px;
}

.slascheduletitleclosed
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/slascheduleclosedbg.gif) REPEAT-X TOP LEFT;
	COLOR: #FFFFFF;
	FONT: 11px Verdana, Tahoma, Helvetica;
	FONT-WEIGHT: bold;
	BORDER-TOP: 1px SOLID #333333;
	BORDER-BOTTOM: 1px SOLID #000000;
	PADDING: 5px;
}
/* END ADMIN CP > SLA */

/* BEGIN STAFF CP > LIVE CHAT */
#printcontent { FONT-SIZE: 12px; FONT-FAMILY: Candara, Verdana, Arial, Helvetica; PADDING: 8px; }
.chatprinthr { margin-bottom: 6px; height: 1px; BORDER: none; color: #cfcfcf; background-color: #cfcfcf; }

.chathistorymessage { FONT: 12px Candara, Verdana, Arial, Helvetica; COLOR: #333333; }
.chathistorytimestamp { DISPLAY: inline; COLOR: #676767; PADDING-RIGHT: 5px; }
.chathistoryred { DISPLAY: inline; FONT-SIZE: 12px; FONT-WEIGHT: bold; COLOR: #FF3232; }
.chathistoryblue { DISPLAY: inline; FONT-SIZE: 12px; FONT-WEIGHT: bold; COLOR: #0080FF; }
.chathistorygreen { DISPLAY: inline; FONT-SIZE: 12px; FONT-WEIGHT: bold; COLOR: #278d38; }

.cannedcategorynew { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_newfolder_faded.gif) no-repeat; CURSOR: pointer; }
.cannedcategorynew:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_newfolder.gif); }

.cannedresponsenew { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_newchatballoon_dotted_faded.png) no-repeat; CURSOR: pointer; }
.cannedresponsenew:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_newchatballoon_dotted.png); }

.cannedresponsesearch { DISPLAY: inline-block; HEIGHT: 20px; WIDTH: 20px; BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/icon_searchchatballoon_dotted_faded.png) no-repeat; CURSOR: pointer; }
.cannedresponsesearch:hover { BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/icon_searchchatballoon_dotted.png); }



.reportprinthr { margin-bottom: 6px; height: 1px; BORDER: none; color: #cfcfcf; background-color: #cfcfcf; size: 100px }

.reportprintgridtabletitlerow
{
	BACKGROUND: #C0C0C0;
	COLOR: #000000;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #FFFFFF;
	BORDER-BOTTOM: 1px SOLID #d9cebc;
	PADDING: 5px;
}

.reportprintgridrow2
{
	BACKGROUND-COLOR: #FFFFFF;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.reportprintgridrow1
{
	BACKGROUND-COLOR: #E3E3E3;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}


/* END SPECIFIC ITEM CSS */



/* BEGIN TREEVIEW CSS */
.treeview, .treeview ul {
	padding: 0;
	margin: 0;
	list-style: none;
}

.treeview ul {
	background-color: white;
	margin-top: 4px;
}

.treeview .hitarea {
	background: url(<?php echo $this->scope["_themePath"];?>images/treeview-default.gif) -64px -25px no-repeat;
	height: 16px;
	width: 16px;
	margin-left: -16px;
	float: left;
	cursor: pointer;
}
/* fix for IE6 */
* html .hitarea {
	display: inline;
	float:none;
}

.treeview li {
	margin: 0;
	padding: 3px 0pt 3px 16px;
}

.treeview a.selected {
	background-color: #eee;
}

#treecontrol { margin: 1em 0; display: none; }

.treeview .hover { color: red; cursor: pointer; }

.treeview li { background: url(<?php echo $this->scope["_themePath"];?>images/treeview-default-line.gif) 0 0 no-repeat; }
.treeview li.collapsable, .treeview li.expandable { background-position: 0 -176px; }

.treeview .expandable-hitarea { background-position: -80px -3px; }

.treeview li.last { background-position: 0 -1766px }
.treeview li.lastCollapsable, .treeview li.lastExpandable { background-image: url(<?php echo $this->scope["_themePath"];?>images/treeview-default.gif); }
.treeview li.lastCollapsable { background-position: 0 -111px }
.treeview li.lastExpandable { background-position: -32px -67px }

.treeview div.lastCollapsable-hitarea, .treeview div.lastExpandable-hitarea { background-position: 0; }

.swifttree span.usergroup, .swifttree span.date, .swifttree span.yellowdot, .swifttree span.funnel, .swifttree span.news, .swifttree span.folder,
.swifttree span.folderred, .swifttree span.folderfaded, .swifttree span.chat, .swifttree span.inbox, .swifttree span.inboxfull,
.swifttree span.flagged, .swifttree span.watched, .swifttree span.reddot, .swifttree span.unassignedtickets, .swifttree span.mytickets,
.swifttree span.trash, span.trashfull, .swifttree span.call, .swifttree span.callinbound, .swifttree span.calloutbound, .swifttree span.callmissed,
.swifttree span.file, .swifttree span.userreport
{ padding: 0px 0 1px 19px; margin: 0 0 0 3px; display: block; min-height: 15px; }

.swifttree span.blank { padding: 0px 0 0px 1px; HEIGHT: 16px; display: block; }
.swifttree span.usergroup { background: url(<?php echo $this->scope["_themePath"];?>images/icon_usergroup.gif) 0 0 no-repeat; }
.swifttree span.inbox { background: url(<?php echo $this->scope["_themePath"];?>images/icon_inbox.png) 0 0 no-repeat; }
.swifttree span.inboxfull { background: url(<?php echo $this->scope["_themePath"];?>images/icon_inboxdocument.png) 0 0 no-repeat; }
.swifttree span.flagged { background: url(<?php echo $this->scope["_themePath"];?>images/icon_flag.png) 0 0 no-repeat; }
.swifttree span.watched { background: url(<?php echo $this->scope["_themePath"];?>images/icon_ticketwatch.png) 0 0 no-repeat; }
.swifttree span.unassignedtickets { background: url(<?php echo $this->scope["_themePath"];?>images/icon_ticketunassigned.png) 0 0 no-repeat; }
.swifttree span.mytickets { background: url(<?php echo $this->scope["_themePath"];?>images/icon_staffuser.gif) 0 0 no-repeat; }
.swifttree span.trash { background: url(<?php echo $this->scope["_themePath"];?>images/icon_trashempty.png) 0 0 no-repeat; }
.swifttree span.trashfull { background: url(<?php echo $this->scope["_themePath"];?>images/icon_trashfull.png) 0 0 no-repeat; }
.swifttree span.date { background: url(<?php echo $this->scope["_themePath"];?>images/icon_calendar2.gif) 0 0 no-repeat; }
.swifttree span.yellowdot { background: url(<?php echo $this->scope["_themePath"];?>images/icon_yellowbigdot.gif) 0 0 no-repeat; }
.swifttree span.reddot { background: url(<?php echo $this->scope["_themePath"];?>images/icon_redbigdot.gif) 0 0 no-repeat; }
.swifttree span.folder { background: url(<?php echo $this->scope["_themePath"];?>images/icon_folderyellow3.gif) 0 0 no-repeat; }
.swifttree span.folderred { background: url(<?php echo $this->scope["_themePath"];?>images/icon_folderred.gif) 0 0 no-repeat; }
.swifttree span.folderfaded { background: url(<?php echo $this->scope["_themePath"];?>images/icon_folderyellow3faded.gif) 0 0 no-repeat; }
.swifttree span.chat { background: url(<?php echo $this->scope["_themePath"];?>images/icon_chatnew2.gif) 2px 2px no-repeat; }
.swifttree span.funnel { background: url(<?php echo $this->scope["_themePath"];?>images/icon_filter.png) 0 0 no-repeat; }
.swifttree span.news { background: url(<?php echo $this->scope["_themePath"];?>images/icon_news.gif) 0 0 no-repeat; }
.swifttree span.call { background: url(<?php echo $this->scope["_themePath"];?>images/icon_phone.gif) 0 0 no-repeat; }
.swifttree span.callinbound { background: url(<?php echo $this->scope["_themePath"];?>images/icon_phone_incoming.gif) 0 0 no-repeat; }
.swifttree span.calloutbound { background: url(<?php echo $this->scope["_themePath"];?>images/icon_phone_outgoing.gif) 0 0 no-repeat; }
.swifttree span.callmissed { background: url(<?php echo $this->scope["_themePath"];?>images/icon_phone_missed.gif) 0 0 no-repeat; }
.swifttree span.file { background: url(<?php echo $this->scope["_themePath"];?>images/icon_kbarticlesmall.png) 0 0 no-repeat; }
.swifttree span.userreport { background: url(<?php echo $this->scope["_themePath"];?>images/icon_report_user.png) 0 0 no-repeat; }

/* END TREEVIEW CSS */

/* BEGIN NOTE COUNTERS CSS */

/*.notecounterred   { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_badge.png) no-repeat; }
.notecountergreen { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_badge_green.png) no-repeat; }
.notecounteryellow { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_badge_yellow.png) no-repeat; }
.notecounterpink { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_badge_pink.png) no-repeat; }
.notecounterorange { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_badge_orange.png) no-repeat; }

.notecounterred, .notecountergreen, .notecounteryellow, .notecounterpink, .notecounterorange  {
	HEIGHT: 18px;
	RIGHT: 0;
	PADDING: 2px 0 0 0;
	margin: -25px 15px 0 -18px;
	TEXT-ALIGN:center;
	WIDTH: 20px;
	FLOAT: right;
	DISPLAY: inline;
	COLOR: #FFFFFF;
	FONT: 9px "lucida grande", Tahoma, Verdana, Arial, Helvetica;
	BACKGROUND-POSITION: 1px 0;
}*/

.notecounterred, .notecounterredver     { BACKGROUND: #ce1707; }
.notecountergreen, .notecountergreenver   { BACKGROUND: #639d0c; }
.notecounteryellow, ..notecounteryellowver  { BACKGROUND: #fbc22d; }
.notecounterpink, .notecounterpinkver    { BACKGROUND: #ec8ff1; }
.notecounterorange, .notecounterorangever  { BACKGROUND: #fe9309; }
.notecounterblue, .notecounterbluever  { BACKGROUND: #3b5998; BODER-BOTTOM: 1px SOLID #00376a; }

.notecounterred, .notecountergreen, .notecounteryellow, .notecounterpink, .notecounterorange, .notecounterblue,
.notecounterredver, .notecountergreenver, .notecounteryellowver, .notecounterpinkver, .notecounterorangever, .notecounterbluever  {
	HEIGHT: 10px;
	RIGHT: 0;
	PADDING: 3px 6px 5px 6px;
	MARGIN: -3px 0px -20px -5px;
	TEXT-ALIGN:center;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	FLOAT: right;
	DISPLAY: inline;
	COLOR: #FFFFFF;
	z-index: 1000;
	POSITION: relative;
	FONT: 9px "lucida grande", Tahoma, Verdana, Arial, Helvetica;
}

.notecounterredver, .notecountergreenver, .notecounteryellowver, .notecounterpinkver, .notecounterorangever, .notecounterbluever  {
	MARGIN: -10px 14px -20px -5px;
}

.blocknotecountergray   { BACKGROUND: #333333; }
.blocknotecounterred     { BACKGROUND: #ce1707; }
.blocknotecountergreen   { BACKGROUND: #639d0c; }
.blocknotecounteryellow  { BACKGROUND: #fbc22d; }
.blocknotecounterpink    { BACKGROUND: #ec8ff1; }
.blocknotecounterorange  { BACKGROUND: #fe9309; }
.blocknotecounterblue  { BACKGROUND: #3b5998; BODER-BOTTOM: 1px SOLID #00376a; }

.blocknotecounterred, .blocknotecountergreen, .blocknotecounteryellow, .blocknotecounterpink, .blocknotecounterorange, .blocknotecounterblue, .blocknotecountergray  {
	HEIGHT: 10px;
	RIGHT: 0;
	PADDING: 3px 6px 5px 6px;
	TEXT-ALIGN: center;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	FLOAT: left;
	MARGIN: 0 4px 0 0;
	COLOR: #FFFFFF;
	FONT: 9px "lucida grande", Tahoma, Verdana, Arial, Helvetica;
}

.blockgray   { BACKGROUND: #333333; }
.blockred     { BACKGROUND: #ce1707; }
.blockgreen   { BACKGROUND: #639d0c; }
.blockyellow  { BACKGROUND: #fbc22d; }
.blockpink    { BACKGROUND: #ec8ff1; }
.blockorange  { BACKGROUND: #fe9309; }
.blockblue  { BACKGROUND: #3b5998; BODER-BOTTOM: 1px SOLID #00376a; }

.blockred, .blockgreen, .blockyellow, .blockpink, .blockorange, .blockblue, .blockgray  {
	HEIGHT: 10px;
	PADDING: 4px 6px 4px 6px;
	TEXT-ALIGN: center;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	DISPLAY: inline;
	COLOR: #FFFFFF;
	FONT: 10px "lucida grande", Tahoma, Verdana, Arial, Helvetica;
}

.ui-tabs a { width: 100%; }

/* END NOTE COUNTERS CSS */

/* BEGIN REDIRECT CSS */

.uiredirectcontainer {
	BACKGROUND: #faf3e3 URL(<?php echo $this->scope["_themePath"];?>images/loginbg1.gif) REPEAT-X TOP LEFT; PADDING-TOP: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-BOTTOM: 8px; BORDER: 1px SOLID #dcd0b7; HEIGHT: 110px;
}

.uiredirectinner {
	BACKGROUND: #fcfaf5 URL(<?php echo $this->scope["_themePath"];?>images/loginbg2.gif) no-repeat; HEIGHT: 100%; BORDER: 1px SOLID #efe8da; OVERFLOW: hidden;
}

/* END REDIRECT CSS */

/* BEGIN CP UI CSS */
tbody {
	MARGIN: 0px;
	PADDING: 0px;
}

.checkboxcontainer {
	BORDER: 1px SOLID #cabeac;
	BACKGROUND: #FFFFFF;
	MARGIN: 6px;
	OVERFLOW: auto;
	HEIGHT: 150px;
	WIDTH: 250px;
}

.checkboxcontainer div {
	BORDER-BOTTOM: 1px SOLID #ddd6c7;
	PADDING: 4px;
	BACKGROUND: #ffffff;
	CURSOR: pointer;
}

.checkboxcontainer div:hover {
	BACKGROUND: #fff4d3;
}

img {
	VERTICAL-ALIGN: middle;
	BORDER: 0px;
}

.cpuisplitter {
	BACKGROUND-COLOR: #d3c7b6;
}

.cpuisplitterinner {
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/renavbarsplitterbg.gif) REPEAT-Y TOP LEFT;
	WIDTH: 5px;
}

.cpuicontainer {
	BACKGROUND-COLOR: #f8f4eb;
}


.restaffnavbar {
	background: #f2e7d6 url(<?php echo $this->scope["_themePath"];?>images/renavbarbg.gif) no-repeat bottom left;
}

.staffnavbarclickable
{
	CURSOR: pointer;
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/renavbarsplitterbg.gif) REPEAT-Y TOP LEFT;
	WIDTH: 5px;
}

.renavsection {
	text-decoration: none;
	margin: 0 0 0 0;
	border: 1px solid #cabeac;
	background: #FFFFFF url(<?php echo $this->scope["_themePath"];?>images/renavtitlebg.gif) no-repeat top left;
	COLOR: #61718C;
	WIDTH: 100%;
	MARGIN-BOTTOM: 7px;
}

.renavsub {
	padding: 3px 0px 4px 4px;
}

.renavsectionadmin {
	text-decoration: none;
	margin: 0 0 0 0;
	border: 1px solid #cabeac;
	background: #FFFFFF url(<?php echo $this->scope["_themePath"];?>images/renavtitlebg.gif) no-repeat top left;
	COLOR: #61718C;
	WIDTH: 100%;
}

.reheadertext
{
	FONT-SIZE: 11px;
	COLOR: #333333;
	FONT-FAMILY: Verdana, Arial;
	VERTICAL-ALIGN: middle;
}

.reheaderbar
{
	DISPLAY: block;
	BACKGROUND: #FFFFFF;
	HEIGHT: 72px;
}

.rebarlogo
{
	FLOAT: left;
}
/* END CP UI CSS */

/* BEGIN LOGIN FORM CSS */
.loginformcontainer {
	padding-top: 50px; width: 100%;
}

.loginformparent {
	BACKGROUND: #ebe1d0 URL(<?php echo $this->scope["_themePath"];?>images/loginbg1.gif) REPEAT-X TOP LEFT; PADDING-TOP: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-BOTTOM: 5px; BORDER: 1px SOLID #afa48e; z-index: 9;
}

.loginformsub {
	BACKGROUND: #f2ebde URL(<?php echo $this->scope["_themePath"];?>images/loginbg2.gif) no-repeat; HEIGHT: 100%; BORDER: 1px SOLID #c9bead; OVERFLOW: hidden;
}

.loginrule {
	BORDER: none; COLOR: #d4cdbd; BACKGROUND-COLOR: #d4cdbd; HEIGHT: 1px; MARGIN: 0px; PADDING: 0px;
}

.loginoptions {
	BACKGROUND: #f4eee3; BORDER: 1px SOLID #d9cfbe; z-index: 10; OVERFLOW: hidden;
}

/* END LOGIN FORM CSS */

/* BEGIN NOTES CSS */

.swifttextareanotes1
{
	BACKGROUND: #ffefbb; COLOR: #000000; BORDER: 1px SOLID #bdac8e; PADDING: 2px 2px 2px 2px; VERTICAL-ALIGN: middle;
}

.swifttextareanotes2
{
	BACKGROUND: #e5c7ec; COLOR: #000000; BORDER: 1px SOLID #bdac8e; PADDING: 2px 2px 2px 2px; VERTICAL-ALIGN: middle;
}

.swifttextareanotes3
{
	BACKGROUND: #c7d6ec; COLOR: #000000; BORDER: 1px SOLID #bdac8e; PADDING: 2px 2px 2px 2px; VERTICAL-ALIGN: middle;
}

.swifttextareanotes4
{
	BACKGROUND: #e5ecc7; COLOR: #000000; BORDER: 1px SOLID #bdac8e; PADDING: 2px 2px 2px 2px; VERTICAL-ALIGN: middle;
}

.swifttextareanotes5
{
	BACKGROUND: #ecc9c9; COLOR: #000000; BORDER: 1px SOLID #bdac8e; PADDING: 2px 2px 2px 2px; VERTICAL-ALIGN: middle;
}

/* Normal Bubble */
div.bubble {
	width: auto;
	margin-bottom: 24px;
}

div.bubble blockquote {
	margin: 0px;
	padding: 0px;
	border: 1px solid #c9c2c1;
	background-color: #fff;
}

div.bubble blockquote p {
	margin: 10px;
	padding: 0px;
}

div.bubble cite {
	position: relative;
	margin: 0px;
	padding: 7px 0px 0px 15px;
	top: 6px;
	font-style: normal;
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/notetip.gif) no-repeat 20px 0;
	z-index: 100;
}

/* Rounded Bubble */
div.bubble div.notebubble {
	color: #222222;
	margin-bottom: 0px;
	border: 3px solid #fff;
	background-color: #ffefbb;
	z-index: 99;
}
div.bubble div.notebubble blockquote {
	border: 0;
	background-color: transparent;
}
div.bubble div.notebubble blockquote p {
	margin: 0px 10px;
}
div.bubble cite.tip {
	position: relative;
	margin: 0px;
	padding-left: 15px;
	padding-top: 12px;
	top: 9px;
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/notetip1.gif) no-repeat 40px 0;
}

div#note2.bubble div.notebubble {
	color: #222222;
	border: 3px solid #fff;
	background-color: #e5c7ec;
}

div#note2.bubble cite.tip {
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/notetip2.gif) no-repeat 40px 0;
}

div#note3.bubble div.notebubble {
	color: #222222;
	border: 3px solid #fff;
	background-color: #c7d6ec;
}

div#note3.bubble cite.tip {
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/notetip3.gif) no-repeat 40px 0;
}

div#note4.bubble div.notebubble {
	color: #222222;
	border: 3px solid #fff;
	background-color: #e5ecc7;
}

div#note4.bubble cite.tip {
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/notetip4.gif) no-repeat 40px 0;
}

div#note5.bubble div.notebubble {
	color: #222222;
	border: 3px solid #fff;
	background-color: #ecc9c9;
}

div#note5.bubble cite.tip {
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/notetip5.gif) no-repeat 40px 0;
}

/* END NOTES CSS */

/* BEGIN JQUERY AUTO COMPLETE CSS */

.ac_results {
	padding: 0px;
	border: 1px solid #bdac8e;
	background-color: white;
	overflow: hidden;
	z-index: 99999;
}

.ac_results ul {
	width: 100%;
	list-style-position: outside;
	list-style: none;
	padding: 0;
	margin: 0;
}

.ac_results li {
	margin: 0px;
	padding: 2px 5px;
	cursor: default;
	display: block;
	/*
	if width will be 100% horizontal scrollbar will apear
	when scroll mode will be used
	*/
	/*width: 100%;*/
	FONT: 11px Verdana, Arial, Helvetica;
	/*
	it is very important, if line-height not setted or setted
	in relative units scroll will be broken in firefox
	*/
	line-height: 16px;
	overflow: hidden;
}

.ac_loading {
	background: white url(<?php echo $this->scope["_themePath"];?>images/loadingcircle.gif) right center no-repeat;
}

.ac_odd {
	background-color: #f8f4eb;
}

.ac_over {
	background-color: #ffefbb;
	color: red;
}

/* END JQUERY AUTO COMPLETE CSS */



/* BEGIN TEXT AUTO COMPLETE CSS */
.swifttextquickinsertdiv {
	BORDER: 1px SOLID #bdac8e;
	WIDTH: 340px;
	HEIGHT: 22px;
	DISPLAY: inline-block;
	MARGIN-RIGHT: 25px;
	BACKGROUND: #FFFFFF;
}

.qipadding {
	PADDING: 6px;
	DISPLAY: inline;
}

.swifttextquickinsertdiv input {
	WIDTH: 300px !important;
}

.swifttextquickinsertdiv span {
	FLOAT: right;
	BORDER-LEFT: 1px SOLID #bdac8e;
	BACKGROUND: #e1d4c3 URL(<?php echo $this->scope["_themePath"];?>images/menudrop_white.gif) no-repeat 1px 3px;
	WIDTH: 18px;
	HEIGHT: 22px;
	CURSOR: pointer;
}

.swifttextautocompletediv {
	PADDING: 2px;
	PADDING-LEFT: 22px;
	BORDER: 1px SOLID #bdac8e;
	BACKGROUND: #FFFFFF;
}

.swifttextautocomplete {
	OVERFLOW: hidden;
	PADDING: 0px;
	MARGIN: 0px;
	HEIGHT: auto !important;
	WIDTH: 100%;
	LIST-STYLE-TYPE: none;
}

.boldtext {
	FONT-WEIGHT: bold;
}

.swifttextautocompleteinputcontainer, .swifttextautocompleteinput, .swifttextautocompleteinputactive {
	DISPLAY: block;
	FLOAT: left;
	FONT: 11px Verdana, Arial, Helvetica;
	LIST-STYLE-TYPE: none;
	MARGIN: 1px;
}

.swifttextautocompleteinput, .swifttextautocompleteinputactive {
	BORDER: 0px;
	PADDING: 2px;
	OUTLINE: none;
	COLOR: #8a8a8a;
}

.swifttextautocompleteinputactive {
	COLOR: #333333;
}

.swifttextautocompleteinputfocus {
	BORDER: 0px;
	PADDING: 2px;
	OUTLINE: none;
	COLOR: #333333;
}

.swifttextautocompleteitem {
	BACKGROUND: #f8f3eb url(<?php echo $this->scope["_themePath"];?>images/gridtabletitlebg.gif) REPEAT-X TOP LEFT;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Arial, Helvetica;
	BORDER: 1px SOLID #e1d7c6;
	PADDING: 1px 4px 3px 4px;
	MARGIN-RIGHT: 3px;
}

.swifttextautocompleteitemclose {
	FLOAT: right;
	CURSOR: pointer;
	MARGIN-LEFT: 1px;
}

/* END TEXT AUTO COMPLETE CSS */

/* BEGIN DROPDOWN CSS */
.swiftdropdown {
	LIST-STYLE: none;
	WIDTH: 200px;
	background-color: #FFFFFF;
	border: 1px solid #d9cebc;
	padding: 0px;
	margin: 0px;
	position: absolute;
	float: left;
	top: 0px;
	z-index: 9999;
	DISPLAY: none;
}

.swiftdropdown li {
	PADDING: 0px;
	MARGIN: 0px;
	FLOAT: none;
	text-decoration: none;
	DISPLAY: block;
}

.swiftdropdown .seperator {
	PADDING: 0px;
	MARGIN-LEFT: 4px;
	MARGIN-RIGHT: 4px;
	MARGIN-TOP: 2px;
	MARGIN-BOTTOM: 2px;
	HEIGHT: 1px;
	BACKGROUND: #fcfaf5;
	BORDER-BOTTOM: 1px SOLID #d9cebc;
}

.swiftdropdownitem {
	DISPLAY: block;
	MIN-HEIGHT: 25px;
	OVERFLOW: hidden;
}

.swiftdropdowninput {
	DISPLAY: block;
	HEIGHT: 62px;
}

.swiftdropdownitem .swiftdropdownitemimage {
	FLOAT: left;
	DISPLAY: block;
	BORDER-RIGHT: 1px SOLID #d9cebc !important;
	BACKGROUND: #fcfaf5 !important;
	HEIGHT: 25px;
	VERTICAL-ALIGN: middle;
}

.swiftdropdownitemtext {
	FLOAT: left;
	FONT: 11px Verdana, Arial, Helvetica;
	PADDING-LEFT: 4px;
	MARGIN-TOP: 3px;
	PADDING-TOP: 1px;
	PADDING-BOTTOM: 2px;
}

.swiftdropdownitemparent {
	CURSOR: pointer;
}

.swiftdropdownitemhover {
	BACKGROUND: #ffefbb;
}

.swiftdropdowniteminput {
	FLOAT: left;
	WIDTH: 160px;
	FONT: 11px Verdana, Arial, Helvetica;
	MARGIN-TOP: 2px;
	PADDING-LEFT: 4px;
}

/* END DROPDOWN CSS */

/* BEGIN DASHBOARD CSS */

.dashboardprogress {
	CURSOR: pointer;
	PADDING: 0 0 2px 2px;
}

.dashboardprogress:hover {
	BACKGROUND: #ffefbb;
}

.dashboardprogresstitle {
	display: inline-block;
	width: 80px;
}

.dashboardprogresscount {
	display: inline-block; text-align: right;
	float: right;
	margin-right: 3px;
}

.dashboardprogressbarparent {
	display: inline-block; padding-top: 2px;
	float: right;
	margin-right: 3px;
}

.dashboardprogressbar {
	border-top: 1px SOLID white; display: block; height: 10px;
}

.dashboardprogressperc {
	display: inline-block;
	float: right;
	width: 32px;
	text-align: right;
}

.dashboardprogresscontainer {
	MARGIN-BOTTOM: 10px;
}

.dashboardoverviewtab {
	background: transparent url(<?php echo $this->scope["_themePath"];?>images/icon_overview.png) no-repeat scroll 0%; padding-left: 20px; height: 16px; float: left;
}

.dashboardcounter {
	float: right; MARGIN: 7px 20px 0 0; border: 1px SOLID #dbceb7; WIDTH: 74px; HEIGHT: 72px; BACKGROUND: white; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px;
	cursor: pointer;
}

.dashboardcounter:hover {
	border-color: #c2b49a;
}

.dashboardcounter:hover .dashboardcounternumber {
	color: red;
}

.dashboardcounterparent {
	font: 10px Verdana,Arial,Helvetica; color: #555555; text-align: center;
}

.dashboardcounterheader {
	padding: 6px 0 6px 0; MARGIN-BOTTOM: 3px; BORDER-BOTTOM: 1px DASHED #f4ede1;
}

.dashboardcounternumber {
	FONT: 32px Trebuchet MS, Calibri, Verdana, Arial, Helvetica;
}

.dashboardavatarimage {
	PADDING-TOP: 6px;
}

.dashboarddate {
	PADDING: 6px 0 0 4px;
}

.dashboardrightcontents {
	PADDING-LEFT: 12px;
}

.dashboarddatecontainer {
	WIDTH: 74px; HEIGHT: 88px;
}

.dashboardmonthholder {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/calendartop.gif) no-repeat; DISPLAY: block; TEXT-ALIGN: center; VERTICAL-ALIGN: middle; PADDING: 0px; COLOR: #FFFFFF; FONT: bold 11px Verdana,Arial,Helvetica; WIDTH: 74px; HEIGHT: 22px;
}

.dashboardmonthsub {
	PADDING-TOP: 4px;
}

.dashboarddateholder {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/calendarbottom.gif) no-repeat; DISPLAY: block; TEXT-ALIGN: center; VERTICAL-ALIGN: middle; PADDING: 0px; COLOR: #555555; FONT: 10px Verdana,Arial,Helvetica; WIDTH: 74px; HEIGHT: 66px;
}

.dashboarddatesub {
	PADDING-TOP: 6px; PADDING-BOTTOM: 6px;
}

.dashboarddatedcontainer {
	FONT: 32px Trebuchet MS, Calibri, Verdana, Arial, Helvetica;
}

.dashboardusername {
	FONT: 32px Calibri, Trebuchet MS, Verdana, Arial, Helvetica; PADDING-BOTTOM: 8px; text-shadow:0 1px 0 rgba(193, 177, 148, 0.5);

}

.ui-tabs-vertical {
	width: 100%; border: 0px;
}

.ui-tabs-vertical .ui-tabs-panel {
	BACKGROUND: #FFFFFF; MARGIN: 0px; PADDING: 0px; BORDER: 1px SOLID #c1b194; -moz-border-radius: 4px; -webkit-border-radius: 4px;
	position: relative;
}

.ui-tabs-vertical .ui-tabs-nav {
	float: left; width: 180px; border: 0px; BACKGROUND: #f8f4eb; padding: 10px 0px 0;
}

.ui-tabs-vertical .ui-tabs-nav li {
	clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0px 0 6px 0px;
}

.ui-tabs-vertical .ui-tabs-nav li a {
	display:block;
	width: 100%;
}

.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-selected {
	padding-bottom: 0; padding-right: 1px; border-right-width: 1px; border-color: #c1b194; z-index: 1000;
}

.ui-tabs-vertical .ui-tabs-panel {
	padding: 1em; margin-left: 181px;
}

.ui-tabs-vertical-custom-prop {
	height: 400px; float:right; width:1px;
}

.ui-tabs-vertical-custom-clear {
	clear:both; height:1px; overflow:hidden;
}

.dashboardboxinfo1 {
	BORDER: 1px SOLID #c1b194; BACKGROUND: #f8f4eb; COLOR: #333333;  -moz-border-radius: 4px; -webkit-border-radius: 4px; MARGIN-BOTTOM: 8px; PADDING: 6px;
}

.dashboardboxinfo2 {
	BORDER: 1px SOLID #c1b194; BACKGROUND: #FFFFFF; COLOR: #333333;  -moz-border-radius: 4px; -webkit-border-radius: 4px; MARGIN-BOTTOM: 8px; PADDING: 6px;
}

.dashboardboxalert {
	BORDER: 1px SOLID #e2c822; BACKGROUND: #fff9d7; COLOR: #333333; -moz-border-radius: 4px; -webkit-border-radius: 4px; MARGIN-BOTTOM: 8px; PADDING: 6px;
}

.dashboardboxerror {
	BORDER: 1px SOLID #dd3c10; BACKGROUND: #ffebe8; COLOR: #333333; -moz-border-radius: 4px; -webkit-border-radius: 4px; MARGIN-BOTTOM: 8px; PADDING: 6px;
}

.dashboardboxtitlecontainer {
	OVERFLOW: hidden;
	PADDING-BOTTOM: 4px;
}

.dashboardboxtitle {
	FONT: 2.25em Corbel, Trebuchet MS, Verdana, Arial, Helvetica;
	PADDING-BOTTOM: 4px;
	FLOAT: left;
}

.dashboardboxdate {
	FLOAT: right;
	PADDING-TOP: 8px;
	COLOR: #000000;
}

/* END DASHBOARD CSS */

/* NEW CSS */
label { CURSOR: pointer; }

[disabled] {
	color: #8a8a8a !important;
}

.commentstext {
	font: 16px Georgia,"Times New Roman",Times,serif;
}

.navbox {
	WIDTH: 100%;
	COLOR: #333333;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FLOAT: left;
	POSITION: relative;
	MARGIN-TOP: 10px;
}

.navboxtop {
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/navboxtr.gif) no-repeat top right;
	HEIGHT: 22px;
}

.navboxtopleft {
	DISPLAY: inline;
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/navboxtl.gif) no-repeat top right;
	WIDTH: 7px;
	HEIGHT: 22px;
	FLOAT: left;
}

.navboxcontent {
	BORDER: 1px SOLID #a8a192;
}

.navitem
{
	BACKGROUND-COLOR: #FEFEFE;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER-BOTTOM: 1px solid #F5F5F5;
	PADDING: 4px;
}

.navitem2
{
	BACKGROUND-COLOR: #f7f5e7;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER-BOTTOM: 1px solid #F5F5F5;
	PADDING: 4px;
}

.navitemhover
{
	BACKGROUND-COLOR: #ffefbb;
	COLOR: #476CA4;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER-BOTTOM: 1px solid #e5c365;
	PADDING: 4px;
}

.footertext {
	COLOR: #565656;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	PADDING-BOTTOM: 4px;
}

.swiftnopad {
	MARGIN: 0px;
	PADDING: 0px;
}

.cptopmenulink {
	position: relative; top: 6px; float: right; margin-right: 6px; COLOR: #333333;
}

.menulink {
	color: #333333;
}

.menulink:hover {
	color: red !important;
}

.menulink:visited {
	color: #333333;
}

.tab {
	margin-left: 0;
	margin-top: 0;
	COLOR: #B4C5E1;
	font: 11px Verdana;
	padding: 0px 10px 4px 6px;
	z-index: 6;
	DISPLAY: block;
}

.tabparent {
	BACKGROUND: #f8f4eb;
}

.tab li{
	list-style: none;
	display: inline;
	margin: 0px;
	PADDING: 0px;
	FONT: bold 11px Verdana, Geneva, Lucida, 'lucida grande', Arial, Helvetica, Sans-Serif;
}

.tab li a span{
	display: block;
	float: left;
	padding: 6px;
	padding-left: 5px;
	padding-right: 13px;
	padding-top: 5px !important;
	HEIGHT: 14px;
	background: url(<?php echo $this->scope["_themePath"];?>images/basictablayout.gif) no-repeat right -50px;
}

.tab li a{
	text-decoration: none;
	padding-left: 3px;
	margin-right: 2px;
	float: left; position: relative;
	bottom: -2px; left: -2px;
	color: #a0947b;
	z-index: 1;
	outline: none;
	background: url(<?php echo $this->scope["_themePath"];?>images/basictablayout.gif) no-repeat 0px -200px;
}

.tab a:hover{
	color: #000000;
	background: #FEFFF5;
	border-color: #333333;
	background: url(<?php echo $this->scope["_themePath"];?>images/basictablayout.gif) no-repeat 0px -250px;
	CURSOR: hand;
	CURSOR: pointer;
}

.tab a:hover span {
	display: block;
	float: left;
	padding: 6px;
	padding-left: 5px;
	padding-right: 13px;
	padding-top: 5px !important;
	HEIGHT: 14px;
	background: url(<?php echo $this->scope["_themePath"];?>images/basictablayout.gif) no-repeat right -100px;
}

.tab a.currenttab {
	padding-left: 3px;
	background: url(<?php echo $this->scope["_themePath"];?>images/basictablayout.gif) no-repeat 0px -150px;
	COLOR: #333333;
	margin-top: -0.0em;
	z-index: 4;
	bottom: -1px;
}

.tab a.currenttab span {
	display: block;
	float: left;
	padding: 6px;
	padding-left: 5px;
	padding-right: 13px;
	padding-top: 5px !important;
	HEIGHT: 14px;
	text-shadow:0 1px 0 rgba(193, 177, 148, 0.5);
	background: url(<?php echo $this->scope["_themePath"];?>images/basictablayout.gif) no-repeat right 0px;
}

.basictabcontent {
	DISPLAY: block;
	float: left; position: relative;
	z-index: 3;
	padding: 0px; margin: 0px;
	background-color: #FFFFFF;
	color: #000000;
	border: 1px solid #a8a192;
	FONT: 11px Verdana, Tahoma, Helvetica;
	WIDTH: 100%;
}


.diffcontainer
{
	COLOR: #333333;
	BACKGROUND: #efe8da;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
}

.diffwordinserted
{
	DISPLAY: inline;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	COLOR: blue;
}

.diffworddeleted
{
	COLOR: #CCCCCC;
	DISPLAY: inline;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	TEXT-DECORATION: line-through;
}

.diffline
{
	COLOR: #333333;
	BACKGROUND: #eeeeee;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	PADDING-TOP: 2px;
	PADDING-BOTTOM: 2px;
	MARGIN-BOTTOM: 1px;
}

.difflinedeleted
{
	COLOR: #333333;
	BACKGROUND: #ffffaa;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	PADDING-TOP: 2px;
	PADDING-BOTTOM: 2px;
	MARGIN-BOTTOM: 1px;
	WIDTH: 100%;
	HEIGHT: 18px;
	OVERFLOW: none;
}

.difflineempty
{
	COLOR: #333333;
	BACKGROUND: #efe8da;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	PADDING-TOP: 2px;
	PADDING-BOTTOM: 2px;
	MARGIN-BOTTOM: 1px;
	WIDTH: 100%;
	HEIGHT: 18px;
	OVERFLOW: none;
}

.difflineadded
{
	COLOR: #333333;
	BACKGROUND: #ccffcc;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	PADDING-TOP: 2px;
	PADDING-BOTTOM: 2px;
	MARGIN-BOTTOM: 1px;
	WIDTH: 100%;
	HEIGHT: 18px;
	OVERFLOW: none;
}

.difflinechange
{
	COLOR: #333333;
	BACKGROUND: #feccff;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
	PADDING-TOP: 2px;
	PADDING-BOTTOM: 2px;
	MARGIN-BOTTOM: 1px;
	WIDTH: 100%;
	HEIGHT: 18px;
	OVERFLOW: none;
}


.searchighlightsmall
{
	COLOR: #000000;
	BACKGROUND: #FFFF66;
	FONT: bold 11px Verdana, Arial;
}

.linkedselectcontainer {
	PADDING: 4px 0 0 20px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/linkdownarrow_blue.gif) no-repeat 0 10px;
}

.customfieldstatic {
/*	-webkit-border-radius: 6px 6px 6px 6px;
	-moz-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
	BORDER: 1px solid #FFD6CF;
*/
	WIDTH: 100%;
}

.customfieldstatic_pink {
	BACKGROUND-COLOR: #FFF5F2;
	WIDTH: 100%;
}

.customfieldstaticcontainer {
	PADDING: 3px;
}

.customfieldstaticcontainer2 {
	PADDING: 6px;
}

.customfieldstatictitle {
	PADDING: 0 0 0 20px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_customfieldstatic.gif) no-repeat 0 0;
	HEIGHT: 18px;
}

.customfieldstaticrule_pink {
	BACKGROUND-COLOR: #efd6d2 !important;
	COLOR: #efd6d2 !important;
	HEIGHT: 1px;
	MARGIN: 4px 0 4px 0;
	PADDING: 0px;
}

.customfieldstaticrule {
	BACKGROUND-COLOR: #CFCFCF !important;
	COLOR: #CFCFCF !important;
	HEIGHT: 1px;
	MARGIN: 4px 0 4px 0;
	PADDING: 0px;
}

.customfieldcol1_pink {
	FONT-WEIGHT: bold;
	BACKGROUND: #FEF8F6;
	BORDER-BOTTOM: 1px SOLID #f2ebde;
}

.customfieldcol1 {
	FONT-WEIGHT: bold;
	BORDER-BOTTOM: 1px SOLID #f2ebde;
}

.customfieldcol2_pink {
	BACKGROUND: #FFFFFF;
	BORDER-BOTTOM: 1px SOLID #f2ebde;
}

.customfieldcol2 {
	BORDER-BOTTOM: 1px SOLID #f2ebde;
}

.searchighlightcode
{
	COLOR: #000000;
	BACKGROUND: #ffffd0;
	FONT: bold 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
}

.searchcode
{
	COLOR: #000000;
	FONT: 12px Courier New, Consolas, Fixedsys, Verdana, Arial;
}

.search0hr
{
	BORDER: none;
	COLOR: #c1d8f7;
	BACKGROUND-COLOR: #c1d8f7;
	HEIGHT: 1px;
	MARGIN: 3 1 3 1;
	PADDING: 0;
}

input {
	margin: 0px;
	vertical-align: middle;
}


/*
* BEGIN CSS TOOLBAR STYLES
*/

.tabtoolbar ul {
	margin: 0px;
	padding: 0px;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	color: #333333;
	margin-top: 0px;
	display: block;
	line-style: none;
	padding-top: expression('0.25em');
}

.tabtoolbar ul li {
	list-style-type: none;
	display: inline;
	margin: 0px;
	padding: 0px;
	line-style: none;
	line-height: 20px;
	VERTICAL-ALIGN: middle;
}

.tabtoolbarsub {
	margin: 0px;
	padding: 0px;
	float: left; PADDING: 0px; height: 20px;
}

.tabtoolbarsub ul {
	margin: 0px;
	padding: 0px;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	color: #333333;
	margin-top: 0px;
	display: block;
	line-style: none;
	padding-top: expression('0.25em');
}

.tabtoolbarsub ul li {
	list-style-type: none;
	display: inline;
	margin: 0px;
	padding: 0px;
	line-style: none;
	line-height: 20px;
	VERTICAL-ALIGN: middle;
}

.tabtoolbarsub ul li a {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbarbuttonbg.gif) REPEAT-X TOP LEFT;
	border-right: 1px solid #cdc6b6;
	border-bottom: 1px solid #cdc6b6;
	border-top: 1px solid #fcfaf4;
	border-left: 1px solid #fcfaf4;
	text-decoration: none;
	MARGIN-LEFT: 0px;
	color: #333333;
	padding:0.20em 1em 4px 1em;
}

.tabtoolbarsub ul li a:hover, .tabtoolbarsub ul li a:active {
	text-decoration: none;
	color : #444444;
}

.tabtoolbarsub ul li a:hover  {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbaritemhover.gif) REPEAT-X TOP LEFT;
	text-decoration: none;
	border-right: 1px solid #e5c365;
	border-bottom: 1px solid #e5c365;
	border-top: 1px solid #f9f0d7;
	border-left: 1px solid #f9f0d7;
}

.tabtoolbarsub ul li a:active  {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbaritemhover.gif) REPEAT-X TOP LEFT;
	text-decoration: none;
	border-left: 1px solid #e5c365;
	border-top: 1px solid #e5c365;
	border-bottom: 1px solid #f9f0d7;
	border-right: 1px solid #f9f0d7;
}

.tabtoolbarsub ul li a:visited  {
}

.rebutton, .rebuttonblue, .rebuttonred, .rebuttongreen, .rebuttonhover
{
	BORDER: solid 0 #FFFFFF; BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/button1_sprite.png) no-repeat top left; HEIGHT: 24px; WIDTH: 79px; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma; FONT-SIZE: 11px; MARGIN: 0px; padding-top: 0px; padding-bottom: 2px; CURSOR: pointer;
	background-position: 0 0;
}

.rebutton:hover
{
	background-position: 0 -74px;
}

.rebutton { background-position: 0 0; }
.rebuttonblue:hover { background-position: 0 -74px; }
.rebuttongreen:hover { background-position: 0 -148px; }
.rebuttonhover { background-position: 0 -222px; }
.rebuttonred:hover { background-position: 0 -296px; }

.rebutton2, .rebuttondisabled2, .rebutton2default, .rebuttongray2, .rebuttonred2, .rebuttonblue2, .rebuttongreen2
{
	BORDER: solid 0 #FFFFFF; BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/button2_sprite.png) no-repeat top left; HEIGHT: 24px; WIDTH: 110px; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma; FONT-SIZE: 11px; MARGIN: 0px; padding-top: 4px; padding-bottom: 15px; vertical-align:middle; CURSOR: pointer;
}

.rebutton2default {
	background-position: 0 0;
}

.rebutton2default:hover
{
	background-position: 0 -74px;
}

.rebuttongray2
{
	background-position: 0 -222px;
}

.rebuttondisabled2
{
	background-position: 0 -148px;
}

.rebuttonred2
{
	background-position: 0 -444px;
}

.rebuttonred2:hover
{
	background-position: 0 -296px;
}

.rebuttonblue2
{
	background-position: 0 -74px;
}

.rebuttonblue2:hover
{
	background-position: 0 -296px;
}

.rebuttongreen2
{
	background-position: 0 -296px;
}


.settabletitlerow
{
	BACKGROUND: #FFFFFF url(<?php echo $this->scope["_themePath"];?>images/settabletitlebg.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	PADDING: 5px;
	CURSOR: pointer;
}

.settabletitlerowhover
{
	BACKGROUND: #80A9EA url(<?php echo $this->scope["_themePath"];?>images/settabletitlebghover.gif) REPEAT-X TOP LEFT;
	COLOR: red;
	FONT: 11px Verdana, Tahoma, Helvetica;
	PADDING: 5px;
	CURSOR: pointer;
}

.settabletitlerowmain
{
	BACKGROUND: #80A9EA url(<?php echo $this->scope["_themePath"];?>images/settabletitlebghover.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #d0eef8;
	BORDER-BOTTOM: 1px SOLID #99d9ee;
	PADDING: 5px;
}

.tabletitlerowtitle
{
	BACKGROUND: #fcfaf4 url(<?php echo $this->scope["_themePath"];?>images/tabletitlerowbackground.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #ddd6c7;
	BORDER-BOTTOM: 1px SOLID #d3c7b6;
	PADDING: 6px;
}

.settabletitlerowmain2
{
	BACKGROUND: #fcfaf4 url(<?php echo $this->scope["_themePath"];?>images/settabletitlebg.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #f5f0e8;
	BORDER-BOTTOM: 1px SOLID #ddd6c7;
	PADDING: 5px;
}

.settabletitlerowmain3
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/settabletitlebgdisabled.gif) REPEAT-X TOP LEFT;
	COLOR: #aeaeae;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #aeaeae;
	BORDER-BOTTOM: 1px SOLID #aeaeae;
	PADDING: 5px;
}

.settabletitlerowmain4
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/settabletitlebgsel.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #c0eae0;
	BORDER-BOTTOM: 1px SOLID #c0eae0;
	PADDING: 5px;
}

.settabletitlerowmain5
{
	BACKGROUND: #fcfaf4 url(<?php echo $this->scope["_themePath"];?>images/gridtabletitlebg.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #fcfaf4;
	BORDER-BOTTOM: 1px SOLID #ddd6c7;
	PADDING: 5px;
}

.topmenulinksdiv {
	display: block; height: 24px; OVERFLOW: hidden;
	BACKGROUND:  #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/menuitembg.gif) REPEAT-X TOP LEFT;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	PADDING-TOP: 0px;
	PADDING-LEFT: 0px;
	BORDER-BOTTOM: 1px SOLID #d3c7b6;
}

.topnavmenuitem {
CURSOR: pointer; float: left; height: 21px; margin: 0px; PADDING-TOP: 4px; PADDING-LEFT: 4px;BORDER-RIGHT: 1px SOLID #d5ccbe;
}

.topnavmenuitem #itemspanleft {
WIDTH: 2px; height: 21px;
}

.topnavmenuitem #itemspanright {
WIDTH: 2px; height: 21px;
}

.topnavselmenuitem {
CURSOR: pointer; float: left; height: 21px; margin: 0px; PADDING-TOP: 4px; PADDING-LEFT: 4px; BACKGROUND:  #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/menuhighlightbg.gif) REPEAT-X TOP LEFT; BORDER-RIGHT: 1px SOLID #c5bcae;
}

.topnavselmenuitem #itemspanleft {
WIDTH: 2px; height: 21px;
}

.topnavselmenuitem #itemspanright {
WIDTH: 2px; height: 21px;
}

.topnavmenuitem:hover {
COLOR: red; CURSOR: pointer; float: left; height: 21px; margin: 0px; PADDING-TOP: 4px; PADDING-LEFT: 4px; BACKGROUND:  #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/menuhighlightbg.gif) REPEAT-X TOP LEFT; BORDER-RIGHT: 1px SOLID #c5bcae;
}

.topnavmenuitem:hover #itemspanleft {
WIDTH: 2px; height: 21px;
}

.topnavmenuitem:hover #itemspanright {
WIDTH: 2px; height: 21px;
}


/**
* BEGIN DIALOG CSS
*/
.dialogcontainer {
	padding: 4px; background: #f8f4eb; border-bottom: 1px SOLID #efe8da; PADDING: 10px;
}

.dialogtitle {
	background: #FFFFFF; padding: 2px 8px 4px 30px; -moz-border-radius: 10px 10px 0 0; -webkit-border-radius: 10px 10px 0 0; border-radius: 10px 10px 0 0; font: 18px Calibri, \'Trebuchet MS\', Helvetica, Verdana, Arial, Helvetica;
}

.dialogtext {
	background: #FFFFFF; padding: 8px; -moz-border-radius: 0 0 10px 10px; -webkit-border-radius: 0 0 10px 10px; border-radius: 0 0 10px 10px;
}

.dialogok {
	position: relative; float: left; background: URL(<?php echo $this->scope["_themePath"];?>images/icon_dialogok.png); WIDTH: 32px; HEIGHT: 32px; LEFT: -5px; TOP: -5px;
}

.dialogokcontainer {
	border: 2px SOLID #91e375; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px;
}

.dialogalert {
	position: relative; float: left; background: URL(<?php echo $this->scope["_themePath"];?>images/icon_dialogalert.png); WIDTH: 32px; HEIGHT: 32px; LEFT: -5px; TOP: -5px;
}

.dialogalertcontainer {
	border: 2px SOLID #ffd459; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px;
}

.dialogerror {
	position: relative; float: left; background: URL(<?php echo $this->scope["_themePath"];?>images/icon_dialogerror.png); WIDTH: 32px; HEIGHT: 32px; LEFT: -5px; TOP: -5px;
}

.dialogerrorcontainer {
	border: 2px SOLID #ff598e; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px;
}

/**
* END DIALOG CSS
*/

iframe {
	border-width: 0px;
	height: 40px;
	WIDTH: 600px;
}

.tabborder
{
	BACKGROUND: #ffffff;
	color: #000000;
}

.row1
{
	BACKGROUND-COLOR: #fcfbf4;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.errorrow, .errordiv
{
	BORDER: 1px SOLID #e7bcbc;
	-moz-border-radius: 4px 4px 4px 4px;
	BACKGROUND-COLOR: #ffeef0;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.errordiv
{
	PADDING: 6px;
	MARGIN: 3px;
}

.row2
{
	BACKGROUND-COLOR: #ffffff;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.retborder
{
	background-color: #FFFFFF;
	color: #000000;
	border: 1px solid #efe8da;
}

.gridhighlightpage
{
	background-color: #FFFFFF;
	color: #666666;
	font: 11px Tahoma, Verdana;
	padding: 2px 4px 2px 4px;
	white-space: nowrap;
}
.gridhighlightpage a:link
{
	color: #666666;
	text-decoration: none;
}
.gridhighlightpage a:visited
{
	color: #666666;
	text-decoration: none;
}
.gridhighlightpage a:hover, .gridhighlightpage a:active
{
	color: red;
	text-decoration: none;
}

.gridnavpage
{
	background-color: #FFFFFF;
	color: #333333;
	font: 11px Tahoma, Verdana;
	padding: 2px 4px 2px 4px;
	white-space: nowrap;
}

.gridnavpageselected
{
	background-color: #fcfaf5;
	color: #000000;
	font: bold 11px Tahoma, Verdana;
	padding: 2px 4px 2px 4px;
	white-space: nowrap;
}

.gridrowitalic
{
	BACKGROUND-COLOR: #ffffff;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-STYLE: italic;
}

.rowcode
{
	BACKGROUND-COLOR: #ffffff;
	COLOR: #000000;
	FONT-SIZE: 14px;
	FONT-FAMILY: Consolas, Courier New, Verdana, Arial, Helvetica;
}

.gridrowcf
{
	BACKGROUND-COLOR: #FFF5F2;
	COLOR: #000000;
}

.gridrow1
{
	BACKGROUND-COLOR: #f2ebde;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.gridrow2
{
	BACKGROUND-COLOR: #ffffff;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.gridrow3
{
	BACKGROUND-COLOR: #f4ece0;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.gridrow4
{
	BACKGROUND-COLOR: #eee6d9;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
}

.tablerow1
{
	BACKGROUND-COLOR: #ffffff;
	COLOR: #000000;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	BORDER-BOTTOM: 1px SOLID #f2ebde;
	PADDING: 6px 4px 6px 4px;
}

.tablerow1_tr, .tablerowbase_tr
{
	BACKGROUND-COLOR: #ffffff;
}

.tablerowhighlight
{
	BACKGROUND-COLOR: #fff4d3;
}

.inputhasfocus {
}

.pointer {
	CURSOR: pointer;
}

.griddragdrop, .griddragdropsub
{
	BACKGROUND: #FFFFFF;
	CURSOR: move;
}

.gridtabletitlerow
{
	BACKGROUND: #FFFFFF url(<?php echo $this->scope["_themePath"];?>images/gridtabletitlebg.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #FFFFFF;
	BORDER-BOTTOM: 1px SOLID #d9cebc;
	PADDING: 5px;
	CURSOR: pointer;
}

.gridtabletitlerowsel
{
	BACKGROUND: #e2f8ff url(<?php echo $this->scope["_themePath"];?>images/gridtabletitlebgsel.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #FFFFFF;
	BORDER-BOTTOM: 1px SOLID #9eeaff;
	PADDING: 5px;
	CURSOR: pointer;
}

.gridtabletitlerowhover
{
	BACKGROUND: url(<?php echo $this->scope["_themePath"];?>images/gridtabletitlebgselhover.gif) REPEAT-X TOP LEFT;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #FFFFFF;
	BORDER-BOTTOM: 1px SOLID #9effe5;
	PADDING: 5px;
	CURSOR: pointer;
}

.gridcontentborder
{
	background: #efe8da;
	color: #FFFFFF;
}

.gridlayoutborder
{
/*	margin-left: 1px;*/
	background-color: #FFFFFF;
	color: #000000;
	float: left; position: relative;
}

.dashboardlayoutborder
{
	background-color: #f8f4eb;
	color: #000000;
	float: left; position: relative;
}

.gridirs
{
	COLOR: #61718C;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	FONT-WEIGHT: bold;
	BORDER: 1px SOLID #ddd1b8;
	MARGIN: 0px;
	MARGIN-LEFT: 2px;
	PADDING: 2px 2px 3px 2px;
	WIDTH: 303px;
	HEIGHT: 14px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_gridirs.gif) no-repeat;
	BACKGROUND-POSITION: 1px 1px;
	BACKGROUND-COLOR: #FFFFFF;
	PADDING-RIGHT: 18px;
	VERTICAL-ALIGN: middle;
}

.gridirsloading
{
	COLOR: #61718C;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	FONT-WEIGHT: bold;
	BORDER: 1px SOLID #ddd1b8;
	MARGIN: 0px;
	MARGIN-LEFT: 2px;
	PADDING: 2px 2px 3px 2px;
	WIDTH: 303px;
	HEIGHT: 14px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_gridirsloading.gif) no-repeat;
	BACKGROUND-POSITION: 1px 1px;
	BACKGROUND-COLOR: #FFFFFF;
	PADDING-RIGHT: 18px;
	VERTICAL-ALIGN: middle;
}

.paginationtoolbar {
/*	MARGIN-LEFT: 1px;*/
	BORDER-TOP: 1px SOLID #FFFFFF;
	BACKGROUND: #fcfbf5;
	PADDING-TOP: 3px;
	PADDING-BOTTOM: 3px;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	WIDTH: 100%;
	FONT-SIZE: 11px;
	HEIGHT: 22px;
	FLOAT: left;
	BORDER-BOTTOM: 1px SOLID #efe8da;
}

.massactionpanel {
	DISPLAY: none;
	BORDER-TOP: 1px SOLID #FFFFFF;
	WIDTH: 100%;
	FLOAT: left;
}

#gridtoolbar {
	BORDER-TOP: 1px SOLID #fffaf2;
	PADDING-LEFT: 3px;
	PADDING-BOTTOM: 4px;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	MARGIN-BOTTOM: 4px;
	OVERFLOW: none;
}

#widthwrapper {
	HEIGHT: 32px;
	BACKGROUND: #f2e9da url(<?php echo $this->scope["_themePath"];?>images/gridtoolbarbg.png) 50% 50% repeat-x;
/*	MARGIN-LEFT: 1px;*/
}

.gridsearchmode {
	BACKGROUND: #ffefbb;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER: 1px SOLID #bdac8e;
	PADDING: 4px;
	VERTICAL-ALIGN: middle;
	DISPLAY: block;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	MARGIN: 0px;
	MARGIN-RIGHT: 5px;
	FLOAT: left;
}

.gridtoolbarsubsearchmode {
	margin: 0px;
	padding: 0px;
	float: left;
	PADDING-TOP: 3px; PADDING-BOTTOM: 2px;
}

.gridtoolbarsubsearchmodesub {
	DISPLAY: inline;
	margin-top: 0.1em;
	PADDING-TOP: 3px; PADDING-BOTTOM: 2px;
	FLOAT: left;
}

.gridtoolbarsubsearch {
	margin: 0px;
	padding: 0px;
	float: left; margin-top: 0.1em;
	PADDING-TOP: 3px; PADDING-BOTTOM: 2px;
}

div#gridtoolbar ul {
	margin: 0px;
	padding: 0px;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	color: #333333;
	margin-top: 3px;
	display: block;
	line-style: none;
	padding-top: expression('0.25em');
}
div#gridtoolbar li {
	list-style-type: none;
	display: inline;
	margin: 0px;
	padding: 0px;
	line-style: none;
	line-height: 22px;
	VERTICAL-ALIGN: middle;
}

.gridtoolbarsub a  {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbarbuttonbg.gif) REPEAT-X TOP LEFT;
	border-right: 1px solid #ddd1b8;
	border-bottom: 1px solid #ddd1b8;
	border-top: 1px solid #FFFFFF;
	border-left: 1px solid #FFFFFF;
	text-decoration: none;
	MARGIN-LEFT: 3px;
	color: #333333;
	padding:0.25em 1em 4px 1em;
}

.gridtoolbarsub a:hover, #gridtoolbarsub a:active {
	text-decoration : none;
	color : #444444;
}

.gridtoolbarsub a:hover  {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbaritemhover.gif) REPEAT-X TOP LEFT;
	text-decoration: none;
	border-right: 1px solid #e5c365;
	border-bottom: 1px solid #e5c365;
	border-top: 1px solid #f9f0d7;
	border-left: 1px solid #f9f0d7;
}

.gridtoolbarsub a:active  {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbaritemhover.gif) REPEAT-X TOP LEFT;
	border-left: 1px solid #e5c365;
	border-top: 1px solid #e5c365;
	border-bottom: 1px solid #f9f0d7;
	border-right: 1px solid #f9f0d7;
}

.gridtoolbarsub a:visited  {
	BACKGROUND: #fcfaf5 url(<?php echo $this->scope["_themePath"];?>images/gridtoolbarbuttonbg.gif) REPEAT-X TOP LEFT;
	text-decoration: none;
	border-right: 1px solid #f9f0d7;
	border-bottom: 1px solid #f9f0d7;
	border-top: 1px solid #e2fff8;
	border-left: 1px solid #e2fff8;
}

.gridtoolbarnew {
	float: right; width: auto; text-align: right; padding-right: 5px;
}

div#gridlayout {display: table; border: 1px solid black; }
div#gridrow {display: table-row;}
div#gridcell {display: table-cell; border: 1px solid black; }

.rebarright
{
	FLOAT: right;
	TEXT-ALIGN: right;
}

.rebarirs
{
	HEIGHT: 30px;
	TEXT-ALIGN: right;
	PADDING-RIGHT: 5px;
}

.rebartopspacer
{
	BACKGROUND: #f1ede4 URL(<?php echo $this->scope["_themePath"];?>images/rebartopbg.gif) REPEAT-X TOP LEFT;
	HEIGHT: 4px;
	BORDER-TOP: 1px SOLID #d5cab8;
}

.menusectionextender {
	margin-top: 3px; float: right;
}

.menusectiondefault
{
	HEIGHT: 21px;
	BACKGROUND: #727172 url(<?php echo $this->scope["_themePath"];?>images/menusectiondefbg.gif);
	COLOR: #EAEAEA;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	CURSOR: pointer;
	BORDER-RIGHT: 1px SOLID #414142;
	BORDER-LEFT: 1px SOLID #a5a2a5;
}

.remenusectiondefault, .remenusectionwinapp
{
	BACKGROUND: #727172 url(<?php echo $this->scope["_themePath"];?>images/menusectiondefbg.gif);
	COLOR: #EAEAEA;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	CURSOR: pointer;
	BORDER-RIGHT: 1px SOLID #414142;
	BORDER-LEFT: 1px SOLID #a5a2a5;
}

.remenusectiondefault, .remenusectionwinapp, .remenusection1, .remenusection2, .remenusection3, .remenusection4
{
	float: left;
	height: 21px;
	text-align: center;
}

.remenusectiondefault .menutext, .remenusectionwinapp .menutext, .remenusection1 .menutext, .remenusection2 .menutext, .remenusection3 .menutext, .remenusection4 .menutext
{
	padding-top: 3px;
}

.remenusectiondefault:hover, .remenusectionwinapp:hover
{
	color: #FFFFFF;
}

.remenudefbg {
	BACKGROUND: #A5A2A5;
	WIDTH: 1px;
	FLOAT: left;
	HEIGHT: 21px;
}

.remenuwappbg {
	BACKGROUND: #A6A6A6;
}

.remenulinks
{
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	BACKGROUND: #727172 url(<?php echo $this->scope["_themePath"];?>images/remenulinksbg.gif);
	PADDING-TOP: 0px;
	PADDING-LEFT: 0px;
	BORDER-BOTTOM: 1px SOLID #efe8da;
}

/* Menu Color Sections */

.remenusection1, .remenusection2, .remenusection3, .remenusection4 {
	COLOR: #FFFFFF;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	FONT-WEIGHT: bold;
	CURSOR: pointer;
	BORDER-RIGHT: 1px SOLID #414142;
	BORDER-LEFT: 1px SOLID #a5a2a5;
}

.remenuline1, .remenuline2, .remenuline3, .remenuline4 {
	DISPLAY: block;
	HEIGHT: 1px;
	PADDING: 0px;
	MARGIN: 0px;
	BORDER: 0px;
}

.remenulinks1, .remenulinks2, .remenulinks3, .remenulinks4 {
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
}

/* BLUE */
.remenusection1
{
	BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/menusection1.gif);
}

.remenuline1
{
	BACKGROUND: #3663ab;
}
.remenulinks1
{
	BACKGROUND: #E5EEF9;
}

/* RED */
.remenusection2
{
	BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/menusection2.gif);
}
.remenuline2
{
	BACKGROUND: #b6473d;
}
.remenulinks2
{
	BACKGROUND: #F9E5E5;
}

/* PURPLE */
.remenusection3
{
	BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/menusection3.gif);
}
.remenuline3
{
	BACKGROUND: #6138a1;
}
.remenulinks3
{
	BACKGROUND: #ECE5F9;
}

/* GREEN */
.remenusection4
{
	BACKGROUND-IMAGE: url(<?php echo $this->scope["_themePath"];?>images/menusection4.gif);
}
.remenuline4
{
	BACKGROUND: #317525;
}
.remenulinks4
{
	BACKGROUND: #EDF3EB;
}

A:visited {
	COLOR: #000000; TEXT-DECORATION: none; outline: none;
}
A:hover {
	COLOR: red; TEXT-DECORATION: none; outline: none;
}
A:link {
	COLOR: #000000; TEXT-DECORATION: none; outline: none;
}

.bluelink:visited {
	COLOR: #277dc9; TEXT-DECORATION: none; outline: none;
}
.bluelink:hover {
	COLOR: red !important; TEXT-DECORATION: none; outline: none;
}
.bluelink:link {
	COLOR: #277dc9; TEXT-DECORATION: none; outline: none;
}

.widgetlinks:visited {
	COLOR: #5e5343; TEXT-DECORATION: none; outline: none; font-family: Trebuchet MS, Lucida Grande, Verdana, Arial, Helvetica, sans-serif; font-size: 18px;
}
.widgetlinks:hover {
	COLOR: #5e5343; TEXT-DECORATION: none; outline: none; font-family: Trebuchet MS, Lucida Grande, Verdana, Arial, Helvetica, sans-serif; font-size: 18px;
}
.widgetlinks:link {
	COLOR: #5e5343; TEXT-DECORATION: none; outline: none; font-family: Trebuchet MS, Lucida Grande, Verdana, Arial, Helvetica, sans-serif; font-size: 18px;
}

form
{
	MARGIN: 0px;
	PADDING: 0px;
}

.swiftbutton
{	BACKGROUND-COLOR: #FFFFFF;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER-STYLE: solid;
	BORDER-COLOR: #CCCCCC;
	BORDER-WIDTH: 2px;
}

.multi
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER: 1px SOLID #bdac8e;
	PADDING: 2px 2px 2px 2px;
	MARGIN: 0px;
	vertical-align: middle;
}

.swifttext, .swifttextautocompletelookup, .swifttextnumeric, .swifttextnumericsmall, .swifttextsearch, .swifttextnumeric2, .swifttextnumeric2small
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT;
	COLOR: #000000;
	BORDER: 1px SOLID #bdac8e;
	PADDING: 2px 2px 2px 2px;
	MARGIN: 0px;
	vertical-align: middle;
}

.swiftpassword
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT;
	COLOR: #666666;
	BORDER: 1px SOLID #bdac8e;
	PADDING: 2px 2px 2px 2px;
	MARGIN: 0px;
	vertical-align: middle;
}

.swifttextdisabled
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextdisabledbg.gif) REPEAT-X TOP LEFT;
	COLOR: #808080;
	BORDER: 1px SOLID #c3baa7;
	PADDING: 2px 2px 2px 2px;
	MARGIN: 0px;
	vertical-align: middle;
}

.swiftfielddisabled
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextdisabledbg.gif) REPEAT-X TOP LEFT;
	COLOR: #808080;
	BORDER: 1px SOLID #CCCCCC;
	PADDING: 2px 2px 2px 2px;
	vertical-align: middle;
}

.swifttextarea, .swifttextareawide
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT;
	COLOR: #000000;
	BORDER: 1px SOLID #bdac8e;
	padding: 2px 2px 2px 2px;
	vertical-align: middle;
}

.swifttextareawide {
	WIDTH: 100%;
}

.swiftcheckbox
{
	padding: 0px;
	margin: -5px;
	vertical-align: middle;
}

.swiftselect
{
	BORDER: 1px SOLID #bdac8e;
	BACKGROUND-COLOR: #FFFFFF;
	COLOR: #000000;
	margin: 0px;
	padding: 1px;
	vertical-align: middle;
	Z-INDEX: 11;
}

.swiftselect optgroup
{
	FONT: inherit;
	FONT-WEIGHT: bold;
}

.swifttextfile
{
	HEIGHT: 26px !important;
}

.swifttextlarge
{
	BORDER: 1px SOLID #bdac8e;
	BACKGROUND-COLOR: #FFFFFF;
	COLOR: #000000;
	margin: 0px;
	padding: 2px;
	vertical-align: middle;
	HEIGHT: 16px;
}

.swifttimer
{	BACKGROUND-COLOR: #FFFFFF;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER-STYLE: solid;
	BORDER-COLOR: #FFFFFF;
	BORDER-WIDTH: 0px;
	WIDTH: 50px;
	TEXT-ALIGN: right;
	PADDING-RIGHT: 5px;
}

.swiftselectnotify
{
	BORDER: 2px dashed red;
}

.swifttext, .swifttextsearch, .swifttextautocompletelookup, .swifttextnumeric, .swiftpassword, .swifttextdisabled, .swiftfielddisabled, .swifttextarea, .swifttextareawide, .swiftselect, .swifttextlarge, .swifttextareanotes1, .swifttextareanotes2, .swifttextareanotes3, .swifttextareanotes4, .swifttextareanotes5
{
	FONT-FAMILY: Calibri, Verdana, Tahoma, Helvetica;
	FONT-SIZE: 1.4em;
}

.swifttextnumericsmall, .swifttextnumeric2small {
	FONT: 10px "lucida grande", Tahoma, Verdana, Arial, Helvetica;
	FONT-WEIGHT: bold;
}

.swifttextsearch {
	WIDTH: 185px !important;
	MARGIN: 6px 4px 4px 0px;
}

.itemrow, .itemrowunlinked
{
	PADDING: 2px;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	BORDER-BOTTOM: 1px SOLID #fcfaf5;
	BORDER-TOP: 1px SOLID #FFFFFF;
	CURSOR: pointer;
}

.itemrowunlinked
{
	CURSOR: default;
}

.hlrow, itemrow:hover
{
	PADDING: 2px;
	BACKGROUND-COLOR: #fcfaf5;
	COLOR: red;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	BORDER-BOTTOM: 1px SOLID #efe8da;
	BORDER-TOP: 1px SOLID #FFFFFF;
	CURSOR: pointer;
}

.tabletitle
{
	COLOR: #313131;
    FONT-SIZE: 1.4em;
    FONT-FAMILY: Calibri, Arial, Verdana, Helvetica, sans-serif;
	FONT-WEIGHT: bold;
	PADDING-BOTTOM: 2px;
}

.tabledescriptionext
{
	COLOR: #313131;
    FONT-SIZE: 1.4em;
    FONT-FAMILY: Calibri, Verdana, Arial, Helvetica;
	PADDING: 8px;
}

.tabledescriptionbig
{
	COLOR: #313131;
    FONT-SIZE: 1.4em;
    FONT-FAMILY: Calibri, Verdana, Arial, Helvetica;
}

.tabledescription
{
	COLOR: #000000;
    FONT-SIZE: 11px;
    FONT-FAMILY: Verdana, Arial, Helvetica;
}

.rowerror
{
	background-color: #E05353;
	color: #FFFFFF;
    FONT-SIZE: 12px;
    FONT-FAMILY: Verdana, Arial
}

.searchrule1
{
	BACKGROUND: #fbfaf5 url(<?php echo $this->scope["_themePath"];?>images/searchrulebg.gif) REPEAT-X TOP LEFT;
	BORDER: 1px SOLID #efe8da; COLOR: #333333; WIDTH: 100%;-moz-border-radius: 6px 6px 6px 6px; MARGIN-BOTTOM: 4px;
}

.searchrule0
{
	BACKGROUND: #eef6fc url(<?php echo $this->scope["_themePath"];?>images/searchrulebg2.gif) REPEAT-X TOP LEFT;
	BORDER: 1px SOLID #c1d8f7; COLOR: #333333; WIDTH: 100%;-moz-border-radius: 6px 6px 6px 6px; MARGIN-BOTTOM: 4px;
}

.searchrule2
{
	BACKGROUND: #fcd2d2 url(<?php echo $this->scope["_themePath"];?>images/searchrulebg3.gif) REPEAT-X TOP LEFT;
	BORDER: 1px SOLID #f4c2c2; COLOR: #333333; WIDTH: 100%;-moz-border-radius: 6px 6px 6px 6px; MARGIN-BOTTOM: 4px;
}

.rowhighlightpointer
{
	BACKGROUND: #ffefbb;
	COLOR: red;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	VERTICAL-ALIGN: middle;
	CURSOR: pointer;
}

.rowhighlight
{
	BACKGROUND: #ffefbb;
	color: #666666;
	BORDER-TOP: 1px SOLID #e5c365;
	BORDER-BOTTOM: 1px SOLID #e5c365;
	FONT-SIZE: 11px;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	VERTICAL-ALIGN: middle;
}

.rowselect
{
	BACKGROUND: #ffefbb;
	COLOR: #333333;
	FONT: 11px Verdana, Tahoma, Helvetica;
	BORDER-TOP: 1px SOLID #FFFFFF;
	BORDER-BOTTOM: 1px SOLID #ffdf78;
	VERTICAL-ALIGN: middle;
}

.disabledtext
{
	COLOR: #CCCCCC;
}

.smalltext
{
	FONT-SIZE: 11px;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial;
	VERTICAL-ALIGN: middle;
}

.searchighlight
{
    COLOR: #000000;
	BACKGROUND: #FFFF66;
    FONT: bold 12px Verdana, Arial;
}

.logintext
{
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	BORDER: 1px SOLID #bdac8e;
	WIDTH: 170px;
	PADDING: 2px 2px 3px 2px;
	MARGIN: 0px;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_loginuser.gif) no-repeat;
	BACKGROUND-POSITION: 0px 0px;
	BACKGROUND-COLOR: #FFFFFF;
	PADDING-LEFT: 22px;
	VERTICAL-ALIGN: middle;
}

.loginpassword
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Tahoma, Helvetica;
	FONT-SIZE: 11px;
	FONT-WEIGHT: bold;
	BORDER: 1px SOLID #bdac8e;
	WIDTH: 190px;
	PADDING: 2px 2px 2px 2px;
	MARGIN: 0px;
	VERTICAL-ALIGN: middle;
}

html, body {
	background-color: #FFFFFF;
	color: #000000;
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 0px 0px 0px 0px;
	height: 100%;
	//min-width: 1020px;
}

.navtitle
{
    FONT-SIZE: 11px;
    COLOR: #454545;
    FONT-FAMILY: Verdana, Arial;
	VERTICAL-ALIGN: middle;
	HEIGHT: 20px;
	WIDTH: 100%;
}


.navsub {
	padding: 3px 0px 4px 4px;
}

.staffnavbar {
background: #ebddca url(<?php echo $this->scope["_themePath"];?>images/renavbarbg.gif) no-repeat bottom left;
}

#dashboardcontainer {
	BACKGROUND: #fff1c8 url(<?php echo $this->scope["_themePath"];?>images/dashboardbg.gif) no-repeat top left;
	HEIGHT: 79px;
	WIDTH: 100%;
	overflow: hidden;
}

#dashboardtitle {
	padding: 0px 0px 0px 10px;
	COLOR: #FFFFFF;
	font: 72px Trebuchet MS, Verdana, Arial, Helvetica;
	WIDTH: 300px;
	letter-spacing: -4.8px;
	margin-bottom: -0.28em;
}

.BarItem
{
	WIDTH: 100%;
	HEIGHT: 21px;
	PADDING: 0 0 0 0;
	BACKGROUND-COLOR: #FFFFFF;
	CURSOR: pointer;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
}

.BarItem:hover
{
	BACKGROUND: #f5efe4 !important;
	COLOR: red;
}
.BarItemActive
{
	COLOR: #CE1707 !important;
}

.BarOption
{
	WIDTH: 100%;
	HEIGHT: 25px;
	BORDER-TOP: #F0EADE 1px SOLID;
	BACKGROUND: #FFFDF8 URL(<?php echo $this->scope["_themePath"];?>images/icon_rightarrowblue.gif) no-repeat 9px 8px;
	CURSOR: pointer;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
}

.BarOptionPad
{
	PADDING: 5px 0 2px 22px;
}

.BarOption:hover
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/icon_rightarrowred.gif) no-repeat 9px 8px !important;
	COLOR: red;
}

.BarOptionActive
{
	BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/icon_rightarrowred.gif) no-repeat 9px 8px !important;
	COLOR: #CE1707 !important;
}

.BarOptions
{
	PADDING: 0px;
	DISPLAY: none;
}

.BarOptionsDisplay
{
	PADDING: 0px;
	DISPLAY: inline;
}

.swiftfieldset { margin-bottom: 6px; padding: 4 4 4 5; color: #333333; border: 1px solid #CCCCCC; -moz-border-radius: 4px 4px 4px 4px;}
.swiftfieldset, .swiftfieldset td, .swiftfieldset p, .swiftfieldset li { FONT: 11px Verdana, Tahoma, Helvetica; }

.tickettextred
{
	COLOR: red;
	DISPLAY: inline;
}
.tickettextgreen
{
	COLOR: #8BB467;
	DISPLAY: inline;
}
.tickettextblue
{
	COLOR: #5C83B4;
	DISPLAY: inline;
}
.tickettextorange
{
	COLOR: #FF8C5A;
	DISPLAY: inline;
}
#printticketcontent {
	FONT-FAMILY: Candara, Verdana, Arial, Helvetica;
	PADDING: 8px;
	COLOR: #000000;
}

#printticketcontent .headingtext
{
	font-weight:bold;
    FONT-SIZE: 20px;
}
#printticketcontent .titletext
{
    FONT-SIZE: 14px;
}
#printticketcontent .ticketpostleft
{
	FLOAT: left;
	PADDING: 10px;
    FONT-SIZE: 12px;
}
#printticketcontent .ticketpostright
{
	WIDTH: 80%;
	FLOAT: left;
	PADDING: 10px;
	FONT-SIZE: 12px;
}
#printticketcontent .clearer
{
	clear:both;
}
#printticketcontent .ticketprinthr {
	margin-bottom: 6px;
	height: 1px;
	color: #cfcfcf;
	background-color: #cfcfcf;
}<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>