<?php 

	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste seu código!</title>

	<meta charset="utf-8">

	<script src="Exemplos/codemirror/lib/codemirror.js"></script>
	<link rel="stylesheet" type="text/css" href="Exemplos/codemirror/lib/codemirror.css">
	<link rel="stylesheet" type="text/css" href="Exemplos/codemirror/theme/material.css">
	
	<script src="Exemplos/codemirror/mode/xml/xml.js"></script>


	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>
    <style type="text/css">
    	body {
    		background-color: #eee;
    	}

    	.CodeMirror{
    		height: 600px;
    	}

    	.btn:focus, .btn:active {
 		outline: none !important;
  		box-shadow: none !important;
}
    </style>

</head>
<body>

	<?php 
		if (isset($_POST['code'])) {
			$code_include = "Exemplos/".$_POST['code'];
		}else{
			$code_include = null;
		}
	 ?>

	 <?php include "navbar-top.php"; ?>
	 <div class="container-fluid">
	 	<div class="row">
	 		<div class="col-xl-12" style="padding: 1%">
	 			<button onclick="voltar()" class="btn btn-info">&lt Voltar</button>
	 			<br>
	 			<br>
	 			<h1>Teste seu código!</h1>

	 			<p>Use o nosso editor de texto online para simular o seu arquivo HTML!</p>
	 		</div>
	 	</div>

	 	<div class="row">
	 			
		 		<div class="col-xl-6 col-xs-12" style=" margin-bottom: 1%">
	 			<div style="width: 100%; padding: 1%; margin-bottom: 0; background-color: #3aafa9; color: #34515e;">
	 				<strong>Teste seu código!</strong>
	 				<button class="btn btn-sm btn-danger" style="margin-left: 3%; padding: 0.5%;" id="btn_exec"><i class="fas fa-terminal"></i> Testar código!

</button>
	 			</div>

<textarea id="code">
<?php 
if(file_exists($code_include)){
include $code_include;
}
?>
</textarea>
		 		
		 		</div>
		 		 	
		 		<div class="col-xl-6 col-xs-12">
		 			<div style="width: 100%; padding: 1.5%; margin-bottom: 0; background-color: #3aafa9; color: #34515e;">
	 					<strong>O resultado do seu código aparecera aqui</strong>
	 				</div>
					<iframe frameborder="0" id="myframe" width="100%" style="background-color: white; height: 600px"></iframe>
				</div>
			
		</div>
	 </div>	
	 	
<script>

    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		lineNumbers: true,
        matchBrackets: true,
        mode: "text/html",
     	theme: "material",
        indentUnit: 4,
        lineWrapping: true,
        indentWithTabs: true,
        autoComplete: true,
        enterMode: "keep",
        tabMode: "shift",
	});

		$("#btn_exec").click(function(){     
  		$("iframe").contents().find("body").html(editor.getValue());
		});

</script>

<script type="text/javascript">
	
	function voltar(){
		window.history.back();
	}

</script>

</body>
</html>