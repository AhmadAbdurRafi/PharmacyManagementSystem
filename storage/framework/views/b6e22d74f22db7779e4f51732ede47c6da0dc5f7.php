<?php $__env->startSection('content'); ?>
<div class="Space_" style="height: 100px; width:100%; "></div>  


<form style="margin-left: 500px; margin-bottom:8px;" action="<?php echo e(url('/save-product')); ?>" role="form" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
    <div class="form-group col-md-6">
        <label for="Procut Name">Product Name</label>
        <input type="text" name="product_name" class="form-control" id="" required="">
    </div>
    <div class="form-group col-md-6">
        <label for="Product DEscription">Product DEscription</label>
        <input type="text" name="product_description" class="form-control" id="" required="">
    </div>

    <button type="submit" class="btn btn-primary"   style="margin-left: 607px; margin-bottom:8px;">Submit</button>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/add_product.blade.php ENDPATH**/ ?>