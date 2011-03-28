<!--//---------------------------------+
//  Slider Using Ajax and PHP        |
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roshan's Script for Slider Using PHP,Ajax And Javascript</title>
<script src="slider.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function setSliderVal(value)
{
	xmlHttp=getXMLHTTP();
	if (xmlHttp==null)
 	 {
 	 	alert ("Your browser does not support AJAX!");
 		return;
 	 }
	
	xmlHttp.onreadystatechange=function() 
	{
	  if (req.readyState == 4) { // only if "OK"
		if (req.status == 200) {						
			//dont do any thing here we just need to save the valued in the database				
		} else {
			alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
		}				
	}
	var queryString = "?sliderval=" + value.substring(0,value.length-2); //stripping last two letter which is px 				
	xmlHttp.open("GET","AJAX4Slider.php"+queryString,true);
	xmlHttp.send(null);
	
}

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				req = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
</script>
<link href="slider.css" rel="stylesheet" type="text/css" />
</head>

<body>

<DIV class=carpe_slider_group>
                <DIV class=carpe_horizontal_slider_display_combo>
                  <DIV class=carpe_slider_display_holder>
                    <!-- Default value: 0 -->
                    <input name="Input" class=carpe_slider_display id="display1" value="<?=$row['slider_val']?>" />
                  </DIV>
                  <DIV class=carpe_horizontal_slider_track>
                    <DIV class=carpe_slider_slit></DIV>
                    <DIV class=carpe_slider id=slider1 display="display1" style="left:<?=$row['slider_val']?>px"></DIV>
                  </DIV>
                </DIV>
                <DIV class=carpe_horizontal_slider_display_combo></DIV>
                <DIV class=carpe_horizontal_slider_display_combo></DIV>
                <DIV class=carpe_horizontal_slider_display_combo></DIV>
              </DIV>
</body>


</html>
