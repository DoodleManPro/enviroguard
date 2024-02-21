<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title> 
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,800&display=swap" rel="stylesheet">

</head>

<body>

     <section>
          <div class="intro glass">
               <h1 class="admin-hello">Hello, <?php echo $_SESSION['name']; ?></h1>
               <a href="logout.php">Logout</a>
          </div>


          <div class="carbon-calc">
               <h1>CARBON CALCULATOR</h1>


               <form action="">
                    <label for="elec-bill">Electricity Bill</label>
                    <input name="elec-bill" type="int" class="calc-input" id="el">

                    <label for="gas-bill">Gas Bill</label>
                    <input name="gas-bill" type="float" class="calc-input" id="gas">

                    <label for="oil-bill">Oil Bill</label>
                    <input name="oil-bill" type="text" class="calc-input" id="oil">

                    <label for="mil-bill">Yearly Mileage</label>
                    <input name="mil-bill" type="text" class="calc-input" id="mil">

                    <label for="-4hr-bill">Less than 4hr flight</label>
                    <input name="-4hr-bill" type="text" class="calc-input" id="-4">

                    <label for="+4hr-bill">More than 4hr flight</label>
                    <input name="+4hr-bill" type="text" class="calc-input" id="+4">

                    <a action="woop" href="" class="submit">Submit</a>
               </form>
          </div>

          <div class="carbon-calc-result glass">
               <h2>Your average carbon footprint is: </h2>
               <h1>24,008</h1>

               <p>Above average carbon footprint. <br><br>
                    To maintain a sustainable level, try recycling newspapers,
                    aluminium tin cans, and other resources. Try using more 
                    public transport and you'll get there! 
               </p>
          </div>

     </section>




     <script type="text/javascript" src="./vanilla-tilt.js"></script>
    <script>

        VanillaTilt.init(document.querySelectorAll(".glass"), {
            max: 1,
            speed: 20,
            glare: true,
            "max-glare": .3
        });
    </script>

    <script src="./app.js"></script>




</body>
</html>







<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>