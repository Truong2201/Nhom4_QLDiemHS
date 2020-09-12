<script src="{{asset('layout/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/jquery-ui.min.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('layout/js/jquery.min.js')}}" type="text/javascript"></script> --}}
{{-- <script src="{{asset('layout/js/Chart.min.js')}}"></script> --}}
{{-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> --}}
<script src="{{asset('layout/js/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/jquery.sparkline.min.js')}}" type="text/javascript"></script>

<script src="{{asset('layout/js/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/profile.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('layout/js/knockout-lastest.js')}}"></script>
{{-- <script src="{{asset('layout/js/Utils.js')}}"></script> --}}
<script src="{{ asset('danhsach.js') }}"></script>
<script>
    $(function () {
      $("#table table-hover table-lightX sp-table-row").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });

    // xoá cách 1 delete
    // function acceptDelete() {
    //   if (window.confirm("Bạn có chắc mốn xoá không ?") == true) {
    //     return true;
    //   }
    //   return false;
    // }
    // xoá cách 2 delete
    function acceptDelete(msg) {
      if (window.confirm(msg) == true) {
        return true;
      }
      return false;
    }
  </script>