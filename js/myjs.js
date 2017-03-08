function test(id,name,brand,rate)
{
	//alert(name+brand+rate);
	
	/*var a=document.getElementById(""
	var b=document.getElementsByName("brand").value;
	var c=document.getElementsByName("rate").value;
	var d=document.getElementsByName("quantity").value;*/
	
	var x=document.getElementById(id).value;
		
	
	$.ajax({
            type:'POST',
            url:'http://localhost:8080/WMS/con_Order/insertOrder',
            data:{'id':id,'name':name,'brand':brand,'rate':rate,'quantity':x},
            success:alert("added to cart")
			
        });
		
		alert("id:"+id+"\nname:"+name+"\nbrand:"+brand+"\nrate:"+rate+"\nquantity:"+x);
	
	
}

$( "#order" ).submit(function() {
  	
	var id = $('#pid').val();
	var name = $('#pname').val();
	var brand = $('#pbrand').val();
	var rate = $('#prate').val();
	var quantity = $('#quantity').val();
	
	//alert("id:"+id+"\nname:"+name+"\nbrand:"+brand+"\nrate:"+rate+"\nquantity:"+x);
  	
    /* $.ajax({
            type:'POST',
            url:'http://localhost:8080/WMS/con_Order/insertOrder',
            data:{'id':x},
            success:alert( "Added to cart" )
        });*/
	});