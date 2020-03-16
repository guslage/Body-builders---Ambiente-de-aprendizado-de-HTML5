<?php
session_start();
include "BDConnect.php"; 
?>
<!DOCTYPE html>

<html>
<head>
    <title>Home</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
    
    <?php include "link_includes.php"; ?>

    <style type="text/css">
        .CodeMirror {
            height: 260px;
        }
        
        .gambiarra{
            display: none;
            visibility: hidden; 
        }
    </style>
    

</head>
<textarea class="gambiarra">
<body>
</body></textarea>    
<body style=" background-color: #3aafa9;">

    <?php include "navbar-top.php" ?>

    <div class="container-fluid">
    <div class="row no-gutter">

    

        <div class="header-intro col-xl-12" style="padding: 20%; padding-top: 5%; padding-bottom: 5%; background: url('background.png') no-repeat fixed center;">
            <center><img src="logo.png" style="height: 50%; width: 50%"></center>
            <hr style="background-color: white">
            <center><p style="color: white">
                
                Aprenda HTML5  de um jeito fácil com nossos tutoriais e participe de discussões com os outros usuários.
                <br>
                <br>

            </p></center>
            <center><a href="HTML_Intro.php" class="btn btn-lg btn-outline-info">Comece a aprender!</a></center>
        </div>

        <div class="header-intro col-xl-12" style="padding: 5%; color: #34515e">
            <h1>Vamos treinar!</h1>
            

            <div class="row no-gutter">
            <p style=" font-size: 20px" class="col-xl-3 col-xs-12">Cada tutorial possui um ou mais exemplos interativos relacionados ao elemento que está sendo ensinado naquele tutorial para que o usuário aprenda sobre os conteúdos apresentados através da prática.</p>

            <div class="col-xl-1"></div>
            
<div class="code-ex col-xl-7 col-xs-12" style="padding: 1%;">



<textarea class="code" rows="10">
<body>
    <p>Seja bem-vindo!</p>
    <p>Por que você não tenta escrever alguma coisa aqui?</p>
</body>
</textarea>




</div>
        
        </div> 

        <hr> 
        </div>  
    
    </div>
        
    <?php 

    if (isset($_SESSION['useryes'])) {
        echo $_SESSION['useryes'];
        session_unset();
    }

    if (isset($_SESSION['usernot'])) {
        echo $_SESSION['usernot'];
        session_unset();
    }

    ?>

    </div>

    <script type="text/javascript">
    function qsa(sel) {
        return Array.apply(null, document.querySelectorAll(sel));
    }
    qsa(".code").forEach(function (editorEl) {
      CodeMirror.fromTextArea(editorEl, {
        mode: "text/html",
        lineWrapping: true,
        lineNumbers: true,
        styleActiveLine: true,
        matchBrackets: true,
        theme: 'material',
      });
    });
    </script>

</body>
</html>