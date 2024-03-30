@props(['id'])

<svg aria-hidden="true" {{ $attributes }}>
    <use xlink:href="#{{ $id }}"></use>
</svg>