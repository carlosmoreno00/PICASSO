<?php $__env->startSection('postscript'); ?>
<script src="<?php echo e(url('assets/backend/js/script.js?r=' . uniqid())); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form id="formDelete" action="<?php echo e(url('backend/preset/' . $preset->id)); ?>" method="post">
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
<div id="main-wrapper">
<div class="row">
<div class="col-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        <h4 class="panel-title">Editing preset <?php echo e($preset->name); ?></h4>
   
    <form role="form" action="<?php echo e(url('backend/preset/' . $preset->id)); ?>" method="post" id="editPresetForm" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="card-body">
            <div class="form-group">
            <label for="iduser">User</label>
            <select name="iduser" id="iduser" required class="form-control">
                <option value="" disabled>Select user</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if($user->id == old('iduser', $preset->iduser)): ?>
                
                <option selected value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php else: ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                <?php endif; ?>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
        </div>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" maxlength="60" minlength="2" required class="form-control" id="name" placeholder="Preset name" name="name" value="<?php echo e(old('name', $preset->name)); ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea minlength="10" class="form-control" name="description" id="description" placeholder="Description"><?php echo e(old('description', $preset->description)); ?></textarea>
            </div>
           <!--  <div class="form-group">-->
           <!--     <label for="file">File</label>-->
           <!--     <input type="file" class="form-control" id="file" name="file">-->
           <!--</div>-->
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" min="0" max="9999.99" step="0.01" required class="form-control" id="price" placeholder="Price" name="price" value="<?php echo e(old('price', $preset->price)); ?>">
            </div>
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
              
              
           <div class="col-lg-6 grid-margin stretch-card">
                 <div class="card">
                <div class="card-body">
                   
                <div class="img-show" style="display:flex; width:100%; justify-content: center;align-items: center;flex-direction:column">
                  <img src="data:image/png;base64,<?php echo e($preset->photo); ?>" style="max-height:450px; object-fit: cover;border-radius: 20px;max-width:450px;">
                  <!--<h1 class="display-4">Photo</h1>-->
                  </div>
                     </div>
                      </div>
                 </div>
   </div>
                 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/preset/edit.blade.php ENDPATH**/ ?>