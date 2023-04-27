{{-- @extends('layouts.main') --}}

{{-- @section('judul', 'Login') --}}

@section('style')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

{{-- @section('content') --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vincent">
    <meta name="generator" content="Hugo 0.88.1">
    <title>PT. Meksiko - Registrasi</title>    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- Custom styles for this template -->
    <link href="/dashboard.css" rel="stylesheet">
  </head>

  <body>
    
    <div class="loginPage">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="form-bg col-6 p-4">
                    <h1 style="font-weight: bold; display: flex; justify-content: center; align-self: center">Registrasi</h1>
                    <br>
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Nama Lengkap --}}
                        <div class="mb-3">
                            <label for="nama" class="form-label"
                                style="font-weight: bold; color: black">Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Input Nama Lengkap">
                        </div>
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label"
                                style="font-weight: bold; color: black">Email</label>
                            <input name='email' type="email" class="form-control" id="formGroupExampleInput"
                                placeholder="Input Email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label"
                                style="font-weight: bold; color: black">Password</label>
                            <input name='password' type="password" class="form-control" id="formGroupExampleInput"
                                placeholder="Input Password">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        {{-- No Handphone --}}
                        <div class="mb-3">
                            <label for="notelp" class="form-label" style="font-weight: bold; color: black">No. Telp </label>
                            <input name="notelp" type="text" class="form-control" id="notelp"
                                placeholder="Input No.Telp " value="{{old('Notelp')}}">
                        </div>
                        @error('notelp')
                        <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror

                        <div style="display: flex; justify-content: center; align-self: center;">
                            <button class=" btn btn-success p-2 px-3" type="submit" >
                                <b>Register</b></button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>

<div class="container-fluid">
  <div class="row">
    


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('nameheader')</h1>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @yield('container')
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <footer>
          <div class="copyright">
              <p>Copyright © 2023 Vincent. All Rights Reserved</p>
          </div>
      </footer>
      </div>
    </main>
  </div>
  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
  </body>

  

</html>




{{-- @endsection --}}
