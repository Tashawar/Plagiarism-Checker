<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<title> Plagiarism Checker | Main Page </title>
	<link href = "assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src = "assets/js/jquery.js"></script>
	<script src = "assets/js/bootstrap.min.js"></script>
	<style>
		input:focus 
		{
    		outline:0px !important;
    		-webkit-appearance:none;
        }
        a:focus 
		{
    		outline:0px !important;
    		-webkit-appearance:none;
        }
        button:focus 
		{
    		outline:0px !important;
    		-webkit-appearance:none;
        }
	</style>
	<script>
	function validateUpload()
	{
		if(document.getElementById('file').value == "")
		{
			alert("Please choose a document.");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
	<div class='hero-unit'>
		<h1> Plagiarism Checker </h1>
		<h1><small>An online utility to check if a document's contents are plagiarsed. </small></h1>
		<p> </p>
		<a class='btn btn-danger btn-large' data-toggle='modal' href='#myModal'> Learn More </a>
		<a class='btn btn-primary btn-large' href='scripts/scripts.zip'> Download Scripts! </a>
	</div> 

	<div id='myModal' class="modal hide fade">
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    		<h3>Plagiarism Checker - User Guide</h3>
    	</div>
    	<div class="modal-body">
    	<!-- TODO: Add Help -->
    		<p>Usage</p>
    	</div>
    	<div class="modal-footer">
    		<a href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
    	</div>
    </div>

    <div class='well' style='margin:40px' align='center'>
		<form action="processFile.php" method= "POST" enctype="multipart/form-data" onsubmit='return validateUpload()'>
			<label for="file"><h3>Upload the document<h3></label>
			<input type="file" name="file" id="file" class='btn btn-large btn-inverse'>
			<div class='form-actions'>
				<input class='btn btn-info btn-large span3' type="submit" name="submit" value="Upload!">
			</div>
		</form>
    </div>
</body>
</html>