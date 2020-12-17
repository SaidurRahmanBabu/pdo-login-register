<?php require_once 'header.php'; ?>
<?php session_start(); ?>
<?php 
	if(!isset($_SESSION['user_name']))
		{
			echo '<h3 class="text-center text-danger font-weight-bold">You are not logged in. Login first!</h3>';
		}else{
?>
<div class="container">
	<div class="row">

		<div class="col-md-12 mt-5">
			<div class="welcome">
				<h3 class="text-center text-danger font-weight-bold logout_text"></h3>
				<h2 id="user" class="font-weight-bold text-uppercase">Welcome <span class="text-capitalize text-primary" id="user_name"><?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];} ?></span></h2>
				<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. A quaerat pariatur perferendis autem dolores vel quas nostrum corporis amet similique perspiciatis ea sit id quia sunt voluptas quidem nesciunt, totam inventore eius repellendus explicabo veniam maxime deleniti. Rem quidem doloremque quod natus quos quaerat optio ut! Laborum provident temporibus, hic?</p>
			</div>
		</div>

	</div>
</div>
<?php } ?>
<?php require_once 'footer.php'; ?>