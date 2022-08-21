<?php $__env->startSection('content'); ?>


<div class="Space_" style="height: 100px; width:100%; "></div>   

<table class="table table-bordered table-bordered" >
    <thead>
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Product Quantity</th>
            <th scope="col">Sub-Total</th>
        </tr>
    </thead>

    <tbody >
        <?php $__currentLoopData = $view_iteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row" ><?php echo e($value->product_name); ?></th>
            <td><?php echo e($value->product_quantity); ?></td>
            <td><?php echo e($value->subtotal); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/view_iteams.blade.php ENDPATH**/ ?>