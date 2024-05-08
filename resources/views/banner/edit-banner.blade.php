<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container my-5">
        <div class="row justify-content-center"> <!-- Center the card horizontally -->
            <div class="col-md-6"> <!-- Define the width of the card body -->
                <div class="card">
                    <center>
                        <h2> Edit Services</h2>
                    </center>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post-banner.update', ['id' => $banner->id]) }}"
                            enctype="multipart/form-data">
                            @csrf <!-- CSRF Token -->
                            @method('PUT')
                            <div>


                                
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Add Banner Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                                <!-- Add more form elements here as needed -->
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
