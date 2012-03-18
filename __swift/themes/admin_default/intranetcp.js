
/**
 * ###############################################
 * BEGIN INTRANET FUNCTIONS
 * ###############################################
 */

function OrderDeleteNote(_question, _noteURL) {
	var x = confirm(_question);
	if (x) {
		$('#ordernotescontainerdiv').load(_baseName + '/Backend/Order/DeleteNote/' + _noteURL, function(_responseText) {
			reParseDoc();

			if (typeof _responseText == 'string' && _responseText == '')
			{
				$('#ordernotescontainerdivholder').hide();
			}
		});
	}

	return true
}

function ClearInvoiceItemRow(_elementID)
{
	_rowID = 'invoiceitemrow' + _elementID;

	$('#' + _rowID).fadeOut('slow', function() {$(this).remove();});
};

var _invoiceItemID = 0;
function CloneInvoiceItemRow()
{
	_rowID = 'invoiceitemrow' + _invoiceItemID;
	_rowElement = document.createElement('tr');
	_cellElement1 = document.createElement('td');

	_blockDeleteHTML = ' <a href="javascript: void(0);" onmousedown="javascript: ClearInvoiceItemRow(\'' + _invoiceItemID + '\');"><img border="0" align="absmiddle" src="' + themepath + 'images/icon_toolbarblock.gif" /></a>&nbsp;';

	_cellElement1.innerHTML = _blockDeleteHTML + '<input type="text" name="invoiceitemidlist[' + _invoiceItemID + '][0]" class="swifttext" size="5">';

	_cellElement2 = document.createElement('td');
	_cellElement2.innerHTML = '<input name="invoiceitemidlist[' + _invoiceItemID + '][1]" type="text" size="80" class="swifttext" value="">';
	_cellElement3 = document.createElement('td');

	_cellElement3.innerHTML = '<input name="invoiceitemidlist[' + _invoiceItemID + '][2]" type="text" size="8" class="swifttext" value="">';

	_cellElement2.style.textAlign = 'left';
	_cellElement3.style.textAlign = 'left';

	_rowElement.appendChild(_cellElement1);
	_rowElement.appendChild(_cellElement2);
	_rowElement.appendChild(_cellElement3);

	_rowElement.id = _rowID;

	$('#invoiceitemtable').append(_rowElement);
	$('#' + _rowID).fadeIn('slow');

	_invoiceItemID++;
};

/**
 * ###############################################
 * END INTRANET FUNCTIONS
 * ###############################################
 */
