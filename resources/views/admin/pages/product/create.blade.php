@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Add Product

@endsection

@section('add-product-active')

active

@endsection

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Product</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right"></div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- @if (session('success'))
                    <div class="p-2 alert alert-success">
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif --}}
                    <div class="card-header d-block d-sm-flex">
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Product Name<span class="text-danger">*</span></label>
                                        <input type="text" id="product_name" class="form-control" name="product_name"
                                            placeholder="Enter Product Name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Product Slug<span class="text-danger">*</span></label>
                                        <input type="text" id="product_slug" class="form-control" name="product_slug"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Product Category<span class="text-danger">*</span></label>
                                        <select name="" class="select2 form-control" id="">
                                            <option value="">--Select Category--</option>
                                            @foreach ($product_categories as $product_category)
                                            <option value="{{ $product_category->category_id }}">{{ $product_category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-info-vertical">Product Sub Category<span class="text-danger">*</span></label>
                                        <select name="" class="select2 form-control" id="">
                                            <option value="">--Select Sub Category--</option>
                                            <option value="">dadsf</option>
                                            <option value="">wrws</option>
                                            <option value="">wfggrrwt</option>
                                            <option value="">vhfastr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Price<span class="text-danger">*</span></label>
                                        <input type="password" id="password-vertical" class="form-control" name="contact"
                                            placeholder="Enter Product Price" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Product Short Description<span class="text-danger">*</span></label>
                                        <div class="custom-editor-wrapper_1">
                                            <div class="custom-editor_1"></div>
                                            <input type="hidden" name="short_description" class="custom-editor-input_1">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Product Long Description<span class="text-danger">*</span></label>
                                        <div class="custom-editor-wrapper">
                                            <div class="custom-editor"></div>
                                            <input type="hidden" name="long_description" class="custom-editor-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Code<span class="text-danger">*</span></label>
                                        <input type="password" id="password-vertical" class="form-control" name="contact"
                                            placeholder="Enter Product Code" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="custom-file">Product Photo<span class="text-danger">*</span></label>
                                        <div class="mb-1 mr-1">
                                            <img src="" data-reset-src="" id="product_photo_upload_img" class="rounded uploadedAvatar object-fit--cover"
                                                alt="product photo" width="200" height="80">
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="product_photo_upload" />
                                            <label class="custom-file-label" for="customFile">Choose photo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-primary mr-1">Add Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script>

    // product-slug js start
    $('#product_name').keyup(function() {
        $('#product_slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
    });
    // product-slug js end

    // Update & Reset Category photo on click of button start
        let productUploadImg = $('#product_photo_upload_img');
        let productUploadInput = $('#product_photo_upload');
        let accountResetBtn = $('#account-reset');
        if (productUploadInput) {
            productUploadInput.on('change', function (e) {
                var reader = new FileReader(),
                    files = e.target.files;
                reader.onload = function () {
                    if (productUploadImg) {
                        productUploadImg.attr('src', reader.result);
                    }
                };
                reader.readAsDataURL(files[0]);
            });
        }
    // Update & Reset Category photo on click of button end

    // quill editor js start

    $(document).ready(function (){
        (function(){
            if($(".custom-editor-wrapper").length){
                /* Initialize QUill editor */
                let quillEditor = new Quill('.custom-editor', {
                    modules: {
                        // imageResize: {
                        //     displaySize: true
                        // },
                        toolbar: [
                            [{ header: [1, 2, 3, 4, 5, 6,  false] }],
                            ['bold', 'italic', 'underline','strike'],
                            ['blockquote', 'code-block'],
                            // ['image', 'video'],
                            ['link'],
                            [{ 'script': 'sub'}, { 'script': 'super' }],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            [{'color': []},{'background': []}],
                            [{ 'align': [] }],
                            ['clean']
                        ]
                    },
                    theme: 'snow'
                });

                /* Set QUill editor data into closest input */
                quillEditor.on('text-change', function(delta, source) {
                    getQuillEditorData();
                });

                /* Get QUill editor data function */
                function getQuillEditorData() {
                    let quillEditorData = quillEditor.root.innerHTML;
                    $(".custom-editor").closest(".custom-editor-wrapper").find(".custom-editor-input").val(quillEditorData);
                };
                getQuillEditorData();
            }
        })();
    })

    $(document).ready(function (){
        (function(){
            if($(".custom-editor-wrapper_1").length){
                /* Initialize QUill editor */
                let quillEditor = new Quill('.custom-editor_1', {
                    modules: {
                        // imageResize: {
                        //     displaySize: true
                        // },
                        toolbar: [
                            [{ header: [1, 2, 3, 4, 5, 6,  false] }],
                            ['bold', 'italic', 'underline','strike'],
                            ['blockquote', 'code-block'],
                            // ['image', 'video'],
                            ['link'],
                            [{ 'script': 'sub'}, { 'script': 'super' }],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            [{'color': []},{'background': []}],
                            [{ 'align': [] }],
                            ['clean']
                        ]
                    },
                    theme: 'snow'
                });

                /* Set QUill editor data into closest input */
                quillEditor.on('text-change', function(delta, source) {
                    getQuillEditorData();
                });

                /* Get QUill editor data function */
                function getQuillEditorData() {
                    let quillEditorData = quillEditor.root.innerHTML;
                    $(".custom-editor_1").closest(".custom-editor-wrapper_1").find(".custom-editor-input_1").val(quillEditorData);
                };
                getQuillEditorData();
            }
        })();
    })

    // quill editor js end
</script>

@endpush

