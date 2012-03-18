<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

/**
* BASE LANGUAGE CODES
*/

$_SWIFT = SWIFT::GetInstance();

$__LANG = array (
	'charset' => 'UTF-8',
	'html_encoding' => '8bit',
	'text_encoding' => '8bit',
	'html_charset' => 'UTF-8',
	'text_charset' => 'UTF-8',
	'yes' => 'Yes',
	'no' => 'No',
	'menusupportcenter' => 'Support Center',
	'menustaffcp' => 'Staff CP',
	'menuadmincp' => 'Admin CP',
	'module_notreg' => '%s module is not registered',
	'event_notreg' => '%s event is not registered',
	'unable_to_execute' => 'Unable to execute %s',
	'action_notreg' => '%s action is not registered',
	'username' => 'Username',
	'password' => 'Password',
	'rememberme' => 'Remember Me',
	'defaulttitle' => '%s - Powered by Kayako %s',
	'defaultloginapi' => SWIFT_PRODUCT . ' Login Routine',
	'login' => 'Login',
	'global' => 'Global',
	'first' => 'First',
	'last' => 'Last',
	'pagination' => 'Page %s of %s',
	'submit' => 'Submit',
	'reset' => 'Reset',
	'poweredby' => 'Helpdesk Software Powered by Kayako %s',
	'copyright' => 'Copyright &copy; 2001-%s Kayako',
	'notifycsrfhash' => 'CSRF attempt detected, cannot continue with the required action.',
	'titlecsrfhash' => 'Invalid CSRF Hash',
	'msgcsrfhash' => SWIFT_PRODUCT . ' has detected a Cross Site Request Forgery attempt and cannot continue with the required action.',
	'invaliduser' => 'Invalid Username or Password',
	'invaliduseripres' => 'Invalid Staff - Unauthorized IP (Attempt: %d/%d)',
	'invaliduserdisabled' => 'Invalid Staff - Account Disabled (Attempt: %d/%d)',
	'invalid_sessionid' => 'Session Expired Due to Inactivity',
	'staff_not_admin' => 'User does not have admin privileges',
	'redirect_login' => 'Processing Login...',
	'redirect_dashboard' => 'Redirecting to Dashboard...',
	'no_wait' => 'Please click here if your browser does not automatically redirect you',
	'select_un_all' => 'Select/Unselect All Items',
	'sort_desc' => 'Sort Descending',
	'sort_asc' => 'Sort Ascending',
	'options' => 'Options',
	'delete' => 'Delete',
	'settings' => 'Settings',
	'search' => 'Search',
	'quicksearch' => 'Quick Search',
	'mass_action' => 'Mass Action',
	'massfieldaction' => 'Action: ',
	'advanced_search' => 'Advanced Search',
	'searchfieldquery' => 'Query: ',
	'searchfieldfield' => 'Field: ',
	'searchbutton' => 'Search',
	'settingsfieldresultsperpage' => 'Results Per Page: ',
	'actionconfirm' => 'Are you sure you wish to continue?',
	'clidefault' => "%s v%s\nCopyright (c) 2001-%s Kayako\n",
	'loggedout' => 'Logged out successfully',
	'firstselect' => '- Select -',
	'exportasxml' => 'XML',
	'exportascsv' => 'CSV',
	'exportassql' => 'SQL',
	'exportaspdf' => 'PDF',
	'view' => 'View',
	'dashboard' => 'Dashboard',
	'help' => 'Help',
	'size' => 'Size',
	'home' => 'Home',
	'logout' => 'Logout',
	'clientarea' => 'Support Center',
	'staffcp' => 'Staff CP',
	'admincp' => 'Admin CP',
	'winapp' => 'Winapp',
	'pdainterface' => 'PDA Interface',
	'kayakomobile' => 'Kayako Mobile',
	'staffapi' => 'Staff API',
	'bytes' => 'Bytes',
	'kb' => 'KB',
	'mb' => 'MB',
	'gb' => 'GB',
	'noitemstodisplay' => 'No items to display',
	'thousandsseperator' => ',',
	'manage' => 'Manage',
	'title' => 'Title',
	'disable' => 'Disable',
	'enable' => 'Enable',
	'edit' => 'Edit',
	'back' => 'Back',
	'forward' => 'Forward',
	'insert' => 'Insert',
	'edit' => 'Edit',
	'update' => 'Update',
	'public' => 'Public',
	'private' => 'Private',
	'requiredfieldempty' => 'One of the required field(s) is empty',
	'clierror' => '[ERROR]: ',
	'cliwarning' => '[WARNING]: ',
	'cliok' => '[OK]: ',
	'cliinfo' => '[INFO]: ',
	'clifatalerror' => 'FATAL ERROR',
	'clienterchoice' => 'Please Type your Choice: ',
	'clinotvalidchoice' => '"%s" is Not a Valid Choice: ',
	'description' => 'Description',
	'success' => 'Success',
	'failure' => 'Failure',
	'status' => 'Status',
	'date' => 'Date',
	'seconds' => 'Seconds',
	'order' => 'Order',
	'email' => 'Email',
	'subject' => 'Subject',
	'contents' => 'Contents',
	'sections' => 'Sections',
	'twodesc' => '%s (%s)', // Change only for RTL Languages
	'sunday' => 'Sunday',
	'monday' => 'Monday',
	'tuesday' => 'Tuesday',
	'wednesday' => 'Wednesday',
	'thursday' => 'Thursday',
	'friday' => 'Friday',
	'saturday' => 'Saturday',
	'hourrenderus' => '%s:%s %s',
	'hourrendereu' => '%s:%s',
	'am' => 'AM',
	'pm' => 'PM',
	'pfieldreveal' => '[Reveal]',
	'pfieldhide' => '[Hide]',
	'loadingwindow' => 'Loading...',
	'customfields' => 'Custom Fields',
	'jump' => 'Jump',
	'newprvmsgconfirm' => 'You have a new private message\nClick OK to open the private message list in a new window.',
	'nopermission' => 'ERROR: You do not have proper permissions to carry out this action.<BR />You can edit the Group Access Masks under <i>Admin CP > Staff > Manage Groups > Edit</i>',
	'nopermissiontext' => "ERROR: You do not have proper permissions to carry out this action.\nYou can edit the Group Access Masks under Admin CP > Staff > Manage Groups > Edit",
	'generationdate' => 'XML Generated On: %s',
	'commentdelconfirm' => 'Comment deleted successfully',
	'commentstatusconfirm' => 'Comment status change completed successfully',
	'commentupdconfirm' => 'Comment by "%s" updated successfully',
	'unapprove' => 'Unapprove',
	'approve' => 'Approve',
	'paginall' => 'All',
	'approvedcomments' => 'Approved Comments',
	'unapprovedcomments' => 'Unapproved Comments',
	'fullname' => 'Full Name',
	'editcomment' => 'Edit Comment',
	'onlineusers' => 'Online Staff',
	'quickjump' => 'Quick Jump',
	'vardate1' => '%dd %dh %dm',
	'vardate2' => '%dh %dm %ds',
	'vardate3' => '%dm %ds',
	'vardate4' => '%ds',
	'choiceadd' => 'Add >',
	'choicerem' => '< Remove',
	'choicemup' => 'Move Up',
	'choicemdn' => 'Move Down',
	'ticketsubjectformat' => '[%s#%s]: %s',
	'forwardticketsubjectformat' => '[%s~%s]: %s',
	'loggedinas' => 'Logged In: ',
	'tcustomize' => 'Customize...',
	'reports' => 'Reports',
	'notifydemomode' => 'Permission denied. Product is in demo mode.',
	'demomode' => 'Cannot carry out action in demo mode',
	'titledemomode' => 'Unable to proceed',
	'msgdemomode' => 'Cannot carry out the required action in demo mode',
	'filter' => 'Filter',
	'editor' => 'Editor',
	'images' => 'Images',
	'uploadfile' => 'Upload File: ',
	'uploadedimages' => 'Uploaded Images',
	'tabinsert' => 'Insert',
	'tabedit' => 'Edit',
	'notifyfieldempty' => 'One of the required field(s) is empty',
	'titlefieldempty' => 'Invalid Data, Unable to proceed.',
	'msgfieldempty' => 'One of the required field(s) is empty or contains invalid data. Please make sure that you have entered all the required information in the fields below and in the format as required.',
	'save' => 'Save',
	'viewall' => 'View All',
	'allpages' => 'All Pages',
	'cancel' => 'Cancel',
	'save' => 'Save',
	'tabgeneral' => 'General',
	'maddimage' => 'Image',
	'maddlinktoimage' => 'Link to Image',
	'maddthumbnail' => 'Thumbnail',
	'maddthumbnailwithlink' => 'Thumbnail with Link',
	'checkuncheckall' => 'Check/Uncheck All',
	'language' => 'Language',
	'loginshare' => 'LoginShare',
	'defaultloginshare' => SWIFT_PRODUCT.' LoginShare',
	'licenselimit_unabletocreate' => 'Unable to create a new staff user because your license limit has been reached',
	'help' => 'Help',
	'name' => 'Name',
	'value' => 'Value',
	'engagevisitor' => 'Engage Visitor',
	'inlinechat' => 'Inline Chat',
	'url' => 'URL',
	'hexcode' => 'Hex Code',
	'vactionvariables' => 'Action: Variables',
	'vactionvexp' => 'Action: Visitor Experience',
	'vactionsalerts' => 'Action: Staff Alerts',
	'vactionsetdepartment' => 'Action: Set Department',
	'vactionsetskill' => 'Action: Set Skill',
	'vactionsetgroup' => 'Action: Set Group',
	'vactionsetcolor' => 'Action: Set Color',
	'vactionbanvisitor' => 'Action: Ban Visitor',
	'customengagevisitor' => 'Custom Engage Visitor',
	'managerules' => 'Manage Rules',
	'open' => 'Open',
	'close' => 'Close',
	'invalidusernoapiaccess' => 'Invalid Staff. This staff does not have API access, please configure under Settings > General.',
	'titleupdatedswiftsettings' => 'Updated "%s" Settings',
	'msgupdatedswiftsettings' => 'Successfully updated all settings for "%s" category.',
	'geoipprocessrunning' => 'Unable to rerun the build process. GeoIP Rebuilding process is already in progress.',
	'continueprocessquestion' => 'An existing task is still being executed. Do you wish to cancel it in order to continue?',
	'titleupdsettings' => 'Updated "%s" Settings',
	'msgupdsettings' => 'Successfully updated all settings for "%s"',
	'type' => 'Type',
	'banip' => 'IP (255.255.255.255)',
	'banclassc' => 'Class C (255.255.255.*)',
	'banclassb' => 'Class B (255.255.*.*)',
	'banclassa' => 'Class A (255.*.*.*)',
	'if' => 'If',
	'loginlogerror' => 'Login locked for %d minutes (attempt: %d/%d)',
	'loginlogwarning' => 'Invalid user name or password (attempt: %d/%d)',
	'na' => '- NA -',
	'redirectloading' => 'Loading...',
	'noinfoinview' => 'No information available in this view',
	'nochange' => '-- No Change --',
	'activestaff' => '-- Active Staff --',
	'notificationuser' => 'User',
	'notificationuserorganization' => 'User Organization',
	'notificationstaff' => 'Staff (Owner)',
	'notificationteam' => 'Staff Team',
	'notificationdepartment' => 'Department',
	'notificationsubject' => 'Subject: ',
	'lastupdate' => 'Last Update',
	'interface_admin' => 'Admin CP',
	'interface_staff' => 'Staff CP',
	'interface_intranet' => 'Intranet',
	'interface_api' => 'API',
	'interface_winapp' => 'Winapp',
	'interface_syncworks' => 'SyncWorks',
	'interface_instaalert' => 'InstaAlert',
	'interface_pda' => 'PDA',
	'interface_rss' => 'RSS',
	'error_database' => 'Database',
	'error_php' => 'PHP',
	'error_exception' => 'Exception',
	'error_mail' => 'Mail',
	'error_loginshare' => 'LoginShare',
	'loading' => 'Loading...',
	'pwtooshort' => 'Too short',
	'pwveryweak' => 'Very weak',
	'pwweak' => 'Weak',
	'pwmedium' => 'Medium',
	'pwstrong' => 'Strong',
	'pwverystrong' => 'Very strong',
	'pwunsafeword' => 'Unsafe password word!',
	'staffpasswordpolicy' => '<span class="tabletitle">Password Policy:</span> Minimum Password Length: %d, Minimum Number Count: %d, Minimum Symbol Count: %d, Minimum Capital Character Count: %d',
	'titlepwpolicy' => 'Password Policy Mismatch',
	'msgpwpolicy' => 'The password specified does not match the requirements of the Password Policy.',
	'passwordpolicymismatch' => 'The password specified does not match the requirements of the Password Policy.',
	'passwordexpired' => 'Password has expired',
	'newpassword' => 'New Password',
	'passwordagain' => 'Password (again)',
	'passworddontmatch' => 'New password does not match or is empty',
	'defaulttimezone' => '-- Default Time Zone --',
	'tagcloud' => 'Tag Cloud',
	'searchmodeactive' => 'Results are filtered',
	'notifysearchfailed' => '"0" Results found',
	'titlesearchfailed' => '"0" Results Found',
	'msgsearchfailed' => SWIFT_PRODUCT . ' was unable to locate any records matching the specified criteria.',
	'quickfilter' => 'Quick Filter',
	'fuenterurl' => 'Enter URL:',
	'fuorupload' => 'or Upload:',
	'errorsmtpconnect' => 'Unable to connect to SMTP server',
	'starttypingtags' => 'Start typing to insert tags...',
	'titleinvalidfileext' => 'Invalid Image File Extension',
	'msginvalidfileext' => 'The icon image file has an invalid extension. Allowed extensions are: gif, jpeg, jpg, png',
	'notset' => '-- Not Set --',
	'benchmarks' => 'Ratings',
	'system' => 'System',
	'schatid' => 'Chat ID',
	'smessagesurvey' => 'Messages/Surveys',

	// Operators
	'opcontains' => 'Contains',
	'opnotcontains' => 'Doesn\'t  Contain',
	'opequal' => 'Equal',
	'opnotequal' => 'Not Equal',
	'opgreater' => 'Greater Than',
	'opless' => 'Less Than',
	'opregexp' => 'Regular Expression',
	'opchanged' => 'Changed',
	'opnotchanged' => 'Not Changed',
	'opchangedfrom' => 'Changed from',
	'opchangedto' => 'Changed to',
	'opnotchangedfrom' => 'Not Changed from',
	'opnotchangedto' => 'Not Changed to',
	'matchand' => 'AND',
	'matchor' => 'OR',
	'strue' => 'True',
	'sfalse' => 'False',
	'notifynoperm' => 'Action not Permitted, permission denied.',
	'titlenoperm' => 'Action not Permitted',
	'msgnoperm' => SWIFT_PRODUCT.' is unable to continue as the currently logged in staff user does not have enough permission to carry out this action.',
	'cyesterday' => 'Yesterday',
	'ctoday' => 'Today',
	'ccurrentwtd' => 'Current week to date',
	'ccurrentmtd' => 'Current month to date',
	'ccurrentytd' => 'Current year to date',
	'cl7days' => 'Last 7 days',
	'cl30days' => 'Last 30 days',
	'cl90days' => 'Last 90 days',
	'cl180days' => 'Last 180 days',
	'cl365days' => 'Last 365 days',
	'ctomorrow' => 'Tomorrow',
	'cnextwfd' => 'Current week from date',
	'cnextmfd' => 'Current month from date',
	'cnextyfd' => 'Current year from date',
	'cn7days' => 'Next 7 days',
	'cn30days' => 'Next 30 days',
	'cn90days' => 'Next 90 days',
	'cn180days' => 'Next 180 days',
	'cn365days' => 'Next 365 days',
	'new' => 'New',
	'phoneext' => 'Phone: %s',
	'snewtickets' => 'New Tickets',
	'sadvancedsearch' => 'Advanced Search',
	'squicksearch' => 'Quick Search:',
	'sticketidlookup' => 'Ticket ID Lookup:',
	'screatorreplier' => 'Creator/Replier:',
	'smanage' => 'Manage',
	'clear' => 'Clear',
	'never' => 'Never',
	'seuser' => 'Users',
	'seuserorg' => 'User Organizations',
	'manage' => 'Manage',
	'import' => 'Import',
	'export' => 'Export',
	'comments' => 'Comments',
	'commentdata' => 'Comments:',
	'postnewcomment' => 'Post a new comment',
	'buttonsubmit' => 'Submit',
	'reply' => 'Reply',

	// Import from v3
	'short_all_tickets' => 'All',
	'iprestrictdenial' => 'Access Denied (%s): IP not allowed (%s), please add the IP in the allowed list under /config/config.php',

	// ======= CALENDAR LOCALE =======
	'calendar' => 'Calendar',
	'cal_clear' => 'Clear',
	'cal_close' => 'Close',
	'cal_prev' => '&laquo; Prev',
	'cal_next' => 'Next &raquo;',
	'cal_today' => 'Today',
	'cal_sunday' => 'Su',
	'cal_monday' => 'Mo',
	'cal_tuesday' => 'Tu',
	'cal_wednesday' => 'We',
	'cal_thursday' => 'Th',
	'cal_friday' => 'Fr',
	'cal_saturday' => 'Sa',
	'cal_january' => 'January',
	'cal_february' => 'February',
	'cal_march' => 'March',
	'cal_april' => 'April',
	'cal_may' => 'May',
	'cal_june' => 'June',
	'cal_july' => 'July',
	'cal_august' => 'August',
	'cal_september' => 'September',
	'cal_october' => 'October',
	'cal_november' => 'November',
	'cal_december' => 'December',

	/**
	* ###############################################
	* MODULE LIST
	* ###############################################
	*/
	'module_base' => 'Base',
	'module_tickets' => 'Tickets',
	'module_bugs' => 'Bugs',
	'module_knowledgebase' => 'Knowledgebase',
	'module_parser' => 'Mail Parser',
	'module_livechat' => 'Live Chat',
	'module_issues' => 'Issues',
	'module_troubleshooter' => 'Troubleshooter',
	'module_ringroute' => 'RingRoute',
	'module_news' => 'News',
	'module_downloads' => 'Downloads',
	'module_core' => 'Core',
);


/*
 * ###############################################
 * BEGIN INTERFACE RELATED CODE
 * ###############################################
 */



if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_ADMIN)
{
	/**
	* Admin Area Navigation Bar
	*/

	$_adminBarContainer = array (

		14 => array ('Settings', 'bar_settings.gif', MODULE_CORE, '/Base/Settings/Index'),
		26 => array ('REST API', 'bar_restapi.gif', MODULE_BASE),
		27 => array ('Tag Generator', 'bar_tag.gif', MODULE_BASE, '/Base/TagGenerator/Index'),
		0 => array ('Templates', 'bar_templates.gif', MODULE_BASE),
		1 => array ('Languages', 'bar_languages.gif', MODULE_CORE),
		2 => array ('Custom Fields', 'bar_customfields.gif', MODULE_CORE),
		25 => array ('GeoIP', 'bar_geoip.gif', MODULE_CORE, '/Base/GeoIP/Manage'),
		13 => array ('Live Chat', 'bar_livesupport.gif', MODULE_LIVECHAT),
		3 => array ('RingRoute', 'bar_ringroute.gif', MODULE_RINGROUTE),
		4 => array ('Mail Parser', 'bar_mailparser.gif', MODULE_PARSER),
		5 => array ('Tickets', 'bar_tickets.gif', MODULE_TICKETS),
		29 => array ('Workflow', 'bar_workflow.gif', MODULE_TICKETS, '/Tickets/Workflow/Manage'),
		30 => array ('Ratings', 'bar_benchmarks.gif', MODULE_TICKETS, '/Base/Benchmark/Manage'),
		6 => array ('SLA', 'bar_sla.gif', MODULE_TICKETS),
		7 => array ('Escalations', 'bar_escalations.gif', MODULE_TICKETS, '/Tickets/Escalation/Manage'),
		20 => array ('Bayesian', 'bar_bayesian.gif', MODULE_TICKETS),
		21 => array ('Knowledgebase', 'bar_knowledgebase.gif', MODULE_KNOWLEDGEBASE),
		22 => array ('Downloads', 'bar_downloads.gif', MODULE_DOWNLOADS),
		23 => array ('News', 'bar_news.gif', MODULE_NEWS),
		24 => array ('Troubleshooter', 'bar_troubleshooter.gif', MODULE_TROUBLESHOOTER),
		31 => array ('Widgets', 'bar_widgets.gif', MODULE_BASE, '/Core/Widget/Manage'),
		32 => array ('Modules', 'bar_modules.gif', MODULE_BASE, '/Core/Module/Manage'),
		9 => array ('Logs', 'bar_logs.gif', MODULE_BASE),
		10 => array ('Scheduled Tasks', 'bar_cron.gif', MODULE_BASE),
		11 => array ('Database', 'bar_database.gif', MODULE_BASE),
		33 => array ('Import', 'bar_import.gif', MODULE_BASE),
		12 => array ('Diagnostics', 'bar_diagnostics.gif', MODULE_BASE),
		34 => array ('Maintenance', 'bar_maintenance.gif', MODULE_BASE),
	);

	SWIFT::Set('adminbar', $_adminBarContainer);

	$_adminBarItemContainer = array (
		0 => array (
				0 => array ('Groups', '/Base/TemplateGroup/Manage'),
				1 => array ('Templates', '/Base/Template/Manage'),
				2 => array ('Search', '/Base/TemplateSearch/Index'),
				3 => array ('Import/Export', '/Base/TemplateManager/ImpEx'),
				4 => array ('Restore', '/Base/TemplateRestore/Index'),
				5 => array ('Diagnostics', '/Base/TemplateDiagnostics/Index'),
				6 => array ('Personalize', '/Base/TemplateManager/Personalize'),
			),

		1 => array (
				0 => array ('Languages', '/Base/Language/Manage'),
				1 => array ('Phrases', '/Base/LanguagePhrase/Manage'),
				2 => array ('Search', '/Base/LanguagePhrase/Search'),
				3 => array ('Import/Export', '/Base/LanguageManager/ImpEx'),
				4 => array ('Restore', '/Base/LanguageManager/Restore'),
				5 => array ('Diagnostics', '/Base/LanguageManager/Diagnostics'),
			),

		2 => array (
				0 => array ('Groups', '/Base/CustomFieldGroup/Manage'),
				1 => array ('Fields', '/Base/CustomField/Manage'),
			),

		3 => array (
				0 => array ('Settings', '/RingRoute/SettingsManager/Index'),
				1 => array ('Manage Profiles', '/RingRoute/ProfileManager/Index')
			),

		4 => array (
				0 => array ('Settings', '/Parser/SettingsManager/Index'),
				1 => array ('Email Queues', '/Parser/EmailQueue/Manage'),
				2 => array ('Rules', '/Parser/Rule/Manage'),
				3 => array ('Breaklines', '/Parser/Breakline/Manage'),
				4 => array ('Bans', '/Parser/Ban/Manage'),
				5 => array ('Catch-All', '/Parser/CatchAll/Manage'),
				6 => array ('Loop Blockages', '/Parser/LoopBlock/Manage'),
				7 => array ('Loop Rules', '/Parser/LoopRule/Manage'),
				9 => array ('Parser Log', '/Parser/ParserLog/Manage'),
			),

		5 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Index'),
				1 => array ('Types', '/Tickets/Type/Manage'),
				2 => array ('Statuses', '/Tickets/Status/Manage'),
				3 => array ('Priorities', '/Tickets/Priority/Manage'),
				4 => array ('File Types', '/Tickets/FileType/Manage'),
				5 => array ('Links', '/Tickets/Link/Manage'),
				8 => array ('Auto Close', '/Tickets/AutoClose/Manage'),
				7 => array ('Maintenance', '/Tickets/Maintenance/Index'),
			),

		6 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/SLA'),
				1 => array ('Plans', '/Tickets/SLA/Manage'),
				2 => array ('Schedules', '/Tickets/Schedule/Manage'),
				3 => array ('Holidays', '/Tickets/Holiday/Manage'),
				4 => array ('Import/Export', '/Tickets/HolidayManager/Index'),
			),

		20 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Bayesian'),
				1 => array ('Categories', '/Tickets/BayesianCategory/Manage'),
				2 => array ('Diagnostics', '/Tickets/BayesianDiagnostics/Index'),
		),

		9 => array (
				0 => array ('Error Log', '/Core/ErrorLog/Manage'),
				1 => array ('Task Log', '/Core/ScheduledTasks/TaskLog'),
				3 => array ('Activity Log', '/Core/ActivityLog/Manage'),
				4 => array ('Login Log', '/Core/LoginLog/Manage'),
		),

		10 => array (
				0 => array ('Manage', '/Core/ScheduledTasks/Manage'),
				1 => array ('Task Log', '/Core/ScheduledTasks/TaskLog'),
			),

		11 => array (
				0 => array ('Table Information', '/Core/Database/TableInfo'),
				1 => array ('Export XML', '/Core/Database/Export'),
			),

		12 => array (
				0 => array ('Active Sessions', '/Core/Diagnostics/ActiveSessions'),
				1 => array ('Cache Info', '/Core/Diagnostics/CacheInformation'),
				2 => array ('Rebuild Cache', '/Core/Diagnostics/RebuildCache'),
				3 => array ('PHP Info', '/Core/Diagnostics/PHPInfo'),
				4 => array ('Report Bug', '/Core/Diagnostics/ReportBug'),
				5 => array ('License Info', '/Core/Diagnostics/LicenseInformation'),
			),

		13 => array (
				0 => array ('Settings', '/LiveChat/SettingsManager/Index'),
				1 => array ('Rules', '/LiveChat/Rule/Manage'),
				2 => array ('Groups', '/LiveChat/Group/Manage'),
				3 => array ('Skills', '/LiveChat/Skill/Manage'),
				4 => array ('Bans', '/LiveChat/Ban/Manage'),
				5 => array ('Message Routing', '/LiveChat/MessageRouting/Index'),
				6 => array ('Online Status', '/LiveChat/OnlineStatus/Index'),
			),

		19 => array (
				0 => array ('Settings', '/Manuals/SettingsManager/Index'),
			),

		21 => array (
				0 => array ('Settings', '/KnowledgeBase/SettingsManager/Index'),
				1 => array ('Maintenance', '/KnowledgeBase/Maintenance/Index'),
			),

		22 => array (
				0 => array ('Settings', '/Downloads/SettingsManager/Index'),
			),

		23 => array (
				0 => array ('Settings', '/News/SettingsManager/Index'),
				1 => array ('Import/Export', '/News/ImpEx/Manage'),
			),

		24 => array (
				0 => array ('Settings', '/Troubleshooter/SettingsManager/Index'),
			),

		25 => array (
				0 => array ('Maintenance', '/Base/GeoIP/Manage'),
			),

		26 => array (
				0 => array ('Settings', '/Base/Settings/RESTAPI'),
				1 => array ('API Information', '/Base/RESTAPI/Index'),
			),

		33 => array (
				0 => array ('Manage', '/Base/Import/Manage'),
				1 => array ('Import Log', '/Base/ImportLog/Manage'),
			),

		34 => array (
				0 => array ('Purge Attachments', '/Base/PurgeAttachments/Index'),
				1 => array ('Move Attachments', '/Base/MoveAttachments/Index'),
			),

	);

	// Log stuff
	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Resolve')
	{
		$_adminBarItemContainer[9][2] = array ('Parser Log', '/Parser/ParserLog/Manage');
	}

	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Engage')
	{
		unset($_adminBarContainer[27]);
	}

	SWIFT::Set('adminbaritems', $_adminBarItemContainer);


	/**
	* Admin Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100, MODULE_NAME),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_adminMenuContainer = array (

		1 => array ('Home', 80, MODULE_CORE),
		2 => array ('Staff', 100, MODULE_BASE),
		3 => array ('Departments', 120, MODULE_BASE),
		4 => array ('Users', 100, MODULE_BASE),
	);

	SWIFT::Set('adminmenu', $_adminMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_adminLinkContainer = array (

		1 => array (
				0 => array ('Dashboard', '/Core/Dashboard/Index'),
				1 => array ('Settings', '/Base/Settings/Index'),
				),

		2 => array (
				0 => array ('Manage Staff', '/Base/Staff/Manage'),
				1 => array ('Manage Teams', '/Base/StaffGroup/Manage'),
				2 => array ('Insert Staff', '/Base/Staff/Insert'),
				3 => array ('Insert Team', '/Base/StaffGroup/Insert'),
				4 => array ('LoginShare', '/Base/Settings/StaffLoginShare'),
				5 => array ('Settings', '/Base/Settings/Staff'),
				),

		3 => array (
				0 => array ('Manage Departments', '/Base/Department/Manage'),
				1 => array ('Insert Department', '/Base/Department/Insert'),
				2 => array ('Access Overview', '/Base/Department/AccessOverview'),
				),

		4 => array (
				0 => array ('Manage User Groups', '/Base/UserGroup/Manage'),
				1 => array ('Insert User Group', '/Base/UserGroup/Insert'),
				2 => array ('LoginShare', '/Base/Settings/UserLoginShare'),
				3 => array ('Settings', '/Base/Settings/User'),
				),
	);

	SWIFT::Set('adminlinks', $_adminLinkContainer);
} else if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_STAFF) {
	/**
	* Staff Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_staffMenuContainer = array (
		1 => array ('Home', 80, MODULE_CORE),
		2 => array ('Tickets', 100, MODULE_TICKETS, 't_entab'),
		3 => array ('Live Chat', 120, MODULE_LIVECHAT, 'ls_entab'),
		4 => array ('Knowledgebase', 140, MODULE_KNOWLEDGEBASE, 'kb_entab'),
		5 => array ('Downloads', 110, MODULE_DOWNLOADS, 'dl_entab'),
		6 => array ('Troubleshooter', 140, MODULE_TROUBLESHOOTER, 'tr_entab'),
		7 => array ('News', 90, MODULE_NEWS, 'nw_entab'),
		8 => array ('Users', 90, MODULE_CORE, 'cu_entab'),
		9 => array ('Reports', 90, MODULE_REPORTS, 'rp_entab'),
	);

	SWIFT::Set('staffmenu', $_staffMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_staffLinkContainer = array (

		1 => array (
				0 => array ('Dashboard', '/Core/Dashboard/Index'),
				1 => array ('Preferences', '/Base/Preferences/ViewPreferences'),
				2 => array ('Notifications', '/Base/Notification/Manage', 'staff_canviewnotifications'),
				3 => array ('Comments', '/Base/Comment/Manage', 'staff_canviewcomments'),
				),

		2 => array (
				0 => array ('Manage Tickets', '/Tickets/Manage/Index', 'staff_tcanviewtickets'),
				1 => array ('Search', ':UIDropDown(\'ticketsearchmenu\', event, \'linkmenu2_1\', \'linksdiv\'); LinkTicketSearchForms();'),
				2 => array ('New Ticket', ':UICreateWindow(\'/Tickets/Ticket/NewTicket/\', \'newticket\', \'New Ticket\', \'Loading..\', 600, 350, true);', 'staff_tcaninsertticket'),
				3 => array ('Macros', '/Tickets/MacroCategory/Manage', 'staff_tcanviewmacro'),
				4 => array ('Views', '/Tickets/View/Manage', 'staff_tcanview_views'),
				5 => array ('Filters', ':UIDropDown(\'ticketfiltermenu\', event, \'linkmenu2_5\', \'linksdiv\');'),
				),

		3 => array (
				0 => array ('Chat History', '/LiveChat/ChatHistory/Manage', 'staff_lscanviewchat'),
				1 => array ('Messages/Surveys', '/LiveChat/Message/Manage', 'staff_lscanviewmessages'),
				2 => array ('Call Logs', '/LiveChat/Call/Manage', 'staff_lscanviewcalls'),
				3 => array ('Canned', '/LiveChat/CannedCategory/Manage', 'admin_lscanviewcanned'),
				4 => array ('Search', ':UIDropDown(\'chatsearchmenu\', event, \'linkmenu3_4\', \'linksdiv\'); LinkChatSearchForms();'),
				),

		4 => array (
				0 => array ('View Knowledgebase', '/Knowledgebase/ViewKnowledgebase/Index'),
				1 => array ('Manage Knowledgebase', '/Knowledgebase/Article/Manage'),
				2 => array ('Categories', '/Knowledgebase/Category/Manage'),
				3 => array ('New Article', '/Knowledgebase/Article/Insert'),
				),

		5 => array (
				0 => array ('View Downloads', '/Downloads/Downloads/Manage'),
				1 => array ('Manage Downloads', '/Downloads/Downloads/Manage'),
				2 => array ('Categories', '/Downloads/Category/Insert'),
				3 => array ('New File', '/Downloads/File/Insert'),
				),

		6 => array (
				0 => array ('View Troubleshooter', '/Troubleshooter/Category/ViewAll'),
				1 => array ('Manage Troubleshooter', '/Troubleshooter/Step/Manage'),
				2 => array ('Categories', '/Troubleshooter/Category/Manage'),
				3 => array ('New Step', ':UICreateWindow(\'/Troubleshooter/Step/InsertDialog/\', \'newstep\', \'Insert Step\', \'Loading..\', 400, 200, true);'),
				),

		7 => array (
				0 => array ('View News', '/News/NewsItem/ViewAll', 'staff_nwcanviewitems'),
				1 => array ('Manage News', '/News/NewsItem/Manage', 'staff_nwcanmanageitems'),
				2 => array ('Categories', '/News/Category/Manage', 'staff_nwcanviewcategories'),
				3 => array ('Subscribers', '/News/Subscriber/Manage', 'staff_nwcanviewsubscribers'),
				4 => array ('Insert News', ':UICreateWindow(\'/News/NewsItem/InsertDialog/\', \'newnews\', \'Insert News\', \'Loading..\', 600, 350, true);'),
				),

		8 => array (
				0 => array ('Manage Users', '/Base/User/Manage', 'staff_canviewusers'),
				1 => array ('Manage Organizations', '/Base/UserOrganization/Manage', 'staff_canviewuserorganizations'),
				2 => array ('Search', ':UIDropDown(\'usersearchmenu\', event, \'linkmenu8_2\', \'linksdiv\'); LinkUserSearchForms();'),
				3 => array ('Insert User', '/Base/User/Insert', 'staff_caninsertuser'),
				4 => array ('Insert Organization', '/Base/UserOrganization/Insert', 'staff_caninsertuserorganization'),
				),

		9 => array (
				0 => array ('Manage Reports', '/Reports/Report/Manage'),
				1 => array ('Categories', '/Reports/Category/Manage'),
				2 => array ('New Report', ':UICreateWindow(\'/Reports/Report/InsertDialog/\', \'newreport\', \'New Report\', \'Loading..\', 400, 240, true);'),
				),
	);

	$_staffLinkContainer[2][1][15] = true;
	$_staffLinkContainer[2][5][15] = true;
	$_staffLinkContainer[8][2][15] = true;
	$_staffLinkContainer[3][4][15] = true;

	SWIFT::Set('stafflinks', $_staffLinkContainer);
}


?>