<!DOCTYPE html>
<!-- Student Name: Ajinkya Ghadge  -->
<html lang="en">
  <head>
    <title>A Music Web Application</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/javajam.css"> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/music.js">
      

    </script>

  </head>

  <body onload="sendRequest();">
  <div id="wrapper">
<header>
  <h1>JavaJam Coffee House</h1>
</header>
<table id="nav-bar">
<tr>
<td>
<nav>
  <ul>
  <li><a href="http://localhost/javajam/index.php/home">Home</a></li>
  <li><a href="http://localhost/javajam/index.php/menu">Menu</a></li>
  <li><a href="http://localhost/javajam/index.php/home/musician">Music</a></li>
  <li><a href="http://localhost/javajam/index.php/jobs">Jobs</a></li>
  </ul>
</nav>
</td>
</tr>
</table>
<main id="menu_main">
    <form>
       <label your favourite artist: <input type="text" id="form-input" value=""/></label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </form>
    <div id="output">&nbsp;</div>
    <div id="output1">&nbsp;</div>
    <!--<div id="output2">&nbsp;</div>-->
    <script>
    var x= location.hash.split('#')[1];
    document.getElementById('form-input').value =x;
    </script>
 </main>
  <footer>Copyright &copy; 2016 JavaJam Coffee House<br>
  <i><a href="#">ajinkya@ghadge.com</a></i>
  </footer>
</div>   
  </body>
</html>

