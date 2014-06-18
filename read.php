<!doctype html>
<html ng-app="plunker">
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   
    <script type="text/javascript">
    angular.module('plunker', ['ui.bootstrap']);
var ButtonsCtrl = function ($scope) {
	<?php
	for ($i = 0; $i < 10; $i ++){
		for ($j = 0; $j < 10; $j ++){
			
			$posX = decbin ( $j );
			while (strlen($posX) < 4){
				$posX = "0" . $posX;
			}
			$posY = decbin ( $i );
			while (strlen($posY) < 4){
				$posY = "0" . $posY;
			}
			echo "\$scope.colour".$i.$j." = 0;
			";
			echo "\$scope.posX".$i.$j." = '".$posX."';
			";
			echo "\$scope.posY".$i.$j." = '".$posY."';
			";
		}
	}
  ?>

};
</script>

    <style>
    .btn {
       border: 1px outset blue;
       background-color: lightBlue;
       height:50px;
       width:50px;
       cursor:pointer;
    }

    .btn:hover {
       background-color: blue;
       color:white;
    }
    </style>
   
  </head>
  <body>

<div ng-controller="ButtonsCtrl">
	 <input type="text" ng-model="binary" placeholder="Enter binary here (no spaces)">
	 <br />
	 {{binary}}
	 <br />
    <table>
    
<?php
for ($i = 0;  $i < 10; $i ++){
	echo "<tr>";
	for ($j = 0; $j < 10; $j++){
		echo '<button type="button" class="btn btn-primary" ng-model="colour'.$i.$j.'"></button>';
	}
	echo'</tr><br/>';
}
?>
   </table>

</div>
  </body>
</html>