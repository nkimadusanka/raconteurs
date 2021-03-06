<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--registration form to be submitted to the website-->
<form id="staffRegForm" method="post"
	action="employee_controller/addEmployee"
	ng-controller="staffController">
	<div class="form-group">
		<div class="row">
			<div class="col-md-offset-5">
				<label class="control-label">Profile Picture</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-4">
				<img style="height:200px;margin-left:30px;" src = "<?php echo base_url()?>icons/defualt/photo_select.png"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">Email</label> <input type="text"
					class="form-control" name="email" />
			</div>
			<div class="col-md-6">
				<label class="control-label">NIC</label> <input type="text"
					class="form-control" name="nic" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">First Name</label> <input type="text"
					class="form-control" name="fname" />
			</div>

			<div class="col-md-6">
				<label class="control-label">Last Name</label> <input type="text"
					class="form-control" name="lname" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">Address 1</label> <input type="text"
					class="form-control" name="address1" />
			</div>

			<div class="col-md-6">
				<label class="control-label">Address 2</label> <input type="text"
					class="form-control" name="address2" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">Password</label> <input type="password"
					class="form-control" name="password" />
			</div>

			<div class="col-md-6">
				<label class="control-label">Re Enter Password</label> <input
					type="password" class="form-control" name="rpassword" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-4">
				<label class="control-label">Gender</label> <select
					class="form-control" name="sex">
					<option value="m">Male</option>
					<option value="f">Female</option>
				</select>
			</div>
			<div class="col-md-4">
<?php if($this->session->userdata('user_Mode') == 'a'){?>
				<label class="control-label">Group</label>
<?php if($centers != null){?>
                 <select class="form-control" name="cId">
					<option value="">Select</option>
<?php foreach ($centers as $center) { ?>
                    <option value="<?= $center->cId?>"><?php echo $center->address1.' '.$center->address2."(".$center->province.")";?></option>
<?php }?>
                </select>
<?php }?>
            </div>
			<div class="col-md-4">
<?php }else{?>
            <div class="col-md-8">
<?php }?>            
				<label class="control-label">Moderator Type</label> <select
						class="form-control" name="type">
						<option value="a">Select</option>
<?php if($this->session->userdata('user_Mode') == 'a'){?>
					<option value="a">Administrator</option>
						<option value="as">Moderator Administrator</option>
<?php }?>
					<option value="s">Moderator</option>
					</select>
				</div>
			</div>
		</div>
</form>
<!--End of the registration form-->
<hr/>
<button type="submit" class="btn btn-default" form="staffRegForm">Register</button>
<button type="reset" class="btn btn-default" form="staffRegForm">Reset</button>