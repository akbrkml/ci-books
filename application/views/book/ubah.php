<ol class="breadcrumb breadcrumb-bg-deep-purple">
	<li>
		<a href="<?php echo base_url('hewan')?>">Data Books</a>
	</li>
	<li class="active">
		Update Data
	</li>
</ol>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Form Update Books
				</h2>
			</div>
			<div class="body">
				<div class="row">
					<form method="POST" action="<?php echo base_url('books/validasiUbahData')?>">
						<div class="col-md-12" style="margin-bottom:0;">
							<div class="form-msg">
								<?php if(isset($msg_err)){echo $msg_err;}?>
							</div>
						</div>
						<?php foreach($dataBooks as $r){?>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Title</label>
								<div class="form-line">
									<input class="form-control" name="id" type="hidden" value="<?php echo $r->id; ?>" required>
									<input class="form-control" name="title" type="text" value="<?php echo set_value('title',$r->title); ?>" placeholder="Enter title"
									required>
								</div>
								<?php echo form_error('title'); ?>
							</div>

							<div class="form-group ">
								<label class="form-label">Author</label>
								<div class="form-line">
									<input class="form-control" name="author" placeholder="Enter author" type="text" required value="<?php echo set_value('author',$r->author); ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="form-label">Date Published</label>
								<div class="form-line">
									<input class="form-control" name="date_published" type="text" placeholder="Enter date published" value="<?php echo set_value('date_published',$r->date_published); ?>">
								</div>
							</div>

							<div class="form-group " style="margin-bottom:0px;">
								<label class="form-label">Number of page</label>
								<div class="form-line">
									<input class="form-control" name="number_page" placeholder="Enter number page" type="text"  value="<?php echo set_value('number_page',$r->number_page); ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Book of type</label>
								<div class="form-line">
									<select class="form-control" name="type" required>
										<?php
										foreach($dataType as $type){
											if ($type->id==$r->type){
												echo '<option value="'.$type->id.'" selected>'.$type->name.'</option>';
											}
											else{
												echo '<option value="'.$type->id.'">'.$type->name.'</option>';
											}
										}
										?>
								</select>
								</div>
							</div>
							<button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
							<a href="<?php echo base_url('books')?>" class="btn btn-danger m-t-15 waves-effect">Back</a>
						</div>
				</div>
				<?php }?>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
