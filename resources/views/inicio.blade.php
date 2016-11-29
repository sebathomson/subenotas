<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pedro del valdivia</title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>  
    <div id="container">
        <div class="inner">
            <div class="bigbanner">
                <img src="{{ asset('img/big-banner.jpg') }}" alt="">

                <div class="wrap-text">
                    <h1>Descubre PDV On line:</h1>

                    <ul>
                        <li>Prepara la PSU donde y cuando quieras.</li>
                        <li>Con precios accesibles desde $800 al día.</li>
                        <li>Con la Excelencia PDV de siempre.</li>
                    </ul>
                </div>                  
            </div>

            <div class="form">
                <h1>Ingresa tus datos</h1>
                <p>y pronto serás contactado por el área</p>            

                <div class="success">
                    <h1>Gracias por contactarnos</h1>
                    <p>Pronto te responderemos</p>                              
                </div>

                <div class="errores">
                    <ul>
                    </ul>
                </div>

                {!! Form::open(['route' => 'guardar', 'method' => 'POST']) !!}
                    <div class="steps first">
                        <div class="first-step">
                            <div class="input name">
                                {!! Form::text("alumno[nombre]", null, ['id' => 'inputName', 'placeholder' => 'Nombre']) !!}
                            </div>

                            <div class="input lastname">
                                {!! Form::text("alumno[apellido]", null, ['id' => 'inputLastname', 'placeholder' => 'Apellidos']) !!}
                            </div>                          

                            <div class="input rut">
                                {!! Form::text("alumno[rut]", null, ['id' => 'inputRut', 'placeholder' => 'RUT', 'maxlength' => '12']) !!}
                            </div>                          

                            <div class="input phone">
                                {!! Form::text("alumno[celular]", null, ['id' => 'inputPhone', 'placeholder' => 'Celular', 'maxlength' => '9']) !!}
                            </div>                                              

                            <div class="input email">
                                {!! Form::email("alumno[email]", null, ['id' => 'inputEmail', 'placeholder' => 'E-mail']) !!}
                            </div>                                          
                        </div>

                        <div class="second-step">
                            <div class="input comuna">
                                {!! Form::select('comuna', $comunas, null, ['name' => 'comuna', 'id' => 'comuna'])  !!}
                            </div>

                            <div class="input colegio">
                                <select name="colegio" id="colegio">
                                    <option value="0">Selecciona tu colegio</option>
                                </select>
                            </div>                          

                            <div class="input curso">
                                {!! Form::select('curso', $cursos, null, ['name' => 'curso', 'id' => 'curso'])  !!}
                            </div>                          

                            <div class="input promedio">
                                {!! Form::text("alumno[promedio]", null, ['id' => 'inputPromedio', 'placeholder' => 'Ingresa tu promedio de notas', 'maxlength' => '2']) !!}
                            </div>                                          

                            <div class="input sede">
                                {!! Form::select('sede', $sedes, null, ['class' => 'combox-2', 'id' => 'sede'])  !!}
                            </div>                                              
                        </div>

                        <div class="third-step">
                            <div class="input message">
                                {!! Form::textarea("consulta", null, ['cols' => '30', 'rows' => '10', 'placeholder' => 'Deja tu consulta aquí']) !!}
                            </div>                                          

                            <p>Selecciona <br/> las asignaturas de tu interés</p>

                            <div class="inputs">
                                <div class="left">
                                    @foreach ($asignaturas as $k => $asignatura)
                                    @if ($k % 2 == 0)
                                    <input type="checkbox" id="asignatura" name="asignatura[]" value="{{ $asignatura }}"> {{ $asignatura }}<br/>
                                    @endif 
                                    @endforeach
                                </div>

                                <div class="right">
                                    @foreach ($asignaturas as $k => $asignatura)
                                    @if ($k % 2 == 0)
                                    @else
                                    <input type="checkbox" id="asignatura" name="asignatura[]" value="{{ $asignatura }}"> {{ $asignatura }}<br/>
                                    @endif 
                                    @endforeach                             
                                </div>                              
                            </div>
                        </div>                                              

                        <div class="paginator">
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>      

                        <div class="buttons">
                            <button id="back">Volver</button>
                            <button id="next">Siguiente</button>
                            <button id="send">Enviar</button>
                        </div>              

                        <p>Junto con tu inscripción, podrás descargar un ensayo de Matemáticas y Lenguaje.</p>      
                    </div>
                </form>
            </div>      
        </div>

        <div class="footer-pdv">
            <div class="cont-text-footer">
                <div class="wrap-img">
                    <div class="item">
                        <img class="img-responsive logo-left" src="{{ asset('img/logo_excelencia.png') }}">
                    </div>
                    <div class="item">
                        <img class="img-responsive logo-right" src="{{ asset('img/logo-footer-pdv.png') }}">
                    </div>
                </div>
            </div>
        </div>  

        <div class="footer-foot-info">
            <ul>
                <li><a href="#">www.preupdv.cl</a> |</li>
                <li>+ información: 600 500 20 20 |</li>
                <li class="icon-foot"><a target="_blank" href="https://twitter.com/preupdv"><img src="{{ asset('img/icon1-social.png') }}"></a></li>
                <li class="icon-foot"><a target="_blank" href="https://www.youtube.com/channel/UCDYsVvWgVoBjWYrEuR9KugQ"><img src="{{ asset('img/icon2-social.png') }}"></a></li>
                <li class="icon-foot"><a target="_blank" href="https://www.facebook.com/preupdv"><img src="{{ asset('img/icon3-social.png') }}"></a></li>
                <li class="icon-foot"><a target="_blank" href="https://www.instagram.com/preupdv"><img src="{{ asset('img/icon4-social.png') }}"></a></li>
            </ul>
        </div>          
    </div>
    <!-- build:js js/vendor.min.js -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#comuna").change(function(){
                var comuna = $('#comuna option:selected').html();
                $.ajax({
                    type: 'GET',
                    url: '{{ url('/colegio-por-comuna') }}',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(data) {
                        options = '';
                        options += "<option value='0'>Selecciona tu colegio</option>";

                        $.each(data, function(index, val) {
                            options += "<option value='"+index+"'>"+val+"</option>";
                        });

                        $("#colegio").html(options);
                    }
                });
            }); 
        });
    </script>
    <!-- endbuild -->
</body>
</html>
