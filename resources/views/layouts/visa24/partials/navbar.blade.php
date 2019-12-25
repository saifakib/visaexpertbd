<div class="navbar-start"> 

	<div class="navbar navbar-default" id="navbar-default" style="margin-left:0px; margin-right:0px;">
		<!--mobile collapse menu button-->
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

		<!--social media icons-->
		<div class="navbar-text social-media social-media-inline pull-right">
			<!--@todo: replace with company social media details-->
			<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
		</div>

		<!--everything within this div is collapsed on mobile-->
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav" id="main-menu">

			    <li class="icon-link">
					<a href="{{ route('home') }}"><i class="fa fa-home"></i></a>
				</li>

				<li class="dropdown" >
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"   >VISA<b class="caret"></b></a>
					<!-- Dropdown Menu -->
					<ul class="dropdown-menu" id="dropdownmenu1">
						<li class="dropdown-header">VISA PAGES</li>
						<li><a href="visaOffers.html" tabindex="-1" class="menu-item">Visa Offers</a></li>
						<li><a href="visaTypes.html" tabindex="-1" class="menu-item">Visa Category</a></li>                  
					</ul>
				</li>  
							
				<li class="dropdown" >
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Candidate<b class="caret"></b></a>
					<!-- Dropdown Menu -->
					<ul class="dropdown-menu"  id="dropdownmenu2">
						<li class="dropdown-header">Candidate PAGES</li>
						<li><a href="candidateResume.html" tabindex="-2" class="menu-item">Candidates Resumes</a></li>
						<li><a href="resumeSearch.html" tabindex="-2" class="menu-item">Search Candidate</a></li>                   
					</ul>
				</li> 
							
				<li class="dropdown" >
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" > Agent<b class="caret"></b></a>
					<!-- Dropdown Menu -->
					<ul class="dropdown-menu"  id="dropdownmenu3">
					    <li class="dropdown-header">VISA AGENT PAGES</li>
							<li><a href="searchOffers.html" tabindex="-3" class="menu-item">Search an offer</a></li>
							<li><a href="visaAgents.html" tabindex="-3" class="menu-item">Visa Agents</a></li> </ul>
				</li>               
							
				<li class="dropdown" >
	    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" >How to Start<b class="caret"></b></a>
						<!-- Dropdown Menu -->
						<ul class="dropdown-menu" id="dropdownmenu4">
							<li class="dropdown-header">HOW TO START PAGES</li>
							<li><a href="{{ route('agent-start') }}" tabindex="-4" class="menu-item">For visa agents</a></li>
							<li><a href="{{ route('candidate-start') }}" tabindex="-4" class="menu-item">For Candidates</a></li>                    
						</ul>
				</li> 

				<li><a href="{{ route('about-us') }}">About Us</a></li>                
				<li><a href="blog.html">Blog</a></li>
				<li><a href="{{ route('our-services') }}">Our Service</a></li>
				<li><a href="{{ route('contact-us') }}">Contact Us</a></li>
				
			</ul>
		</div>
		<!--/.navbar-collapse -->
	</div>  
				<script>  
					// $('li.dropdown').mouseenter(function(){
					//	  $(this).find('.dropdown-menu').slideDown(400);
					// });
						
						$('li.dropdown').click(function(){
							$(this).find('.dropdown-menu').slideDown(400);
						});
						
						$('li.dropdown').mouseleave(function(){
							$(this).find('.dropdown-menu').slideUp(400);
						});

				</script>
			</div>