<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row" style="padding: 10px;">
	<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Team Member Posts</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">



						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/defualt/post_64.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-10">
								<h5><area></area><b>Title         : Rugby Training</b></h5>
								<h5>By this Member: Kashyapa (Captain)</h5>
								<h5>Time          : 3:07 PM 5/9/2015</h5>
								<h5>Post : All the team members must attend the training sessions conducted by our Physical trainer. Keep in mind these training sessions will be really helpful for our next league...<a>Read more</a>  </h5>
								</h6>
							</div>
						</div>
						<br>
						
						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/defualt/post_64.png"
									style="height: 60px; width: 60px;">

							</div>
							<div class="col-sm-10">
								<h5><b>Title         : Rugby boots problem (SSC G1)</b></h5>
								<h5>By this Member: Chairman of the club</h5>
								<h5>Time          : 1:05 PM 4/9/2015</h5>
								<h5>Post : All the team members of the rugby team, I am happy to announce you than club management has decided to provide you rugby brand new rugby boots for the next season...<a>Read more</a></h5>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/defualt/post_64.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-10">
								<h5><b>Title         : Additional Training session</b></h5>
								<h5>By this Member: Head Coach</h5>
								<h5>Time          : 3:50 PM 6/7/2015</h5>
								<h5>Post : I have scheduled few additional training sessions on physical fintness for next month. Since the next league is about to start I ask all the players to participate on...<a>Read more</a></h5>
								</h6>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/defualt/post_64.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-10">
								<h5><b>Title         : Rugby boot request</b></h5>
								<h5>By this Member: Kashyapa (Captain)</h5>
								<h5>Time          : 2:25 PM 4/7/2015</h5>
								<h5>Post : Fellow team members, I have requested rugby boots from the club management before next league. It is happy to announce you I had a good response from the management. We'll be receiveing...<a>Read more</a></h5>
								</h6>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
</div>





<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="row" style="padding: 10px;" ng-controller="mainController">
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Today Events</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
<?php
if(count($events) == 0){
?>
						<div class="row">
							<div class="col-sm-12">
								<h5>No events Today</h5>
							</div>
						</div>
<?php
}else{
	foreach ($events as $event) {
?>
						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/event.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-8 col-sm-offset-1">
								<h5>Date <?php echo $event->date;?>Time <?php echo $event->stime;?></h5>
								<h6 style="text-align: justify;">
									Address: <?php echo $event->address1." ".$event->address2?>
									<br/>
									Organization Name : <?php echo $event->orgName;?>
									<br/>
									<a>Read more</a>
								</h6>
							</div>
						</div>
<?php
	}
}
?>

					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Upcomming Events</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">

<?php
if(count($uevents) == 0){
?>
						<div class="row">
							<div class="col-sm-12">
								<h5>No events in upcomming</h5>
							</div>
						</div>
<?php
}else{
	foreach ($uevents as $event) {
?>
						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/event.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-8 col-sm-offset-1">
								<h5>Date <?php echo $event->date;?>Time <?php echo $event->stime;?></h5>
								<h6 style="text-align: justify;">
									Address: <?php echo $event->address1." ".$event->address2?>
									<br/>
									Organization Name : <?php echo $event->orgName;?>
									<br/>
									<a>Read more</a>
								</h6>
							</div>
						</div>
<?php
	}
}
?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Today Events</h3>
			</div>
			<div class="panel-body" style="padding: 0px;">
				<div id="map-canvas" style="height: 600px; width: 100%;"/>
			</div>
		</div>
	</div>
	</div>
</div>
