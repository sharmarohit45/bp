        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
            <title>Agent Dashboard</title>

            <style>
                body,
                html {
                    height: 100%;
                    margin: 0;
                    overflow-x: hidden;
                    background-color: #212529;
                    color: white;
                }

                .form-label {
                    color: #000000;
                }

                #wrapper {
                    display: flex;
                    height: 100vh;
                }

                #sidebar-wrapper {
                    width: 250px;
                    height: 100%;
                    background-color: #000000;
                    transition: all 0.3s;
                }

                #page-content-wrapper {
                    flex: 1;
                    transition: all 0.3s;
                    background-color: #212529;
                }

                .sidebar-heading {
                    padding: 15px;
                    font-size: 1.25rem;
                    color: #ffffff;
                }

                .list-group-item {
                    border: none;
                    color: black;
                }

                .list-group-item:hover {
                    background-color: #000000;
                    color: white;
                }

                .card {
                    border: none;
                    border-radius: 10px;
                    background-color: #000000;
                }

                .card-header {
                    background-color: #495057;
                    color: white;
                    font-weight: bold;
                }

                .widget {
                    padding: 20px;
                }

                /* Responsive Sidebar */
                #wrapper.toggled #sidebar-wrapper {
                    margin-left: -250px;
                }
            </style>
        </head>

        <body>
            <div class="d-flex" id="wrapper">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <div class="sidebar-heading">Agent Panel</div>
                    <div class="list-group list-group-flush">
                        <a href="/redirect" class="list-group-item list-group-item-action">
                            <i class="bi bi-house-door-fill"></i> Dashboard
                        </a>
                        <a href="/agentPropertyList" class="list-group-item list-group-item-action">
                            <i class="bi bi-building"></i> Properties
                        </a>
                        <a href="/admin/users" class="list-group-item list-group-item-action">
                            <i class="bi bi-person-fill"></i> Users
                        </a>
                        <a href="/admin/enquiries" class="list-group-item list-group-item-action">
                            <i class="bi bi-envelope-fill"></i> Enquiries
                        </a>
                        <a href="/agent-package" class="list-group-item list-group-item-action">
                            <i class="bi bi-file-earmark-text"></i> Packages
                        </a>
                        <a href="/admin/settings" class="list-group-item list-group-item-action">
                            <i class="bi bi-gear-fill"></i> Settings
                        </a>
                    </div>
                </div>
