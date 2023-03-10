<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Manage Banners</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(URL::to('admin/admins/dashboard')); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="active"> Manage Banners</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info">
            <div class="ersu_message"><?php echo $__env->make('elements.admin.errorSuccessMessage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
              <div class="add_new_record"><a href="<?php echo e(URL::to('admin/banners/add')); ?>" class="btn btn-default"style="
    margin-top: -24px;
"><i class="fa fa-plus"></i> Add Banner</a></div>   
            <div class="m_content" id="listID">
                <?php echo $__env->make('elements.admin.banners.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>