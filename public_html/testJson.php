<?php
    include("db.php");
    $query = "SELECT * FROM `DataIoT`";
    $queryGSR = "SELECT GSR_Sensor FROM `DataIoT`";
    $queryTEMP = "SELECT Temp_Sensor FROM `DataIoT`";
    $queryDATE = "SELECT DateRead FROM `DataIoT`";

    $results_data = mysqli_query($conn, $query);

    $results_GSR = mysqli_query($conn, $queryGSR);
    $results_TEMP = mysqli_query($conn, $queryTEMP);
    $results_DATE = mysqli_query($conn, $queryDATE);

    $JSON_ARRAY = array();


    $JSON_ARRAY_GSR = array();
    $JSON_ARRAY_TEMP = array();
    $JSON_ARRAY_DATE = array();
    while($row = mysqli_fetch_assoc($results_data))
    {
        $JSON_ARRAY[] = $row;
    }

    while($row = mysqli_fetch_assoc($results_GSR))
    {
        //echo $row['GSR_Sensor'];
        $JSON_ARRAY_GSR[] = $row['GSR_Sensor'];
    }
    while($row = mysqli_fetch_assoc($results_TEMP))
    {
        $JSON_ARRAY_TEMP[] = $row['Temp_Sensor'];
    }
    while($row = mysqli_fetch_assoc($results_DATE))
    {
        $JSON_ARRAY_DATE[] = $row['DateRead'];
    }

    $r_array = [
        "GSR_Sensor" => array_values( $JSON_ARRAY_GSR ),
        "Temp_Sensor" => array_values($JSON_ARRAY_TEMP),
        "DateRead" => array_values($JSON_ARRAY_DATE)
    ];

    echo json_encode(  $r_array);


    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    echo '<pre>';
    print_r($r_array);
    echo '</pre>';

    

    // Valores con PHP. Estos podrían venir de una base de datos o de cualquier lugar del servidor
$etiquetas = ["Enero", "Febrero", "Marzo", "Abril"];
$datosVentas = [5000, 1500, 8000, 5102];
// Ahora las imprimimos como JSON para pasarlas a AJAX, pero las agrupamos
$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datosVentas,
];

    echo '<pre>';
    print_r($respuesta);
    echo '</pre>';

echo json_encode($respuesta);
?>