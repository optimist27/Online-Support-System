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

$__LANG = array(
	'autoclose' => 'Auto Close',
	'manage' => 'Manage',
	'targetstatus' => 'Target Status',
	'tabgeneral' => 'General',

	'insertrule' => 'Insert Rule',
	'editrule' => 'Edit Rule',

	'ruletitle' => 'Rule Title',
	'desc_ruletitle' => 'Enter your Auto Close rule title.',
	'targetticketstatus' => 'Target Status',
	'desc_targetticketstatus' => 'Select the status to which the ticket will be updated to once the closure threshold timeline is over.',
	'inactivitythreshold' => 'Inactivity (Hours)',
	'desc_inactivitythreshold' => 'Enter the number of hours after which a ticket is marked as inactive, this is the first step towards auto closure and is generally used to warn the user of the impending closure of the ticket.',
	'closurethreshold' => 'Closure (Hours)',
	'desc_closurethreshold' => 'Enter the number of hours after which an <i>inactive</i> ticket is marked as resolved, this is the final step in auto closure and triggers the final closure notice and the status change of the ticket.',
	'isenabled' => 'Is Enabled?',
	'desc_isenabled' => 'Toggle the execution of this Auto Close rule by enabling/disabling this option.',
	'sortorder' => 'Sort Order',
	'desc_sortorder' => 'Specify the Sort Order for this Rule. Rules are always processed in Ascending Order.',
	'sendpendingnotification' => 'Send Pending Closure Notification',
	'desc_sendpendingnotification' => 'If Enabled, the system will alert the client of the pending closure of the ticket. This notification is triggered when there has been no update to the ticket for the number of hours equal to the inactivity threshold specified above.',
	'sendfinalnotification' => 'Send Final Closure Notification',
	'desc_sendfinalnotification' => 'If Enabled, the system will alert the client of the final closure of the ticket. This notification is triggered on an inactive ticket once the closure threshold is reached and after the ticket status has been set to the one specified above.',
	'insertcriteria' => 'Insert Criteria',


	'titleautocloseruledel' => 'Deleted "%d" Auto Close Rule(s)',
	'msgautocloseruledel' => 'Successfully deleted the following Auto Close Rule(s) from the database:',
	'titleautocloseruleenable' => 'Enabled "%d" Auto Close Rule(s)',
	'msgautocloseruleenable' => 'Successfully enabled the following Auto Close Rule(s):',
	'titleautocloseruledisable' => 'Disabled "%d" Auto Close Rule(s)',
	'msgautocloseruledisable' => 'Successfully disabled the following Auto Close Rule(s):',
	'titleautocloseruleinsert' => 'Inserted Auto Close Rule',
	'msgautocloseruleinsert' => 'Successfully inserted the Auto Close Rule "%s" into the database.',
	'titleautocloseruleupdate' => 'Updated Auto Close Rule',
	'msgautocloseruleupdate' => 'Successfully updated the Auto Close Rule "%s".',

	'titlenocriteriaadded' => 'No Criteria Available',
	'msgnocriteriaadded' => 'You need to add atleast one criteria in order to insert/edit the auto close rule.',

	/**
	 * ---------------------------------------------
	 * Rule Criterias
	 * ---------------------------------------------
	 */
	'notapplicable' => '-- NA --',
	'articketstatusid' => 'Ticket Status',
	'desc_articketstatusid' => '',
	'arpriorityid' => 'Ticket Priority',
	'desc_arpriorityid' => '',
	'ardepartmentid' => 'Department',
	'desc_ardepartmentid' => '',
	'arownerstaffid' => 'Ticket Owner',
	'desc_arownerstaffid' => '',
	'aremailqueueid' => 'Email Queue',
	'arusergroupid' => 'User Group',
	'desc_arusergroupid' => '',
	'desc_aremailqueueid' => '',
	'arflagtype' => 'Flag Type',
	'desc_arflagtype' => '',
	'arbayescategoryid' => 'Bayesian Category',
	'desc_arbayescategoryid' => '',
	'purpleflag' => 'Purple Flag',
	'redflag' => 'Red Flag',
	'orangeflag' => 'Orange Flag',
	'yellowflag' => 'Yellow Flag',
	'blueflag' => 'Blue Flag',
	'greenflag' => 'Green Flag',
	'arcreator' => 'Creator',
	'desc_arcreator' => '',
	'creatorstaff' => 'Staff',
	'creatorclient' => 'User',
	'arunassigned' => '-- Unassigned --',
	'artemplategroupid' => 'Template Group',
	'desc_artemplategroupid' => '',
	'artickettypeid' => 'Ticket Type',
	'desc_artickettypeid' => '',
);
?>