@extends('backend.app')

@section('title','Edit Blog')

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
                <h3>Edit Blog</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Blog</li>
                    {{-- <li class="breadcrumb-item active">Add Destination</li> --}}
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
                    <h4>Blog Edit</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('blog.update',['id' => $editBlog->id ])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">Name:</label>
                                    <input class="form-control" id="validationCustom01" type="text" placeholder="" name="name" value="{{$editBlog->name}}">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="packageSelect">Blog Tip:</label>
                                    <select class="form-select" id="packageSelect" name='blogStatus' required="">
                                        <option selected="" disabled="" value="">Choose a tip</option>
                                            <option value="travelTip" {{ $editBlog->blogStatus == 'travelTip' ? 'selected': ''}}>Travel Tips</option>
                                            <option value="destinationGuid" {{ $editBlog->blogStatus == 'destinationGuid' ? 'selected': ''}}>Destination Guides</option>
                                            <option value="holidayInspiration" {{ $editBlog->blogStatus == 'holidayInspiration' ? 'selected': ''}}>Holiday Inspirations</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid blog tip.</div>
                                </div>
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Blog:</label>
                                        <textarea class="form-control" name="details" id="exampleFormControlTextarea4" placeholder="Details." rows="5">{{$editBlog->details}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Blog Photo:</label>
                                <input type="file" class="dropify" name="photo" data-default-file="{{ asset($editBlog->photo) }}" />
                                <input type="hidden" name="current_photo" value="{{ $editBlog->photo }}">
                            </div>
                            <div class="btn-showcase">
                                <button class="btn btn-primary" type="submit">Update</button>
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
