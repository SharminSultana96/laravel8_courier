@extends('backend.layouts.base')

@push('styles')
  <link href="/backend_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/backend_assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/backend_assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('scripts')
  <!-- Bootstrap core JavaScript-->
  <script src="/backend_assets/vendor/jquery/jquery.min.js"></script>
  <script src="/backend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/backend_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/backend_assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/backend_assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/backend_assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/backend_assets/js/demo/datatables-demo.js"></script>
@endpush

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User List</h1>
    <form name="userForm" action="{{url('/users')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="name">User Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="email">User Email</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="email" value="{{old('email')}}" name="email">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label" for="password">User Password</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="password" value="{{old('password')}}" name="password">
                        </div>
                    </div>
                </div>
                
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                </div>
            </form>
    

  </div>
@endsection
