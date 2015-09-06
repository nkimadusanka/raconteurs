<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<br />
<div ng-controller="view_thread">
	<div class = "row">
		<div class="col-md-12">
			<h1>Group Threads &nbsp;&nbsp;<small>We are interested to hear your voice.</small></h1>
		</div>
	</div>
	<hr/>

	<div class = "row">
		<div class = "col-md-2">			
			<input type="submit" class="btn btn-default" value="Add a Thread"/>
		</div>
		<div class="col-md-10">
			<div class="col-md-3">
				<label class="control-label">Search by Title </label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control" name="fname" />
			</div>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="center in centers | filter:address2|filter:province">
				<div class = "row"> 
					<div class = "col-md-9">
						<img class="pull-left" src="<?php echo base_url()?>icons/defualt/thread_64.png">
						<h4 class="list-group-item-heading"><b>&nbsp;Title:</b>{{ center.address1 }} </h4>
						<p class="list-group-item-text"><b>&nbsp;&nbsp;By : </b>{{center.address2 }} <b>Created Date: </b>{{ center.phone }}<b> Reply: </b>{{ center.type }}</p>
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
					<center><h4 id="lTitle" class="modal-title">Maths Puzzel</h4></center>
				</div>
				<div id="lContent" class="modal-body">

				<h4>Solve this</h4>
				<img src="http://benideoku.files.wordpress.com/2012/06/10.jpg"/>
				
				<div>
				<br>
				  <!-- <h2>Maths Quiz</h2> -->
				  <ul class="list-group">
				    <li class="list-group-item"><i class="fa fa-fw fa-user"></i> <strong>Supun Malaka</strong> This is fool. How will it be 5.</li>
				    <li class="list-group-item"><i class="fa fa-fw fa-user"></i> <strong>Nayomi Perera</strong> :) This is what politician's says.</li>
				    <li class="list-group-item"><i class="fa fa-fw fa-user"></i> <strong>Gayan Ashen</strong> Can any one prove this.</li>
				  </ul>
				</div>
				<div>
					<h5>Add a comment</h5>
					<div><i class="fa fa-fw fa-user"></i><strong>Nayana Sampath</strong></div>
					<input class="col-md-9" type="text" />
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
					<h4 id="lTitle" class="modal-title">Update Cluster Details</h4>
				</div>
				<div id="lContent" class="modal-body">

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




