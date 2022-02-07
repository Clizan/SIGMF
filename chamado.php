<html>
    <head>
        <title>Chamado </title>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Tag de redimensionameto -->
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form name = "chamado" method = "post" action = "">
            <!--Menu -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="chamado.php">Chamados</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatório</a>
                    </li>
                </ul>
            </nav>

            <div class="container p-3 my-3 border">

                <table class="table table-dark">
                    <thead> 
                        <tr>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Incidente</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">RAL</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Setor</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Data</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Informação</td>
                            <td style = "font-family: verdana; font-size: 12px; font-weight: bold;">Ação</td>
                        </tr>
                    </thead>

                        <?php

                            include 'conexao.php';

                            $sql = mysqli_query($conexao, "SELECT * FROM chamado");
                                    
                            while ($linha = mysqli_fetch_array($sql)){

                        ?>        

                    <tbody>				                       
                        <tr>                              
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["incidente"]?></td>
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["ral"]?></td>
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["setor"]?></td> 
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["data"]?></td> 
                            <td style = "font-family: verdana; font-size: 12px;"><?php echo $linha["informacao"]?></td>
                            <td style = "font-family: verdana; font-size: 12px;"><input type = "button" value = "Editar" class="btn btn-info"/>
                            <input type = "button" value = "Aceitar" class="btn btn-warning"/></td>
                        </tr>
                    </tbody>  
    
                    <?php            
                        } 
                    ?>

                </table> 

                <div class="container p-3 my-3	" style = "background: #F0F8FF"><!--Div Rodapé -->		
				    <center>2020 © Todos os direitos reservados. Sistema desenvolvido por <a href="mailto:clizan-ws@hotmail.com"> Clizan Willian.</center>
			    </div>        

            </div>    
        </form>                           
    </body>
</html>