@extends('layouts.app')

@section('content')
<h3 class="text-dark mb-1">Front-End Task</h3><!-- Start: Search Component -->
<div class="container-fluid text-start text-primary d-xl-flex" style="min-height: 100%;min-width: 100%;">
    <div class="row d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center"
        style="min-height: 100%;min-width: 100%;">
        <div class="col-xl-8 align-items-center align-content-center">
            <!-- Start: LOGO -->
            <div class="row d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center"
                style="margin-bottom: 20px;">
                <div
                    class="col-xl-12 d-sm-flex d-md-flex d-lg-flex d-xl-flex align-self-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em"
                        fill="currentColor" class="fs-1 text-info d-sm-flex justify-content-sm-center"
                        style="width: 150px;height: 150px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M304 0h-224c-35.35 0-64 28.65-64 64v384c0 35.35 28.65 64 64 64h224c35.35 0 64-28.65 64-64V64C368 28.65 339.3 0 304 0zM192 480c-17.75 0-32-14.25-32-32s14.25-32 32-32s32 14.25 32 32S209.8 480 192 480zM304 64v320h-224V64H304z">
                        </path>
                    </svg></div>
            </div><!-- End: LOGO -->
            <!-- Start: LABEL of logo -->
            <div class="row text-center d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center"
                style="margin-bottom: 20px;">
                <div class="col">
                    <h6 class="collapse-header">Mobile verification Login</h6>
                </div>
            </div><!-- End: LABEL of logo -->
            <!-- Start: Mobile verification Form -->
            <div class="row d-flex d-lg-flex justify-content-lg-center" style="margin-bottom: 30px;">
                <div class="col-lg-8 d-flex d-lg-flex justify-content-lg-center"
                    style="background: rgba(221,221,221,0);">
                    <form
                        class="text-center d-none d-sm-inline-block d-lg-flex d-xl-flex me-auto align-items-xl-center ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input class="bg-dark form-control form-control-sm" type="text" name="countrycode"
                                value="+02" placeholder="+02" style="color: rgb(255,255,255);width: 10%;"><input
                                class="bg-dark form-control border-0 small" type="text"
                                placeholder="Phonre Number ex: 01xxxxxxxx"
                                style="color: rgb(255,255,255);background: rgb(226,229,238);border-style: solid;border-color: rgb(145,145,145);width: 80%;">
                                <button
                                class="btn btn-info fw-normal py-0" type="button" style="width: 10%;"><i
                                    class="fas fa-sms fs-4"></i></button></div>
                    </form>
                </div>
            </div><!-- End: Mobile verification Form -->
            <!-- Start: verification code check Form -->
            <div class="row text-center d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                <div class="col-xl-5 text-center" style="background: rgba(221,221,221,0);">
                    <h6 class="collapse-header">Check verification code</h6>
                    <form
                        class="text-center d-none d-sm-inline-block d-xl-flex me-auto align-items-xl-center ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-dark form-control border-0 small" type="text"
                                placeholder="verification code"
                                style="color: rgb(255,255,255);background: rgb(226,229,238);border-style: solid;border-color: rgb(145,145,145);width: 50%;"
                                name="verificationcode"><button
                                class="btn btn-info fw-normal text-center d-xl-flex justify-content-xl-center align-items-xl-center py-0"
                                type="button" style="width: 15%;"><i class="fas fa-check fs-6 text-start"></i></button>
                        </div>
                    </form>
                </div>
            </div><!-- End: verification code check Form -->
        </div>
    </div>
</div><!-- End: Search Component -->
@endsection
