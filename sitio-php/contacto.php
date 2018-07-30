<!DOCTYPE html>
<html lang="es">

<head>
  <title>Contacto - M A R A T Ó N</title>
  <meta name="description" content="¿Te gusto este sitio? Déjanos tus comentarios y visita nuestras redes sociales.">
  <?php require_once './php/meta_tags.php'; ?>
</head>

<body>
  <?php require_once './php/navbar.php'; ?>
  <header class="HeroImage" style="
        --bg-url: url(../img/header-contact.jpg);
        --bg-attach: fixed;
        --bg-size: cover;
        --bg-x: center;
        --bg-y: center;
      ">
    <div>
      <h2>
        <span>¿Te gusto este sitio?</span>
        <span>Dejános tus comentarios</span>
      </h2>
    </div>
  </header>
  <main>
    <div class="container">
      <form class="row" method="post">
        <div class="input-field col s12 center">
          <legend class="flow-text">
            Contáctanos
          </legend>
        </div>
        <div class="input-field col s10 offset-s1 l8 offset-l2">
          <input type="text" id="nombre" name="nombre" class="validate" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s10 offset-s1 l8 offset-l2">
          <input type="email" id="email" name="email" class="validate" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s10 offset-s1 l8 offset-l2">
          <input id="asunto" name="asunto" type="text" class="validate">
          <label for="asunto">Asunto</label>
        </div>
        <div class="input-field col s10 offset-s1 l8 offset-l2">
          <div class="row center">
            <p class="col s6">
              <label>
                <input name="genero" type="radio" class="with-gap" checked />
                <span>Masculino</span>
              </label>
            </p>
            <p class="col s6">
              <label>
                <input name="genero" type="radio" class="with-gap" checked />
                <span>Femenino</span>
              </label>
            </p>
          </div>
        </div>
        <div class="input-field col s10 offset-s1 l8 offset-l2">
          <textarea name="comentarios" id="comentarios" cols="30" rows="10" class="validate  materialize-textarea"></textarea>
          <label for="comentarios">Comentarios</label>
        </div>
        <div class="input-field col s12 center">
          <button class="btn waves-effect waves-light" type="submit" name="send_form">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>
        <?php
          if ( isset( $_POST['send_form'] ) ) {
            $name = $_POST['nombre'];
            $email = $_POST['email'];
            $subject = $_POST['asunto'];
            $comments = $_POST['comentarios'];

            //$send_mail = mail($email, $subject, $comments);
            $send_mail = true;

            if ($send_mail) {
              $message = 'Muchas Gracias hemos recibido tu mensaje';
              echo '
                <div class="col s10 offset-s1 l8 offset-l2 center card-panel green white-text form-message">'.$message.'</div>
              ';
            } else {
              echo '
                <div class="col s10 offset-s1 l8 offset-l2 center card-panel red white-text form-message">
                  Ocurrió un error al enviar los datos, intenta nuevamente
                </div>
              ';
            }
          }
        ?>
      </form>
    </div>
  </main>
  <?php
    require_once './php/footer.php';
    if (isset($send_mail)) {
      echo '<script>
                  M.toast({html: "<span>'.$message.'</span>"})
                </script>';
    }
  ?>
</body>

</html>
