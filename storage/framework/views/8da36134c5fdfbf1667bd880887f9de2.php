<div class="sidebar-wrapper">
	<div style="  max-height: 100vh;">
		<div class="logo-wrapper">
			<a href="<?php echo e(route('/')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('logo.png')); ?>" alt="" height="50" width="50" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('logo.png')); ?>" alt="" height="50" width="50" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('logo.png')); ?>" alt="" height="50" width="50" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('/')); ?>"><img class="img-fluid"src="<?php echo e(asset('logo.png')); ?>" alt="" height="50" width="50" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					
					<li class="sidebar-list">
						<label class="badge badge-success"></label><a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'active' : ''); ?>" href="#"><i data-feather="home"></i><span class="lan-3"> <?php echo app('translator')->get('lang.Dashboard'); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;'); ?>">
						    	 <li><a href="<?php echo e(route('settings.edit')); ?>" class="<?php echo e(Route::currentRouteName()=='settings.edit' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.contact_us'); ?> </a></li> 
							<li><a href="<?php echo e(route('city.index')); ?>" class="<?php echo e(Route::currentRouteName()=='city.index' ? 'active' : ''); ?>"> <?php echo app('translator')->get('lang.regions'); ?> </a></li>
							<!--<li><a href="<?php echo e(route('city.create')); ?>" class="<?php echo e(Route::currentRouteName()=='city.create' ? 'active' : ''); ?>"><?php echo app('translator')->get('lang.add_region'); ?></a></li>-->
							
							
							
							<!--<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='banner.index' ? 'active' : ''); ?>" href="<?php echo e(route('banner.index')); ?>"><?php echo app('translator')->get('lang.banner'); ?></a></li>-->
							<!--<li><a class="lan-4 <?php echo e(Route::currentRouteName()=='banner.create' ? 'active' : ''); ?>" href="<?php echo e(route('banner.create')); ?>"><?php echo app('translator')->get('lang.add_banner'); ?></a></li>-->

						
							
						
							
						
						
						</ul>
					</li>
					


					


					


					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e((request()->route()->uri() == 'users/admins')||(request()->route()->uri() =='users/roles') ? 'active' : ''); ?>" href="#"><i data-feather="users"></i>
							<span class="lan-7"><?php echo e(trans('lang.admins')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e((request()->route()->uri() == 'users/admins')||(request()->route()->uri() =='users/roles') ? 'down' : 'right'); ?>"></i></div>
						</a>
	                	<ul class="sidebar-submenu" style="display: <?php echo e((request()->route()->uri() == 'users/admins')||(request()->route()->uri() =='users/roles') ? 'block;' : 'none;'); ?>">
                        	<li><a href="<?php echo e(route('admins.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'admins.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.admins')); ?></a></li>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles')): ?>
									<li><a href="<?php echo e(route('roles.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'roles.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.Roles')); ?></a></li>
							<?php endif; ?>	
                    	</ul>
                	</li>


					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->uri() == 'talent-applications' ? 'active' : ''); ?>" href="#"><i data-feather="briefcase"></i>
							<span class="lan-7"><?php echo e(trans('lang.Applications')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->uri() == 'talent-applications' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->uri() == 'talent-applications' ? 'block;' : 'none;'); ?>">
							<li><a href="<?php echo e(route('admin.talent-applications.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'talent-applications.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.Talent_Applications')); ?></a></li>
						</ul>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->uri() == 'talent-requests' ? 'block;' : 'none;'); ?>">
							<li><a href="<?php echo e(route('admin.talent-requests.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'talent-requests.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.Talent_Requests')); ?></a></li>
						</ul>
					</li>


			
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->uri() == 'users/seller' ? 'active' : ''); ?>" href="#"><i data-feather="users"></i>
							<span class="lan-7"><?php echo e(trans('lang.Sellers')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->uri() == 'users/seller' ? 'down' : 'right'); ?>"></i></div>
						</a>

	                    <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->uri() == 'users/seller' ? 'block;' : 'none;'); ?>">
                          <li><a href="<?php echo e(route('seller.index')); ?>" class="<?php echo e(Route::currentRouteName() == 'seller.index' ? 'active' : ''); ?>"><?php echo e(trans('lang.Sellers')); ?></a></li>

                      </ul>
                  	</li>


				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div><?php /**PATH C:\Users\HP\OneDrive\Desktop\_\codeing\work\hoem\remorra\pro\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>