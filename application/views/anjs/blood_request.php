<div class="page-header">
	<h1>Add Post <small>Enter post detail here</small></h1>
</div>
<br/>
<form id="blood_request" method="post"
	action="event_controller/addBloodReq" ng-controller="addBloodRequest">
	<div class="form-group">
     	<div class="row">
     		<div class= "col-md-3">
     			<label>Description</label>
            </div>
     		<div class= "col-md-9">
     			<textarea class="form-control" name="description" placeholder="Type your description here" rows="5" cols="60">
     			</textarea><br><br>
			</div>
		</div>
	</div>
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">	
				<label>Broadcast Message</label>
			</div>
			<div class="col-md-6">
		        <textarea name="broadcast_message" rows="5" cols="60" class="form-control" placeholder="Type your broadcast massage here">
				</textarea>
			</div>
		</div>
	</div>
	<hr/>
    <div class="form-group">
        <div class="row">
    		<div class="col-md-8">
    	    </div>
    		<div class="col-md-4">
				<input type="submit" class="btn btn-primary" value="Add Post"/>
				<input type="reset" class="btn" value="Clear"/>
			</div>
		</div>
	</div>
</form>