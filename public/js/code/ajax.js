$('.btn').click(function () {
	var id = $(this).data("id"); 
	$.get("AddToCart",{id:id},function(data){
		$('#a').text(data);
	});	
});