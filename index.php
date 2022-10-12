<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foro de comentarios UNIVER</title>
        <link href="estilos.css" rel="stylesheet" type="text/css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<div class="text-center">	
			<h1>Foro de Comentarios UNIVER</h1>
			<p>Coloca tu nombre, el tema y el comentario, Posteriormente da clic en enviar</p>
	</div>
	<div class="row">	
		<div class="col-6">
			<form id="foro"> 
				  <div class="mb-3">
    				<label for="nombre" class="form-label">Nombre</label>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" aria-describedby="nombre"/>
					<div id="nombre" class="form-text">Anota tu nombre completo</div>
				  </div>
				  <div class="mb-3">
					<label for="tema" class="form-label" >Tema</label>
					<input type="text" name="tema" id="tema" placeholder="Tema" class="form-control" aria-describedby="Teme" />
					<div id="tema" class="form-text">Anota el tema del foro</div>
				  </div>
				  <div class="mb-3">
					
					<textarea name="comentario"  id="comentario" placeholder="Comentario" cols="60"rows="10"></textarea> 
					<div id="tema" class="form-text">Deja tu comentario</div>
				  </div>
					<input type="submit" name="" value="Enviar" class="btn btn-primary">
			</form>
		</div>
		<div class="col-6" id="comentarios">
		</div>
	</div>
	</div><!--conteiner-->
	<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
	<script>
		  $(document).ready(function() {
		  		 $.ajax({
		  		 	url:"apiforo.php",
                    type: "GET",
                    dataType: "JSON",
                    cache: false,
                    contentType: false,
                    processData: false,
                         success: function (data) {
                                    //alert('Auí');
                                    $(data).each(function(i, v){
                                        //mensaje=v.message;
                                        //console.log(v);
                                        document.getElementById("comentarios").innerHTML+="<h5>Nombre: "+v.nombre+"</h5>";
                                        document.getElementById("comentarios").innerHTML+="<h6>Tema: "+v.tema+"</h6>";
                                        document.getElementById("comentarios").innerHTML+="<h6>Comentario: "+v.comentario+"</h6>";
                                         });
                                },
                                error : function(jqXHR, status, error) {
                                },
		  		 });
		  		 $("#foro").on("submit", function(e){
		  		e.preventDefault();
		  		var postData = new FormData();
		  		postData.append('nombre',$("#nombre").val());
		  		postData.append('tema',$("#tema").val());
		  		postData.append('comentario',$("#comentario").val());
		  		url= "apiforo.php";
		  		  	$.ajax({
               url: url,
               type: "POST",
               dataType: "HTML",
               data: postData,
               cache: false,
               contentType: false,
                processData: false
                   })
                   .done(function(res){
                   alert("Comentario ingresado");
                  window.location.reload();
                   	//console.log("hola");
                       ///console.log(res);
           });
		  });

		  });

	</script>
</body> 
</html>