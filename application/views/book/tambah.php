<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Books</title>

	<!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/'); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Animation Css -->
    <link href="<?php echo base_url('assets/'); ?>plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Bootstrap Material Datetime Picker Css -->
	<link href="<?php echo base_url('assets/'); ?>/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url('assets/'); ?>/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url('assets/'); ?>/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

	<!-- Custom Css -->
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>
<ol class="breadcrumb breadcrumb-bg-deep-purple">
	<li>
		<a href="<?php echo base_url('books')?>">Books</a>
	</li>
	<li class="active">
		Add New Data
	</li>
</ol>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Form Add New Books
				</h2>
			</div>
			<div class="body">
				<div class="row">
					<form method="POST" action="<?php echo base_url('books/validasiAddBook')?>">
						<div class="col-md-12" style="margin-bottom:0;">
							<div class="form-msg"><?php if(isset($msg)){echo $msg;}?></div>
						</div>
						<div class="col-md-6">
						
							<div class="form-group">
								<label class="form-label">Title</label>
								<div class="form-line">
									<input class="form-control" name="title" type="text" value="<?php echo set_value('title'); ?>" placeholder="Enter title" required>
								</div>
								<?php echo form_error('title'); ?>
                            </div>						
						
							<div class="form-group ">
								<label class="form-label">Author</label>
								<div class="form-line">
									<input class="form-control" name="author" type="text" placeholder="Enter author" value="<?php echo set_value('author'); ?>" required>
								</div>
								<?php echo form_error('author'); ?>
                            </div>
                            
                            <div class="form-group">
								<label class="form-label">Date Published</label>
								<div class="form-line">
									<input class="datepicker form-control" name="date_published" type="text" value="<?php echo set_value('date_published'); ?>" placeholder="Enter date published">
								</div>
								<?php echo form_error('date_published'); ?>
                            </div>
                            
                            <div class="form-group">
								<label class="form-label">Number of page</label>
								<div class="form-line">
									<input class="form-control" name="number_page" type="text" value="<?php echo set_value('number_page'); ?>" placeholder="Number of page">
								</div>
								<?php echo form_error('number_page'); ?>
							</div>
							<div class="input-group">                                
								<label>Book of type</label>
								<div class="form-line">
									<select class="form-control" name="type">
									<?php 
									// Menampilkan option hewan qurban
									foreach($dataType as $r){
										echo "<option value='$r->id'>$r->name</option>";
									}
									?>
									</select>
								</div>
                        	</div>
							<button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
							<a href="<?php echo base_url('books')?>" class="btn btn-danger m-t-15 waves-effect">Back</a>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
