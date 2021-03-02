
	$('.btn').click(function () {
		var id = $(this).data("id"); 
		$.get("shopgrid/AddToCart",{id:id},function(data){
			$('#list-items').append(data);
		});	
	
	});
	$('.remove').click(function () { 
		var id = $(this).data("idremove");
		$.get("shopgrid/re",{id:id},function(){
			alert("xóa thành công");
		});
		$("#item-cart-"+id).hide();
		
	});
	function remove(id){
		$.get("shopgrid/re",{id:id},function(){
			alert("xóa thành công");
		});
		$("#item-cart-"+id).remove();
				
	}
