<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                {{--<img src="{{ Session('user')->avatar_url}}" class="img-circle" alt="User Image">--}}
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                {{--<div class="user-panel">--}}
                    {{--<div class="pull-left image">--}}
                        {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                    {{--</div>--}}
                    {{--<div class="pull-left info">--}}
                        {{--<p>Alexander Pierce</p>--}}
                        {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- search form -->
                {{--<form action="#" method="get" class="sidebar-form">--}}
                    {{--<div class="input-group">--}}
                        {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                        {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
                {{--</button>--}}
              {{--</span>--}}
                    {{--</div>--}}
                {{--</form>--}}
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">

                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Articles management</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=" {(Route::current() == 'amdin/articles')? 'active' : '' }}"><a href="{{ route('admin.article.index') }}"><i class="fa fa-circle-o"></i> All Articles</a></li>
                            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Articles Published</a></li>
                        </ul>
                    </li>
                    <li class="{{ (Route::current() == 'admin/category')? 'active' : '' }}">
                        <a href="{{ route('admin.category.index') }}">
                            <i class="fa fa-files-o"></i>
                            <span>Category management</span>
                            <span class="pull-right-container">
              {{--<span class="label label-primary pull-right">4</span>--}}
            </span>
                        </a>
                        {{--<ul class="treeview-menu">--}}
                            {{--<li  class="{{ (Route::current() == 'admin/category')? 'active' : '' }}"><a href="{{ route('admin.category.index') }}"><i class="fa fa-circle-o"></i>All Category</a></li>--}}

                        {{--</ul>--}}
                    </li>
                    <li class="{{ (Route::current() == 'admin/users')? 'active' : '' }}">
                        <a href="{{ route('admin.user.index') }}">
                            <i class="fa fa-user-plus"></i> <span>Users management</span>
                            <span class="pull-right-container">
              <small class="label pull-right bg-green">{{ App\User::count() }}</small>
            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Role management</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ (Route::current() == 'admin/role')? 'active' : '' }}"><a href="{{ route('admin.role.index') }}"><i class="fa fa-circle-o"></i> Roles List</a></li>
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                        </ul>
                    </li>
                    {{--<li class="treeview">--}}
                        {{--<a href="#">--}}
                            {{--<i class="fa fa-laptop"></i>--}}
                            {{--<span>UI Elements</span>--}}
                            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                        {{--</a>--}}
                        {{--<ul class="treeview-menu">--}}
                            {{--<li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>--}}
                            {{--<li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>--}}
                            {{--<li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>--}}
                            {{--<li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>--}}
                            {{--<li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>--}}
                            {{--<li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="treeview">--}}
                        {{--<a href="#">--}}
                            {{--<i class="fa fa-edit"></i> <span>Forms</span>--}}
                            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                        {{--</a>--}}
                        {{--<ul class="treeview-menu">--}}
                            {{--<li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>--}}
                            {{--<li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>--}}
                            {{--<li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="treeview">--}}
                        {{--<a href="#">--}}
                            {{--<i class="fa fa-table"></i> <span>Tables</span>--}}
                            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                        {{--</a>--}}
                        {{--<ul class="treeview-menu">--}}
                            {{--<li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                            {{--<li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

            </section>
            <!-- /.sidebar -->
        </aside>
    </section>
    <!-- /.sidebar -->
</aside>
