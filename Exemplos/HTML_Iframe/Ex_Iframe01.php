<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Exemplo</title>
	<script src="../codemirror/lib/codemirror.js"></script>
	<link rel="stylesheet" type="text/css" href="../codemirror/lib/codemirror.css">
	<link rel="stylesheet" type="text/css" href="../codemirror/theme/dracula.css">
	<script src="../codemirror/mode/xml/xml.js"></script>


	<link rel="stylesheet" type="text/css" href="../../sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../sheet/frameword.css">
	<script src="../../sheet/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../sheet/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../sheet/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
    .CodeMirror {
    	display: inline-block;
  		width: 49.5%;
	}

	iframe {
		display: inline-block;
		width: 49.9%;
	}
	</style>

</head>
<body>

<div class="code-wrapper">
<textarea id="code" rows="5" cols="50" >
&ltbody>
	&ltiframe src="Iframe_demo.html">&lt/iframe>
&lt/body>
</textarea>

<iframe id="myframe" width="100%" style="background-color: white" height="300"></iframe><br>
<button class="btn btn-outline-info" id="btn_exec" type="button">Rodar código</button>
</div>	

    <script>

    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		lineNumbers: true,
        matchBrackets: true,
        mode: "text/html",
     	theme: "dracula",
        indentUnit: 4,
        indentWithTabs: true,
        autoComplete: true,
        enterMode: "keep",
        tabMode: "shift",
	});

	</script>

	<script type="text/javascript">

		$("#btn_exec").click(function(){     
  		$("iframe").contents().find("body").html(editor.getValue());
		});

	</script>
</body>


</html>