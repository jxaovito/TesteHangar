<?php

include_once './conn.php';

$data_request = $_REQUEST;

 $sql = "SELECT COUNT(order_id) AS lista_orders FROM orders";
 $result = $pdo->prepare($sql);
 $result->execute();
 $rows = $result->fetch(PDO::FETCH_ASSOC);

$query_orders = "SELECT order_id, order_user_id, order_total, order_date FROM orders ORDER BY order_id ASC";
$result_orders = $pdo->prepare($query_orders);
$result_orders->execute();

while($row_orders = $result_orders->fetch(PDO::FETCH_ASSOC)){
    extract($row_orders);
    $registro = [];
    $registro[] = $order_id;
    $registro[] = $order_user_id;
    $registro[] = $order_total;
    $registro[] = $order_date;
    $dados[] = $registro;
};

$resultado = [
    // "draw" => intval($data_request['draw']), // cada registro recebe um número como parâmetro
    "recordsTotal" => intval($rows['lista_orders']), // qntd de registros
    "data" => $dados

];

echo json_encode($resultado); // retorna os dados em forma de objeto
?>