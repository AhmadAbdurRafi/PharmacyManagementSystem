<?php $__env->startSection('content'); ?>

<?php
$total = 0;
foreach ($order_view as $value) {
    $total = $total + $value->subtotal;
}
?>


<form style="margin-left: 500px; margin-bottom:8px;" action="<?php echo e(url('/confirm-order')); ?>" role="form" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group col-md-6">      
        <input type="text" name="customer_phone_number" class="form-control" id="customer_phone_number" placeholder="Customer Phone Number" required="">
    </div>

    <input type="hidden" name="customer_id" value="<?php echo e($order_view[0]->customer_id); ?>">
    <input type="hidden" name="iteams" value="<?php echo e(count($order_view)); ?>">
    <input type="hidden" name="total" value="<?php echo e($total); ?>">

    <div class="form-group col-md-6">    
        <select id="product_quantity" name="payment_type" class="form-control">
            <option value="cash" selected>Cash</option>
            <option value="bkash">Bkash</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-left: 19px" >Confirm Order</button>

</form>

<div class="Space_" style="height: 1px; width:100%; background-color:#666666; margin-top:10px;"></div>  

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">serial</th>
            <th scope="col">Iteam</th>            
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub-Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $order_view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($value->order_id); ?></th>
            <td ><?php echo e($value->product_name); ?></td>
            <td><?php echo e($value->sale_price); ?></td>
            <td><?php echo e($value->product_quantity); ?></td>
            <td><?php echo e($value->subtotal); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div style="color:green; font-size: 20px;  margin-left:74%"> Total = <?php echo e($total); ?></div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/confirm_page.blade.php ENDPATH**/ ?>