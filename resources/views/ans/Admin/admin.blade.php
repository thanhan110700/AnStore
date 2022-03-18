@if (Session::has('role'))
@php
$role = request()->session()->get('role');
@endphp
@if ($role=='admin')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="{{asset('dist/img/AdminLTELogo.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin AnStore</title>
  <link rel="stylesheet" type="text/css" href="{{asset('CSS/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('CSS/admin.css')}}">
  <script src="{{asset('JS/ttdonhang.js')}}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Calistoga|Heebo&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  <style>
      .colorbg{
          background-color: #f5f6fa;
      }

  </style>
</head>
<script type="text/javascript">
    config = {};
    config.language = 'vi';
    $(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

});
</script>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="{{url('index')}}" class="brand-link">
                    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="img-circle logoa"
                           style="opacity: .8">
                    <span class="Tieude">AnStore</span>
                </a>
            </div>

            <ul class="list-unstyled components">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle avataradmin" alt="User Image">
                    <a href="#" class="Tieude">Admin</a>
                </div>

                <li class="active">
                    <a href="{{url('admin')}}" class="nav-link">
                       <p>
                        Bảng điều khiển
                       </p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/qlsp')}}" class="nav-link">
                        <p>
                          Quản lý sản phẩm
                        </p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/qlkh')}}" class="nav-link">
                        <p>
                          Quản lý khách hàng
                        </p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/dsdh')}}" class="nav-link">
                        <p>
                          Danh sách đơn hàng
                        </p>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/doanhthu')}}" class="nav-link">
                        <p>
                          Doanh thu
                        </p>
                      </a>
                </li>
                <hr>
                <li>
                    <a href="{{url('logout')}}" class="nav-link">
                        <p>
                          Đăng xuất
                        </p>
                      </a>
                </li>
            </ul>
        </nav>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <button type="button" id="sidebarCollapse" class="btn btn-info">
                  <i class="fas fa-align-left"></i>
                  <span>Menu</span>
              </button>

          </div>
      </nav>
      @if ( Session::has('success') )
      <div class="alert alert-success alert-dismissible" role="alert">
          <strong>{{ Session::get('success') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
          </button>
      </div>
  @endif
  @if ( Session::has('error') )
  <div class="alert alert-danger alert-dismissible" role="alert">
      <strong>{{ Session::get('error') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
  </div>
  @endif

  @if (!isset($btn))
  <h1 align='center' style='padding-top: 5em;'>Chào bạn đến với trang ADMIN</h1>
  @else
      @if($btn=='qlsp')
          @include('ans.Admin.Pages.qlsp')
      @endif
      @if($btn=='qlsppl')
          @include('ans.Admin.Pages.qlsp')
          @include('ans.Admin.Pages.qlsppl')
      @endif
      @if($btn=='ssp')
          @include('ans.Admin.Pages.suasp')

      @endif
      @if($btn=='tsp')
          @include('ans.Admin.Pages.tsp')

      @endif
      @if($btn=='qlkh')
          @include('ans.Admin.Pages.qlkh')
      @endif
      @if($btn=='dsdh')
          @include('ans.Admin.Pages.dsdh')
      @endif
      @if($btn=='cthd')
          @include('ans.Admin.Pages.cthd')
      @endif
      @if($btn=='doanhthu')
          @include('ans.Admin.Pages.doanhthu')
      @endif
      @if($btn=='lochoadon')
          @include('ans.Admin.Pages.lochoadon')
      @endif
      @if($btn=='timtheoten')
          @include('ans.Admin.Pages.qlkhsearch')
      @endif
  @endif
</div>

</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
</div>




</body>
</html>
@endif
@else
<div align='center'>Chỉ có admin mới có quyền truy cập trang này <a href="{{url('login')}}">Đăng nhập để truy cập</a></div>
@endif
