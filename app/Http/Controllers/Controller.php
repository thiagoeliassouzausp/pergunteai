<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function busca( Request $request ) {
        
        //$param = $request->campoBusca;
        $param = urlencode( $_GET['campoBusca'] );
        
        
        //$code = file_get_contents('select.json');
        $code = file_get_contents('http://18.228.93.24:8983/solr/pergunteai2/select?indent=true&q.op=OR&q=txt_pergunta%3A' . $param . '&rows=100');
        
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
        else {
            $pergunta = "";
            $resultado = 0;
        }
            
            
            return view('index')
            ->with('resultado', $resultado)
            ->with('pergunta', $pergunta);
                  
    }

    public function exercicios() {


        $param = $_GET['id'];
        

        //$code = file_get_contents('select.json');
        $code = file_get_contents('http://18.228.93.24:8983/solr/pergunteai2/select?indent=true&q.op=OR&q=id%3A' . $param . '&rows=1');
        
        
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
