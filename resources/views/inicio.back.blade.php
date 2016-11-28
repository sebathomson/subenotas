<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedro del valdivia</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body class="body-color">
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NZSG4Q"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NZSG4Q');</script>
    <!-- End Google Tag Manager -->

    <!-- /HEADER -->
    <header>
        <div class="container-fluid cont-imgfull-header no-padding">    
            <img class="img-responsive hidden-xs" src="img/img-full-header-pdv.jpg">    
            <img class="img-responsive hidden-sm hidden-md hidden-lg" src="img/img-small-header-pdv.jpg">
        </div>   
    </header>
    <!-- /HEADER -->

    <!-- CONTENIDO -->
    <section>
        <div class="container cont-form-pdv">
            {!! Form::open(['route' => 'guardar', 'method' => 'POST', 'class' => 'form-pdv', 'id' => 'form-pedrodevaldivia']) !!}
            <div class="row">
                <div class="col-md-12">                     
                    <div class="cont-form-title">
                        <h5>INGRESA TUS DATOS Y PRONTO SERÁS CONTACTADO POR EL ÁREA.</h5>
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="cont-form-left">                            
                        {!! Form::text("alumno[nombre]", null, ['class' => 'textbox-full', 'id' => 'nombre', 'placeholder' => 'Nombre', 'onkeypress' => 'return alfabetico(event);']) !!}
                        {!! Form::text("alumno[apellido]", null, ['class' => 'textbox-full', 'id' => 'apellido', 'placeholder' => 'Apellidos', 'onkeypress' => 'return alfabetico(event);']) !!}
                        {!! Form::text("alumno[rut]", null, ['class' => 'textbox-full', 'id' => 'rut', 'placeholder' => 'Rut', 'maxlength' => '12']) !!}
                        {!! Form::text("alumno[celular]", null, ['class' => 'textbox-full', 'id' => 'celular', 'placeholder' => 'Celular', 'onkeypress' => 'return isNumber(event);', 'maxlength' => '9']) !!}
                        {!! Form::email("alumno[email]", null, ['class' => 'textbox-full', 'id' => 'email', 'placeholder' => 'E-mail']) !!}
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="cont-form-right select">
                        {!! Form::select('comuna', $comunas, null, ['class' => 'combox-2', 'name' => 'comuna', 'id' => 'comuna'])  !!}
                        <select class="combox-2" name="colegio" id="colegio">
                            <option value="">Selecciona tu colegio</option>
                        </select>
                        {!! Form::select('curso', $cursos, null, ['class' => 'combox-2', 'name' => 'curso', 'id' => 'curso'])  !!}
                        {!! Form::text("alumno[promedio]", null, ['class' => 'textbox-full', 'id' => 'promedio', 'placeholder' => 'Promedio de notas *(sin puntos ni comas)', 'onkeypress' => 'return isNumber(event);', 'maxlength' => '2']) !!}
                        {!! Form::select('sede', $sedes, null, ['class' => 'combox-2', 'name' => 'sede', 'id' => 'sede'])  !!}
                    </div>
                </div>
                <div class="col-md-12">
                   <div class="cont-form-center">
                    <div class="txt">
                        <h5>Deja tu consulta, aquí:</h5>
                    </div>
                    {!! Form::textarea("consulta", null, ['class' => 'textarea-full', 'id' => 'consulta']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="cont-form-center cont-check">
                    <div class="txt">
                        <h5>selecciona las asignaturas de tu interés</h5>
                    </div>
                    @foreach ($asignaturas as $asignatura)
                    <label class="checkbox-inline">
                        <input type="checkbox" id="asignatura" name="asignatura[]" value="{{ $asignatura }}"> {{ $asignatura }}
                    </label>
                    @endforeach
                </div>
            </div>

            <input type="button" name="btn-enviar" value="enviar" onclick="validaForm();">
        </form>
    </div>
</section>
<!-- /CONTENIDO -->

<!-- FOOTER -->
<div class="container-fluid no-padding footer-pdv">
    <div class="container cont-text-footer">
        <div class="row no-padding">
            <div class="col-md-6 no-padding">
                <img class="img-responsive logo-left" src="img/logo_excelencia.png">
            </div>
            <div class="col-md-6 no-padding">
                <img class="img-responsive logo-right" src="img/logo-footer-pdv.png">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid no-padding footer-foot-info">
    <ul>
        <li><a href="#">www.preupdv.cl</a> |</li>
        <li>+ información: 600 500 20 20 |</li>
        <li class="icon-foot"><a href="#"><img src="img/icon1-social.png"></a></li>
        <li class="icon-foot"><a href="#"><img src="img/icon2-social.png"></a></li>
        <li class="icon-foot"><a href="#"><img src="img/icon3-social.png"></a></li>
        <li class="icon-foot"><a href="#"><img src="img/icon4-social.png"></a></li>
    </ul>
</div>
<!-- /FOOTER -->

<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery.Rut.min.js"></script>
<!-- BOOTSTRAP JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">
    function validaForm() {
        var errms = "";

        if ($("#nombre").val().trim() == "") {
            errms += "* Ingresa tu nombre\n";
        }

        if ($("#apellido").val().trim() == "") {
            errms += "* Ingresa tus apellidos \n";
        }

        if ($("#rut").val().trim() == "") {
            errms += "* Ingresa tu rut \n";

        } else {

            if (!$.Rut.validar($("#rut").val())) {
                errms += "* Ingresa un rut válido \n";
            }
        }

        if ($("#celular").val().trim() == "") {
            errms += "* Ingresa tu celular \n";
        }

        if ($("#email").val().trim() == "") {

            errms += "* Ingresa tu email \n";

        } else {

            if (ValidaEmail($("#email").val()) == false) {
                errms += "* Ingresa un email válido \n";
            }
        }

        if ($("#comuna").val().trim() == "") {
            errms += "* Selecciona la comuna de tu colegio \n";
        }

        if ($("#colegio").val().trim() == "") {
            errms += "* Selecciona tu colegio \n";
        }

        if ($("#curso").val().trim() == "") {
            errms += "* Selecciona tu curso \n";
        }

        if ($("#promedio").val().trim() == "") {
            errms += "* Ingresa tu promedio de notas \n";
        }else{

            if ($("#promedio").val().trim() <= 0 || $("#promedio").val().trim() > 70) {
                errms += "* Ingresa un promedio de notas válido \n";
            }
        }

        if ($("#sede").val().trim() == "") {
            errms += "* Selecciona una sede \n";
        }
        if (ValidarBox($("#asignatura").val()) == false) {
            errms += "* Seleccione al menos una asignatura \n";
        }

        if (errms == "") {
            enviarForm();
        } else {
            alert("Hemos detectado los siguientes errores : \n" + errms);
        }
    }
    function ValidarBox(){
        var ok = 0;
        var ckbox = document.getElementsByName('asignatura[]');
        for (var i=0; i < ckbox.length; i++){
            if(ckbox[i].checked == true){
                ok = 1;
            }
        }

        if(ok == 0){
            return false;
        }
    }
    function ValidaEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function alfabetico(e){
        kc=e.keyCode?e.keyCode:e.which;
        if(kc<32) return true;
        kc=String.fromCharCode(kc);
        if(/[^a-zA-ZüÜáéíóúÁÉÍÓÚñÑ ]/.test(kc)) return false;
    }
    function isNumber(e) {
        k = (document.all) ? e.keyCode : e.which;
        if (k == 8 || k == 0) return true;
        patron = /[0-9]/;
        n = String.fromCharCode(k);
        return patron.test(n);
    }
    function delimitNumbers(str) {
        return (str + "").replace(/\b(\d+)((\.\d+)*)\b/g, function(a, b, c) {
            return (b.charAt(0) > 0 && !(c || ".").lastIndexOf(".") ? b.replace(/(\d)(?=(\d{3})+$)/g, "$1,") : b) + c;
        });
    }
    function enviarForm() {
        $("#form-pedrodevaldivia").submit();
    }
    function showError(XMLHttpRequest, textStatus, errorThrown) {
        alert("Ha ocurrido un error procesando la información");
    }
    $(document).ready(function() {
        $("#rut").Rut({
            format_on: 'keyup'
        })

        $("#comuna").change(function(){
            var comuna = $('#comuna option:selected').html();
            $.ajax({
                type: 'GET',
                url: '{{ url('/colegio-por-comuna') }}',
                dataType: 'json',
                data: $(this).serialize(),
                success: function(data) {
                    options = '';
                    options += "<option value=''>Selecciona tu colegio</option>";

                    $.each(data, function(index, val) {
                        options += "<option value='"+index+"'>"+val+"</option>";
                    });

                    $("#colegio").html(options);
                }
            });
        }); 
    });
</script>
</body>
</html>
