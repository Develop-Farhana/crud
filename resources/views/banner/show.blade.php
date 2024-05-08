
@section('title', 'add service')

@section('style')
<!-- Include CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <!-- You can remove this line if you're not using Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
        }

        .table td img {
            max-width: 100px;
            height: auto;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Light gray background for even rows */
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
            /* Hover effect */
        }
    </style>

@endsection

@section('content')



<div class="container">
        <h2>Service Page</h2>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary"
                onclick="window.location='{{ route('add-service') }}'">Add</button>


            <!-- Add this button -->
            <br>
        </div>

        <br>

        <!-- Table to display properties -->

        <table id="propertyTable" class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="propertyTableBody">

                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ asset($service->image_url) }}" target="_blank">
                                <img src="{{ asset($service->image_url) }}" alt="Service Image"
                                    style="max-width: 90px;">
                            </a>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('post-service.edit', $service->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning btn-block"><i
                                                    class="bi bi-pencil-square"></i>Edit</button></a></li>
                                    <li>

                                        <form action="{{ route('remove-service.destroy', $service->id) }}"
                                            method="GET">
                                            @csrf


                                            <button type="submit" class="btn btn-sm btn-danger btn-block">
                                                <i class="bi bi-trash-fill"></i> Delete
                                            </button>
                                        </form>

                                    </li>
                                    <li><a class="dropdown-item" href="#"><button type="button"
                                                class="btn btn-sm btn-info btn-block"><i
                                                    class="bi bi-eye"></i>View</button></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody> <!-- Empty tbody for dynamic data -->
        </table>




    </div>

    @endsection

    @section('script')
    <script>
        // Wrap DataTables initialization inside $(document).ready()
        $(document).ready(function() {

            $('#propertyTable').DataTable({
                searching: true, // Enable search field
                ordering: true // Enable ordering (sorting) functionality

            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- Include DataTables script -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
@endsection