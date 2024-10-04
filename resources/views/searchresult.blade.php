@include('header')
<div class="container">
    @if ($properties->isEmpty())
        <p>No properties found.</p>
    @else
        <ul>
            @foreach ($properties as $property)
                <li>
                    <h3>{{ $property->propertyName }}</h3>
                    <p>Price: ${{ $property->propertyPrice }}</p>
                    <p>Location: {{ $property->city }}, {{ $property->state }}</p>
                    <a href="{{ route('properties.show', $property->id) }}">View Details</a>
                </li>
            @endforeach
        </ul>
    @endif

</div>
@include('footer')
