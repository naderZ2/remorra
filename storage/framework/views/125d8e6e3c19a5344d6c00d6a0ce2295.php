
<?php $__env->startSection('title', __('lang.Talent_Requests')); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo e(__('lang.Talent_Requests')); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo e(__('lang.Talent_Requests')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form action="<?php echo e(route('admin.talent-requests.index')); ?>" method="GET" class="row">
                        <div class="col-md-3 mb-2">
                            <input type="text" name="search" class="form-control" placeholder="<?php echo e(__('lang.search_by_company_contact_or_job')); ?>" value="<?php echo e(request('search')); ?>">
                        </div>
                        <div class="col-md-3 mb-2">
                            <select name="experience_level" class="form-control">
                                <option value=""><?php echo e(__('lang.All')); ?></option>
                                <option value="Junior" <?php echo e(request('experience_level') == 'Junior' ? 'selected' : ''); ?>>Junior</option>
                                <option value="Mid" <?php echo e(request('experience_level') == 'Mid' ? 'selected' : ''); ?>>Mid</option>
                                <option value="Senior" <?php echo e(request('experience_level') == 'Senior' ? 'selected' : ''); ?>>Senior</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('lang.Filter')); ?></button>
                            <a href="<?php echo e(route('admin.talent-requests.index')); ?>" class="btn btn-secondary"><?php echo e(__('lang.Reset')); ?></a>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="requests-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('lang.Company')); ?></th>
                                    <th><?php echo e(__('lang.Contact_Person')); ?></th>
                                    <th><?php echo e(__('lang.Contact_Email')); ?></th>
                                    <th><?php echo e(__('lang.Job_Title')); ?></th>
                                    <th><?php echo e(__('lang.Number_of_Positions')); ?></th>
                                    <th><?php echo e(__('lang.Experience_Level')); ?></th>
                                    <th><?php echo e(__('lang.created_at')); ?></th>
                                    <th><?php echo e(__('lang.Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($r->id); ?></td>
                                        <td><?php echo e($r->company_name); ?></td>
                                        <td><?php echo e($r->contact_person_name); ?></td>
                                        <td><?php echo e($r->contact_email); ?></td>
                                        <td><?php echo e($r->job_title); ?></td>
                                        <td><?php echo e($r->number_of_positions); ?></td>
                                        <td><?php echo e($r->experience_level); ?></td>
                                        <td><?php echo e($r->created_at->format('Y-m-d H:i')); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.talent-requests.show', $r->id)); ?>" class="btn btn-info btn-sm"><?php echo e(__('lang.View')); ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr><td colspan="9" class="text-center"><?php echo e(__('lang.No_records_found')); ?></td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <?php echo e($requests->appends(request()->query())->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script>
    $(document).ready(function(){
        $('#requests-table').DataTable({
            "order": [[0, 'desc']],
            "pageLength": 10
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Desktop\_\codeing\work\hoem\remorra\pro\resources\views/admin/talentRequests/index.blade.php ENDPATH**/ ?>