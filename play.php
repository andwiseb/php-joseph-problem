<form action="" method="POST">
    how many players?:
    <input type="text" name="player_numbers" autocomplete="off"><br><br>
    <input type="submit" name="send" value="play and die!">
</form>

<?php
	
if ($_POST) {
	$number = $_POST['player_numbers'];
	$set = array();
	for ($i = 0; $i < $number; $i++) { 
		$set[$i] = $i + 1;
	}
	$count = count($set) - 1;
	for ($i = 1; $i < $number; $i = $i + 2) { 
		unset($set[$i]);
	} 
	while (count($set) != 1) {
		if (empty($set[$count])) {
			$count = count($set) - 1;
			$set = array_values($set);
			for ($i = 1; $i < $number; $i = $i + 2) { 
				unset($set[$i]);
			}
		}
		else {
			$count = count($set) - 1;
			$set = array_values($set);
			for ($i = 0; $i < $number; $i = $i + 2) { 
				unset($set[$i]);
			}
		}
	}
	$set = array_values($set);
	echo "<p class='winner'><b>winner:</b> number $set[0]</p>";
}
