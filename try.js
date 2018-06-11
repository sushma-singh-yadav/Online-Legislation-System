$(document).ready(function(){

 $('#formsubmit').click(function(){

 	$.post("try.php",
 		{fname: $('#fname').val(),   },
 		 function(data){

         $('#response').html(data);
          
 	});

 });
});

