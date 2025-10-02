<?php 

$eleccion = $_GET['marca'] ;
$seleccion = $_GET['seleccion'];


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
    "categoria" => "camioneta",
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
    "categoria" => "camioneta",
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

$fordRaptor=(object)[
    "titulo"=>"ford Raptor",
    "categoria" => "camioneta",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_9527866fefb84e3e840b1fd28e2a23c0.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$fordFocus=(object)[
    "titulo"=>"ford Focus",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.ford.es/content/dam/guxeu/rhd/central/cars/2021-focus/dse/column-cards/ford-focus-eu-Column_Card_Focus-ST-Line-X-3x2-1000x667-front-view.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

 


//Lista por marca

$listaPeugeot=[$peugeot208,$peugeot2008,$peugeot308];

$listaVolskgawen=[$VolkswagenPolo,$VolkswagenAmarok,$volkswagenTrend];

$listaFord=[$fordFiesta,$fordRaptor,$fordFocus];

//Lista por Categoria "autos"

$ListaAutosPeugeot=[$peugeot208,$peugeot308];

$ListaAutosVolkswagen=[$VolkswagenPolo,$volkswagenTrend];

$ListaAutosFord=[$fordFiesta,$fordFocus];

//Lista por Categoria "Autos"

$listaCategoriaAutos=[$ListaAutosFord,$ListaAutosPeugeot,$ListaAutosVolkswagen];

//Lista por Categoria "Camioneta"

$listaCamionetas=[$fordRaptor,$VolkswagenAmarok,$peugeot2008];
//Listas completas

$ListaCompleta=[$listaPeugeot,$listaVolskgawen,$listaFord];

?>