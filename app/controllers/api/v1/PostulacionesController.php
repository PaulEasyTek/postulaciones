<?php

namespace api\v1;

class PostulacionesController extends \BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */
    
    public function getIndex() {
        $postulaciones=\Postulacion::all();
        
        $array=$postulaciones->toArray();
        
        $response=\Response::json($array,400);
        
        return $response;
    }
    
    public function postIndex() {

        $validator = \Validator::make(\Input::all(), array(
                    'nombre' => 'required',
                    'apellidos' => 'required',
                    'email' => 'required|email',
                    'repo_url' => 'required|active_url',
                    'linkedin_url' => 'required|active_url',
                    'cargo_a_postular' => 'required',
                    'respuesta_desafio' => 'required'
                )
        );
        
        if ($validator->passes()) {
            $postulacion = new \Postulacion;
            $postulacion->nombre = \Input::get('nombre');
            $postulacion->apellidos = \Input::get('apellidos');
            $postulacion->email = \Input::get('email');
            $postulacion->repo_url = \Input::get('repo_url');
            $postulacion->linkedin_url = \Input::get('linkedin_url');
            $postulacion->cargo_a_postular = \Input::get('cargo_a_postular');
            $postulacion->respuesta_desafio = \Input::get('respuesta_desafio');

            $postulacion->save();
            
            $respuesta=new \stdClass();
            $respuesta->codigo=0;
            $respuesta->mensaje='Postulación ingresada con éxito.';
            $response=\Response::json($respuesta,200);
        } else {
            $respuesta=new \stdClass();
            $respuesta->codigo=1;
            $respuesta->mensaje='Error en parametros de ingreso de postulación.';
            $respuesta->errores=$validator->messages()->all();
            $response=\Response::json($respuesta,400);
            
            
        }
        
        return $response;
    }

}
