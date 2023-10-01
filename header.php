<style type="text/css">
</style>
<table border="0" width="100%" height= "100px" cellspacing="0" cellpadding="0" background="image/Banner_iubat.jpg">
  <tr>

    <td width="10%">
     <img border="0" src="image/topright.jpg" width="333" height="100px" align="right"></td>
  </tr>
</table>

  <tr>

  </tr>

  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  

