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

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'tickets' => 'Tickets',
	'insertworkflow' => 'Insert Workflow',
	'desc_insertworkflow' => '',
	'tabgeneral' => 'General',
	'tabactions' => 'Actions',
	'workflowtitle' => 'Workflow Title',
	'desc_workflowtitle' => 'Enter the Workflow Rule Title',
	'isenabled' => 'Is Enabled?',
	'desc_isenabled' => 'Toggle the execution of this Workflow rule by enabling/disabling this option.',
	'triggerevent' => 'Trigger Event',
	'desc_triggerevent' => 'Select the event that triggers this Workflow rule',
	'insertcriteria' => 'Insert Criteria',
	'sortorder' => 'Sort Order',
	'desc_sortorder' => 'Specify the Sort Order for this Workflow Rule. Rules are always processed in Ascending Order.',
	'smatchtype' => 'Match Type',
	'matchtype' => 'Criteria Options',
	'desc_matchtype' => 'Select the grouping method for the criteria fields.',
	'smatchall' => 'Match All (AND)',
	'smatchany' => 'Match Any (OR)',
	'editworkflow' => 'Edit Workflow',
	'desc_editworkflow' => '',
	'invalidworkflowrule' => 'Invalid Workflow Rule. Please make sure the record exists in the database.',
	'manageworkflows' => 'Workflows',
	'desc_manageworkflows' => '',
	'creationdate' => 'Creation Date',
	'titleworkflowdel' => 'Deleted "%d" Ticket Workflow Rules',
	'msgworkflowdel' => 'Successfully deleted the following Ticket Workflow Rules:',
	'tabnotifications' => 'Notifications',
	'insertnotification' => 'Insert Notification',

	'tabpermissions' => 'Permissions',
	'staffvisibilitycustom' => 'Restrict Change to Custom Staff Teams?',
	'desc_staffvisibilitycustom' => 'If Enabled, the workflow will be visible and can be executed only by the selected staff teams.',
	'staffgroups' => 'Staff Teams',

	// Actions
	'nochange' => '-- No Change --',
	'actionstaff' => 'Assign to Staff',
	'desc_actionstaff' => '',
	'actionpriority' => 'Change Priority',
	'desc_actionpriority' => '',
	'actionticketstatus' => 'Change Ticket Status',
	'desc_actionticketstatus' => '',
	'actiondepartment' => 'Move to Department',
	'desc_actiondepartment' => '',
	'actionslaplan' => 'Change SLA Plan',
	'desc_actionslaplan' => '',
	'actionflagtype' => 'Change Flag Type',
	'desc_actionflagtype' => '',
	'noplanavailable' => '-- Not Available --',
	'actionnotes' => 'Add Notes',
	'desc_actionnotes' => '',
	'titlenoaction' => 'No Action Selected',
	'msgnoaction' => 'You need to select atleast one action to execute if the criteria for this workflow rule matches.',
	'actionaddtags' => 'Add Tags',
	'desc_actionaddtags' => '',
	'actionremovetags' => 'Remove Tags',
	'desc_actionremovetags' => '',
	'actiontickettype' => 'Change Ticket Type',
	'desc_tickettype' => '',
	'actiontrainbayesian' => 'Train Bayesian',
	'desc_trainbayesian' => '',
	'actiontrash' => 'Move to Trash',
	'desc_actiontrash' => '',

	// Trigger Events
	'tecron' => 'Scheduled Task (Recurring automatic execution)',
	'desc_tecron' => 'This event is triggered whenever a scheduled task is executed. Usually every 3-5 minutes depending upon pseudo/manual cron execution.',
	'teticketcreation' => 'Ticket Creation',
	'desc_teticketcreation' => 'This event is triggered whenever a new ticket is created',
	'teslaplan' => 'SLA Plan Change',
	'desc_teslaplan' => 'This event is triggered whenever a SLA Plan is changed for a ticket',
	'teflag' => 'Flag Change',
	'desc_teflag' => 'This event is triggered on change of the flag type on a ticket',
	'temarkdue' => 'Ticket Marked Due',
	'desc_temarkdue' => 'This event is triggered whenever a ticket is marked as due',
	'teaddrecipients' => 'Recipients Addition',
	'desc_teaddrecipients' => 'This event is triggered whener a recipient is added for a ticket',
	'teupdateproperties' => 'Update Properties',
	'desc_teupdateproperties' => 'This event is triggered on update of ticket properties',
	'testaffreply' => 'Staff Reply',
	'desc_testaffreply' => 'This event is triggered whenever a staff replies to a ticket',
	'teuserreply' => 'User Reply',
	'desc_teuserreply' => 'This event is triggered whenever a user replies to a ticket',
	'teticketnote' => 'Ticket Note',
	'desc_teticketnote' => 'This event is triggered whenever a note is added to a ticket',
	'techangepriority' => 'Priority Change',
	'desc_techangepriority' => 'This event is triggered whenever a priority is changed for a ticket',
	'techangestatus' => 'Status Change',
	'desc_techangestatus' => 'This event is triggered whenever a status is changed for a ticket',
	'teassignticket' => 'Assign Ticket',
	'desc_teassignticket' => 'This event is triggered whenever a ticket is assigned to a staff',
	'temoveticket' => 'Move Ticket',
	'desc_temoveticket' => 'This event is triggered whenever a ticket is moved to a new department',
	'teforwardticket' => 'Ticket Forward',
	'desc_teforwardticket' => 'This event is triggered whenever a ticket is forwarded to a third party',
	'tesavedraft' => 'Save as Draft',
	'desc_tesavedraft' => 'This event is triggered whenever a ticket is saved as draft',
	'teescalateticket' => 'Ticket Escalated',
	'desc_teescalateticket' => 'This event is triggered whenever a ticket is escalated',
	'tetimeworked' => 'Time Worked',
	'desc_timeworked' => 'This event is triggered whenever a time worked entry is added for a ticket',
	'teticketpost' => 'Ticket Post Updated',
	'desc_teticketpost' => 'This event is triggered whenever a ticket post is updated by a staff',
	'teaddlabel' => 'Label',
	'desc_teaddlabel' => 'This event is triggered whenever a label is added for a ticket',
	'titleinsertworkflow' => 'Inserted Ticket Workflow Rule "%s"',
	'msginsertworkflow' => 'Successfully inserted Ticket Workflow rule "%s" into the database.',
	'titleupdateworkflow' => 'Updated Ticket Workflow Rule "%s"',
	'msgupdateworkflow' => 'Successfully updated Ticket Workflow rule "%s".',
	'titleworkflowenable' => 'Enabled "%d" Ticket Workflow(s)',
	'msgworkflowenable' => SWIFT_PRODUCT . ' has successfully enabled the following ticket workflow(s):',
	'titleworkflowdisable' => 'Disabled "%d" Ticket Workflow(s)',
	'msgworkflowdisable' => SWIFT_PRODUCT . ' has successfully disabled the following ticket workflow(s):',
	'wfaticketstatus' => 'Change Ticket Status',
	'wfatickettype' => 'Change Ticket Type',
	'wfaaddtags' => 'Add Tags',
	'wfaremovetags' => 'Remove Tags',
	'wfadepartment' => 'Change Ticket Department',
	'wfaflag' => 'Flag Ticket',
	'wfaddnotes' => 'Add Notes',
	'wfapriority' => 'Change Ticket Priority',
	'wfastaff' => 'Change Ticket Owner',
	'wfaslaplan' => 'Change SLA Plan',
	'wfabayesian' => 'Train Bayesian',
	'wfatrash' => 'Move to Trash',

	// Criteria Tags
	'wftickettype' => 'Ticket Type',
	'desc_wftickettype' => '',
	'wfbayesian' => 'Bayesian Category',
	'desc_wfbayesian' => '',
	'wfsubject' => 'Subject',
	'desc_wfsubject' => '',
	'notapplicable' => '-- Not Available --',
	'wfticketstatus' => 'Ticket Status',
	'desc_wfticketstatus' => '',
	'wfticketpriority' => 'Ticket Priority',
	'desc_wfticketpriority' => '',
	'wfusergroup' => 'User Group',
	'desc_wfusergroup' => '',
	'wfdepartment' => 'Department',
	'desc_wfdepartment' => '',
	'wfowner' => 'Owner',
	'desc_wfowner' => '',
	'wfunassigned' => '-- Unassigned --',
	'wfactivestaff' => '-- Active Staff --',
	'wfemailqueue' => 'Email Queue',
	'desc_wfemailqueue' => '',
	'wfflagtype' => 'Flag Type',
	'desc_wfflagtype' => '',
	'purpleflag' => 'Purple Flag',
	'orangeflag' => 'Orange Flag',
	'greenflag' => 'Green Flag',
	'yellowflag' => 'Yellow Flag',
	'redflag' => 'Red Flag',
	'blueflag' => 'Blue Flag',
	'wfcreator' => 'Ticket Creator',
	'desc_wfcreator' => '',
	'creatorstaff' => 'Staff',
	'creatorclient' => 'Client',
	'wffullname' => 'Fullname',
	'desc_wffullname' => '',
	'wfemail' => 'Email',
	'desc_wfemail' => '',
	'wflastreplier' => 'Last Replier',
	'desc_wflastreplier' => '',
	'wfcharset' => 'Charset',
	'desc_wfcharset' => '',
	'wfslaplan' => 'SLA Plan',
	'desc_wfslaplan' => '',
	'wfdate' => 'Creation Date',
	'desc_wfdate' => '',
	'wfdaterange' => 'Creation Date <range>',
	'desc_wfdaterange' => '',
	'wflastactivity' => 'Last Post Activity',
	'desc_wflastactivity' => '',
	'wflastactivityrange' => 'Last Post Activity <range>',
	'desc_wflastactivityrange' => '',
	'wflaststaffreply' => 'Last Staff Reply',
	'desc_wflaststaffreply' => '',
	'wflaststaffreplyrange' => 'Last Staff Reply <range>',
	'desc_wflaststaffreplyrange' => '',
	'wflastuserreply' => 'Last User Reply',
	'desc_wflastuserreply' => '',
	'wflastuserreplyrange' => 'Last User Reply <range>',
	'desc_wflastuserreplyrange' => '',
	'wfdue' => 'Due Timeline',
	'desc_wfdue' => '',
	'wfduerange' => 'Due Timeline <range>',
	'desc_wfduerange' => '',
	'wfisoverdue' => 'Is Overdue?',
	'desc_wfisoverdue' => '',
	'wfresolutiondue' => 'Resolution Due Timeline',
	'desc_wfresolutiondue' => '',
	'wfresolutionduerange' => 'Resolution Due Timeline <range>',
	'desc_wfresolutionduerange' => '',
	'wfisresolutionoverdue' => 'Is Resolution Overdue?',
	'desc_wfisresolutionoverdue' => '',
	'wftemplategroup' => 'Template Group',
	'desc_wftemplategroup' => '',
	'wftimeworked' => 'Time Worked (In Minutes)',
	'desc_wftimeworked' => '',
	'wftotalreplies' => 'Total Replies',
	'desc_wftotalreplies' => '',
	'wfpendingfollowups' => 'Pending Follow-Ups',
	'desc_wfpendingfollowups' => '',
	'wfipaddress' => 'IP Address',
	'desc_wfipaddress' => '',
	'wfisemailed' => 'Is Emailed',
	'desc_wfisemailed' => '',
	'wfisedited' => 'Is Edited',
	'desc_wfisedited' => '',
	'wfhasnotes' => 'Has Notes',
	'desc_wfhasnotes' => '',
	'wfhasattachments' => 'Has Attachments',
	'desc_wfhasattachments' => '',
	'wfisescalated' => 'Is Escalated',
	'desc_wfisescalated' => '',
	'wfhasdraft' => 'Has Draft',
	'desc_wfhasdraft' => '',
	'wfhasbilling' => 'Has Billing',
	'desc_wfhasbilling' => '',
	'wfisphonecall' => 'Is Phone Ticket',
	'desc_wfisphonecall' => '',
	'wfislabeled' => 'Is Labeled',
	'desc_wfislabeled' => '',
);
?>