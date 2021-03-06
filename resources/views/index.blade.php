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
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1966866960738653"
        crossorigin="anonymous"></script>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

       
        <meta name="description" content="" />
        <meta name="author" content="Resolução de questões de física e ciências exatas, problemas resolvidos e questões de vestibulares ENEM FUVEST e concursos públicos" />
        <title>Pergunteai - Resolução de questões de física e ciências exatas, problemas resolvidos e questões de vestibulares ENEM FUVEST e concursos públicos
        </title>

        <link rel="icon" type="image/x-icon" href="/assets/if-favicon.png">
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "/assets/if-favicon.png"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
   
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="http://www.pergunteai.com.br">Pergunte Ai</a>
                <!-- <a class="btn btn-primary" href="#signup">Entrar</a> -->
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
        @include('busca');
        </header>

        @include('resultado_busca');
        
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
