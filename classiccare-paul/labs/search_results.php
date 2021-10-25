<?php 
  include('../account/bootstrap.php');

if (isset($_POST['submit1'])){
  $var = $_POST['testname'];  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Search Results</title>
  <style type="text/css">
    td, th{
      text-align: center;
    }

    .test1{
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
  <table class="table caption-top table-dark">
  <caption><center>Search Results</center></caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Lab Type</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Test Status</th>
      <th scope="col">Save</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>id462fag</td>
      <td>Castila Agbe</td>
      <td>GonoPhobia</td>
      <td class="text-success">Paid</td>
      <td class="text-danger">
        <form>
          <select class="form-select-sm">
            <option>Choose</option>
            <option>Not Yet</option>
            <option>Done</option>
          </select>
        </form>
      </td>
      <td>
          <input class="btn-primary rounded-pill" type="submit" name="submit" value="Save">
      </td>
  </tbody>
</table>

</div>
    <div class="col-2"></div>
    </div>
<hr>
    <div class="row">
      <div class="col">
        <div>
          <form method="POST" id="">
            <div id="form1">
              <div>
              <input class="test1" type="text" name="testname[]" placeholder="Enter test name">
              <input class="test1" type="text" name="testresult[]" placeholder="Enter test result">
              <input type="button" value="Add" id="but1" onclick="myFunction()" class="btn btn-warning btn-sm rounded-pill" type="button">
              <br>
            </div>
            </div>
              <input class="btn btn-primary rounded-pill" type="submit" name="submit1" style="margin-left: 80px; width: 200px">
          </form>
        </div>
      </div>
<div class="col">
  <table class="table caption-top table-dark">
  <caption><h2><center>Test Results</center></h2></caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Test Name</th>
      <th scope="col">Results</th>
      <th scope="col">Done</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>id462fag</td>
      <td>GonoPhobia</td>
      <td>20.9</td>
      <td>
          <input class="btn-primary rounded-pill" type="submit" name="submit" value="Done">
      </td>
  </tbody>
</table>

      </div>
      <div class="col-2"></div>
    

<script type="text/javascript">

    let num = 1;

  function myFunction() {
  var para = document.createElement("div")
  num ++
  let num2 = "idx"+num
  var new_html = `<input class="test1" type="text" name="testname[]" placeholder="Enter test name">
                        <input class="test1" type="text" name="testresult[]" placeholder="Enter test result">
                        <button id="but1" onclick="myFunction()" class="btn btn-warning btn-sm rounded-pill" type="button">Add</button>
                        <button id="but1" onclick="reply_click(this.parentElement.id)" class="btn btn-danger btn-sm rounded-pill" type="button">Remove</button>
                    <br>
                   `
para.id = num2
para.innerHTML = new_html
let element = document.getElementById("form1")
element.append(para)
}

  function reply_click(clicked_id)
  {
      idx = clicked_id
      //x = document.getElementById("myLI").parentElement.nodeName
      var myobj = document.getElementById(idx)
      myobj.remove()
  }
</script>
</body>
</html>