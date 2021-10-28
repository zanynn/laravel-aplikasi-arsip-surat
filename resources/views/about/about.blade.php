@extends('master.master')

@section('title')
@endsection

@section('content')
<div id="content" class="app-content">

    <div class="row">

        <div class="card mb-3">

            <div class="card-body">
                <div class="card">
                    <div class="m-1 bg-white bg-opacity-15">
                        <div class="position-relative overflow-hidden" style="height: 250px">
                            <img src="assets/img/gallery/gallery-27.jpg" class="card-img rounded-0" alt="" />
                            <div class="card-img-overlay text-white text-center bg-dark-transparent-5">
                                <div class="mb-3">
                                    <img src="assets/img/user/zan.jpg" alt="" width="80" class="rounded-circle" />
                                </div>
                                <div>
                                    <div class="fs-12px">Aplikasi ini Dibuat Oleh</div>
                                    <div class="fw-bold">Muhammad Fauzan Tri Aji</div>
                                    <div class="fs-12px">NIM : 1931710150</div>
                                    <div class="fs-12px">Tanggal : 27 Oktober 2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-2 px-3">
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="fw-bold">415</div>
                                    <div class="fs-12px">posts</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">140k</div>
                                    <div class="fs-12px">followers</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">697</div>
                                    <div class="fs-12px">following</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>


            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>

        </div>
        <div class="card">
            <div class="m-1 bg-white bg-opacity-15">
                <div class="card-header fw-bold border-0">Google Map</div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63452.12783146421!2d106.67329315611694!3d-6.2955018835394965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fab10419c095%3A0x8706481c2c4aafe4!2sKota%20Tgr.%20Sel.%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2C%20Indonesia!5e0!3m2!1sid!2sus!4v1635430410456!5m2!1sid!2sus" style="border:0; width: 100%; height: 10rem;" allowfullscreen></iframe>
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex">
                        <div class="w-30px h-40px d-flex align-items-center justify-content-center">
                            <i class="fa fa-car fa-2x text-gray-300"></i>
                        </div>
                        <div class="flex-fill px-3">
                            <div class="fw-bold">Kota Tangerang Selatan</div>
                            <div class="fs-12px">Banten Indonesia</div>
                        </div>
                        <div class="text-nowrap">
                            <div class="text-success fw-bold">Traffic Route</div>
                            <div class="fs-12px">available</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card-arrow -->
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