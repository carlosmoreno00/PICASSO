<?php $__env->startSection('postscript'); ?>
<script src="<?php echo e(url('assets/backend/js/script.js?r=' . uniqid())); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form id="formDelete" action="<?php echo e(url('backend/photo/' . $photo->id)); ?>" method="post">
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
                    <h4 class="panel-title">Editing photo <?php echo e($photo->id); ?></h4>
                
   
    <form role="form" action="<?php echo e(url('backend/photo/' . $photo->id)); ?>" method="post" id="editPhotoForm" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        
            <div class="form-group">
            <label for="iduser">User</label>
            <select name="iduser" id="iduser" required class="form-control">
                <option value="" disabled>Select user</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if($user->id == old('iduser', $photo->iduser)): ?>
                
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
                
                <?php if($preset->id == old('idpreset', $photo->idpreset)): ?>
                
                <option selected value="<?php echo e($preset->id); ?>"><?php echo e($preset->name); ?></option>
                <?php else: ?>
                    <option value="<?php echo e($preset->id); ?>"><?php echo e($preset->name); ?></option>
                <?php endif; ?>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
           
        
        </div>
        <div class="form-group">
            <label for="camera">Camera</label>
            <input type="text" class="form-control" id="camera" placeholder="Camera" name="camera" value="<?php echo e(old('camera', $photo->camera)); ?>">
        </div>
        <div class="form-group">
            <label for="lens">Lens</label>
            <input type="text" class="form-control" id="lens" placeholder="Photo lens" name="lens" value="<?php echo e(old('lens', $photo->lens)); ?>">
        </div>
        <div class="form-group">
            <label for="shutter_speed">Shutter Speed</label>
            <input type="text" class="form-control" id="shutter_speed" placeholder="Photo shutter_speed" name="shutter_speed" value="<?php echo e(old('shutter_speed', $photo->shutter_speed)); ?>">
        </div>
        <div class="form-group">
            <label for="iso">ISO</label>
            <input type="text" class="form-control" id="iso" placeholder="Photo iso" name="iso" value="<?php echo e(old('iso', $photo->iso)); ?>">
        </div>
        <div class="form-group">
            <label for="focal">Focal</label>
            <input type="text" class="form-control" id="focal" placeholder="Photo focal" name="focal" value="<?php echo e(old('focal', $photo->focal)); ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" required class="form-control">
                <option value="" disabled>Select type</option>
                
                <?php if($photo->type == old('type', $photo->type)): ?>
                
                <option selected value="<?php echo e($photo->type); ?>"><?php echo e($photo->type); ?></option>
                    <option value="Abstract">Abstract</option>
                    <option value="Artistic">Artistic</option>
                    <option value="Architectural">Architectural</option>
                    <option value="Urban">Urban</option>
                    <option value="Portrait">Portrait</option>
                    <option value="Aerial">Aerial</option>
                    <option value="Submarine">Submarine</option>
                    <option value="Black&White">Black&White</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Gastronomy">Gastronomy</option>
                    <option value="Minimalist">Minimalist</option>
                    <option value="Astronomical">Astronomical</option>
                    <option value="Sport">Sport</option>
                <?php else: ?>
                    <option value="<?php echo e($photo->type); ?>"><?php echo e($photo->type); ?></option>
                <?php endif; ?>
                
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
              
              
              
           <div class="col-lg-6 grid-margin stretch-card">
                 <div class="card">
                <div class="card-body">
                   
                <div class="img-show" style="display:flex; width:100%; justify-content: center;align-items: center;flex-direction:column">
                  <img src="data:image/png;base64,<?php echo e($photo->photo); ?>" style="max-height:550px; object-fit: cover;border-radius: 20px;max-width:450px;">
                  <!--<h1 class="display-4">Photo</h1>-->
                  </div>
                     </div>
                      </div>
                 </div>
   </div>
                 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/photo/edit.blade.php ENDPATH**/ ?>