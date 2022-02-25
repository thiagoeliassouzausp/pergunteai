<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function busca() {

        $code = file_get_contents('select.json');
        
        $data = json_decode($code);
                            
        $resultado = $data->response->numFound;
        if ($resultado>0)
            {
                $pergunta = $data->response->docs;
                foreach ($pergunta as $data) 
                {
                    //echo $data->categoria[0];
                    //echo $data->txt_pergunta[0];
                    //echo "<br>";
                    //echo $data->materia[0];
                    //echo $data->txt_resposta[0];
                }
            }
            
            
            return view('index')
            ->with('resultado', $resultado)
            ->with('pergunta', $pergunta);
                  
    }

    public function exercicios() {

        $code = file_get_contents('select.json');
        
        $data = json_decode($code);
                            
        $resultado = $data->response->numFound;
        if ($resultado>0)
            {
                $pergunta = $data->response->docs;
                foreach ($pergunta as $data) 
                {
                    //echo $data->categoria[0];
                    //echo $data->txt_pergunta[0];
                    //echo "<br>";
                    //echo $data->materia[0];
                    //echo $data->txt_resposta[0];
                }
            }
            
            
            return view('pergunta')
            ->with('resultado', $resultado)
            ->with('pergunta', $pergunta);
                  
          
            
                  
    }



}
