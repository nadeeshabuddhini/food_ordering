<?php 
session_start();
//dbConnection
$connect=mysqli_connect("localhost","root","","cart");
//addToCart
if(isset($_POST["add_to_cart"])){
	

	if(isset($_SESSION["shopping_cart"])){
		$item_array_id= array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"], $item_array_id)){
			$count=count($_SESSION["shopping_cart"]);
			$item_array=array(
						'item_id'=>$_GET["id"],
						'item_name'=>$_POST["hidden_name"],
						'item_price'=>$_POST["hidden_price"],
						'item_quantity'=>$_POST["quantity"]
		);
			$_SESSION["shopping_cart"][$count]=$item_array;
			
		}
		else{
		echo '<script>alert("Item Already Added")</script>';
		echo '<script>window.location="shcart.php"</script>';	
		}
	

	}
	else{

		$item_array=array(
						'item_id'=>$_GET["id"],
						'item_name'=>$_POST["hidden_name"],
						'item_price'=>$_POST["hidden_price"],
						'item_quantity'=>$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0]=$item_array;
	}

}

//removeItemInCart
if(isset($_GET["action"])){

	if($_GET["action"]=="delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"]==$_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shcart.php"</script>';	
			}
		}
	}
}

?>





<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/animate/animate.css" />
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style1.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">	
                <div class="container">
                    <div class="row">	
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            
                        </div>

                        <div class="col-md-4 col-sm-12">
                            	
                        </div>

                    </div>			
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    
                                    <a class="navbar-brand our_logo" href="#"><img src="" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                   
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->



        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                        <div class="col-md-12">
                            <div class="head_title text-center">
                                <h4>Delightful</h4>
                                <h3>Experience! Buy and enjoy with them.</h3>
                            </div>
<?php

$query="SELECT *FROM cartfd ORDER BY id ASC";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_array($result))
    {


?>
                            <div class="main_portfolio_content">
                                <div class="col-md-4 col-md-4  single_portfolio_text">
                                    <form method="POST" action="shcart.php?action=add&id=<?php echo $row["id"]; ?>">
                                    <img src="<?php echo $row["image"]; ?>" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6 class="food"><?php echo $row["food"]; ?></h6>
                                        <p class="food_price">$<?php echo $row["price"]; ?></p>
                                        <input type="text" name="quantity" class="form-control" value="1">
                
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["food"]; ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                        <input type="submit" name="add_to_cart"  class="btn btn-success" value=" Add to cart">
                                    </div>
                                    </form>
                                </div>
                               
                             <?php }}?>
                        </div>
                                
                                <div style="clear:both"></div>
    <br/><br>
    <h3 align="center"> Order Details</h3>
    <div class="table-responsive">
        <table class="table" >
            <tr>
                <td width="40">Item Name</td>
                <td width="10">Quantity</td>
                <td width="20">Price</td>
                <td width="15">Total</td>
                <td width="5">Action</td>
            </tr>
            /*totalCalculation*/
            <?php 
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $keys=>$values){
                
            ?>
            <tr>
                <td ><?php echo $values["item_name"]; ?></td>
                <td ><?php echo $values["item_quantity"]; ?></td>
                <td >$<?php echo $values["item_price"]; ?></td>
                <td ><?php echo number_format($values["item_quantity"]*$values["item_price"], 2);?> </td>
                <td ><a href="shcart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php 

                $total=$total+($values["item_quantity"]*$values["item_price"]);

                 }
            ?>
            
                
            

            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$<?php echo number_format($total, 2)?></td>
                <td></td>
            </tr>
            <?php
             }
            ?>
        </table>
</div>  
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        



        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright wow zoomIn" data-wow-duration="3s">
							<p>Made <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">SabareKolloKello</a>2015. All Rights Reserved</p>
						</div>
                    </div>
                </div>
            </div>
        </footer>
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>		


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="assets/js/wow/wow.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
