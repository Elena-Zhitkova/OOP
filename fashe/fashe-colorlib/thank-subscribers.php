<?php
    $title = 'ThankU';
    include('header.php');
?>

<section class="newproduct bgwhite p-t-45 p-b-105">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
					<?php 
					$db = mysqli_connect('localhost', 'root', '', '4u');
					mysqli_set_charset($db, 'utf8');

					$sql = "INSERT INTO subscribers (id, email) VALUE 
						(NULL, '{$_POST['email']}')
					";
					
					$result = mysqli_query($db, $sql);

					if( $result ){
						echo "Your email has been successfully added to the mailing list";
					}else{
						echo "An error occurred";
					}
					?>
			</h3>
		</div>
	</div>
</section>
<?php 
    include('footer.php');
?>