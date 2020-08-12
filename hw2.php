<?php

$html = '
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Check Buttons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
 <header style="height:150px; weight: 20px; background-color: white"> <p align="center" style="color:#ff0099; font-size:30px"; > SOLAR POWER STORE <button style="
  border-radius: 26px;
  background-color: #FF8C00" >
        Login</button>
        <button style="
  border-radius: 26px;
  background-color: #FF8C00" >
            Register</button>
    </header>';

$html .= '<body>

<form action="http://localhost:9000/hwformsend.php" method="POST">
<input type = " number" min="1" max="100" name ="number" placeholder="Put the 1 to 100"> 
<input type = "Submit" value = "Send">
</form>
</body>';

echo $html;


$arr = [
    [
        'Type' => "Module",
        'Name' => "Jinko Solar",
        'Power' => "400W",
        'Price' => "250$",
        'Description' => "Mono"
    ],
    [
        'Type' => "Module",
        'Name' => "Trina Solar",
        'Power' => "445W",
        'Price' => "290$",
        'Description' => "Mono Half cell"
    ],
    [
        'Type' => "Inverter",
        'Name' => "Huawei SUN2000-150KTL",
        'Power' => "150kW",
        'Price' => "6000$",
        'Description' => "Inverter decetral"
    ]


];

buildHTMLTable($arr);

function buildHTMLTable(array $tables): void
{
    $html2 = '<table width="100%" cellspacing="0" cellpadding="4" border="1">';
    $html2 .= '<thead>';
    $html2 .= '<th>Type</th>';
    $html2 .= '<th>Name</th>';
    $html2 .= '<th>Power</th>';
    $html2 .= '<th>Price</th>';
    $html2 .= '<th>Desctiption</th>';
    $html2 .= '</thead>';
    $html2 .= '<tbody>';

    foreach ($tables as $table) {
        $html2 .= "<tr><td>{$table['Type']}</td>.<td>{$table['Name']}</td>.<td>{$table['Power']}</td><td>{$table['Price']}</td><td>{$table['Description']}</td></tr>";
    }

    $html2 .= '</tbody>';
    $html2 .= '</html>';

    echo $html2;
}
