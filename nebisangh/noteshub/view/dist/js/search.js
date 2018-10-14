 	$(document).ready(function(){
 		$('input.searchbar').focus(function(){
 			
 			$('.search-banner').css("filter","grayscale(50%)");
 			$('.searchbar-wrapper').css("box-shadow","0 0 15px #000");
 			$('.searchbar-branding').slideUp("slow");
 		});
		$('input.searchbar').blur(function(){
 			
 			$('.search-banner').css("filter","grayscale(0%)");
 			$('.searchbar-wrapper').css("box-shadow","0 0 5px #000");
 		});
 
 		if($('#searchresult').html()!="") {  $(".searchbar-branding").hide(); $('.search-banner').css("min-height","190px"); $('.searchbar-container').css("width","100%");}
 		if($('#searchresult').html()=="") { $(".searchbar-branding").css("display","flex"); $('.search-banner').css("min-height","100%"); $('.search-banner').css("position","absolute"); } 
		
		//DATATABLES CODE FOR SEARCH BAR
		$('.resultsTable').DataTable({
               		responsive: true,
			columnDefs: [
                  	 { responsivePriority: 1, targets: 0 },
                 	 { responsivePriority: 2, targets: 1 }
    	   	   	]
		});
		//DATATABLE RESPONSIVENESS FOR MULTIPLE TABS
		$('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
		   $($.fn.dataTable.tables(true)).DataTable()
		      .columns.adjust();
		});
		var count=0;
		var sel;
		$('input.searchbar').bind('keydown',function(e){
		var code = e.keyCode || e.which;
		if($('#searchqueryList').html()!="") {
			
			
				//alert("inside keydown")
				//alert(code);
 				if(code == 40) {
 					//alert("down pressed");
 					if(count==0) {
						sel= $('#searchqueryList li').first();
						//alert("first");
						count++;
					}
					else {
						sel= $('#searchqueryList .active').next("li");
						$('#searchqueryList .active').removeClass("active");
						count++;
					}
 					
 					value=sel.html();
 					sel.addClass("active");
 					$('input.searchbar').val(value);
 					console.log(sel.html());
 					 $("body").scrollTop($(".active").offset().top);
 					
 				}
 				else if(code == 38) {
 					//alert("down pressed");
 					if(count<=0) {
						
					}
					else {
						sel= $('#searchqueryList .active').prev("li");
						$('#searchqueryList .active').removeClass("active");
						count--;
					}
 					
 					value=sel.html();
 					//alert(value);
 					sel.addClass("active");
 					$('input.searchbar').val(value);
 					console.log(sel.html());
 					
 				}
 				setTimeout(function(){
 					sel= $('#searchqueryList li').first();
 					//alert(sel);
 					},1000);
		}
		});
		
		
		//hide iframes by default
		$(".video .vid").hide();
		
		//SHOW VIDEO ON CLICK
		$('.video .thumb').click(function(){
			//alert($(this).attr("vid"))
			var src = $(this).attr("vid");
			$(this).closest(".card-title").next().attr("src",src);
			//alert($(this).closest(".card-title").next().attr("class"));
			$(this).closest(".card-title").next().show();
			$(this).closest(".card-title").hide();
		});
 	});
