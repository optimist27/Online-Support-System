var _kqlID = 0;
var _kqlPluginContainer = new Array();

function KQLGetAndRender(_elementID) {
	if (typeof _kqlPluginContainer[_elementID] == 'undefined') {
		return false;
	}

	var _kqlPluginInstance = _kqlPluginContainer[_elementID];
	_kqlPluginInstance.getAndRender();
}

(function($) {

    $.kql = function(element, options) {
		var kqlOptions = {
			'kqlID': 0,
			'kqlElement': false,
			'kqlPath': '',
			'debugKQLPath': '',
			'kqlResult': false,
			'kqlMessage': '',
			'kqlStart': -1,
			'kqlEnd': -1,
			'kqlJsonData': [],
			'kqlDebug': '',
			'kqlTimeoutID': false,
			'kqlElementID': ''
		}

		var plugin = this;
		plugin.settings = {};

		var $element = $(element), element = element;


		plugin.init = function() {
			plugin.settings = $.extend({}, kqlOptions, options);

			plugin.settings.kqlPath = plugin.settings.kqlPath;
			plugin.settings.debugKQLPath = plugin.settings.debugKQLPath;

			plugin.settings.kqlElementID = $(element).attr('id');
			_kqlPluginContainer[plugin.settings.kqlElementID] = plugin;

			$(document).bind('click', function(e) {
				var clickedElement=$(e.target);

				// We only destroy the drop down if the click was outside it
				if (!clickedElement.parents().is('.kqldropdown')) {
					plugin.destroyAllDropdowns();
				}
			});


			// Build the surrounding HTML for this control and manipulate the CSS classes
			$(element).wrap('<div class="kqlcontainer"><div class="kqlcontrol"></div></div>');
			$(element).parent('.kqlcontrol').before('<div class="kqltoolbar"><div class="kqlstatusimage">&nbsp;</div><div class="kqlstatus"><div class="kqlstatusinfo">&nbsp;</div><div class="kqlstatuserror">&nbsp;</div></div></div>');
			$(element).addClass('kqltextarea');
			$(element).parents('.kqlcontainer').find('.kqltoolbar').hover(function() {$(this).find('.kqlstatuserror').css('display', 'inline-block');}, function() {$(this).find('.kqlstatuserror').css('display', 'none');});

			$(element).bind('keyup mouseup', function(_parentEvent) {
				var _parentKeyCode = _parentEvent.keyCode ? _parentEvent.keyCode : _parentEvent.which ? _parentEvent.which : _parentEvent.charCode;
				// Dont let the events pass through for the following keys
				if (_parentKeyCode == 40 || _parentKeyCode == 38 || _parentKeyCode == 13 || _parentKeyCode == 27) {

					return false;

				// Dont do anything for windows/command, alt, control, shift keys
				} else if (_parentKeyCode == 224 || _parentKeyCode == 18 || _parentKeyCode == 17 || _parentKeyCode == 16) {
					return true;
				}

				// Trigger only if there is no other timeout in queue
				if (plugin.settings.kqlTimeoutID === false) {
					plugin.settings.kqlTimeoutID = setTimeout('KQLGetAndRender("' + plugin.settings.kqlElementID + '");', 400);

				// We have timeout in queue, cancel that first and then set a new one
				} else {
					clearTimeout(plugin.settings.kqlTimeoutID);
					plugin.settings.kqlTimeoutID = setTimeout('KQLGetAndRender("' + plugin.settings.kqlElementID + '");', 400);
				}

			});
		}

		plugin.getAndRender = function() {
			_kqlID++;
			var _caretStartingPosition = $(element).jcaret().start;
			var _caretEndingPosition = $(element).jcaret().end;
			var _textareaContents = $(element).val();
			var _textareaSelection = $(element).jcaret().text;
			console.log('Contents: ' + _textareaContents + "\nStart: " + _caretStartingPosition + "\nEnd: " + _caretEndingPosition + "\nSelection: " + _textareaSelection);

			var _postData = '_textareaContents=' + encodeURIComponent(_textareaContents) + '&_caretStartingPosition=' + encodeURIComponent(_caretStartingPosition) +
							'&_caretEndingPosition=' + encodeURIComponent(_caretEndingPosition) + '&_textareaSelection=' + encodeURIComponent(_textareaSelection);

			var _renderedStatusText = 'Char: ' + _caretStartingPosition;
			if (_caretStartingPosition != _caretEndingPosition) {
				_renderedStatusText += '-' + _caretEndingPosition;
			}

			plugin.settings.kqlID = _kqlID;
			$(element).parents('.kqlcontainer').find('.kqlstatusinfo').html(_renderedStatusText);

			// Get the data via JSON
			$.ajax({type: 'POST', url: plugin.settings.kqlPath, dataType: 'json', data: _postData, success: function(_jsonData) {
				plugin.settings.kqlResult = _jsonData.result;
				plugin.settings.kqlMessage = _jsonData.message;
				plugin.settings.kqlStart = _jsonData.start;
				plugin.settings.kqlEnd = _jsonData.end;
				plugin.settings.kqlJsonData = _jsonData.data;
				plugin.settings.kqlDebug = _jsonData.debug;

				if (_jsonData.result == false) {
					$(element).addClass('kqlerror');
					$(element).parents('.kqlcontainer').find('.kqlstatuserror').html(_jsonData.message);
					$(element).parents('.kqlcontainer').find('.kqlstatusimage').addClass('kqlstatusimageerror');
				} else {
					$(element).removeClass('kqlerror');
					$(element).parents('.kqlcontainer').find('.kqlstatuserror').html('&nbsp;');
					$(element).parents('.kqlcontainer').find('.kqlstatusimage').removeClass('kqlstatusimageerror').addClass('kqlstatusimageok');
				}

				// First destroy all current drop downs
				plugin.destroyAllDropdowns();

				// We need to build the auto complete control now
				plugin.buildDropdown();
			}});

			// Do we need to output debug data?
			if (plugin.settings.debugKQLPath != '') {
				$.ajax({type: 'POST', url: plugin.settings.debugKQLPath, data: _postData, success: function(data) {
					$('#kqldebugoutput').html(data);
				}});
			}
		}

		plugin.destroyAllDropdowns = function() {
			$('.kqldropdown').remove();
		}

		plugin.buildDropdown = function() {
			// Build the dropdown
			var _dropDownParentElement = document.createElement('ul');
			_dropDownParentElement.id = plugin.settings.kqlID;
			$(_dropDownParentElement).attr('style', 'z-index: 1; left: 0px; top:0px; display: none;').attr('class', 'kqldropdown');

			var _hasChildren = false;

			$.each(plugin.settings.kqlJsonData, function(_key, _valueContainer) {
				var _dropDownLIElement = document.createElement('li');
				var _dropDownAElement = document.createElement('a');
				_dropDownAElement.innerHTML = _valueContainer.label;

				_hasChildren = true;

				$(_dropDownAElement).bind('click', function(e) {
					plugin.destroyAllDropdowns();

					if (plugin.settings.kqlStart == -1 || plugin.settings.kqlEnd == -1) {
						return true;
					}

					var _replacementKQLValue = _valueContainer.value;
					var _replacementKQLValueLength = _replacementKQLValue.length;
					var _kqlValue = $(element).val();
					var _replacementValueHasSuffixSpace = (_replacementKQLValue.substr(_replacementKQLValueLength-1, 1) == ' ') ? true : false;

					// Do we have a space at end of both incoming and the replacement range?
					var _cursorPosition = plugin.settings.kqlStart + _valueContainer.value.length;
					if (_replacementValueHasSuffixSpace == false) {
						_cursorPosition += 1;
					}

					if (_kqlValue.substr(plugin.settings.kqlEnd, 1) == ' ' && _replacementValueHasSuffixSpace == true) {
						plugin.settings.kqlEnd += 1;
						_cursorPosition -= 1;
						console.log('Triggering Space Correction');
					} else {
						console.log('Did not trigger Space Correction');
					}

					$(element).setSelection(plugin.settings.kqlStart, plugin.settings.kqlEnd).replaceSelection(_valueContainer.value);

					$(element).setCursorPosition(_cursorPosition);
					plugin.getAndRender();
				});

				_dropDownLIElement.appendChild(_dropDownAElement);
				_dropDownParentElement.appendChild(_dropDownLIElement);
			});

			$('body').append(_dropDownParentElement);

			if (_hasChildren == false || !$(_dropDownParentElement).children('li').length) {
				$(_dropDownParentElement).hide();

				return true;
			}

			// Position the drop down
			$(_dropDownParentElement).position({
				of: $(element),
				my: 'left top',
				at: 'left bottom',
				offset: '0 -1px'
			});

			// Add a handler for keyboard
			// Down: 40, Up: 38, Enter: 13, Escape: 27
			$(element).bind('keydown', function(_event) {
				var _keyCode = _event.keyCode ? _event.keyCode : _event.which ? _event.which : _event.charCode;

				// Escape: Destroy Dropdown
				if (_keyCode == 27) {
					plugin.destroyAllDropdowns();

				// Down Arrow: Next Item
				} else if (_keyCode == 40) {
					var _selectedLIElements = $(_dropDownParentElement).children('.selected');

					// Shouldnt have happened..
					if (_selectedLIElements.length > 1) {
						$.each(_selectedLIElements, function() {
							$(this).removeClass('selected');
						});

						$(_dropDownParentElement).children('li:first').addClass('selected');

					// Move to the next item
					} else if (_selectedLIElements.length == 1) {
						_selectedLIElements.removeClass('selected');

						if (!_selectedLIElements.next().length) {
							$(_dropDownParentElement).children('li:first').addClass('selected');

						} else {
							_selectedLIElements.next().addClass('selected');
						}

					// No item selected, select first one
					} else if (_selectedLIElements.length == 0) {
						$(_dropDownParentElement).children('li:first').addClass('selected');

					}

				// Up Arrow: Previous Item
				} else if (_keyCode == 38) {
					var _selectedLIElements = $(_dropDownParentElement).children('.selected');

					// Shouldnt have happened..
					if (_selectedLIElements.length > 1) {
						$.each(_selectedLIElements, function() {
							$(this).removeClass('selected');
						});

						$(_dropDownParentElement).children('li:last').addClass('selected');

					// Move to the previous item
					} else if (_selectedLIElements.length == 1) {
						_selectedLIElements.removeClass('selected');

						if (!_selectedLIElements.prev().length) {
							$(_dropDownParentElement).children('li:last').addClass('selected');

						} else {
							_selectedLIElements.prev().addClass('selected');
						}

					// No item selected, select first one
					} else if (_selectedLIElements.length == 0) {
						$(_dropDownParentElement).children('li:last').addClass('selected');

					}


				// Enter: Trigger Selection
				} else if (_keyCode == 13) {
					$(_dropDownParentElement).children('.selected').children('a').trigger('click');
				}

				// Dont let the events pass through for the following keys
				if (_keyCode == 40 || _keyCode == 38 || _keyCode == 13 || _keyCode == 27) {
					_event.preventDefault();
					_event.stopPropagation();

					return false;
				}

				return true;
			});

			// Display!
			$(_dropDownParentElement).show();
			$(element).focus();
		}

		plugin.init();
	};


    $.fn.kql = function(options) {

        return this.each(function() {
            if (undefined == $(this).data('kql')) {
                var plugin = new $.kql(this, options);
                $(this).data('kql', plugin);
            }
        });

    }
})(jQuery);
