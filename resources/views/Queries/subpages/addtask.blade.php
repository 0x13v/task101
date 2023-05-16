@extends('layouts.app')
@section('content')

<div class="card shadow-lg o-hidden border-0 my-5">
    <div class="card-body p-0">
        <div class="row d-xl-flex justify-content-center align-items-center justify-content-xl-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="text-dark mb-4">add New Item</h4>
                    </div>
                    <form class="user" method="post" action="{{route('tasks.store')}}">
                        @csrf
                        <div class="mb-3"><input class="border rounded-pill form-control" type="text" name="_Name"
                                placeholder="Name"></div>
                        <div class="mb-3"><select class="border rounded-pill form-select" name="job_id">
                            @foreach ($jobs as $item)
                                 <option value="{{$item->id}}" selected="">{{$item->name}}</option>
                            @endforeach
                            </select></div>
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox small"></div>
                        </div><button class="btn btn-primary d-block btn-user w-100"
                            type="submit">ADD&nbsp;</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- End: Form With multi select list -->
@endsection
