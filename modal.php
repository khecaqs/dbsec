<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
   
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<script type="text/javascript">
(function() {
  'use strict';

  function remoteModal(idModal) {
    var vm = this;
    vm.modal = $(idModal);

    if (vm.modal.length == 0) {
      return false;
    }

    if (window.location.hash == idModal) {
      openModal();
    }

    var services = {
      open: openModal,
      close: closeModal
    };

    return services;

    // method to open modal
    function openModal() {
      vm.modal.modal('show');
    }

    // method to close modal
    function closeModal() {
      vm.modal.modal('hide');
    }
  }
  Window.prototype.remoteModal = remoteModal;
})();

$(function() {
   window.remoteModal('#ModAddSvr');
   window.remoteModal('#myModal2');
});
function goBack() {
    window.history.back();
}
</script>
<body>


<div class="container">
   
<!-- ################################## MyModal Add Server ################### -->
  <div id="ModAddSvr" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Simple Table</h4>
            <p class="category">Here is a subtitle for this table</p>
        </div>
		</div>
		 <div class="card-content table-responsive" class="modal-body">
		 <form action="add.php" name="frmAddSvr" method="POST">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group label-floating">
						<label class="control-label">Server ID</label>
						<input type="text" name="txtSvrID" id="txtSvrID" class="form-control" disabled>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group label-floating">
						<label class="control-label">Nama </label>
						<input type="text" class="form-control" name="txtSvrNama">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-floating">
						<label class="control-label">DNS</label>
						<input type="email" class="form-control" name="txtSvrDNS" id="txtSvrDNS">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group label-floating">
						<label class="control-label">IP</label>
						<input type="text" class="form-control" name="txtSvrIP" id="txtSvrIP">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-floating">
						<label class="control-label">Kegunaan</label>
						<input type="text" class="form-control" name="txtSvrGuna" id="txtSvrGuna">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group label-floating">
						<label class="control-label">Description</label>
						<input type="text" class="form-control" name="txtSvrDesc" id="txtSvrDesc">
					</div>
				</div>
			</div>
			<div class="modal-footer">
			<button type="button" onclick="goBack()" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" onclick="goBack()" class="btn btn-primary" name="svrident-submit" name="svrident-submit" >Save</button>
			</div>
			<div class="clearfix"></div>
		</form>
      </div>
    </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->


<!-- ################################## MyModal2 ################### -->
  <div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
       <?php echo "Mymodal2"?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
</div>
</body>
</html>
