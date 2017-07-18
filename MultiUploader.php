<!DOCTYPE html>
 <html>
 	<head>
 		<title>Multi Uploader by The Alien</title>
 		<link />
 		<meta />
 		<style>
 			body 
 			{
 				background-color:black;
 				color:green;
 				text-shadow: 0px 10px 20px aqua;
 			}
 			.title
 			{
 				color:yellow;
 				margin:30px;
 				font-weight:bold;
 				font-family:
 			}
 			.result
 			{
 				margin-top:50px;
 				margin-left:150px;
 			}
 			a:hover
 			{
 				color:red;
 			}
 			a:active
 			{
 				color:yellow;
 			}
 			a:visited
 			{
 				color:blue;
 			}
 			.submit
 			{
                  background: green;
                  border-radius:6px;
                  border: 1px solid lime;
                  color:white;
                  text-shadow: 0px 0px 10px rgba(0, 149, 255, 0.75);
                  line-height:50px;
                  padding-left:40px;
                  padding-right:40px;
                cursor: pointer;
                  text-transform:none;
 			}
            #social-icons
            {
                margin: 40px;
            }
            #social-icons .twitter,.facebook,.google
            {
                margin:20px;
            }
            #social-icons .twitter:hover,.facebook:hover,.google:hover
            {
                width: 70px;
                height: 70px;
            }
            .note
            {
                color:red;
            }
 		</style>
 		<script>
 			
 		</script>
 	</head>
 	<body>
 		<center>
 		<div class="title"><font size="8px" class="title">Multi Uploader by The Alien</font></div>
		<form enctype="multipart/form-data" method="POST" action="">
			<input type="file" name="file[]" class="file" id="file" multiple />
			<input type="submit" name="submit" class="submit" id="submit" />
		</form>
		</center>
		<div class="result" id="result">
		<?php 
            error_reporting(0);
            
	if(isset($_POST['submit'])){
		$count = 0;
		foreach($_FILES["file"]['name'] as  $filename)
		{
			$temp_name = $_FILES["file"]['tmp_name'][$count];
			if(move_uploaded_file($temp_name,$filename))
			{
				echo "<img src='https://image.ibb.co/eB7Jua/check.png' /><font color=yellow size=5> ".$filename."</font><font size=5> Has been uploaded. <a href='".$filename."'>Check here</a> &nbsp(".number_format((float)$_FILES['file']['size'][$count]/(1024*1024),2,'.','')."MB)</font><br>";
			}
            elseif(empty($filename))
            {
                echo"<img src='https://image.ibb.co/f7WYSv/failed.png' /><font color=red size=5>&nbsp No File Selected.</font><br>";
                break;
            }
			else
			{
				echo "<img src='https://image.ibb.co/f7WYSv/failed.png' /><font color=yellow size=5>&nbsp ".$filename."</font><font size=5 color=red> Failed to Upload .</font><br>";
			}
            $total_size += $_FILES['file']['size'][$count];
			$count++;
		}
        echo "<font size=5 color=pink>".number_format((float)$total_size/(1024*1024),2,'.','')."MBs Uploaded.</font>";

	}
 ?>
        </div>
        <center>
        
        <div id="social-icons" class="social-icons">
            <font><span class="note">Note:</span> Each File Size should be upto 2MB and All File Size should be upto 8MB.</font>
            <legend>Copyright (c) Pak Cyber Ghosts, Coded by The Alien</legend>
            <a href="https://www.facebook.com/muibraheem96"><img src="https://image.ibb.co/bDtrEa/facebook.png" class="facebook" id="facebook"/></a>
            <a href="https://www.google.com/search=Pak Cyber Ghosts"><img src="https://image.ibb.co/ftswfF/google.png" class="google" id="google" /></a>
            <a href="https://www.twitter.com/muibraheem96"><img src="https://image.ibb.co/k4pL7v/twitter.png" class="twitter" id="twitter" /></a>
        </div>
            </center>
 	</body>
 </html>
