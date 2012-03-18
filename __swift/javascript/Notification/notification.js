
var SWIFT_Notification = {

	lifeAlert: 8000,
	lifeError: 10000,
	lifeInfo: 5000,
	lifeUsers: 5000,

	Info : function(_text) {
		$.jGrowl("<div class='imgok'></div><div class='text'>" + _text + "</div>", {
			life: this.lifeInfo,
			theme: 'info'
		});
	},

	Alert : function(_text) {
		$.jGrowl("<div class='imgalert'></div><div class='text'>" + _text + "</div>", {
			life: this.lifeAlert,
			theme: 'alert'
		});
	},

	Error : function(_text) {
		$.jGrowl("<div class='imgerror'></div><div class='text'>" + _text + "</div>", {
			life: this.lifeError,
			theme: 'error'
		});
	},

	Users : function(_text) {
		$.jGrowl("<div class='imgusers'></div><div class='text'>" + _text + "</div>", {
			life: this.lifeUsers,
			theme: 'users'
		});
	}
}