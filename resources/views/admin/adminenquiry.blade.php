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
                            <table class="table table-hover table-responsive table-striped">
                                <thead class="text-white">
                                    <tr>
                                        <th>Id</th>
                                        <th>Enquiry</th>
                                        <th>Property Type</th>
                                        <th>Client Name</th>
                                        <th>Client Address</th>
                                        <th>Mobile No.</th>
                                        <th>Enquiry For</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">

                                    <tr>
                                        <td class="text-white"></td>
                                        <td class="text-white"></td>
                                        <td class="text-white"></td>
                                        <td class="text-white"></td>
                                        <td class="text-white"></td>
                                        <td class="text-white"></td>
                                        <td style="white-space: nowrap;"></td>
                                        <td class="text-end">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editPropertyModal">
                                                <i class="bi bi-pencil-square text-white"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <form>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash text-white"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
