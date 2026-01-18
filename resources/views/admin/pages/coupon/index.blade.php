@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Category

@endsection

@section('coupon-list-active')

active

@endsection

@push('custom-css')

<style>
    .dropdown-menu button.dropdown-item{
        width: 100%;
    }

    table td{
        font-family: Roboto, sans-serif !important;
        font-size: 1rem !important;
        font-weight: 400 !important;
        line-height: 1.45 !important;
        padding: 0.72rem 2rem !important;
        text-align: left;
    }

    .swal2-confirm{
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
                    <h2 class="float-left mb-0 content-header-title">Coupons</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Coupons List
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
                        <h4 class="card-title">Total Coupon ({{ $coupons->count() }})</h4>
                        <div class="button-group-spacing d-flex">
                            {{-- @if (havePermission('category','import')) --}}
                            {{-- <button class="btn btn-success waves-effect w-100 w-sm-auto" data-toggle="modal"
                                data-target="#csvImportModal">+ Import</button> --}}
                            {{-- @endif --}}

                            {{-- @if (havePermission('category','create')) --}}
                            <button class="mr-1 btn btn-warning waves-effect w-100 w-sm-auto" data-toggle="modal"
                                data-target="#add_coupon_modal">+ Add New Coupon</button>
                            {{-- @endif --}}
                            <div id="all_actions" class="dropdown w-sm-auto d-none">
                                <button class="btn btn-info w-100 w-sm-auto dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    All Action
                                </button>
                                <div class="dropdown-menu dropdown-menu-right w-100">
                                    {{-- @if (havePermission('category','delete')) --}}
                                    <button class="dropdown-item" data-toggle="modal" data-target="#deleteModal"><i
                                            data-feather='trash-2'></i> Delete</button>
                                    @push('all_modals')
                                    <!-- Bulk Delete Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="text-center modal-body">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 100px" width="1em"
                                                        height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-alert-circle text-danger">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                    </svg>
                                                    <h2 class="mt-1 font-weight-normal">{{ __('Are you sure') }}?</h2>
                                                    <h4 class="mb-0 font-weight-light">{{ __("You won't be able to revert this!") }}</h4>
                                                </div>
                                                <div class="modal-footer border-top-0 justify-content-center">
                                                    <button type="button" class="btn btn-outline-secondary waves-effect"
                                                        data-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg>
                                                        {{ __('Close') }}
                                                    </button>
                                                    <button id="delete_all" class="btn btn-danger waves-effect waves-float waves-light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                        <!-- Add Coupon Modal Start -->
                        @push('all_modals')

                            <div class="modal fade" id="add_coupon_modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Coupon</h5>
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
                                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="category_name">Coupon Name<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{ old('coupon_name') }}" name="coupon_name" id="category_name" class="form-control" placeholder="Enter Coupon Name" />

                                                    @error('coupon_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="category_name">Coupon Discount Percentage<span class="text-danger">*</span></label>
                                                    <input type="number" value="{{ old('discount_percentage') }}" name="discount_percentage" id="category_name" class="form-control" placeholder="Enter Coupon Discount Percentage" />

                                                    @error('discount_percentage')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="category_name">Coupon Validity<span class="text-danger">*</span></label>
                                                    <input type="date" value="{{ old('coupon_validity') }}" name="coupon_validity" id="category_name" class="form-control" placeholder="Enter Coupon Validity" />

                                                    @error('coupon_validity')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="category_name">Coupon Limit<span class="text-danger">*</span></label>
                                                    <input type="number" value="{{ old('coupon_limit') }}" name="coupon_limit" id="category_name" class="form-control" placeholder="Enter Coupon Limit" />

                                                    @error('coupon_limit')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endpush
                        <!-- Add Coupon Modal End -->
                    </div>
                    <div class="card-body">
                        <form action="" method="">

                            {{-- Filer start --}}

                            {{-- <div class="row align-items-end">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" @isset(request()->start_date) value="{{
                                        \Carbon\Carbon::parse(request()->start_date)->format('Y-m-d') }}" @endisset id="start_date"
                                        class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="start_date">End Date <span class="text-danger">*</span></label>
                                        <input type="date" @isset(request()->start_date) value="{{
                                        \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }}" @endisset name="end_date" id="end_date"
                                        class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success waves-effect w-100 w-sm-auto">Filter</button>
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
                                            <input type="search" class="form-control table_search" placeholder="Search Here">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i data-feather='search'></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @include( 'includes.pagination', ['variables' => $categories, 'pagination_col_class' => 'col-md-auto',
                                'data_variables' => ['start_date' => request()->start_date,'end_date' => request()->end_date]]) --}}
                            </div>
                        </form>
                        <div class="mt-2 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input main_checkbox" id="all-select">
                                                <label class="custom-control-label" for="all-select"></label>
                                            </div>
                                        </th>
                                        <th>Actions</th>
                                        <th>Coupon Name</th>
                                        <th>Coupon Validity</th>
                                        {{-- <th>Created By</th>
                                        <th>Updated By</th> --}}
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($coupons as $coupon)
                                        <tr id="tr_{{ $coupon->id }}">
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
                                                        <button data-toggle="modal" data-target="#edit_category_{{ $coupon->id }}" class="dropdown-item">
                                                            <i data-feather='edit'></i>
                                                            Edit
                                                        </button>
                                                        {{-- @endif --}}

                                                        <a href="{{ route('category.show', $coupon->id) }}" class="dropdown-item">
                                                            <i data-feather='eye'></i>
                                                            Details
                                                        </a>

                                                        {{-- @if (havePermission('category','delete')) --}}
                                                        {{-- <form action="" method="">
                                                            <button type="submit" class="dropdown-item single-cat-delete" data-id ="{{ $category->id }}">
                                                                <i data-feather="trash"></i>
                                                                Delete
                                                            </button>
                                                        </form> --}}
                                                            <a href="" data-id ="{{ $coupon->id }}" class="dropdown-item single-cat-delete">
                                                                <i data-feather="trash"></i>
                                                                Delete
                                                            </a>
                                                        {{-- @endif --}}
                                                    </div>
                                                </div>
                                                {{-- Edit Modal Start --}}
                                                    @push('all_modals')
                                                    <!-- Modal -->
                                                    {{-- @if (havePermission('category','edit')) --}}
                                                    <div class="modal fade" id="edit_category_{{ $coupon->id }}" tabindex="-1"    aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Coupon</h5>
                                                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button> --}}
                                                                </div>
                                                                {{-- @if ($errors->any())
                                                                <div class="p-1 alert alert-danger">
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </div>
                                                                @endif --}}
                                                                <form action="{{ route('category.update', $coupon->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="category_update_id" value="{{ $coupon->id }}">
                                                                        <div class="form-group">
                                                                            <label for="category_name">Coupon Name<span class="text-danger">*</span></label>
                                                                            <input type="text" value="{{ $coupon->coupon_name}}" name="category_update_name" id="category_name"
                                                                                class="form-control">

                                                                            @error('category_update_name')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="category_name">Coupon Discount Percentage<span class="text-danger">*</span></label>
                                                                            <input type="number" value="{{ $coupon->discount_percentage }}" name="discount_percentage" id="category_name" class="form-control" placeholder="Enter Coupon Discount Percentage" />

                                                                            @error('discount_percentage')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="category_name">Coupon Validity<span class="text-danger">*</span></label>
                                                                            <input type="date" value="{{ $coupon->coupon_validity }}" name="coupon_validity" id="category_name" class="form-control" placeholder="Enter Coupon Validity" />

                                                                            @error('coupon_validity')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="category_name">Coupon Limit<span class="text-danger">*</span></label>
                                                                            <input type="number" value="{{ $coupon->coupon_limit }}" name="coupon_limit" id="category_name" class="form-control" placeholder="Enter Coupon Limit" />

                                                                            @error('coupon_limit')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
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
                                                <span class="font-weight-bold">{{ $coupon->coupon_name }}</span>
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">{{ $coupon->coupon_validity }}</span>
                                            </td>

                                            <td><span class="font-weight-bold">{{ $coupon->created_at->diffForHumans() }}</span></td>
                                            {{-- <td><span class="mr-1 badge badge-pill badge-light-warning">Pending</span></td> --}}
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="50" class="text-center"><span class="text-center text-danger font-weight-bold">No data to show</span></td>
                                        </tr>
                                    @endforelse

                                    @push('all_modals')
                                    <!-- Modal -->
                                    {{-- @if (havePermission('category','edit')) --}}
                                    <div class="modal fade" id="add_category_modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Category</h5>
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
                                                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="category_name">Category Name<span class="text-danger">*</span></label>
                                                            <input type="text" value="{{ old('category_name') }}" name="category_name" id="category_name"
                                                                class="form-control">

                                                            @error('category_name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="category_photo">Category Photo<small class="text-warning">(Dimensions: 521 x 270 px)</small>
                                                                <span class="text-danger">*</span></label>
                                                            <div class="mb-1 mr-1">
                                                                <img src="" data-reset-src="" id="category_photo_upload_img"
                                                                    class="rounded uploadedAvatar object-fit--cover" alt="category photo" width="200" height="80">
                                                            </div>
                                                            <input type="file" value="" name="category_photo" id="category_photo_upload" class="form-control">

                                                            @error('category_photo')
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
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--........................ --}}
                    {{ $coupons->links('admin.pages.pagination.paginate') }}

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
        @error('category_name')
        $('#add_category_modal').modal('show');
        @enderror

        @error('category_photo')
        $('#add_category_modal').modal('show');
        @enderror

        @error('category_update_name')
        $('#edit_category_'+'{{ old('category_update_id') }}').modal('show');
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

        @if (session("imgUpdateSuccess"))
            // toastr.success("{{ session('imgUpdateSuccess') }}")
            Swal.fire({
                    title: 'Done!',
                    text: '{{ session("imgUpdateSuccess") }}',
                    icon: 'success',
                    customClass: {
                    confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
            });
        @endif

        // Tostr & SweetAlert2 success end

    });

    // @if (session("sub_cat_warn"))
    //     Swal.fire({
    //         title: 'Warning!',
    //         text: ' {{session("sub_cat_warn")  }}',
    //         icon: 'warning',
    //         customClass: {
    //         confirmButton: 'btn btn-primary'
    //         },
    //         buttonsStyling: false
    //     });
    // @endif

    //Sweet alert message single cat delete start
        $(document).on('click', '.single-cat-delete', function (e) {
                e.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                const swalWithSubCatWarnButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-primary'
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
                            url: "{{ route('category.single_cat_delete') }}",
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
                                else if(response.status=='sub_cat_warn'){
                                    swalWithSubCatWarnButtons.fire({
                                        title: 'Warning!',
                                        text: "This category have sub category. You can't delete it!",
                                        icon: 'warning',

                                    });
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

