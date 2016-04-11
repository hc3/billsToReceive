@extends('template.template')

@section('content')
<style>
    .mysqlPaddingForm {
        padding-left: 3%;
        padding-right: 3%;
        padding-top: 3%;
        padding-bottom: 3%;
    }

</style>

<script>

    $(document).ready(function() {
        $('#modalCadCli').hide();
        $('#fechaModal').hide();

        function limpaModals() {
            $('.form-control').val("");
        }

        $('#abreModal').on('click',function() {
            $('#modalCadCli').show('slow');
            $('#fechaModal').show('fast');
        });

        $('#fechaModal').on('click',function() {
            limpaModals();
            $('#modalCadCli').hide('slow');
            $('#fechaModal').hide('fast');
        });

        $('#cadastrarCliente').on('click',function() {
            limpaModals();
        })
    });

</script>


<script>
    angular.module('cliente',[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
        .controller('clienteController',getJsonCli);

    function getJsonCli($scope,$http) {

        var reqCli = {
            url:'http://localhost:8000/listaCli',
            method:'GET'
        }

        var reqCidade = {
            url:'http://localhost:8000/listaCidades',
            method:'GET'
        }

        $http(reqCli)
            .success(function(data) {
                $scope.Clientes = data
            })
            .error(function(err){
                console.log('erro:',err);
            });

        $http(reqCidade)
            .success(function(data){
                $scope.Cidades = data
            })
            .error(function(err){
                console.log('erro:',err);
            });

        $scope.adicionarCliente = function(Cliente) {
            $scope.Clientes.push(angular.copy(Cliente));
        };
        $scope.removeCliente = function(cliente) {
           // $scope.Cliente.splice(cliente);
            console.log(cliente);
        }
    };
    getJsonCli.$inject = ['$scope','$http'];
</script>
    <div class="jumbotron" ng-app="cliente" ng-controller="clienteController">
        <div class="container">
            <div>
                <button class="demo btn btn-prymary btn-large" id="abreModal">Novo</button>
                <button class="demo btn btn-prymary btn-large" id="fechaModal">Fechar</button>
            </div>
        </div>
    <div class="container" id="modalCadCli">
        <div class="panel panel-default mysqlPaddingForm">
            <form>
                <% Cliente %>
                <div class="row">

                    <div class="form-group col-md-8">
                        <label>Nome:</label>
                        <input type="text" class="form-control" ng-model="Cliente.nome" >
                    </div>

                    <div class="form-group col-md-4">
                        <label>Cpf:</label>
                        <input type="number" class="form-control" ng-model="Cliente.cpf">
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-4">
                        <label>Rua:</label>
                        <input type="text" class="form-control" ng-model="Cliente.endereco.rua">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Bairro:</label>
                        <input type="text" name="bairro" id="bairro" class="form-control" ng-model="Cliente.endereco.bairro">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Cidade:</label>
                        <select ng-model="Cliente.cidade" ng-options="cidade.nome for cidade in Cidades" class="form-control">
                            <option value="">Selecione uma cidade</option>
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" ng-model="Cliente.contato.email">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Celular</label>
                        <input type="number" name="celular" id="celular" class="form-control" ng-model="Cliente.contato.celular">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Fixo</label>
                        <input type="number" name="fixo" id="fixo" class="form-control" ng-model="Cliente.contato.fixo">
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button ng-click="adicionarCliente(Cliente)" type="submit" class="btn btn-primary" id="cadastrarCliente">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </br>
        <div class="container">
            <div class="panel panel-default">
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
                            <td><% cliente.nome %></td>
                            <td><% cliente.cpf %></td>
                            <td><% cliente.cidade.nome %></td>
                            <td><% cliente.contato.email %></td>
                            <td><% cliente.endereco.bairro %></td>
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
                                    <span ng-click="removeCliente(cliente)" class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop