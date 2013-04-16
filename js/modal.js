var opcion;
$(document).ready(function(){
        //parametros principales
      
    
       
         var ancho = 740;
        var alto = 442;

        $('#cerrar').live("click",closeModal);

        $('#registro').live("click",function(){
                 

	  	var contenidoHTML= new Array();

	  
	      contenidoHTML[0]= '<section id="registrar"><aside id="cerrar">Cerrar</aside><form  name="registrate" method="post" id="regis">Nombre(s):<input type="text" name="nombre" pattern="^[a-z].*" id="nombre" title="nombre" placeholder="Tu nombre completo" required>Correo:<input type="email" name="mail" id="mail" title="mail" placeholder="Ejem: xxxxx@hotmail.com" required>Empresa:<input type="text" name="empresa" id="empresa" title="empresa" placeholder="Ejem: la preferida" required>Clave:<input type="password" name="pass" id="password" title="pass" placeholder="Ingresa tu contraseña" required><input type="submit" value="Registrarse" title="Enviar" id="enviareg" style="cursor:pointer"></form></section>';	  

	       $('#regis').on('submit',enviarformulario);

	
                var bgdiv = $('<div>').attr({
                                        className: 'bgtransparent',
                                        id: 'bgtransparent'
                                        });
       
                $('body').append(bgdiv);
               
   
                var wscr = $(window).width();
                var hscr = $(window).height();
               

               
               

                var moddiv = $('<div>').attr({
                                        className: 'bgmodal',
                                        id: 'bgmodal'
									
                                        });    
               
     
                $('body').append(moddiv);


                $('#bgmodal').append(contenidoHTML[0]);
               

                $(window).resize();
        });

        $(window).resize(function(){
   
                var wscr = $(window).width();
                var hscr = $(window).height();

          
                $('#bgtransparent').css("width", wscr);
                $('#bgtransparent').css("height", hscr);
               
           
                $('#bgmodal').css("width", ancho+'px');
                $('#bgmodal').css("height", alto+'px');
               
         
                var wcnt = $('#bgmodal').width();
                var hcnt = $('#bgmodal').height();
               
           
                var mleft = ( wscr - wcnt ) / 2;
                var mtop = ( hscr - hcnt ) / 2;
               
        
                $('#bgmodal').css("left", mleft+'px');
                $('#bgmodal').css("top", '250px');
        });
       
 });
       
function closeModal(){

        $('#bgmodal').remove();
        $('#bgtransparent').remove();
}

