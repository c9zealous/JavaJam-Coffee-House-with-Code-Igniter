
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/javajam.css">
</head>
<body>
<div id="wrapper">
<header>
	<h1>JavaJam Coffee House</h1>
</header>
<nav>
	<ul>
	
	<li><a href="http://localhost/javajam/index.php/Home">Home</a></li>
	<li><a href="http://localhost/javajam/index.php/Menu">Menu</a></li>
	<li><a href="http://localhost/javajam/index.php/Musician">Music</a></li>
	<li><a href="http://localhost/javajam/index.php/Jobs">Jobs</a></li>
	</ul>
</nav>
<main>
	<div id="heroguitar"></div>
	<h2>Music at JavaJam</h2>
	<p>The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music you won&#39;t want to miss!</p>
	<h4>January</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
<?php
		
			foreach ($sql1->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>			
		</div>
	<h4>February</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql2->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>				</div>
		<h4>March</h4>
		<div class="details">
		<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			
			foreach ($sql3->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>				</div>
		<h4>April</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			
			foreach ($sql4->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>				</div>
		<h4>May</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

		
			foreach ($sql5->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>				</div>
		<h4>June</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql6->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>				</div>
		<h4>July</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql7->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>					</div>
		<h4>August</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql8->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>					</div>
		<h4>September</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql9->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>				</div>
		<h4>October</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql10->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>					</div>
		<h4>November</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
			<?php
		

			foreach ($sql11->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>					</div>
		<h4>December</h4>
		<div class="details">
			<h5>Performer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Genre</h5>
		<?php
		

			foreach ($sql12->result() as $row){
			echo "<a href='http://localhost/javajam/index.php/artistdetails#".$row->name."'>".$row->name."</a>"." ".$row->genre;
			echo "<br>";
			echo "<br>";
		}
?>			
		
		</div>
</main>
	<footer>Copyright &copy; 2016 JavaJam Coffee House<br>
	<i><a href="#">ajinkya@ghadge.com</a></i>

</div>
</body>
</html>
