<?php 
	include('../account/bootstrap.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Test</title>
 	<style type="text/css">
 	body{
 		background: beige;
 	}
 		.test1{
 				width: 99.7%;
      			overflow-x: hidden;
      			overflow-y: scroll;
      			display: none;
      		}
 	}
 	</style>
 </head>
 <body>
 	<center><button onclick="show()" class="btn btn-primary bg-dark btn-lg">Click Me</button></center>

 	<div class="row test1">
 		<div class="col"></div>
 		<div class="col jumbotron bg-warning">
 			<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
 		</div>
 		<div class="col"></div>
 		
 	</div>
 	<script type="text/javascript">
 		function show() {
 			// body...
 			//let styles = document.getElementsByTagName("style")
 			//let cls = document.getElementsByTagName("h1")//.display = "all"
 			let hh2 = document.getElementsByClassName("test1")[0]
 			hh2.style['display'] = "flex"
 		}
 	</script>
 </body>
 </html>