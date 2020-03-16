<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pergunte Algo!</title>
	<meta charset="utf-8">
	<?php include "codemirrorscripts.html"; ?>
	<?php include "link_includes.php"; ?>
</head>
<body>

	<?php include "navbar-top.php"; ?>
    
    <div class="container-fluid">
    <div class="row no-gutter">

    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-3">
    </div>
    
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-6">
    	<div id="pergunta-container" style="padding: 2%; background-color: white;">
    	<?php if ($_SESSION['usuario_id'] != 0) {	?>
			<h1>Qual a sua dúvida?</h1>
			<br>
			<br>
			<form action="AddPergunta.php" method="post">

				<label for="pergunta"><h3><b>Título</b></h3></label>
				<input id="pergunta" type="text" name="pergunta" class="form-control" style="margin-bottom: 2%; background-color: #F7F7F7" placeholder="">
				<hr>
				<h3><b>Descrição</b></h3>
				<div class="btn-group" id="editor-group" role="group" style="width: 100%; background-color: #3aafa9;">
					<button data-val="bold" type="button" class="btn btn-secondary"><i class="fas fa-bold"></i></button>
				  	<button data-val="italic" type="button" class="btn btn-secondary"><i class="fas fa-italic"></i></button>
				  	<button data-val="quote" type="button" class="btn btn-secondary"><i class="fas fa-quote-right"></i></button>
				  	<button data-val="ul" type="button" class="btn btn-secondary"><i class="fas fa-list"></i></button>
				</div>

				<textarea  name="descricao" id="text" style="width: 50%;"></textarea>
				<?php echo "<input type='hidden' name='usuario_id' value=".$_SESSION['usuario_id'].">"; ?>
				<input type="submit" name="btnPergunta" class="btn btn-lg-primary btn-success btn-block">
			</form>
		<?php } else {
			echo "Você precisa estar logado para fazer uma pergunta";
		} ?>	
		</div>
	</div>
	

	</div>
	</div>

	<script type="text/javascript">
		
		var editor = document.getElementById('text');
		var string = grabed_text();

	    $("#text").each(function (i) {
	        editor = CodeMirror.fromTextArea(this, {
	            mode: "text/html",
			    lineWrapping: true,
			    lineNumbers: true,
			    styleActiveLine: true,
			    matchBrackets: true,
			    theme: '3024-day',
	        });

	        $('button').click(function(){
	          
				var val = $(this).data('val');
				var string = editor.getSelection();

				switch(val){
				case 'bold': 
				   editor.replaceSelection('<b>' + string + '</b>');
				break;
				}

				switch(val){
				case 'italic': 
				   editor.replaceSelection('<i>' + string + '</i>');
				break;
	        	}

	        	switch(val){
				case 'quote': 
				   editor.replaceSelection('<blockquote>' + string + '</blockquote>');
				break;
	        	}

	        	switch(val){
				case 'ul': 
				   editor.replaceSelection('<li>' + string + '</li>');
				break;
	        	}
	        });
	    });

		function grabed_text() {
		} 

	</script>

	<?php include "codemirrorconfig.html"; ?>

</body>
</html>