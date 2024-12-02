@extends('backend.app')

@section('title','Package')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header pb-0">
                <h4>Zero Configuration</h4><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>
            </div>
            <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-1">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Include</th>
                        <th>Exclude</th>
                        <th>Days</th>
                        <th>Package Now Valid Duration</th>
                        <th>Package Now Invalid</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                        <tr>
                            <td>{{$package->title}}</td>
                            <td>{{$package->details}}</td>
                            <td>{{$package->includes}}</td>
                            <td>{{$package->excludes}}</td>
                            <td>{{$package->days}}</td>
                            <td>{{$package->valid}}</td>
                            <td>{{$package->not_valid}}</td>
                            <td><img src="{{ asset($package->photo) }}" alt="Image" width="150px">
                            </td>
                            <td> 
                            <ul class="action"> 
                                <li class="edit"> <a href="{{ route('package.edit' , ['id'=> $package->id])}}"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                            </td>
                        </tr>
                        @endforeach
                   
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection