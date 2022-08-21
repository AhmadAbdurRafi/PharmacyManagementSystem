<?php $__env->startSection('content'); ?>


<div style="color:red; font-size:15px;  margin-left:40%"> <?php echo $message; ?> </div>

<div style=" margin-left:60%;"><a href="<?php echo e(url('/confirm-page')); ?>">DONE</a></div>

<form style="margin-left: 500px; margin-bottom:8px;" action="<?php echo e(url('/sale-add')); ?>" role="form" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group col-md-6">     
        <input type="text" name="product_code" class="form-control" id="product_code" placeholder="Product Code" required="">
    </div>
    <div class="form-group col-md-6">       
        <input type="number" name="product_quantity" class="form-control" id="product_quantity"  placeholder="Product Quantity" required="">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 19px" >SUBMIT</button>

</form>

<!----------------------------------------------------------------------------------------------------------------->

<div class="Space_" style="height: 8px; width:100%; background-color:#666666; margin-top: 20px;"></div>  


<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">serial</th>
            <th scope="col">Iteam</th>            
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub-Total</th>
            <th scope="col">Action</th>
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
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">              
                    <form method="post" action="<?php echo e(url('/delete-order')); ?>">
                        <?php echo csrf_field(); ?>      
                        <input type="hidden" name="order_id" value="<?php echo e($value->order_id); ?>">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>

                </div>

            </td>


        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php
$total = 0;
foreach ($order_view as $value) {
    $total = $total + $value->subtotal;
}
?>

<div style="color:green; font-size: 20px;  margin-left:59%"> Total = <?php echo e($total); ?></div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Pharmacy_Management_System\resources\views/sale_view.blade.php ENDPATH**/ ?>