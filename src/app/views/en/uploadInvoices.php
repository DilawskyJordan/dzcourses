<!DOCTYPE html>
<html>
<head>
	<title>Upload invoices</title>
	<link rel="shortcut icon" type="image/png" href="src/app/views/images/logo2.jpg"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style type="text/css">
		* { font-family: "Courier New" };
		body {
			background-color: #f3f3f3;
		}
		#content {
			background-color: white;
			width: 80%;
			margin-left: 10%;
			margin-right: 10%;
			margin-top: 10%;
			padding: 5%;
			border-left: 5px solid black;
		}
	</style>
</head>
<body>
	<div id="content">
	<?php if (isset($error)): ?>
		<div class="alert alert-danger" role="alert">
		 	<?php echo $error; ?>
		</div>
	<?php endif; ?>
	<?php if (isset($suc)): ?>
		<div class="alert alert-success" role="alert">
		 	<?php echo $suc; ?>
		</div>
	<?php endif ?>
		<form method="post" action="postUploadedInvoices" enctype="multipart/form-data">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" name="email" value="<? echo $user->email; ?>" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputFirstname">Firstname</label>
		      <input type="text" name="firstname" class="form-control" value="<? echo $user->firstname; ?>" id="inputFirstname">
		    </div><div class="form-group col-md-2">
		      <label for="inputLastname">Lastname</label>
		      <input type="text" name="lastname" class="form-control" value="<? echo $user->lastname; ?>" id="inputLastname">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Address</label>
		    <input type="text" name="address" class="form-control" id="inputAddress" value="<? echo $user->address; ?>">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Phone number</label>
		    <input type="text" name="phone" class="form-control" id="inputAddress" value="<? echo $user->phone; ?>">
		  </div>
		  <div class="form-group">
		    	<label class="text-black" for="Address">Plans</label>                    
                  <select name="plan">
                  	<? if($user->plan == 1): ?>
                    	<option value="1" selected="selected">500da</option>
                    	<option value="2">900da</option>
                    	<option value="3">1300da</option>
                    <? elseif($user->plan == 2): ?>
                    	<option value="1">500da</option>
                    	<option value="2" selected="selected">900da</option>
                    	<option value="3">1300da</option>
                    <? else: ?>
                    	<option value="1">500da</option>
                    	<option value="2">900da</option>
                    	<option value="3" selected="selected">1300da</option>
                    <? endif; ?>
                  </select>
		  </div>
		  <br/>
		  <p style="color: red;">Upload 3 different images from 3 different views of the invoice. (Accepted images : .jpg, .jpeg, .png) and one image for the ID</p>
		  <div class="form-row">
		    <div class="form-group col-md-5">
		      <label for="inputFirstname">Invoice image 1</label>
		      <div class="custom-file">
				    <input name="image1" type="file" class="custom-file-input" id="validatedCustomFile" required>
				    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
				    <div class="invalid-feedback">Example invalid custom file feedback</div>
				</div>
		    </div>
		    <br/>
		    <div class="form-group col-md-5">
		      <label for="inputLastname">Invoice image 2</label>
		      <div class="custom-file">
			    <input name="image2" type="file" class="custom-file-input" id="validatedCustomFile" required>
			    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
			    <div class="invalid-feedback">Example invalid custom file feedback</div>
			  </div>
		    </div>
		    <br/>
		    <div class="form-group col-md-5">
		      <label for="inputLastname">Invoice image 3</label>
		      <div class="custom-file">
			    <input name="image3" type="file" class="custom-file-input" id="validatedCustomFile" required>
			    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
			    <div class="invalid-feedback">Example invalid custom file feedback</div>
			  </div>
		    </div>
		    <br/>
		    <div class="form-group col-md-5">
		      <label for="inputLastname">identity card</label>
		      <div class="custom-file">
			    <input name="id" type="file" class="custom-file-input" id="validatedCustomFile" required>
			    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
			    <div class="invalid-feedback">Example invalid custom file feedback</div>
			  </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Sended money (DA)</label>
		    <input type="number" name="money" class="form-control" id="inputAddress2">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Password</label>
		    <input type="password" name="password" placeholder="Enter your password" class="form-control" id="inputAddress2">
		  </div>
		  <br/>
		  <button type="submit" class="btn btn-primary">Send</button>
		</form>
	</div>
</body>
</html>