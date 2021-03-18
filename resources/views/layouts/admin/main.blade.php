<main id="main">
   <aside class="dashboard col-xs-12 col-md-2 col-lg-2">
        <div class="dashboard_list">
            <ul>
                <li class="{{ Route::currentRouteName() === 'admin.index' ? 'active' : '' }}"><a href="{{ route('admin.index') }}"> <i class="fas fa-tachometer-alt fa-lg fa-fw"></i> Dashboard </a></li>
                <li class="{{ Route::currentRouteName() === 'admin.restaurants.index' ? 'active' : '' }}"><a href="{{ route('admin.restaurants.index') }}" > <i class="fas fa-store fa-lg fa-fw"></i> Restaurant </a></li>
                <li class="{{ Route::currentRouteName() === 'admin.types.index' ? 'active' : '' }}"><a href="{{ route('admin.types.index') }}" > <i class="fas fa-folder-open fa-lg fa-fw"></i> Types </a></li>
                <li class="{{ Route::currentRouteName() === 'admin.dishes.index' ? 'active' : '' }}"><a href="{{ route('admin.dishes.index') }}" > <i class="fas fa-hamburger fa-lg fa-fw"></i> Dishes </a></li>
                <li class="{{ Route::currentRouteName() === 'admin.orders.index' ? 'active' : '' }}"><a href="{{ route('admin.orders.index') }}" > <i class="fas fa-receipt fa-lg fa-fw"></i> Orders </a></li>
            </ul>
        </div>
   </aside>

   <div id="main_content" class="col-xs-12 col-md-10 col-lg-10">
        @yield('content')
   </div>
</main>