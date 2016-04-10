<!doctype html>
<html ng-app="cliente">
<head>
    <title>Clientes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
    <link href='/css/bootstrap-globo.min.css' rel="stylesheet">
    <link href='/css/bootstrap-responsive.min.css' rel="stylesheet">
</head>
<script>
    angular.module('cliente',[])
        .controller('clienteController',getJsonCli);

    function getJsonCli($scope,$http) {

        var req = {
            url:'http://localhost:8000/listaCli',
            method:'GET'
        }

        $http(req)
            .success(function(data) {
                console.log(data);
                $scope.Clientes = data
            })
            .error(function(err){
                console.log('erro:',err);
            });
    };

    getJsonCli.$inject = ['$scope','$http'];
</script>
<body ng-app="cliente">
    <div class="jumbotron">

        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="#">Controle Financeiro</a>
                    <ul class="nav">
                        <li class="active"><a href="#">Início</a></li>
                        <li><a href="#">ITEM1</a></li>
                        <li><a href="#">ITEM2</a></li>
                        <li><a href="#">ITEM3</a></li>
                        <li><a href="#">ITEM4</a></li>
                        <li><a href="#">ITEM5</a></li>

                    </ul>
                </div>
            </div>
        </div>


        <!-- FORM CADASTRO -->
        <div class="container" id="main">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">cadastrar cliente</h2>
                </div>
                <div class="panel-body"  style="padding-left: 3%">
                    <form>
                        <div class="row">

                            <div class="form-group col-md-8">
                                <label>Nome:</label>
                                <input type="text" name="name" id="nome" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Cpf:</label>
                                <input type="text" name="cpf" id="cpf" class="form-control">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label>Rua:</label>
                                <input type="text" name="rua" id="rua" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Bairro:</label>
                                <input type="text" name="bairro" id="bairro" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Cidade:</label>
                                <input type="text" name="cidade" id="cidade" class="form-control">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Celular</label>
                                <input type="text" name="celular" id="celular" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Fixo</label>
                                <input type="text" name="fixo" id="fixo" class="form-control">
                            </div>

                        </div>

                        </br>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FIM FORM CADASTRO -->

        <div class="container">
            <div ng-controller="clienteController" class="panel panel-default">
                <div class="panel-body">
                    <table class='table'>
                        <tr>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Cidade</th>
                            <th>Email</th>
                            <th>Bairro</th>

                        </tr>
                        <tr ng-repeat="cliente in Clientes">
                            <td>{{ cliente.nome }}</td>
                            <td>{{ cliente.cpf }}</td>
                            <td>{{ cliente.cidade.nome }}</td>
                            <td>{{ cliente.contato.email }}</td>
                            <td>{{ cliente.endereco.bairro }}</td>
                            <td>
                                <a>
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>