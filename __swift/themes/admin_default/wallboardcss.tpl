body {
	BACKGROUND: #393a3a URL(<{$_themePath}>images/loopbg.png);
	MARGIN: 0;
	PADDING: 15px 15px 15px 15px;
}

.widgetcontainer {
	MIN-HEIGHT: 260px;
}

.widgetcontainer2 {
	MIN-HEIGHT: 520px;
}

.widget, .widget2x1, .widget1x2, .widget2x2 {
	-moz-box-shadow: 0.05em 0.05em 0.3em 0.01em #1b1c1d;
	-webkit-box-shadow: 0.05em 0.05em 0.3em 0.01em #1b1c1d;
	box-shadow: 0.05em 0.05em 0.3em 0.01em #1b1c1d;
	BACKGROUND: #353839;
	BORDER-TOP: 1px SOLID #4d4f4f;
	BORDER-LEFT: 1px SOLID #4d4f4f;
	BORDER-RIGHT: 1px SOLID #151617;
	BORDER-BOTTOM: 1px SOLID #151617;
	DISPLAY: block;
	FLOAT: left;
	MARGIN: 6px;
}

.widget {
	WIDTH: 240px;
	HEIGHT: 240px;
}

.widget2x1 {
	WIDTH: 494px;
	HEIGHT: 240px;
}

.widget1x2 {
	WIDTH: 240px;
	HEIGHT: 494px;
}

.widget2x2 {
	WIDTH: 494px;
	HEIGHT: 494px;
}

.widget .title, .widget2x1 .title, .widget1x2 .title, .widget2x2 .title {
	FONT-FAMILY: "droid-sans-1","droid-sans-2",sans-serif;
	COLOR: #dcdcdc;
	FONT-SIZE: 16px;
	PADDING: 5px 0 5px 7px;
	WIDTH: 100%;
	BORDER-BOTTOM: 1px SOLID #2b2d2e;
}

.widget .border, .widget2x1 .border, .widget1x2 .border, .widget2x2 .border {
	BORDER-TOP: 1px SOLID #444849;
	WIDTH: 100%;
	HEIGHT: 1px;
}

.stats, .statssmall, .statsxsmall {
	WIDTH: 100%;
	FONT-FAMILY: "droid-sans-1","droid-sans-2",sans-serif;
	COLOR: white;
	TEXT-SHADOW: 1px 1px 1px rgba(0, 0, 0, 1);
}

.stats .container, .statssmall .container, .statsxsmall .container {
	PADDING: 15px 0 5px 20px;
}

.stats {
	FONT-SIZE: 70px;
}

.statssmall {
	FONT-SIZE: 40px;
}

.statsxsmall {
	FONT-SIZE: 15px;
}

.stats .up, .statssmall .up, .statsxsmall .up {
	BACKGROUND: URL(<{$_themePath}>images/wall_upsmall.png) no-repeat 3px 10px;
	PADDING-LEFT: 32px;
	FONT-SIZE: 35px !important;
}

.stats .down, .statssmall .down, .statsxsmall .down {
	BACKGROUND: URL(<{$_themePath}>images/wall_downsmall.png) no-repeat 3px 10px;
	PADDING-LEFT: 32px;
	FONT-SIZE: 35px !important;
}

.subtext {
	WIDTH: 100%;
	FONT-FAMILY: "droid-sans-1","droid-sans-2",sans-serif;
	COLOR: white;
	PADDING: 15px 0 5px 20px;
	TEXT-SHADOW: 1px 1px 1px rgba(0, 0, 0, 1);
	FONT-SIZE: 20px !important;
}

.statsup, .statsdown, .statsred, .statsstar, .statsstarhalf, .statsstarempty, .statserror, .statsok {
	WIDTH: 100%;
	FONT-FAMILY: "droid-sans-1","droid-sans-2",sans-serif;
	COLOR: white;
	PADDING: 15px 0 5px 20px;
	TEXT-SHADOW: 1px 1px 1px rgba(0, 0, 0, 1);
	FONT-SIZE: 35px;
	PADDING-LEFT: 70px;
	HEIGHT: 50px;
}

.statsup {
	BACKGROUND: URL(<{$_themePath}>images/wall_up2.png) no-repeat 15px 10px;
}

.statsdown {
	BACKGROUND: URL(<{$_themePath}>images/wall_down2.png) no-repeat 15px 10px;
}

.statsred {
	BACKGROUND: URL(<{$_themePath}>images/wall_red.png) no-repeat 15px 10px;
}

.statserror {
	BACKGROUND: URL(<{$_themePath}>images/wall_error.png) no-repeat 15px 10px;
}

.statsstar {
	BACKGROUND: URL(<{$_themePath}>images/wall_star.png) no-repeat 15px 10px;
}

.statsstarhalf {
	BACKGROUND: URL(<{$_themePath}>images/wall_starhalf.png) no-repeat 15px 10px;
}

.statsstarempty {
	BACKGROUND: URL(<{$_themePath}>images/wall_starempty.png) no-repeat 15px 10px;
}

.statsok {
	BACKGROUND: URL(<{$_themePath}>images/wall_ok.png) no-repeat 15px 10px;
}

.list {
	WIDTH: 100%;
	FONT-FAMILY: "droid-sans-1","droid-sans-2",sans-serif;
	COLOR: white;
	PADDING: 15px 0 5px 20px;
	TEXT-SHADOW: 1px 1px 1px rgba(0, 0, 0, 1);
	FONT-SIZE: 25px;
}

.textred {
	COLOR: #ce2f2b;
}

.textorange {
	COLOR: #e09d34;
}

.textgreen {
	COLOR: #86ad1f;
}