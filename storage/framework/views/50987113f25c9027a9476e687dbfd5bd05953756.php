<?php $__env->startSection('content'); ?>


<div class="Space_" style="height: 100px; width:100%; ">
</div>   

<table class="table table-bordered table-bordered" >
    <thead>
        <tr>
            <th scope="col">Product Code</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Supplier Name</th>           
            <th scope="col">Product Quantity</th>
            <th scope="col">purchase Price</th>          
            <th scope="col">sale Price</th>          
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="oneline" >
            <th scope="row" ><?php echo e($value->purchase_id); ?></th>
            <td><?php echo e($value->product_name); ?></td>
            <td><?php echo e($value->supplier_name); ?></td>
            <td><?php echo e($value->product_quantity); ?></td>
            <td><?php echo e($value->purchase_price); ?></td>        
            <td><?php echo e($value->sale_price); ?></td>        
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/stoke.blade.php ENDPATH**/ ?>