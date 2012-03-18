//=======================================
//###################################
// KAJAX - Kayako Ajax JS Lib
//
// Source Copyright 2001-2004 Kayako Web Solutions
// Unauthorized reproduction is not allowed
// License Number: $%LICENSE%$
// $Author: vshoor $ ($Date: 2006/11/14 20:58:58 $)
// $RCSfile: kajax.js,v $ : $Revision: 1.5 $ 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//                   www.kayako.com
//###################################
//=======================================

/**
* =====================================================
* KAJAX Object
* ***********************************************************
* The parent object that handles all widgets and sub objects
* =====================================================
*/
function KAJAX()
{
	// ======= OBJECT DELCARATIONS =======
	this._browserDetect = new KAJAX_browserDetect();
};

/**
* =====================================================
* Browser Object
* ***********************************************************
* Detects Browser & Client Properties
* =====================================================
*/
function KAJAX_browserDetect()
{
	this.screenHeight = window.screen.availHeight;
	this.screenWidth = window.screen.availWidth;
	this.colorDepth = window.screen.colorDepth;
	this.timeNow = new Date();
	this.referrer = escape(document.referrer);
	this.windows = this.mac = this.linux = "";
	this.ie = this.op = this.moz = this.misc = this.browsercode = this.browsername = this.browserversion = this.operatingsys = "";
	this.dom = this.ienew = this.ie4 = this.ie5 = this.ie6 = this.moz_rv = this.moz_rv_sub = this.ie5mac = this.ie5xwin = this.opnu = this.op4 = this.op5 = this.op6 = this.op7 = this.saf = this.konq = "";
	this.appName = this.appVersion = this.userAgent = "";
	this.appName = navigator.appName;
	this.appVersion = navigator.appVersion;
	this.userAgent = navigator.userAgent.toLowerCase();
	this.title = document.title;
	this.DOMBROWSER = "default";

	this.windows = (this.appVersion.indexOf('Win') != -1);
	this.mac = (this.appVersion.indexOf('Mac') != -1);
	this.linux = (this.appVersion.indexOf('Linux') != -1);

	// DOM Compatible?
	if (!document.layers)
	{
		this.dom = (document.getElementById ) ? document.getElementById : false;
	} else {
		this.dom = false;
	}

	if (document.getElementById)
	{
		this.DOMBROWSER = "default";
	} else if (document.layers) {
		this.DOMBROWSER = "NS4";
	} else if (document.all) {
		this.DOMBROWSER = "IE4";
	}

	this.misc=(this.appVersion.substring(0,1) < 4);
	this.op=(this.userAgent.indexOf('opera') != -1);
	this.moz=(this.userAgent.indexOf('gecko') != -1);
	this.ie=(document.all && !this.op);
	this.saf=((this.userAgent.indexOf('safari') != -1) || (navigator.vendor == "Apple Computer, Inc."));
	this.konq=(this.userAgent.indexOf('konqueror') != -1);

	// Opera
	if (this.op) {
		this.op_pos = this.userAgent.indexOf('opera');
		this.opnu = this.userAgent.substr((this.op_pos+6),4);
		this.op5 = (this.opnu.substring(0,1) == 5);
		this.op6 = (this.opnu.substring(0,1) == 6);
		this.op7 = (this.opnu.substring(0,1) == 7);

	// Mozilla
	} else if (this.moz){
		this.rv_pos = this.userAgent.indexOf('rv');
		this.moz_rv = this.userAgent.substr((this.rv_pos+3),3);
		this.moz_rv_sub = this.userAgent.substr((this.rv_pos+7),1);
		if (this.moz_rv_sub == ' ' || isNaN(this.moz_rv_sub)) {
			this.moz_rv_sub='';
		}
		this.moz_rv = this.moz_rv + this.moz_rv_sub;

	// IE
	} else if (this.ie){
		this.ie_pos = this.userAgent.indexOf('msie');
		this.ienu = this.userAgent.substr((this.ie_pos+5),3);
		this.ie4 = (!this.dom);
		this.ie5 = (this.ienu.substring(0,1) == 5);
		this.ie6 = (this.ienu.substring(0,1) == 6);
	}

	if (this.konq) {
		this.browsercode = "KO";
		this.browserversion = this.appVersion;
		this.browsername = "Knoqueror";
	} else if (this.saf) {
		this.browsercode = "SF";
		this.browserversion = this.appVersion;
		this.browsername = "Safari";
	} else if (this.op) {
		this.browsercode = "OP";
		if (this.op5) {
			this.browserversion = "5";
		} else if (this.op6) {
			this.browserversion = "6";
		} else if (this.op7) {
			this.browserversion = "7";
		} else {
			this.browserversion = this.appVersion;
		}
		this.browsername = "Opera";
	} else if (this.moz) {
		this.browsercode = "MO";
		this.browserversion = this.appVersion;
		this.browsername = "Mozilla";
		var result = /.*Firefox\/([\d\.]+).*/.exec(navigator.userAgent);
		if (result) {
			this.firefoxVersion = result[1];
		}
	} else if (this.ie) {
		this.browsercode = "IE";
		if (this.ie4) {
			this.browserversion = "4";
		} else if (this.ie5) {
			this.browserversion = "5";
		} else if (this.ie6) {
			this.browserversion = "6";
		} else {
			this.browserversion = this.appVersion;
		}
		this.browsername = "Internet Explorer";
	}

	if (this.windows) {
		this.operatingsys = "Windows";
	} else if (this.linux) {
		this.operatingsys = "Linux";
	} else if (this.mac) {
		this.operatingsys = "Mac";
	} else {
		this.operatingsys = "Unkown";
	}

	if (this.ie)
	{
		this.innerWidth = this.screenWidth;
		this.innerHeight = this.screenHeight;
	} else {
		this.innerWidth = window.innerWidth;
		this.innerHeight = window.innerHeight;
	}
};


/**
* ###############################################
* INIT
* ###############################################
*/

window.$KAJAX = new KAJAX();