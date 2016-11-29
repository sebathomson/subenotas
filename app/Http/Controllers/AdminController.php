<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use View;
use App\Alumno;

class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function descargar()
    {
        \Excel::create('Alumnos - Preupdv', function($excel) {
            // Set the title
            $excel->setTitle('Alumnos - Preupdv');

            // Chain the setters
            $excel->setCreator('Bitbang LTDA')->setCompany('Bitbang LTDA');

            $excel->sheet('Alumnos', function($sheet) {

                $sheet->setOrientation('landscape');
                // Freeze first row
                $sheet->freezeFirstRow();
                // Set auto size for sheet
                $sheet->setAutoSize(true);

                $array_letras = array('A','B','C','D','E','F','G','H','I','J','K');
                foreach ($array_letras as $keyletras => $valueletras) {
                    $sheet->getStyle($valueletras.'1')->applyFromArray(array(
                        'font' => array(
                            'bold'      =>  true
                            )
                        ));
                }
                
                $cabecera = array(
                    'Alumno'
                    );
                $sheet->appendRow($cabecera); 
                $cabecera = array(
                    'ID', 
                    'Nombres', 
                    'Apellidos', 
                    'Rut', 
                    'Celular', 
                    'Email', 
                    'Comuna', 
                    'Colegio', 
                    'Curso', 
                    'Promedio', 
                    'Sede', 
                    'Consulta', 
                    'Asignaturas'
                    );
                $sheet->appendRow($cabecera); 
                $alumnos = Alumno::all();
                foreach ($alumnos as $alumno) {
                    $sheet->appendRow(array(
                        $alumno->id,
                        $alumno->nombres,
                        $alumno->apellidos,
                        $alumno->rut,
                        $alumno->celular,
                        $alumno->email,
                        $alumno->comuna,
                        $alumno->colegio,
                        $alumno->curso,
                        $alumno->promedio,
                        $alumno->sede,
                        $alumno->consulta,
                        $alumno->asignaturas
                        ));
                }
            });

        })->export('xls');
    }

}