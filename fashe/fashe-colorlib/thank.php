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

					$sql = "INSERT INTO messages (id, fio, phone, email, comment) VALUE 
						(NULL, '{$_POST['name']}', '{$_POST['email']}', 
						'{$_POST['phone-number']}', '{$_POST['message']}')
					";
					
					$result = mysqli_query($db, $sql);

					if( $result ){
						echo "Данные успешно добавлены";
					}else{
						echo "Произошла ошибка";
					}
					?>
			</h3>
		</div>
	</div>
</section>
<?php 
    include('footer.php');
?>