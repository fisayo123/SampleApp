<!DOCTYPE html>
<head>
	
	<title>
	<link rel="stylesheet" href="mira.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/bootstrap.min.js"></script>
	</title>
</head>

<body>
	<div class="body">
  	<div class="body-child admin" style="width: 33%; position: absolute; height: 100px">
  		<img src="images/IMG_6415.PNG" style="width: 300px; height=300px">
  		<h3>Flowy African Gown</h3>
  		African Prints are the best!
      <form action="processPayment.php" method="POST">
        <input type="hidden" name="amount" value="250">
        <input type="hidden" name="Flowy African Gown">
        <button type="submit">$250</button>
      </form>
  		 
  	</div>
  	<div class="body-child lib" style=" width: 33%; position: absolute; margin-left: 33.3%">
  	<img src="images/IMG_6422-1.PNG" style="width: 300px; height=300px">
  		<h3>Rapa and Top</h3>
  		African Prints Are the best! BUY
      <form action="processPayment.php" method="POST">
      <input type="hidden" name="amount" value="300">
        <input type="hidden" name="Rapa and Top">
        <!-- <input type="text" name="ttt"> -->
       <button type="submit">$300</button> 
      </form>
  		
  	</div>
  	<div class="body-child camp" style=" width: 33%; position: absolute; margin-left: 66.3%">
  	<img src="images/IMG_6460.PNG" alt="error loading image" style="width: 300px; height=300px" >
  		<h3>Shift Top and Bulgy Shirt</h3>
  		Go African!w
      <form action="processPayment.php" method="POST" >
        <input type="hidden" name="amount" value="300">
        <input type="hidden" name="Shift Top and Bulgy Shirt">
        <button type="submit">$200</button>
      </form>
  		

  	</div>
  </div>
</body>