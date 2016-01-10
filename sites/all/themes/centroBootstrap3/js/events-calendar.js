jQuery(function($) {
	jQuery(window).load(function() {
		var d = new Date();
		var n = d.getMonth();
		switch(n){
		case 0:
			$("#January").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_january").removeClass("hide");
			$(".view-display-id-event_january").addClass(".show");
			break;
		case 1:
			$("#February").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_february").removeClass("hide");
			$(".view-display-id-event_february").addClass(".show");
			break;
		case 2:
			$("#March").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_march").removeClass("hide");
			$(".view-display-id-event_march").addClass(".show");
			break;
		case 3:
			$("#April").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_april").removeClass("hide");
			$(".view-display-id-event_april").addClass(".show");
			break;
		case 4:
			$("#May").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_may").removeClass("hide");
			$(".view-display-id-event_may").addClass(".show");
			break;
		case 5:
			$("#June").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_june").removeClass("hide");
			$(".view-display-id-event_june").addClass(".show");
			break;
		case 6:
			$("#July").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_july").removeClass("hide");
			$(".view-display-id-event_july").addClass(".show");
			break;
		case 7:
			$("#August").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_august").removeClass("hide");
			$(".view-display-id-event_august").addClass(".show");
			break;
		case 8:
			$("#September").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_september").removeClass("hide");
			$(".view-display-id-event_september").addClass(".show");
			break;
		case 9:
			$("#October").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_october").removeClass("hide");
			$(".view-display-id-event_october").addClass(".show");
			break;
		case 10:
			$("#November").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_november").removeClass("hide");
			$(".view-display-id-event_november").addClass(".show");
			break;
		case 11:
			$("#December").addClass("bg-blue");
			$(".month-sections").removeClass("show");
			$(".month-sections").addClass("hide");
			$(".view-display-id-event_december").removeClass("hide");
			$(".view-display-id-event_december").addClass(".show");
			break;
		}
	});

	$("#January,#February,#March,#April,#May,#June,#July,#August,#September,#October,#November,#December").click(function(e) {
		var monthStr = this.id;
		
		$(".month").removeClass("bg-blue");
		$(".month-sections").removeClass("show");
		$(".month-sections").addClass("hide");
		
		$(this).addClass("bg-blue");
		$(".view-display-id-event_" + monthStr.toLowerCase()).removeClass("hide");
		$(".view-display-id-event_" + monthStr.toLowerCase()).addClass("show");
	});
});