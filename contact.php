<style>
	body{
		background-image:url("im/9.jpg") ;
		background-position-x: right;
		background-size: contain;
		background-repeat: no-repeat;
	}
	table{
		border-style: solid;
		border-color: black;
	}
    .btn btn-success{
        color: #ffd700;
    }
	
</style>
<h2><b>CONTACT US</b></h2>

<form method="post">
	<div class="row">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>



	<div class="row">
		<div class="col-sm-4">Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Phone No</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Enter Your Message</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>

	<div class="row" style="margin-top:10px" >
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Send query" name="save" class="btn btn-success"/>

		</div>
	</div>


</form>
