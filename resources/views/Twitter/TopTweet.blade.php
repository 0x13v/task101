@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Twitter Task</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Top 20 Tweet</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered my-0" id="dataTable">
                    <thead>
                        <tr>
                            <td style="width: 5%;text-align: center;"><strong>#</strong></td>
                            <td style="width: 50%;text-align: center;"><strong>Tweet</strong></td>
                            <th style="text-align: center;">Useruid</th>
                            <th style="text-align: center;">Retweets</th>
                            <th style="text-align: center;">Likes</th>
                            <th style="text-align: center;">datetime</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" style="text-align: center;">1</td>
                            <td class="text-break" style="text-align: center;">tweet</td>
                            <td style="text-align: center;">@0x13v</td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: center;">2008/11/28</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row d-xl-flex justify-content-xl-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
