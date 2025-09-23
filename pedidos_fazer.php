<?php
    session_start();
    include 'conecta.php';
    if (!isset($_SESSION['user'])) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
        exit;
    }
    //1 - Buscar os clientes
    $clientes = [];
    $query_clientes = mysqli_query($conn, "SELECT id,nome FROM clientes ORDER BY nome ASC");
    while ($cliente = mysqli_fetch_assoc($query_clientes)) {
        $clientes[] = $cliente;
    }
    //2 - Buscar os salgados
    $salgados = [];
    $query_salgados = mysqli_query($conn, "SELECT id,nome,valor FROM salgados ORDER BY nome ASC");
    while ($salgado = mysqli_fetch_assoc($query_salgados)) {
        $salgados[] = $salgado;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SALGADINHOS DA MAMÃE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                padding: 5px;
                margin: 5px;
            }
            h2 {
                color: gray;
            }
            .main-header { display: flex; justify-content: space-between; align-items: center; padding: 15px 10px; }
            .user-info { display: flex; align-items: center; gap: 8px; color: gray;}
            .username { font-weight: bold; }
            .logout-link { color: red; font-weight: bold; text-decoration: none; }
            .logout-link:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header class="main-header">
            <h2 class="main-title">SALGADINHOS DA MAMÃE</h2>
            <div class="user-info">
                <?php
                    if (!empty($_SESSION['user'])) {
                        $usuario = $_SESSION['user'];
                        echo "<span class='username'>".htmlspecialchars($usuario)." | </span><a class='logout-link' href='sair.php'> SAIR</a>";
                    }
                ?>
            </div>
        </header>
        <hr>
        <nav>
            <?php include 'menu.php'; ?>
        </nav>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h2 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="gray" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
                            </svg>&nbsp;&nbsp;<b>REALIZAR PEDIDO</b></h2>
                        </div>
                        <div class="card-body">
                            <form id="form-pedido" method="POST" action="pedidos_processa.php">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="cliente" class="form-label">CLIENTE</label>
                                        <select id="cliente" name="id_cliente" class="form-select" required>
                                            <option value="">Selecione um cliente...</option>
                                            <?php foreach($clientes as $cliente): ?>
                                                <option value="<?php echo $cliente['id']; ?>"><?php echo htmlspecialchars($cliente['nome']); ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="data_entrega" class="form-label">DATA DE ENTREGA</label>
                                        <input type="date" id="data_entrega" name="data_entrega" class="form-control" required>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="mb-3">ADICIONAR ITENS AO PEDIDO</h5>
                                <div class="row align-items-end g3">
                                    <div class="col-md-6">
                                        <label for="salgado" class="form-label">SALGADO</label>
                                        <select id="salgado" class="form-select">
                                            <option data-valor="0" value="">Selecione um salgado...</option>
                                            <?php foreach($salgados as $salgado): ?>
                                                <option value="<?php echo $salgado['id']; ?>" data-valor="<?php echo $salgado['valor']; ?>"><?php echo htmlspecialchars($salgado['nome']); ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                        <div class="col-md-2">
                                            <label for="quantidade" class="form-label">QUANTIDADE</label>
                                            <input type="number" id="quantidade" class="form-control" min="1" placeholder="Ex: 50">
                                        </div>
                                            <div class="col-mb-3">
                                                <button type="button" id="btn-adicionar" class="btn-primary w-100">ADICIONAR</button>
                                            </div>
                                </div>
                                <hr>
                                <h5 class="mt-4">ITENS DO PEDIDO</5>
                                <table class="table table-script table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SALGADO</th>
                                            <th width="100px">QUANTIDADE</th>
                                            <th width="100px">UNITÁRIO(R$)</th>
                                            <th width="150px">SUBTOTAL(R$)</th>
                                            <th width="80px">AÇÃO</th>
                                            </tr>
                                    </thead>
                                    <tbody id="tabela-itens">
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-end"><strong>TOTAL DO PEDIDO</strong></td>
                                            <td colspan="2"><strong id="total-pedido">R$ 0,00</strong></td>
                                    </tfoot>
                                </table> 
                                <input type="hidden" nome="itens_pedido" id="itens_pedido"> 
                                <div class="d-grid gap-2 mt-4"> 
                                    <button type="submit" class="btn btn-success btn-lg">FINALIZAR PEDIDO</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                //função para atualiar o total do pedido 
                function atualizarTotal(){
                    let total = 0;
                    $('#tabela-itens tr').each(function () {
                        //Pegar o valor do subtotal de cada linha e somar ao total
                        total += parseFloat($(this).data('subtotal'))
                    });
                    //Formatar como moeda brasileira 
                    $('total-pedido').text('R$' + total.toFixed(2).replace('.',','));
                }
                //Acão no botão adicionar 
                $('#btn-adicionar').on('click', function(){
                    let salgadoSelect= $('#salgado');
                    let salgadoId= salgadoSelect.val();
                    let salfadoNome= salgadoSelect.find('option:selected').text().trim();
                    let salgadoValor= parseFloat(salgadoSelect.find('option:selected').data('valor'));
                    let quantidade= parseInt($('#quantidade').val());
                    //validação simples
                    if (!salgadoId) {
                        alert('Por favor selecione um salgado.');
                        return;
                    }
                    if (isNaN(quantidade) || quantidade <= 0){
                        alert('Por favor, informe uma quantidade validade');
                        return;
                    }
                    let subtotal = salgadoValor * quantidade;
                    //Cria uma nova linha da tabela de dados.
                    //Usamos data attributes para guardar os valores que 
                    let novaLinha = `
                    <tr data-id="${salgadoid}" data-quantidades="${quantidade}" data-subtotal="${subtotal}">
                        <td>${salgadoNome}</td>
                        <td>${quantidade}</td>
                        <td>R$ ${salgadoValor.toFixed(2).replace('.',',')}</td>
                        <td>R$ ${subtotal.toFixed(2).replace('.',',')}</td>
                        <td><button type="button" class="btn btn-danger btn-sm btn-remover">REMOVER</button></td>
                    </tr>`;
                    //Adicionar nova linha 
                    $('#tabela-itens').append(novaLinha);
                    //Limpa os campos 
                    $('#salgado').val('');
                    $('#quantidade').val('');
                    //Atualizar o valor total 
                    atualizarTotal();
                });
                    //Ação para o botão remover
                    $('#tabela-itens').on('click','btn-remover', function() {
                        //Remove a linha pai
                        $(this).closest('tr').remove();
                        //Atualiza o total
                        atualizarTotal();
                    });
                    //Ação para submeter o formulario 
                    $('#form-pedido').on('subimit', function (event) {
                        //Verificar se há pelo menos um item pedido
                        if ($('#tabela-itens tr').length === 0){
                            alert('Você precisa adicionar pelo menos um item, antes de finalizar o pedido!');
                            event.preventDefaul(); // impede o envio do formulário 
                            return;
                        }
                        //Coletar os dados das linhas da tabela 
                        let itens = [];
                        $('#tabela-itens tr').each(function(){
                            let item = {
                                id_salgado: $(this).data(id),
                                quantidade: $(this).data('quantidade'),
                                subtotal: $(this).data('subtotal')
                            };
                            itens.push(item);
                        });
                        //Colocar os dados coletados em um Json
                        $('#itens_pedido').val(JSON.stringfy(itens));
                    })
            });
        </script>
    </body>
</html>