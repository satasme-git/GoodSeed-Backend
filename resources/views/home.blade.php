@extends('Layout.navigation')
@section('body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<style type="text/css">


.homecontent{
	margin-top: -60px;
	z-index: -10;
	
}

.carousel img {
    top: 0;
    left: 0;
    min-width: 100%;
    width: auto;
}
.dieats:last-child {

	border-right: 1px solid #E5E5E5;

}
.dieats {
	position: relative;
	z-index: 20;
	padding: 0px;
	background-color: white;
	/*padding: 50px;*/
	margin-top: -100px;
	text-align: center;
	border-left: 1px solid #E5E5E5;
			

}
.dieats > h5{

	font-size: 15px;
	padding-top: 10px;
	text-align: center;
	text-transform: uppercase;
	border-top: 1px solid #B1C710;
     font-family: 'Roboto Slab', serif;
     margin-bottom: 10px;



}
.dieats > h6{
	padding-top: 20px
     font-family: 'Roboto Slab', serif;

}
.aboutuscont{
	padding-top: 150px;
	background-color: #F9F9F8;
	
	padding-bottom: 50px;
}
.upperboxdiv{
	-webkit-box-shadow: 0px 0px 20px 6px rgba(171,171,171,1);
-moz-box-shadow: 0px 0px 20px 6px rgba(171,171,171,1);
box-shadow: 0px 0px 20px 6px rgba(171,171,171,1);
margin-top: -150px;
}
.abouthome{
	color: #B1C710;
     font-family: 'Roboto Slab', serif;

}
.sboutwc{
	color: black;
     font-family: 'Roboto Slab', serif;

}
.aboutgds{
	color: #B1C710;
	font-family: 'Roboto Slab', serif;
	font-weight: 700;
	
 
}
.abouth{
	padding-left: 50px;
}
.aboutpara{
	text-align: justify;
	font-family: 'Roboto Slab', serif;
	color: #6C6C6C;
	line-height: 25px;
	font-size: 15px;
	font-weight: 400;


}
body{
	/*font-family: 'Roboto Slab', serif;*/
	font-family:'Proxima Nova', system-ui, sans-serif;

}
body > p{
	line-height: 25px;
}
.defaultbtn{
	background-color: #B1C710;
	color: white;
	text-transform: uppercase;
	font-family: 'Roboto Slab', serif;
	border-radius: 30px;
}
.defaultbtn:hover{
	background-color: #333333;
	color: white;
}
.whychoose{
	background-color: #1A1F21;
}
.contctcform{
	padding: 50px;
	margin-top: 150px;
	margin-bottom: 150px;
-webkit-box-shadow: -11px 7px 66px -23px rgba(0,0,0,0.75);
-moz-box-shadow: -11px 7px 66px -23px rgba(0,0,0,0.75);
box-shadow: -11px 7px 66px -23px rgba(0,0,0,0.75);
margin-right: -150px;
margin-left: 200px;
position: relative;
z-index: 100;
background-color: white;
}
.gridcontact{
	display: grid;
  	grid-template-columns: auto auto;
}
input[type=text],.textarea{

  border: none;
  
	border-radius: 0px;


}
input[type=text]:focus {
	outline: none;
	border-radius: 0px;
  background-color: #E8F0FE;
}
textarea {
	border: none;
	width: 100%;
}
textarea:focus {
	outline: none;
}
.gridcontent{
	padding-bottom: 0px;
	margin-bottom: 25px;
	margin-left: 10px;
	margin-right: 10px;
	border-bottom: 1px solid #D0D8E4;
}
.fulltext{
	padding-bottom: 0px;
	margin-bottom: 20px;
	margin-left: 10px;
	margin-right: 10px;
	border-bottom: 1px solid #D0D8E4;
}
.fa-user-o,.fa-clock-o,.fa-mobile{
	color: #B1C710;
}

.conform{
	background-image: url("img/homepage/woman-image.png");
	background-repeat: no-repeat;
	background-position-y:200px; 

}
.whychoose{
	padding: 50px 20px 30px 160px;
}
.whychoose > h6{
	color: white;
}
.whychoose > h1{
	color: white;
}
.servicessec{
	background: 

	  /* top, transparent red */ 
    linear-gradient(
      rgba(177,201,3,0.8), 
      rgba(177,201,3,0.8)
    ),url("img/homepage/rowbg1.png");
	background-repeat: no-repeat;
	padding-top:80px;
	padding-bottom: 300px;
	size: cover;
	background-color:#b1c903;
	color: white;


	 
}

.servicessec > h1{
	text-align: center;
	padding-bottom: 50px;
}
.servicecard{
	text-align: center;
	border-right:1px solid white;

}
.servicecard:last-child{
	
	border:none;
	
}
.servicecard > button{
	background-color: white;
	color: black;
}
.testamonialhome{
	background:url("img/homepage/rowbg2.jpg");
	padding-top: 50px;
	padding-bottom: 50px;
	background-repeat: no-repeat;
	size: cover;
	margin-top: -200px;
	


}
.carouseltest {
	text-align: center;

}
/*testa*/
.demo{
	opacity: 100%; 
}
#testimonial-slider{
    padding: 50px 20px 35px 20px;
   
    text-align: center;
    box-shadow: 0 0 115px 19px rgba(236, 236, 236, 1);
}
.testimonial .description{
    font-size: 14px;
    color: #777;
    line-height: 26px;
    text-indent: 30px;
    position: relative;
}
.testimonial .description:before{
    content: "\f10d";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 0;
    left: -15px;
}
.testimonial .title{
    font-size: 24px;
    font-weight: bold;
    color: #363636;
    text-transform: capitalize;
    margin: 0;
}
.testimonial .post{
    display: block;
    font-size: 15px;
    color: #363636;
}
.owl-buttons{
    width: 100%;
    height: 40px;
    position: absolute;
    bottom: 40%;
    left: 0;
}
.owl-prev,
.owl-next{
    position: absolute;
    left: 0;
    transition: all 0.4s ease-in-out 0s;
}
.owl-next{
    left: auto;
    right: 0;
}
.owl-buttons .owl-prev:before,
.owl-buttons .owl-next:before{
    content: "\f104";
    font-family: "Font Awesome 4 Free";
    font-weight: 900;
    font-size: 60px;
    font-weight: 900;
    color: #cacaca;
    line-height: 20px;
    opacity: 0.8;
}
.owl-buttons .owl-next:before{
    content: "\f105";
}
.owl-buttons .owl-prev:hover:before,
.owl-buttons .owl-next:hover:before{
    opacity: 1;
}
.owl-theme .owl-controls .owl-buttons div{
    background: transparent;
}
.owl-theme .owl-controls{
    margin-top: 40px;
}
.owl-theme .owl-controls .owl-page span{
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 4px solid #ccc;

    transition: all 0.3s ease-in-out 0s;
}
.owl-theme .owl-controls.clickable .owl-page:hover span{
    opacity: 0.5;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls .owl-page.active:hover span{
    border-color: #d133ff;
    opacity: 1;
}
.inpufild{
	padding-bottom: 20px;	
}
.homeimglist{
		width: 100%;
	}
@media only screen and (max-width: 479px){
    .owl-buttons{ bottom: 30%; }
}
.indimg{

    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.iconindexset{
	margin-top: 60px;
}
.atmobilecontact{
	display: none;
	padding: 50px;
}
.atmobilecontact{
	-webkit-box-shadow: -11px 7px 66px -23px rgba(0,0,0,0.75);
-moz-box-shadow: -11px 7px 66px -23px rgba(0,0,0,0.75);
box-shadow: -11px 7px 66px -23px rgba(0,0,0,0.75);
}

.inpufild>input{
	width: 100%;
	border-bottom: 1px solid #D0D8E4;

}
.inpufild>textarea{
		border-bottom: 1px solid #D0D8E4;

} 
.whatwedomobile{
	background-color:#2B2B2B ;
	color: white;
	padding-top: 30px;
	padding-bottom: 30px;
}
/*@media*/
@media only screen and (max-width: 768px) {
	.contctcform{
		margin-left: 0px;
		padding: 0px;
		margin-right: 0px;
		display: none;
	}
	.atmobilecontact{
		display: block;
	}
	.abouth{
		margin-top: 30px;
		margin-bottom: 20px;
		padding-left:0px;
		padding-left: 15px;
	}
	.servicecard{
		margin-top: 30px;
	}
	.homecontent{
		margin-top: 0px;
	}
	.aboutuscont{
		margin-top: 100px;
	}
	.dieats{
		padding-bottom: 100px;

	}
	
}
/*@media*/

</style>

<script type="text/javascript">
	
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});
</script>

<!-- home -->
<section class="homecontent">
	<!-- <div class="row slider"> -->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/sliders/bnner.png')}}" alt="First slide">
  <div class="carousel-caption d-none d-md-block">
    <button class="btn"></button>
  </div>
</div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/sliders/banner-image21.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/sliders/banner-image41.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>








</section> 

<!-- dieats container -->
<section class="aboutuscont">
<div class="container upperboxdiv">
<div class="row">
	<!-- card1 -->
	<div class="col-md-3 dieats">
	<img src="img/homepage/1.png" class="homeimglist">
	<h5>Human Health</h5>
	

	
	</div>


	<!-- card2 -->

	<div class="col-md-3 dieats">
		<img src="img/homepage/4.png" class="homeimglist">
		<h5>Wealth management</h5>
		
	</div>
	<!-- card3 -->

	<div class="col-md-3 dieats">
		<img src="img/homepage/2.png" class="homeimglist">
		<h5>Poverty</h5>
		
	</div>
	<!-- card4 -->

	<div class="col-md-3 dieats">
		<img src="img/homepage/3.png" class="homeimglist">
		<h5>Environment</h5>
		
	</div>

</div>	
</div>

<!-- icon set -->
<div class="container iconindexset">
	<div class="row">

		<div class="col-lg">
              <img class="svgheader" src="svg/index/3.svg" class="indimg">
              <h6>Most popular symptom assessment app</h6>
			
		</div>	

		
		<div class="col-lg ">
              <img class="svgheader" src="svg/index/1.svg" class="indimg">
              <h6>Optimized with human doctors</h6>
			
		</div>
		<div class="col-lg">
              <img class="svgheader" src="svg/index/2.svg" class="indimg">
				<h6>Medical guidance in your language</h6>
		</div>

		<div class="col-lg">
              <img class="svgheader" src="svg/index/4.svg" class="indimg">
				<h6>Supporting pandemic responses</h6>
		</div>
				<div class="col-lg">
              <img class="svgheader" src="svg/index/5.svg" class="indimg">
              <h6>Most comprehensive condition coverage</h6>
			
		</div>

	</div>
</div>

<!-- about us -->

<div class="container" style="padding-top: 100px;">
	<div class="row">
<div class="col-md-6">
	<iframe width="100%" height="380" src="https://www.youtube.com/embed/bvLvExUxlNE?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<!-- <img src="img/sliders/image1.png"> -->
</div>
<div class="col-md-6 abouth">

	<h1 class="sboutwc">Welcome to <br><span class="aboutgds">Good Seeds</span></h1>
	<p class="aboutpara">“Good seeds” is a lifestyle solutions provider for the modern humanitarian problems. The main focus of GOOD
SEEDS is to sow good habits, in to the hearts of people from their young age to change lifestyles and build healthy,
wealthy, joyful lives and create a new generation with good habits. Therefore, we have identified a few modern
problems and have initiated prevention steps to STOP or MINIMIZE the suffering been the victims of them.</p>
<button type="button" class="btn defaultbtn">More about</button>
	
</div>
</div>
</div>
</section>


<!-- contact -->
<section class="contactform">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-6 conform">

			<div class="contctcform">
				<h1 style="text-align: center; ">Make an <span class="aboutgds">Appointment</span></h1>
				<p style="text-align: center; padding-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt u</p>
				<div class="gridcontact">
					<div class="gridcontent">
					<tr>
						<td><i class="fa fa-user-o " aria-hidden="true"></i></td>
						<td><input type="text" name="" placeholder="Name"></td>
					</tr>
				</div>
						
					<div class="gridcontent">
					<tr>
						<td><i class="fa fa-mobile fa-x" aria-hidden="true"></i></td>
						<td><input type="text" name="" placeholder="Mobile Number"></td>
					</tr>
					</div>
				<div class="gridcontent">
				<tr>
						<td><i class="fa fa-envelope-o" aria-hidden="true"></i></td>
						<td><input type="text" name="" placeholder="Email Address"></td>
					</tr>
					</div>

					<div class="gridcontent">
					<tr>
						<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
						<td><input type="text" name="" placeholder="Date"></td>
					</tr>
					</div>				


				</div>
				<div class="fulltext">
					<tr>
						
						<td><textarea type="textarea"  name="" placeholder="Message"></textarea></td>
					</tr> 

					
					</div>
				<button type="button" class="btn defaultbtn">Submit</button>
			</div>
		</div>

		<div class="col-md-6 whychoose">
			<h6>What We Do</h6>
			<h1>Why <span class="aboutgds">Choose</span> Us</h1>
		</div>
		</div>
	</div>
</section>

<!-- /contsct -->

<!-- =============================mobile contact============================== -->
<section class="whatwedomobile">
	<div class="container">

		<h6>What We Do</h6>
		<h1>Why <span class="aboutgds">Choose</span> Us</h1>
		
	</div>
</section>



<div class="container atmobilecontact">
	<div class="row mobilecontainer">
		<h1 style="text-align: center; ">Make an <span class="aboutgds">Appointment</span></h1>
				<p style="text-align: center; padding-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt u</p>
		<div class="col-1"><i class="fa fa-user-o " aria-hidden="true"></i></div>
		<div class="col-11 inpufild"><input type="text" name="" placeholder="Name"></div>

		<div class="col-1"><i class="fa fa-mobile " aria-hidden="true"></i></div>
		<div class="col-11 inpufild"><input type="text" name="" placeholder="Phone Number"></div>

		<div class="col-1"><i class="fa fa-envelope-o " aria-hidden="true"></i></div>
		<div class="col-11 inpufild"><input type="text" name="" placeholder="Email Address"></div>

		<div class="col-1"><i class="fa fa-clock-o " aria-hidden="true"></i></div>
		<div class="col-11 inpufild"><input type="text" name="" placeholder="Date"></div>
		<div class="inpufild"><textarea type="textarea"  name="" placeholder="Message"></textarea></div>
		
	</div>
</div>
<!-- =============================mobile contact============================== -->


<!-- Services -->

<section class="servicessec">
	<h1>Our Services</h1>
	<div class="container">
		
		<div class="row">
		<div class="col-md-3 servicecard">
			<h5>Follow The Regime</h5>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				<button type="button" class="btn defaultbtn">View More</button>


		</div>
				<div class="col-md-3 servicecard">

			<h5>Follow The Regime</h5>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				<button type="button" class="btn defaultbtn">View More</button>


		</div>
				<div class="col-md-3 servicecard">
			<h5>Follow The Regime</h5>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				<button type="button" class="btn defaultbtn">View More</button>


		</div>
				<div class="col-md-3 servicecard">
			<h5>Follow The Regime</h5>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
				<button type="button" class="btn defaultbtn">View More</button>


		</div>
		</div>
		</div>
	</div>
</section>


<!-- testimonials -->
<div class="container testamonialhome">
	<div class="row">
<div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 ">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                        </p>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
 
                    <div class="testimonial">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
 
                    <div class="testimonial">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                        </p>
                        <h3 class="title">Miranda Joy</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
	
</div>





@endsection
