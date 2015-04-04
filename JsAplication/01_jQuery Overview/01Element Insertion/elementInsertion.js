jQuery(document).ready(function  () {
	var $target = $('#target');
	var $ul = $('<ul />');
	$target.append($ul);
	$ul.prepend($('<li />').text('first'));
	$('<li />').text('second').prependTo($ul);
	$('<li />').text('third').appendTo($ul);
	$ul.append($('<li />').text('foutrh'));
	$ul.prepend($('<li />').text('fifth'));
});
