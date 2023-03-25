<?php
session_start();
include "DBconnection.php";

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}else{
    for($i=0; $i <)
    $stmt = $con->prepare("SELECT * FROM coin LIMIT 3 OFFSET 0");
    $stmt->execute();
    $resultSet = $stmt->get_result(); // get the mysqli result
    $result = $resultSet->fetch_all(MYSQLI_ASSOC);
    foreach ($result as $field) {
    
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://coingecko.p.rapidapi.com/coins/".$field['Id']."?localization=false&tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: coingecko.p.rapidapi.com",
                "X-RapidAPI-Key: acc5ef0728msha8eb6b12a17ba4fp16bac1jsnc1cafc01b039"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
            // $json = json_decode($response, true);
            // echo $json['symbol'];
        }

    }
}

?>