
<?php $__env->startSection('title', __('lang.Talent_Request_Details')); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo e(__('lang.Talent_Request_Details')); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item"><?php echo e(__('lang.Talent_Requests')); ?></li>
<li class="breadcrumb-item active"><?php echo e(__('lang.Details')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0"><?php echo e(__('lang.Request')); ?> #<?php echo e($requestItem->id); ?></h5>
                        <small class="text-muted"><?php echo e($requestItem->created_at->format('M d, Y \a\t h:i A')); ?></small>
                    </div>
                    <div>
                        <a href="<?php echo e(route('admin.talent-requests.index')); ?>" class="btn btn-secondary"><?php echo e(__('lang.Back_to_List')); ?></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr><th><?php echo e(__('lang.Company')); ?></th><td><?php echo e($requestItem->company_name); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Company_Website')); ?></th><td><?php echo e($requestItem->company_website); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Contact_Person')); ?></th><td><?php echo e($requestItem->contact_person_name); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Contact_Email')); ?></th><td><?php echo e($requestItem->contact_email); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Contact_Phone')); ?></th><td><?php echo e($requestItem->contact_phone); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Job_Title')); ?></th><td><?php echo e($requestItem->job_title); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Number_of_Positions')); ?></th><td><?php echo e($requestItem->number_of_positions); ?></td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr><th><?php echo e(__('lang.Experience_Level')); ?></th><td><?php echo e($requestItem->experience_level); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Employment_Type')); ?></th><td><?php echo e($requestItem->employment_type); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Contract_Duration')); ?></th><td><?php echo e($requestItem->contract_duration); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Expected_Start_Date')); ?></th><td><?php echo e($requestItem->expected_start_date); ?></td></tr>
                                <tr><th><?php echo e(__('lang.Budget_Range')); ?></th><td><?php echo e($requestItem->budget_range); ?></td></tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5><?php echo e(__('lang.Required_Skills')); ?></h5>
                            <div class="p-3 "><?php echo nl2br(e($requestItem->required_skills)); ?></div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5><?php echo e(__('lang.Job_Description')); ?></h5>
                            <div class="p-3 "><?php echo nl2br(e($requestItem->job_description)); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Desktop\_\codeing\work\hoem\remorra\pro\resources\views/admin/talentRequests/details.blade.php ENDPATH**/ ?>