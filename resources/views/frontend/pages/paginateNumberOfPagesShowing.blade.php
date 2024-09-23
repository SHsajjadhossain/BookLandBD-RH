
@if ($paginator->hasPages())
Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} Products
@endif
{{-- of total {{ $paginator->total() }} --}}
{{-- (2 Pages) --}}
