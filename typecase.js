$(document).ready(function(){



 $('#formsubmit').click(function(){

 	$.post("trycase.php",
 		{fname: $('#fname').val(),   },
 		 function(data){

         $('#response').html(data);
          
 	});

 });


 $('#formsubmits').click(function(){

 	$.post("typecase.php",
 		{fname2: $('#fname2').val(),   },
 		 function(data){

         $('#response').html(data);
          
 	});

 });
});

