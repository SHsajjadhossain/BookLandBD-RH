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
                        <form class="form form-vertical" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Product Name<span class="text-danger">*</span></label>
                                        <input type="text" id="product_name" class="form-control" name="product_name"
                                            placeholder="Enter Product Name" />
                                        @error('product_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Product Slug<span class="text-danger">*</span></label>
                                        <input type="text" id="product_slug" class="form-control" name="product_slug"
                                            placeholder="" />
                                        @error('product_slug')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Product Category<span class="text-danger">*</span></label>
                                        <select name="category_id" class="select2 form-control" id="product_category">
                                            <option value="" disabled selected>--Select Category--</option>
                                            @foreach ($product_categories as $product_category)
                                            <option value="{{ $product_category->id }}">{{ $product_category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group" id="product_sub_category">
                                        <label for="contact-info-vertical">Product Sub Category<span class="text-danger">*</span></label>
                                        <select name="sub_category_id" class="select2 form-control" id="sub_category">
                                            <option value="" disabled selected>--Select Sub Category--</option>
                                        </select>
                                        @error('sub_category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Price<span class="text-danger">*</span></label>
                                        <input type="number" id="password-vertical" class="form-control" name="product_price"
                                            placeholder="Enter Product Price" />
                                        @error('product_price')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Short Description<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="product_short_description" id="exampleFormControlTextarea1" style="resize:none" rows="3" placeholder="Enter short description"></textarea>
                                        {{-- <div class="custom-editor-wrapper_1">
                                            <div class="custom-editor_1"></div>
                                            <input type="hidden" name="product_short_description" class="custom-editor-input_1">
                                        </div> --}}
                                        @error('product_short_description')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2">Product Long Description<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="product_long_description" id="exampleFormControlTextarea2" style="resize:none"
                                            rows="5" placeholder="Enter long description"></textarea>
                                        {{-- <div class="custom-editor-wrapper">
                                            <div class="custom-editor"></div>
                                            <input type="hidden" name="product_long_description" class="custom-editor-input">
                                        </div> --}}
                                        @error('product_long_description')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Quantity<span class="text-danger">*</span></label>
                                        <input type="number" id="password-vertical" class="form-control" name="product_quantity"
                                            placeholder="Enter Product Quantity" />
                                        @error('product_quantity')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Product Code<span class="text-danger">*</span></label>
                                        <input type="text" id="password-vertical" class="form-control" name="product_code"
                                            placeholder="Enter Product Code" />
                                        @error('product_code')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="custom-file">Product Photo<small class="text-warning"> (Dimensions: 700 x 700 px)</small> <span class="text-danger">*</span></label>
                                        <div class="mb-1 mr-1">
                                            <img src="" data-reset-src="" id="product_photo_upload_img" class="rounded uploadedAvatar object-fit--cover"
                                                alt="product photo" width="130" height="140">
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="product_photo_upload" name="product_photo" />
                                            <label class="custom-file-label" for="customFile">Choose photo</label>
                                            @error('product_photo')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Do You Want To Feature This Product? <span class="text-danger"> *</span></label>
                                        {{-- <input type="text" id="password-vertical" class="form-control" name="product_code"
                                            placeholder="Enter Product Code" /> --}}
                                        <div class="custom-control custom-radio" style="margin-bottom: 5px;">
                                            <input type="radio" id="customRadio1" name="product_featured" class="custom-control-input" value="1" />
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="product_featured" class="custom-control-input" value="2" />
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                        @error('product_code')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Add Product</button>
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

    // product-categorywise-select-sub-cat js start
    $(document).ready(function () {
        $('#product_sub_category').hide();
            @error('sub_category_id')
                $('#product_sub_category').show();
            @enderror
        $('#product_category').change(function (e) {
            e.preventDefault();
            var product_category_id = $(this).val();

            $.ajax({
                type: "POST",
                url: "{{ route('product.subCategory.search') }}",
                data: {product_category_id:product_category_id},
                success: function (response) {
                    if (response['subCategories'].length > 0) {
                        $('#product_sub_category').show();
                        $.each(response.subCategories, function (index, val) {
                            $('#sub_category').append('<option value="'+val.id+'">'+val.sub_category_name+'</option>');
                        });
                    }
                    else{
                        $('#product_sub_category').hide();
                    }
                }
            });
        });
    });
    // product-categorywise-select-sub-cat js end

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

    // Tostr & SweetAlert2 success start

        @if (session("success"))
            // toastr.success("{{ session('success') }}")
            Swal.fire({
                title: 'Done!',
                text: '{{ session("success") }}',
                icon: 'success',
                customClass: {
                confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            });
        @endif

        // Tostr & SweetAlert2 success end

    // quill editor js start

    // $(document).ready(function (){
    //     (function(){
    //         if($(".custom-editor-wrapper").length){
    //             /* Initialize QUill editor */
    //             let quillEditor = new Quill('.custom-editor', {
    //                 modules: {
    //                     // imageResize: {
    //                     //     displaySize: true
    //                     // },
    //                     toolbar: [
    //                         [{ header: [1, 2, 3, 4, 5, 6,  false] }],
    //                         ['bold', 'italic', 'underline','strike'],
    //                         ['blockquote', 'code-block'],
    //                         // ['image', 'video'],
    //                         ['link'],
    //                         [{ 'script': 'sub'}, { 'script': 'super' }],
    //                         [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    //                         [{'color': []},{'background': []}],
    //                         [{ 'align': [] }],
    //                         ['clean']
    //                     ]
    //                 },
    //                 theme: 'snow'
    //             });

    //             /* Set QUill editor data into closest input */
    //             quillEditor.on('text-change', function(delta, source) {
    //                 getQuillEditorData();
    //             });

    //             /* Get QUill editor data function */
    //             function getQuillEditorData() {
    //                 let quillEditorData = quillEditor.root.innerHTML;
    //                 $(".custom-editor").closest(".custom-editor-wrapper").find(".custom-editor-input").val(quillEditorData);
    //             };
    //             getQuillEditorData();
    //         }
    //     })();
    // })

    // $(document).ready(function (){
    //     (function(){
    //         if($(".custom-editor-wrapper_1").length){
    //             /* Initialize QUill editor */
    //             let quillEditor = new Quill('.custom-editor_1', {
    //                 modules: {
    //                     // imageResize: {
    //                     //     displaySize: true
    //                     // },
    //                     toolbar: [
    //                         [{ header: [1, 2, 3, 4, 5, 6,  false] }],
    //                         ['bold', 'italic', 'underline','strike'],
    //                         ['blockquote', 'code-block'],
    //                         // ['image', 'video'],
    //                         ['link'],
    //                         [{ 'script': 'sub'}, { 'script': 'super' }],
    //                         [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    //                         [{'color': []},{'background': []}],
    //                         [{ 'align': [] }],
    //                         ['clean']
    //                     ]
    //                 },
    //                 theme: 'snow'
    //             });

    //             /* Set QUill editor data into closest input */
    //             quillEditor.on('text-change', function(delta, source) {
    //                 getQuillEditorData();
    //             });

    //             /* Get QUill editor data function */
    //             function getQuillEditorData() {
    //                 let quillEditorData = quillEditor.root.innerHTML;
    //                 $(".custom-editor_1").closest(".custom-editor-wrapper_1").find(".custom-editor-input_1").val(quillEditorData);
    //             };
    //             getQuillEditorData();
    //         }
    //     })();
    // })

    // quill editor js end
</script>

@endpush

