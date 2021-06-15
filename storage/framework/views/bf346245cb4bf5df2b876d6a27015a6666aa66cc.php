<?php $__env->startSection('postscript'); ?>
<script src="<?php echo e(url('assets/backend/js/script.js?r=' . uniqid())); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form id="formDelete" action="<?php echo e(url('backend/favourite/' . $favourite->id)); ?>" method="post">
    <?php echo method_field('delete'); ?>
    <?php echo csrf_field(); ?>
</form>
<?php if(session()->has('error')): ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger" role="alert">
                <h2>Error ...</h2>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
        <h4 class="panel-title">Editing favourite <?php echo e($favourite->id); ?></h4>
    
    <form role="form" action="<?php echo e(url('backend/favourite/' . $favourite->id)); ?>" method="post" id="editFavouriteForm" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="iduser1">From user</label>
                <select name="iduser" id="iduser" required class="form-control">
                    <option value="" disabled>Select user</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if($user->id == old('iduser', $favourite->iduser)): ?>
                    
                    <option selected value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endif; ?>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                
            </div>
            
          
            <div class="form-group">
            <label for="idpreset">Preset</label>
            <select name="idpreset" id="idpreset" required class="form-control">
                <option value="" disabled>Select preset</option>
                <?php $__currentLoopData = $presets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if($preset->id == old('idpreset', $favourite->idpreset)): ?>
                
                <option selected value="<?php echo e($preset->id); ?>"><?php echo e($preset->name); ?></option>
                <?php else: ?>
                    <option value="<?php echo e($preset->id); ?>"><?php echo e($preset->name); ?></option>
                <?php endif; ?>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
        </div>
        
        <!-- /.card-body -->
        <div class="card-body">
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-warning">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/favourite/edit.blade.php ENDPATH**/ ?>