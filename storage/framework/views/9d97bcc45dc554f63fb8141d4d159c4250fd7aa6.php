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
        <h3 class="breadcrumb-header">User Table</h3>
    
               <div class="table-responsive">
                <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <!-- <th>Nickname</th> -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <!-- <td><?php echo e($user->nickname); ?></td> -->
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php if($user->rol == 0): ?>
                                Admin
                                <?php else: ?>
                                UserDefault
                                <?php endif; ?>
                            </td>
                        
                        <td><a href="<?php echo e(url('backend/user/' . $user->id . '/edit')); ?>" class="btn btn-inverse-success btn-fw">Edit</a></td>
                        <td><a href="#" data-id="<?php echo e($user->id); ?>" class="enlaceBorrar btn btn-inverse-danger btn-fw" >Delete</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>  
                <form id="formDelete" action="<?php echo e(url('backend/user')); ?>" method="post">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                </form>
               
        </div>
        
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/user/index.blade.php ENDPATH**/ ?>