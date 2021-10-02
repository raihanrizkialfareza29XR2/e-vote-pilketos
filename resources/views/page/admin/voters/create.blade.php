@extends('layouts.dashboard')

@section('title')
    voters
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah voters</h1>
    <p>Periode : 2020-2021</p>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah voters</div>
						<a href="{{ route('voters.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('voters.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="form-group">
							<label for="judul">Username</label>
							<input type="text" class="form-control" name="voters_id">
						</div>
						<div class="form-group">
							<label for="judul">Nama</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label for="judul">Password</label>
							<input type="text" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label for="judul">Periode</label>
							<input type="text" class="form-control" name="periode">
						</div>
						<div class="form-group">
							<label for="foto">Status</label>
							<select name="status" class="form-control">
                                @foreach ($status as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                @endforeach
                            </select>
						</div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
@endsection