<!doctype html>
<html ng-app="cliente">
<head>
    <title>Clientes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.js"></script>
    <script src="/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <meta name="viewport" content="width=device-width">
    <link href='/css/bootstrap-responsive.min.css' rel="stylesheet">

    <link rel="stylesheet" href="css/demo.css">

    <link rel="stylesheet" href="css/mycss.css">

    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body ng-app="cliente">
    <div class="jumbotron">
        <!-- MENU -->
        <div class="container">
            <div class="masthead">
                <h3 class="text-muted">Controle Financeiro</h3>
                <nav>
                    <ul class="nav nav-justified">
                        <li class="active"><a href="#">Início</a></li>
                        <li><a href="/cliente">Clientes</a></li>
                        <li><a href="#">Movimentação</a></li>
                        <li><a href="#">Relatórios</a></li>
                        <li><a href="#">Gráficos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- FIM MENU -->


        @yield('content')


        <!-- FOOTER -->
        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>billsTo<span>Receive</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">billsToReceive &copy; 2015</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Endereco do cliente</span> Cidade, País</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+55 74 988577117</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">contato@hc3.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Sobre a empresa</span>
                    Uma breve descrição sobre a empresa .
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>
        <!-- FIM FOOTER -->
    </div>
</body>
</html>