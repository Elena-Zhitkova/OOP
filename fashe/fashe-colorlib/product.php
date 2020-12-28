<?php
	session_start();
    $title = 'Shop';
    include('product-header.php');
	$flag_enter = -1;
	if(!empty($_SESSION['login']) and !empty($_SESSION['id']) and 1 == $_SESSION['access']) $flag_enter = 1;
	if(!empty($_SESSION['login']) and !empty($_SESSION['id']) and 0 == $_SESSION['access']) $flag_enter = 0;
	if(isset($_GET['id']))
	{
		$_SESSION['cart_items'][]=$_GET['id'];
	}
	
?>
<!-- Product -->
<div class="row">	
			
		<?php 
			$sql = "SELECT * FROM warehouse";

			$result = mysqli_query($db, $sql);
			
			while( $row = mysqli_fetch_assoc($result)){
				echo "<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'>
				<div class='block2'>
				<div class='block2-img wrap-pic-w of-hidden pos-relative '>
					<img src='{$row['img']}' alt='IMG-PRODUCT'>

					<div class='block2-overlay trans-0-4'>
						<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
							<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
							<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
						</a>

						<div class='block2-btn-addcart w-size1 trans-0-4'>
							<!-- Button -->
							<a class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4' href='product.php?id={$row['id']}'>
								add to Cart
							</a>						
						</div>
					</div>
				</div>

				<div class='block2-txt p-t-20'>
					<a href='product-detail.php?id={$row['id']}' class='block2-name dis-block s-text3 p-b-5'>
						{$row['name']}
					</a>

					<span class='block2-price m-text6 p-r-5'>
						$ {$row['price']}
					</span>
				</div>
			</div>
			</div>";    
			}
			?>
									
	

</div>
<?php 
    include('product-footer.php');
?>
					