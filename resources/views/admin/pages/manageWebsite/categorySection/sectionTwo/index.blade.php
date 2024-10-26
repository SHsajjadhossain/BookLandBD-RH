@extends('admin.layouts.dashboard')

@section('title')

Dashboard Pustok | Manage Website | Category Section Two

@endsection

@section('cat-section-two-active')

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
                    <h2 class="float-left mb-0 content-header-title">Category Section</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Display Section Two
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
                        <h4 class="card-title">Category Section Two</h4>
                    </div>
                    <div class="card-body">
                        <div class="mt-2 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Actions</th>
                                        <th>Category Name</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sectionTwo_info as $info)
                                    <tr id="tr_">
                                        <td>
                                            <button data-toggle="modal" data-target="#edit_category_{{ $info->id }}" class="btn btn-secondary">
                                                <i data-feather='edit'></i>
                                                Edit
                                            </button>
                                            {{-- Edit Modal Start --}}
                                            @push('all_modals')
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_category_{{ $info->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Category Section One</h5>
                                                        </div>
                                                        <form action="{{ route('catSectionTwo.update', $info->id) }}" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <input type="hidden" name="category_update_id" value="{{ $info->id }}">
                                                                <div class="form-group">
                                                                    <label for="category_id">Select Category<span class="text-danger">*</span></label>
                                                                    <select name="category_id" class="select2 form-control" id="category_id">
                                                                        <option value="{{ $info->category_id }}">
                                                                            {{ $info->relationWithCategory->category_name }}
                                                                        </option>
                                                                        @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                    </select>

                                                                    @error('category_id')
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
                                            @endpush
                                            {{-- Edit Modal End --}}
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ $info->relationWithCategory->category_name }}</span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">{{ $info->updated_at->diffForHumans() }}</span>
                                        </td>
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script>
    $(document).ready(function () {
        // Tostr & SweetAlert2 success start

        @if (session("section_update_success"))
            // toastr.success("{{ session('success') }}")
            Swal.fire({
                title: 'Done!',
                text: '{{ session("section_update_success") }}',
                icon: 'success',
                customClass: {
                confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            });
        @endif

        // Tostr & SweetAlert2 success end

        @error('category_id')
        $('#edit_category_'+'{{ old('category_update_id') }}').modal('show');
        @enderror
    });
</script>

@endpush
