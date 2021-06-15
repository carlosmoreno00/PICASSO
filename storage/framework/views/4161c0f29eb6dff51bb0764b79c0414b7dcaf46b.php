<?php $__env->startSection('postscript'); ?>
<script src="<?php echo e(url('assets/backend/js/script.js?r=' . uniqid())); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form id="formDelete" action="<?php echo e(url('backend/purchase/' . $purchase->id)); ?>" method="post">
    <?php echo method_field('delete'); ?>
    <?php echo csrf_field(); ?>
</form>
<div class="row">
           
        
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        <h3 class="breadcrumb-header">Purchase Table</h3>
    
                <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                    <tr>
                        <th scope="col">Field</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>User name</td>
                        <td><?php echo e($purchase->user->name); ?></td>
                    </tr>
                    <tr>
                        <td>Preset</td>
                        <td><?php echo e($purchase->preset->name); ?></td>
                    </tr>
                    <!-- <tr>-->
                    <!--    <td>Preset photo</td>-->
                    <!--    <td><img src="data:image/png;base64,<?php echo e($purchase->preset->photo); ?>" style="width:50px;"></td>-->
                    <!--</tr>-->
                </tbody>
                </table>  
                </div>
              </div>
            </div>
            
             <div class="col-lg-6 grid-margin stretch-card">
                 <div class="card">
                <div class="card-body">
                   
                <div class="img-show" style="display:flex; width:100%; justify-content: center;align-items: center;flex-direction:column">
                  <img src="data:image/png;base64,<?php echo e($purchase->preset->photo); ?>" style="max-height:250px; object-fit: cover;border-radius: 300px;max-width:450px;">
                  <!--<h1 class="display-4">Photo</h1>-->
                  </div>
                     </div>
                      </div>
                 </div>
            
           
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-warning">Back</a>
                            <a href="<?php echo e(url('backend/purchase')); ?>" class="btn btn-primary">Purchases</a>
                            <a href="#" data-id="<?php echo e($purchase->id); ?>" data-name="<?php echo e($purchase->id); ?>" class="btn btn-danger" id="enlaceBorrar">Delete purchase</a>
                        </div>
                    </div>
                </div>
            
        </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/backend/purchase/show.blade.php ENDPATH**/ ?>