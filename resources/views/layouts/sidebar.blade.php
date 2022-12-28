<div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
              <a href="/admin"> <img alt="image" src="/assets/img/Logo.svg" height="50" width="50" /> <span
                    class="logo-name">Afeme</span>
              </a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">___</li>
              @can('role-list')
              <li class="dropdown {{ request()->is('admin/roles') ? 'active' : ''}} or {{ request()->is('admin/users') ? 'active' : ''}}">
                  <a href="#" class="menu-toggle nav-link has-dropdown">
                      <i class="fas fa-folder"></i><span>Ruxsatlar</span></a>
                  <ul class="dropdown-menu">
                      <li class="{{ request()->is('admin/roles/index*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.roles.index') }}">Rollar</a></li>
                      <li class="{{ request()->is('admin/users/index*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.users.index') }}">Foydalanuvchilar</a></li>
                  </ul>
              </li>
               @endcan
               <li class="dropdown {{ request()->is('admin/regions') ? 'active' : ''}}
               or {{ request()->is('admin/cities') ? 'active' : ''}}
               or {{ request()->is('admin/logos') ? 'active' : ''}}
               or {{ request()->is('admin/sales') ? 'active' : ''}} 
               or {{ request()->is('admin/materials') ? 'active' : ''}}
               or {{ request()->is('admin/categories') ? 'active' : ''}}
               or {{ request()->is('admin/repairs') ? 'active' : ''}}
               or {{ request()->is('admin/addresses') ? 'active' : ''}}
               or {{ request()->is('admin/networks') ? 'active' : ''}}
               or {{ request()->is('admin/partners') ? 'active' : ''}}
               or {{ request()->is('admin/advertisements') ? 'active' : ''}}
               or {{ request()->is('admin/partnericons') ? 'active' : ''}}
               or {{ request()->is('admin/sliders') ? 'active' : ''}}
               or {{ request()->is('admin/products') ? 'active' : ''}}
               or {{ request()->is('admin/clients') ? 'active' : ''}}">
                  <a href="#" class="menu-toggle nav-link has-dropdown">
                      <i class="fas fa-folder"></i><span>Kategoriya</span></a>
                  <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('admin.logos.index') }}"></i><span>Lagatip</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.cities.index') }}"></i><span>Shaharlar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.regions.index') }}"></i><span>Viloyatlar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.categories.index') }}"></i><span>Kategoriya</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.repairs.index') }}"></i><span>Tamirlash</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.materials.index') }}"></i><span>Materiallar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.sales.index') }}"></i><span>Sotish</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.sliders.index') }}"></i><span>Slayderlar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.addresses.index') }}"></i><span>Manzil</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.networks.index') }}"></i><span>Ijtimoiy Tarmoq</span></a></li>
              <!--<li><a class="nav-link" href="{{ route('admin.partners.index') }}"></i><span>Xamkorlar Haqida</span></a></li>-->
              <li><a class="nav-link" href="{{ route('admin.partnericons.index') }}"></i><span>Xamkorlar</span></a></li>
              <li><a class="nav-link" href="{{ route('admin.advertisements.index') }}"></i><span>Reklama</span></a></li>
               @can('client-list')
               <li><a class="nav-link" href="{{ route('admin.clients.index') }}"></i><span>Klentlar</span></a></li>
               <li><a class="nav-link" href="{{ route('admin.products.index') }}"></i><span>Products</span></a></li>
               @endcan
                  </ul>
              </li>
              <li class="menu-header">___</li>
          </ul>
      </aside>
  </div>
            
            
            
            
  
 