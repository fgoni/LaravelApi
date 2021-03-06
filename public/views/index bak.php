<!-- app/views/index.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular Comment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- load fontawesome -->
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }

        .comment {
            padding-bottom: 20px;
        }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="js/controllers/marcaController.js"></script>
    <script src="js/controllers/programaController.js"></script>
    <script src="js/controllers/personajeController.js"></script>

    <!-- load our controller -->
    <script src="js/services/marcaService.js"></script>
    <script src="js/services/personajeService.js"></script>
    <script src="js/services/programaService.js"></script>
    <!-- load our service -->
    <script src="js/app.js"></script>
    <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="laravelApiApp">
<div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Laravel API with AngularJS Frontend</h2>
    </div>
    <div ng-controller="marcaController">
        <!-- NEW COMMENT FORM =============================================== -->
        <form ng-submit="submitMarca()"> <!-- ng-submit will disable the default form action and use our function -->

            <!-- AUTHOR -->
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="marca" ng-model="marcaData.name"
                       placeholder="Nombre de la marca">
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>

        <!-- LOADING ICON =============================================== -->
        <!-- show loading icon if the loading variable is set to true -->
        <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

        <!-- THE COMMENTS =============================================== -->
        <!-- hide these comments if the loading variable is true -->
        <div class="comment" ng-hide="loading" ng-repeat="marca in marcas">
            <h3>{{ marca.name }} #{{ marca.id }}
            </h3>

            <p><a href="#" ng-click="deleteMarca(marca.id)" class="text-muted">Delete</a></p>
        </div>

    </div>
    <div ng-controller="programaController">
        <!-- NEW COMMENT FORM =============================================== -->
        <form ng-submit="submitPrograma()"> <!-- ng-submit will disable the default form action and use our function -->

            <!-- AUTHOR -->
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="programa" ng-model="programaData.name"
                       placeholder="Nombre del Programa">
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>

        <!-- LOADING ICON =============================================== -->
        <!-- show loading icon if the loading variable is set to true -->
        <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

        <!-- THE COMMENTS =============================================== -->
        <!-- hide these comments if the loading variable is true -->
        <div class="comment" ng-hide="loading" ng-repeat="programa in programas">
            <h3>{{ programa.name }} #{{ programa.id }}
            </h3>

            <p><a href="#" ng-click="deletePrograma(programa.id)" class="text-muted">Delete</a></p>
        </div>
    </div>
    <div ng-controller="personajeController">

        <!-- NEW COMMENT FORM =============================================== -->
        <form ng-submit="submitPersonaje()">
            <!-- ng-submit will disable the default form action and use our function -->

            <!-- AUTHOR -->
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="personaje" ng-model="personajeData.name"
                       placeholder="Nombre del Personaje">
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>

        <!-- LOADING ICON =============================================== -->
        <!-- show loading icon if the loading variable is set to true -->
        <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

        <!-- THE COMMENTS =============================================== -->
        <!-- hide these comments if the loading variable is true -->
        <div class="comment" ng-hide="loading" ng-repeat="personaje in personajes">
            <h3>{{ personaje.name }} #{{ personaje.id }}
            </h3>

            <p><a href="#" ng-click="deletePersonaje(personaje.id)" class="text-muted">Delete</a></p>
        </div>
    </div>
</div>
</body>
</html>