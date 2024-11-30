@extends('backend.app')

@section('title','Package')

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
                <form class=" row needs-validation" novalidate action="{{route('package.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body add-post">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="validationCustom01">Title:</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" name="title" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01">Tour Days:</label>
                                <input class="form-control" name="days" type="number">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02">Valid Time Duration:</label>
                                <input class="form-control" name="valid" id="validationCustom02" type="text" placeholder="Provide Here Validity Period ." required>
                                <div class="valid-feedback">Validity period!</div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03">Invalid Time Duration:</label>
                                <input class="form-control" name="not_valid" id="validationCustom03" type="text" placeholder="Provide Here Expired Duration ." required>
                                <div class="valid-feedback">Validity expired period!</div>
                            </div>

                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Package Details:</label>
                                        <textarea class="form-control" name="details" id="exampleFormControlTextarea4" placeholder="Package details." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                    <label>Includes:</label>
                                    <textarea class="form-control" name="includes" id="exampleFormControlTextarea4" placeholder="Include details on this package." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                        <label>Excludes:</label>
                                        <textarea class="form-control" name="excludes" id="exampleFormControlTextarea4" placeholder="Exclude details on this package." rows="3"></textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label class="col-form-label" for="mentor_avatar">Tourist Place Photo:</label>
                                <div class="">
                                    <label for="mentor_avatar" class="upload-box">
                                        <span id="upload-photo-text">Click to upload a photo</span>
                                        <input id="mentor_avatar" name="photo" type="file" accept="image/*" style="display: none;" />
                                    </label>
                                    <div class="image-preview mt-3" id="image-preview-container" style="display: none;">
                                        <img id="mentor-preview-image" src="" alt="Selected Image" style="max-width: 100px; max-height: 100px; border-radius: 6px;" />
                                        <span class="remove-link" id="remove-mentor-photo">Remove</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-showcase">
                        <button class="btn btn-primary" type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const imageInput = document.getElementById('mentor_avatar');
        const previewContainer = document.getElementById('image-preview-container');
        const previewImage = document.getElementById('mentor-preview-image');
        const removeButton = document.getElementById('remove-mentor-photo');
        const uploadText = document.getElementById('upload-photo-text');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                const fileReader = new FileReader();

                fileReader.onload = function (e) {
                    previewImage.src = e.target.result; // Set preview image source
                    previewContainer.style.display = 'block'; // Show preview container
                };

                fileReader.readAsDataURL(file); // Read file as data URL
                uploadText.innerText = 'Photo selected: ' + file.name;
            }
        });

        removeButton.addEventListener('click', function () {
            imageInput.value = ''; // Reset input value
            previewImage.src = ''; // Clear preview image source
            previewContainer.style.display = 'none'; // Hide preview container
            uploadText.innerText = 'Click to upload a photo'; // Reset upload box text
        });
    });
</script>
  
@endpush
