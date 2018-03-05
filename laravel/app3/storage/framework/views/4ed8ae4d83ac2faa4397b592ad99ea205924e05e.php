<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
		<h1>University Capture Program</h1>
	</div>
</div>

<div class="row">
	<div class="table table-responsive">
		<table class="table table-bordered" id="table">
			<tr>
				<th width="150px">No</th>
				<th>Name</th>
				<th>Program</th>
				<th>Registered</th>
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
				</th>
			</tr>
			
			<?php echo e(csrf_field()); ?>

			<?php $no=1; ?>
			<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="post<?php echo e($value->id); ?>">
					<td><?php echo e($no++); ?></td>
					<td><?php echo e($value->title); ?></td>
					<td><?php echo e($value->body); ?></td>
					<td><?php echo e($value->created_at); ?></td>
					<td>
						<a href="#" class="show-modal btn btn-info btn-sm" data-id="<?php echo e($value->id); ?>" data-title="<?php echo e($value->title); ?>" data-body="<?php echo e($value->body); ?>">
						  <i class="fa fa-eye"></i>
						</a>
						<a href="#" class="edit-modal btn btn-warning btn-sm" data-id="<?php echo e($value->id); ?>" data-title="<?php echo e($value->title); ?>" data-body="<?php echo e($value->body); ?>">
						  <i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a href="#" class="delete-modal btn btn-danger btn-sm" data-id="<?php echo e($value->id); ?>" data-title="<?php echo e($value->title); ?>" data-body="<?php echo e($value->body); ?>">
						  <i class="glyphicon glyphicon-trash"></i>
						</a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
</div>

<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="title">Name :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title"
              placeholder="Your Title Here" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Program :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="body" name="body"
              placeholder="Your Body Here" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
        </form>
      </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span>Save
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
    </div>
  </div>
</div></div>


<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
      </div>
		<div class="modal-body">
		<div class="form-group">
		  <label for="">ID :</label>
		  <b id="i"/>
		</div>
		<div class="form-group">
		  <label for="">Name :</label>
		  <b id="ti"/>
		</div>
		<div class="form-group">
		  <label for="">Program :</label>
		  <b id="by"/>
		</div>
		</div>
		</div>
	  </div>
</div>


<div id="myModal"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="modal">
          <div class="form-group">
            <label class="control-label col-sm-2"for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"for="title">Name</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="t">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"for="body">Program</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="b"></textarea>
            </div>
          </div>
        </form>
        
        <div class="deleteContent">
          Are You sure want to delete <span class="title"></span>?
          <span class="hidden id"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>