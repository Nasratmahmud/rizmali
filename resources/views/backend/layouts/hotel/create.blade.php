@extends('backend.app')

@section('title','Hotel')

@section('content')

@push('style')
<style>
.upload-box {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px dashed #ddd;
    border-radius: 6px;
    padding: 20px;
    cursor: pointer;
    text-align: center;
    width: 100%;
    height: 150px;
    background-color: #f9f9f9;
    color: #888;
}

.upload-box:hover {
    background-color: #f1f1f1;
}
.remove-link {
    color: #ff6b6b;
    cursor: pointer;
    text-decoration: underline;
}

.remove-link:hover {
    color: #ff0000;
}
</style>
    
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Add Hotel</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Hotel</li>
                    <li class="breadcrumb-item active">Add Hotel</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Hotel Create</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('hotel.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body add-post">
                     
                        <div class="col-sm-12">
                            <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="validationCustom01">Name:</label>
                                        <input class="form-control" id="validationCustom01" type="text" placeholder="" name="name">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <div class="">
                                                <label for="">Hotel Status:</label>
                                            </div>
                                            <div class="animate-chk">
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="d-block" for="edo-ani">
                                                        <input class="radio_animated" id="edo-ani" type="radio" name="category" value="superior">Superior Hotel
                                                        </label>
                                                        <label class="d-block" for="edo-ani1">
                                                        <input class="radio_animated" id="edo-ani1" type="radio" name="category" value="standard" checked="">Standard Hotel
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="btn-showcase">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

