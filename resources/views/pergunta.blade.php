<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

                <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190128066-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-190128066-1');
        </script>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

       
        <meta name="description" content="" />
        <meta name="author" content="<?php echo $_ENV['DESCRICAO']?>" />
        <title>Resolução de questões de física e ciências exatas, problemas resolvidos e questões de vestibulares ENEM FUVEST e concursos públicos
        </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script>
            function abrirModal() {
                //alert('abriu');
                document.getElementById('modal').style.top = "0";
            }
            function fecharModal() {
                //alert('fechou');
                document.getElementById('modal').style.top = "-100%";
            }

        </script>
    </head>
    <body>
   
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Pergunte Ai</a>
                <!-- <a class="btn btn-primary" href="#signup">Entrar</a> -->
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead_1">
        <section class="features-icons_1  text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4_1">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3"><h2>
                                <?php
                                    foreach ($pergunta as $data) 
                                    {
                                        echo "<p>";
                                        echo $data->txt_pergunta[0];
                                        echo "</a></p>";
                                        $img_resposta = $data->img_resposta[0];
                                    }
                                ?></h2>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-auto text-center"><button class="btn btn-primary btn-lg " id="showPergunta" type="submit" onclick="abrirModal()" >Mostrar Resultado</button></div>



            <div class="container-resposta">
               

            <div class="bg-modal" id="modal">
                    <span class="close" onclick="fecharModal()">&times;</span>
                    <div>
                        RESPOSTA
                    </div>
                    <div>
                        <img src="../assets/img_resposta/<?=$img_resposta?>">
                    </div>
                    
            </div>
            </div>  
            
        </section>
        </header>

      
        
        @include('footer');
        
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
