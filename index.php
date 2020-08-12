<h2>Employees of the month:</h2>

<?php
    $names = array('Brad', 'John', 'Jane', 'Woofsalot');
    $count = 1;
    foreach($names as &$name) {
        echo "<li>$name</li>";
    }
?>
<h2>Using a while loop</h2>
<?php
    
	while($count < count($names)){
		echo "<li>Hi my name is $names[$count]</li>";
		$count++;
	}
?>
