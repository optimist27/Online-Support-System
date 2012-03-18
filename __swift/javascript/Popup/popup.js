(function($) {
    $.SWIFT_Popup = function(element, options) {
		var popupOptions = {
			'elementID': '',
			'isdialog': false,
			'width': false,
			'align': 'left', // left/right
			'spacing': 0, // Bottom Spacing
			'startfrom': '', // Start menu from element, this is useful if you want the starting of popup to be aligned with bottom of an element, like a toolbar
			'hovertimeout': 0,
			'elementhovertimeout': 0
		}

		var plugin = this;
		plugin.settings = {};

		var $element = $(element), element = element;


		plugin.init = function() {
			plugin.settings = $.extend({}, popupOptions, options);

			plugin.settings.elementID = $(element).attr('id');
			var _popupName = 'popup_' + $(element).attr('id');


			$('body').children('#' + _popupName).each(function(_popupChildElement) {
				$(this).remove();
			});

			var _popupElement = $('#' + _popupName);

			if (plugin.settings.isdialog == true) {
				_popupElement.addClass('swiftpopupdialog');
			}

			$('#' + _popupName).appendTo('body');

			$(document).bind('click', function(e) {
				var clickedElement=$(e.target);

				// We only destroy the drop down if the click was outside it
				if (!clickedElement.parents().is('.swiftpopup')) {
					setTimeout('SWIFT_PopupDestroyAll("' + plugin.settings.elementID + '")', 100);
				}
			});

			$(element).addClass('swiftpopupoutline');

			$(element).hoverIntent(function(e) {
				$(element).addClass('popupover');
				plugin.HandleOutlineHover(element, plugin.settings);
				if (plugin.settings.hovertimeout != 0) {
					clearTimeout(plugin.settings.hovertimeout);
					plugin.settings.hovertimeout = 0;
				}
			}, function(e) {
				$(element).removeClass('popupover');
				plugin.settings.hovertimeout = setTimeout('SWIFT_PopupHoverOut("' + _popupName + '", "' + plugin.settings.elementID + '")', 800);
			});

			// Add hover class management for popup
			$('#' + _popupName).hoverIntent(function(e) {
				$('#' + _popupName).addClass('popupover');
				if (plugin.settings.hovertimeout != 0) {
					clearTimeout(plugin.settings.hovertimeout);
					plugin.settings.hovertimeout = 0;
				}
			}, function(e) {
				$('#' + _popupName).removeClass('popupover');
				plugin.settings.hovertimeout = setTimeout('SWIFT_PopupHoverOut("' + _popupName + '", "' + plugin.settings.elementID + '", ' + popupOptions.isdialog + ')', 300);
			});

			var _minimumWidth = $(element).width()+50;
			if (plugin.settings.width != false) {
				_minimumWidth = plugin.settings.width+16;
			}

			$('#' + _popupName).css('min-width', _minimumWidth + 'px');

			var _popupAlign = plugin.settings.align;

			$('#' + _popupName).position({
				of: '#' + $(element).attr('id'),
				my: _popupAlign + ' top',
				at: _popupAlign + ' bottom',
				offset: '0 -1px'
			});

			return true;
		}

		plugin.DestroyAll = function() {
			SWIFT_PopupDestroyAll(plugin.settings.elementID);
		}

		plugin.HandleOutlineHover = function(_element, _options) {
			var _popupName = 'popup_' + $(_element).attr('id');

			// Get offset
			var _offsetContainer = $(_element).offset();

			if (_options.isdialog) {
				$(_element).addClass('swiftpopupoutlinehover').css('position', 'absolute').offset(_offsetContainer).css('width', _options.width + 'px');
			} else {
				$(_element).addClass('swiftpopupoutlinehover');
			}

			$('#' + _popupName).show();
		}

		plugin.DestroyPopup = function(_element) {
			var _popupName = 'popup_' + $(_element).attr('id');
			$('#' + _popupName).hide();
		}

		plugin.init();
	};


    $.fn.SWIFT_Popup = function(options) {

        return this.each(function() {
            if (undefined == $(this).data('SWIFT_Popup')) {
                var plugin = new $.SWIFT_Popup(this, options);
                $(this).data('SWIFT_Popup', plugin);
            }
        });

    }
})(jQuery);

function SWIFT_PopupDestroyAll(_elementID) {
	$('.swiftpopup').hide();
	$('#' + _elementID).removeClass('swiftpopupoutlinehover');
}

function SWIFT_PopupHoverOut(_popupName, _elementID, _isDialog) {
	if (!$('#' + _popupName).hasClass('popupover') && !$('#' + _elementID).hasClass('popupover')) {
		$('#' + _popupName).hide();

		if (_isDialog) {
			$('#' + _elementID).removeClass('swiftpopupoutlinehover').css('position', 'relative').css('left', '0').css('top', '0').css('width', '');
		} else {
			$('#' + _elementID).removeClass('swiftpopupoutlinehover');
		}
	}
}