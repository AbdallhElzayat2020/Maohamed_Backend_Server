<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">JAVA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.users') }}" class="nav-link"><i class="fas fa-sort-amount-up"></i><span>Users
                        Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.homepage.index') }}" class="nav-link"><i class="fas fa-home"></i><span>Home
                        Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.company.index') }}" class="nav-link"><i
                        class="fas fa-building"></i><span>Companies Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.testimonial.index') }}" class="nav-link"><i
                        class="fas fa-star"></i><span>testimonial Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.orders.index') }}" class="nav-link"><i
                        class="fas fa-sort-amount-up"></i><span>Orders Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.services.index') }}" class="nav-link"><i
                        class="fas fa-tasks"></i><span>services Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.team.index') }}" class="nav-link"><i class="fas fa-people-carry"></i><span>Team
                        Page</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.gallery.index') }}" class="nav-link"><i
                        class="fas fa-th-large"></i><span>Gallery Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.courses.index') }}" class="nav-link"><i
                        class="fas fa-th-large"></i><span>Courses Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.blogs.index') }}" class="nav-link"><i class="fas fa-th-large"></i><span>blogs
                        Page</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.products.index') }}" class="nav-link"><i
                        class="fas fa-th-large"></i><span>products Page</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Landpage1</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.problems.index') }}">Problems</a></li>
                    <li><a class="nav-link" href="{{ route('admin.info-1.index') }}">Information</a></li>
                    <li><a class="nav-link" href="{{ route('admin.features.index') }}">Features</a></li>
                    <li><a class="nav-link" href="{{ route('admin.subscribe.index') }}">subscription</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Landpage2</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.info-2.index') }}">Information</a></li>
                    <li><a class="nav-link" href="{{ route('admin.subscribe-2.index') }}">subscription</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
