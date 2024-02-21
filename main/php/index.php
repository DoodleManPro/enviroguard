<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./php.css">
	<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,800&display=swap" rel="stylesheet">
</head>
<body>

	<div class="container">

		<form action="login.php" method="post" class="glass">

			<h2>LOGIN</h2>



			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>


			<label>User name</label>
			<input type="text" name="uname" placeholder="User Name"><br>



			<label>Password</label>
			<input type="password" name="password" placeholder="Password"><br>



			<button type="submit">Login</button>

	</form>
	
	</div>





	<script type="text/javascript" src="./vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".glass"), {
            max: 5,
            speed: 20,
            glare: true,
            "max-glare": .3
        });

        VanillaTilt.init(document.querySelectorAll(".glass-heavy"), {
            max: 10,
            speed: 20,
            glare: true,
            "max-glare": .3
        });
    </script>
</body>
</html>