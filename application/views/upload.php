<!DOCTYPE html>
<html>
<head>
	
</head>
<body> 
<form action ="<?php echo site_url('doctor/upload')?>" method="post" enctype="multipart/form-data">
<label>Image Upload</label>
<input type="file" name="image">
<button type="submit">Upload</button>
</form>
</body>
</html>