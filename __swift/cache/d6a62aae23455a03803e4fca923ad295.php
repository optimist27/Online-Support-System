<?php
ob_start(); /* template body */ ?>body  { margin: 0; padding: 0; background: url("<?php echo $this->scope["_themePath"];?>images/mainbackground.gif") white; FONT-FAMILY: verdana, arial, helvetica, sans-serif; }
.bodymain { min-width: 1020px; }
#main { background-color: white; margin: 0.8em; border: 1px solid #cdc6b6; position: relative; clear: both; }

label { cursor: pointer; }

a:visited { COLOR: #333333; TEXT-DECORATION: none; outline: none; }
a:hover { COLOR: red !important; TEXT-DECORATION: none; outline: none; }
a:link { COLOR: #333333; TEXT-DECORATION: none; outline: none; }

.bluelink:visited { color: #277dca; TEXT-DECORATION: none; outline: none; }
.bluelink:hover { COLOR: red !important; TEXT-DECORATION: none; outline: none; }
.bluelink { color: #277dca !important; font-family: Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 12px; font-weight: bold; outline: none; }

.redtext { COLOR: red; }
.graytext { COLOR: #333333; }

.chatlink:visited { COLOR: #277dc9; TEXT-DECORATION: none; outline: none; }
.chatlink:hover { COLOR: red !important; TEXT-DECORATION: none; outline: none; }
.chatlink:link { COLOR: #277dc9; TEXT-DECORATION: none; outline: none; }

.smalltext { font-size: 11px; font-family: Verdana, Tahoma, sans-serif; }
.linkedselectcontainer { PADDING: 4px 0 0 20px;	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/linkdownarrow_blue.gif) no-repeat 0 10px; }

.searchboxcontainer { border: 4px SOLID rgba(204, 204, 204, 0.6); -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; }
.searchbox { border: 1px SOLID #cccccc; }
.searchbuttoncontainer { float: right; height: 35px; vertical-align: top; }
.searchbutton { -moz-border-radius: 7px 7px 7px 7px; width: 70px; height: 15px; -webkit-border-radius: 7px 7px 7px 7px; border-radius: 7px 7px 7px 7px; background: #7bc17a; color: white !important; display: inline-block; font-size: 11px; font-weight: bold; padding: 6px 12px 6px 12px; text-decoration: none; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2); margin: 4px 5px 0px 0px; CURSOR: pointer; }
.searchbutton:hover { background: #88cc85; color: white !important; }
.searchbutton span { background: URL(<?php echo $this->scope["_themePath"];?>images/searchpointer.png); display: inline; float: right; margin: 1px 0 0 5px; height: 13px; width: 12px; }
.searchinputcontainer { height: 35px; outline: none; display: inline-block; width: 80%; }
.searchquery { width: 100%; margin: 1px 0 0 0; background: url(<?php echo $this->scope["_themePath"];?>images/icon_search.png) no-repeat 8px 6px; padding: 5px 6px 7px 30px; border: 0px; color: #d5d5d5; font-size: 18px; font-family: 'Lucida Grande','Helvetica Neue',Helvetica,Arial,Verdana,sans-serif; height: 20px; }
.searchqueryactive { color: #666666 !important; }

#topbanner { position: relative; height: 5em; } /* if you don't manually set this height, ie gets the weirdest bug ever: the .widgetrow a:hover rule triggers the logo moving ~10 px left, for no apparent reason. suppressing that :hover rule or setting this height removes the effect. */
.topbannerchat { margin-top: 8px; float: left; }
#topbanneravatarcontainer { float: right; width: 100px; height: 100px; }
#logo { margin: 0.3em 0 0.3em 0.3em; }

#toptoolbar               { margin: 0; padding: 0; background: #6895ab url("<?php echo $this->scope["_themePath"];?>images/navbarbackground.png") repeat-x; font-size: 70%; width: 100%; border-top: 1px solid #40738b; position: relative; color: #333; float: left; clear: both; }
#toptoolbar a             { color: white; font-weight: bold; font-family: 'trebuchet ms', verdana, helvetica, sans-serif; font-size: 16px; text-decoration: none; text-shadow:0 1px 0 rgba(0, 0, 0, 0.6); }
#toptoolbarrightarea      { float: right; display: inline-block; margin-top: 0.2em; margin-right: 0.4em; height: 100%; }
#toptoolbarrightareainset { display: inline-block; }
#toptoolbar select        { border: 1px solid #cdc2ab; font-family: verdana, tahoma, sans-serif; font-size: 1em; margin: 5px 5px 0 0; }

#toptoolbarlinklist { margin: 0; padding: 0; }
#toptoolbarlinklist ul         {  }
#toptoolbarlinklist li         { list-style-type: none; display: inline-block; float: left; margin: 0.2em 0 0 .8em; padding: 0; clear: none; }
#toptoolbarlinklist li:hover   { background: url("<?php echo $this->scope["_themePath"];?>images/topbarhoverarrow.png") no-repeat bottom center transparent; }
#toptoolbarlinklist li.current { background: url("<?php echo $this->scope["_themePath"];?>images/topbarcurrentarrow.png") no-repeat bottom center transparent; }

#leftloginsubscribebox, .leftnavboxbox { margin: 10px 0 10px 10px; }
#leftlivechatbox                           { text-align: center; float: left; margin-left: 17%; padding-top: 6px;}
#leftloginbox, #leftsubscribebox                              { border: solid #cdc6b6; border-width: 0 1px 1px 1px; }
#leftloginbox .inputframe, #leftsubscribebox .inputframe                  { vertical-align: middle; }

#leftloginbox .maitem,  #leftsubscribebox .maitem { padding: 0.5em 0.5em 0.5em 25px; vertical-align: middle; font-size: 70%; border-bottom: 1px solid #ddddc7; border-top: 1px solid #ffffff; background-color: #f8f4eb; }
#leftloginbox .maitem:hover,  #leftsubscribebox .maitem:hover { background-color: #ffefbb; border-bottom: 1px solid #e5c365; cursor: pointer; }

#leftloginbox .maprofile                  { background: #f8f4eb URL(<?php echo $this->scope["_themePath"];?>images/icon_myprofile.gif) no-repeat 4px 4px; }
#leftloginbox .maorganization             { background: #f8f4eb URL(<?php echo $this->scope["_themePath"];?>images/icon_userorganization.png) no-repeat 4px 4px; }
#leftloginbox .machangepassword             { background: #f8f4eb URL(<?php echo $this->scope["_themePath"];?>images/icon_lock.gif) no-repeat 4px 4px; }
#leftloginbox .mapreferences              { background: #f8f4eb URL(<?php echo $this->scope["_themePath"];?>images/icon_preferences.gif) no-repeat 4px 4px; }
#leftloginbox .mabilling              { background: #f8f4eb URL(<?php echo $this->scope["_themePath"];?>images/icon_creditcards.png) no-repeat 4px 4px; }
#leftloginbox .malogout              { border-bottom: none !important; background: #f8f4eb URL(<?php echo $this->scope["_themePath"];?>images/icon_logout.png) no-repeat 4px 4px; }

#leftloginbox input.loginstyled, input.loginstyledlabel            { width: 98%; background: white url("<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif") repeat-x top left; border: 1px solid #cdc2ab; padding: 2px; margin: 1px; font-size: 70%; font-family: Verdana, Tahoma, sans-serif; }
#leftloginbox input.loginstyledlabel            { color: #878787; }
#leftloginbox #leftloginboxrememberme      { width: 1.5em; margin: 0; padding: 0; vertical-align: middle; }
#leftloginboxremembermetext                { font-size: 70%; vertical-align: middle; }

#leftsubscribebox input.emailstyled, input.emailstyledlabel            { width: 98%; background: white url("<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif") repeat-x top left; border: 1px solid #cdc2ab; padding: 2px; margin: 1px; font-size: 70%; font-family: Verdana, Tahoma, sans-serif; }
#leftsubscribebox input.emailstyledlabel            { color: #878787; }

.leftnavboxtitle       { position: relative; }
.leftnavboxtitleleftgap { background: url("<?php echo $this->scope["_themePath"];?>images/navboxtl.gif") no-repeat top left; display: inline-block; width: 3px; margin: 0; padding: 0; height: 1.5em; }
.leftnavboxtitlebulk   { background: url("<?php echo $this->scope["_themePath"];?>images/navboxtr.gif") no-repeat top right; position: absolute; left: 3px; right: 0; height: 1.5em; vertical-align: middle; }
.leftnavboxtitletext   { background: url("<?php echo $this->scope["_themePath"];?>images/doublearrowsnav.gif") no-repeat 2px 2px; padding-left: 1.7em; padding-top: 0; font-size: 11px; font-family: verdana, arial, helvetica, sans-serif; vertical-align: middle; }

.leftnavboxcontent         { border: 1px solid #cdc6b6; }
.leftnavboxcontent a       { display: block; text-decoration: none; color: black; font-family: Verdana, Tahoma, sans-serif; font-size: 11px; border-bottom: 1px solid #f5f5f5; text-indent: 20px; padding: 0.375em; background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_folderyellow.gif"); background-repeat: no-repeat; background-position: 0.375em 0.25em; line-height: 140%; }
.leftnavboxcontent a:hover { background-color: #fff8e9; color: #476ca4; }

#toptoolbarlinklist a { display: inline-block; border: 0; padding: 0.3em 0.7em 0.6em 2.3em; margin: 0; background-position: 14px 0.45em; background-repeat: no-repeat; }

a.toptoolbarlink           { background-image: url("<?php echo $this->scope["_themePath"];?>images/space.gif");}
a.toptoolbarlink:hover           { color: #fff6cf !important; text-shadow:0 1px 0 rgba(0, 0, 0, 1) !important; }

#maincore        { position: relative; padding: 0; clear: both; width:100%; }
#maincoreleft    { float: left; left: 0px; width: 14em; height: 100%; }
#maincorecontent { margin-left: 14.5em; height: 100%; padding: 0.75em; }

#coresearchinput { vertical-align: middle; margin: 3px; padding: 1px 0 0 23px; border: 1px solid #40738b; height: 23px; color: #285063; font-family: calibri, candara, verdana, tahoma, sans-serif; font-size: 1.4em; width: 280px; background: url("<?php echo $this->scope["_themePath"];?>images/icon_search.gif") no-repeat 3px 3px white; vertical-align: middle; }

#breadcrumbbar        { border: 1px solid #cdc6b6; font-size: 11px; }
.breadcrumb           { background: white url("<?php echo $this->scope["_themePath"];?>images/breadcrumbbg.png") no-repeat right center; color: #666; display: inline-block; padding: 0.4em 1em 0.5em 0.5em; }
.breadcrumb:hover     { background: white url("<?php echo $this->scope["_themePath"];?>images/breadcrumbbghover.png") no-repeat right center; }
.breadcrumb.lastcrumb { font-weight: bold; background-image: url("<?php echo $this->scope["_themePath"];?>images/breadcrumbbghover.png");}

#bottomfooter   { text-align: center; margin-top: 2em; clear: both; font-size: 70%; }
.bottomfooterpadding   { padding: 4px 4px 8px 4px; }
#bottomfooter a { text-decoration: none; color: #333;}

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
	FONT: 11px Verdana, "lucida grande", Tahoma, Arial, Helvetica;
}

#corewidgetbox { margin-top: 2em; margin-bottom: 1.5em; padding-left: 3px; }

.widgetrow         { width: 100%; position: relative;}
.widgetrowitem       { DISPLAY: block; CURSOR: pointer; width: 240px; margin: 0 1.5em 1em 0; clear: none; text-decoration: none; display: inline-block; vertical-align: middle; -moz-border-radius: 7px; -webkit-border-radius: 7px; border: 1px solid #c9cfd7; background: #fcfaf4; padding: 0.8em 1em 0.8em 0.3em; -moz-box-shadow: 0.05em 0.05em 0.3em 0.01em #dedede; -webkit-box-shadow: 0.05em 0.05em 0.3em 0.01em #dedede; box-shadow: 0.05em 0.05em 0.3em 0.01em #dedede;}
.widgetrowitem:focus { outline:none; background-color:#eee; }
.widgetrowitem:hover { background-color: #f9fde9; border-color: #b7d4ae; }
.widgetrow a .widgetitemtitle   {  }

.defaultwidget       { background-image: url("<?php echo $this->scope["_themePath"];?>images/space.gif"); }

.widgetrow a { width: 180px; padding: 10px 1em 18px 2.8em; margin: 0 1.5em 1em 0; background-repeat: no-repeat; background-position: 9px 7px; color: #277DC9; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; }
.widgetrow a:hover { color: #277DC9 !important; text-shadow:0 1px 0 rgba(239, 243, 222, 1) !important;}

#leftloginsubscribeboxlogintab        .tabtext { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_tabuser.gif"); }
#leftloginsubscribeboxsubscribetab    .tabtext { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_tabmail.gif"); }

.tabrow  { background: url("<?php echo $this->scope["_themePath"];?>images/tabborderpx.png") repeat-x bottom left; margin: 0; padding: 0; }
.tabtext { padding: 0 1em 0 2em; background-repeat: no-repeat; background-position: 0.25em 0; }

.atab { display: inline-block; clear: none; margin: 0; padding: 0; height: 100%; text-decoration: none; color: #333; font-weight: bold; font-size: 11px; font-family: verdana, candara, sans-serif; cursor: pointer; }

.atab.inactive, .atab.inactive { background: url("<?php echo $this->scope["_themePath"];?>images/tabborderpx.png") repeat-x bottom left; margin: 0; padding: 0; color: #a0947b; }
.atabbasic { cursor: inherit !important; }

.tableftgap { border-bottom: 1px solid white; background-image: url("<?php echo $this->scope["_themePath"];?>images/activetab_left.gif"); background-repeat: no-repeat; background-position: top right; width: 3px; display: inline-block; padding: 5px 0 4px 0; margin: 0 0 0 5px; height: 100%; }
.tabbulk    { border-bottom: 1px solid white; background-image: url("<?php echo $this->scope["_themePath"];?>images/activetab_right_bulk.gif"); background-repeat: no-repeat; background-position: top right; display: inline-block; padding: 5px 3px 4px 0; margin: 0; height: 100%; }
.tabbulk:hover { color: black !important; }

.inactive .tableftgap { background-image: url("<?php echo $this->scope["_themePath"];?>images/inactivetab_left.gif");       border-bottom: 1px solid #cdc6b6; }
.inactive .tabbulk    { background-image: url("<?php echo $this->scope["_themePath"];?>images/inactivetab_right_bulk.gif"); border-bottom: 1px solid #cdc6b6; }

:hover.inactive .tableftgap { background-image: url("<?php echo $this->scope["_themePath"];?>images/hoverinactivetab_left.gif"); }
:hover.inactive .tabbulk    { background-image: url("<?php echo $this->scope["_themePath"];?>images/hoverinactivetab_right_bulk.gif"); color: black; }

.zebraeven { background-color: #fefefe; }
.zebraodd  { background-color: #f7f5e7; }

.inputframe { padding: 0.25em 0.5em 0.25em 0.25em; }

.switchingpanel        { display: none; }
.switchingpanel.active { display: block; }

.vdivider { margin: 0.4em 0.4em; height: 0px; border: solid #ddddc7; border-width: 1px 0 0 0; }

.customfieldrequired { COLOR: red; MARGIN-LEFT: 6px; }

#logintext { float:left; font-size: 70%; margin-top: 0.75em; margin-left: 0.7em; }

#loginsubscribebuttons { text-align: right; display: block; }

.rebutton, .rebuttonblue, .rebuttonred { border: 0 solid white; background: url("<?php echo $this->scope["_themePath"];?>images/button1_sprite.png") no-repeat top left; background-position: 0 0; height: 24px; width: 79px; color: black; font-family: verdana, tahoma, sans-serif; font-size: 11px; margin: 5px 5px 5px 0; padding: 4px 0 15px 0; vertical-align: middle; cursor: pointer; }

.infotextcontainer { FONT-SIZE: 12px; FONT-STYLE: italic; }

.sprite-button1 { background-position: 0 0; }
.sprite-button1blue { background-position: 0 -74px; }
.sprite-button1green { background-position: 0 -148px; }
.sprite-button1hover { background-position: 0 -222px; }
.sprite-button1red { background-position: 0 -296px; }

.rebuttonblue { background-position: 0 -74px; }
.rebuttonred { background-position: 0 -296px; }
.rebuttonblue:hover { background-position: 0 -148px; }
.rebuttonred:hover  { background-position: 0 -148px; }
.rebutton:hover { background-position: 0 -148px; }
.sprite-buttonwide { background-position: 0 0; }
.sprite-buttonwidehover { background-position: 0 -95px; }
.sprite-buttonwide2 { background-position: 0 0; }
.sprite-buttonwide2hover { background-position: 0 -86px; }

.rebuttonwide2 { border: 0 solid white; background: url("<?php echo $this->scope["_themePath"];?>images/buttonwide2_sprite.png") no-repeat top left; background-position: 0 0; height: 36px; width: 95px; color: #333333; font-family: candara, trebuchet ms, tahoma, verdana, tahoma, sans-serif; font-size: 16px; font-weight: bold; margin: 5px 5px 5px 0; padding: 5px 0 10px 0; vertical-align: middle; cursor: pointer; }
.rebuttonwide2:hover { background-position: 0 -86px; }


.datecontainerparent { WIDTH: 54px; HEIGHT: 88px; }

.monthholder { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/calendartop.gif) no-repeat; DISPLAY: block; TEXT-ALIGN: center; VERTICAL-ALIGN: middle; PADDING: 0px; COLOR: #FFFFFF; FONT: bold 11px Verdana,Arial,Helvetica; WIDTH: 54px; HEIGHT: 22px; text-shadow:0 1px 0 rgba(112, 165, 232, 0.5); }

.monthsub { PADDING-TOP: 4px; }

.dateholder { BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/calendarbottom.gif) no-repeat; DISPLAY: block; TEXT-ALIGN: center; VERTICAL-ALIGN: middle; PADDING: 0px; COLOR: #555555; FONT: 10px Verdana,Arial,Helvetica; WIDTH: 54px; HEIGHT: 66px; }

.datesub { PADDING-TOP: 6px; PADDING-BOTTOM: 6px; }

.datecontainer { FONT: 28px Trebuchet MS, Calibri, Verdana, Arial, Helvetica; padding-top: 3px; }

.boxcontainer { margin: 16px 0 16px 0; padding: 10px; BACKGROUND: #F2F2EB; -moz-border-radius: 12px 12px 0 0; -webkit-border-radius: 12px 12px 0 0; border-radius: 12px 12px 0 0; }

.boxcontainerlabel { font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; font-weight: bold; color: #4e4e4e; margin-bottom: 8px; TEXT-SHADOW: 0 1px 0 rgba(255, 255, 255, 0.85); }

.boxcontainercontent { border: 2px SOLID #e2e2d6; background: white; padding: 10px; font-size: 12px;}

.boxcontainercontenttight { border: 2px SOLID #e2e2d6; background: white; font-size: 12px; }


.hlineheader { width: 100%; margin: 0; padding: 0; white-space: nowrap; color: #277dca; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia,serif; text-decoration: none; font-size: 14px; font-weight: none; }
.hlineheader th { margin: 0; padding: 0 8px 0 0; }
.hlineheader td { font-size: 50%; margin: 0; padding: 0; }
td.hlinelower { border-top: 1px solid #ececec; width: 100%; }
.hlinegray { color: #626262 !important; }


.subcontent { padding: 4px 0px 4px 4px; }
.captchaholder { padding: 4px 0 4px 0; }

.dialogerror { display: none; background-color: #ff969b; -moz-border-radius: 6px; -webkit-border-radius: 6px; padding: 6px; margin: 16px 0 16px 0; }
.dialogerrorsub { border: 1px solid #dfdfd3; padding: 2px; background: white; }
.dialogerrorcontent { border: 1px solid #dfdfd3; padding: 6px 6px 6px 34px; background: white; color: #4e4e4e; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia,serif; text-decoration: none; font-size: 16px; font-weight: bold; background: URL(<?php echo $this->scope["_themePath"];?>images/icon_error.png) no-repeat 4px 2px;}

.dialoginfo { display: none; background-color: #b3eab8; -moz-border-radius: 6px; -webkit-border-radius: 6px; padding: 6px; margin: 16px 0 16px 0; }
.dialoginfosub { border: 1px solid #dfdfd3; padding: 2px; background: white; }
.dialoginfocontent { border: 1px solid #dfdfd3; padding: 6px 6px 6px 38px; background: white; color: #4e4e4e; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia,serif; text-decoration: none; font-size: 16px; font-weight: bold; background: URL(<?php echo $this->scope["_themePath"];?>images/icon_info.png) no-repeat 4px 0px;}

/*
* Begin SWIFT General CSS
*/

.error { BORDER: 1px dotted red !important; background-image: none !important; background: #ffeef0 !important; DISPLAY: block; MARGIN-TOP: 5px; PADDING: 4px; }

.swifttexterror { BORDER: 1px dotted red !important; background-image: none !important; background: #ffeef0 !important; }
.swifttext { WIDTH: 300px; BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; BORDER: 1px SOLID #cdc2ab; PADDING: 2px 2px 2px 2px; MARGIN: 0px; vertical-align: middle; }
.swifttextsmall { WIDTH: 80px; BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; BORDER: 1px SOLID #cdc2ab; PADDING: 4px 4px 4px 4px; MARGIN: 0px; vertical-align: middle; }
.swifttextlarge { WIDTH: 300px; BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; BORDER: 1px SOLID #cdc2ab; PADDING: 4px 4px 4px 4px; MARGIN: 0px; vertical-align: middle; }
.swifttextwide { WIDTH: 100%; BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; BORDER: 1px SOLID #cdc2ab; PADDING: 4px 4px 4px 4px; MARGIN: 0px; vertical-align: middle; }
.swifttextdisabled { BACKGROUND-COLOR: #ddd6c7; COLOR: #808080; BORDER: 1px SOLID #c3baa7; PADDING: 2px 2px 2px 2px; vertical-align: middle; }
.swifttextarea { BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; BORDER: 1px SOLID #cdc2ab; padding: 2px 2px 2px 2px; vertical-align: middle; WIDTH: 550px;}
.swiftselect { BORDER: 1px SOLID #cdc2ab; BACKGROUND-COLOR: #FFFFFF; COLOR: #000000; margin: 0px; padding: 1px; vertical-align: middle; Z-INDEX: 11; }
.swifttextareawide { WIDTH: 100%; BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; BORDER: 1px SOLID #cdc2ab; padding: 2px 2px 2px 2px; vertical-align: middle; }
.rebuttonwide { border: 0 solid white; background-image: url("<?php echo $this->scope["_themePath"];?>images/buttonwide.gif"); background-repeat: no-repeat; height: 45px; width: 79px; color: black; font-family: verdana, tahoma, sans-serif; font-weight: bold; font-size: 11px; margin: 5px 5px 5px 0; padding: 4px 0 12px 0; vertical-align: middle; cursor: pointer; }
.rebuttonwide:hover { background-image: url("<?php echo $this->scope["_themePath"];?>images/buttonwidehover.gif"); }
.errorrow { PADDING: 6px; BORDER: 1px SOLID #e7bcbc; -moz-border-radius: 4px 4px 4px 4px; BACKGROUND-COLOR: #ffeef0; COLOR: #000000; FONT-SIZE: 11px; FONT-FAMILY: Verdana, Arial, Helvetica; }
.errorrowhidden { PADDING: 6px; DISPLAY: none; BORDER: 1px SOLID #e7bcbc; -moz-border-radius: 4px 4px 4px 4px; BACKGROUND-COLOR: #ffeef0; COLOR: #000000; FONT-SIZE: 11px; FONT-FAMILY: Verdana, Arial, Helvetica; }

.swifttext, .swifttexterror, .swifttextnumeric, .swifttextwide, .swifttextareawide, .swifttextsmall, .swifttextlarge, .swiftpassword, .swifttextdisabled, .swifttextarea, .swiftselect, .swifttextlarge
{
	FONT-FAMILY: Calibri, Verdana, Tahoma, Helvetica;
	FONT-SIZE: 1.4em;
}

/*
* End SWIFT General CSS
*/

/*
* Begin Support Center CSS
*/

.addplus { display: inline; background: url("<?php echo $this->scope["_themePath"];?>images/icon_add.gif") no-repeat 0px 0px; padding: 0 0 0 20px; }
.useremailitem, .ticketattachmentitem { padding: 4px; }
.useremailitemdelete, .ticketattachmentitemdelete { margin-right: 4px; width: 18px; display: inline-block; background: url("<?php echo $this->scope["_themePath"];?>images/icon_trash.gif") no-repeat 0px 1px; height: 18px; cursor: pointer; }


/*
* End Support Center CSS
*/


/*
* Begin Chat Related CSS
*/
#sendemailcontainer { display: none; }

#livechattab .tabtext { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_tablivechat.gif"); }

#chattoptoolbar               { background: url("<?php echo $this->scope["_themePath"];?>images/toolbarbg.gif") repeat-x top left #fcfaf4; font-size: 70%; width: 100%; border-width: 1px 0; border-style: solid; border-color: #e1d9c9 white #cdc6b6 white; position: relative; color: #333; float: left; clear: both; padding-bottom: 0.3em; }
#chattoptoolbar a             { color: black; text-decoration: none; }
#chattoptoolbarrightarea      { float: right; display: inline-block; margin-top: 0.6em; margin-right: 0.4em; height: 100%; }
#chattoptoolbarrightareainset { display: inline-block; margin: 0 0.2em 0 0; }
#chattoptoolbar select        { border: 1px solid #cdc2ab; font-family: verdana, tahoma, sans-serif; font-size: 1em; }

#chattoptoolbarlinklist          { margin: 0; padding: 0; }
#chattoptoolbarlinklist li       { background: url("<?php echo $this->scope["_themePath"];?>images/toolbarbuttonbg.gif")       repeat-x top left #fcfaf5; list-style-type: none; display: inline-block; float: left; margin: 0.3em 0 0 0.3em; padding: 0; clear: none; }
#chattoptoolbarlinklist li:hover { background: url("<?php echo $this->scope["_themePath"];?>images/toolbarbuttonbg_hover.gif") repeat-x top left #fcfaf5; }

#chattoptoolbarlinklist a { display: inline-block; border: 1px solid; border-color: white #dcd2c0 #dcd2c0 white; padding: 0.4em 0.7em 0.4em 2.3em; margin: 0; background-position: 0.5em 0.3em; background-repeat: no-repeat; }
#chattoptoolbarlinklist a:hover { border-color: #f9f0d7 #e5c365 #e5c365 #f9f0d7; }

a#chattoptoolbarcloselink          { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_widget_close.gif")   }
a#chattoptoolbarprintlink          { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_widget_print.gif")   }
a#chattoptoolbaremaillink          { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_widget_email.gif")   }
a#chattoptoolbarsoundonlink        { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_widget_soundon.gif") }
a#chattoptoolbarsoundofflink       { background-image: url("<?php echo $this->scope["_themePath"];?>images/icon_widget_soundoff.gif")}
li#chattoptoolbarprint             { display: none;   }
li#chattoptoolbaremail             { display: none;   }
li#chattoptoolbarsoundon           { display: none;   }
li#chattoptoolbarsoundoff          { display: none;   }

#main.chatview { position: fixed; margin: 0; top: 0.8em; bottom: 0.8em; left: 0.8em; right: 0.8em; }
.chatview #bottomfooter { height: 22px; vertical-align: middle; border-top:1px solid #D9CEBC; color:#61718C; background: white url("<?php echo $this->scope["_themePath"];?>images/chatfooterbackground.gif") repeat-x top left; position: absolute; bottom: 0; width: 100%; padding: 4px 0px 0px 0px; }
.chatview #chatpostcontainer { position: absolute; bottom: 22px; width: 100%; padding: 6px;}

#chatcontentcontainer { z-index: 10000; overflow: auto; position: fixed; top: 16.5em; bottom: 11em; left: 30px; right: 30px; background-color: }
#chatstatuswrapper        { z-index: 10001; position: fixed; bottom: 8.8em; height: 2em; left: 30px; right: 30px;}
.chatstatusbar        { HEIGHT: 2em; PADDING-TOP: 7px; VERTICAL-ALIGN: middle; FONT-SIZE: 11px; FONT-WEIGHT: bold; PADDING-LEFT:20px; BACKGROUND: URL("<?php echo $this->scope["_themePath"];?>images/icon_chatstatusbar.gif") no-repeat left;}
.chatstatusbarhidden        { HEIGHT: 2em; PADDING-TOP: 7px; VERTICAL-ALIGN: middle; FONT-SIZE: 11px; FONT-WEIGHT: bold; PADDING-LEFT:20px;}
#chatcore             { background-color: #faf9f4; padding-top: 0.5em; height: 100%; width: 100%; }
#chatbox              { background-color: white; padding: 0.8em; font-size: 70%; position: fixed; top: 17em; bottom: 3em; left: 1.5em; right: 1.5em; overflow: auto; }

#chatcontrolregion { position: fixed; left: 30px; right: 30px; height: 45px; bottom: 3em; z-index: 10002; }
#chatpostmsgwrap   { position: absolute; height: 100%; top: 0; bottom: 0; right: 6em; left: 0; }
#chatpostmsg       { height: 100%; width: 100%; BACKGROUND: #FFFFFF URL(<?php echo $this->scope["_themePath"];?>images/inputtextbg.gif) REPEAT-X TOP LEFT; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma; FONT-SIZE: 11px; BORDER: 1px SOLID #cdc2ab; vertical-align: middle; }
#chatpostbutton    { position: absolute; height: 100%; top: 0; bottom: 0; right: 0; width: 80px; border: 0 solid white; background-image: url("<?php echo $this->scope["_themePath"];?>images/buttonwide.gif"); background-repeat: no-repeat; color: black; font-family: verdana, tahoma, sans-serif; font-weight: bold; font-size: 11px; margin: 0; padding: 0; vertical-align: middle; cursor: pointer; }

.chatsystemmessage { BORDER-TOP: 1px SOLID #CCCCCC; BORDER-BOTTOM: 1px SOLID #CCCCCC; PADDING-LEFT:20px; BACKGROUND: #FFFFFF URL("<?php echo $this->scope["_themePath"];?>images/icon_infosquare.gif") no-repeat left; MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px; PADDING-TOP: 6px; PADDING-BOTTOM: 6px; FONT-SIZE: 12px; COLOR: #333333;}
.chaturlmessage { BORDER-TOP: 1px SOLID #CCCCCC; BORDER-BOTTOM: 1px SOLID #CCCCCC; PADDING-LEFT:20px; BACKGROUND: #FFFFFF URL("<?php echo $this->scope["_themePath"];?>images/icon_pushurl.png") no-repeat left; MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px; PADDING-TOP: 6px; PADDING-BOTTOM: 6px; FONT-SIZE: 12px; COLOR: #333333;}
.chatimagemessage { BORDER-TOP: 1px SOLID #CCCCCC; BORDER-BOTTOM: 1px SOLID #CCCCCC; PADDING-LEFT:20px; BACKGROUND: #FFFFFF URL("<?php echo $this->scope["_themePath"];?>images/icon_pushimage.png") no-repeat left; MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px; PADDING-TOP: 6px; PADDING-BOTTOM: 6px; FONT-SIZE: 12px; COLOR: #333333;}
.chatcodemessage { BORDER-TOP: 1px SOLID #CCCCCC; BORDER-BOTTOM: 1px SOLID #CCCCCC; PADDING-LEFT: 6px; MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px; PADDING-TOP: 6px; PADDING-BOTTOM: 6px; FONT-SIZE: 12px; COLOR: #333333;}
.chatonsitemessage { BORDER-TOP: 1px SOLID #CCCCCC; BORDER-BOTTOM: 1px SOLID #CCCCCC; PADDING-LEFT:20px; BACKGROUND: #FFFFFF URL("<?php echo $this->scope["_themePath"];?>images/icon_onsite.gif") no-repeat 0px 8px; MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px; PADDING-TOP: 6px; PADDING-BOTTOM: 6px; FONT-SIZE: 11px; COLOR: #333333;}
.chatonsitemessagetitle { MARGIN-BOTTOM: 8px; PADDING-TOP: 2px; FONT-SIZE: 12px; FONT-WEIGHT: bold; COLOR: #333333;}
.chatonsitemessagewin { PADDING-LEFT:34px; BACKGROUND: #FFFFFF URL("<?php echo $this->scope["_themePath"];?>images/icon_windows.gif") no-repeat left; MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px; PADDING-TOP: 6px; PADDING-BOTTOM: 6px; FONT-SIZE: 11px; COLOR: #333333; HEIGHT: 32px;}
.chatonsitemessageostext { PADDING-TOP: 8px;}
.swiftselect .deponline { height: 20px; background-repeat:no-repeat; background-position:bottom left; padding-left:20px; background: #D5FFD5 URL("<?php echo $this->scope["_themePath"];?>images/icon_online.gif") no-repeat left; }
.swiftselect .depoffline { height: 20px; background-repeat:no-repeat; background-position:bottom left; padding-left:20px; background: #EDEDED URL("<?php echo $this->scope["_themePath"];?>images/icon_offline.gif") no-repeat left; }


.msgwrapper { DISPLAY: block; PADDING-TOP: 1px; PADDING-BOTTOM: 1px;}
.timestamp { DISPLAY: inline; COLOR: #676767; FONT-SIZE: 12px; PADDING-RIGHT: 5px; }
.staffname { DISPLAY: inline; FONT-SIZE: 12px; FONT-WEIGHT: bold; COLOR: #FF3232; }
.staffmessage { DISPLAY: inline; FONT-SIZE: 12px; COLOR: #333333; }
.clientname { DISPLAY: inline; FONT-SIZE: 12px; FONT-WEIGHT: bold; COLOR: #0080FF; }
.clientmessage { DISPLAY: inline; FONT-SIZE: 12px; COLOR: #333333; }

#imagezoomcontainer {width:100%; overflow:hidden;}
#imagezoomcontainer a {position:relative; float:left; margin:5px;}
#imagezoomcontainer a span { display:block; background-image:url(<?php echo $this->scope["_themePath"];?>images/icon_zoom.png); background-repeat:no-repeat; width:16px; height:16px; position:absolute; bottom:8px; right:8px;}
#imagezoomcontainer img { border: solid 1px #999; padding:5px;}

#printcontent { FONT-SIZE: 12px; FONT-FACE: Candara, Verdana, Arial, Helvetica; PADDING: 8px; }
.chatprinthr { margin-bottom: 6px; height: 1px; BORDER: none; color: #cfcfcf; background-color: #cfcfcf; }
/*
* End Chat Related CSS
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



/*
* Begin Tickets CSS
*/

.irsui
{
	BACKGROUND-COLOR: #FFFBF2; BORDER: 1px SOLID #FFE6B8; COLOR: #333333; -moz-border-radius: 6px 6px 6px 6px; -webkit-border-radius: 6px 6px 6px 6px; border-radius: 6px 6px 6px 6px; PADDING: 6px; MARGIN: 10px 0 0 0;
}

.irscontainer {
	DISPLAY: none;
}

.irstitle
{
    FONT-SIZE: 18px;
    COLOR: #333333;
    FONT-FAMILY: Calibri, Trebuchet MS, Verdana, Arial, Helvetica;
	MAGIN-BOTTOM: 6px;
	FONT-WEIGHT: bold;
}

.irsdesc
{
    COLOR: #333333;
	MAGIN-BOTTOM: 6px;
}

.irshr
{
	BORDER: none;
	COLOR: #FFEECF;
	BACKGROUND-COLOR: #FFEECF;
	HEIGHT: 1px;
	MARGIN: 3 1 3 1;
	PADDING: 0;
}


.headerbutton, .headerbuttongreen, .headerbuttonorange, .headerbuttonred, .headerbuttonblue, .headerbuttonyellow {
	background: #333333 url(<?php echo $this->scope["_themePath"];?>images/overlay-button.png) repeat-x;
	padding: 9px 10px 10px 10px;
	color: #fff;
	text-decoration: none;
	font-weight: bold;
	font-size: 13px;
	line-height: 1;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	cursor: pointer;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	margin: -4px 0 0 6px;
	display: inline;
	float: left;
}

.headerbutton:active, .headerbuttongreen:active, .headerbuttonorange:active {
	-moz-transform: translateY(1px);
}

.headerbutton:hover {
	BACKGROUND-COLOR: #222222;
}

.headerbuttongreen {
	BACKGROUND-COLOR: #01a934;
}

.headerbuttongreen:hover {
	BACKGROUND-COLOR: #14c84b;
}

.headerbuttonorange {
	BACKGROUND-COLOR: #ff5c00;
}

.headerbuttonorange:hover {
	BACKGROUND-COLOR: #ff823c;
}

.headerbuttonred {
	BACKGROUND-COLOR: #e33100;
}

.headerbuttonred:hover {
	BACKGROUND-COLOR: #f3643c;
}

.headerbuttonblue {
	BACKGROUND-COLOR: #2daebf;
}

.headerbuttonblue:hover {
	BACKGROUND-COLOR: #41c6d7;
}

.headerbuttonyellow {
	BACKGROUND-COLOR: #ffb515;
}

.headerbuttonyellow:hover {
	BACKGROUND-COLOR: #ffcc5d;
}

.ticketlistproperties {
	COLOR: white;
	FONT-WEIGHT: bold;
	FONT-SIZE: 1em;
}

.ticketlistpropertiescontainer {
	PADDING: 8px;
}

.ticketlistsubject {
	FONT-SIZE: 1.8em;
	COLOR: #333333;
	PADDING: 4px 0 4px 5px;
}

.ticketlistpropertiesdivider {
	HEIGHT: 8px;
}

.ticketlistheaderrow {
	BORDER-TOP: 1px solid #FFFFFF;
	BORDER-BOTTOM: 1px solid #DDDDC7;
	BACKGROUND: #F8F4EB;
	COLOR: #333333;
	FONT-SIZE: 1em;
	PADDING: 8px;
}

.ticketlisttable {
	BORDER: 1px SOLID #CDC6B6;
}

.ticketsubdepartment {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/linkdownarrow.gif) no-repeat 4px 0px;
	PADDING: 0 0 0 20px;
	MARGIN-LEFT: 10px;
}

.ticketgeneralcontainer {
	BACKGROUND: #ffffff;
}

.ticketgeneraltitlecontainer {
	PADDING: 8px 8px 10px 8px;
}

.ticketbenchmarks {
	PADDING: 6px 8px 5px 8px;
	FONT: Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	COLOR: #333333;
}

.ticketbenchmark {
	DISPLAY: inline-block;
	MARGIN-RIGHT: 12px;
}

.ticketbenchmarktitle {
	DISPLAY: inline;
	FLOAT: left;
	MARGIN-RIGHT: 5px;
}


.ticketpostbox {
	text-decoration: none;
	MARGIN: 0 0 0 30px;
	COLOR: #333333;
	WIDTH: 150px;
}

.ticketpostinfoitem, .ticketpostinfoitemtext {
	PADDING: 5px 0px 0px 5px;
	BORDER-BOTTOM: #F0EADE 1px SOLID;
	BACKGROUND-COLOR: transparent;
	COLOR: #000000;
	FONT-FAMILY: Verdana, Arial, Helvetica;
	FONT-SIZE: 11px;
	HEIGHT: 34px;
}

.ticketpostinfoitemtext {
	CURSOR: default;
}

.ticketpostinfoitemtitle {
	TEXT-ALIGN: left;
	FONT-SIZE: 0.9em;
}

.ticketpostinfoitemcontent, .ticketpostinfoitemlink {
    FONT-SIZE: 1.3em;
    FONT-FAMILY: Calibri, Arial, Verdana, Helvetica, sans-serif;
	FONT-WEIGHT: bold;
	CURSOR: pointer;
}

.ticketpostinfoitemcontainer {
	PADDING: 3px 0 3px 0;
}

.ticketpostinfoitemlink:hover {
	COLOR: red;
}

.ticketgeneralinfocontainer {
	PADDING: 6px 8px 5px 8px;
	FONT: Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 10px;
	COLOR: #5a5a5a;
}

.ticketgeneraldepartment {
	COLOR: #b24c58 !important;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 1em;
	FONT-WEIGHT: bold;
}

.ticketgeneraltitle {
	COLOR: #333333;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	FONT-SIZE: 1.8em;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/linkdownarrow.gif) 10px 4px no-repeat;
	PADDING: 0px 0 8px 25px;
}

.ticketgeneralproperties {
	HEIGHT: 65px;
}

.ticketgeneralpropertiesselect {
	DISPLAY: block;
	PADDING: 4px 0 0 0;
	TEXT-ALIGN: center;
}

.ticketgeneralpropertiesobject, .ticketgeneralpropertiesobjectwide, .ticketgeneralpropertiesobjectmed {
	PADDING: 10px 12px 6px 12px;
	DISPLAY: block;
	FLOAT: left;
	WIDTH: 160px;
	COLOR: #ffffff;
	FONT: Calibri, Tahoma, Verdana, Arial, Helvetica;
	HEIGHT: 49px;
	BACKGROUND: transparent;
}

.ticketgeneralpropertiesobjectwide {
	WIDTH: 220px;
}

.ticketgeneralpropertiesobjectmed {
	WIDTH: 160px;
}

.ticketgeneralpropertiestitle {
	TEXT-ALIGN: center;
	FONT-SIZE: 0.9em;
}

.ticketgeneralpropertiescontent {
	PADDING: 4px 0 0 0;
	TEXT-ALIGN: center;
	FONT-SIZE: 1.3em;
	FONT-WEIGHT: bold;
}

.ticketgeneralpropertiesdivider {
	PADDING: 10px 0 0 0;
	DISPLAY: block;
	FLOAT: left;
}

.viewticketcontentcontainer {
	PADDING: 0 0 0 8px;
}

.ticketpaddingcontainer {
	PADDING: 8px;
}

.ticketpostsholder {
}
.ticketpostcontainer {
	BACKGROUND: #f8f4eb;
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

.ticketpostcontentsbar {
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

.ticketbarquote {
	MARGIN: 2px 3px 0 0;
	FLOAT: right;
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/icon_quote.gif) no-repeat;
	HEIGHT: 16px;
	WIDTH: 16px;
	CURSOR: pointer;
}

.ticketpostcontentsbar .ticketbarcontents {
	PADDING: 3px 0 0 6px;
	FONT: Georgia,Arial,sans-serif;
	COLOR: #ffffff;
}

.ticketpostcontentsbar span.ticketbardatefold {
	BACKGROUND: URL(<?php echo $this->scope["_themePath"];?>images/ticketdatefold.png) no-repeat center center;
	DISPLAY: block;
	BOTTOM: -15px;
	LEFT: 0;
	HEIGHT: 14px;
	POSITION: absolute;
	WIDTH: 19px;
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


/*
* End Tickets CSS
*/


/*
* Begin News CSS
*/
.newshr {
	margin-bottom: 16px; height: 1px; BORDER: none; BORDER-TOP: 1px solid #cfcfcf; color: white; background-color: white;
}

.newstitle {
	font-size: 80%; margin-left: 10px; padding: 3px; padding-top: 0px; margin-top: 0px;
}

.newstitlelink {
	color: #277dca !important; font-family: Calibri, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 28px; font-weight: bold;
}

.newsavatar {
	FLOAT: right; BORDER: 1px SOLID lightgray; PADDING: 3px;
}

.newsreadmorelink {
	color: #277dca !important; font-family: Calibri, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; text-decoration: none; font-size: 22px; font-weight: bold;
}

.newsinfo {
	font-size: 11px; padding-top: 2px; padding-bottom: 14px; color: gray; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif;
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

/*
* End News CSS
*/




/*
* Begin Knowledgebase CSS
*/

.kbarticlecontainer, .kbsearchcontainer {
	padding: 0 10px 16px 38px; border-bottom: 1px SOLID #ececec; margin: 0 0 30px 0; background: url(<?php echo $this->scope["_themePath"];?>images/icon_kbarticle.png) no-repeat 0px 1px;
}

.kbarticle, .kbsearch {
	color: #277dca; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; font-size: 20px; font-weight: bold;
}

.kbarticletext, .kbsearchtext {
	color: #969696; font-family: Verdana, Arial, Helvetica, Georgia, serif; font-size: 12px;
}

.kbarticlefeatured {
	background-color: #fff4d3; border: 1px SOLID #f2ebde; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; background-position: 4px 6px; padding: 4px 10px 16px 42px;
}

.kbarticlelist {

}

.kbarticlelist .kbarticlelistitem, .kbarticlecategorylistitem {
	background: url(<?php echo $this->scope["_themePath"];?>images/icon_kbarticlesmall.png) no-repeat 0px 0px; PADDING: 0px 0 0 20px; margin-top: 8px; line-height: 1.4em;
}

.kbrightstrip {
	margin-right: 12px;
}

.kbcategorytitlecontainer {
	margin: 0 12px 20px 0;
}

.kbcategorytitle {
	color: #333333; font-family: Candara, Trebuchet MS, Verdana, Arial, Helvetica, Georgia, serif; font-size: 18px; padding: 0 0 4px 20px; border-bottom: 1px SOLID #ececec; font-weight: bold;
	background: url(<?php echo $this->scope["_themePath"];?>images/icon_folderyellowfaded.gif) no-repeat 0px 1px; cursor: pointer; margin: 0 0 10px 0;
}

.kbcategorytitle:hover {
	background-image: url(<?php echo $this->scope["_themePath"];?>images/icon_folderyellow.gif);
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

/*
* End Knowledgebase CSS
*/



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
	BACKGROUND: url("<?php echo $this->scope["_themePath"];?>images/icon_folderyellow.gif") no-repeat 0 0;
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
*/<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>