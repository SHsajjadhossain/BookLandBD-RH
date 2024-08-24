<script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend_assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('frontend_assets/js/custom.js') }}"></script>

<script>
    // $(document).ready(function () {
    //     @if ($category->relationWithSubCategory->count() > 8)
    //     $('#cat-item').addClass('mega-menu');
    //     @endif
    // });

    // $(document).ready(function () {
    //     @if (allCategories()->count() > 9)
    //         $('.cat-item').addClass('hidden-menu-item');
    //     @endif
    // });
</script>

@stack('custom-js')
