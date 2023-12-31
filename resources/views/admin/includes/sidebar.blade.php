<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">   
          <li class="nav-item">
              <a href="{{route('admin.index')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                 Main
                </p>
              </a>
            </li>
          <li class="nav-item">
              <a href="{{route('admin.user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                 User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.post.index')}}" class="nav-link">
                <i class="nav-icon fas fa-quote-right"></i>
                <p>
                 Post
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.category.index')}}" class="nav-link">
                <i class="nav-icon fas fa-window-restore"></i>
                <p>
                  Category
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.tag.index')}}" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
                <p>
                  Tag
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
