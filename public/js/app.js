(function($) {

	"use strict";

	var max_fields = 9; //maximum input boxes allowed
	var wrapper = $(".input_fields_wrap"); //Fields wrapper
	var add_button = $(".add_field_button"); //Add button ID

	var x = 1; //initlal text box count
	$(add_button).click(function(e) { //on add input button click
		e.preventDefault();
		if (x <= max_fields) { //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div class="form-group"><div class="form-row"><div class="col-2"><label class="col-form-label xx2">#' + x + '</label></div><div class="col-7"><input type="text" name="name[]" placeholder="..." class="form-control"/></div><div class="col-3"><a href="#" class="remove_field btn"><i class="far fa-trash-alt"></i></a></div></div></div>'); //add input box
		}
	});

	$(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
		e.preventDefault();
		$(this).parentsUntil(wrapper).remove();
		x--;
		$('input[name="name[]"]').each(function(index) {
			$(this).val(index + 1);
		});
		$('.xx2').each(function(index) {
			$(this).empty();
			$(this).append('#');
			$(this).append(index+1);
		});
	})

})(jQuery);