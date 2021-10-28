@extends('master.master')

@section('title')
@endsection

@section('content')
<div id="content" class="app-content">

	<div class="row">

		<div class="card">
			<div class="card-header fw-bold small">Dashboard</div>
			<div class="card-body">
				<h5 class="card-title">Arsip Surat</h5>
				<h6 class="card-subtitle mb-3 text-white text-opacity-50">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan</h6>
				<h6 class="card-subtitle mb-3 text-white text-opacity-50">Klik "Lihat" pada kolom aksi untuk menampilkan surat</h6>

			</div>
			<!-- arrow -->
			<div class="card-arrow">
				<div class="card-arrow-top-left"></div>
				<div class="card-arrow-top-right"></div>
				<div class="card-arrow-bottom-left"></div>
				<div class="card-arrow-bottom-right"></div>
			</div>
		</div>
		<div class="p-3 px-4 mt-auto">
			<a href="{{route('arsip.create')}}" class="btn d-block btn-outline-theme">
				<i class="fa-solid fa-plus"></i></i> Arsipkan Surat
			</a>
		</div>
		<div class="card mb-3">

			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped table-borderless mb-2px small text-nowrap">
						<thead>
							<tr>
								<th>Nomor Surat</th>
								<th>Kategori</th>
								<th>Judul</th>
								<th>Waktu Pengarsipan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								@foreach($arsips as $arsip)
								<td>
									<span class="d-flex align-items-center">
										<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
										{{$arsip->nomor}}
									</span>
								</td>
								<td>
									<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 24px">{{$arsip->category->nama}}</span>
								</td>
								<td>
									<span class="d-flex align-items-center">
										<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
										{{$arsip->judul}}
									</span>
								</td>
								<td><small>{{$arsip->created_at}}</small></td>
								<!-- <td><a href="#" class="text-decoration-none text-white"><i class="bi bi-search"></i></a></td> -->
								<td align="center">
									<a href="/arsip/{{$arsip->id}}/delete" class="btn btn-outline-danger" data-id="{{$arsip->id}}" data-nomor="{{$arsip->nomor}}">Hapus</a>
									<a href="/arsip/{{$arsip->id}}/download" class="btn btn-outline-theme">Unduh</a>
									<a href="/arsip/{{$arsip->id}}/show" class="btn btn-outline-primary">Lihat >></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

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