<html>
<body>
<style>
label{
    background:f0f0f0;
}
</style>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br/>
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>