<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--registration form to be submitted to the website-->
<form id="regFormCluster" method="post"
	action="privateapi/addCenter" ng-controller="clusterController">
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Category</label>
			<div class="col-md-6 selectContainer">
				<select class="form-control" name="province">
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
			<label class="col-md-2 control-label">Group Name </label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="address1" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Acronym </label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="address2" />
			</div>
		</div>
	</div>
	<!--
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Phone </label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="phone" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Type</label>
			<div class="col-md-6 selectContainer">
				<select class="form-control" name="ctype">
					<option value="">Select type</option>
					<option value="c">Collecting</option>
					<option value="s">Storing</option>
				</select>
			</div>
		</div>
	</div>
	-->
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Select Location</label>
			<div class="col-md-10">
                <div id="map-canvas" style="height: 300px;width: 100%;"/>
            </div>
		</div>
	</div>
	<button type="submit" class="btn btn-default">Register</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<!--End of the registration form-->
<style type="text/css">
#regForm .form-control-feedback {
	top: 25px;
	right: 10px;
}

#movieForm .selectContainer .form-control-feedback {
	top: 25px;
	right: 25px;
}
</style>