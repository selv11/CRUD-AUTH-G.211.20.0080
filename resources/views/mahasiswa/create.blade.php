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
<!DOCTYPE html>
<html>
<head>
    <title>Create Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Create Data Mahasiswa
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-mahasiswa')}}">
       @csrf
        <div class="form-group">
            <label>NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" required="">
          </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="text" id="umur" name="umur" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Kota</label>
            <input type="text" id="kota" name="kota" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" id="kelas" name="kelas" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
</x-app-layout>
