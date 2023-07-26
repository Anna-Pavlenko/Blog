<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">   
          <li class="nav-item">
              <a href="{{route('main.index')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                 Main
                </p>
              </a>
            </li>
          <li class="nav-item">
              <a href="{{route('personal.liked.index')}}" class="nav-link">
              <i class=" nav-icon far fa-heart" style="color: #c75cb0;"></i>
                <p>
                 Liked posts
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('personal.comment.index')}}" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
                <p>
                 Coments
                </p>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </aside>
