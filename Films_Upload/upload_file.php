<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    $reIP=$_SERVER["REMOTE_ADDR"]; 
    $myfile = fopen("upload_number", "r") or die("Unable to open file!");
    $file_number="233666";
    $file_info=fread($myfile,filesize("upload_number"));
    $file_number=fread($myfile,filesize("upload_number"));
    echo $file_info;
    mkdir($file_info,0777);
    $dir=" ";
    $dir=$file_info."/";
    $file_info_new="233666";
    $file_info_new=$file_number+1;
    file_put_contents("upload_number",$file_info_new);
    echo $dir;
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    ?>
    <html>
    <form action="upload_write.php">
    <input type="text" name="film_name" placeholder="作品名">
    <textarea type="text" name="about" placeholder="简介"></textarea>
    <input type="submit" value="提交作品！">
    </form>

    <?php
    if (file_exists($dir . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }

    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $dir . $_FILES["file"]["name"]);
      echo "Stored in: " . $dir . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>