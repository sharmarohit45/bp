@include('header')

<style>
    a {
        text-decoration: none;
        color: black;
    }

    .properties-filter a {
        color: #007bff;
        font-weight: bold;
    }

    .properties-filter a.is_active {
        color: #0056b3;
    }

    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .category {
        display: block;
        font-size: 0.9em;
        color: #6c757d;
        margin-bottom: 10px;
    }

    .main-button .btn {
        width: 100%;
    }
</style>

<div class="container" style="margin-top: 100px">
    <div class="row g-0 gx-5 align-items-end">
        <div class="col-12">
            <div class="text-center mx-auto mb-5 mt-5">
                <h1 class="mb-3">Property Details</h1>
                <p>Explore our available properties below.</p>
            </div>
        </div>
    </div>

    <div class="row properties-box mt-5">
        @forelse ($properties as $property)
            <div class="col-lg-4 col-md-6 mb-4 properties-items adv">
                <div class="card">
                    <div id="carouselExample{{ $property->id }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            @php
                                $images = json_decode($property->image_paths, true) ?: [];
                            @endphp
                            @if (!empty($images))
                                @foreach ($images as $index => $imagePath)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($imagePath) }}" class="d-block w-100" alt="Image of {{ $property->propertyName }} - Slide {{ $index + 1 }}" />
                                    </div>
                                @endforeach
                            @else
                                <div class="carousel-item active">
                                    <img src="{{ asset('Images/Property/default-image.jpg') }}" class="d-block w-100" alt="Default Image" />
                                </div>
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $property->id }}" data-bs-slide="prev" aria-label="Previous">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $property->id }}" data-bs-slide="next" aria-label="Next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    

                    <div class="card-body">
                        <span class="category badge bg-dark text-white">{{ $property->propertyType }}</span>
                        <h6 class="card-title text-dark">${{ number_format($property->propertyPrice, 2) }}</h6>
                        <h4 class="card-text">
                            <a href="{{ route('properties.show', $property->id) }}" class="text-decoration-none">{{ $property->propertyName }}</a><br>
                            <small class="text-muted">{{ $property->location }}</small>
                        </h4>
                        <table class="table table-responsive table-bordered mt-3">
                            <tbody>
                                <tr>
                                    <th>Bedrooms</th>
                                    <td>{{ $property->bedNumber }}</td>
                                </tr>
                                <tr>
                                    <th>Bathrooms</th>
                                    <td>{{ $property->bathNumber }}</td>
                                </tr>
                                <tr>
                                    <th>Area</th>
                                    <td>{{ $property->squareFit }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="main-button">
                            <a href="{{ route('properties.show', $property->id) }}" class="btn btn-dark">Schedule a Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No properties available at the moment.</p>
            </div>
        @endforelse
    </div>
</div>

@include('footer')
