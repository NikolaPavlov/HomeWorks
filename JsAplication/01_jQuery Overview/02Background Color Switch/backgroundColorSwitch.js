$(document).ready(function  () {
	var classValue,
		paintValue,
		isClicked = false;
	$('#btn').on('click' , function  (event) {
		if(isClicked){
			$('li').css('background-color', '');
		}
		classValue = $('#className').val();
		paintValue = $('#colorPicker').val();
		$('.'+ classValue).css('background-color', paintValue );
		isClicked = true;
		event.preventDefault();
	});
});