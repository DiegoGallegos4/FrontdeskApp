$(function(){

//   $.ajax({
//       url: 'residente/create',
//       method: 'POST',
//       success: function(){
//           
//       }
//   });

   $("#modalButtonLlave").click(function(){
       $('#modalLlave').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
   }); 
   
   $("#modalButtonCrear").click(function(){
       $('#modalCrear').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
   });
   
   $("#modalButtonCrearVres").click(function(){
       $('#modalCrear').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
   });
      
   $('body').on('click','#crear', function(){
       var data = $('form').serialize();
       $.ajax({
           url: 'create',
           type: 'POST',
           data: data,
           success: function(){
               console.log(data);
           }
       });
   });
   
});

