<?php $__env->startSection('title', __('lang.Talent_Applications')); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/owlcarousel.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo e(__('lang.Talent_Applications')); ?></h3>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo e(__('lang.Talent_Applications')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form action="<?php echo e(route('admin.talent-applications.index')); ?>" method="GET" class="row">
                        <div class="col-md-3 mb-2">
                            <select name="city_id" class="form-control select2">
                                <option value=""><?php echo e(__('lang.All')); ?> <?php echo e(__('lang.Regions')); ?></option>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($city->id); ?>" <?php echo e(request('city_id') == $city->id ? 'selected' : ''); ?>>
                                        <?php echo e($city->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="experience" class="form-control">
                                <option value="">Experience Level</option>
                                <option value="1" <?php echo e(request('experience') == '1' ? 'selected' : ''); ?>>1+ Years</option>
                                <option value="3" <?php echo e(request('experience') == '3' ? 'selected' : ''); ?>>3+ Years</option>
                                <option value="5" <?php echo e(request('experience') == '5' ? 'selected' : ''); ?>>5+ Years</option>
                                <option value="10" <?php echo e(request('experience') == '10' ? 'selected' : ''); ?>>10+ Years</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="english_level" class="form-control">
                                <option value="">English Level</option>
                                <option value="Basic" <?php echo e(request('english_level') == 'Basic' ? 'selected' : ''); ?>>Basic</option>
                                <option value="Intermediate" <?php echo e(request('english_level') == 'Intermediate' ? 'selected' : ''); ?>>Intermediate</option>
                                <option value="Advanced" <?php echo e(request('english_level') == 'Advanced' ? 'selected' : ''); ?>>Advanced</option>
                                <option value="Native" <?php echo e(request('english_level') == 'Native' ? 'selected' : ''); ?>>Native</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="text" name="search" class="form-control" placeholder="<?php echo e(__('lang.search_by_name_or_email')); ?>" value="<?php echo e(request('search')); ?>">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('lang.Filter')); ?></button>
                            <a href="<?php echo e(route('admin.talent-applications.index')); ?>" class="btn btn-secondary"><?php echo e(__('lang.Reset')); ?></a>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('lang.Name')); ?></th>
                                    <th><?php echo e(__('lang.Email')); ?></th>
                                    <th><?php echo e(__('lang.phone')); ?></th>
                                    <th><?php echo e(__('lang.Experience')); ?></th>
                                    <th><?php echo e(__('lang.Current_Role')); ?></th>
                                    <th><?php echo e(__('lang.English_Level')); ?></th>
                                    <th><?php echo e(__('lang.created_at')); ?></th>
                                    <th><?php echo e(__('lang.Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($application->id); ?></td>
                                        <td><?php echo e($application->full_name); ?></td>
                                        <td><?php echo e($application->email); ?></td>
                                        <td><?php echo e($application->phone); ?></td>
                                        <td><?php echo e($application->years_of_experience); ?> <?php echo e(__('lang.Years')); ?></td>
                                        <td><?php echo e($application->current_role); ?></td>
                                        <td><?php echo e($application->english_proficiency); ?></td>
                                        <td><?php echo e($application->created_at->format('Y-m-d H:i')); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.talent-applications.show', $application->id)); ?>" 
                                               class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> <?php echo e(__('lang.View')); ?>

                                            </a>
                                            <?php if($application->cv_path): ?>
                                                <a href="<?php echo e(asset($application->cv_path)); ?>" 
                                                   class="btn btn-success btn-sm" 
                                                   target="_blank">
                                                    <i class="fa fa-download"></i> <?php echo e(__('lang.CV')); ?>

                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="9" class="text-center">No applications found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <?php echo e($applications->appends(request()->query())->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl-custom.js')); ?>"></script>
<script>
	 	$('#carouselExampleControls').carousel({
  		interval: 3000
	})


	$(document).ready(function() {
    // Initialize Select2
    $('.select2').select2();
    
    // Initialize DataTable
    var table = $('#basic-1').DataTable({
        "order": [[ 0, "desc" ]],
        "pageLength": 10,
        "language": {
            "paginate": {
                "previous": "<",
                "next": ">"
            }
        }
    });
});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Desktop\_\codeing\work\hoem\remorra\pro\resources\views/admin/talentApplications/index.blade.php ENDPATH**/ ?>