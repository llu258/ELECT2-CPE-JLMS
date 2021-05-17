<?php

header("Content-Type:application/json");
if(isset($_GET['order_id'])) && $_GET['order_id']!=""){
    include('servercon.php');
    $order_id = $_GET['order_id'];
    $result = mysqli_query($dbconnect, "SELECT * FROM transactions WHERE order_id = $order_id");

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $amount  = $row['amount'];
        $response_code = $_row['response_code'];
        $response_desc = $_row['response_desc'];

        response($order_id, $amount, $response_code, $response_desc);
        mysqli_close($dbconnect);
    }else{
        response(NULL, NULL, 200, "No record found");
    }else{
        response(NULL, NULL, 400, "Invalid Request");
    }

    function response($order_id,$amount,$response_desc,$response_code){
        $response['order-id'] = $order_id;
        $response['amount'] = $amount;
        $response['response-desc'] = $response_desc;
        $response['order-id'] = $response_code;

        $json_response = json_encode($response);
        echo $json_response;
    }
}
?>