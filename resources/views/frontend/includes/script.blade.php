<script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend_assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
<script src=""{{ asset('frontend_assets/js/popper.min.js') }}></script>
<script src=""{{ asset('frontend_assets/js/bootstrap.min.js') }}></script>

<script>
    // $(document).ready(function () {
    //     @if ($category->relationWithSubCategory->count() > 8)
    //     $('#cat-item').addClass('mega-menu');
    //     @endif
    // });
</script>

@stack('custom-js')
