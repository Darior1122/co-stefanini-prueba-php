<?php

header("Content-Type:application/json");


  $c1 = $_GET['c1'];
  $c2 = $_GET['c2'];
      if(isset($_GET['c1']) && !empty($_GET['c1']) && isset($_GET['c2']) && !empty($_GET['c2']) )
      {
        $suma = $c1 + $c2;
        deliver_response(200, "El resultado es: $suma", $suma);
      }
      else
      {
        deliver_response(204, "Digite un valor");
      }


      function deliver_response($status, $status_message, $data)
      {
        header("HTTP/1.1 $status $status_message");
        $response['status'] = $status;
        $response['status_message'] = $status_message;
        $response['data'] = $data;

        $json_response = json_encode($response);
        echo $json_response;
      }
 ?>
