<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Item </title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet"> 
	<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/hmac-sha1.js"></script>
</head>

<body> 
<div id="citrusWallet" >
</div>
    <!-- Page Content -->
    <div class="container" style=" width:100%;text-align:center !important;">
        <div class="row" style="text-align:center !important;">
            <div class="col-md-4"></div>
			<div class="col-md-4">
				<div id="success" class="thumbnail">	
					<img class="img-responsive" src="images/payment_s.png" alt="">
					<h4 style="padding:30px 0;">Your Payment Was Completed,<br>Thank you for your Order.</h4>
					<a href="cart.html">
						<h4 style="display:inline;">
							<input type="submit"  class="btn btn-success" value="Continue Shopping ..." />	
						</h4>
					</a>
                </div>
				<div id="failed" class="thumbnail">	
					<img class="img-responsive" src="images/payment_f.png" alt="">
					<h4 style="padding:30px 0;">Sorry, order payment Failed,<br>Please try again.</h4>
					<a href="cart.html">
						<h4 style="display:inline;">
							<input type="submit"  class="btn btn-warning" value="Try again ..." />	
						</h4>
					</a>
                </div>
            </div>
			<div class="col-md-4"></div>
            
        </div>
    </div>
			<?php 
			  if($_SERVER['REQUEST_METHOD'] === 'POST')
			   { if($_POST['TxStatus'] === 'SUCCESS') {?>
				
				<script>
					document.getElementById('failed').remove();				
				</script>
			 <?php  }
			  else{ ?>
				<script>
					document.getElementById('success').remove();				
				</script>
			 <?php }
			   }
		?>
</body>
</html>