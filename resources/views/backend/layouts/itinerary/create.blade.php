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
                                
                                <!-- Add a section to display the days -->
                                {{-- <div class="form-group col-md-6">
                                    <label class="form-label" for="packageSelect">Package:</label>
                                        <select class="form-select" id="packageSelect" name='package_id' required="">
                                                <option selected="" disabled="" value="">Choose a Package</option>
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">{{$package->title}}</option>
                                            @endforeach
                                        </select>
                                    <div class="invalid-feedback">Please select a valid package.</div>
                                </div> --}}
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
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="days">Days:</label>
                                <input type="text" id="days" class="form-control" readonly>
                            
                                <p id="daysInfo">
                                    <!-- Show the dropdown if the session has days -->
                                    <select class="form-select" id="packageSelect" name="package_id" required="">
                                        <option selected disabled value="">Choose a Package</option>
                                        <option id="daysOption" value="" name="days">The number of days is: </option>
                                    </select>
                                </p>
                            </div>
                            
                            
                            
                            
                            <div class="form-group">
                                <label for="validationCustom05">Meal Plan:</label>
                                <input class="form-control" id="validationCustom05" type="text" placeholder="" name="day_ways_meal" required>
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
    {{-- {{
        session()->forget('days')
    }} --}}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#packageSelect').on('change', function() {
        var packageId = $(this).val(); // Get the selected package ID

        if (packageId) {
            $.ajax({
                url: '{{ url("/itinerary/get-package-details") }}/' + packageId, // Call the appropriate URL for package details
                type: 'GET',
                data: { packageId: packageId }, // Send the selected package ID as data
                success: function(response) {
                    var daysMessage = ""; 
                    
                    
                    for (var i = 1; i <= response.days; i++) {
                        daysMessage += "Day " + i + ": The number of days is: " + i + "\n"; 
                    }

                   
                    $('#days').val(daysMessage); 

                    
                    $('#hiddenDays').val(response.days);

                    
                    $('#daysOption').text("The number of days is: " + daysMessage); 
                    $('#daysOption').val(response.days); 
                },
                error: function() {
                    alert('Failed to fetch package details.');
                }
            });
        }
    });
</script>




<script>
    $(document).ready(function() {
        var days = '{{ session('days') }}';
        if (days) {
            $('#packageSelect2').val(days).trigger('change'); // Pre-select package and trigger the change event to update fields
        }
    });
</script>

@endpush
