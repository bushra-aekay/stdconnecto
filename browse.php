<!DOCTYPE html>
<html>
<head>
	<title>File Storage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
			<a href="index.html">Home</a></li>
			<a href="upload.html">Upload</a></li>
	</nav>
    <h1>Browse Files</h1>

    <?php
    // Define the directory where uploaded files are stored
    $dir = "uploads/";
  
    // Check if the directory exists
    if (is_dir($dir)) {
      // Open the directory
      if ($dh = opendir($dir)) {
        // Loop through all the files in the directory
        while (($file = readdir($dh)) !== false) {
          // Exclude hidden files and parent directory
          if ($file != '.' && $file != '..') {
            // Display the file name and a link to download it
            echo "<p><a href='uploads/$file'>$file</a></p>";
          }
        }
        // Close the directory
        closedir($dh);
      }
    } else {
      // Display an error message if the directory does not exist
      echo "<p>Uploads directory not found.</p>";
    }
    ?>

</body>
</html>

