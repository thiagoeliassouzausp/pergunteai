<?php

if (isset($resultado)) 
{?>

<section class="features-icons bg-light text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4_1">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            
                            <p class="lead">Encontramos <?=$resultado?>  resultado(s)</p>
                            
                                <?php
                                if ($resultado>0)
                                {
                                    foreach ($pergunta as $data) 
                                    {
                                        echo "<p h2><a href=/exercicios?$data->id>";
                                        echo $data->txt_pergunta[0];
                                        echo "</a></p>";
                                    }
                                }
                                ?>    
                            
                        </div>
                    </div>
                    
                </div>
            </div>
           
</section>


<?php 
}
?>