(function ($) {
 "use strict";
  $('#data_1 .input-group.date').datepicker({
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true,
		format: "mm-dd-yyyy"
	});

	$('#data_2 .input-group.date').datepicker({
		startView: 1,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		format: "mm-dd-yyyy"
	});

	$('#data_3 .input-group.date').datepicker({
		startView: 2,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		format: "mm-dd-yyyy",
		autoclose: true
	});

	$('#data_4 .input-group.date').datepicker({
		minViewMode: 1,
		keyboardNavigation: false,
		forceParse: false,
		forceParse: false,
		autoclose: true,
		todayHighlight: true,
			format: "mm-dd-yyyy"
	});

	$('#data_5 .input-daterange').datepicker({
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		format: "mm-dd-yyyy",
	});

})(jQuery); 