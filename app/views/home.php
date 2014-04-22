<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Postulaciones Unidad de Modernización y Gobierno Digital</title>

        <!-- Bootstrap -->
        <link href="<?=asset('bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h1>Postulaciones</h1>
            
            <p>Para enviar tu postulacion deberas hacerlo a traves de nuestra API de postulaciones.</p>
            
            <p>Deberas enviar un request al siguiente endpoint:</p>
            
            <pre>POST <?=url('api/v1/postulaciones')?></pre>
            
            <p>Los siguientes parametros son requeridos:</p>
            
            <table class="table table-bordered">
                <tr>
                    <th>Parametro</th>
                    <th>Descripción</th>
                </tr>
                <tr>
                    <td>nombre</td>
                    <td>Nombre del postulante.</td>
                </tr>
                <tr>
                    <td>apellidos</td>
                    <td>Apellidos del postulante.</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>Correo electrónico del postulante.</td>
                </tr>
                <tr>
                    <td>repo_url</td>
                    <td>URL a un repositorio de proyectos donde haya trabajado el postulante. Puede ser un link a GitHub o a algun portafolio del postulante.</td>
                </tr>
                <tr>
                    <td>linkedin_url</td>
                    <td>URL al LinkedIn del postulante. Puede ser tambien una URL hacia un documento que contenga su Curriculum Vitae.</td>
                </tr>
                <tr>
                    <td>respuesta_desafio</td>
                    <td>Respuesta textual al siguiente desafío.
                        <br />
                        <br />
                        "Una empresa hace una rifa, deseo solicitarle al director de la rifa el nombre del ganador para publicarlo. Tengo que hacerlo a traves de un mensaje escrito que se envia y vuelve a traves de Juancho. Que debería enviar ademas de la pregunta, para que Juancho no pueda ver el nombre del ganador de la rifa antes de tiempo."
                    </td>
                </tr>
            </table>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?=asset('bower_components/jquery/dist/jquery.min.js')?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?=asset('bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    </body>
</html>