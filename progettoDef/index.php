<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		img {
	   	 height: 500px;
    	 
	   	 }
	   	 body {
	   	 	background-image: url('images/cabras.jpg');
	   	 	background-repeat: no-repeat;
	   	 	background-size: cover; 
	   	 }
	   	 nav {
	   	 	background-color: rgba(255,255,255,0.6);
	   	 	margin-bottom: 100px;

	   	 }
	   	 nav > a > img.logo {
	   	 	height: 100px;
	   	 }
	   	.navbarDropdown {
	   		background-color: rgba(255,255,255,0.6);
	   	}
} 
	    .sidebar {
	    	margin-left: 0px;
	    	background-color: rgba(0,0,0,0.2);
	    }
       .carousel {
       	margin-bottom: 100px;

       }

	   footer{background-color: rgba(255,255,255,0.6); padding: 25px;
	   }
       ul, li{list-style-type: none;
       }
       .list{margin-top: 40px;
       }

    .left{
	    width: 50px;
	    height: 20px;
	    background: #2f2f2f;
        white-space: nowrap; 
        transition: width 0.5s ;
        position: fixed;
        z-index: 9999; 
}
	.left ul{
		padding: 0;
		list-style-type: none;
		text-align: left;
	}
	.left li {
		width: auto;
		height: 20px;
		line-height: 80px;  
		padding-left: 18px;
	}
	.left li:hover {
		background: white; 
		opacity: 0.2;
	}

	.left:hover {
        width: 250px; 
        height: 20px;
    }  

	.left .item-menu {
	    height:20px;
	    overflow:hidden;
	    color:#fff;
	}  
	.left a{
		color: black;
	    text-decoration: none;
	    font-weight: bold;
	} 
	span.menu{
		padding-left: 5px;
	}
	.t_search {
	    color: black;
	    height: 35px;
	    margin-left: 5px;
	    width: 190px
	}

</style>
</head>

<body>


	<?php include 'nav.php'; ?>
   

	<div class="container">
  		<div class="row">
    		<div class="col-2">

    </div>

    <div class="col-8">
    	<?php include 'carousel.php'; ?>
    </div>
    
    <div class="col-2">
    	
  </div>
</div>
</div>
    
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
    
</body>
</html>