@extends('school.master')
@section('title',"Danh sách Loại Người Dùng")
@section('content')
<section class="content">
  <div class="error-page">
    <h2 class="headline text-danger">500</h2>

    <div class="error-content">
      <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Không thể truy cập trang này.</h3>

      <p>
        Bạn không được cấp quyền để thực hiện thao tác này.
        Vui lòng <a href="../../index.html">quay lại trang chủ</a> hoặc thử nhập vào ô bên dưới để tìm kiếm.
      </p>

      <form class="search-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <!-- /.input-group -->
      </form>
    </div>
  </div>
  <!-- /.error-page -->

</section>
@endsection