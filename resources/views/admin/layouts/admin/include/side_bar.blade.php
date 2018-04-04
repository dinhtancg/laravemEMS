<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Session('user')->avatar_url}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Session('user')->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ trans('core::view.Menu') }}</li>
            <li class="{{ ($route == 'admin::news.listNews')? 'active' : '' }}">
                <a href="{{ route('admin::news.listNews') }}">
                    <i class="fa fa-image"></i> <span>{{ trans('news::view.News photo management') }}</span>
                </a>
            </li>
            <li class="{{ ($route == 'admin::news.list')? 'active' : '' }}">
                <a href="{{ route('admin::news.list') }}">
                    <i class="fa fa-newspaper-o"></i> <span>{{ trans('admin::view.News management') }}</span>
                </a>
            </li>
            <li class="treeview module-home-menu">
                <a href="#">
                  <i class="fa fa-edit"></i> <span>{{ trans('admin::view.Modules home management') }}</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu " >
                    <li class="{{ strpos($route, 'admin::home.slide') !== false ? 'active' : '' }}">
                        <a href="{{ route('admin::home.slide.list') }}">
                            <i class="fa fa-sliders"></i> <span>{{ trans('admin::view.Slide management') }}</span>
                        </a>
                    </li>
                    <li class="{{ strpos($route, 'admin::home.typeOfCandidate') !== false ? 'active' : '' }}">
                        <a href="{{ route('admin::home.typeOfCandidate.list') }}">
                            <i class="fa fa-male"></i> <span>{{ trans('admin::view.Type of candidate') }}</span>
                        </a>
                    </li>
                    <li class="{{ strpos($route, 'admin::home.topNews') !== false ? 'active' : '' }}">
                        <a href="{{ route('admin::home.topNews.list') }}">
                            <i class="fa fa-star"></i> <span>{{ trans('admin::view.Top news') }}</span>
                        </a>
                    </li>
                    <li class="{{ strpos($route, 'admin::home.recruitHot') !== false ? 'active' : '' }}">
                        <a href="{{ route('admin::home.recruitHot.list') }}">
                            <i class="fa fa-certificate"></i> <span>{{ trans('admin::view.Hot recruitment') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
