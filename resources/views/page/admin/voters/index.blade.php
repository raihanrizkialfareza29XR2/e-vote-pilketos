@extends('layouts.dashboard')

@section('title')
    Voters
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Voters</h1>
    <p>Periode : 2020-2021</p>

    {{-- <a href="{{ route('voters.create') }}" class="btn btn-primary">Tambah Data</a>s --}}
</div>

<!-- Content Row -->
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Email</th>
                <th>Nama</th>
                <th class="text-center">Aksi</th>
            </tr>
            @forelse ($voters as $row)
                <tr>
                    <th>{{ $row->email }}</th>
                    <th>{{ $row->name }}</th>
                    <th class="text-center"> 
                        <a href="{{ route('voters.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('voters.destroy', $row->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Hapus
                            </button>

                        </form>
                    </th>
                </tr>
            @empty
                <td colspan="4" class="text-center">Data Masih Kosong!</td>
            @endforelse
        </table>
    </div>
    <div class="col-md-2 mt-3 ml-auto">
        <a href="{{ route('export') }}" class="btn btn-primary">Export Voters</a>
    </div>
</div>
@endsection