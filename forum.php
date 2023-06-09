<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadeleine.id</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="assets/forum.css">
</head>
<body>
    <nav>
        <div class="Allcontainer navbarContainer">
            <a href="index.html"><img src="assets/img/icon.png" class="icon"></a>
            <ul class="navbarMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="joinus.php">Register</a></li>
                <li><a href="forum.php">Forum</a></li>
            </ul>
            <button id="open-icon-btn"><i class="uil uil-bars"></i></button>
            <button id="close-icon-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <br><br>
    <!-- Modal -->
    <div id="ReplyModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Reply Question</h4>
          </div>
          <div class="modal-body">
            <form name="frm1" method="post">
                <input type="hidden" id="commentid" name="Rcommentid">
              <div class="form-group">
                <label for="usr">Write your name:</label>
                <input type="text" class="form-control" name="Rname" required>
              </div>
              <div class="form-group">
               <label for="comment">Write your reply:</label>
                <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
              </div>
              <div class="form-group">
                <label for="Pass">Create/Input password</label>
                <input type="text" class="form-control" name="RPassword" required>
              </div>
              <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
          </form>
          </div>
        </div>

      </div>
    </div>

    <!--DELETE MODAL-->
    <div id="DeleteModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Modal</h4>
          </div>
          <div class="modal-body">
            <form name="frm2" method="post">
                <input type="hidden" id="commentid" name="Rcommentid">
                <div class="form-group">
                  <label for="reason">Please insert your password:</label>
                  <input type="text" class="form-control" name="Reason" Id="Reason" required>
                </div>
              <input type="button" id="btnDelete" name="btnDelete" class="btn btn-Danger" value="Delete" data-dismiss="modal">
          </form>
          </div>
        </div>

      </div>
    </div>

    <!--REPLY DELETE MODAL-->
    <div id="ReplyDeleteModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Modal</h4>
          </div>
          <div class="modal-body">
            <form name="frm2" method="post">
                <input type="hidden" id="commentid" name="Rcommentid">
                <div class="form-group">
                  <label for="passwd">Please insert your password:</label>
                  <input type="text" class="form-control" name="passwd" Id="passwd" required>
                </div>
              <input type="button" id="btnDeleteReply" name="btnDeleteReply" class="btn btn-Danger" value="Delete" data-dismiss="modal">
          </form>
          </div>
        </div>

      </div>
    </div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Community forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
        <div class="form-group">
          <label for="usr">Write your name:</label>
          <input type="text" class="form-control" name="name" required>
        </div>
          <div class="form-group">
            <label for="comment">Write your question:</label>
            <textarea class="form-control" rows="5" name="msg" required></textarea>
          </div>
          <div class="form-group">
            <label for="Pass">Create password</label>
            <input type="text" class="form-control" name="Password" required>
          </div>
        <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" >
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

</div>
    <footer>
        <div class="copyright">
            <h4>copyright &copy; PT NaoTech</h4>
        </div>
    </footer>
    <script src="assets/Nadeline.js"></script>
    <script src="main.js"></script>
</body>
</html>