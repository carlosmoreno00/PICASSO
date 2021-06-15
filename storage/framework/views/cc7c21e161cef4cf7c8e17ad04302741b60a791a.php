<?php $__env->startSection('postscript'); ?>
<script src="<?php echo e(url('assets/backend/js/script.js?r=' . uniqid())); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--
op -> store, update, destroy
r -> negativo, 0, positivo (acierto)
id -> id del elemento afectado
-->

<?php if(session()->has('op')): ?>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success" role="alert">
            Operation: <?php echo e(session()->get('op')); ?>. Id: <?php echo e(session()->get('id')); ?>. Result: <?php echo e(session()->get('r')); ?>

        </div>
    </div>
</div>
<?php endif; ?>


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        <h3 class="breadcrumb-header">Comment Table</h3>
   
               <div class="table-responsive">
                <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                    <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Published by
                        <a href="<?php echo e(route(
                        'backend.comment.index',
                        ['search' => $search,
                         'sort' => 'asc',
                         'orderby' => 1])); ?>">↓</a>
                        <a href="<?php echo e(route(
                        'backend.comment.index',
                        ['search' => $search,
                         'sort' => 'desc',
                         'orderby' => 1])); ?>">↑</a>
                    </th>
                    <th scope="col">Photo
                        <a href="<?php echo e(route(
                        'backend.comment.index',
                        ['search' => $search,
                         'sort' => 'asc',
                         'orderby' => 2])); ?>">↓</a>
                        <a href="<?php echo e(route(
                        'backend.comment.index',
                        ['search' => $search,
                         'sort' => 'desc',
                         'orderby' => 2])); ?>">↑</a>
                    </th>
                    <th scope="col">Date
                        <a href="<?php echo e(route(
                        'backend.comment.index',
                        ['search' => $search,
                         'sort' => 'asc',
                         'orderby' => 3])); ?>">↓</a>
                        <a href="<?php echo e(route(
                        'backend.comment.index',
                        ['search' => $search,
                         'sort' => 'desc',
                         'orderby' => 3])); ?>">↑</a>
                    </th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comment->id); ?></td>
                        <td><?php echo e($comment->user->name); ?></td>
                        <td><img src="data:image/png;base64,<?php echo e($comment->photo->photo); ?>" style="width: auto;
    height: 60px;
    border-radius: 0;"></td>
                        <td><?php echo e($comment->created_at); ?></td>
                        
                        <td><a href="<?php echo e(url('backend/comment/' . $comment->id)); ?>" class="btn btn-inverse-primary btn-fw">Show</a></td>
                        <td><a href="<?php echo e(url('backend/comment/' . $comment->id . '/edit')); ?>" class="btn btn-inverse-success btn-fw">Edit</a></td>
                        <td><a href="#" data-id="<?php echo e($comment->id); ?>" class="enlaceBorrar btn btn-inverse-danger btn-fw" >Delete</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
                <div class="col-lg-6">
                    <?php echo e($comments->links()); ?>

                </div>
                <form id="formDelete" action="<?php echo e(url('backend/comment')); ?>" method="post">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                </form>
                </div>
            
        <div class="card-body">
            <a href="<?php echo e(route('backend.comment.create')); ?>" class="btn btn-primary">Create a new comment</a>
        </div>
    
                </div>
              </div>
            </div>
   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/comment/index.blade.php ENDPATH**/ ?>