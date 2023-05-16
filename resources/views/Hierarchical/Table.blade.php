@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Hierarchical Task</h3><!-- Start: CategoryForm -->
<!--
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row d-xl-flex justify-content-center align-items-center justify-content-xl-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Add NEW</h4>
                        </div>
                        <form class="user" method="post" action="#Route">
                            <div class="mb-3"><input class="border rounded-pill form-control" type="text" name="Category_Name" placeholder="Categorie Name"></div>
                            <div class="mb-3"><select class="border rounded-pill form-select">
                                    <option value="0" selected="">Main Category</option>
                                    <option value="Categorie_id">Sub_Category_for_name</option>
                                </select></div>
                            <div class="mb-3">
                                <div class="custom-control custom-checkbox small"></div>
                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">ADD&nbsp;</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- End: CategoryForm -->
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Categories </p>
        </div>
        <div class="card-body">
            <div data-reflow-type="category-list" data-reflow-layout="unstyled">
                @if($Categories != null)
                {!! json_decode($Categories) !!}
                @else
                    <p>No data available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
