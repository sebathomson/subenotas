$(function(){
	$('#next').click(function(e) {
		var form = $('form .steps');

		switch (true) {
			case $(form).hasClass('first'):
				$(form).removeClass('first');
				$(form).addClass('second');
		  	break;
			case $(form).hasClass('second'):
				$(form).removeClass('second');
				$(form).addClass('third');
		  	break;
			case $(form).hasClass('third'):
		  	break;
		}				

		e.preventDefault();
	});

	$('#back').click(function(e) {
		var form = $('form .steps');

		switch (true) {
			case $(form).hasClass('first'):
		  	break;
			case $(form).hasClass('second'):
				$(form).removeClass('second');
				$(form).addClass('first');
		  	break;
			case $(form).hasClass('third'):
				$(form).removeClass('third');			
				$(form).addClass('second');
		  	break;
		}				

		e.preventDefault();
	});	

    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $('#send').click(function (event){
        var count = 0;
        var listadoErrores = '';
        console.log('enviando');

        $(".input").removeClass('error');
        $('.errores').find('ul').remove('li');

        setTimeout(function(){
        		$('.errores').hide();
        		$('.errores ul').empty();
        },3000);

        if( $("#inputEmail").val() == "" || !emailreg.test($("#inputEmail").val()) ){
            $("#inputEmail").parent().addClass('error');

            $('.errores').show();
            listadoErrores += "<li>Error de Email</li>";
            count ++;
        }

        if( $("#inputName").val() == "" ){
            $("#inputName").parent().addClass('error');
                count ++;

            $('.errores').show();
            listadoErrores += "<li>Ingrese Nombre</li>" ;
        }

        if( $("#inputLastname").val() == "" ){
            $("#inputLastname").parent().addClass('error');
                count ++;

            $('.errores').show();
            listadoErrores += "<li>Ingrese Apellido</li>" ;
        }

        if( $("#inputRut").val() == "" ){
            $("#inputRut").parent().addClass('error');
                count ++;
            $('.errores').show();
            listadoErrores += "<li>Ingrese un RUT válido</li>" ;                
        }

        if( $("#inputPhone").val() == "" ){
            $("#inputPhone").parent().addClass('error');
                count ++;
            $('.errores').show();
            listadoErrores += "<li>Ingrese un Teléfono</li>" ;                                
        }        

        if( $("#comuna").val() == "0" ){
            $("#comuna").parent().addClass('error');
                count ++;
            $('.errores').show();
            listadoErrores += "<li>Ingrese una Comuna</li>" ;                                
        }           

        if( $("#colegio").val() == "0" ){
            $("#colegio").parent().addClass('error');
                count ++;
            $('.errores').show();
            listadoErrores += "<li>Ingrese un Colegio</li>" ;                                
        }  

        if( $("#curso").val() == "0" ){
            $("#curso").parent().addClass('error');
                count ++;
            $('.errores').show();
            listadoErrores += "<li>Ingresar Curso</li>" ;                                
        }    
        
        if( $("#inputPromedio").val() == "" ){
            $("#inputPromedio").parent().addClass('error');
                count ++;
            $('.errores').show();
            listadoErrores += "<li>Ingresar Promedio</li>" ;                                
        }    

        if( $("#sede").val() == "0" ){
            $("#sede").parent().addClass('error');
                count ++;
            listadoErrores += "<li>Ingresar Sede</li>" ;    
        }          

        if( $("#message").val() == "" ){
            $("#message").parent().addClass('error');
                count ++;
            listadoErrores += "<li>Ingresar Mensaje</li>" ;    
        }                               

        if(count > 0){
            event.preventDefault();

	         if (count > 3){
	         	$('.errores').find('ul').append( "<li>El formulario tiene errores. Revisa que todos los campos estén correctamente ingresados.</li>" );
	         } else {
	            $('.errores').find('ul').append( listadoErrores );
	         }            
        } else { 

        		Console.log('Enviado Con exito');
         return;
        }
    });   	
});