<?php $__env->startSection('title', __('lang.Talent_Application_Details')); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo e(__('lang.Talent_Application_Details')); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item"><?php echo e(__('lang.Talent_Applications')); ?></li>
<li class="breadcrumb-item active"><?php echo e(__('lang.Details')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0"><?php echo e(__('lang.Application')); ?> #<?php echo e($application->id); ?></h5>
                                <small class="text-muted"><?php echo e(__('lang.Submitted_on')); ?> <?php echo e($application->created_at->format('M d, Y \a\t h:i A')); ?></small>
                            </div>
                            <div>
                                <a href="<?php echo e(route('admin.talent-applications.index')); ?>" class="btn btn-secondary me-2">
                                    <i class="fa fa-arrow-left"></i> <?php echo e(__('lang.Back_to_List')); ?>

                                </a>
                                <?php if($application->cv_path): ?>
                                    <a href="<?php echo e(asset($application->cv_path)); ?>" class="btn btn-primary" target="_blank">
                                        <i class="fa fa-download"></i> <?php echo e(__('lang.Download_CV')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-user me-2"></i><?php echo e(__('lang.Personal_Information')); ?></h6>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th width="200"><?php echo e(__('lang.Name')); ?></th>
                                            <td><?php echo e($application->full_name); ?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.Email')); ?></th>
                                            <td>
                                                <a href="mailto:<?php echo e($application->email); ?>"><?php echo e($application->email); ?></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.phone')); ?></th>
                                            <td>
                                                <a href="tel:<?php echo e($application->phone); ?>"><?php echo e($application->phone); ?></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.City')); ?></th>
                                            <td><?php echo e($application->city->name ?? __('lang.N_A')); ?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.Risen')); ?></th>
                                            <td><?php echo e($application->risen->name ?? __('lang.N_A')); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-briefcase me-2"></i><?php echo e(__('lang.Professional_Information')); ?></h6>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th width="200"><?php echo e(__('lang.Current_Role')); ?></th>
                                            <td><?php echo e($application->current_role); ?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.Years_of_Experience')); ?></th>
                                            <td><?php echo e($application->years_of_experience); ?> <?php echo e(__('lang.Years')); ?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.English_Proficiency')); ?></th>
                                            <td>
                                                <span class="badge bg-<?php echo e($application->english_proficiency == 'Advanced' || $application->english_proficiency == 'Native' ? 'success' : 'info'); ?>">
                                                    <?php echo e($application->english_proficiency); ?>

                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.Start_Date')); ?></th>
                                            <td><?php echo e(\Carbon\Carbon::parse($application->start_date)->format('M d, Y')); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-link me-2"></i><?php echo e(__('lang.Online_Profiles')); ?></h6>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th width="200"><?php echo e(__('lang.LinkedIn_Profile')); ?></th>
                                            <td>
                                                <?php if($application->linkedin_profile): ?>
                                                    <a href="<?php echo e($application->linkedin_profile); ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                                        <i class="fa fa-linkedin"></i> <?php echo e(__('lang.View_Profile')); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <span class="text-muted"><?php echo e(__('lang.Not_provided')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.Portfolio_URL')); ?></th>
                                            <td>
                                                <?php if($application->portfolio_url): ?>
                                                    <a href="<?php echo e($application->portfolio_url); ?>" target="_blank" class="btn btn-outline-info btn-sm">
                                                        <i class="fa fa-globe"></i> <?php echo e(__('lang.View_Portfolio')); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <span class="text-muted"><?php echo e(__('lang.Not_provided')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.availability')); ?></th>
                                            <td><?php echo e($application->availability); ?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo e(__('lang.Referral_Source')); ?></th>
                                            <td><?php echo e($application->referral_source); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-code me-2"></i><?php echo e(__('lang.Technical_Skills')); ?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-3  rounded">
                                        <?php echo nl2br(e($application->technical_skills)); ?>

                                    </div>
                                </div>
                            </div>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Desktop\_\codeing\work\hoem\remorra\pro\resources\views/admin/talentApplications/details.blade.php ENDPATH**/ ?>