@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Sub Category

@endsection

@section('subCategory-active')

active

@endsection

@push('custom-css')

<style>
    .dropdown-menu button.dropdown-item {
        width: 100%;
    }

    table td {
        font-family: Roboto, sans-serif !important;
        font-size: 1rem !important;
        font-weight: 400 !important;
        line-height: 1.45 !important;
        padding: 0.72rem 2rem !important;
        text-align: left;
    }

    .swal2-confirm {
        margin-left: 15px
    }
</style>

@endpush

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Product Sub Category</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Sub Category
                            </li>
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
                        <h4 class="card-title">Total Sub Category ({{ $subCategories->count() }})</h4>
                        <div class="button-group-spacing d-flex">
                            {{-- @if (havePermission('category','import')) --}}
                            {{-- <button class="btn btn-success waves-effect w-100 w-sm-auto" data-toggle="modal"
                                data-target="#csvImportModal">+ Import</button> --}}
                            {{-- @endif --}}

                            {{-- @if (havePermission('category','create')) --}}
                            <button class="mr-1 btn btn-warning waves-effect w-100 w-sm-auto" data-toggle="modal"
                                data-target="#add_sub_category_modal">+ Add New Sub Category</button>
                            {{-- @endif --}}
                            <div id="all_actions" class="dropdown w-sm-auto d-none">
                                <button class="btn btn-info w-100 w-sm-auto dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Action
                                </button>
                                <div class="dropdown-menu dropdown-menu-right w-100">
                                    {{-- @if (havePermission('category','delete')) --}}
                                    <button class="dropdown-item" data-toggle="modal" data-target="#deleteModal"><i
                                            data-feather='trash-2'></i> Delete</button>
                                    @push('all_modals')
                                    <!-- Bulk Delete Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="text-center modal-body">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 100px"
                                                        width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-alert-circle text-danger">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                    </svg>
                                                    <h2 class="mt-1 font-weight-normal">{{ __('Are you sure') }}?</h2>
                                                    <h4 class="mb-0 font-weight-light">{{ __("You won't be able to
                                                        revert this!") }}</h4>
                                                </div>
                                                <div class="modal-footer border-top-0 justify-content-center">
                                                    <button type="button" class="btn btn-outline-secondary waves-effect"
                                                        data-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg>
                                                        {{ __('Close') }}
                                                    </button>
                                                    <button id="delete_all"
                                                        class="btn btn-danger waves-effect waves-float waves-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                        {{ __('Delete') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endpush
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                        <!-- Add Category Modal Start -->
                        @push('all_modals')

                        <div class="modal fade" id="add_sub_category_modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Sub Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {{-- @if ($errors->any())
                                    <div class="p-1 alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                    @endif --}}
                                    <form action="{{ route('subcategory.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="sub_category_name">Sub Category Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" value="{{ old('sub_category_name') }}"
                                                    name="sub_category_name" id="sub_category_name" class="form-control">

                                                @error('sub_category_name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="category_id">Select Category<span
                                                        class="text-danger">*</span></label>
                                                    <select name="category_id" class="select2 form-control" id="category_id">
                                                        <option value>--Select Category--</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>

                                                @error('category_id')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            {{-- <div class="form-group">
                                                <label for="category_photo">Category Photo<small
                                                        class="text-warning">(Dimensions: 521 x 270 px)</small> <span
                                                        class="text-danger">*</span></label>
                                                <div class="mb-1 mr-1">
                                                    <img src="" data-reset-src="" id="category_photo_upload_img"
                                                        class="rounded uploadedAvatar object-fit--cover"
                                                        alt="category photo" width="200" height="80">
                                                </div>
                                                <input type="file" value="" name="category_photo"
                                                    id="category_photo_upload" class="form-control">

                                                @error('category_photo')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancle</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @endpush
                        <!-- Add Category Modal End -->
                    </div>
                    <div class="card-body">
                        <form action="" method="">

                            {{-- Filer start --}}

                            {{-- <div class="row align-items-end">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" @isset(request()->start_date) value="{{
                                        \Carbon\Carbon::parse(request()->start_date)->format('Y-m-d') }}" @endisset
                                        id="start_date"
                                        class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="start_date">End Date <span class="text-danger">*</span></label>
                                        <input type="date" @isset(request()->start_date) value="{{
                                        \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }}" @endisset
                                        name="end_date" id="end_date"
                                        class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn btn-success waves-effect w-100 w-sm-auto">Filter</button>
                                        @if(Route::is('category.date.filter'))
                                        <a href="{{ route('categories.index') }}"
                                            class="mt-1 btn btn-danger waves-effect mt-sm-0 w-100 w-sm-auto">Clear</a>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}

                            {{-- Filer end --}}

                            <div class="row align-items-md-center">
                                <div class="col-md">
                                    <div class="form-group mb-md-0">
                                        <div class="input-group">
                                            <input type="search" class="form-control table_search"
                                                placeholder="Search Here">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i data-feather='search'></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @include( 'includes.pagination', ['variables' => $categories,
                                'pagination_col_class' => 'col-md-auto',
                                'data_variables' => ['start_date' => request()->start_date,'end_date' =>
                                request()->end_date]]) --}}
                            </div>
                        </form>
                        <div class="mt-2 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input main_checkbox"
                                                    id="all-select">
                                                <label class="custom-control-label" for="all-select"></label>
                                            </div>
                                        </th>
                                        <th>Actions</th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($subCategories as $subCategory)
                                    <tr id="tr_{{ $subCategory->id }}">
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input all_checkbox" name="select_individual[]"
                                                    id="single-select-">
                                                <label class="custom-control-label" for="single-select-"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown position-static">
                                                <button type="button" class="btn btn-icon btn-outline-secondary waves-effect dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown" data-boundary="viewport">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    {{-- @if (havePermission('category','edit')) --}}
                                                    <button data-toggle="modal" data-target="#edit_sub_category_{{ $subCategory->id }}" class="dropdown-item">
                                                        <i data-feather='edit'></i>
                                                        Edit
                                                    </button>
                                                    {{-- @endif --}}

                                                    <a href="{{ route('subcategory.show', $subCategory->id) }}" class="dropdown-item">
                                                        <i data-feather='eye'></i>
                                                        Details
                                                    </a>
                                                    <a href="" data-id="{{ $subCategory->id }}" class="dropdown-item single-sub-cat-delete">
                                                        <i data-feather="trash"></i>
                                                        Delete
                                                    </a>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                            {{-- Edit Modal Start --}}
                                            @push('all_modals')
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_sub_category_{{ $subCategory->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Category</h5>
                                                        </div>
                                                        <form action="{{ route('subcategory.update', $subCategory->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <input type="hidden" name="sub_category_update_id" value="{{ $subCategory->id }}">
                                                                <div class="form-group">
                                                                    <label for="sub_category_update_name">Sub Category Name<span class="text-danger">*</span></label>
                                                                    <input type="text" value="{{ $subCategory->sub_category_name}}" name="sub_category_update_name"
                                                                        id="sub_category_update_name" class="form-control">

                                                                    @error('sub_category_update_name')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="update_category_id">Select Category<span class="text-danger">*</span></label>
                                                                    <select name="update_category_id" class="select2 form-control" id="update_category_id">
                                                                        <option value="{{ $subCategory->category_id }}">
                                                                            {{ $subCategory->relationWithCategory->category_name }}
                                                                        </option>
                                                                        @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                    </select>

                                                                    @error('update_category_id')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @endif --}}
                                            @endpush
                                            {{-- Edit Modal End --}}
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ $subCategory->sub_category_name }}</span>
                                        </td>
                                        <td>{{ $subCategory->relationWithCategory->category_name }}</td>
                                        <td><span class="font-weight-bold">{{ $subCategory->created_at->diffForHumans() }}</span></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="50" class="text-center"><span class="text-center text-danger font-weight-bold">No data to show</span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--........................ --}}
                    {{ $subCategories->links('admin.pages.pagination.paginate') }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script>
    $(document).ready(function () {
        var ids = [];
        @error('sub_category_name')
        $('#add_sub_category_modal').modal('show');
        @enderror

        @error('category_id')
        $('#add_sub_category_modal').modal('show');
        @enderror

        @error('sub_category_update_name')
        $('#edit_sub_category_'+'{{ old('sub_category_update_id') }}').modal('show');
        @enderror

        @error('category_update_photo')
        $('#edit_category_'+'{{ old('category_update_id') }}').modal('show');
        @enderror


        // Table Search

        $('.table_search').on('input', function(){
        var tableSearchValue = $(this).val();
        $(this).closest(".card-body").find(".table tbody tr").each(function(){
        if($(this).text().search(new RegExp(tableSearchValue, "i")) < 0){ $(this).hide(); } else{ $(this).show(); } }); });


        // Update & Reset Category photo on click of button

        let categoryUploadImg = $('#category_photo_upload_img');
        let categoryUploadInput = $('#category_photo_upload');
        let accountResetBtn = $('#account-reset');
        if (categoryUploadInput) {
            categoryUploadInput.on('change', function (e) {
                var reader = new FileReader(),
                    files = e.target.files;
                reader.onload = function () {
                    if (categoryUploadImg) {
                        categoryUploadImg.attr('src', reader.result);
                    }
                };
                reader.readAsDataURL(files[0]);
            });
        }

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

        @if (session("update_success"))
            // toastr.success("{{ session('update_success') }}")
            Swal.fire({
                    title: 'Done!',
                    text: '{{ session("update_success") }}',
                    icon: 'success',
                    customClass: {
                    confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
            });
        @endif

        // Tostr & SweetAlert2 success end

    });

    //Sweet alert message single cat delete start
         $(document).on('click', '.single-sub-cat-delete', function (e) {
                e.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                    swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to recover this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        var single_delete = $(this).data('id');
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'POST',
                            url: "{{ route('subcategory.single_sub_cat_delete') }}",
                            data: {single_delete:single_delete},
                            success: function (response) {
                                if (response.status=='success') {
                                    $("#"+response['tr']).slideUp('slow');
                                    swalWithBootstrapButtons.fire(
                                    'Deleted!',
                                    'Your file has been deleted Successfully.',
                                    'success'
                                    );
                                    $('.table').load(location.href+' .table');
                                }
                            }
                        });

                    }
                    else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your file is safe :)',
                        'error'
                        )
                    }
                })
         });
    //Sweet alert message single cat delete end
</script>

@endpush
