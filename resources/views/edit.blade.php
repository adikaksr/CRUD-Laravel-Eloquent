@extends('main')
@section('judul', 'CRUD | Beranda')
@section('konten')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h4>DATA MAHASISWA</h4>
        </div>
            <div class="card-body">

                <div class="myBtn">
                <div class="text right">
    <a href="/tambah" class="btn btn-success" style="width:170px;">Tambah Mahasiswa</a>
</div>           
</div>    
@if($message = Session::get('message'))
    <h1 class="text-center">{{$message}}</h1>
@else
<table class="table table-hover table-dark table-bordered mt-3">
            <thead>
                <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">Nim</th>
                <th class="text-center" scope="col">Jenis Kelamin</th>
                <th class="text-center" scope="col">Dosen Wali</th>
                <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>
    <?php $i=1;?>    
    @foreach($mahasiswa as $mhs)          
    <tr >
        <td class="cntr"><?php echo $i;?></td>
        <td >{{$mhs->nama}}</td>
        <td class="cntr">{{$mhs->nim}}</td>        
        <td >{{$mhs->jenis_kelamin}}</td>
        <td >{{$mhs->dosen->nama}}</td>
        <td class="text-center">
        <a href="/edit/id={{$mhs->id}}" class="btn btn-primary badge-pill" style="width:80px;">Edit </a>
        <a href="/hapus/id={{$mhs->id}}" class="btn btn-danger badge-pill" style="width:80px;">Hapus </a>
        </td>
    </tr>   
        <?php ++$i;?>  
        </div>
</div>
</div>       
    @endforeach
@endif

@endsection
