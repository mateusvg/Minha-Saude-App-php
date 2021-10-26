<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Procurar Bula</title>

</head>
<?php include('banco/conexao.php'); ?>

<?php include('menu.php'); ?>

<?php
$result = mysqli_query($conn, "SELECT * FROM medicamentos");
?>

<body>


    <h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Procurar Bula</h1>

        <form class="form-inline my-2 my-lg-0 d-flex justify-content-center" method="POST" onclick="<?php curl_init() ?>" action="">
            <img src="img/lupa.png" class="img-fluid m-3" alt="Responsive image" width="20px">
            <input class="form-control mr-sm-2" type="search" placeholder="Nome Medicamento" name="nome_bula" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
    </div>

    <div class="d-flex justify-content-center m-3 mb-2">
        <?php
        $nome = $_POST['nome_bula'] ?? null;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://bula.vercel.app/pesquisar?nome=$nome&pagina=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        //echo $response;

        //tratamento do string recebido na requisição e transformando em objeto de PHP
        $json = json_decode($response);
        //print_r($response);
        echo "<br> Numero do registro: ";
        //print_r imprime o objeto convertido
        print_r($json->content[0]->numeroRegistro);
        echo "<br> Nome do Produto: ";
        print_r($json->content[0]->nomeProduto);
        echo "<br> Razão Social: ";
        print_r($json->content[0]->razaoSocial);
        echo "<br> CNPJ da empresa: ";
        print_r($json->content[0]->cnpj);
        echo "<br> ID: ";
        print_r($json->content[0]->idProduto);
        echo "<br> Numero Processo: ";
        $numeroProcesso = $json->content[0]->numProcesso;
        echo $numeroProcesso;
        ?>

        <?php
        //segunda requisição para buscar a bula
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://bula.vercel.app/medicamento/$numeroProcesso",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $responseProcesso = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        //echo '<br>' . $responseProcesso;
        //tratamento do string recebido na requisição e transformando em objeto de PHP
        $json2 = json_decode($responseProcesso);
        echo "<br> Nome Comercial: ";
        //print_r imprime o objeto convertido
        @print_r($json2->nomeComercial);
        //I do not recommend it, but if you just don't want to see this warnings then you can use an "Error Control Operator". Just add "@" before your expression like:
        echo "<br> Principio Ativo: ";
        @print_r($json2->principioAtivo);

        echo "<br> Medicamento referência: ";
        @print_r($json2->medicamentoReferencia);

        echo "<br> Categoria: ";
        @print_r($json2->categoriaRegulatoria);

        echo "<br> ATC: ";
        @print_r($json2->atc);

        echo "<br> Embalagem Primária: ";
        @print_r($json2->apresentacoes[0]->embalagemPrimaria->tipo);

        echo "<br> Embalagem Secundaria: ";
        @print_r($json2->apresentacoes[0]->embalagemSecundaria->tipo);

        echo "<br> Fabricante: ";
        $json3 = ($json2->apresentacoes[0]->fabricantesNacionais);
        //echo print_r($json3);
        foreach ($json3 as $obj) {
            echo @print_r($obj->fabricante);
        }



        ?>


    </div>
</body>

<?php include('footer.php'); ?>

</html>