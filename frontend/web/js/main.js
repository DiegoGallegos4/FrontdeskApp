$(function(){
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
   
   //$('.modal-dialog').addClass('modal-lg');
   
   $('.update').click(function(e){
       e.preventDefault();
       e.stopPropagation();
       $('#modalCrear').modal('show')
                .find('#modalContent')
                .load($(this).attr('href'));
   });
   

  /*
   * SignaturePad
   * 
   */
    
   $('.signature').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        var url = $(this).attr('href').replace('signature','update');
        $('#modalCrear').modal('show')
                .find('#modalContent')
                .load($(this).attr('href'),function(){ 
                    var canvas = document.getElementById('myCanvas'), 
                                 clearButton = $('[data-action=clear]'),
                                 saveButton = $('[data-action=save]'),
                                 signaturePad;
                                 
                    function resizeCanvas() {
                        var ratio =  Math.max(window.devicePixelRatio || 1, 1);
                        canvas.width = canvas.offsetWidth * ratio;
                        canvas.height = canvas.offsetHeight * ratio;
                        canvas.getContext("2d").scale(ratio, ratio);
                    };

                    window.onresize = resizeCanvas;
                    //resizeCanvas();
                    if(canvas){
                        signaturePad = new SignaturePad(canvas);

                        clearButton.click(function(e){
                            signaturePad.clear();
                        });

                        saveButton.click(function(e){
                            if(signaturePad.isEmpty()){
                                alert("Firma Vacia");
                            }else{
                                var data = signaturePad.toDataURL();
                                $.ajax({
                                    data: {'firma' : data },
                                    type: 'POST',
                                    url: url,
                                    success: function(){
                                        console.log('OK');
                                    }
                                }).done(function(result){
                                    if(result === '1'){
                                        $('.modal').modal('hide');
                                    }else{
                                        console.log('Oops');
                                    }
                                });
                            } 
                        });
                    }
        });
    });
    

    
   /*Create button Ajax and reloading of GridView
    * 1 if successful
    * 2 if successful but object created not related to GridView(e.g Calendar)*/  
   var test = /residente\/\d/;
   $('body').on('click','#crear', function(e){
       e.preventDefault();
       e.stopPropagation();
       var data = $('form').serialize();
       $.ajax({
           url: $('form').attr('action'),
           type: 'POST',
           data: data
    }).done(function(result){
        if(result === '1'){
            $('.modal').modal('hide');
            $.pjax.reload({container: test.test(window.location.pathname) ? '.table-responsive' : '.grid-view'});
        }
        if(result === '2'){
            $('.modal').modal('hide');
            if(window.location.pathname.includes('evento')){
                $('.fullcalendar').fullCalendar('refetchEvents');
            }
        }   
    });
   });
   
   /*FullCalendar*/
   var testEvento = /evento/;
   if(testEvento.test(window.location.pathname)){
        $('.fullcalendar').fullCalendar({
            defaulView: 'timelineMonth',
            editable: true,
            dayClick: function(date, jsEvent, view){
                 $('#modalButtonCrear').click();
                 setTimeout(function(){           
                     var startDate = date.format().split('-').join('/') + ' ' + '00:00';
                     var endDate = date.format().split('-').join('/') + ' ' + '10:00';
                     $('#evento-fecha_inicio').val(startDate);
                     $('#evento-fecha_fin').val(endDate);
                 },1000);        
             }, 
            eventClick: function(event,jsEvent,view){
                $(this).attr('value','/evento/update/' + event.id);
                $('#modalCrear').modal('show').find('#modalContent').load($(this).attr('value'));
            }, 
            events: '/evento/json',
            header : { center: 'title', 
                       left: 'prev,next today',
                       right: 'month,agendaWeek,agendaDay' }
        });
    }
    
});

