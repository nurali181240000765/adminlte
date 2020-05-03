<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<?php $this->load->view("admin/header.php") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php $this->load->view("admin/sidebar.php") ; ?>
	
	<div class="content-wrapper">
		<div class="content-header">					
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
		  <i class='fa fa-plus'></i>
		</button>
			<div class="container-fluid">
				<table class="table table-sm">
				  <thead>
					<tr>
					  <th>No</th>
					  <th >Nama</th>
					  <th width='200px'>Alamat</th>
					  <th width='30px'>tanggal</th>
					  <th width='120px'>KG</th>
					  <th width='20px'></th>
					  <th width='20px'></th>
					</tr>
				  </thead>
				  <tbody>
				  
				  </tbody>
				</table>
			</div>
		</div>
	</div>

  <?php $this->load->view("admin/footer.php") ?>
</body>
</html>