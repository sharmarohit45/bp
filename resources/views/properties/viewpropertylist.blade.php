@extends('admin/adminHeader')
@section('admin-main')
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                        <button class="btn btn-dark" id="menu-toggle"><i class="bi bi-list"></i></button>
                    </nav>
                    <div class="container-fluid">
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Property List</h3>
                                        </div>
                                        <div class="col text-end">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-plus"></i> Add Property
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search Filter -->
                                <div class="row mt-2 mb-3">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" placeholder="Agent ID">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group form-focus">
                                            <input type="text" class="form-control floating" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <select class="form-select text-dark">
                                            <option>Select location</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="d-grid">
                                            <a href="#" class="btn btn-success w-100">Search</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Search Filter -->

                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover table-responsive table-striped">
                                            <thead class="text-white">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Property Name</th>
                                                    <th>Property Location</th>
                                                    <th>Area (sq ft)</th>
                                                    <th>Bath</th>
                                                    <th>Bed</th>
                                                    <th>Images</th>
                                                    <th colspan="2" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-white">
                                                @if (isset($properties) && $properties->count())
                                                @foreach ($properties as $property)
                                                <tr>
                                                    <td class="text-white">{{ $property->id }}</td>
                                                    {{-- <td class="text-white">{{ $property->propertyName }}</td> --}}
                                                   <td> <a href="{{ route('admin.property.show', $property->id) }}"class="text-white" style="text-decoration: none">
                                                        {{ $property->propertyName }}
                                                    </a></td>
                                                    <td class="text-white">{{ $property->location }}</td>
                                                    <td class="text-white">{{ $property->squareFit }}</td>
                                                    <td class="text-white">{{ $property->bathNumber }}</td>
                                                    <td class="text-white">{{ $property->bedNumber }}</td>
                                                    <td style="white-space: nowrap;">
                                                        @php
                                                        $imagePaths = json_decode($property->image_paths, true);
                                                        @endphp
                                                        @if ($imagePaths && is_array($imagePaths) && count($imagePaths) > 0)
                                                        @foreach ($imagePaths as $imagePath)
                                                        <img src="{{ asset($imagePath) }}" alt="Property Image"
                                                            style="width: 30px; height: 30px; margin-right: 5px; display: inline-block;" class="img-circle">
                                                        @endforeach
                                                        @else
                                                        <p>No image available</p>
                                                        @endif
                                                    </td>
                                                    <td class="text-end">
                                                        <button
                                                            class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editPropertyModal"
                                                            data-id="{{ $property->id }}"
                                                            data-name="{{ $property->propertyName }}"
                                                            data-type="{{ $property->propertyType }}"
                                                            data-location="{{ $property->location }}"
                                                            data-price="{{ $property->propertyPrice }}"
                                                            data-square="{{ $property->squareFit }}"
                                                            data-bed="{{ $property->bedNumber }}"
                                                            data-bath="{{ $property->bathNumber }}"
                                                            onclick="editProperty(this)">
                                                            <i class="bi bi-pencil-square text-white"></i>
                                                        </button>



                                                    </td>
                                                    <td>
                                                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="bi bi-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="8" class="text-center text-white">No properties found.</td>
                                                </tr>
                                                @endif
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal for Adding Property -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content p-2">
                            <div class="row pt-2">
                                <div class="col text-center">
                                    <h1 class="text-dark">Add Property Details</h1>
                                    <hr class="text-dark">
                                </div>
                            </div>
                            <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data"
                                class="container">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="posted_from"><b class="text-dark">Agent ID</b></label>
                                            <input type="text" name="posted_from" id="posted_from" class="form-control" value="{{Auth::user()->id}}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="propertyName"><b class="text-dark">Property Name</b></label>
                                            <input type="text" name="propertyName" id="propertyName"
                                                class="form-control" required placeholder="e.g., Cozy Cottage">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="images"><b class="text-dark">Property Images</b></label>
                                            <input type="file" name="images[]" id="images" class="form-control"
                                                multiple accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="propertyType"><b class="text-dark">Property Type</b></label>
                                            <input type="text" name="propertyType" id="propertyType"
                                                class="form-control" required placeholder="e.g., Apartment">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="location"><b class="text-dark">Location</b></label>
                                            <input type="text" name="location" id="location" class="form-control"
                                                required placeholder="e.g., New York, NY">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="propertyPrice"><b class="text-dark">Property Price</b></label>
                                            <input type="text" name="propertyPrice" id="propertyPrice"
                                                class="form-control" required min="0" placeholder="Enter price">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="squareFit"><b class="text-dark">Area (sq ft)</b></label>
                                            <input type="number" name="squareFit" id="squareFit" class="form-control"
                                                required min="0" placeholder="Enter square footage">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bedNumber"><b class="text-dark">Bedrooms</b></label>
                                            <input type="number" name="bedNumber" id="bedNumber" class="form-control"
                                                required min="0" placeholder="e.g., 3">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bathNumber"><b class="text-dark">Baths</b></label>
                                            <input type="number" name="bathNumber" id="bathNumber" class="form-control"
                                                required min="0" placeholder="e.g., 2">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 mb-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editPropertyModal" tabindex="-1" aria-labelledby="editPropertyModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title text-dark" id="editPropertyModalLabel">Edit Property</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editPropertyForm" action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="editPropertyId" name="propertyId">

                                    <div class="mb-3">
                                        <label for="editPropertyName" class="form-label text-dark">Property Name</label>
                                        <input type="text" class="form-control" id="editPropertyName" name="propertyName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editPropertyType" class="form-label text-dark">Property Type</label>
                                        <input type="text" class="form-control" id="editPropertyType" name="propertyType" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editLocation" class="form-label text-dark">Location</label>
                                        <input type="text" class="form-control" id="editLocation" name="location" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editPropertyPrice" class="form-label text-dark">Property Price</label>
                                        <input type="text" class="form-control" id="editPropertyPrice" name="propertyPrice" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editSquareFit" class="form-label text-dark">Square Fit</label>
                                        <input type="number" class="form-control" id="editSquareFit" name="squareFit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editBedNumber" class="form-label text-dark">Number of Bedrooms</label>
                                        <input type="number" class="form-control" id="editBedNumber" name="bedNumber" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editBathNumber" class="form-label text-dark">Number of Bathrooms</label>
                                        <input type="number" class="form-control" id="editBathNumber" name="bathNumber" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update Property</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <script>
                    // Toggle the sidebar
                    document.getElementById('menu-toggle').onclick = function() {
                        var wrapper = document.getElementById('wrapper');
                        wrapper.classList.toggle('toggled');
                        var sidebar = document.getElementById('sidebar-wrapper');
                        sidebar.classList.toggle('toggled');
                    };

                    function editProperty(button) {
                        const property = {
                            id: button.getAttribute('data-id'),
                            propertyName: button.getAttribute('data-name'),
                            propertyType: button.getAttribute('data-type'),
                            location: button.getAttribute('data-location'),
                            propertyPrice: button.getAttribute('data-price'),
                            squareFit: button.getAttribute('data-square'),
                            bedNumber: button.getAttribute('data-bed'),
                            bathNumber: button.getAttribute('data-bath')
                        };

                        // Populate the modal fields
                        document.getElementById('editPropertyId').value = property.id;
                        document.getElementById('editPropertyName').value = property.propertyName;
                        document.getElementById('editPropertyType').value = property.propertyType;
                        document.getElementById('editLocation').value = property.location;
                        document.getElementById('editPropertyPrice').value = property.propertyPrice;
                        document.getElementById('editSquareFit').value = property.squareFit;
                        document.getElementById('editBedNumber').value = property.bedNumber;
                        document.getElementById('editBathNumber').value = property.bathNumber;

                        // Set the form action for updating
                        document.getElementById('editPropertyForm').action = `/properties/${property.id}`;
                    }
                </script>
@endsection