<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Colegio;
use App\Comuna;
use App\Curso;
use App\Http\Controllers\Controller;
use App\Sede;
use Illuminate\Http\Request;
use Validator;
use View;

class AppController extends Controller
{
    /**
     * @return Response
     */
    public function inicio()
    {
        $parametros                  = [];
        
        $parametros[ 'comunas' ]     = $this->obtenerComunas();
        $parametros[ 'sedes' ]       = $this->obtenerSedes();
        $parametros[ 'cursos' ]      = $this->obtenerCursos();
        $parametros[ 'asignaturas' ] = $this->obtenerAsignaturas();

        return View::make('inicio', $parametros);
    }

    public function colegioporcomuna(Request $request)
    {
        if($request->ajax()){
            $comuna   = $request->query->get('comuna');
            $colegios = Colegio::where('comuna', '=', $comuna)->orderBy('nombre')->get();
            $return   = [ ];

            foreach ($colegios as $colegio) {
                $colegio = $colegio[ 'attributes' ];
                $return[ $colegio[ 'id' ] ] = $colegio[ 'nombre' ];
            }

            return $return;
        }
    }

    public function guardar(Request $request)
    {
        $datos  = $request->request->all();

        $alumno = [];

        $alumno[ 'nombres' ]   = $datos[ 'alumno' ][ 'nombre' ];
        $alumno[ 'apellidos' ] = $datos[ 'alumno' ][ 'apellido' ];
        $alumno[ 'rut' ]       = $datos[ 'alumno' ][ 'rut' ];
        $alumno[ 'celular' ]   = $datos[ 'alumno' ][ 'celular' ];
        $alumno[ 'email' ]     = $datos[ 'alumno' ][ 'email' ];

        $comuna      = Comuna::where('id', '=', $datos[ 'comuna' ])->first();
        $colegio     = Colegio::where('id', '=', $datos[ 'colegio' ])->first();
        $curso       = Curso::where('id', '=', $datos[ 'curso' ])->first();
        $sede        = Sede::where('id', '=', $datos[ 'sede' ])->first();
        $asignaturas = implode(', ', $datos[ 'asignatura' ]);

        $alumno[ 'comuna' ]      = $comuna->nombre;
        $alumno[ 'colegio' ]     = $colegio->nombre;
        $alumno[ 'curso' ]       = $curso->nombre;
        $alumno[ 'sede' ]        = $sede->nombre;
        $alumno[ 'consulta' ]    = $datos[ 'consulta' ];
        $alumno[ 'promedio' ]    = $datos[ 'alumno' ][ 'promedio' ];
        $alumno[ 'asignaturas' ] = $asignaturas;

        Alumno::create($alumno);

        return redirect()->route('respuesta');
    }

    public function respuesta()
    {
        return View::make('respuesta');
    }

    private function obtenerComunas()
    {
        $comunas       = Comuna::where('id', '!=', 0)->orderBy('nombre')->get();
        $return        = [ ];
        $return[ '0' ] = 'Selecciona la comuna de tu colegio';

        foreach ($comunas as $comuna) {
            $comuna = $comuna[ 'attributes' ];
            $return[ $comuna[ 'id' ] ] = $comuna[ 'nombre' ];
        }

        return $return;
    }

    private function obtenerSedes()
    {
        $sedes         = Sede::where('id', '!=', 0)->orderBy('nombre')->get();
        $return        = [ ];
        $return[ '0' ] = 'Selecciona tu sede de interés';

        foreach ($sedes as $sede) {
            $sede = $sede[ 'attributes' ];
            $return[ $sede[ 'id' ] ] = $sede[ 'nombre' ];
        }

        return $return;
    }

    private function obtenerCursos()
    {
        $cursos        = Curso::where('id', '!=', 0)->orderBy('nombre')->get();
        $return        = [ ];
        $return[ '0' ] = 'Selecciona tu curso';

        foreach ($cursos as $curso) {
            $curso = $curso[ 'attributes' ];
            $return[ $curso[ 'id' ] ] = $curso[ 'nombre' ];
        }

        return $return;
    }

    private function obtenerAsignaturas()
    {
        return [
        'Lenguaje', 'Biología', 'Matemática', 'Física', 'C. Sociales', 'Química'
        ];
    }
}