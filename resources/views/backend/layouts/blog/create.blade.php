@extends('backend.app')

@section('title','Blog')

@section('content')

@push('style')

@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Add Blog</h3>
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
                    <h4>Blog Create</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('blog.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom01">Name:</label>
                                    <input class="form-control" id="validationCustom01" type="text" placeholder="" name="name">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="packageSelect">Blog Tip:</label>
                                    <select class="form-select" id="packageSelect" name='blogStatus' required="">
                                        <option selected="" disabled="" value="">Choose a tip</option>
                                            <option value="travelTip">Travel Tips</option>
                                            <option value="destinationGuid">Destination Guides</option>
                                            <option value="holidayInspiration">Holiday Inspirations</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid blog tip.</div>
                                </div>
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Blog:</label>
                                        <textarea class="form-control" name="details" id="exampleFormControlTextarea4" placeholder="Details." rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Blog Photo:</label>
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
