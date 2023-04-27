
  {{-- Vincent
      BE-J --}}

@extends('layouts.main')

@section('nameheader')
  List Barang
@endsection

@section('container')

    <table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Foto</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Kategori</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
            </tr>
          </thead>
          <tbody>
            @php
                $nomor = 1;
            @endphp
            @foreach ($barangs as $barang)
            <tr>
              <th scope="row">{{$nomor++}}</th>
              <td><img src="{{ asset('storage/pictures'.$barang->foto) }} " alt=""></td>
              <td>{{$barang->nama}}</td>
              <td>{{$barang->kategori->nama}}</td>
              <td>{{$barang->jumlah}}</td>
              <td>{{$barang->harga}}</td>
              <td>
                <div style="display: flex; gap: 5px">
                  <a href="{{route('updateBarang',['id'=>$barang->id])}}">
                    <button type="button" class="btn btn-success"><i class="uil uil-edit"></i></button>
                  </a>
                  <form action="{{route('deleteBarang',['id'=>$barang->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="uil uil-trash-alt"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>

    
@endsection
