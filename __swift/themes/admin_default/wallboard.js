$(function(){
	setInterval('RefreshWallboard();', 30000);

	$("#soundtrumpet").jPlayer( {
	ready: function () {
		$(this).jPlayer("setMedia", {
			mp3: _baseThemePath + 'resources/trumpet.mp3'
		});
	},
	swfPath: _swiftPath + '__swift/thirdparty/jQuery'
	});

	$("#soundsonar").jPlayer( {
	ready: function () {
		$(this).jPlayer("setMedia", {
			mp3: _baseThemePath + 'resources/sonar.mp3'
		});
	},
	swfPath: _swiftPath + '__swift/thirdparty/jQuery'
	});

	$("#soundalert").jPlayer( {
	ready: function () {
		$(this).jPlayer("setMedia", {
			mp3: _baseThemePath + 'resources/alert.mp3'
		});
	},
	swfPath: _swiftPath + '__swift/thirdparty/jQuery'
	});

});

function RefreshWallboard() {
//	$("#soundtrumpet").jPlayer('play');
	$('#wallboardform').ajaxSubmit({
		target: '#wallboardcontainer',
		beforeSubmit: function () {
		},
		success: function() {

		}
	});
//	$('#wallboardcontainer').load(_swiftPath + 'wallboard/index.php?/Core/Default/Index/1');
}