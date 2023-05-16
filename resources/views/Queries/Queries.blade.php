@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-1">Queries Task</h3><!-- Start: Form With multi select list -->

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <p class="text-primary m-0 fw-bold">Info</p>
            <div class="dropend no-arrow">
                <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false"
                    data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                    <p class="text-center dropdown-header">Main Action</p>
                    <a class="dropdown-item "
                        href="{{route("projects.add")}}">Add Project </a>

                    <a class="dropdown-item "
                        href="{{route("accounts.add")}}">Add Account</a>

                    <a class="dropdown-item "
                        href="{{route("jobs.add")}}">Add Job</a>

                    <a class="dropdown-item "
                        href="{{route("tasks.add")}}">Add task</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        </div>
        <form method="get" action="">

        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-lg-12 d-lg-flex align-items-lg-center">
                    <div class="text-md-end d-lg-flex align-items-lg-center dataTables_filter" id="dataTable_filter">


                                    <select style="margin-right: 8px" class="border rounded-pill d-inline-block form-select form-select-sm" name="Querie" id="Querie">
                                        <option value="0" selected="">Project</option>
                                        <option value="1">account</option>
                                        <option value="2">jobs </option>
                                        <option value="3">tasks</option>
                                    </select>
                                        with
                                        <select style="margin-right: 0px;margin-left: 8px" class="border rounded-pill d-inline-block form-select form-select-sm" name="filter"  id="filter">
                                            <option value="0" selected="">name</option>
                                            <option value="1">price &lt;</option>
                                            <option value="2">price &gt;</option>
                                            <option value="3">price =</option>
                                        </select>

                                    <input class="border rounded-pill" type="text" name="Search" id="Searchinput"placeholder="Search For"
                                        style="margin-right: 8px;margin-left: 8px">

                                    <button class="btn btn-primary d-block btn-user w-100"
                                        type="submit" id="submitBtn">submit</button>

                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered my-0" id="dataTable">
                    <thead>
                        <tr>

                            <th>Project Name</th>
                            <th>Account</th>
                            <th>Price</th>
                            <th>Jobs</th>
                            <th>Tasks</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Data as $project)
                        <tr>
                            <td class="text-break">
                                {{ $project->name }}
                            </td>
                            <td class="text-break">{{ $project->account->name }}</td>
                            <td class="text-break">{{ $project->price }} $</td>
                            <td class="text-break">
                                <ul>
                                    @foreach ($project->jobs as $job)
                                    <li>{{ $job->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-break">
                                <ul>
                                    @foreach ($project->jobs as $job)
                                    @foreach ($job->tasks as $task)
                                    <li>{{ $task->name }}</li>
                                    @endforeach
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </form>

    </div>
</div>



@endsection
