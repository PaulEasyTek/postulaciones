<html>
    <body>
        <form method="post" action="<?=url('api/v1/postulaciones')?>">
            <label>Nombre</label>
            <input type="text" name="nombre" />
            <br/>
            <label>Apellidos</label>
            <input type="text" name="apellidos" />
            <br/>
            <label>Email</label>
            <input type="text" name="email" />
            <br/>
            <label>repo_url</label>
            <input type="text" name="repo_url" />
            <br/>
            <label>linkedin_url</label>
            <input type="text" name="linkedin_url" />
            <br/>
            <label>respuesta_desafio</label>
            <input type="text" name="respuesta_desafio" />
            <br/>
            <button>Enviar</button>
        </form>
    </body>
</html>