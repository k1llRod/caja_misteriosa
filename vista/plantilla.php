<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cajita misteriosa</title>
  <link rel="stylesheet" href="vista/css/bootstrap.css">
  <link rel="stylesheet" href="vista/css/fonts.css">
  <link rel="stylesheet" href="vista/css/stilos.css">
  <link rel="stylesheet" href="vista/css/sweetalert.css">
  <link rel="stylesheet" media="only screen and (max-width:800px)" href="vista/css/arregloResponsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="form-validation.css" rel="stylesheet">

    <script src="vista/js/sweetalert.min.js"></script>
</head>
<body class="bg-light">
  <div class="container">
    <div class="d-flex flex-right align-items-center p-2 px-md-4 mb-3 bg-white border-bottom">
      
      <nav class="my-2 my-md-0 mr-md-3">
       
      </nav>
      <a class="btn btn-outline-primary" href="backend">Login</a>
  </div>
      
      
          <?php
            $modulos = new enlacesControlador();
            $modulos -> enlacesControladores();

           ?>
      
      
  </div>
  



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>