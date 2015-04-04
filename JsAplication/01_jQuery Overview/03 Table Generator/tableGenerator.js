$(document).ready(function  () {

	var data,
		input,
		$target = $('#target'),
		$table = $('<table />');

	$target.append($table);
	$table.append('<tr />');
	$('#target tr:first').addClass('table-header');

	$('#btn').on('click', function  (event) {
		input = $('#text').val();
		data = JSON.parse(input);
		generateTable(data);
	});

	String.prototype.capitalize = function() {
    	return this.charAt(0).toUpperCase() + this.slice(1);
	};

	function generateTable (data) {
		var elements = data[0];

		for(var el in elements){
			var $th = $('<th />');
			$th.html(el.capitalize());
			$th.appendTo($('.table-header'));
		}

		for (var i = 0; i < data.length; i++) {
			var row = data[i],
				$tr = $('<tr />');
			for(var item in row){
				var $td = $('<td />');
				$td.html(row[item]);
				$tr.append($td);
			}
			$table.append($tr);
		}
	}
});