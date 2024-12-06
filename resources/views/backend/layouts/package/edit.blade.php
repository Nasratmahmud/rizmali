@extends('backend.app')

@section('title','Package')

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
                <h3>Add Package</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('package.insert')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Package</li>
                    <li class="breadcrumb-item active">Add Package</li>
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
                    <h4>Package Create</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('package.update',['id' => $package->id ])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="validationCustom01">Title:</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="" name="title" value="{{$package->title}}">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01">Tour Days:</label>
                                <input class="form-control" name="days" type="number" value="{{$package->days}}">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02">Valid Duration:</label>
                                    <div class="mb-3 row ">
                                        @foreach ($validDate as $key => $date )
                                            @if ($key == 0)
                                                <div class="mb-3 row col-sm-6">
                                                    <label class="col-sm-3 col-form-label">Start Date</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" name="startValidDate" type="date" value="{{$date}}">
                                                    </div>
                                                </div> 
                                            @else
                                                <div class="mb-3 row col-sm-6">
                                                    <label class="col-sm-3 col-form-label">End Date</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" name="endValidDate" type="date" value="{{$date}}">
                                                    </div>
                                                </div>
                                            @endif
                                         @endforeach
                                    </div>
                                
                                <div class="valid-feedback">Validity period!</div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03">Invalid Duration:</label>
                               
                                <div class="mb-3 row ">
                                    @foreach ($inValidDate as $key => $date)
                                            @if ($key == 0)
                                                <div class="mb-3 row col-sm-6">
                                                    <label class="col-sm-3 col-form-label">Start Date</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" name="startInvalidDate" type="date" value="{{$date}}">
                                                    </div>
                                                </div> 
                                            @else
                                                <div class="mb-3 row col-sm-6">
                                                    <label class="col-sm-3 col-form-label">End Date</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control digits" name="endInvalidDate" type="date" value="{{$date}}">
                                                    </div>
                                                </div>
                                            @endif
                                    @endforeach
                                </div>
                                <div class="valid-feedback">Validity expired period!</div>
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Package Details:</label>
                                        <textarea class="form-control" name="details" id="exampleFormControlTextarea4" placeholder="Package details." rows="3">{{$package->details}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                    <label>Includes:</label>
                                    <textarea class="form-control" name="includes" id="exampleFormControlTextarea4" placeholder="Include details on this package." rows="3">{{$package->includes}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                        <label>Excludes:</label>
                                        <textarea class="form-control" name="excludes" id="exampleFormControlTextarea4" placeholder="Exclude details on this package." rows="3">{{$package->excludes}}</textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Tourist Place Photo:</label>
                                <input type="file" class="dropify" name="photo" data-default-file="{{ asset($package->photo) }}" />
                                <input type="hidden" name="current_photo" value="{{ $package->photo }}">
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
