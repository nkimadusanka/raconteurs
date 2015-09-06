<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- Creating full screen blocks for welcome screen-->
	<section class="container-fluid" id="section1">
		<br>
		<br>
		<br>
			<br>
		<br>
		<br>
	  	<h1 class="text-center v-center"><i>Raconteur(Team Builder)</i></h1>
	  	<h2></h2>
	  	<!--Login form initializing button-->
	  	<p class = "text-center v-center">
	  		<button type="button" class="btn btn-lg" style="color:white;" data-toggle="modal" data-target="#loginModel">Login</button>
	  		<a type="button" class="btn btn-lg" style="color:white;" href="#section4">Register Today</a>
	  	</p>
	  	<center><h2>A software that you can communicate with your team members easily and efficient way </h2></center>
	</section>

	<section class="container-fluid" id="section3">
		<h1 class="text-center">What is this?</h1>
	    <div class="row">
	      <div class="col-sm-6 col-sm-offset-3">
	        <p class="text-center lead">It is a simple place that all your team members can interact </p>
	        <div class="row">
	          <div class="col-xs-6">
	          	<ul>
</br>	<li>Simple web solution </li> 
</br>	<li>Your own Groups</li>
</br>	<li>simple attractive GUIs</li>
</ul>
</div>
 			<div class="row">
	          <div class="col-xs-6 "> What should you have ?
	          	<ul>
</br><li> It is totally Free</li> 
</br><li>Simple configuration</li>
</br><li>Absolutely simple to communicate with your team</li>
</ul>
</div>
</div>
	        </div>
	        <p class="text-center">
	        	<img src="<?php echo base_url()?>icons/tablet.jpg" class="img-responsive center-block">
	        </p>
	      </div>
	   </div>
	</section>

	<section class="container-fluid" id="section4">
		<h2 class="text-center">Register Now - Experience the difference</h2>
	    <div class="row">
	      <div class="col-sm-8 col-sm-offset-2">
            <!--Registration form here-->
            <?php echo $register_form?>
	      </div>
	    </div>
	</section>

<!--end of the selection divs-->
<!--end of the selection divs-->

