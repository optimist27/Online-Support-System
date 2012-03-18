//=======================================
//###################################
// Kayako Infotech Ltd. - SWIFT Framework
//
// Source Copyright 2001-2007 Kayako Infotech Ltd.
// Unauthorized reproduction is not allowed
// License Number: $%LICENSE%$
// $Author$ ($Date$)
// $RCSfile$ : $Revision$
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//                   www.kayako.com
//###################################
//=======================================

/**
* ###############################################
* BEGIN ADMIN CP > BENCHMARKS JS
* ###############################################
*/

function ToggleBenchmarkTypeValues() {
	// Ticket or Ticket Post?
	if ($('#selectbenchmarktype').val() == '1' || $('#selectbenchmarktype').val() == '2')
	{
		$('#tr_departmentid').show();
	} else {
		$('#tr_departmentid').hide();
	}
}

/**
* ###############################################
* END ADMIN CP > BENCHMARKS JS
* ###############################################
*/


/**
* ###############################################
* BEGIN ADMIN CP > TAG GENERATOR JS
* ###############################################
*/

function newTagGeneratorRow(_htmlData)
{
	var _rowElement = document.createElement('div');
	_rowElement.id = "tgrow" + globalRuleIndex;
	var _rowMod = globalRuleIndex % 2;
	_rowElement.className = "searchrule" + _rowMod;

	var _parentContainer = $('#taggeneratorcontainer');
	if (!_parentContainer)
	{
		return false;
	}

	_parentContainer.append(_rowElement);
	_rowElement.style.display = 'none';
	_rowElement.innerHTML = _htmlData;
	$(_rowElement).fadeIn('medium');
	globalRuleIndex++;
};

function removeTagGeneratorRow(_ruleIndex)
{
	$('#tgrow' + _ruleIndex).fadeOut('medium', function() {$('#tgrow' + _ruleIndex).remove();});

	return;
};

function newTagGeneratorVariable() {
	_returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeTagGeneratorRow(\''+globalRuleIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionvariables']+'</b><input type="hidden" name="tagextend['+globalRuleIndex+'][0]" value="variable" /></td></tr>';
	_returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	_returnResult += '<tr><td align="left" width="60">'+swiftLanguage['name']+':</td><td align="left"><input type="text" class="swifttext" name="tagextend['+globalRuleIndex+'][1]" value="'+ '' +'" size="30" /></td></tr>';
	_returnResult += '<tr><td align="left" width="60">'+swiftLanguage['value']+':</td><td align="left"><input type="text" class="swifttext" name="tagextend['+globalRuleIndex+'][2]" value="'+ '' +'" size="30" /></td></tr>';
	_returnResult += '</table></td></tr></table>';
	newTagGeneratorRow(_returnResult);
}

function newTagGeneratorAlert() {
	_returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeTagGeneratorRow(\''+globalRuleIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionsalerts']+'</b><input type="hidden" name="tagextend['+globalRuleIndex+'][0]" value="alert" /></td></tr>';
	_returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	_returnResult += '<tr><td align="left" width="60">'+swiftLanguage['title']+':</td><td align="left"><input type="text" class="swifttext" name="tagextend['+globalRuleIndex+'][1]" value="'+ '' +'" size="30" /></td></tr>';
	_returnResult += '<tr><td align="left" width="60">'+swiftLanguage['value']+':</td><td align="left"><input type="text" class="swifttext" name="tagextend['+globalRuleIndex+'][2]" value="'+ '' +'" size="50" /></td></tr>';
	_returnResult += '</table></td></tr></table>';
	newTagGeneratorRow(_returnResult);
}

/**
* ###############################################
* END ADMIN CP > TAG GENERATOR JS
* ###############################################
*/


/**
* ###############################################
* BEGIN VISITOR RULE ACTION JS
* ###############################################
*/

var visitorActionIndex = 1;

/**
* New Visitor Action Row
*/
function globalNewVisitorActionRow(htmlData)
{
	var rowElement = document.createElement("div");
	rowElement.id = "actionrow"+visitorActionIndex;
	var rowMod = visitorActionIndex%2;
	rowElement.className = "searchrule"+rowMod;

	var parentContainer = $('#visitorActionParent');
	if (!parentContainer)
	{
		return false;
	}

	parentContainer.append(rowElement);
	rowElement.style.display = 'none';
	rowElement.innerHTML = htmlData;
	$(rowElement).fadeIn('medium');
	visitorActionIndex++;
};

function removeGlobalActionRow(ruleindex)
{
	$('#actionrow'+ruleindex).fadeOut('medium', function() {$('#actionrow'+ruleindex).remove();});

	return;
};

/**
* New Variable Action
*/
function globalActionVariables(variableName, variableValue)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionvariables']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="variable" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['name']+':</td><td align="left"><input type="text" class="swifttext" name="ruleaction['+visitorActionIndex+'][1]" value="'+variableName+'" size="30" /></td></tr>';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['value']+':</td><td align="left"><input type="text" class="swifttext" name="ruleaction['+visitorActionIndex+'][2]" value="'+variableValue+'" size="30" /></td></tr>';
	returnResult += '</table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* New Visitor Experience Action
*/
function globalActionVisitorExperience(engageType, engageValue)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionvexp']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="visitorexperience" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="16"><input type="radio" name="ruleaction['+visitorActionIndex+'][1]" value="engage" id="ruleactionradio'+visitorActionIndex+'_engage"'+iif(engageType=='engage', ' checked', '')+' /></td><td align="left" style="padding-top: 6px;"><label for="ruleactionradio'+visitorActionIndex+'_engage">'+swiftLanguage['engagevisitor']+'</label></td></tr>';
	returnResult += '<tr><td align="left" width="16"><input type="radio" name="ruleaction['+visitorActionIndex+'][1]" value="inline" id="ruleactionradio'+visitorActionIndex+'_inline"'+iif(engageType=='inline', ' checked', '')+' /></td><td align="left" style="padding-top: 6px;"><label for="ruleactionradio'+visitorActionIndex+'_inline">'+swiftLanguage['inlinechat']+'</label></td></tr>';
//	returnResult += '<tr><td align="left" width="16"><input type="radio" name="ruleaction['+visitorActionIndex+'][1]" value="customengage" id="ruleactionradio'+visitorActionIndex+'_customengage"'+iif(engageType=='customengage', ' checked', '')+' /></td><td align="left" style="padding-top: 6px;"><label for="ruleactionradio'+visitorActionIndex+'_customengage">'+swiftLanguage['customengagevisitor']+'</label></td></tr>';
//	returnResult += '<tr><td align="left" width="16"><img src="'+themepath+'images/space.gif" /></td><td align="left" style="padding-top: 6px;">'+swiftLanguage['url']+': <input type="text" class="swifttext" name="ruleaction['+visitorActionIndex+'][2]" value="'+engageValue+'" size="30" /></td></tr>';
	returnResult += '</table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* Staff Alerts
*/
function globalActionStaffAlerts(alertTitle, alertValue)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionsalerts']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="staffalert" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['title']+':</td><td align="left"><input type="text" class="swifttext" name="ruleaction['+visitorActionIndex+'][1]" value="'+alertTitle+'" size="30" /></td></tr>';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['value']+':</td><td align="left"><input type="text" class="swifttext" name="ruleaction['+visitorActionIndex+'][2]" value="'+alertValue+'" size="50" /></td></tr>';
	returnResult += '</table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* Set Department
*/
function globalActionSetDepartment(departmentID)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionsetdepartment']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="setdepartment" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['title']+':</td><td align="left"><select name="ruleaction['+visitorActionIndex+'][1]" class="swiftselect">';
	if (lsdepartmentsobj)
	{
		for (key in lsdepartmentsobj)
		{
			if (departmentID == lsdepartmentsobj[key]['0'])
			{
				returnResult += '<option value="'+lsdepartmentsobj[key]['0']+'" selected>'+lsdepartmentsobj[key]['1']+'</option>';
			} else {
				returnResult += '<option value="'+lsdepartmentsobj[key]['0']+'">'+lsdepartmentsobj[key]['1']+'</option>';
			}
		}
	}
	returnResult += '</select></table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* Set Skill
*/
function globalActionSetSkill(visitorSkillID)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionsetskill']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="setskill" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['title']+':</td><td align="left"><select name="ruleaction['+visitorActionIndex+'][1]" class="swiftselect">';
	if (lschatskillsobj)
	{
		for (key in lschatskillsobj)
		{
			if (visitorSkillID == lschatskillsobj[key]['0'])
			{
				returnResult += '<option value="'+lschatskillsobj[key]['0']+'" selected>'+lschatskillsobj[key]['1']+'</option>';
			} else {
				returnResult += '<option value="'+lschatskillsobj[key]['0']+'">'+lschatskillsobj[key]['1']+'</option>';
			}
		}
	}
	returnResult += '</select></table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* Set Group
*/
function globalActionSetGroup(visitorGroupID)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionsetgroup']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="setgroup" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['title']+':</td><td align="left"><select name="ruleaction['+visitorActionIndex+'][1]" class="swiftselect">';
	if (lsvisitorgroupobj)
	{
		for (key in lsvisitorgroupobj)
		{
			if (visitorGroupID == lsvisitorgroupobj[key]['0'])
			{
				returnResult += '<option value="'+lsvisitorgroupobj[key]['0']+'" selected>'+lsvisitorgroupobj[key]['1']+'</option>';
			} else {
				returnResult += '<option value="'+lsvisitorgroupobj[key]['0']+'">'+lsvisitorgroupobj[key]['1']+'</option>';
			}
		}
	}
	returnResult += '</select></table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* Set Color
*/
function globalActionSetColor(variableValue)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionsetcolor']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="setcolor" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['hexcode']+':</td><td align="left"><input type="text" class="swifttext" name="ruleaction['+visitorActionIndex+'][1]" value="'+variableValue+'" size="30" /> (Ex: #000000)</td></tr>';
	returnResult += '</table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* Set Color
*/
function globalActionBanVisitor(variableValue)
{
	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="16"><a href="javascript:void(0);" onClick="javascript:removeGlobalActionRow(\''+visitorActionIndex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="100%"><b>'+swiftLanguage['vactionbanvisitor']+'</b><input type="hidden" name="ruleaction['+visitorActionIndex+'][0]" value="banvisitor" /></td></tr>';
	returnResult += '<tr><td colspan="2"><table border="0" cellpadding="3" cellspacing="1" width="100%">';
	returnResult += '<tr><td align="left" width="60">'+swiftLanguage['type']+':</td><td align="left"><select name="ruleaction['+visitorActionIndex+'][1]" class="swiftselect">';
	returnResult += '<option value="ip"'+iif(variableValue=="ip", " selected", "")+'>'+swiftLanguage['banip']+'</option>';
	returnResult += '<option value="classc"'+iif(variableValue=="classc", " selected", "")+'>'+swiftLanguage['banclassc']+'</option>';
	returnResult += '<option value="classb"'+iif(variableValue=="classb", " selected", "")+'>'+swiftLanguage['banclassb']+'</option>';
	returnResult += '<option value="classa"'+iif(variableValue=="classa", " selected", "")+'>'+swiftLanguage['banclassa']+'</option>';
	returnResult += '</td></tr></table></td></tr></table>';
	globalNewVisitorActionRow(returnResult);
};

/**
* ###############################################
* END VISITOR RULE ACTION JS
* ###############################################
*/

/**
* ###############################################
* BEGIN TICKETS > MAINTENANCE CODE
* ###############################################
*/

/**
* Starts the KB Articles maintenance
*/
function startKnowledgebaseMaintenance()
{
	if (document.forms['View_Maintenanceform']['postsperpass'])
	{
		postsperpass = document.forms['View_Maintenanceform']['postsperpass'].value;
	} else {
		postsperpass = 30;
	}

	ChangeTabLoading('View_Maintenanceform', 'general', 'loadingcircle.gif');
	_activeSWIFTAction.push('searchreindex');

	$('#searchindexparent').load(_baseName + '/Knowledgebase/Maintenance/ReIndex/' + postsperpass);
};

/**
* Starts the ticket maintenance
*/
function startTicketMaintenance()
{
	var postsperpass = 30;

	if (document.forms['View_Maintenanceform']['postsperpass'])
	{
		postsperpass = document.forms['View_Maintenanceform']['postsperpass'].value;
	} else {
		postsperpass = 30;
	}

	ChangeTabLoading('View_Maintenanceform', 'general', 'loadingcircle.gif');
	_activeSWIFTAction.push('searchreindex');

	$('#searchindexparent').load(_baseName + '/Tickets/Maintenance/ReIndex/' + postsperpass);
};


/**
* Starts the ticket property maintenance
*/
function StartTicketPropertyMaintenance()
{
	var _ticketsPerPass = 30;

	if (document.forms['View_Maintenanceform']['ticketsperpass'])
	{
		_ticketsPerPass = document.forms['View_Maintenanceform']['ticketsperpass'].value;
	} else {
		_ticketsPerPass = 30;
	}

	ChangeTabLoading('View_Maintenanceform', 'properties', 'loadingcircle.gif');
	_activeSWIFTAction.push('propertyreindex');

	$('#propertyindexparent').load(_baseName + '/Tickets/Maintenance/ReIndexProperties/' + _ticketsPerPass);
};

/**
* Starts the attachment maintenance
*/
function startMoveAttachments()
{
	if (document.forms['View_MoveAttachmentsform']['attachmentsperpass'])
	{
		attachmentsperpass = document.forms['View_MoveAttachmentsform']['attachmentsperpass'].value;
	} else {
		attachmentsperpass = 20;
	}

	if (document.forms['View_MoveAttachmentsform']['movetype'])
	{
		movetype = document.forms['View_MoveAttachmentsform']['movetype'].value;
	} else {
		return false;
	}

	_activeSWIFTAction.push('moveattachments');

	ChangeTabLoading('View_MoveAttachmentsform', 'moveattachments', 'loadingcircle.gif');

	$('#menuloadingcircle').css('display', 'block');
	$('body').css('cursor', 'wait');

	$('#moveattachmentsparent').load(_baseName + '/Base/MoveAttachments/Move/' + escape(movetype) + '/' + escape(attachmentsperpass));
};

/**
* ###############################################
* END TICKETS > MAINTENANCE CODE
* ###############################################
*/

/**
* ###############################################
* BEGIN GEOIP > MAINTENANCE CODE
* ###############################################
*/

/**
* Starts the city index
*/
var geoipLoops = new Array();
function startGeoIPMaintenance(geoipType, uniqueid)
{
	if (geoipLoops[geoipType+uniqueid])
	{
		alert(swiftLanguage['geoipprocessrunning']);
		return;
	}

	_activeSWIFTAction.push('geoip' + geoipType);

	if (document.forms['View_GeoIPform']['entriesperpass' + geoipType])
	{
		_entriesPerPass = document.forms['View_GeoIPform']['entriesperpass' + geoipType].value;
	} else {
		_entriesPerPass = 100;
	}

	if (document.forms['View_GeoIPform']['passnumber' + geoipType])
	{
		_passNumber = document.forms['View_GeoIPform']['passnumber' + geoipType].value;
	} else {
		_passNumber = 10;
	}

	ChangeTabLoading('View_GeoIP', 'tab' + geoipType, 'loadingcircle.gif');

	geoipLoops[geoipType+uniqueid] = true;
	$('#menuloadingcircle').css('display', 'block');
	$('body').css('cursor', 'wait');
	$('#geoipparent_'+geoipType+'_'+uniqueid).load(_baseName+'/Base/GeoIP/Rebuild/'+ geoipType +'/'+escape(_entriesPerPass)+'/'+escape(_passNumber)+'/0/0/0/'+uniqueid+'/1');
};

/**
* ###############################################
* END GEOIP > MAINTENANCE CODE
* ###############################################
*/



/**
 * ###############################################
 * BEGIN ADMIN CP > ESCALATIONS FUNCTIONS
 * ###############################################
 */


function InsertEscalationNotification() {
	var rowElement = document.createElement("div");
	rowElement.id = 'notificationrow' + globalRuleSecondaryIndex;
	var rowMod = globalRuleSecondaryIndex%2;
	rowElement.className = "searchrule"+rowMod;

	var parentContainer = $('#notificationparent');
	if (!parentContainer.length)
	{
		return false;
	}

	parentContainer.append(rowElement);
	rowElement.style.display = 'none';

	_resultHTML = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="1"><a href="javascript:void(0);" onClick="javascript: RemoveEscalationNotification(\'' + globalRuleSecondaryIndex + '\');"><img src="' + themepath + 'images/icon_delete.gif" border="0" /></a></td><td align="left" width=""><select name="notifications[' + globalRuleSecondaryIndex + '][0]" class="swiftselect">';

	_resultHTML += '<option value="' + 'user' + '" selected>' + swiftLanguage['notificationuser'] + '</option>';
	_resultHTML += '<option value="' + 'userorganization' + '">' + swiftLanguage['notificationuserorganization'] + '</option>';
	_resultHTML += '<option value="' + 'staff' + '">' + swiftLanguage['notificationstaff'] + '</option>';
	_resultHTML += '<option value="' + 'team' + '">' + swiftLanguage['notificationteam'] + '</option>';
	_resultHTML += '<option value="' + 'department' + '">' + swiftLanguage['notificationdepartment'] + '</option>';

	_resultHTML += '</select></td></tr></table><table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" valign="top" width="130"><b>' + swiftLanguage['notificationsubject'] + '</b></td><td align="left" valign="top" width=""><input type="text" name="notifications[' + globalRuleSecondaryIndex + '][1]" class="swifttext" style="width: 99%;" /></td></tr><tr><td align="left" valign="top" colspan="2"><textarea class="swifttext" name="notifications[' + globalRuleSecondaryIndex + '][2]" rows="15" style="width: 99%;"></textarea></td></tr></table>';

	rowElement.innerHTML = _resultHTML;
	$(rowElement).fadeIn('medium');

	globalRuleSecondaryIndex++;
};

function RemoveEscalationNotification(_ruleIndex)
{
	$('#notificationrow' + _ruleIndex).fadeOut('medium', function() {$('#notificationrow' + _ruleIndex).remove();});

	return;
};




/**
 * ###############################################
 * END ADMIN CP > ESCALATIONS FUNCTIONS
 * ###############################################
 */



/**
 * ###############################################
 * BEGIN ADMIN CP > TICKETS WORKFLOW FUNCTIONS
 * ###############################################
 */


function InsertWorkflowNotification() {
	var rowElement = document.createElement("div");
	rowElement.id = 'notificationrow' + globalRuleSecondaryIndex;
	var rowMod = globalRuleSecondaryIndex%2;
	rowElement.className = "searchrule"+rowMod;

	var parentContainer = $('#notificationparent');
	if (!parentContainer.length)
	{
		return false;
	}

	parentContainer.append(rowElement);
	rowElement.style.display = 'none';

	_resultHTML = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="1"><a href="javascript:void(0);" onClick="javascript: RemoveWorkflowNotification(\'' + globalRuleSecondaryIndex + '\');"><img src="' + themepath + 'images/icon_delete.gif" border="0" /></a></td><td align="left" width=""><select name="notifications[' + globalRuleSecondaryIndex + '][0]" class="swiftselect">';

	_resultHTML += '<option value="' + 'user' + '" selected>' + swiftLanguage['notificationuser'] + '</option>';
	_resultHTML += '<option value="' + 'userorganization' + '">' + swiftLanguage['notificationuserorganization'] + '</option>';
	_resultHTML += '<option value="' + 'staff' + '">' + swiftLanguage['notificationstaff'] + '</option>';
	_resultHTML += '<option value="' + 'team' + '">' + swiftLanguage['notificationteam'] + '</option>';
	_resultHTML += '<option value="' + 'department' + '">' + swiftLanguage['notificationdepartment'] + '</option>';

	_resultHTML += '</select></td></tr></table><table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" valign="top" width="130"><b>' + swiftLanguage['notificationsubject'] + '</b></td><td align="left" valign="top" width=""><input type="text" name="notifications[' + globalRuleSecondaryIndex + '][1]" class="swifttext" style="width: 99%;" /></td></tr><tr><td align="left" valign="top" colspan="2"><textarea class="swifttext" name="notifications[' + globalRuleSecondaryIndex + '][2]" rows="15" style="width: 99%;"></textarea></td></tr></table>';

	rowElement.innerHTML = _resultHTML;
	$(rowElement).fadeIn('medium');

	globalRuleSecondaryIndex++;
};

function RemoveWorkflowNotification(_ruleIndex)
{
	$('#notificationrow' + _ruleIndex).fadeOut('medium', function() {$('#notificationrow' + _ruleIndex).remove();});

	return;
};




/**
 * ###############################################
 * END ADMIN CP > TICKETS WORKFLOW FUNCTIONS
 * ###############################################
 */



/**
 * ###############################################
 * BEGIN ADMIN CP > EMAIL PARSER FUNCTIONS
 * ###############################################
 */

function SwitchParserFields()
{
	_fieldType = $('#selectfetchtype').val();

	if (_fieldType == 'pipe')
	{
		$('#host').attr('disabled', 'disabled').val('').addClass('swiftfielddisabled');
		$('#port').attr('disabled', 'disabled').val('').addClass('swiftfielddisabled');
		$('#username').attr('disabled', 'disabled').val('').addClass('swiftfielddisabled');
		$('#userpassword').attr('disabled', 'disabled').val('').addClass('swiftfielddisabled');
	} else {
		$('#host').removeAttr('disabled').removeClass('swiftfielddisabled');
		$('#port').removeAttr('disabled').removeClass('swiftfielddisabled');
		$('#username').removeAttr('disabled').removeClass('swiftfielddisabled');
		$('#userpassword').removeAttr('disabled').removeClass('swiftfielddisabled');
	}

	var _portValue = $('#port').val();
	if (_fieldType == 'pop3' && (_portValue == '' || _portValue == '110' || _portValue == '143' || _portValue == '995' || _portValue == '993'))
	{
		$('#port').val('110');
	} else if (_fieldType == 'imap' && (_portValue == '' || _portValue == '110' || _portValue == '143' || _portValue == '995' || _portValue == '993')) {
		$('#port').val('143');
	} else if ((_fieldType == 'pop3ssl' || _fieldType == 'pop3tls') && (_portValue == '' || _portValue == '110' || _portValue == '143' || _portValue == '995' || _portValue == '993')) {
		$('#port').val('995');
	} else if ((_fieldType == 'imapssl' || _fieldType == 'imaptls') && (_portValue == '' || _portValue == '110' || _portValue == '143' || _portValue == '995' || _portValue == '993')) {
		$('#port').val('993');
	}
};

function SwitchRuleType(_ruleType)
{
	// Pre Parse
	if (_ruleType == 1)
	{
		$('#rulepostparse').hide();
		$('#rulepreparse').show();

	// Post Parse
	} else if (_ruleType == 2) {
		$('#rulepreparse').hide();
		$('#rulepostparse').show();
	}
};

function VerifyParserConnection(_windowTitle)
{
	var _finalDispatchValue = 'host=' + escape($('#host').val()) + '&port=' + escape($('#port').val()) + '&username=' + escape($('#username').val()) + '&userpassword=' + escape($('#userpassword').val()) + '&fetchtype=' + escape($('#selectfetchtype').val());

	var _finalDispatchValueBASE64 = Base64.encode(_finalDispatchValue);

	UIStartLoading();
	UICreateWindow(_baseName + '/Parser/EmailQueue/VerifyConnection/' + _finalDispatchValueBASE64, 'verifycon', _windowTitle, '', 600, 400, true);
}

/**
 * ###############################################
 * END ADMIN CP > EMAIL PARSER FUNCTIONS
 * ###############################################
 */




/**
 * ###############################################
 * BEGIN ADMIN CP > CUSTOM FIELDS FUNCTIONS
 * ###############################################
 */

function HandleCustomFieldGroupSwitch(_groupType)
{
	/*
	const GROUP_USER = 1; // User Registration
	const GROUP_USERORGANIZATION = 2; // User Organization
	const GROUP_LIVECHATPRE = 10; // Live Chat (Pre Chat)
	const GROUP_LIVECHATPOST = 11; // Live Chat (Post Chat)
	const GROUP_STAFFTICKET = 3; // Staff Ticket Creation
	const GROUP_USERTICKET = 4; // User Ticket Creation
	const GROUP_STAFFUSERTICKET = 9; // Staff & User Ticket Creation
	const GROUP_TIMETRACK = 5; // Ticket Time Tracking
	const GROUP_KNOWLEDGEBASE = 12; // Knowledgebase Articles
	const GROUP_NEWS = 13; // News Items
	const GROUP_TROUBLESHOOTER = 14; // Troubleshooter Items
	const GROUP_DOWNLOADS = 15; // Downloads Items
	*/

	if (_groupType == 1 || _groupType == 2) {
		$('input[name=visibilitytype]').attr('disabled', '');
	} else {
		$('#publicvisibilitytype').attr('checked', 'checked');
		$('input[name=visibilitytype]').attr('disabled', 'disabled');
	}

	if (_groupType == 3 || _groupType == 4 || _groupType == 9)
	{
		$('#View_CustomFieldGrouptabs').tabs('enable', 2);
		$('#cfdeplivechat').hide();
		$('#cfdeptickets').show();
	} else if (_groupType == 10 || _groupType == 11) {
		$('#View_CustomFieldGrouptabs').tabs('enable', 2);
		$('#cfdeplivechat').show();
		$('#cfdeptickets').hide();
	} else {
		$('#View_CustomFieldGrouptabs').tabs('disable', 2);
		$('#cfdeplivechat').hide();
		$('#cfdeptickets').hide();
	}
};

function CloneCustomFieldRow(_isCheckbox, _isLinked)
{
	_maxDisplayOrder = parseInt($('#maxdisplayorder').val());
	_nextElementOrder = _maxDisplayOrder+1;
	_rowID = 'cfrow' + _nextElementOrder;
	$('#maxdisplayorder').val(_nextElementOrder);
	_rowElement = document.createElement('tr');
	_cellElement1 = document.createElement('td');

	_blockDeleteHTML = ' <a href="javascript: void(0);" onmousedown="javascript: ClearCustomFieldRow(\'' + _nextElementOrder + '\', \'' + _nextElementOrder + '\');"><img border="0" align="absmiddle" src="' + themepath + 'images/icon_toolbarblock.gif" /></a>';

	if (_isLinked)
	{
		_cellElement1.innerHTML = '<input type="text" name="fieldlist[' + _nextElementOrder + '][0]" class="swifttext" size="30">' + ' <input type="hidden" id="cfsubcount' + _nextElementOrder + '" name="cfsubcount' + _nextElementOrder + '" value="0" />&nbsp;&nbsp;<a href="javascript: void(0);" onmousedown="javascript: CloneCustomFieldSubRow(\'' + _nextElementOrder + '\');"><img border="0" align="absmiddle" src="' + themepath + 'images/icon_addplus.gif" /></a>' + _blockDeleteHTML;
	} else {
		_cellElement1.innerHTML = '<input type="text" name="fieldlist[' + _nextElementOrder + '][0]" class="swifttext" size="30">' + _blockDeleteHTML;
	}

	_cellElement2 = document.createElement('td');
	_cellElement2.innerHTML = '<input name="fieldlist[' + _nextElementOrder + '][1]" type="text" size="5" class="swifttext" value="' + _nextElementOrder + '">';
	_cellElement3 = document.createElement('td');

	if (_isCheckbox)
	{
		_cellElement3.innerHTML = '<input name="fieldlist[' + _nextElementOrder + '][2]" type="checkbox" value="1">';
	} else {
		_cellElement3.innerHTML = '<input name="selectedfield" type="radio" value="' + _nextElementOrder + '">';
	}

	_cellElement2.style.textAlign = 'left';
	_cellElement3.style.textAlign = 'left';

	_rowElement.appendChild(_cellElement1);
	_rowElement.appendChild(_cellElement2);
	_rowElement.appendChild(_cellElement3);

	_rowElement.id = _rowID;

	$('#customfieldtable').append(_rowElement);
	$('#' + _rowID).fadeIn('slow');
};

function CloneCustomFieldSubRow(_elementID)
{
	_maxDisplayOrder = parseInt($('#cfsubcount' + _elementID).val());
	_nextElementOrder = _maxDisplayOrder + 1;
	_rowID = 'cfsubrow' + _elementID + '_' + _nextElementOrder;
	$('#cfsubcount' + _elementID).val(_nextElementOrder);
	_rowElement = document.createElement('tr');
	_cellElement1 = document.createElement('td');

	_cellElement1.innerHTML = '<img src="' + themepath + 'images/linkdownarrow_blue.gif" border="0" align="absmiddle" /> <input type="text" name="subfieldlist[' + _elementID + '][' + _nextElementOrder + '][0]" class="swifttext" size="30"> <a href="javascript: void(0);" onmousedown="javascript: ClearCustomFieldSubRow(\'' + _elementID + '\', \'' + _nextElementOrder + '\');"><img border="0" align="absmiddle" src="' + themepath + 'images/icon_toolbarblock.gif" /></a>';
	_cellElement2 = document.createElement('td');
	_cellElement2.innerHTML = '<img src="' + themepath + 'images/linkdownarrow_blue.gif" border="0" align="absmiddle" /> &nbsp; <input name="subfieldlist[' + _elementID + '][' + _nextElementOrder + '][1]" type="text" size="5" class="swifttext" value="' + _nextElementOrder + '">';
	_cellElement3 = document.createElement('td');
	_cellElement3.innerHTML = '<img src="' + themepath + 'images/linkdownarrow_blue.gif" border="0" align="absmiddle" /> &nbsp; <input name="subfieldsellist[' + _elementID + ']" type="radio" value="' + _nextElementOrder + '">';

	_cellElement2.style.textAlign = 'left';
	_cellElement3.style.textAlign = 'left';

	_rowElement.appendChild(_cellElement1);
	_rowElement.appendChild(_cellElement2);
	_rowElement.appendChild(_cellElement3);

	_rowElement.id = _rowID;

	// Main row element
	if (_maxDisplayOrder == 0 || !$('#cfsubrow' + _elementID + '_' + _maxDisplayOrder).length)
	{
		$('#cfrow' + _elementID).after(_rowElement);
	} else {
		$('#cfsubrow' + _elementID + '_' + _maxDisplayOrder).after(_rowElement);
	}

	$('#' + _rowID).fadeIn('slow');
};

function ClearCustomFieldSubRow(_elementID, _subElementID)
{
	var _rowID = 'cfsubrow' + _elementID + '_' + _subElementID;
	$('#' + _rowID).fadeOut('slow', function() {$(this).remove();});

	if (document.forms['View_CustomFieldform']['subfieldlist[' + _elementID + ']'])
	{
		document.forms['View_CustomFieldform']['subfieldlist[' + _elementID + '][' + _subElementID + '][0]'].value = '';
	}
};

function ClearCustomFieldRow(_elementID, _subElementList)
{
	_rowID = 'cfrow' + _elementID;

	for (var i = 0;i < _subElementList.length;i++)
	{
		ClearCustomFieldSubRow(_elementID, _subElementList[i]);
	}

	$("tr[id^='cfsubrow" + _elementID + "']").remove();

	$('#' + _rowID).fadeOut('slow', function() {$(this).remove();});

	if (document.forms['View_CustomFieldform']['fieldlist[' + _elementID + '][0]'])
	{
		document.forms['View_CustomFieldform']['fieldlist[' + _elementID + '][0]'].value = '';
	}
};

/**
 * ###############################################
 * END ADMIN CP > CUSTOM FIELDS FUNCTIONS
 * ###############################################
 */





/**
 * ###############################################
 * BEGIN ADMIN CP > LANGUAGES FUNCTIONS
 * ###############################################
 */

function HandleLanguageQuickSearchKeyPress(_isCompare, _event) {
	if ((_event.which && _event.which == 13) || (_event.keyCode && _event.keyCode == 13)) {

		if (_isCompare)
		{
			LoadViewportPOST('/Base/LanguagePhrase/SearchSubmit', {query: $('#languageqs_' + _isCompare + '_query').val(), comparelanguageid: $('#languageqs_' + _isCompare + '_comparelanguageid').val(), languageid: $('#languageqs_' + _isCompare + '_languageid').val(), type: 'codetext'}, true);
		} else {
			LoadViewportPOST('/Base/LanguagePhrase/SearchSubmit', {query: $('#languageqs_' + _isCompare + '_query').val(), comparelanguageid: $('#languageqs_' + _isCompare + '_comparelanguageid').val(), languageid: $('#languageqs_' + _isCompare + '_languageid').val(), type: 'codetext'}, true);
		}

		return false;
	} else {
		return true;
	}
}

/**
 * ###############################################
 * END ADMIN CP > LANGUAGES FUNCTIONS
 * ###############################################
 */







/**
 * ###############################################
 * BEGIN ADMIN CP > STAFF FUNCTIONS
 * ###############################################
 */

function ToggleAdminPermissionsTab(_isAdmin) {
	if (_isAdmin == '1')
	{
		$('#View_StaffGrouptabs').tabs('enable', 3);
	} else {
		$('#View_StaffGrouptabs').tabs('disable', 3);
	}
}

function ReplaceTeamPermissionsDiv(_permissionType, _staffGroupID) {
	UIStartLoading();

	$('#sg' + _permissionType + 'permissionscontainer').load(_baseName + '/Base/StaffGroup/GetPermissions/' + _permissionType + '/' + _staffGroupID, {}, function() {UIEndLoading();});
}

/**
 * ###############################################
 * BEGIN ADMIN CP > STAFF FUNCTIONS
 * ###############################################
 */








/**
 * ###############################################
 * BEGIN ADMIN CP > TEMPLATES FUNCTIONS
 * ###############################################
 */

var _templateExpandStatus = false;
function ExpandContractTemplates() {
	if (!_templateExpandStatus)
	{
		$("div[id^='category']").show();

		_templateExpandStatus = true;
	} else {
		$("div[id^='category']").hide();

		_templateExpandStatus = false;
	}

	return true;
}

function ExportTemplateDiff(_templateID) {
	var _compareTemplateHistoryID1 = $("input:radio[name='comparetemplatehistoryid1']:checked").val();
	var _compareTemplateHistoryID2 = $("input:radio[name='comparetemplatehistoryid2']:checked").val();

	PopupSmallWindow(_baseName + '/Base/Template/ExportDiff/' + _templateID + '/' + _compareTemplateHistoryID1 + '/' + _compareTemplateHistoryID2);

	return true
}

/**
 * ###############################################
 * END ADMIN CP > TEMPLATES FUNCTIONS
 * ###############################################
 */




/**
 * ###############################################
 * BEGIN ADMIN CP > USER/STAFF FUNCTIONS
 * ###############################################
 */

/**
* Toggles the permission div
*/
function TogglePermissionDivUI(_divName, _type)
{
	var _cookieJar = $.cookieJar(_type + 'permissions', {expires: 365});

	// Expand
	if ($('#perm' + _type + '_' + _divName).css('display') == 'none')
	{
		_cookieJar.set('perm' + _type + '_' + _divName, 1);
		if ($('#imgperm' + _type + '_' + _divName)) {
			$('#imgperm' + _type + '_' + _divName).attr('src', themepath + 'images/icon_doublearrowsdown.gif');
		}

		$('#perm' + _type + '_' + _divName).slideDown('fast');
		if ($('#imgplus' + _type + '_' + _divName)) {
			$('#imgplus' + _type + '_' + _divName).attr('src', themepath + 'images/icon_minus.gif');
		}

	// Hidden
	} else {
		if ($('#imgperm' + _type + '_' + _divName)) {
			$('#imgperm' + _type + '_' + _divName).attr('src', themepath + 'images/icon_doublearrows.gif');
		}

		_cookieJar.set('perm' + _type + '_' + _divName, null);
		$('#perm' + _type + '_' + _divName).slideUp('fast');
		if ($('#imgplus' + _type + '_' + _divName)) {
			$('#imgplus' + _type + '_' + _divName).attr('src', themepath + 'images/icon_plus.gif');
		}
	}

	return true
};


/**
 * ###############################################
 * END ADMIN CP > USER/STAFF FUNCTIONS
 * ###############################################
 */




/**
 * ###############################################
 * BEGIN ADMIN CP > MESSAGE ROUTING FUNCTIONS
 * ###############################################
 */

function toggleRoutingSelectBox(routingValue, departmentID)
{
	if (routingValue == true)
	{
		document.forms['View_MessageRoutingform']['routedepartmentid['+departmentID+']'].disabled = false;
	} else {
		document.forms['View_MessageRoutingform']['routedepartmentid['+departmentID+']'].disabled = true;
	}
};

function toggleRingRouteTextBox(ringrouteValue, staffID)
{
	if (ringrouteValue == true)
	{
		document.forms['View_ProfileManagerform']['rrextension['+staffID+']'].disabled = false;
		document.forms['View_ProfileManagerform']['rrextension['+staffID+']'].focus();
	} else {
		document.forms['View_ProfileManagerform']['rrextension['+staffID+']'].disabled = true;
	}
};

function toggleRoutingTextBox(routingValue, departmentID)
{
	if (routingValue == true)
	{
		document.forms['View_MessageRoutingform']['emailroute['+departmentID+']'].disabled = false;
	} else {
		document.forms['View_MessageRoutingform']['emailroute['+departmentID+']'].disabled = true;
	}
};




/**
 * ###############################################
 * END ADMIN CP > MESSAGE ROUTING FUNCTIONS
 * ###############################################
 */


/**
* ###############################################
* BEGIN ADMIN CP > SLA FUNCTIONS
* ###############################################
*/

var slaScheduleTableIndex = {'sunday': 0, 'monday': 0, 'tuesday': 0, 'wednesday': 0, 'thursday': 0, 'friday': 0, 'saturday': 0};
/**
* Toggle for sla schedules
*/
function changeSLAScheduleRowBG(formname, parentvalue, day, nochange)
{
	for (var i=0;i<=2;i++)
	{
		$('#sladayrow'+i+day).attr('class', 'slascheduletitledefault');
	}

	if (parentvalue == '0')
	{
		$('#sladayrow'+parentvalue+day).attr('class', 'slascheduletitleclosed');
		if ($('#slaschedulecontainer'+day).css('display') != 'none')
		{
			$('#slaschedulecontainer'+day).fadeOut('medium');
		}
	} else if (parentvalue == '1') {
		$('#sladayrow'+parentvalue+day).attr('class', 'slascheduletitleopen');
		if ($('#slaschedulecontainer'+day).css('display') == 'none')
		{
			if (slaScheduleTableIndex[day] == 0)
			{
				$('#slaschedulecontainer'+day).css('display', 'block');

				if (!nochange)
				{
					newSLAScheduleRow(day, '09:00', '17:00');
				}
			} else {
				$('#slaschedulecontainer'+day).fadeIn('medium');
			}
		}
	} else {
		$('#sladayrow'+parentvalue+day).attr('class', 'slascheduletitleopen24');
		if ($('#slaschedulecontainer'+day).css('display') != 'none')
		{
			$('#slaschedulecontainer'+day).fadeOut('medium');
		}
	}

	// Closed
	if (parentvalue == '0')
	{
	// Open (24 Hours)
	} else if (parentvalue == '1') {
	// Open (Custom)
	} else if (parentvalue == '2') {

	}
};

function checkSLAScheduleHourRange(day, rowIndex) {
	var openSLAScheduleHour = parseFloat(document.forms['View_Scheduleform']['dayHourOpen['+day+']['+rowIndex+']'].value+'.'+document.forms['View_Scheduleform']['dayMinuteOpen['+day+']['+rowIndex+']'].value);
	var closeSLAScheduleHour = parseFloat(document.forms['View_Scheduleform']['dayHourClose['+day+']['+rowIndex+']'].value+'.'+document.forms['View_Scheduleform']['dayMinuteClose['+day+']['+rowIndex+']'].value);
	var currentClass = $('#'+"slascheduletablerow"+day+rowIndex).attr('class');
	var rowMod = rowIndex%2;

	if (closeSLAScheduleHour < openSLAScheduleHour)
	{
		$('#'+"slascheduletablerow"+day+rowIndex).attr('class', "searchrule2");
		$('#imgblock'+day+rowIndex).css('display', 'table-cell');

	// So.. this row does not have standard style.. we change it back because everythings correct in terms of hour range
	} else if (currentClass == 'searchrule2') {
		$('#'+"slascheduletablerow"+day+rowIndex).attr('class', "searchrule"+rowMod);
		$('#imgblock'+day+rowIndex).css('display', 'none');
	}
};

/**
* Creates a new SLA Schedule Row
*/
function newSLAScheduleRow(day, opentimeline, closetimeline)
{
	var openSLAArray = opentimeline.split(":");
	var closeSLAArray = closetimeline.split(":");

	// Not selected? If yes.. then select it
	if (document.forms['View_Scheduleform']['sladay['+day+']'][0].checked != true)
	{
		document.forms['View_Scheduleform']['sladay['+day+']'][0].checked = true;
		changeSLAScheduleRowBG('View_Scheduleform', '1', day, true);
	}

	var rowElement = document.createElement("div");
	rowElement.id = "slascheduletablerow"+day+slaScheduleTableIndex[day];
	var rowMod = slaScheduleTableIndex[day]%2;
	rowElement.className = "searchrule"+rowMod;

	var parentContainer = $('#slaschedulecontainer'+day);
	if (!parentContainer)
	{
		return false;
	}


	returnResult = '<table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="1"><a href="javascript:void(0);" onClick="javascript:removeSLAScheduleRow(\''+day+'\', \''+slaScheduleTableIndex[day]+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left">';

	var openHourOptions = closeHourOptions = openMinuteOptions = closeMinuteOptions = '00';
	for (var i=0;i<=23;i++)
	{
		var iHourValue = iif(i<10,'0'+i, i);
		openHourOptions += '<option value="'+iHourValue+'"'+iif(openSLAArray[0]==iHourValue,' selected', '')+'>'+iHourValue+'</option>';
		closeHourOptions += '<option value="'+iHourValue+'"'+iif(closeSLAArray[0]==iHourValue,' selected', '')+'>'+iHourValue+'</option>';
	}

	for (var i=0;i<=59;i++)
	{
		var iMinuteValue = iif(i<10,'0'+i, i);
		openMinuteOptions += '<option value="'+iMinuteValue+'"'+iif(openSLAArray[1]==iMinuteValue,' selected', '')+'>'+iMinuteValue+'</option>';
		closeMinuteOptions += '<option value="'+iMinuteValue+'"'+iif(closeSLAArray[1]==iMinuteValue,' selected', '')+'>'+iMinuteValue+'</option>';
	}

	returnResult += swiftLanguage['open']+': <select class="swiftselect" name="dayHourOpen['+day+']['+slaScheduleTableIndex[day]+']" onChange="checkSLAScheduleHourRange(\''+day+'\', \''+slaScheduleTableIndex[day]+'\');">';
	returnResult += openHourOptions+'</select>:<select class="swiftselect" name="dayMinuteOpen['+day+']['+slaScheduleTableIndex[day]+']" onChange="checkSLAScheduleHourRange(\''+day+'\', \''+slaScheduleTableIndex[day]+'\');">'+openMinuteOptions;

	returnResult += '</select> <b>&raquo;</b> '+swiftLanguage['close']+': <select class="swiftselect" name="dayHourClose['+day+']['+slaScheduleTableIndex[day]+']" onChange="checkSLAScheduleHourRange(\''+day+'\', \''+slaScheduleTableIndex[day]+'\');">';
	returnResult += closeHourOptions+'</select>:<select class="swiftselect" name="dayMinuteClose['+day+']['+slaScheduleTableIndex[day]+']" onChange="checkSLAScheduleHourRange(\''+day+'\', \''+slaScheduleTableIndex[day]+'\');">'+closeMinuteOptions;
	returnResult += '</select>';
	returnResult += '</td><td align="right" valign="top"><img style="display: none;" src="' + themepath + 'images/icon_block.gif" align="absmiddle" border="0" id="imgblock' + day + slaScheduleTableIndex[day] + '" /></td></table>';


	parentContainer.append(rowElement);
	$(rowElement).css('display', 'none');
	$(rowElement).html(returnResult);
	checkSLAScheduleHourRange(day, slaScheduleTableIndex[day]);
	$(rowElement).fadeIn('medium');
	slaScheduleTableIndex[day]++;
};

/**
* Removes the SLA Schedule Row
*/
function removeSLAScheduleRow(day, rowIndex)
{
	$('#slascheduletablerow'+day+rowIndex).fadeOut('medium', function() {$('#slascheduletablerow'+day+rowIndex).remove();});

	return;
};

/**
* Toggle for sla plan radio buttons under holidays
*/
function changeSLAPlanHolidayRadio(formname, parentvalue, subids)
{
	for (var i = 0;i < subids.length;i++)
	{
		if (parentvalue == 0)
		{
//			document.forms[formname]['slaplans['+subids[i]+']'][0].checked = false;
//			document.forms[formname]['slaplans['+subids[i]+']'][1].checked = true;
//			document.forms[formname]['slaplans['+subids[i]+']'][0].disabled = true;
//			document.forms[formname]['slaplans['+subids[i]+']'][1].disabled = true;
		} else {
//			document.forms[formname]['slaplans['+subids[i]+']'][0].disabled = false;
//			document.forms[formname]['slaplans['+subids[i]+']'][1].disabled = false;
		}
	}
};


/**
* ###############################################
* END ADMIN CP > SLA FUNCTIONS
* ###############################################
*/





/**
* ###############################################
* BEGIN ADMIN CP > DEPARTMENT FUNCTIONS
* ###############################################
*/
_departmentParentModuleMap = new Array();
function ResetDepartmentParentModule() {
	if ($('#selectparentdepartmentid').val() == '0') {
		$('#selectdepartmentmodule').attr('disabled', false);
	} else {
		$('#selectdepartmentmodule').attr('disabled', true);

		var _departmentModule = _departmentParentModuleMap[$('#selectparentdepartmentid').val()];

		$('#selectdepartmentmodule').val(_departmentModule);
	}
}

/**
* Handles the radio set for assigned departments in admin cp
*/
function ChangeDepartmentRadioStatus(_formName, _parentValue, _subIDContainer)
{
	if (!document.forms[_formName])
	{
		return false;
	}

	for (var i = 0;i < _subIDContainer.length;i++)
	{
		if (_parentValue == 0)
		{
			document.forms[_formName]['assigned['+_subIDContainer[i]+']'][1].checked = false;
			document.forms[_formName]['assigned['+_subIDContainer[i]+']'][0].checked = true;
			document.forms[_formName]['assigned['+_subIDContainer[i]+']'][1].disabled = true;
			document.forms[_formName]['assigned['+_subIDContainer[i]+']'][0].disabled = true;
		} else {
			document.forms[_formName]['assigned['+_subIDContainer[i]+']'][1].disabled = false;
			document.forms[_formName]['assigned['+_subIDContainer[i]+']'][0].disabled = false;
		}
	}
};

/**
* Handles the radio set for assigned departments in admin cp
*/
function changeDepartmentRadioStatusByID(formname, parentid, subids)
{
	if (!document.forms[formname])
	{
		return false;
	} else if (!document.forms[formname]['assigned['+ parentid +']']) {
		return false;
	}
	var parentvalue = document.forms[formname]['assigned['+ parentid +']'][0].checked;

	for (var i = 0;i < subids.length;i++)
	{
		if (parentvalue == 0)
		{
			document.forms[formname]['assigned['+subids[i]+']'][0].checked = false;
			document.forms[formname]['assigned['+subids[i]+']'][1].checked = true;
			document.forms[formname]['assigned['+subids[i]+']'][0].disabled = true;
			document.forms[formname]['assigned['+subids[i]+']'][1].disabled = true;
		} else {
			document.forms[formname]['assigned['+subids[i]+']'][0].disabled = false;
			document.forms[formname]['assigned['+subids[i]+']'][1].disabled = false;
		}
	}
};

function StatusDepartmentSelect(_departmentIDList)
{
	var _parentValue = $("input:radio[name='groupassigns']:checked").val();
	if (!_parentValue)
	{
		return false
	}

	for (var i = 0;i < _departmentIDList.length;i++)
	{
		if (_parentValue == '0')
		{
			document.forms['View_Staffform']['assigned['+_departmentIDList[i]+']'][0].disabled = false;
			document.forms['View_Staffform']['assigned['+_departmentIDList[i]+']'][1].disabled = false;
		} else {
			document.forms['View_Staffform']['assigned['+_departmentIDList[i]+']'][0].disabled = true;
			document.forms['View_Staffform']['assigned['+_departmentIDList[i]+']'][1].disabled = true;
		}
	}
};


/**
* Toggles the permission div
*/
function togglePermissionDiv(divname)
{
	var cookieJar = $.cookieJar('staffpermissions', {expires: 365});

	// Expand
	if ($('#perm_'+divname).css('display') == 'none')
	{
		cookieJar.set('perm_'+divname, 1);
		if ($('#imgperm_'+divname)) {
			$('#imgperm_'+divname).attr('src', themepath+'images/icon_doublearrowsdown.gif');
		}
		$('#perm_'+divname).slideDown('fast');
		if ($('#imgplus_'+divname)) {
			$('#imgplus_'+divname).attr('src', themepath+'images/icon_minus.gif');
		}

	// Hidden
	} else {
		if ($('#imgperm_'+divname)) {
			$('#imgperm_'+divname).attr('src', themepath+'images/icon_doublearrows.gif');
		}
		cookieJar.set('perm_'+divname, null);
		$('#perm_'+divname).slideUp('fast');

		if ($('#imgplus_'+divname)) {
			$('#imgplus_'+divname).attr('src', themepath+'images/icon_plus.gif');
		}
	}
};

/**
* ###############################################
* END ADMIN CP > DEPARTMENT FUNCTIONS
* ###############################################
*/