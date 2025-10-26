<div class="sidebar-wrapper">
	<div style="  max-height: 100vh;">
		<div class="logo-wrapper">
			<a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('logo.png')}}" alt="" height="50" width="50" alt=""><img class="img-fluid for-dark" src="{{asset('logo.png')}}" alt="" height="50" width="50" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			{{-- <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> --}}
		</div>
		<div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('logo.png')}}" alt="" height="50" width="50" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('/')}}"><img class="img-fluid"src="{{asset('logo.png')}}" alt="" height="50" width="50" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					{{-- <li class="sidebar-main-title">
						<div>
							<h6 class="lan-1">{{ trans('lang.General') }} </h6>
                     		<p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
						</div>
					</li> --}}
					<li class="sidebar-list">
						<label class="badge badge-success"></label><a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="home"></i><span class="lan-3"> @lang('lang.Dashboard')</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;' }}">
						    	 <li><a href="{{route('settings.edit')}}" class="{{ Route::currentRouteName()=='settings.edit' ? 'active' : '' }}">@lang('lang.contact_us') </a></li> 
							<li><a href="{{route('city.index')}}" class="{{ Route::currentRouteName()=='city.index' ? 'active' : '' }}"> @lang('lang.regions') </a></li>
							<!--<li><a href="{{route('city.create')}}" class="{{ Route::currentRouteName()=='city.create' ? 'active' : '' }}">@lang('lang.add_region')</a></li>-->
							
							
							{{-- <li><a class="lan-4 {{ Route::currentRouteName()=='slider.index' ? 'active' : '' }}" href="{{route('slider.index')}}">@lang('lang.slider')</a></li> --}}
							<!--<li><a class="lan-4 {{ Route::currentRouteName()=='banner.index' ? 'active' : '' }}" href="{{route('banner.index')}}">@lang('lang.banner')</a></li>-->
							<!--<li><a class="lan-4 {{ Route::currentRouteName()=='banner.create' ? 'active' : '' }}" href="{{route('banner.create')}}">@lang('lang.add_banner')</a></li>-->

						
							
						
							
						
						
						</ul>
					</li>
					


					


					


					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{ (request()->route()->uri() == 'users/admins')||(request()->route()->uri() =='users/roles') ? 'active' : '' }}" href="#"><i data-feather="users"></i>
							<span class="lan-7">{{ trans('lang.admins') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{ (request()->route()->uri() == 'users/admins')||(request()->route()->uri() =='users/roles') ? 'down' : 'right' }}"></i></div>
						</a>
	                	<ul class="sidebar-submenu" style="display: {{ (request()->route()->uri() == 'users/admins')||(request()->route()->uri() =='users/roles') ? 'block;' : 'none;' }}">
                        	<li><a href="{{ route('admins.index') }}" class="{{ Route::currentRouteName() == 'admins.index' ? 'active' : '' }}">{{ trans('lang.admins') }}</a></li>
							@can('roles')
									<li><a href="{{ route('roles.index') }}" class="{{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}">{{ trans('lang.Roles') }}</a></li>
							@endcan	
                    	</ul>
                	</li>


					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{ request()->route()->uri() == 'users/clients' ? 'active' : '' }}" href="#"><i data-feather="users"></i>
							<span class="lan-7">{{ trans('lang.Clients') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{ request()->route()->uri() == 'users/clients' ? 'down' : 'right' }}"></i></div>
						</a>
						
	                    <ul class="sidebar-submenu" style="display: {{ request()->route()->uri() == 'users/clients' ? 'block;' : 'none;' }}">
							<li><a href="{{ route('admin.clients') }}" class="{{ Route::currentRouteName() == 'admin.clients' ? 'active' : '' }}">{{ trans('lang.Clients') }}</a></li>
                      </ul>
                  	</li>


			
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{ request()->route()->uri() == 'users/seller' ? 'active' : '' }}" href="#"><i data-feather="users"></i>
							<span class="lan-7">{{ trans('lang.Sellers') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{ request()->route()->uri() == 'users/seller' ? 'down' : 'right' }}"></i></div>
						</a>

	                    <ul class="sidebar-submenu" style="display: {{ request()->route()->uri() == 'users/seller' ? 'block;' : 'none;' }}">
                          <li><a href="{{ route('seller.index') }}" class="{{ Route::currentRouteName() == 'seller.index' ? 'active' : '' }}">{{ trans('lang.Sellers') }}</a></li>

                      </ul>
                  	</li>


				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>