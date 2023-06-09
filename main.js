var myVar = setInterval(LoadData, 2000);

http_request = new XMLHttpRequest();

function LoadData(){
$.ajax({
url: 'view.php',
type: "POST",
dataType: 'json',
success: function(data) {
    $('#MyTable tbody').empty();
    for (var i=0; i<data.length; i++) {
        var commentId = data[i].id;
        if(data[i].parent_comment == 0){
        var row = $('<tr><td><b><img src="avatar.jpg" width="30px" height="30px" />' + data[i].student + ' :<i> '+ data[i].date + ':</i></b></br><p style="padding-left:80px;">' + data[i].post + '</br><a data-toggle="modal" data-id="'+ commentId +'" title="Add this item" class="open-ReplyModal" href="#ReplyModal">Reply</a>'+'<a data-toggle="modal" data-id="'+ commentId +'" title="Add this item" class="open-DeleteModal" href="#DeleteModal">   Delete</a>'+'</p></td></tr>');
        $('#record').append(row);
        for (var r = 0; (r < data.length); r++)
                {
                    if ( data[r].parent_comment == commentId)
                    {
                        var comments = $('<tr><td style="padding-left:80px"><b><img src="avatar.jpg" width="30px" height="30px" />' + data[r].student + ' :<i> ' + data[r].date + ':</i></b></br><p style="padding-left:40px">'+ data[r].post +'</p><a data-toggle="modal" data-id="'+ commentId +'</td></tr>');
						$('#record').append(comments);
                    }
                }
        }
    }
},
error: function(jqXHR, textStatus, errorThrown){
    alert('Error: ' + textStatus + ' - ' + errorThrown);
}
});
}


$(document).on("click", ".open-ReplyModal", function () {
     var commentid = $(this).data('id');
     $(".modal-body #commentid").val( commentid );
});

$(document).on("click", ".open-DeleteModal", function() {
    var commentId = $(this).data("id");
    $(".modal-body #commentid").val(commentId);
});

$("#btnDelete").on("click", function() {
    var commentId = $("#commentid").val();
    var Reason = $("#Reason").val();
    deleteComment(commentId, Reason);
});

// Post data to server
$(document).ready(function() {
	$('#butsave').on('click', function() {
	  $("#butsave").attr("disabled", "disabled");
	  var id = document.forms["frm"]["Pcommentid"].value;
	  var name = document.forms["frm"]["name"].value;
	  var msg = document.forms["frm"]["msg"].value;
	  var pass = document.forms["frm"]["Password"].value;
	  if (name != "" && msg != "" && pass != "") {
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
		  success: function(dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
			  $("#butsave").removeAttr("disabled");
			  document.forms["frm"]["Pcommentid"].value = "";
			  document.forms["frm"]["name"].value = "";
			  document.forms["frm"]["msg"].value = "";
			  document.forms["frm"]["Password"].value = "";
			  LoadData();
			} else if (dataResult.statusCode == 201) {
			  alert("Error occurred!");
			} else if (dataResult.statusCode == 202) {
			  alert("Invalid password! Please enter a correct password.");
			  $("#butsave").removeAttr("disabled"); // Enable the button to allow password input again
			}
		  }
		});
	  } else {
		alert('Please fill all the fields!');
	  }
	});
  });
  
  // Reply comment
$(document).ready(function() {
	$('#btnreply').on('click', function() {
	  $("#btnreply").attr("disabled", "disabled");
	  var id = document.forms["frm1"]["Rcommentid"].value;
	  var name = document.forms["frm1"]["Rname"].value;
	  var msg = document.forms["frm1"]["Rmsg"].value;
	  var pass = document.forms["frm1"]["RPassword"].value;
	  if (name != "" && msg != "") {
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
		  success: function(dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
			  $("#btnreply").removeAttr("disabled");
			  document.forms["frm1"].reset(); // Reset form
			  LoadData();
			  $("#ReplyModal").modal("hide");
			} else if (dataResult.statusCode == 201) {
			  alert("Error occurred!");
			} else if (dataResult.statusCode == 202) {
			  alert("Invalid password! Please enter a correct password.");
			  $("#btnreply").removeAttr("disabled"); // Enable the button to allow password input again
			}
		  }
		});
	  } else {
		alert('Please fill all the fields!');
	  }
	});
  });
  
  function deleteComment(commentId, Reason) {
	if (confirm("Are you sure you want to delete this comment?")) {
	  $.ajax({
		url: "deleteParent.php",
		type: "POST",
		data: {
		  commentId: commentId,
		  Reason: Reason,
		},
		cache: false,
		success: function (dataResult) {
		  var dataResult = JSON.parse(dataResult);
		  if (dataResult.statusCode == 200) {
			LoadData(); // Perbarui tampilan setelah menghapus data
			$("#DeleteModal").modal("hide"); // Sembunyikan modal setelah menghapus data
			$("#Reason").val(''); // Mengosongkan nilai input #Reason setelah menghapus data
		  } else {
			alert("Data salah!");
		  }
		},
		error: function (jqXHR, textStatus, errorThrown) {
		  alert("Error occurred while deleting comment!");
		},
		complete: function () {
		  $("#DeleteModal").modal("hide"); // Sembunyikan modal setelah proses AJAX selesai, baik berhasil atau gagal
		}
	  });
	}
}


