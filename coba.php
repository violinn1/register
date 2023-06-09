/*<?php
include 'conection.php';

if (isset($_POST['commentId'])) {
  $commentId = $_POST['commentId'];
  // Delete comment
  $sql = $conn->query("DELETE FROM forum WHERE id = '$commentId' AND parent_comment = 0 OR parent_comment = '$commentId'");
}

if ($sql) {
  echo json_encode(array("statusCode" => 200));
} else {
  echo json_encode(array("statusCode" => 201));
}

$conn = null;
?>*/



<?php
include 'conection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$pass = $_POST['Password'];

if ($name != "" && $msg != "") {
  $sql = $conn->query("INSERT INTO forum (parent_comment, student, post, pass)
    VALUES ('$id', '$name', '$msg', '$pass')");
  echo json_encode(["statusCode" => 200]);
} else {
  echo json_encode(array("statusCode" => 201));
}

$conn = null;
?>

//DELETE COMMENT
/*function deleteComment(commentId) {
	if (confirm("Are you sure you want to delete this comment?")) {
	  $.ajax({
		url: "delete.php",
		type: "POST",
		data: {
		  commentId: commentId
		},
		cache: false,
		success: function (dataResult) {
		  var dataResult = JSON.parse(dataResult);
		  if (dataResult.statusCode == 200) {
			LoadData();
			$("#DeleteModal").modal("hide"); // Hide the modal after deleting the comment
		  } else if (dataResult.statusCode == 201) {
			alert("Error occurred while deleting comment!");
		  }
		}
	  });
	}
  }*/


  //Post data to the server
/*$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var id = document.forms["frm"]["Pcommentid"].value;
		var name = document.forms["frm"]["name"].value;
		var msg = document.forms["frm"]["msg"].value;
		var pass = document.forms["frm"]["Password"].value;
		if(name!="" && msg!="" && pass!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,
					Password: pass,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						document.forms["frm"]["Pcommentid"].value = "";
						document.forms["frm"]["name"].value = "";
						document.forms["frm"]["msg"].value = "";
						document.forms["frm"]["Password"].value = "";
						LoadData(); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});

//Reply comment
$(document).ready(function() {
	$('#btnreply').on('click', function() {
		$("#btnreply").attr("disabled", "disabled");
		var id = document.forms["frm1"]["Rcommentid"].value;
		var name = document.forms["frm1"]["Rname"].value;
		var msg = document.forms["frm1"]["Rmsg"].value;
		var pass = document.forms["frm1"]["RPassword"].value;
		if(name!="" && msg!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,
					Password: pass,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#btnreply").removeAttr("disabled");
						document.forms["frm1"]["Rcommentid"].value = "";
						document.forms["frm1"]["Rname"].value = "";
						document.forms["frm1"]["Rmsg"].value = "";
						document.forms["frm1"]["RPassword"].value = "";
						LoadData(); 
						$("#ReplyModal").modal("hide");
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});*/