<!DOCTYPE html><!--Método que incida a utilização do HTML 5 -->
<html lang="br"><!--Tag de inicialização do HTML -->
 <head>
  <title>Login</title>
  <meta charset="UTF-8"><!--Padronização de caracteres -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Tag de redimensionamento-->
  <link rel="stylesheet" href="./css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
 <body>
  <div class="container mt-5">
   <div class="row d-flex justify-content-center">
    <div class="col-md-12">
     <div class="card px-5 py-5" id="form1">
      <div class="forms-inputs mb-4"> <span>Usuário</span> <input autocomplete="off" type="text" required>
     </div>
     <div class="forms-inputs mb-4"> <span>Senha</span> <input autocomplete="off" type="password"></div>
     <div class="mb-3"> <button type="submit" class="btn btn-dark w-100">Login</button> </div>
    </div>
   </div>
  </div>
 </body>
</html>
