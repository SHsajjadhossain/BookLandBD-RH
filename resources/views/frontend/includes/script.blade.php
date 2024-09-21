<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend_assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
<script src=""{{ asset('frontend_assets/js/popper.min.js') }}></script>
<script src=""{{ asset('frontend_assets/js/bootstrap.min.js') }}></script>

{{-- AutoComplete jQuery --}}
<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>

<script>
    // $(document).ready(function () {
    //     @if ($category->relationWithSubCategory->count() > 8)
    //     $('#cat-item').addClass('mega-menu');
    //     @endif
    // });

    $(document).ready(function () {
        $( "#search_text" ).autocomplete({
            source: function (request, response) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('searchProductAjax') }}",
                    data: {term: request.term },
                    success: function (data) {
                        response(data);
                    }
                });
            }
            
        });

        $(document).on('click', '.ui-menu-item', function () {
            $('#search-form').submit();
        });
    });
</script>

@stack('custom-js')
