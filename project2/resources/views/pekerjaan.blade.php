@extends('layouts.mainlayout')

@section('isi')


<script>
    fetch("http://127.0.0.1:8080/api/v1/pekerjaan").then((data) => {
        //console.log(data);
        return data.json();
    }).then((objectData) => {
        console.log(objectData.data[0].nama);
        let tableData = "";
        objectData.data.map((values) => {
            tableData += `<tr>
                            <td>${values.nama}</td>
                            <td>${values.Jumlah_L}</td>
                            <td>${values.Jumlah_P}</td>
                        </tr>`;
        });
        document.getElementById("table_body").innerHTML = tableData;
    })
</script>

<div class=" container-fluid  border " style="min-height: 800px">
    <div class="d-flex table-responsive mx-auto justify-content-center" style="padding: 100px">
        <div class="row">
            <div class="text-center mb-2">
                <h5>Daftar Pekerjaan</h5>
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Desa
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/pekerjaankonoha">Desa Konoha</a></li>
                        <li><a class="dropdown-item" href="/pekerjaanwakanda">Desa Wakanda</a></li>
                        </ul>
                    </div>
            </div>
            
        </div>
    </div>
</div>

@endsection