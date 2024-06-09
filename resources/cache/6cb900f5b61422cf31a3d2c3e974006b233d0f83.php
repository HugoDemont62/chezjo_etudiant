<?php $__env->startSection('content'); ?>
    <div class="panier">
        <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="produit">
                <h2><?php echo e($produit['nom']); ?></h2>
                <p><?php echo e($produit['description']); ?></p>
                <p>Prix : <?php echo e($produit['prix']); ?>€</p>
                <p>Quantité : <?php echo e($produit['quantite']); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?><?php

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>