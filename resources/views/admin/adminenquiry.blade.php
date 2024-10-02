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
                                {{-- <a href="{{ route('adminenquiry.create') }}" class="btn btn-primary mb-3">Create New Enquiry</a> --}}
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead class="text-white">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th>Property Name</th>
                                                <th>Property Location</th>
                                                <th>Client Name</th>
                                                <th>Email</th>
                                                <th class="text-center">Mobile No.</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            @foreach ($enquiryData as $enquiry)
                                                <tr>
                                                    <td class="text-center text-white">{{ $enquiry->id }}</td>
                                                    <td class="text-white">{{ $enquiry->property_name }}</td>
                                                    <td class="text-white">{{ $enquiry->property_location }}</td>
                                                    <td class="text-white">{{ $enquiry->name }}</td>
                                                    <td class="text-white">{{ $enquiry->email }}</td>
                                                    <td class="text-center text-white">{{ $enquiry->phone }}</td>
                                                    {{-- <td class="text-end">
                                                        <a href="{{ route('adminenquiry.edit', $enquiry->id) }}" class="btn btn-primary" aria-label="Edit enquiry {{ $enquiry->id }}">
                                                            <i class="bi bi-pencil-square text-white"></i>
                                                        </a>
                                                    </td>--}}
                                                    <td>
                                                        <form action="{{ route('adminenquiry.destroy', $enquiry->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" aria-label="Delete enquiry {{ $enquiry->id }}">
                                                                <i class="bi bi-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                    </td> 
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
