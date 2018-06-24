<!DOCTYPE html>
<html  lang="<?php echo e(app()->getLocale()); ?>">
<head>
    
    <meta charset="utf-8">
    <title>Movies Showing</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    
    </head>

   <body>
    <div class="container">
        <h1>Movies Showing Now</h1>
      <form method="GET" action="<?php echo e(url('films/search')); ?>">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
   <br/>
      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Release Year</th>
            </tr>
            <?php if(count($films) > 0): ?>
                <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($film->film_id); ?></td>
                    <td><?php echo e($film->title); ?></td>
                    <td><?php echo e($film->description); ?></td>
                    <td><?php echo e($film->release_year); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td colspan="3" class="text-danger">Result not found.</td>
            </tr>
            <?php endif; ?>
        </table>
   </div>
</body>
</html>
