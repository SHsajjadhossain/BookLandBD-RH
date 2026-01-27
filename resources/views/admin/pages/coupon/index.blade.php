@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Coupon

@endsection

@section('coupon-active')

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
                                        <form action="{{ route('coupon.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="coupon_name">Coupon Name<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{ old('coupon_name') }}" name="coupon_name" id="coupon_name" class="form-control" placeholder="Enter Coupon Name" />

                                                    @error('coupon_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="discount_percentage">Coupon Discount Percentage<span class="text-danger">*</span></label>
                                                    <input type="number" value="{{ old('discount_percentage') }}" name="discount_percentage" id="discount_percentage" class="form-control" placeholder="Enter Coupon Discount Percentage" />

                                                    @error('discount_percentage')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="coupon_validity">Coupon Validity<span class="text-danger">*</span></label>
                                                    <div class="input-group">

                                                        <input type="text"
                                                            value="{{ old('coupon_validity') }}"
                                                            name="coupon_validity"
                                                            class="form-control flatpickr-date"
                                                            id="coupon_validity"
                                                            placeholder="Select Coupon Validity">

                                                        <div class="input-group-append">
                                                            <span class="input-group-text cursor-pointer calendar-icon">
                                                                <i data-feather="calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @error('coupon_validity')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="coupon_limit">Coupon Limit<span class="text-danger">*</span></label>
                                                    <input type="number" value="{{ old('coupon_limit') }}" name="coupon_limit" id="coupon_limit" class="form-control" placeholder="Enter Coupon Limit" />

                                                    @error('coupon_limit')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Add Coupon</button>
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
                                        <th>Validity</th>
                                        <th>Limit</th>
                                        <th>Discount</th>
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
                                                        <button data-toggle="modal" data-target="#edit_coupon_{{ $coupon->id }}" class="dropdown-item">
                                                            <i data-feather='edit'></i>
                                                            Edit
                                                        </button>
                                                        {{-- @endif --}}
                                                            <a data-id ="{{ $coupon->id }}" class="dropdown-item single-coupon-delete">
                                                                <i data-feather="trash"></i>
                                                                Delete
                                                            </a>
                                                    </div>
                                                </div>
                                                {{-- Edit Modal Start --}}
                                                    @push('all_modals')
                                                    <!-- Modal -->
                                                    {{-- @if (havePermission('category','edit')) --}}
                                                    <div class="modal fade" id="edit_coupon_{{ $coupon->id }}" tabindex="-1"    aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Coupon</h5>
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
                                                                <form action="{{ route('coupon.update', $coupon->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="coupon_update_id" value="{{ $coupon->id }}">
                                                                        <div class="form-group">
                                                                            <label for="coupon_name">Coupon Name<span class="text-danger">*</span></label>
                                                                            <input type="text" value="{{ $coupon->coupon_name}}" name="coupon_name" id="coupon_name"
                                                                                class="form-control">

                                                                            @error('coupon_name')
                                                                            <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="discount_percentage">Coupon Discount Percentage<span class="text-danger">*</span></label>
                                                                            <input type="number" value="{{ $coupon->discount_percentage }}" name="discount_percentage" id="category_name" class="form-control" placeholder="Enter Coupon Discount Percentage" />

                                                                            @error('discount_percentage')
                                                                                <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="coupon_validity">Coupon Validity<span class="text-danger">*</span></label>
                                                                            <div class="input-group">
                                                                                <input type="date"
                                                                                    value="{{ $coupon->coupon_validity }}"
                                                                                    name="coupon_validity"
                                                                                    class="form-control flatpickr-date"
                                                                                    id="coupon_validity"
                                                                                    placeholder="Select Coupon Validity">

                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text cursor-pointer calendar-icon">
                                                                                        <i data-feather="calendar"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            @error('coupon_validity')
                                                                                <small class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="coupon_limit">Coupon Limit<span class="text-danger">*</span></label>
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
                                                <span class="font-weight-bold">{{ $coupon->coupon_name ?? '' }}</span>
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">{{ $coupon->coupon_validity ?? '' }}</span>
                                            </td>

                                            <td><span class="font-weight-bold">{{ $coupon->coupon_limit ?? '' }}</span></td>
                                            <td><span class="font-weight-bold">{{ $coupon->discount_percentage ?? '' }}</span></td>
                                            <td><span class="font-weight-bold">{{ $coupon->created_at->diffForHumans() ?? '' }}</span></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="50" class="text-center"><span class="text-center text-danger font-weight-bold">No data to show</span></td>
                                        </tr>
                                    @endforelse
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
        let ids = [];
        // @error('coupon_name')
        // $('#add_coupon_modal').modal('show');
        // @enderror

        // @error('coupon_validity')
        // $('#add_coupon_modal').modal('show');
        // @enderror

        const hasError = {{ $errors->any() ? 'true' : 'false' }};
        const couponUpdateId = "{{ old('coupon_update_id') }}";
        if (hasError && couponUpdateId) {
            $('#edit_coupon_' + couponUpdateId).modal('show');
        }else if (hasError) {
            $('#add_coupon_modal').modal('show');
        }

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

    //Sweet alert message single cat delete start
        $(document).on('click', '.single-coupon-delete', function (e) {
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
                        let single_delete = $(this).data('id');
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'DELETE',
                            url: "{{ route('coupon.destroy', ':id') }}".replace(':id', single_delete),
                            data: {single_delete:single_delete},
                            success: function (response) {
                                if (response.status=='success') {
                                    $("#"+response['tr']).slideUp('slow');
                                    swalWithBootstrapButtons.fire(
                                    'Deleted!',
                                    response.message,
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

    //Date picker start
    $(document).ready(function () {

        $('.flatpickr-date').flatpickr({
            dateFormat: "Y-m-d",
            minDate: "today",
            allowInput: true,
        });

        $('.calendar-icon').on('click', function () {
            $(this).closest('.input-group').find('.flatpickr-date').focus();
        });
    });
    //Date picker end

    if (typeof feather !== 'undefined') {
        feather.replace();
    }

</script>

@endpush

