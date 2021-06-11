<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Seeds - @yield('title')</title>
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="/your-path-to-fontawesome/js/brands.js"></script>
    <script defer src="/your-path-to-fontawesome/js/solid.js"></script>
    <script defer src="/your-path-to-fontawesome/js/fontawesome.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <style type="text/css">
      .headertopbar{
    background-color: #2B2B2B;
   color: white;
}

.headercontainer{
    background-color: #2B2B2B;
    color: white;
}

.navbar-light .navbar-nav .nav-link{
    color: white !important;
    padding-right: 20px;
    padding-left: 20px;
    font-weight: 500;
     font-family: 'Roboto Slab', serif;
      text-transform: uppercase;
      text-align: left;
}
.emailheder{
  padding-top: 10px;
  padding-bottom: 10px;
  display: grid;
    grid-template-columns: 20% 80%;
    border-right: 1px solid #606060;
    border-left: 1px solid #606060;
    text-align: center;
    
}
.serviceheder{
  padding-top: 10px;
  padding-bottom: 10px;
  display: grid;
    grid-template-columns: 20% 80%;
    border-right: 1px solid #606060;
    
    text-align: center;
}
.midlcont{
  display: grid;
    grid-template-columns: 20% 80%;
}

.emailpara{
  text-align: left;
  font-weight: 400 !important;
  font-style: Roboto;
}
.fa-history,.fa-envelope-o,.fa-phone{
  color: #B1C710;
}
.socalmediaico >.fa {
  padding:10px 20px 10px 20px;
 
  text-align: center;
  text-decoration: none;
  
}
.socalmediaico{
    border-right: 1px solid #606060;
  border-left: 1px solid #606060;
}
.socalmediaico > .fa-facebook,.fa-youtube,.fa-instagram{
  color: white;
}
.socalmediaico > .fa-facebook:hover{
  color: #B1C710;
}
.socalmediaico > .fa-youtube:hover{
  color: #B1C710;
}
.socalmediaico > .fa-instagram:hover{
  color: #B1C710;
}
.middleheader{
  padding-top: 30px;
  padding-bottom: 30px;
}
.fa-headphones{
  color: white;
}
.logosec{
  text-align: center;
  padding-bottom: 30px;
}

.hedertxt1{
  font-family: 'Roboto Slab', serif;
  font-weight: 700;
  font-size: 18px;
}
.hedertxt2{
  font-family: 'Roboto Slab', serif;
  font-weight: 500;
  font-size: 16px;
}
.svgheader{
  width: 50px;
  color: white;

}
.navmobile{
  background-color: #B1C710;
}
.mobilenbhe{
    padding-top: 10px;
}
.hedertxt3{
  margin-top: 50px;
  font-size: 20px;
  font-family: 'Roboto Slab', serif;
  font-weight: 500;

}
.navigation>ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.navlable {
  display: inline;
  padding: 20px;
}
header{
  position: relative;
  z-index: 999;
}
.form-control{
  display: inline-block;
  width: 50%;
}
.searchbar{
  background-color: #B1C903;
  padding-top:10px;
  float: right;
}
/* [type=submit]{
  background-color: #2B2B2B;
  color: white;
  text-transform: uppercase;
  font-family: 'Roboto Slab', serif;
  border-radius: 30px;
}
 [type=submit]:hover{
  background-color:white ;
  color:  #2B2B2B;
 }*/

 .search {
  width: 100%;
  position: relative;
  display: flex;
/*  border: 1px solid rgba(244,250,253,0.1);*/
  border-radius: 5px;
}

.searchTerm {
  width: 100%;
  color: rgba(f, f, f, 0.2);
  border-right: none;
background-color: rgba(0, 0, 0, 0.1);

  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color:black;

}

.searchButton {
  width: 50px;
  height: 36px;
  border: 1px solid #2B2B2B;
  background: #2B2B2B;
  text-align: center;
  color: #fff;
 /* border-radius: 0 5px 5px 0;*/
  cursor: pointer;
  font-size: 20px;
}
.mobilemenuico{
  padding-left: 0px;
}
/*media quarys*/

/*header chage*/
@media only screen and (max-width: 768px) {
  .desktophead {
    display: none;
  }
  .mobilehead{
    display: block !important;
  }
  .contactform{
    display: none;
  }
}




/*header chage*/

/*media quarys*/


/*mobile head*/
.mobilehead{
  display: none;
  background:#2B2B2B ;
  padding-top: 10px;
  padding-bottom: 10px;
}
.mobilelogo>img{
  margin-left: -30px;
}
    </style>

</head>

<body>


    <!-- mobile header -->

     <header class="container-fluid mobilehead">
<div class="row">

<div class="col-10 mobilelogo">
  <img src="img/logo.png" width="50%;">
</div>

  <div class="col-2 mobilemenuico">
<a class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <img class="svgheader" src="svg/menu.svg">
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">GOOD SEED</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

<button class="btn" ><a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a></button>
        


         <a class="nav-link" href="#">Our Products</a>


         <a class="nav-link" href="#">Our Services</a>

    
    <div class="dropdown mt-3">
      <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Blog
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">BALANCE NUTRITIONS</a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="#">PHYSICAL ACTIVITIES</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">QUALITY SLEEP</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">MANAGING STRESS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">ELIMINATION OF TOXINS</a>
      </ul>
    </div>
  </div>
</div>
 </div>

</div>
</header>

<!-- /mobile header -->

  <!-- desktop header -->
    <header class="desktophead">
      <!-- top header bar-->

        <div class="container-fluid headertopbar">
           <div class="row">
              <div class="col-md-1">
                 
              </div>
              <div class="col-md-2 emailheder">
                <div class="emailgrid"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="emailgrid"><h6 class="emailpara">nfo@goodseeds.com</h6></div>
              </div>
              <div class="col-md-2 serviceheder">
                <div class="emailgrid"><i class="fa fa-history"></i></div>
                <div class="emailgrid"><h6 class="emailpara">Mon - Sat 8.00 - 18.00</h6></div>
              </div>
              <div class="col-md-4">
                 
              </div>
              <div class="col-md-2 socalmediaico">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-youtube"></a>
                  <a href="#" class="fa fa-instagram"></a>
              </div>
              <div class="col-md-1">
                 
              </div>
        </div>
      </div>

      <!-- top header bar-->

      <!-- middle row -->

      <div class="container middleheader">
        <div class="row">
          <!-- left -->
          <div class="col-md-3 midlcont">
            <div class="middlelr"><i class="fa fa-phone fa-3x" aria-hidden="true"></i></div>
            <div class="middlelr"><spain class="hedertxt1">INQURIES</spain> <br><spain class="hedertxt2">(+94)772 674 437</spain></div>

            
          </div>
          <!-- /left -->
          <!-- logo -->
          <div class="col-md-6 logosec">
            <img src="img/logo.png">

          </div>
          <!-- /logo -->
          <!-- right -->
          <div class="col-md-3 midlcont">
            <div class="middlelr">
              <img class="svgheader" src="{{asset('svg/placeholder.svg')}}">
            </div>
            <div class="middlelr"><spain class="hedertxt1">ADDRESS</spain> <br><spain class="hedertxt2">No.62/4,Pieris Avenue, Kalubowila, Colombo</spain></div>

            
          </div>
        <!-- /right -->
      </div>
      <!-- middle row -->



  <!-- nav links -->
  <div class="container headercontainer">
    <div class="row">

      <div class="col-md-9">
<!--       <div class=" navbar-light navbar-nav nav-link"> -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-nav nav-link">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/about">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">Our Products</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">Our Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Blog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/balancenutritions">BALANCE NUTRITIONS</a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="/physicalactivities">PHYSICAL ACTIVITIES</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/qualitysleep">QUALITY SLEEP</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/managingstress">MANAGING STRESS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/eliminationoftoxins">ELIMINATION OF TOXINS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">contact us</a>
      </li>
    </ul>
    </nav>
    </div>
    <div class="col-md-3 searchbar">
<!--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

       <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
    </div>
  </div>

<!-- <nav class="navbar navbar-expand-lg  "> -->
  

 <!--  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/helthui/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/helthui/about-us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
    </ul>
    
  </div>
</nav>

  </div>

 
  <div class="col-md-3 midlcont navmobile">

       <div class="mobilenbhe">
            <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
  </div> -->
</div>




  <!-- end nav links -->

    </header>


 @section('body')

      @show


<!-- footer -->
<style type="text/css">
	.footer{
		padding-top: 50px;
		position: relative;
		z-index: 999;
		background: #202020;
		color: white;
		padding-left: 30px;
		padding-right: 30px;

	}
	body{
	/*font-family: 'Roboto Slab', serif;*/
	font-family:'Proxima Nova', system-ui, sans-serif;

}
body > p{
	line-height: 25px;
}
	.flogo{
		padding-left: auto;
		padding-right: auto;
	}
	.ffsec > p{
		margin-top: 10px;
		font-size: 18px;

		text-align: justify;
	}
	.ffsec{
		margin-top: 10px;
		padding-left: 20px;
		padding-right: 20px;
	}
	.ftsec{
		margin-top: 10px;
		margin-bottom: 20px;
		padding-left: 150px;
		padding-right: 20px;
	}
	.fssec{
		margin-top: 10px;
		padding-left: 150px;
		padding-right: 20px;
	}
	.socialf{
		margin-top: 20px;
	}
	.fssec > ul{
		margin-top: 10px;
		list-style: none;
		margin-left: -20px;
		font-size: 18px;
		font-weight: 500;

	}
	.fssec > ul>li{
		padding-top: 10px;
	}
	.fssec > ul >ul{
		list-style: none;
		font-weight: 400;
		font-size: 17px;

	}
	.fssec > ul >ul>li{
		padding-top: 10px;
	}
	a{
		text-decoration: none;
		color: white;

	}
	a:hover{
		color: #B1C903;

	}



	.fssec > h3{
		color: #B1C903;
	}
	.ftsec >h3{
		color: #B1C903;


	}
	.ftsec>h4{
		margin-left: 15px;
	}
	.ftsec>ul{
		list-style: none;
		font-size: 18px;
	}
	.download>img{
		width: 100%;
	}
	.footerline{
		color: white;
		padding: 10px 0px 10px 0px;
		background: black;
	}
	.footiconlist{
		margin-left: 80%;
	}

	/*@media*/


@media only screen and (max-width: 768px) {
	  .fssec {
  	margin-top: 30px;
    padding-left:20px;
     
  }
  .ftsec{
		margin-top: 30px;
		
		padding-left: 20px;
		
	}
	.footiconlist{
		margin-left: 0%;
		text-align: center;
	}
}
</style>


<section class="footer">
	<div class="container-fluid">
		<div class="row">
	<div class="col-md-4 ffsec">
		<img src="img/logo.png" class="flogo">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. </p>
		
			<h4>Download Now</h4>
			<div class="row">
				<div class="col-6 download">
					<img src="img/footer/and.jpg">
				</div>
				<div class="col-6 download">
					<img src="img/footer/ios.jpg">
					
				</div>

			
		</div>

	</div>
	<div class="col-md-4 fssec">
		<h3>QUICK LINKS</h3>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Services</a></li>
			<li><a href="#">Blog</a></li>
				<ul>
					<li><a href="#">Balance Nutritions</a></li>
					<li><a href="#">Physical Activities</a></li>
					<li><a href="#">Quality Sleep</a></li>
					<li><a href="#">Managing Stress</a></li>
					<li><a href="#">Elimination of Toxinse</a></li>
				</ul>
			<li><a href="#">Contact Us</a></li>

		</ul>
	</div>	
	<div class="col-md-4 ftsec">
		<h3>CONTACTS</h3>
		<h4>Address</h4>
		<ul>
			<li>
				No 242,<br>
				Waga South,<br>
				Thummodara.
			</li>
		</ul>
		<h4>Call us</h4>
		<ul>
			<li>
				(+94) 112 3 456 789<br>
				(+94) 112 3 456 789


			</li>
		</ul>

			<h4>Email us</h4>
		<ul>
			<li>
				info@goodseeds.com<br>
			</li>
	</div>	
</div>
</div>
</section>
<section class="footerline">
	<div class="container">
		<div class="row">
			<div class="col-md-8 copyright">
				<h6>Copyright @ 2021 goodseed.com</h6>
			</div>
			<div class="col-md-4">
			<div class="row footiconlist">
			<div class="col-2 footico">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</div>
			<div class="col-2 footico">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="col-2 footico">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</div>

			</div>
			</div>

		</div>
	</div>
</section>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>






