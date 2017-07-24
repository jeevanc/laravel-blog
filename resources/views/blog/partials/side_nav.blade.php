<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ request()->is('meropustak') ? 'active' : '' }}">
                <a href="{{route('meropustak_dashboard')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
               <a href="">
                   <i class="fa fa-dashboard"></i>
                   <span>Posts</span>
               </a>
           </li>
           <li>
               <a href="">
                   <i class="fa fa-dashboard"></i>
                   <span>Categories</span>
               </a>
           </li>
        </ul>
    </section>
</aside>
