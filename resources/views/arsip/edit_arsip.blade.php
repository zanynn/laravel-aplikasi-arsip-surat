@extends('master.master')

@section('title')
@endsection

@section('content')
<div id="content" class="app-content">

	<div class="row">
		<div class="card">
			<div class="card-header fw-bold small">Edit Surat</div>
			<div class="card-body">
				<h5 class="card-title">Arsip Surat</h5>
				<h6 class="card-subtitle mb-3 text-white text-opacity-50">Edit surat yang telah terbit pada form ini untuk diarsipkan</h6>

			</div>
			<!-- arrow -->
			<div class="card-arrow">
				<div class="card-arrow-top-left"></div>
				<div class="card-arrow-top-right"></div>
				<div class="card-arrow-bottom-left"></div>
				<div class="card-arrow-bottom-right"></div>
			</div>
		</div>
		<div class="card mb-3">

			<div class="card-body">

				<form class="text-left p-3" action="{{route('arsip.update', $arsip->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<!-- text input -->
					<div class="form-group mb-3">
						<label class="form-label" for="exampleFormControlInput1">Nomor Surat</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="nomor" placeholder="XII" value="{{$arsip->nomor}}" required>
					</div>
					<div class="form-group mb-3">
						<select name="category_id" class="form-select">
							<label class="form-label" for="exampleFormControlInput1">Kategori</label>
							@foreach($categories as $category)
							<option value="{{$category->id}}" {{$category->id == $arsip->category_id ? ' selected' : ' '}}>{{$category->nama}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group mb-3">
						<label class="form-label" for="exampleFormControlInput1">Judul</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" name="judul" placeholder="Judul" value="{{$arsip->judul}}" required>
					</div>
					<!-- file input -->
					<div class="form-group mb-3">
						<label class="form-label" for="exampleFormControlInput1">File Surat</label>
						<input type="file" class="form-control" name="file_surat" id="exampleFormControlFile1" required />
						<input type="hidden" class="form-control" name="old_file" id="exampleFormControlFile1" value="{{$arsip->file_surat}}" required />
					</div>
					<div class="form-group mb-3">
						&nbsp;&nbsp;&nbsp; <strong>{{substr($arsip->file_surat, 31, 300)}}</strong>
					</div>
					<a href="{{route('arsip.index')}}"><button class="btn btn-outline-theme" type="button">Kembali</button></a>
					<button type="submit" class="btn btn-outline-primary">Simpan</button>
				</form>

			</div>


			<div class="card-arrow">
				<div class="card-arrow-top-left"></div>
				<div class="card-arrow-top-right"></div>
				<div class="card-arrow-bottom-left"></div>
				<div class="card-arrow-bottom-right"></div>
			</div>

		</div>



	</div>

</div>


<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


<div class="app-theme-panel">
	<div class="app-theme-panel-container">
		<a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
		<div class="app-theme-panel-content">

			<div class="app-theme-list">
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
				<div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
				<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
			</div>

		</div>
	</div>
</div>

</div>

@endsection