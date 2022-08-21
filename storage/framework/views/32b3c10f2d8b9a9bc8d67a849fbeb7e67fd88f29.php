<?php $__env->startSection('content'); ?>

<div class="Space_" style="height: 100px; width:100%; "></div>  



<form bg-dark style="margin-left: 500px; margin-bottom:8px;" action="<?php echo e(url('/update-supplier/'.$supplier[0]->supplier_id)); ?>" role="form" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group col-md-6">
        <label for="inputAddress">Supplier Name</label>
        <input type="text" value="<?php echo e($supplier[0]->supplier_name); ?>" class="form-control" name="supplier_name" id="" placeholder="Enter Name" required="">
    </div>

    <div class="form-group col-md-6">
        <label for="inputAddress2">Supplier Phone</label>
        <input type="number" name="supplier_Phone_num" value="<?php echo e($supplier[0]->supplier_Phone_num); ?>" class="form-control" id="" placeholder="Enter Phone Number" required="">
    </div>    

    <button type="submit" class="btn btn-primary" style="margin-left: 607px; margin-bottom:8px;">SUBMIT</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pharmacy_Management_System\resources\views/edit_supplier.blade.php ENDPATH**/ ?>