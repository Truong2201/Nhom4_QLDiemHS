<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
    <img src="{{asset('admin/dist/img/AdminLTELogo.png') }}"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">QUẢN LÍ ĐIỂM THPT</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nhóm 4</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->            

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon  fa fa-user-circle"></i>
                        <p>
                            Học sinh
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('student.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Học sinh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('student.indexkl') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>DS HS theo Khối,Lớp</p>
                          </a>
                      </li>
                        <li class="nav-item">
                            <a href="{{ route('student.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Học sinh</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fa fa-address-book"></i>
                      <p>
                        Giáo viên
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" >
                      <li class="nav-item has-treeview">
                        <a href="{{ route('teacher.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Danh sách</p>
                        </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('teacher.add') }}" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Thêm mới</p>
                          </a>
                      </li>
                    </ul>
                </li>
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Khối,Lớp
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{ route('grade.index') }}" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Danh sách khối</p>
                          </a>
                        </li>
                        {{-- <li class="nav-item">
                          <a href="{{ route('grade.add') }}" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Thêm Khối</p>
                          </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('class.index') }}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Danh sách Lớp</p>
                            </a>
                          </li>
                          {{-- <li class="nav-item">
                            <a href="{{ route('class.add') }}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Thêm Lớp</p>
                            </a>
                          </li> --}}
                          <li class="nav-item">
                            <a href="{{ route('schoolyear.index') }}" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Danh sách Năm Học</p>
                            </a>
                          </li>
                      </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Môn học
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('subject.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Môn học</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subject.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Môn học</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Bảng điểm Học kỳ I
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('semester1.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bảng điểm lớp</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('semester1.userindex') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bảng điểm cá nhân</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('semester1.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo bảng điểm</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Bảng điểm Học kỳ II
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('semester2.class') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bảng điểm lớp</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('semester2.student') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bảng điểm cá nhân</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('semester2.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo bảng điểm</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>  
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon fa fa-users"></i>
                      <p>
                          Loại Người Dùng, Users
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Danh sách User</p>
                        </a>
                      </li>
                      {{-- <li class="nav-item">
                        <a href="{{ route('userstype.index') }}" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Danh sách Loại Người Dùng</p>
                        </a>
                      </li> --}}
                      {{-- <li class="nav-item">
                        <a href="{{ route('user.add') }}" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Thêm User</p>
                        </a>
                      </li>               --}}
                {{-- <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon fa fa-list-alt"></i>
                      <p>
                          Cả Năm
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('semesterall.class') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Bảng điểm lớp</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('semesterall.student') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Bảng điểm cá nhân</p>
                          </a>
                      </li>
                  </ul>
              </li>  --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>