<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../scripts/main.js"  navId="nav-menu"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/menustyle.css">
        <link rel="stylesheet" href="../styles/navbarstyle.css">
        <link rel="stylesheet" href="../styles/fontstyle.css">
		<title>MENU</title>
	</head>
	<body>	
		<div class="container">
			<div id="navigation" class="row navigation">
                <?php
                include_once 'nav.php';
                ?>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 left">
                    <div class="products">
                        <!-- render porducts here -->
                    </div>
                </div>
                <?php
                if(isset($_SESSION['username'])){?>
						<div class="col-md-12 col-sm-12 right">
                    <div class="cart">
                        <div class="cart-header">
                        <div class="column1">Item</div>
                        <div class="column2">Unit price</div>
                        <div class="column3">Units</div>
                    </div>
                    <div class="cart-items">
                        <!-- render cart items here -->
                    </div>
                    <div class="cart-footer">
                        <div class="total">
                            Total (0 items): Php 0
                        </div>
                        <div class="checkout">
                            Proceed to checkout
                        </div>
                    </div>
                </div> 
					<?php }
					else{  ?>
					<div class="col-md-12 col-sm-12 right">
                    </div> 
					<?php }
					?>

                    
                </div>
            </div>
		</div>
        
        <script src="../scripts/products.js"></script>
        <script src="../scripts/menuscript.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
