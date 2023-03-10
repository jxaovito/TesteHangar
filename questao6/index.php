<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de pedidos</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    </head>
<body>
    <table id="orders" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id do pedido</th>
                <th>Id do usuário</th>
                <th>Total do pedido</th>
                <th>Data do pedido</th>
            </tr>
        </thead>
</table>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>

    
<script>
    $(document).ready(function($){
        $('#orders').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "resposta_6.php"
        });
    });
</script>
</body>
</html>