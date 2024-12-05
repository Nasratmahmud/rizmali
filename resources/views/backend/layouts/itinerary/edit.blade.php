@extends('backend.app')

@section('title','Prime Destination')

@section('content')

@push('styles')
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
                <h3>Edit Package Price</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Package Price</li>
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
                    <h4>Package Price Edit</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('package.price.update',['id' => $packagePrice->id ])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="validationCustom04">Package</label>
                                    <select class="form-select" id="validationCustom04" name='package' required="">
                                      <option selected="" disabled="" value="">Choose a Package</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}" {{ $package->id == $packagePrice->package_id ? 'selected' : '' }}>{{$package->title}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid package.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="validationCustom04">Hotel</label>
                                    <select class="form-select" id="validationCustom04" name="hotel" required="">
                                      <option selected="" disabled="" value="" >Choose a Hotel</option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->id }}" {{ $hotel->id == $packagePrice->hotel_id ? 'selected' : '' }}>{{$hotel->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid hotel.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">1 Person package price:</label>
                                    <input class="form-control" name="person1" type="number" value="{{$packagePrice->person_1_price}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">2 Person package price:</label>
                                    <input class="form-control" name="person2" type="number" value="{{$packagePrice->person_2_price}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">4 Person package price:</label>
                                    <input class="form-control" name="person4" type="number" value="{{$packagePrice->person_4_price}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">6 Person package price:</label>
                                    <input class="form-control" name="person6" type="number" value="{{$packagePrice->person_6_price}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">8 Person package price:</label>
                                    <input class="form-control" name="person8" type="number" value="{{$packagePrice->person_8_price}}">
                                </div>
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="validationCustom01">Name:</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" name="name" value="{{$packagePrice->name}}">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02">Motto:</label>
                                <input class="form-control" name="motto" type="text" value="{{$packagePrice->motto}}">
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Destination Details:</label>
                                        <textarea class="form-control" name="details" id="exampleFormControlTextarea4" placeholder="Prime Destination details." rows="3">{{$destinationpackage->details}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Prime Destination Photo:</label>
                                <input type="file" class="dropify" name="photo" data-default-file="{{ asset($destinationpackage->photo) }}" />
                                <input type="hidden" name="current_photo" value="{{ $destinationpackage->photo }}">
                            </div>
                            <div class="btn-showcase">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div> --}}
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
