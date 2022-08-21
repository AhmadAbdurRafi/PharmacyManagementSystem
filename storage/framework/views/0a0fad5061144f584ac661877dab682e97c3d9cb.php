<?php $__env->startSection('content'); ?>

<form style="margin-left: 500px; margin-bottom:8px;" action="<?php echo e(url('/save-purchase')); ?>" role="form" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group col-md-6">
        <label for="inputState">Product Name</label>
        <select id="inputState" class="form-control" name="product_name">
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           
            <option value="<?php echo e($value->product_name); ?>"><?php echo e($value->product_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="inputState">Supplier Name</label>
        <select id="inputState" class="form-control" name="supplier_name">
            <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value->supplier_name); ?>"><?php echo e($value->supplier_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>


    <div class="form-group col-md-6">
        <label for="">Quantity</label>
        <input type="number" name="product_quantity" class="form-control" id="" placeholder="Write Quantity Here" required="">
    </div>

    <div class="form-group col-md-6">
        <label for="Procut Name">Purchase Price</label>
        <input type="number" name="purchase_price" class="form-control" id="" placeholder="purchase Procut Price" required="">
    </div>
    <div class="form-group col-md-6">
        <label for="Procut Name">Sale Price</label>
        <input type="number" name="sale_price" class="form-control" id="" placeholder="sale Product Price" required="">
    </div>

    <button type="submit" class="btn btn-primary" style="margin-left: 608px">Submit</button>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/purchase.blade.php ENDPATH**/ ?>