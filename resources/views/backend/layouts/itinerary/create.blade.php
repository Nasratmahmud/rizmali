@extends('backend.app')

@section('title','Itinerary')

@section('content')

@push('style')

@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Create Itinerary</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Itinerary</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if (isset($days))
@dd($days)
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4>Create</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('itinerary.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="packageSelect">Package:</label>
                                    <select class="form-select" id="packageSelect" name='package_id' required="">
                                        <option selected="" disabled="" value="">Choose a Package</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid package.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="validationCustom02">Hotel:</label>
                                        <select class="form-select" id="validationCustom02" name="hotel_id" required="">
                                                <option selected="" disabled="" value="" >Choose a Hotel</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">{{$hotel->name}}</option>
                                            @endforeach
                                        </select>
                                    <div class="invalid-feedback">Please select a valid hotel.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom05">Day:</label>
                                    <input class="form-control" id="validationCustom05" type="number" placeholder="" name="day" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom06">Meal Plan:</label>
                                    <input class="form-control" id="validationCustom06" type="text" placeholder="" name="dayWaysMeal" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01">Day Plan:</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="" name="dayPlan" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Today Spot Photo:</label>
                                <input type="file" name="photo" class="dropify" />
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
