@extends('layouts.app')

@section('content')
<h3 class="text-dark mb-1">Front-End Task</h3><!-- Start: Search Component -->
<div class="container-fluid text-start text-primary d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center" style="min-height: 100%;min-width: 100%;width: 100%;height: 50%;">
    <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" style="min-height: 100%;min-width: 100%;">
        <div class="col-xl-8" style="width: 100%;height: 30%;">
            <!-- Start: LOGO -->
            <div class="row d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center align-items-xl-center" style="margin-bottom: 20px;">
                <div class="col-xl-12 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center align-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" class="fs-1 text-info" style="width: 150px;height: 150px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M407.906,319.913l-230.8-2.928a4.58,4.58,0,0,1-3.632-1.926,4.648,4.648,0,0,1-.494-4.147,6.143,6.143,0,0,1,5.361-4.076L411.281,303.9c27.631-1.26,57.546-23.574,68.022-50.784l13.286-34.542a7.944,7.944,0,0,0,.524-2.936,7.735,7.735,0,0,0-.164-1.631A151.91,151.91,0,0,0,201.257,198.4,68.12,68.12,0,0,0,94.2,269.59C41.924,271.106,0,313.728,0,366.12a96.054,96.054,0,0,0,1.029,13.958,4.508,4.508,0,0,0,4.445,3.871l426.1.051c.043,0,.08-.019.122-.02a5.606,5.606,0,0,0,5.271-4l3.273-11.265c3.9-13.4,2.448-25.8-4.1-34.9C430.124,325.423,420.09,320.487,407.906,319.913ZM513.856,221.1c-2.141,0-4.271.062-6.391.164a3.771,3.771,0,0,0-3.324,2.653l-9.077,31.193c-3.9,13.4-2.449,25.786,4.1,34.89,6.02,8.4,16.054,13.323,28.238,13.9l49.2,2.939a4.491,4.491,0,0,1,3.51,1.894,4.64,4.64,0,0,1,.514,4.169,6.153,6.153,0,0,1-5.351,4.075l-51.125,2.939c-27.754,1.27-57.669,23.574-68.145,50.784l-3.695,9.606a2.716,2.716,0,0,0,2.427,3.68c.046,0,.088.017.136.017h175.91a4.69,4.69,0,0,0,4.539-3.37,124.807,124.807,0,0,0,4.682-34C640,277.3,583.524,221.1,513.856,221.1Z"></path>
                    </svg></div>
            </div><!-- End: LOGO -->
            <!-- Start: LABEL of logo -->
            <div class="row text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-bottom: 20px;">
                <div class="col">
                    <h6 class="collapse-header">Best Image DB in world</h6>
                </div>
            </div><!-- End: LABEL of logo -->
            <!-- Start: Mobile verification Form -->
            <div class="row d-lg-flex justify-content-xl-center" style="margin-bottom: 30px;">
                <div class="col-xl-12 d-lg-flex justify-content-xl-center" style="background: rgba(221,221,221,0);">
                    <form class="text-center d-none d-sm-inline-block d-lg-flex d-xl-flex me-auto align-items-xl-center ms-md-3 my-2 my-md-0 mw-100 navbar-search" style="width: 100%;">
                        <div class="input-group"><input class="form-control" type="file" style="width: 30%;"><button class="btn btn-info fw-normal py-0" type="button" style="width: 10%;"><i class="fas fa-upload fs-4"></i></button></div>
                    </form>
                </div>
            </div><!-- End: Mobile verification Form -->
            <!-- Start: verification code check Form -->
            <div class="row text-center d-xl-flex justify-content-xl-center">
                <div class="col-xl-12 text-center" style="background: rgba(221,221,221,0);">
                    <h6 class="collapse-header">Check verification code</h6>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="text-align: left;">Upload List</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <td style="width: 3%;text-align: center;"><strong>#</strong></td>
                                            <td style="width: 30%;text-align: left;"><strong>Name</strong></td>
                                            <td style="width: 30%;text-align: left;"><strong>State</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="text-align: center;width: 10%;">1</td>
                                            <td class="text-break text-center" style="text-align: center;">File Name</td>
                                            <td class="text-center" style="text-align: center;width: 30%;">
                                                <div class="row d-lg-flex d-xl-flex justify-content-lg-center align-items-xl-center">
                                                    <div class="col-lg-8">
                                                        <div class="progress" style="width: 100%;">
                                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-xl-4"><button class="btn btn-primary bg-danger" type="button" style="width: 100%;margin-bottom: 0px;"><i class="icon ion-android-delete"></i></button></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td style="text-align: center;"><strong>#</strong></td>
                                            <td style="text-align: left;"><strong>Name</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: verification code check Form -->
        </div>
    </div>
</div><!-- End: Search Component -->
@endsection
