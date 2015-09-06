<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<br />
<div ng-controller="cluter_table">
	<div class = "row">
		<div class="col-md-12">
			<h1>Manage Groups<small> Group management window</small></h1>
		</div>
	</div>
	<hr/>
	<div class = "row">
		<div class = "col-md-2">
			Search By Group Name
		</div>
		<div class = "col-md-4">
			<input type="text" class="form-control" ng-model = "address2"/>
		</div>
		<div class = "col-md-2">
			Search By Category
		</div>
		<div class = "col-md-4">
			 <select class="form-control" ng-model = "province">
					<option value="">Select Category</option>
					<option value="cp">Exerciese and Fitness</option>
					<option value="ep">Education and Training</option>
					<option value="ncp">Science and Technology</option>
					<option value="np">Polictics and Governance</option>
					<option value="nwp">Art and Craft</option>
					<option value="sabp">Travelling and Adventures</option>
					<option value="sp">Sports and Games</option>
					<option value="up">Religious and Cultural</option>
					<option value="wp">Social and Network</option>
			</select>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="center in centers | filter:address2|filter:province">
				<div class = "row"> 
					<div class = "col-md-9">
						<img class="pull-left" src="<?php echo base_url()?>icons/defualt/center_64.png">
						<h4 class="list-group-item-heading"><b>&nbsp;Name:</b>{{ center.address1 }} <small>{{center.address2 }}</small></h4>
						<p class="list-group-item-text">
							<b>&nbsp;&nbsp;Category: </b>
							<span ng-switch on = "center.province">
								<span ng-switch-when="cp">Exerciese and Fitness</span>
								<span ng-switch-when="ep">Education and Training</span>
								<span ng-switch-when="ncp">Science and Technology</span>
								<span ng-switch-when="np">Polictics and Governance</span>
								<span ng-switch-when="nwp">Art and Craft</span>
								<span ng-switch-when="sabp">Travelling and Adventures</span>
								<span ng-switch-when="sp">Sports and Games</span>
								<span ng-switch-when="up">Religious and Cultural</span>
								<span ng-switch-when="wp">Social and Network</span>
							</span>
						</p>
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

<!-- Large Message for view modal -->
<div class="modal fade clustview-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">View Group Details</h4>
				</div>
				<div id="lContent" class="modal-body">
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Category</h5>
						</div>
						<div class = "col-md-8">
							<h5>
								<span ng-switch on = "province_view">
									<span ng-switch-when="cp">Exerciese and Fitness</span>
									<span ng-switch-when="ep">Education and Training</span>
									<span ng-switch-when="ncp">Science and Technology</span>
									<span ng-switch-when="np">Polictics and Governance</span>
									<span ng-switch-when="nwp">Art and Craft</span>
									<span ng-switch-when="sabp">Travelling and Adventures</span>
									<span ng-switch-when="sp">Sports and Games</span>
									<span ng-switch-when="up">Religious and Cultural</span>
									<span ng-switch-when="wp">Social and Network</span>
								</span>
							</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Name</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{address1_view}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Acronym</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{address2_view}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Phone</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{phone_view}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-md-12">
							<div id="map-canvas" style="height: 200px; width: 100%;"/>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!-- End of view cluster model-->
<!-- Large Message for update cluster modal -->
<div class="modal fade clustupdate-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">Update Group Details</h4>
				</div>
				<div id="lContent" class="modal-body">
					<!--registration form to be submitted to the website-->
					<form id="updateFormCluster" method="post"
						action="center_controller/updatecenter" ng-controller="clusterController">
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Category</label>
								<div class="col-md-6 selectContainer">
									<select class="form-control" ng-model="province" name="province">
										<option value="">Select Category</option>
										<option value="cp">Exerciese and Fitness</option>
										<option value="ep">Education and Training</option>
										<option value="ncp">Science and Technology</option>
										<option value="np">Polictics and Governance</option>
										<option value="nwp">Art and Craft</option>
										<option value="sabp">Travelling and Adventures</option>
										<option value="sp">Sports and Games</option>
										<option value="up">Religious and Cultural</option>
										<option value="wp">Social and Network</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Name </label>
								<div class="col-md-10">
									<input type="text" ng-model="address1" class="form-control" name="address1" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Acronum </label>
								<div class="col-md-10">
									<input type="text" ng-model="address2" class="form-control" name="address2" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Select Location</label>
								<div class="col-md-10">
					                <div id="map-canvas" style="height: 200px; width: 100%;"/>
					            </div>
							</div>
						</div>
						<!-- sending cid to server-->
						<div class="form-group">
							<div class="row">
								<input style="display:none;" type="text" ng-model="cId" name="cId" />
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
						<button type="submit" class="btn btn-default" form="updateFormCluster">Update</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!--  end of update cluster model -->
</div>




