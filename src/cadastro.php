<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Perfil Paciente</title>
    <style>
        h1 {
            background-color: antiquewhite;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
    <script type="text/javascript">
        //script Mascara CPF e CEP
        function formatarMascara(src, mask) {
            let field = src.value.length;
            let exit = mask.substring(0, 1);
            let text = mask.substring(field);
            if (text.substring(0, 1) != exit) {
                src.value += text.substring(0, 1);
            }
        }
    </script>
</head>

<body>
    <section>
        <div class="overflow-scroll p-5">
            <h1>Cadastro de Novo Usuário</h1>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nome</label>
                        <input type="name" class="form-control" id="inputName" placeholder="Nome" required>
                        <div class="invalid-feedback">
                            Insira um nove
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCpf">CPF</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="CPF" required onkeypress="formatarMascara(this,'###.###.###-##')" maxlength="14">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Senha</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Senha" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Rua" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control">
                            <option selected>Selecionar...</option>
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option>Ceará</option>
                            <option>Espírito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraná</option>
                            <option>Pernanbuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio Grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option>
                            <option>Distrito Federal </option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">CEP</label>
                        <input type="text" class="form-control" id="inputZip" required onkeypress="formatarMascara(this,'##.###-##')" maxlength="10">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="paciente">
                        <label class="form-check-label" for="gridCheck">
                            Paciente
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="funcionario">
                        <label class="form-check-label" for="gridCheck">
                            Funcionario
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </section>
</body>

<?php include('footer.php'); ?>

<!--Script Validação Campos-->
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</html>