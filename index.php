<?php 

$eleccion = $_GET=["marca"] ?? "";

//Lista  Peugeot

$peugeot208=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.media.stellantis.com/cache/a/d/d/4/5/add452e8f9f21b8c6903d8bbadc40f169a0bac6c.jpeg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];
$peugeot2008=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://cuyomotor.com.ar/wp-content/uploads/2023/05/peugeot-e-2008-2024-002-1140x570.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"

];

$peugeot308=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://resizer.glanacion.com/resizer/v2/peugeot-308-s-gt-con-toda-la-HPIGYVE2PZA6RFDGAYQUTHIUEE.jpg?auth=af9e8a8c1f083ce6907d492942e94878f42b1cd162ab9c0d17386470f64689e3&width=1280&height=854&quality=70&smart=true",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$listaPeugeot=[$peugeot208,$peugeot2008,$peugeot308];

//Lista  Volkswagen

$VolkswagenPolo=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://autoenaccion.com.ar/wp-content/uploads/2024/02/vw-polo-track-argentina-delantera-1.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$VolkswagenAmarok=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://cdn.motor1.com/images/mgl/VzzEOR/s1/vw-amarok-2022.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$volkswagenTrend=(object)[
    "titulo"=>"Volkswagen Trend",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://cdn.motor1.com/images/mgl/LQMmG/s1/oficial-todo-sobre-los-nuevos-volkswagen-gol-trend-y-voyage-2016.webp",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$listaVolskgawen=[$VolkswagenPolo,$VolkswagenAmarok,$volkswagenTrend];

// Lists Ford


$fordFiesta=(object)[
    "titulo"=>"ford Fiesta",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRye3Ssm7dgmG91h3iDRCdz3fbRPHO8MBLEtw&s",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$fordTaunus=(object)[
    "titulo"=>"ford Taunus",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://juntandopartesonline.com/wp-content/uploads/2019/06/ford-taunus-exclusivo-argentina-tc1.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$fordFalcon=(object)[
    "titulo"=>"ford Fiesta",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://upload.wikimedia.org/wikipedia/commons/0/07/Ford-falcon-sprint-1089413.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$listaFord=[$fordFiesta,$fordTaunus,$fordFalcon];


//Listas completas

$ListaCompleta=[$listaPeugeot,$listaVolskgawen,$listaFord];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../parcial-1-p2-acn2bv-Yedro-Zabala/estilos.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>  Autos </title>


</head>
<body>
    <header>
        
        <h1>Catálogo de Autos</h1>

    </header>  
    
    <main>

    <form action="index.php" method="GET">
        <div>
            <label for="marca">Marca personalizada:</label>
            <input type="text" name="marca" id="marca" placeholder="Ej: Toyota, Honda...">
        </div>
        
        <div>
            <label for="seleccion">Selecciona una marca:</label>
            <select name="seleccion" id="seleccion">
                <option value="">-- Elegir marca --</option>
                <option value="volkswagen">Volkswagen</option>
                <option value="peugeot">Peugeot</option>
                <option value="ford">Ford</option>
            </select>
        </div>
        
        <button type="submit">Buscar auto</button>
    </form>


    <?php for($i = 0; $i < count($ListaCompleta); $i++){?>
        
        <?php for($j = 0; $j < count($ListaCompleta); $j++) { ?>
            
            <div class="card" style="width: 18rem;">
                <img src="<?= $ListaCompleta [$i][$j]->imagen ?>" class="card-img-top" alt="<?= $ListaCompleta [$i][$j]->imagen ?>">
                
                <div class="card-body">
                    <h5 class="card-title"><?= $ListaCompleta [$i][$j]->titulo ?></h5>
                    <p class="card-text"><?= $ListaCompleta [$i][$j]->descripcion ?></p>
                    <a href="#" class="btn btn-primary">COTIZAR</a>
                </div>
            </div>
        
        <?php }?>
    
    <?php }?>


    </main>



    <footer></footer>  
</body>
</html>