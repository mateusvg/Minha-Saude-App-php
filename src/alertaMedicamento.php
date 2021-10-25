<?php include_once 'banco/conexao.php'; ?>
<?php include('menu.php'); ?>

<?php 
function select_expired() {
    $current_date = date('d-m-Y'); 
    $result = mysqli_query($conn, "SELECT * FROM alerta WHERE medicamento_date = '$current_date'" );

    } 
?>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Alerta Medicamentos</h1>
        <div class="d-flex-col p-3 m-2">
            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center" method="POST" action="cadmedicamentoSearch.php">
                <img src="img/lupa.png" class="img-fluid m-3" alt="Responsive image" width="20px">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar" name="procurar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
            </form>
        </div>
        <div class="table-responsive p-1">
            <table class="table">

                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome Medicamento</th>
                    <th scope="col">Horário Ingestão</th>
                    <th scope="col">Dias faltantes</th>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <tr scope="row">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["medName"]; ?></td>
                        <td><?php echo $row["labName"]; ?></td>
                        <td><?php echo $row["medType"]; ?></td>
                        <td>R$ <?php echo $row["price"]; ?></td>

                        <!-- <td><?php //echo "<a href='delete.php?id=". $row['id']. "'>DELETE</a>"; 
                                    ?></td> -->
                        <td>
                            <button type="button" class="btn btn-outline-danger">
                                <?php echo "<a href='cadmedicamentoDelete.php?id=" . $row['id'] . "'>Deletar</a>"; ?>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-warning">
                                <?php echo "<a href='cadmedicamentoUpdate.php?id=" . $row['id'] . "'>Atualizar</a>"; ?>
                            </button>
                        </td>

                    </tr>

                <?php
                    $i++;
                }
                ?>

            </table>
        </div>
    <?php
    } else {
        echo "Não foram encontrados resultados";
    }
    ?>

</body>

<?php include('footer.php'); ?>

</html>