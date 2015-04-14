<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	
</head>
<body>

	<div class="jumbotron">
      <div class="container">
      	<h1><!-- h1 is too big for this --></h1>
		<h2>UK Radio Player - renames list of files</h2>	
		<p>Make sure all files are in the one directory.</p>
		<p>Rather than the one zip file with three directories they gave us.</p>
      </div>
    </div>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2>Renaming</h2>
          	<?php 

          	// Improvements
          	// No rename if already renamed
          	// Browser drop down and confirmation instead of php var
          	// Copy originals
          	// Is possible to move all files from the directories into one

			$directory = 'si-files/';
			if ($handle = opendir($directory)) {
				$from = '2016-01-07-';
				$to =  '2016-01-08-';
		 		$count = 0;
			 	while(false !== ($filename = readdir($handle))){
			 		if ($filename == '.' or $filename == '..') continue;
			 		$newName = str_replace($from, $to, $filename);
			 		rename($directory.$filename, $directory.$newName);
			 		$count++;

			 		echo "<p>renamed " . $directory."<b>".$filename . "</b> to ". $directory."<b>".$newName . "</b></p>";
			 	}
			 	closedir($handle);
			 	echo "renamed ".$count ." files";
			}
			?>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; thing 2014</p>
      </footer>
    </div> <!-- /container -->


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
