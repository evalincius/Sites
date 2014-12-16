<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSS/reset.css" rel="stylesheet" type="text/css" />
<link href="CSS/cust.css" rel="stylesheet" type="text/css" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
 
 <script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#accordion").accordion();
  });
  </script>
  <?php include("header.php"); ?>

        <div id="main">
        <div id="banner"></div>
        <div class="center">
        <form onSubmit="myFunction(); return false;" class="inputtxt"> 
        	<div id="inputbox">
            <p><b>Start typing a name in the input field below:</b></p>
			<b>Movie Title:</b> <input type="text" onkeyup="showHint(this.value)">
            </div>
		</form>
          <div id="texts">
           	  <div class="text2">
                <h1> Movies </h1>
                <div style='overflow:scroll; width:400px;height:380px;'class="enter" >
  		   <script>
				function showHint(str) {
    			 if (str.length == 0) { 
        			 document.getElementById("txtHint").innerHTML = "";
     	   		 return;
   				  } else {
       			  var xmlhttp = new XMLHttpRequest();
        			 xmlhttp.onreadystatechange = function() {
           			  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           		      document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

					  
           		  }
         		}
        		 xmlhttp.open("GET", "a.php?q="+str, true);
        		 xmlhttp.send();
    		 }
			}
			</script>
            <script LANGUAGE="JavaScript">
			function myFunction() {
			}
			</script>
            

  		   <br/>


			<p> <div id="txtHint">List Of Movies Will Appear There</div></p>
		
				
  				</div>
               </div>
            
            
            </div>
            <div id="gad">
            <script>
				function functionSendLabel(str) {
				//alert(str); // this is the message in ""

    			 if (str.length == 0) { 
        			 document.getElementById("txtHint2").innerHTML = "";
     	   		 return;
   				  } else {
       			  var xmlhttp = new XMLHttpRequest();
        			 xmlhttp.onreadystatechange = function() {
           			  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           		      document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;

					  
           		  }
         		}
        		 xmlhttp.open("GET", "b.php?q="+str, true);
        		 xmlhttp.send();
    		 }
			}
	</script>
            <div class="title">
            <h1><p> <div id="txtHint2">Movie Title</div></p></h1></div>
            <div id="accordion" >
        <h3><a href="#">About Movie</a></h3>
	<div>
    <div class="txtas">
		<script>
				function getInfoAboutMovie(str) {
				//alert(str); // this is the message in ""

    			 if (str.length == 0) { 
        			 document.getElementById("txtHint3").innerHTML = "";
     	   		 return;
   				  } else {
       			  var xmlhttp = new XMLHttpRequest();
        			 xmlhttp.onreadystatechange = function() {
           			  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           		      document.getElementById("txtHint3").innerHTML = xmlhttp.responseText;

					  
           		  }
         		}
        		 xmlhttp.open("GET", "c.php?q="+str, true);
        		 xmlhttp.send();
    		 }
			}
	</script>

	<div id="txtHint3">TESTING...</div>


</div>
	</div>       
            
	<h3><a href="#">Actors</a></h3>
	<div>
    <div class="pict"></div>
    <div class="txtas">
	<p>Price: £9999.99</p>
	<p>Manufacturer: Lightsaber Inc</p><br/>
	<p>
The ultimate cheese cutter! Stolen from the Star Wars universe, a the lightsaber equips you with your own "laser sword." It consists of a polished metal hilt which projects a blade of plasma about 1.33 meters long. The lightsaber was once the signature weapon of the Jedi order and their Sith counterparts, both of whom can use them for close combat, or to deflect blaster bolts; now it can be yours. 
</p>
</div>
	</div>       
            
     
	 
            
    <h3><a href="#">Similar Movies</a></h3>
	<div>
    <div class="pict"><img src="Images/teleport.jpg" width="116" height="122" alt="pav" /></div>
    <div class="txtas">
	<p>Price: £10,000</p>
	<p>Manufacturer: Aperture Science Labs</p><br/>
	<p>
Once the stuff of science fiction, an interstellar teleporter is a must have for the modern professional.  This device is capable of teleporting people and/or other objects over interstellar distances instantaneously. This is achieved by scanning and disassembling the matter of the physical person or object at the point of departure and information is transmitted so that the person or object may be reassembled at the point of arrival.
</p>
	</div>
	</div>       
     </div>       
    
    
    
    </div>
    </div>
	

                
                
        </div>
  
        <div class="clear"></div>
  
        
        


<?php include("footer.php"); ?>
