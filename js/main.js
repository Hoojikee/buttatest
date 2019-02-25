/************************ to highlight on which section you are ****************/
$(".navbar li").click(function(){
	"use strict";
		$(this).addClass("selected");
		$(".navbar li").not(this).removeClass("selected");  
	});

/********************* highlight active link when scrolled **************************/

	$(window).scroll(function(){
		"use strict";
		console.log( $(this).scrollTop());
		$('.page').each(function(){
			var sectionoffset = $(this.hash).offset().top;   // saves dist of that hash trom top
			if(sectionoffset <= $(this).scrollTop()){
				$(this).addClass('selected');
			}			

		});
	});