@extends('backend.app')

@section('title','Package Price')

@section('content')

@push('style')

@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Add Package Price</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Add Package Price</li>
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
                    <h4>Package Price Create</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('package.price.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body add-post">
                        
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="validationCustom04">Package</label>
                                    <select class="form-select" id="validationCustom04" name='package' required="">
                                      <option selected="" disabled="" value="">Choose a Package</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{$package->title}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid package.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="validationCustom04">Hotel</label>
                                    <select class="form-select" id="validationCustom04" name="hotel" required="">
                                      <option selected="" disabled="" value="" >Choose a Hotel</option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{$hotel->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid hotel.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">1 Person package price:</label>
                                    <input class="form-control" name="person1" type="number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">2 Person package price:</label>
                                    <input class="form-control" name="person2" type="number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">4 Person package price:</label>
                                    <input class="form-control" name="person4" type="number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">6 Person package price:</label>
                                    <input class="form-control" name="person6" type="number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">8 Person package price:</label>
                                    <input class="form-control" name="person8" type="number">
                                </div>
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
    $(document).ready(function() {
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        }
    });
});
</script>

@endpush
