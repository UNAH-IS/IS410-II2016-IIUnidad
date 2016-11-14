<!DOCTYPE HTML>
<html>
 <head>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script>
     $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "ajax-imagen.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
     });
    </script>
 </head>
 <body>
 <form method="post" id="formulario" enctype="multipart/form-data">
    Subir imagen: <input type="file" name="file">
 </form>
  <div id="respuesta"></div>
 </body>
</html>