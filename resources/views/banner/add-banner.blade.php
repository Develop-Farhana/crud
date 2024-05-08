<!-- @extends('masters') -->


<div class="container my-5">
        <div class="row justify-content-center"> <!-- Center the card horizontally -->
            <div class="col-md-6"> <!-- Define the width of the card body -->
                <div class="card">
                    <center>
                        <h2> Add Services</h2>
                    </center>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post-banner.store') }}" enctype="multipart/form-data">
                            @csrf <!-- CSRF Token -->
                            <div> 

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Add Service Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                                <!-- Add more form elements here as needed -->
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


