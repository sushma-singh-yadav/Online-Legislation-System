$(document).ready(function(){



 $('#formsubmit').click(function(){

 	$.post("trylawyer.php",
 		{fname: $('#fname').val(),   },
 		 function(data){

         $('#response').html(data);
          
 	});

 });


 $('#formsubmits').click(function(){

 	$.post("type.php",
 		{fname2: $('#fname2').val(),   },
 		 function(data){

         $('#response').html(data);
          
 	});

 });
});

