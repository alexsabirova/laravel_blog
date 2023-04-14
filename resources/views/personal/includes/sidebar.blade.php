<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info ml-3 pt-2">
                <h4><b><a href="{{ route('main.index') }}" class="d-block">L A R A B L O G</a></b></h4>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('personal.main.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('personal.liked.index') }}" class="nav-link">
                            <i class="nav-icon far fa-thumbs-up"></i>
                            <p>Favorite posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('personal.comments.index') }}" class="nav-link">
                            <i class="nav-icon far fa-comment"></i>
                            <p>Comments</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
