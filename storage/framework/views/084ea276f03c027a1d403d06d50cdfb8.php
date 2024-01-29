




<?php $__env->startSection('content'); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Ptype_name</th>
      <th scope="col">Ptype_description</th>
      
      
    </tr>
  </thead>
  <tbody>
             <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($product->id); ?></td>
                  <td><?php echo e($product->name); ?></td>
                  <td><?php echo e($product->price); ?></td>
                  <td><?php echo e($product->quantity); ?></td>
                  <td><?php echo e($product->ptype->name); ?></td>
                  <td><?php echo e($product->ptype->description); ?></td>
                  
  
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  </tbody>

</table>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_api_task\microw\resources\views/products/index.blade.php ENDPATH**/ ?>