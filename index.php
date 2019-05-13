<!- One long page or different page?->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="An Online Portfolio by Jake Ward">
<meta name="keywords" content="Portfolio, Online">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Jake Ward</title>
<!--MAIN CSS-->
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet" type="text/css">
<style>
       .js [data-entrance] { visibility: hidden; }
</style>
</head>

<body>
		
	<!--accessibility buttons-->
	<div class="access">
		<button id="btn-decrease">A-</button>
		<button id="btn-orig">A</button>
		<button id="btn-increase">A+</button>
	</div>
		
		MY PORTFOLIO
	<!-- <header>	
        Jake Ward
        Computer Science with Software Develop @ Liverpool Uni
    </header> -->
		<!--Nav-->
        <nav>
        		<ul>	
                    <li><a href = "#top" class = "nav-link">Top</a></li> |
                    <li><a href = "#about" class = "nav-link">About Me</a></li> |
                    <li><a href = "#links" class = "nav-link">Links</a></li> | 
                    <li><a href = "#contact" class = "nav-link">Contact Me</a></li>
                </ul>
        </nav>

        <div class="areaOne" id = "top">
        
            <!-- particles.js container --> 
            <div id="particles-js"></div>
            <!-- scripts -->
            <script src="js/particles.js"></script>
            <script src="js/app.js"></script>

            <div class="centre">

                <h1>Jake Ward</h1>
                <h2>Placeholder Text</h2>
        
        </div>

        <div class="areaTwo" id = "about">
   
        Profile
        
        </div>

        <div class="areaThree" id = "links">
        
        
        </div>

        <div class="areaFour" id = "contact">
        
        
        </div>

    <?php include 'includes/footer.php';
    //this pulls the php file from the folder.
    ?>
	
	
</body>

	
</html>