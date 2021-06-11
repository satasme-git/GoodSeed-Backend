@extends('Layout.navigation')
@section('body')

<style type="text/css">
		.aboutgds{
			color: #B1C710;
	font-family: 'Roboto Slab', serif;
	font-weight: 700;
	
	}
	body{
		/*font-family: 'Roboto Slab', serif;*/
		font-family:'Proxima Nova', system-ui, sans-serif;
	}
	.titalabout{
		background-image: url("img/about/kw-portfolio11.jpg");
		padding-top: 100px;
		padding-bottom: 100px;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		margin-top: -50px;

	}
	.titalsection > h1{
		text-transform: uppercase;
		margin-top: 30px;

	}
	.titelcontact > h1{
		text-align: center;
		
	}

	.titelcontact > h5{
		text-align: center;
		color: #B1C710;
		margin-top: 30px;
	}
	.getintouchsec{
		background: 

		linear-gradient(
      rgba(0,0,0,0.8), 
      rgba(0,0,0,0.8)
    ),url(img/contact/kw-portfolio8.jpg);
	}
	.form_contct{
		border: 5px solid white;
		margin-right:50px ;
		color: white;
		padding:50px 100px 50px 20px;
		margin: 100px 0px 100px 100px;

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
.gridcontentcont{
	display: grid;
	grid-template-columns: 5% 95%;
	padding-bottom: 0px;
	margin-bottom: 60px;
	margin-left: 10px;
	margin-right: 10px;
	border-bottom: 1px solid #D0D8E4;
}
input[type=text],.textarea{
	background: transparent;
	padding-left: 30px;
width: 95%;
  border: none;
  
	border-radius: 0px;

color: white;
}
input[type=text]:focus {
	outline: none;
	border-radius: 0px;
  background-color:transparent;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
}
.form_contct > h1{
	text-align: left;
	margin-bottom: 40px;
	width: 200 !important;
}
.lab{
	display: grid;
}
.addresslist{
	background-color:#B1C710 ;
}
.contaddress{
	color: white;
	display:grid;
	grid-template-columns: 15% 85%;
	padding-bottom: 15px;
}
.addresslist{
	margin: 150px 50px 150px 0px;
	padding: 70px;
}
.addresslist{
	margin-left: -80px;
}
</style>


<section class="titalabout">
	<div class="container titalsection">
		
			<h1>Contact us</h1>
		</div>
	</div>
	
</section>

<!-- map -->
<section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.932897237613!2d80.06771607501135!3d6.891605787084872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25347132bdfd1%3A0x968ca522537f0af9!2sHanwella!5e0!3m2!1sen!2slk!4v1622443932478!5m2!1sen!2slk" width="100%	" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<!-- end map -->

<!-- get in touch -->
<section>
	<div class="container">
		<div class="row titelcontact">
			<h5>OUR MAP</h5>
			<h1>Get in Touch with us Today</h1>
		</div>
	</div>
	<div class="container-fluid getintouchsec">
		<div class="row">
			<!-- form -->
			<div class="col-md-6">
				<div class="form_contct">
					<h1>Send Message</h1>
					<div class="gridcontentcont">
						<div class="lab"><label><i class="fa fa-user fa-lg"></i></label></div>
						<div class="inp"><input type="text" name="" placeholder="Name" id="name"></div>
					</div>

					<div class="gridcontentcont">
						<label><i class="fa fa-envelope fa-lg"></i></label>
						<input type="text" name="email" placeholder="email" id="name">
					</div>

					<div class="gridcontentcont">
						<label><i class="fa fa-phone fa-lg"></i></label>
						<input type="text" name="phone" placeholder="phone number" id="name">
					</div>
					<div class="gridcontentcont">
						<label><i class="fa fa-comments fa-lg"></i></label>
						<input type="text" name="message" placeholder="Message" id="name">
					</div>
					<div >
						<button type="button" class="btn defaultbtn">Submit</button>
					</div>


				</div>
			</div>
			<!-- /form -->
			
			<!-- card -->
			<div class="col-md-6">
				<div class="addresslist">
					<div class="contaddress">
						<div class="iconcont">
							<i class="fa fa-comments fa-3x"></i>
						</div>
						<div class="contdiscrip">
							<h5>Location</h5>
							<p>85455 Stonehill Lane Victoria 8555 AUS</p>
						</div>
					</div>
					<div class="contaddress">
						<div class="iconcont">
							<i class="fa fa-comments fa-3x"></i>
						</div>
						<div class="contdiscrip">
							<h5>Location</h5>
							<p>85455 Stonehill Lane Victoria 8555 AUS</p>
						</div>
					</div>

					<div class="contaddress">
						<div class="iconcont">
							<i class="fa fa-comments fa-3x"></i>
						</div>
						<div class="contdiscrip">
							<h5>Location</h5>
							<p>85455 Stonehill Lane Victoria 8555 AUS</p>
						</div>
					</div>

					<div class="contaddress">
						<div class="iconcont">
							<i class="fa fa-comments fa-3x"></i>
						</div>
						<div class="contdiscrip">
							<h5>Location</h5>
							<p>85455 Stonehill Lane Victoria 8555 AUS</p>
						</div>
					</div>


				</div>

			</div>
			<!-- /card -->

		</div>
	</div>
</section>
<!-- /get in touch -->

@endsection
