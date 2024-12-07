@extends('backend.app')

@section('title','Term&Condition')

@section('content')

@push('style')

@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Create Term & Condition</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Terms & Condition</li>
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
                    <h4>Create</h4>
                </div>
                <form class=" row needs-validation" novalidate action="{{route('Term.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="validationCustom01">Title:</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="" name="title">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Details:</label>
                                        <textarea class="form-control " name="details" id="content"  placeholder="Details...." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Photo:</label>
                                <input type="file" name="photo" class="dropify" />
                            </div>
                            <div class="mb-3 form-group">
                                <input type="hidden" name="status" value="2"/>
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

<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 400,   // Set the height of the editor
            minHeight: null, // Minimum height
            maxHeight: null, // Maximum height
            focus: true     // Focus on the editor when initialized
        });
    });
</script>

@endpush
