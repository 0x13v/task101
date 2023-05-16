@extends('layouts.app')

@section('content')
<h3 class="text-dark mb-4">Twitter Task</h3><!-- Start: Search Component -->
<div class="container-fluid text-start text-primary d-xl-flex" style="min-height: 100%;min-width: 100%;">
    <div class="row d-xl-flex justify-content-xl-center align-items-xl-center"
        style="min-height: 100%;min-width: 100%;">
        <div class="col-xl-8">
            <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" style="margin-bottom: 20px;">
                <div class="col d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-1 text-info"
                        style="width: 150px;height: 150px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                        </path>
                    </svg></div>
            </div>
            <div class="row text-center d-xl-flex justify-content-xl-center align-items-xl-center"
                style="margin-bottom: 20px;">
                <div class="col">
                    <h6 class="collapse-header">TWEET SEARCHER</h6>
                </div>
            </div>
            <div
                class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-xl-center">
                <div class="col-auto col-lg-auto col-xl-auto col-xxl-auto d-lg-flex">
                    <form
                        class="text-center d-sm-inline-block d-xl-flex me-auto justify-content-xl-center align-items-xl-center ms-md-3 my-2 my-md-0 mw-100 navbar-search"
                        method="GET" action="{{ route('twitter.search') }}">
                        <div class="input-group d-xl-flex">
                            <input class="bg-dark form-control d-flex d-xl-flex border-0 small" type="text"
                                placeholder="Search for ... eg: SpaceX"
                                style="color: rgb(255,255,255);background: rgb(226,229,238);border-style: solid;border-color: rgb(145,145,145);width: 60%;"
                                name="query" required>
                            <input class="bg-light form-control d-flex" type="number" name="top_count"
                                placeholder="Tweet Numbers" min="10" max="1000" style="border-style: solid;width: 20%;"
                                required>
                            <button class="btn btn-info fw-normal py-0" type="submit" style="width: 15%;"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div><!-- End: Search Component -->
@endsection
