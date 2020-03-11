$(document).ready(function() {

// 	"use strict";

// 	var max_fields = 9; //maximum input boxes allowed
// 	var wrapper = $(".input_fields_wrap"); //Fields wrapper
// 	var add_button = $(".add_field_button"); //Add button ID

// 	var x = 1; //initlal text box count
// 	$(add_button).click(function(e) { //on add input button click
// 		e.preventDefault();
// 		if (x <= max_fields) { //max input box allowed
// 			x++; //text box increment
// 			$(wrapper).append('<div class="form-group"><div class="form-row"><div class="col-2"><label class="col-form-label xx2">#' + x + '</label></div><div class="col-7"><input type="text" name="name[]" placeholder="..." class="form-control"/></div><div class="col-3"><a href="#" class="remove_field btn"><i class="far fa-trash-alt"></i></a></div></div></div>'); //add input box
// 		}
// 	});

// 	$(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
// 		e.preventDefault();
// 		$(this).parentsUntil(wrapper).remove();
// 		x--;
// 		$('input[name="name[]"]').each(function(index) {
// 			$(this).val(index + 1);
// 		});
// 		$('.xx2').each(function(index) {
// 			$(this).empty();
// 			$(this).append('#');
// 			$(this).append(index + 1);
// 		});
// 	});

	// 	var rows = $("#cRow").val();
	// 	var container = $('.addInput');
	// 	// container.empty();
	// 	for (var i = 0; i < rows; i++) {
	// 		container.append('<div class="col-4 col-lg-2"><label for="" class="col-form-label">#'+(i+1)+'</label><input type="text" class="form-control"></div>');
	// 	}


	// 	Nowa część kodu
	var addRow = $('.addRow');
	var cntRow = $('#cntRow').val(); //aktualna liczba wierszy

	//y - wartość początkowa, x - ilość wierszy, name - nazwa inputów, val - wartość
	function addRows(y, x, name, value = '') {
		for (i = 0; i < x; i++) {
			addRow.append('<div class="form-group col-sm-2"><label for="" class="col-form-label col-form-label-sm">#' + (i + y) + '</label><input name="' + name + (i + y) + '" type="text" class="form-control form-control-sm" value="' + value + '"></div>');
		}
	}
	//addRows(1, cntRow, 'zwr', '#');

// 	$("#cntRow").on('change', function() {
// 		alert('test');
// 	});
	$("#cntRow").on('change', function() {
		if ($('#cntRow').val() > cntRow) {
			ilosc = $('#cntRow').val() - cntRow; //ile dodajemy wierszy
			//initRow = parseInt(cntRow) + 1;
			xx = parseInt(($('.addRow .form-group:last-child :input').attr("name")).substr(3)) + 1;
			addRows(xx, ilosc, 'zwr', ''); //generujemy nowe wiersze
			cntRow = $('#cntRow').val(); //zmiana wartosci aktualnej liczby wierszy
		} else {
			ilosc = cntRow - $('#cntRow').val(); //ile wierszy usuwamy
			for (i = ilosc; i > 0; i--) {
				$("input[name='zwr" + (parseInt($('#cntRow').val()) + i) + "']").parent().remove();
			}
			cntRow = $('#cntRow').val(); //zmiana wartosci aktualnej liczby wierszy
		}
	});
	$('.x').click(function() {
		xx = $('.addRow .form-group:last-child :input').attr("name");
		addRow.append(xx.substr(3));
	});
})