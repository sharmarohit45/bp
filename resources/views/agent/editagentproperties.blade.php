<x-app-layout>
    @include('agent.agentheader')

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <button class="btn btn-dark" id="menu-toggle"><i class="bi bi-list"></i></button>
        </nav>

        <div class="container-fluid bg-light">
          <div class="card p-5 bg-light">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3 class="page-title text-dark">Edit Property</h3>
                    </div><hr>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('agentproperties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col">
                                <label for="propertyName" class="form-label">Property Name</label>
                                <input type="text" name="propertyName" id="propertyName" class="form-control" value="{{ old('propertyName', $property->propertyName) }}" required>
                            </div>
                            <div class="col">
                                <label for="propertyType" class="form-label">Property Type</label>
                                <input type="text" name="propertyType" id="propertyType" class="form-control" value="{{ old('propertyType', $property->propertyType) }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Property Images:</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="propertyPrice" class="form-label">Property Price</label>
                                <input type="text" name="propertyPrice" id="propertyPrice" class="form-control" value="{{ old('propertyPrice', $property->propertyPrice) }}" required>
                            </div>
                            <div class="col">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $property->location) }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="squareFit" class="form-label">Area (sq ft)</label>
                                <input type="number" name="squareFit" id="squareFit" class="form-control" value="{{ old('squareFit', $property->squareFit) }}" required>
                            </div>
                            <div class="col">
                                <label for="bedNumber" class="form-label">Bedrooms</label>
                                <input type="number" name="bedNumber" id="bedNumber" class="form-control" value="{{ old('bedNumber', $property->bedNumber) }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="bathNumber" class="form-label">Bathrooms</label>
                            <input type="number" name="bathNumber" id="bathNumber" class="form-control" value="{{ old('bathNumber', $property->bathNumber) }}" required>
                        </div>

                        <button type="submit" class="btn btn-success">Update Property</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>

    @include('agent.agentfooter')
</x-app-layout>
