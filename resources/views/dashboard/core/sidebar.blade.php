<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">PORTFOLIO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route("dashboard.home")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Actions
    </div>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-skull"></i>
            <span>Skills</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route("dashboard.skills")}}">List</a>
                <a class="collapse-item" href="{{ route("dashboard.skill.create") }}">Create</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse"
           aria-expanded="true" aria-controls="collapse">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Work experience</span>
        </a>
        <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route("dashboard.works")}}">List</a>
                <a class="collapse-item" href="{{route("dashboard.work.create")}}">Create</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
           aria-expanded="true" aria-controls="collapse2">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>My Projects</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('dashboard.projects')}}">List</a>
                <a class="collapse-item" href="{{route('dashboard.project.create')}}">Create</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="{{route("dashboard.messages")}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Messages</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route("dashboard.about")}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>About</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


</ul>
<!-- End of Sidebar -->

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
