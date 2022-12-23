@extends('layouts.mainlayout')

@section('isi')


<div class=" container-fluid  border " style="min-height: 800px">
    <div class="d-flex table-responsive mx-auto justify-content-center" style="padding: 100px">
        <div class="row">
            <div class="text-center mb-2">
                <h5>Daftar Pekerjaan Desa Wakanda</h5>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Desa Wakanda
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/pekerjaankonoha">Desa Konoha</a></li>
                        <li><a class="dropdown-item" href="/pekerjaanwakanda">Desa Wakanda</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <table class="table table-striped table-bordered table-hover table-sm" style="max-width: 600px">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Pria</th>
                            <th scope="col">Wanita</th>
                            <th scope="col">Periode</th>
                        </tr>
                        @foreach($pekerjaan2 as $p)
                        <tr>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->Jumlah_L}}</td>
                            <td>{{$p->Jumlah_P}}</td>
                            <td>{{$p->periode}}</td>
                        </tr>
                        @endforeach
                    </thead>
                    <tbody id="table_body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection