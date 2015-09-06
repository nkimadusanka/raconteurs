<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<br />
<div ng-controller="event_table">
	<div class = "row">
		<div class="col-md-12">
			<h1>Manage Tasks<small> Manage Group Tasks</small></h1>
		</div>
	</div>
	<hr/>
	<div class = "row">
		<div class = "col-md-2">
			Event State
		</div>
		<div class = "col-md-4">
			<select class="form-control">
					<option value="all">All</option>
					<option value="today">Today</option>
					<option value="upcomming">Upcomming</option>
					<option value="pass">Past</option>
			</select>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="event in events">
				<div class = "row"> 
					<div class = "col-md-9">
						<img class="pull-left" src="<?php echo base_url()?>icons/defualt/event_64.png">
						<h4 class="list-group-item-heading"><b>&nbsp;organization Name: </b>{{ event.orgName }} <b>&nbsp;Date Time: </b>{{ event.date }} {{ event.stime }}</h4>
						<p class="list-group-item-text"><b>&nbsp;&nbsp;Province: </b>{{ center.province }} <b>Phone: </b>{{ center.phone }}<b> Type: </b>{{ center.type }}</p>
					</div>
					<div class = "col-md-3">
						<div class = "row">
							<div class = "col-md-6">
								<button style="{width:80px;}" type="button" class="btn btn-sm" ng-click="viewcenter(center.cId)">
									View <i class="fa fa-info"></i>
								</button>
							</div>
							<div class = "col-md-6">
								<button style="{width:80px;}" type="button" class="btn btn-sm" ng-click="updatecenter(center.cId)">
									Update <i class="fa fa-undo"></i>
								</button>
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-offset-7" style="margin-top: 5px;">
								<button style="{width:80px;}" type="button" class="btn btn-sm" ng-click="removecenter(center.cId)">
									Remove <i class="fa fa-times-circle"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>




