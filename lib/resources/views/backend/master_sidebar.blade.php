<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="{{asset('/admin/')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="{{asset('/admin/')}}"><i class="fa fa-table fa-fw"></i> Bảng chi tiết<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                         <a href="{{asset('/admin/camera')}}"> Camera</a>
                                    </li>
                                    <li>
                                         <a href="{{asset('/admin/laptop')}}">Laptop</a>
                                    </li>
                                    <li>
                                         <a href="{{asset('/admin/computer')}}">Computer</a>
                                    </li>
                                    <li>
                                         <a href="{{asset('/admin/contact')}}">Liên hệ</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="{{asset('/admin/')}}"><i class="fa fa-edit fa-fw"></i> Thêm sản phẩm<span class="fa arrow"></span></a>
                                   <ul class="nav nav-second-level">
                                    <li>
                                         <a href="{{asset('/admin/camera/add')}}"> Camera</a>
                                    </li>
                                     <li>
                                         <a href="{{asset('/admin/camera/add')}}"> Laptop</a>
                                    </li>
                                     <li>
                                         <a href="{{asset('/admin/camera/add')}}"> Computer</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>

