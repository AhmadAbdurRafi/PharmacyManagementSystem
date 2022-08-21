<?php $__env->startSection('content'); ?>

<div class="Space_" style="height: 100px; width:100%; "></div>   


<table class="table table-bordered table-bordered" >
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Iteams</th>
            <th scope="col">Payment Type</th>
            <th scope="col">Total Payment</th>
            <th scope="col">Date</th>           
            <th scope="col">View Iteams</th>
        </tr>
    </thead>

    <tbody >
        <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="oneline" >
            <th scope="row" ><?php echo e($value->sale_id); ?></th>
            <th scope="row" ><?php echo e($value->customer_Phone); ?></th>
            <td><?php echo e($value->iteams); ?></td>
            <td><?php echo e($value->payment_type); ?></td>
            <td><?php echo e($value->total); ?></td>        
            <td><?php echo e($value->updated_at); ?></td>            
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">

                    <form method="post" action="<?php echo e(url('/view-iteams')); ?>">
                        <?php echo csrf_field(); ?>      
                        <input type="hidden" name="customer_id" value="<?php echo e($value->customer_id); ?>">
                        <button type="submit" class="btn btn-outline-info">view</button>
                    </form>

                </div>

            </td>       
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pms-master\resources\views/report.blade.php ENDPATH**/ ?>