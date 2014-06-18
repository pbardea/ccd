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
	for ($i = 0; $i < 49; $i ++){
		for ($j = 0; $j < 49; $j ++){
			
			$posX = decbin ( $j );
			while (strlen($posX) < 6){
				$posX = "0" . $posX;
			}
			$posY = decbin ( $i );
			while (strlen($posY) < 6){
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
       height:25px;
       width:25px;
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
	<pre>
	Spaces:
	<?php
	for ($i = 0; $i < 49; $i++){
		for ($j = 0; $j < 49; $j++){
			echo "{{posX".$i.$j."}} {{posY".$i.$j."}} {{colour".$i.$j."}} ";
		}
	}
	?>
	<br />
	No Spaces:
	<?php
	for ($i = 0; $i < 49; $i++){
		for ($j = 0; $j < 49; $j++){
			echo "{{posX".$i.$j."}}{{posY".$i.$j."}}{{colour".$i.$j."}}";
		}
	}
	?>
	</pre>
    <table>
    
<?php
for ($i = 0;  $i < 49; $i ++){
	echo "<tr>";
	for ($j = 0; $j < 49; $j++){
		echo '<button type="button" id="but'.$i.$j.'" class="btn btn-primary" ng-model="colour'.$i.$j.'" btn-checkbox btn-checkbox-true="1" btn-checkbox-false="0"></button>';}
	echo'</tr><br/>';
}
?>
    </table>
    </div>
  </body>
</html>