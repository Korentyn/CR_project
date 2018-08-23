<?php



$opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept: application/json\r\n" .
            "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImMwNmY1YTg0LWQxZTctNDcyMi1iN2RkLWZlYzhhNjdmM2Q4ZCIsImlhdCI6MTUzNDk1NzYwMiwic3ViIjoiZGV2ZWxvcGVyL2QxMjdlNTZhLTg3YTAtZDhiMS0xOTI1LWUwNzgxOTFlMDg3YSIsInNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyI5MC41NS4yMjEuNTYiXSwidHlwZSI6ImNsaWVudCJ9XX0.QqkTc0n14Sqi_9-D4a7POIvqXNi19KS4wkPfu4t-nM3O7v6W393u_dEOPvLkbTx3o_M0mqVkFPSFstlfA3jF4Q\r\n"

    )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://api.clashroyale.com/v1/players/%2382QQ2CQR9', false, $context);
$json = json_decode($file);

var_dump($file);
?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Clash Royal API</title>
</head>
<body>
<?php
////echo $json->{'name'};
//foreach ($json as $key => $value){
//    echo "<div> </div>";
//}

?>
<div class="container">
    <h2>Profil</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        </thead>

        <tbody>
<?php

foreach ($json as $key => $value) {
for($i = 0; $i < sizeof($key); $i++) {
    echo "
        <tr>
            <td>" . $json[$i] . "</td>
            <td>" . $json[$i][$i] . "</td>
        </tr>

        ";
}
}

//for($i = 0; $i < sizeof($key); $i++) {
//    echo "
//        <tr>
//            <td>" . $keys[$i] . "</td>
//            <td>" . $keys[$i]->$value . "</td>
//        </tr>
//
//        ";
//
//
//    foreach($file[$keys[$i]] as $key => $value) {
//        echo $key . " : " . $value . "<br>";
//    }
//    echo "}<br>";
//}

?>
        </tbody>
    </table>
</div>

</body>
</html>