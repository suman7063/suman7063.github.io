<?php
include'db.php';
session_start();
$email_check = $_SESSION['email'];

$qu = mysqli_query($conn,"select fname1 as name3 from sign where email = '$email_check'");
$qu1 = mysqli_fetch_array($qu,MYSQLI_ASSOC);
if($qu1['name3']=='')
{
    header('location:log_sig.php');
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>purchase</title>
	<link rel="stylesheet" href="css/main_search.css">
	<link rel="stylesheet" href="css/purchase.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<script>
    function myFunction() {
    document.getElementById("demo").innerHTML = "<div>heifffffftiruyoiuty</div>";
}
</script>
</head>
<body background="photo/kyleabaker-2560x1024-collage.jpg">

<div id="logo">
<!--logo-->
<img src="photo/images6.jpg">
</div>
<div class="head">
<marquee>
<h2>
<font color="#00283a">
<?php
echo "Hello__".$qu1['name3'];
?>
</font>
</h2>
</marquee>
</div>
<div id="search">
    <form method="POST" action="search.php">
        <input type="text" name="item" style="width:50%; height: 35px; position: absolute; top:20%; left:0%;" placeholder="Search Movi Name" />
        <input type="submit" name="search" value="search" style="width: 20%; height: 40px; position: absolute; top:17%;left:50%; color: red;" />
    </form>
    <div id="logout">
    <a href="logout.php" style="position: absolute;top: 5px; left: 20px; color: black;text-decoration: none;">LOGOUT</a>
</div>
</div>
<!--Second-->
<div id="div_table">
<table >
	<tr>
    <td><?php
         $sa = $_SESSION['id'];
         echo $sa;
            if(isset($_GET['id']))
            {
              $_SESSION['pa']=$product_check ;
            $pro_select = "select * from movi_upload where (id='$sa')";
            $result = mysqli_query($conn,$pro_select) ;
            $rowcount= mysqli_num_rows($result);
            if($rowcount>=1)
            {
                 while($row = mysqli_fetch_array($result)) 
               {


                ?>
                <img src="upload/<?php echo  $row['movi']?>" style="width: 200px;height: 200px;position: absolute;left: 350px;top:80px;">
                <div style="width: 200px;height:30px;position:relative;top:90px;left:350px; background-color:#92C50D;"><a href="buynow.php" style="text-decoration: none;color: black;"><i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 25px; color:black;position: absolute;top: 3px;left: 3px;"></i><h3 style="position:relative;left:40px;top:5px;">Buy Now</h3></a></div>
                <?php
               }

}
            }
        ?></td>
		<td width="30%" height="400px">
			<?php
			$product_check = $_SESSION['id'];
              $_SESSION['pa']=$product_check ;
			$pro_select = "select * from movi_upload where (id='$product_check')";
			$result = mysqli_query($conn,$pro_select) ;
            $rowcount= mysqli_num_rows($result);
            if($rowcount==1)
            {
            	 while($row = mysqli_fetch_array($result)) 
               {

               	?>
                <img src="upload/<?php echo  $row['movi']?>" style="width: 200px;height: 200px;position: absolute;left: 350px;top:80px;">
                <div style="width: 200px;height:30px;position:relative;top:90px;left:337px; background-color:#92C50D;"><a href="buynow.php" style="text-decoration: none;color: black;"><i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 25px; color:black;position: absolute;top: 3px;left: 3px;"></i><h3 style="position:relative;left:40px;top:5px;">Buy Now</h3></a></div>
               	<?php
               }

            }
        ?>
		</td>
		<td width="40%" height="400px">

		</td>
		<td width="30%" height="400px">
		<!-- form 
		<form style="width: 250px;height: 300px;position:relative;top:20px;left:10px; background-color:lightgrey;">
		<div style="width:100px;height:30px;position:absolute;top:20px;left:10px; background-color:white;text-align: center;">Quantity
		<select name="qua">
        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </div>
        <!-- add cart -->
        <!--<div style="width:200px;height:30px;position:relative;top:90px;left:25px; background-color:#92C50D;"><a href="" style="text-decoration: none;color: black;">
      <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px; color:black;position: absolute;top: 3px;left: 3px;"></i><h3 style="position:relative;left:40px;top:5px;">Add to Cart</h3></a>
        </div>
        <!-- buy Now -->
        
        <!--deliver 
        <hr style="position:relative;top:100px;">
        <div style="width: 250px;height:80px;position:relative;top:100px;left:0px; 
        background-color:lightgrey;"><h3 style="position:relative;left:20px;top:2px;">Deliver To:</h3>
        <div style="width:200px;height:30px;position:relative;top:0px;left:20px; background-color: white;"><input type="text" name="Deliver" style="width:200px;height:30px;position:relative;top:0px;left:0px;border:none;"><p id ="demo" onclick="myFunction()"><i class="fa fa-chevron-circle-down" aria-hidden="true"  style="font-size: 25px; color:black;position:absolute;top:5px;right:5px;"></i></p></div>
        </div>
        <hr style="position:relative;top:100px;">
        </form> -->            
		</td>
	</tr>
</table>
</div>
</body>
</html>
<?php
}
?>