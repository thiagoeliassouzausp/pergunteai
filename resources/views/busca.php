                         <?php

                          
                            
                            
                            $code = file_get_contents('http://192.168.15.26:8983/solr/perguntas/select?indent=true&q.op=OR&q=txt_pergunta%3Aaluno');
                            
                            //$code = '{"id":"01", "id":"02"}';
                           
                            
                            $data = json_decode($code);
                            
                            $resultado = $data->response->numFound;
                            if ($resultado>0)
                            {
                                $pergunta = $data->response->docs;
                                foreach ($pergunta as $data) {
                                    echo $data->categoria[0];
                                    echo $data->txt_pergunta[0];
                                    echo $data->materia[0];
                                    echo $data->txt_resposta[0];


                                }
                            }
                            //$data = $code.getResponse();

                            //var_dump($data['response']['docs'][0]['id']);
                            

                            

                           

                            /*$objeto = json_decode($this->params['doc']);
                            echo $objeto;

                            foreach($json as $key => $val) {
                                if(is_array($val)) {
                                    echo "$key:\n";
                                } else {
                                    echo "$key => $val\n";
                                }
                            }

                        */
                        ?>