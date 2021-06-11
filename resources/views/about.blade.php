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

	}

	.aboutcont > h3{
		color: white;
		background-color: #B1C710;
		text-align: center;
		padding-bottom: 20px;
		padding-top: 20px;
		margin: 0px;

	}
	.aboutcont > img{
		width: 100%;
	}
	.contentbox{
		padding: 70px 0px 0px 50px;
	}
	.contentbox > h5{
		color: #B1C710;
	}
	.contentbox > p{
		line-height: 25px;
		text-align: justify;
	}
	/*countdown*/
.timer{
		text-align: center;
	}
	.countdown > h5{
		text-align: center;
		font-size: 15px;
	}    
	.countdown{
		border-left: 1px solid white;	
	}
	.countdown:nth-child(2){
		border:none;	
	}
	.countersection{
		background: 

	  /* top, transparent red */ 
    linear-gradient(
      rgba(177,201,3,0.8), 
      rgba(177,201,3,0.8)
    ),url("img/homepage/rowbg1.png");
    padding-top: 100px;
    padding-bottom: 100px;
    color: white;
    
	}

.teamintro{
	background: 

	  /* top, transparent red */ 
    linear-gradient(
      rgba(0,0,0,0.5), 
      rgba(0,0,0,0.5)
    ),url("img/about/rowbg4.jpg");
    height: auto;
    background-repeat: no-repeat;
    padding: 50px 30px 50px 30px;
    background-size: cover;

}
.teamintro > h1{
	color: white;
	padding-left: 20px;
}
.teamintro > button{
	margin: 20px 0px 0px 20px;
}
.defaultbtn{
	background-color: #B1C710;
	color: white;
	text-transform: uppercase;
	font-family: 'Roboto Slab', serif;
	border-radius: 30px;
}
.teamintro > p{
	color: white;
	margin-left: 30px;
}
.defaultbtn:hover{
	background-color: #333333;
	color: white;
}
.team-memb > img{
	width: 100%;
}
.team-memb{
	padding: 0px;
}
</style>
<script type="text/javascript">
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $(document).on( 'scroll', function(){
    $('.timer').each(count).isOnScreen(); 
  });
   
  
function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});


// check if element visible in viewport
$.fn.isOnScreen = function(){
    var win = $(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    
};
</script>


<section class="titalabout">
	<div class="container titalsection">
		
			<h1>About us</h1>
		</div>
	</div>
	
</section>

<!--about content -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4 aboutcont">
				<h3>We Are Good Seeds</h3>
				<img src="img/about/columbg4.jpg">
			</div>
			<div class="col-md-8 contentbox">
				<h5>What We Do</h5>
				<h1>About <span class="aboutgds">Good Seeds</span></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.LOREM
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.LOREM</p>
			</div>
		</div>
	</div>
</section>

<!-- counter -->
<section class="countersection">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 countdown">
				<h2 class="timer count-title count-number" data-to="300" data-speed="1500"></h2>
				<h5>Happy Customers</h5>
			</div>
			<div class="col-md-2 countdown">
				<h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
				<h5>Professional courses</h5>
			</div>
			<div class="col-md-2 countdown">
				 <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
				 <h5>Awards And Features</h5>
			</div>
			<div class="col-md-2 countdown">
				<h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
				<h5>Working Hours</h5>
			</div>
			<div class="col-md-2 countdown">
				<h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
				<h5>Results</h5>
			</div>
			<div class="col-md-1"></div>

		</div>
	</div> 
</section>


<!-- our team section -->
<section>
	<div class="container-fluid">
	<div class="row">
   <div class="col-md-5 teamintro">
   	<h1>Meet Our Team</h1>
   	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   	quis nostrud exercitation ullamco l</p>
   	<button type="button" class="btn defaultbtn">More team</button>
   </div>
   <div class="col-md-7">
   	<div class="row">
   	<div class="col-md-4 team-memb">
   		<img src="img/about/team4.jpg">
   	</div>
   	<div class="col-md-4 team-memb">
   	<img src="img/about/team5.jpg">
   </div>

   	<div class="col-md-4 team-memb">
   		<img src="img/about/team8.jpg">
   	</div>
</div>
   </div>
</div>
	</div>
</section>


@endsection
