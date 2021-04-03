<?php 
 require("dbconnection.php");
 require("functions.php");



if (isset($_POST['submit'])) {
	$category_id = $_POST['category'];
	if(!empty($_POST['interview'])){
		$interview =  $_POST['interview'];
		foreach($interview as $key => $value){
		$sql = "INSERT INTO question_bank (category_id,question, option_a, option_b, option_c, option_d, final_result)VALUES ('".$value['question']."','".$value['option_a']."','".$value['option_b']."','".$value['option_c']."','".$value['option_d']."','".$value['right_ans']."','".$value['right_ans']."')";
			mysqli_query($conn, $sql);
		}
	}
	
}

 $category_list = get_category_list($conn);
 $question_bank_list = get_question_banks_details($conn);
 
?>


<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.container {
  padding: 16px;
  background-color: white;
  border:2px solid #ccc;
  
}

.row {
  padding: 16px;
  background-color: white;
  border:1px solid #ccc;
  width: 50%;
}

input[type=text] {
  width: 70%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border:1px solid #ccc;
}

.right_class{
	  width: 70%;
	padding: 15px;
 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}
.col1{
  display: inline-block;
  padding: 5px;   	
}
.col2{
 
}
</style>
</head>
<body>

  <div class="container">
  <h2>Question Bank</h2>
	<hr>
	<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="col1">Select Category <span style="color:red;">*</span></div>
	<div class="col1">
	<select name="category" id="category" required>
	<option value="" disabled selected>Select Category</option>
	<?php foreach($category_list as $value) {?>
	<option value="<?php echo $value['id']; ?>"><?php echo ucwords($value['category']); ?></option>
	<?php } ?>
	</select>
	</div>
	<br><br><br>
	<div class="row">
	<div class="col1">Question 1 <span style="color:red;">*</span></div>
    <input type="text"  name="interview[]['question']" id="question_0" required>
	<input type ="hidden" id="index_id"  value="1">
	<div class="col1" id="addnew" style="font-size:22px;">+</div>
<br>

	<div class="col1">Option A &nbsp;&nbsp;&nbsp; <span style="color:red;">*</span></div>
    <input type="text"  name="interview[0]['option_a']" id="option_a_0" required>
	<br>
	<div class="col1">Option B &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  name="interview[0]['option_b']" id="option_b_0" required>
	<br>
	<div class="col1">Option C &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  name="interview[0]['option_c']" id="option_c_0" required>
	<br>
	<div class="col1">Option D &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  name="interview[0]['option_d']" id="option_d_0" required><br>
	<div class="col1"> Right Ans <span style="color:red;">*</span></div>
	<select name="interview[0]['right_ans']" id="right_ans_0" class="right_class" required>
		<option value="" disabled selected>Select Final Result</option>
		<option value="a" >A</option>
		<option value="b" >B</option>
		<option value="c" >C</option>
		<option value="d" >D</option>
	</select>
	<br>
	</div>
	
	<div id="clone_id"></div>
	    <button type="submit" class="registerbtn" name="submit">Save</button>
	</form>
	
	<div style="display:none;">
   <div class="row" style="" id="html_new_id">
	<div class="col1">Question 1 <span style="color:red;">*</span></div>
    <input type="text" id="question" required>
	<div class="col1" id="remove" onclick="remove(this.id)" style="font-size:22px;">-</div>
<br>
	<div class="col1">Option A &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  id="option_a" required>
	<br>
	<div class="col1">Option B &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  id="option_b" required>
	<br>
	<div class="col1">Option C &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  id="option_c" required>
	<br>
	<div class="col1">Option D &nbsp;&nbsp;&nbsp;<span style="color:red;">*</span></div>
    <input type="text"  id="option_d" required><br>
	<div class="col1"> Right Ans <span style="color:red;">*</span></div>
	<select id="right_ans" class="right_class" required>
		<option value="" disabled selected>Select Final Result</option>
		<option value="a" >A</option>
		<option value="b" >B</option>
		<option value="c" >C</option>
		<option value="d" >D</option>
	</select>
	<br>
	</div>
	</div>
	

	

  <br><br><br>
  <table id="question_bank_table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Category</th>
                <th>Action</th>
                
				</tr>
        </thead>
        <tbody>
		<?php $i= 1;  foreach ($question_bank_list as $value) {?>
            <tr>
                <td><?php echo $i."."; ?></td>
                <td><?php echo $value['category']; ?></td>
                <td><a href="#">Edit</a></td>
            </tr>
		<?php $i++; } ?>
		</tbody>
    </table>
  </div>
  

</body>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#question_bank_table').DataTable();
	} );
</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
	   $("#addnew").click(function(){
		 var counter = $("#index_id").val();
		   clone = $("#html_new_id").clone();
		   clone.removeAttr("id");
		   clone.attr("id","html_new_id_"+counter);
		   clone.find('[id="question"]').attr("name","interview["+counter+"]['question']");
		   clone.find('[id="option_a"]').attr("name","interview["+counter+"]['option_a']");
		   clone.find('[id="option_b"]').attr("name","interview["+counter+"]['option_b']");
		   clone.find('[id="option_c"]').attr("name","interview["+counter+"]['option_c']");
		   clone.find('[id="option_d"]').attr("name","interview["+counter+"]['option_d']");
		   clone.find('[id="right_ans"]').attr("name","interview["+counter+"]['right_ans']");
		   clone.find('[id="remove"]').attr("id","remove_"+counter);
		   clone.appendTo('#clone_id');
			counter++;
		    $("#index_id").val(counter);
	   });	   
   });
   
   function remove(id){
	   var ids = id.split("_");
	   $("#html_new_id_"+ids[1]).remove();
   }
   
</script>

