<?php 
    include_once("./utils/data.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../parcial-1-p2-acn2bv-Yedro-Zabala/estilos.css" rel="stylesheet" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>  Autos </title>


</head>

<body >
    
    
    <?php if($tema=="oscuro"){?>

        <style>   
        body {
            background-color: midnightblue;
            color: lavender;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        header {
            background-color: darkslateblue;
            color: lavenderblush;
            border-bottom: 1px solid mediumslateblue;
        }
        
        main {
            background-color: midnightblue;
        }
        
        .card {
            background-color: darkslategray;
            color: lightcyan;
            border: 1px solid steelblue;
            box-shadow: 0 4px 8px rgba(135, 206, 250, 0.1);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(135, 206, 250, 0.2);
        }
        
        .card-title {
            color: lightsteelblue;
        }
        
        .card-text {
            color: lightcyan;
        }
        
        .formulario {
            background-color: darkslateblue;
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        
        .form-label {
            color: lavender;
        }
        
        .form-control, .form-select {
            background-color: darkslategray;
            color: lightcyan;
            border: 1px solid steelblue;
        }
        
        .form-control:focus, .form-select:focus {
            background-color: slategray;
            color: white;
            box-shadow: 0 0 0 0.2rem rgba(100, 149, 237, 0.25);
        }
        
        .form-check-label {
            color: lavender;
        }
        
        .btn-primary {
            background-color: royalblue;
            border-color: royalblue;
        }
        
        .btn-primary:hover {
            background-color: dodgerblue;
        }
        
        footer {
            background-color: darkslateblue;
            color: lavender;
            padding: 3px;
        }
        
        .color-box {
            width: 100%;
            height: 80px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .color-name {
            text-align: center;
        }
        
        .color-light {
            color: black;
        }
        
        .color-dark {
            color: white;
        }
        
        .color-hex {
            text-align: center;
            font-family: monospace;
        }
        
        .section-title {
            color: lightsteelblue;
            border-bottom: 1px solid steelblue;
        }
        
    </style>
    
    <?php }?>
            
        <header>
                
                <h1>Catálogo de Autos</h1>

        </header>  
            
        <main>
        

 
        <section class="formulario">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca personalizada</label>
                    <input type="text" name="marca" id="marca" class="form-control" placeholder="Ej peugeot,volkswagen,etc">
                </div>

                <div class="mb-3">
                    <label for="seleccion" class="form-label">Categoria</label>
                    <select name="seleccion" id="seleccion" class="form-select">
                        <option value="sinSeleccion">-selecciona-</option>
                        <option value="camioneta">camioneta</option>
                        <option value="automovil">automovil</option>
                    </select>
                </div>

                <div class="mb-3">
                   
                    <h5>Tema</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tema" id="tema" value="claro">
                        <label class="form-check-label" for="tema">Claro</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tema" id="tema" value="oscuro">
                        <label class="form-check-label" for="tema">Oscuro</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">filtrar</button>
            </form>

        </section>
        <section class="tarjetas">
            
        </section>

    </main>

                    

    <footer class="text-center py-3">
         <p class="mb-0">Encuentra tu vehículo y vive la experiencia de conducir</p>
    </footer>
        
        
        </body>
</html>