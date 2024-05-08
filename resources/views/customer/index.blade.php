
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <br><br>
    <div class="container">
        <h1> Project Data
            
        </h1>
        <br>
    </div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                <td>
                        <a href="{{ asset($customer->image) }}" target="_blank">
                            <img src="{{ asset($customer->image) }}" alt="customer Image" style="max-width: 90px;">
                        </a>
                    </td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['description'] }}</td>
                    <td>{{ $customer['city'] }}</td>
                   
                    <td>
                        

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
