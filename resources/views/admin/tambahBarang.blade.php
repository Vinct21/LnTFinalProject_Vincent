@extends('layouts.main')

@section('nameheader')
  Tambah Barang
@endsection

@section('container')

    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-header text-center"> </div>
            <div class="card-body">
                <form action="{{route('createBarang')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Nama Barang --}}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input name="nama" type="text" class="form-control" id="nama"
                            placeholder="Input Nama Barang" value="{{old('Nama')}}">
                    </div>
                    @error('nama')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    {{-- Kategori Barang --}}
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Barang</label>
                        <select name="kategori_id" id="">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"> {{ $kategori->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                    @error('kategori')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    {{-- Harga Barang --}}
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <input name="harga" type="numeric" class="form-control" id="harga"
                            placeholder="Input Harga Barang" value="{{old('Harga')}}">
                    </div>
                    @error('harga')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    {{-- Jumlah Barang --}}
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Barang</label>
                        <input name="jumlah" type="numeric" class="form-control" id="jumlah"
                            placeholder="Input Jumlah Barang" value="{{old('Jumlah')}}">
                    </div>
                    @error('jumlah')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    {{-- Foto Barang --}}
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Barang</label>
                        <input name="foto" accept="image/jpeg,image/jpg,image/png," type="file" class="form-control" 
                        id="foto" placeholder="Input Foto Barang" value="{{old('Foto')}}">
                    </div>
                    @error('foto')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-success">Insert</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
