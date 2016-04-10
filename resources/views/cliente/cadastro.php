<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <title>Clientes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.js"></script>
    <script src="/js/macgyver.js"></script>
    <script src="/MacGyver-master/src/directives/modal.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
    <link href='/css/bootstrap-globo.min.css' rel="stylesheet">
    <link href='/css/bootstrap-responsive.min.css' rel="stylesheet">
    <link href='/css/macgyver.css' rel="stylesheet">
    <script>
        angular.module("myModule", ["Mac"]);
    </script>
</head>
<body ng-app="myModule">
<mac-modal id="test-modal"  ng-cloak>
    <div class="mac-modal-content" ng-controller="modalController">
        <h1>Just another modal</h1>
    </div>
</mac-modal>
<button mac-modal="test-modal">Show Modal</button>
</body>
</html>