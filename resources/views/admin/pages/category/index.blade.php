@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | My Profile

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
</style>

@endpush

@section('content')

<div class="content-wrapper">
    <!-- breadcrumb area start -->
    <div class="content-header row">
        <div class="mb-2 content-header-left col-md-9 col-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="float-left mb-0 content-header-title">Admin Dashboard</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">My Profile
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
                    <div class="card-header d-block d-sm-flex">
                        <h4 class="card-title">Category List (0)</h4>
                        <div class="button-group-spacing">
                            {{-- @if (havePermission('category','import')) --}}
                            {{-- <button class="btn btn-success waves-effect w-100 w-sm-auto" data-toggle="modal"
                                data-target="#csvImportModal">+ Import</button> --}}
                            {{-- @endif --}}

                            {{-- @if (havePermission('category','create')) --}}
                            <button class="btn btn-warning waves-effect w-100 w-sm-auto" data-toggle="modal"
                                data-target="#add_category_modal">+ Add New Category</button>
                            {{-- @endif --}}
                            <div id="all_actions" class="dropdown w-100 w-sm-auto ">
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
                        <!-- Add Category Modal Start -->
                        @push('all_modals')

                            <div class="modal fade" id="add_category_modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Category Name<span class="text-danger">*</span></label>
                                                    <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control">
                                                </div>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                <div class="form-group">
                                                    <label for="name">Category Left Photo<small class="text-warning">(Dimensions: 255 x 386 px)</small> <span class="text-danger">*</span></label>
                                                    <input type="file" value="{{ old('name') }}" name="name" id="name" class="form-control">
                                                </div>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                <div class="form-group">
                                                    <label for="name">Category Photo<small class="text-warning">(Dimensions: 397 x 203 px)</small> <span class="text-danger">*</span></label>
                                                    <input type="file" value="{{ old('name') }}" name="name" id="name" class="form-control">
                                                </div>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
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
                                        <th>Category Name</th>
                                        <th>Created By</th>
                                        <th>Updated By</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
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
                                                    <button data-toggle="modal" data-target="#edit_category_" class="dropdown-item">
                                                        <i data-feather='edit'></i>
                                                        Edit
                                                    </button>
                                                    {{-- @endif --}}

                                                    {{-- @if (havePermission('category','delete')) --}}
                                                    <form action="" method="">
                                                        <button type="submit" class="dropdown-item">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="../../../app-assets/images/icons/bootstrap.svg" class="mr-75" height="20" width="20"
                                                alt="Bootstrap">
                                            <span class="font-weight-bold">Bootstrap Project</span>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title=""
                                                    class="my-0 avatar pull-up" data-original-title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26"
                                                        width="26">
                                                </div>
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title=""
                                                    class="my-0 avatar pull-up" data-original-title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26"
                                                        width="26">
                                                </div>
                                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title=""
                                                    class="my-0 avatar pull-up" data-original-title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26"
                                                        width="26">
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="mr-1 badge badge-pill badge-light-warning">Pending</span></td>
                                    </tr>
                                    @push('all_modals')
                                    <!-- Modal -->
                                    {{-- @if (havePermission('category','edit')) --}}
                                    <div class="modal fade" id="edit_category_" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Blog Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="" method="">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="category_name">Categoy Name <span class="text-danger">*</span></label>
                                                            <input type="text" value="" name="category_name" id="category_name" class="form-control">
                                                            {{-- {{ $category->name ?? old('category_name') }} --}}
                                                        </div>
                                                        @error('category_name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script>
    $(document).ready(function () {
    });
</script>

@endpush
