<?php $__env->startSection('content'); ?>


<div class="Space_" style="height: 100px; width:100%; ">
</div>   

<table class="table table-bordered table-bordered" >
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody >
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="oneline" >
            <th scope="row" ><?php echo e($v_product->product_id); ?></th>
            <td><?php echo e($v_product->product_name); ?></td>
            <td><?php echo e($v_product->product_description); ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">

                    <form method="post" action="<?php echo e(url('/edit-product')); ?>">    
                        <?php echo csrf_field(); ?>  
                        <input type="hidden" name="product_id" value="<?php echo e($v_product->product_id); ?>">
                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                    </form>

                    <form method="post" action="<?php echo e(url('/delete-product')); ?>">
                        <?php echo csrf_field(); ?>      
                        <input type="hidden" name="product_id" value="<?php echo e($v_product->product_id); ?>">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>

                </div>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/manage_product.blade.php ENDPATH**/ ?>