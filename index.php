<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Word Counter</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- local style -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
    <div class="container" >

        <p>  Version:  1.0  </p>
        <p> Developer:  Jesus Erwin Suarez  </p>
        <p>  Developed using:  Html, Bootstrap and AngularJs</em></p>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Character Counter</div>
            <div class="panel-body">
                <p>
                    <textarea  ng-model="textArea" ></textarea>
                </p>
            </div>
            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item">Total Characters (<span class="counte-total-words" >{{counterTotalWords() | number : fractionSize }}</span>) </li>
            </ul>
        </div>
    </div>
</div>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!--Angular js-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

<!-- local script -->
<script src="script.js"> </script>
</html>