<?php  //session_start() ?>
<html>
    <head>
        <link rel="icon" href="../img/logo.jpg" type="image/gif" sizes="20x20">
        <title> Obyanga Online Shopping </title>
	 <link rel = "stylesheet" style = "style/css" href = "header.css">
	 <link rel = "stylesheet" style = "style/css" href = "itemstyle.css">
	 <link rel = "stylesheet" style = "style/css" href = "sytle.css">
	</head>
<style>
.footer{
	display: none;
}
</style>
<body>
<div class = "bbbody">
<?php
        require_once("header.php");
        // require_once("style.php");
function container() {
    ?>
	<link rel = "stylesheet" style = "style/css" href = "style.css">
	<?php require_once("imageslide.php"); ?>
	<div class = "bodymain">
		<div class = "ainnbody">
		
			<li><span class="ainnview1">Shop By Category</span></li>
			<li><a href="electronics/electronics.php" class="ainn">Electronics<img src ="img/32.jpg" class ="iim"></a></li>
			<li><a href="phones/phonesTabs.php" class="ainn">Smart Phones<img src ="img/4 - copy(1).jpg" class ="iim"></a></li>
			<li><a href="computer/computer.php" class="ainn">Smart Computers<img src ="img/12 - copy.jpg" class ="iim"></a></li>
			<li><a href="electricalcomponents/electricalcomponents.php" class="ainn">Electricals<img src ="img/2004.jpg" class ="iim"></a></li>
			<li><a href="fooditems/fooditems.php" class="ainn">Provisions<img src ="img/1002.jpg" class ="iim"></a></li>
			<li><a href="drinks/drinks.php" class="ainn">Drinks<img src ="img/6007.jpg" class ="iim"></a></li>
			<li><a href="homekitchen/HomeKitchen.php" class="ainn">Home Care<img src ="img/4017.jpg" class ="iim"></a></li>
			<li><a href="sports/sports.php" class="ainn">Sports<img src ="img/sport.jpg" class ="iim"></a></li>
			<li><a href="power/power.php" class="ainn">Power Solutions<img src ="img/506.jpg" class ="iim"></a></li>
			<li><a href="wears/wears.php" class="ainn">Splendid Wears<img src ="img/43.jpg" class ="iim"></a></li>
			<li><a href="personal_care/personal_care.php" class="ainn">Personal Care<img src ="img/7003.jpg" class ="iim"></a></li>
			<li><a href="industrialtools/industrialtools.php" class="ainn">Industrials<img src ="img/8018.jpg" class ="iim"></a></li>
			<li><a href="low_sugar/low_sugar.php" class="ainn">Health Care<img src ="img/8007.jpg" class ="iim"></a></li>
			<li><a href="office_cabinets/office_cabinets.php" class="ainn">Offices<img src ="img/8004.jpg" class ="iim"></a></li>
			
			<li><span class="ainnview1">Obyanga Splendid</span></li>
			<li><a href="electronics/electronics.php" class="ainn1"><span class="tt" >Electronics</span><img src ="img/32.jpg" class ="iim1"></a></li>
			<li><a href="phones/phonesTabs.php" class="ainn1"><span class="tt" >Smart Phones</span><img src ="img/2.jpg" class ="iim1"></a></li>
			
			
			<li><span class="ainnview1">New Arrival</span></li>
		</div>
	</div>
<?php 
	function seperator1(){
		?>
		<div class="seperator1">
		 	<img src ="img/ad.jpg" class="sideadvertimg">
		</div> 
		<?php
	}
	function firststage(){
		?>
		<div class="f1">
			<a href="" class="fahref">
				<img src="../img/9003.jpg" class="fimg11">
				<img src="../img/9002.jpg" class="fimg11">
				<img src="../img/9004.jpg" class="fimg11">
				<span class="fspan">Power Devices</span>
			</a>
			<a href="" class="fahref">
				<img src="../img/2001.jpg" class="fimg12">
				<img src="../img/2002.jpg" class="fimg12">
				<img src="../img/2003.jpg" class="fimg12">
				<span class="fspan">Electricals</span>
			</a>
			<a href="" class="fahref">
				<img src="../img/3001.jpg" class="fimg13">
				<img src="../img/3002.jpg" class="fimg13">
				<img src="../img/3003.jpg" class="fimg13">
				<span class="fspan">Electronics</span>
			</a>
			<a href="" class="fahref">
				<img src="../img/301.jpg" class="fimg14">
				<img src="../img/302.jpg" class="fimg14">
				<img src="../img/303.jpg" class="fimg14">
				<span class="fspan">Wears</span>
			</a>
			<a href="" class="fahref">
				<img src="../img/4016.jpg" class="fimg15">
				<img src="../img/4017.jpg" class="fimg15">
				<img src="../img/4018.jpg" class="fimg15">
				<span class="fspan">Home & Kitchen</span>
			</a>
		</div>
		<?php
	}
	function firststage1(){
		?>
		<div class="f1">
			<a href="" class="fahref1">
				<img src="../img/1003.jpg" class="fimg16">
				<img src="../img/1002.jpg" class="fimg16">
				<img src="../img/1005.jpg" class="fimg16">
				<span class="fspan">Provisions</span>
			</a>
			<a href="" class="fahref1">
				<img src="../img/5004.jpg" class="fimg1">
				<span class="fspan">Regulators</span>
			</a>
			<a href="" class="fahref1">
				<img src="../img/7003.jpg" class="fimg1">
				<span class="fspan">Personal Cares</span>
			</a>
			<a href="" class="fahref1">
				<img src="../img/2050.jpg" class="fimg1">
				<span class="fspan">Resistors</span>
			</a>
			<a href="" class="fahref1">
				<img src="../img/9017.jpg" class="fimg1">
				<span class="fspan">Office Tools</span>
			</a>
		</div>
		<?php
	}
	function firststage12(){
		?>
		<div class="f1">
			<a href="" class="fahref121">
				<img src="../img/1003.jpg" class="fimg121">
				<span class="fspan">Provisions</span>
			</a>
			<a href="" class="fahref121">
				<img src="../img/5004.jpg" class="fimg121">
				<span class="fspan">Regulators</span>
			</a>
			<a href="" class="fahref121">
				<img src="../img/7003.jpg" class="fimg121">
				<span class="fspan">Personal Cares</span>
			</a>
			<a href="" class="fahref121">
				<img src="../img/2050.jpg" class="fimg121">
				<span class="fspan">Resistors</span>
			</a>
			<a href="" class="fahref121">
				<img src="../img/9017.jpg" class="fimg121">
				<span class="fspan">Office Tools</span>
			</a>
		</div>
		<?php
	}
	function seperator(){
		?>
		<div class="seperator">
			<img src ="img/ad1.jpg" class="sideadvertimg">
		</div> 
		<?php
	}
	function imagechange(){
	?>
<?php
	}
	seperator1();
	firststage();
	seperator();
?>
<script>
        var myindex2 = 0;
        carouse3();
        function carouse3() {
            var ii ;
            var x1 = document.getElementsByClassName("fimg11") ;
            for( ii = 0; ii < x1.length; ii++ ) {
                x1[ii].style.display = "none";
            }
            myindex2++ ;
            if( myindex2 > x1.length ) {
                myindex2 = 1 ;
            } 
            x1[myindex2 - 1 ].style.display = "block";
            setTimeout(carouse3, 7000 );
        }

		var myindex4 = 0;
        carouse4();
        function carouse4() {
            var ii ;
            var x1 = document.getElementsByClassName("fimg12") ;
            for( ii = 0; ii < x1.length; ii++ ) {
                x1[ii].style.display = "none";
            }
            myindex2++ ;
            if( myindex2 > x1.length ) {
                myindex2 = 1 ;
            } 
            x1[myindex2 - 1 ].style.display = "block";
            setTimeout(carouse4, 7000 );
        }

		var myindex5 = 0;
        carouse5();
        function carouse5() {
            var ii ;
            var x1 = document.getElementsByClassName("fimg13") ;
            for( ii = 0; ii < x1.length; ii++ ) {
                x1[ii].style.display = "none";
            }
            myindex2++ ;
            if( myindex2 > x1.length ) {
                myindex2 = 1 ;
            } 
            x1[myindex2 - 1 ].style.display = "block";
            setTimeout(carouse5,7000 );
        }

		var myindex6 = 0;
        carouse6();
        function carouse6() {
            var ii ;
            var x1 = document.getElementsByClassName("fimg14") ;
            for( ii = 0; ii < x1.length; ii++ ) {
                x1[ii].style.display = "none";
            }
            myindex2++ ;
            if( myindex2 > x1.length ) {
                myindex2 = 1 ;
            } 
            x1[myindex2 - 1 ].style.display = "block";
            setTimeout(carouse6, 7000 );
        }

		var myindex7 = 0;
        carouse7();
        function carouse7() {
            var ii ;
            var x1 = document.getElementsByClassName("fimg15") ;
            for( ii = 0; ii < x1.length; ii++ ) {
                x1[ii].style.display = "none";
            }
            myindex2++ ;
            if( myindex2 > x1.length ) {
                myindex2 = 1 ;
            } 
            x1[myindex2 - 1 ].style.display = "block";
            setTimeout(carouse7, 7000 );
        }

		var myindex8 = 0;
        carouse8();
        function carouse8() {
            var ii ;
            var x1 = document.getElementsByClassName("fimg16") ;
            for( ii = 0; ii < x1.length; ii++ ) {
                x1[ii].style.display = "none";
            }
            myindex2++ ;
            if( myindex2 > x1.length ) {
                myindex2 = 1 ;
            } 
            x1[myindex2 - 1 ].style.display = "block";
            setTimeout(carouse8, 7000 );
        }

    </script>
	<style>
	.details_img{
		background-color: red;
		width: 100%;
		position: relative;
		top: 200px;
		margin-bottom:250px;
		height: 350px;
	}
	.details_img114,
	.details_img113,
	.details_img112,
	.details_img111,
	.details_img1{
		background-color: green;
		width: 18.9%;
		height: 250px;
		position: absolute;
		border: 3px solid green;
		border-radius: 5%;
		display: inline-block;
		background-color:  ;
		height: 280px;
		width: 18.9%;
		border-radius: 2% 2% 2% 2%;
		padding: 0px;
		text-align: center;
		border: 2px solid ghostwhite;
		margin-bottom: 20px;
		transition: 1s ease;
	}
	.details_img111{
		left: 20%;
	}
	.details_img112{
		left: 40%;
	}
	.details_img113{
		left: 60%;
	}
	.details_img114{
		left: 80%;
	}
	.f1{
		background-color: white ;
		width: 100%;
		height: auto;
		position: relative;
		top: 100px;
	}
	.fahref121,
	.fahref12,
	.fahref1,
	.fahref{
		background-color: white;
		height: 300px;
		width: 18.4%;
		border-radius: 2% 2% 2% 2%;
		padding: 0px;
		padding: 2px;
		text-align: center;
		border: 2px solid ghostwhite;
		margin-bottom: 20px;
	}
	.fimg18,
	.fimg17,
	.fimg16,
	.fimg15,
	.fimg14,
	.fimg13,
	.fimg121,
	.fimg12,
	.fimg11,
	.fimg1,
	.fimg{
	    background-color: white;
		width: 100%;
		height: 80%;
		border-radius: 5% 5% 5% 5%;
		border: 0px solid saddlebrown;
		padding: 0px;
		position: relative;
		text-align: center;
	}
	.fimg1{
		border-radius: 5% 5% 5% 5%;
	}
	.fimg12{
		border-radius: 5% 5% 5% 5%;
	}
	.fahref121{
		position: relative;
		top: 50px;
		border: 0px;
	}
	.fimg121{
		border-radius: 50%;
	}
	.fspan{
		background-color: ;
		color: black;
		font-size: 20px;
		font-weight: bold;
		position: relative;
		top: 3%;
		text-align: center;
	}
	.seperator1,
	.seperator{
		position: relative;
		left: 0%;
		background-color: green;
		height: 40px;
		width: 100%;
		top: 100px;
		background-color: #F2F3F7;
		background-image: url(img/4CCC.jpg);
	}
	.seperator1{
		top: 100px;
	}
	.seperatorahref{
		font-size: 30px;
		position: relative;
	}
	.text{
		position: relative;
		top: 80%;
	}
	</style>
    <?php
    }
       container();
?>
	<div class="description"><br>
		Obyanga is a new online mall marketing everything you need for your daily living, we uphold our
		customers as our kings without which we would not exist. Obyanga exists for the comfort of all irrespective
		of background.
		We sell products ranging from Home utilities and Electronic products to Fashion, Sports, Smart living gadgets
		such as the smart mobile phones, power solutions- involving batteries, voltage regulators, inverters, solar panel
		and lots more. We take care of electronic components for electrical students of higher institutions, training of
		young engineers in the electrical and computer fields, and chemical engineers as well. we bring the market to your
		pockets and deliver to your door steps. Obyanga Nigeria serves you with quality products from all over the world
		and consumer protection is our priority.
		<br>
		Payments can be made online through Obyanga wallet or Obyanga Pay or on delivery. Thank you for your patronage.
	</div>
<?php
 require_once("footer.php");
 require_once("footer1.php");
?>
<style>
#footer{
	position: relative;
	left: 0px;
	display: none;
	top: 370px;
	width: 100%;
	z-index: 0;
}
.description{
	height: auto;
	left: 0px;
	color: rgb(0, 50,  50);
	background-color: none;
	font-size: 18px;
	margin-bottom: 20px;
	padding-bottom: 20px;
	padding-top: 5px;
	top: 110px;
}
 @media only screen and ( max-width: 800px ){
     #footer{
		left: 0px;
		top: -10px;
		font-size: 15px;
	 }
.description{
	height: auto;
	top: -20px;
	font-size: 15px;
}
 }
 @media only screen and ( max-width: 500px ){
     #footer{
		left: 0px;
		top: -10px;
		font-size: 15px;
	 }
.description{
	top: -20px;
	font-size: 15px;
	height: auto;
}
}
</style>
</div>
</div>
<?php
		try {
				// $_SESSION["url"] . "<br>"; 
					 $_SESSION["ip"] ;
					// $_SESSION["host"] . "<br>";
					//echo $_SESSION[ip] ;
		  require('dataconnect.php');
            $conn = new PDO($dsn, $username, $pass);
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            //echo "connected";
			$sql1 = "INSERT INTO VISIT VALUES(NULL, \"$_SESSION[ip]\", NOW() ) ;" ;
			$conn->query ( $sql1);
		}catch (Exception $e){
			 // Error();
		}
$from = "obyanga.com";
$subject = "Visit report";
$to = "obyanganigeria@yahoo.com, ernest_ehirim@yahoo.com";
$headers .= 'From: obyanga.com' . "\r\n";
$headers .= 'Cc: obyanga.com' . "\r\n";
$date = date( 'Dd, Mm, Y' ) ;
$message = "Obyanga, IP: $_SESSION[ip] visited \nOn: $date  " ;
//mail($to,$subject,$message,$headers);
?> 
</body>
</html>
