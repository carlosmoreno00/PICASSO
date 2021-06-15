<?php $__env->startSection('postscript'); ?>
<script src="<?php echo e(url('assets/backend/js/script.js?r=' . uniqid())); ?>"></script>
<?php $__env->stopSection(); ?>
<style type="text/css">
    #output{
                      max-height:250px;
                      -webkit-box-shadow: 9px 14px 46px -27px rgba(0,0,0,0.51);
                        -moz-box-shadow: 9px 14px 46px -27px rgba(0,0,0,0.51);
                        box-shadow: 9px 14px 46px -27px rgba(0,0,0,0.51);
                  }
                  .center-img-file{
                      width:100%;
                      display:flex;
                      justify-content:center;
                      padding:30px 0;
                  }
                  h1{
                      font-family: "Raleway";
                        font-size: 1.5em;
                        letter-spacing: 1px;
                        margin-bottom: 40px;
                        width: 100%;
                        text-align: center;
                  }
                  
                  .soltarphoto{
                    background: 0 0;
                    height: auto;
                    border: 2px dashed rgba(0,0,0,.3);
                    border-radius: 0;
                    padding: 10px 15px;
                    font: 400 15px "Raleway",sans-serif;
                    line-height: 1.4;
                    position:relative;
                    
                  }
                  .soltarphoto h5{
                        font-family: "Raleway";
                        font-size: .8em;
                        letter-spacing: 1px;
                        position:absolute;
                        text-align:center;
                        top:0;
                        bottom:0;
                        left:0;
                        right:0;
                        margin:auto;
                        width:100%;
                        height:20px;
                    }
                  .fileout{
                      width:100%;
                      height:385px;
                    	background:transparent;
                    	opacity:0;
                  }
                 
</style>
<?php $__env->startSection('content'); ?>
<?php if(session()->has('error')): ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger" role="alert">
                <h2>Error ...</h2>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Mostrar todos los errores juntos -->

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Creating a photo</h4>
                  <form role="form" action="<?php echo e(url('backend/photo')); ?>" method="post" id="createPhotoForm" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card-body">
        <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="iduser">User</label>
                
                            <?php if(isset($users)): ?>
                            <select name="iduser" id="iduser" required class="form-control">
                                <option value="" disabled selected>Select user</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->id); ?> - <?php echo e($user->name); ?></option>
                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php else: ?>
                                <input type="text" value="<?php echo e($user->name); ?>" readonly class="form-control">
                                <input type="hidden" id="iduser" name="iduser" value="<?php echo e($user->id); ?>">
                            <?php endif; ?>
                
                        </div>
                        
                        <div class="form-group">
                            <label for="idpreset">Preset</label>
                
                            <?php if(isset($presets)): ?>
                            <select name="idpreset" id="idpreset" required class="form-control">
                                <option value="" disabled selected>Select preset</option>
                                <?php $__currentLoopData = $presets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                                <option value="<?php echo e($preset->id); ?>"><?php echo e($preset->id); ?> - <?php echo e($preset->name); ?></option>
                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php else: ?>
                                <input type="text" value="<?php echo e($preset->name); ?>" readonly class="form-control">
                                <input type="hidden" id="idpreset" name="idpreset" value="<?php echo e($preset->id); ?>">
                            <?php endif; ?>
                
                        </div>
                        <div class="form-group">
                            <label for="camera">Camera</label>
                            <input type="text" class="form-control" id="camera" placeholder="Camera" name="camera" value="<?php echo e(old('camera')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="lens">Lens</label>
                            <input type="text" class="form-control" id="lens" placeholder="Lens" name="lens" value="<?php echo e(old('lens')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="shutter_speed">Shutter Speed</label>
                            <input type="text" class="form-control" id="shutter_speed" placeholder="Shutter Speed" name="shutter_speed" value="<?php echo e(old('shutter_speed')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="iso">ISO</label>
                            <input type="text" class="form-control" id="iso" placeholder="ISO" name="iso" value="<?php echo e(old('iso')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="focal">Focal</label>
                            <input type="text" class="form-control" id="focal" placeholder="Focal" name="focal" value="<?php echo e(old('focal')); ?>">
                        </div>
                        <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="type" required class="form-control">
                            <option value="" disabled selected>Select type</option>
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
                        </select>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="col-md-6">
                        <div class="form-group row" style="width:100%;padding-left:20px">
                          <div class="form-group" style="width:100%">
                            <label for="photo">Photo</label>
                            <!--<input type="file" class="form-control file-upload-info" id="photo" name="photo">-->
                             <div class="center-img-file">
                                     <img id="output"/>
                                 </div>
                                 <div class="soltarphoto">
                                     <h5>Click or drag the photo here</h5>
                                     <input type="file" accept="image/*" onchange="loadFile(event)" class="fileout" id="photo" name="photo">
                                 </div>
                        </div>
                        </div>
                      </div>
                      </div>
                      
                    </div>
           
    </form>
                  
                </div>
              </div>
            </div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      $(".fileout").addClass("height-input-form")
    }
  };
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/photo/create.blade.php ENDPATH**/ ?>