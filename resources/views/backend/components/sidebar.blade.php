<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="assets/backend/img/logo.png" class="header-logo" /> <span
            class="logo-name">News Port</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="{{route('index')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="file"></i><span>News</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('publish.news')}}">Publish News</a></li>
            <li><a class="nav-link" href="{{route('manage.news')}}">Manage News</a></li>
            <li><a class="nav-link" href="{{route('news.trash')}}">Trash Bin</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="grid"></i><span>Category</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('add.category')}}">Add Category</a></li>
              <li><a class="nav-link" href="{{route('manage.category')}}">Manage Category</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="users"></i><span>Openion</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
            </ul>
          </li>
        <li class="menu-header">Media</li>
        <li class="dropdown">
            <a href="{{route('gallery')}}" class="nav-link"><i
                data-feather="image"></i><span>Gallery</span></a>
            
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link"><i
                data-feather="video"></i><span>Video</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link"><i
                data-feather="folder"></i><span>File Manager</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
            </ul>
          </li>
          <li class="menu-header">Others</li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="airplay"></i><span>Misc</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="play-circle"></i><span>Image Ads</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="user-check"></i><span>My Profile</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
              <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="{{route('setting')}}" class="nav-link"><i
                data-feather="settings"></i><span>Settings</span></a>
            
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link"><i
                data-feather="slack"></i><span>Visit Frontend</span></a>
            </ul>
          </li>
      
      </ul>
    </aside>
  </div>