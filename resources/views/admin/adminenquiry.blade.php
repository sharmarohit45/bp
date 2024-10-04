@extends('admin.adminHeader')

@section('admin-main')
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
                                <h3 class="page-title">Enquiry List</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            
                            @if($enquiryData->isEmpty())
                                <div class="alert alert-info">No enquiries available.</div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead class="text-white">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th>Property Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Client Name</th>
                                                <th>Email</th>
                                                <th class="text-center">Mobile No.</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            @foreach ($enquiryData as $enquiry)
                                                <tr>
                                                    <td class="text-center text-white">{{ $enquiry->id }}</td>
                                                    <td class="text-white">{{ $enquiry->property_name }}</td>
                                                    <td class="text-white">{{ $enquiry->address }}</td>
                                                    <td class="text-white">{{ $enquiry->city }}</td>
                                                    <td class="text-white">{{ $enquiry->state }}</td>
                                                    <td class="text-white">{{ $enquiry->name }}</td>
                                                    <td class="text-white">{{ $enquiry->email }}</td>
                                                    <td class="text-center text-white">{{ $enquiry->phone }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
