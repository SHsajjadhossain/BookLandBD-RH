
@if ($paginator->hasPages())
Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} Products
@else
Showing 0 Products
@endif
{{-- of total {{ $paginator->total() }} --}}
{{-- (2 Pages) --}}
