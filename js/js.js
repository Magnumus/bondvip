$(function() {
	
	$(".enter").on("click", function() {
		var k=0;
		if ( $("#name").val().length==0) {
			$("#name").addClass("false");
			if ( $(document).width()>425 ) {
				$(".rec").show();
			}
		}
		else {
			$("#name").removeClass("false");
			k++;
		}
		if ( $("#email").val().length==0 ) {
			if ( $(document).width()>425 ) {
				$(".rec").show();
			}
			$("#email").addClass("false");
		}
		else {
			$("#email").removeClass("false");
			k++;
		}
		if ( $("#pass").val().length==0 ) {
			if ( $(document).width()>425 ) {
				$(".rec").show();
			}
			$("#pass").addClass("false");
		}
		else {
			$("#pass").removeClass("false");
			k++;
		}
		if ( $(".pass1").val().length==0 ) {
			if ( $(document).width()>425 ) {
				$(".rec").show();
			}
			$(".pass1").addClass("false");
		}
		else {
			$(".pass1").removeClass("false");
			k++;
		}
		if ( k==4) {
			$(".rec").hide();
		}
	});
	
	$(".reg").click(function() {
		$("#name").hide();
		$(".pass1").hide();
		$(".enter").hide();
		$(".enter_e").show();
		$(".pas_rec").show();
		$(".rec_r").show();
		$(this).hide();
	});
	$(".rec_r").click(function() {
		$("#name").show();
		$(".pass1").show();
		$(".enter").show();
		$(".enter_e").hide();
		$(this).hide();
		$(".reg").show();
		$(".pas_rec").hide();
	});
	
});