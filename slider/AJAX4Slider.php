<!--//---------------------------------+
//  Slider Using Ajax and PHP        |
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<? 
$sliderval=$_GET['sliderval']; //get the valued from ajax function
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('db_slider'); //change the name of the database if required
$query="UPDATE tbl_slider SET slider_val='$sliderval' WHERE id='1'";
$result=mysql_query($query);

			
?>