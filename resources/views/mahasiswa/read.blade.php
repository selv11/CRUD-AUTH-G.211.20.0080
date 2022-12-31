<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-fray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>Tabel Mahasiswa</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 v-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path full-rule="evenodd" d="M5.293 7.239a1 1 0 011.414 0L10 10.586l3.293.3.293a1 1 0 111.414 1.414l.4 4a1 1 0 01.1.414 0l.4.4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                    </h2>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('create')">
                        {{_('CREATE')}}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('read')">
                        {{_('READ')}}
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>
    </h2>
    </x-slot>
<html>
    <head>
        <meta charset="uts-8">
        <meta name="viewport" content="width=device.width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Read Data</title>
    </head>
<body>
<hr>
<br>
<h2>Data Mahasiswa</h2>
<a href="/create" class="btn btn-success">Tambah Data</a>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
    <th>
        NIM
    </th>
    <th>
        Nama
    </th>
    <th>
        Umur
    </th>
    <th>
        Alamat
    </th>
    <th>
        Kota
    </th>
    <th>
        Kelas
    </th>
    <th>
        Jurusan
    </th>
    <th>
        Action
    </th>
    </tr>
</thead>
@foreach ($datanya as $dt)
    <tr>
        <td>{{$dt->nim}}</td>
        <td>{{$dt->nama}}</td>
        <td>{{$dt->umur}}</td>
        <td>{{$dt->alamat}}</td>
        <td>{{$dt->kota}}</td>
        <td>{{$dt->kelas}}</td>
        <td>{{$dt->jurusan}}</td>
        <td> <a href=/delete?nim={{$dt->nim}} class="btn btn-danger" onclick="return confirm('Yakin data mau dihapus?');">Hapus</a>
            <a href=/edit?nim={{$dt->nim}} class="btn btn-primary" onclick="return confirm('Yakin data mau diedit?');">Edit</a>
        </td>
    </tr>
@endforeach
</table>
<hr>
</body>
</html>
</x-app-layout>
