<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                {{-- for showing data inserted --}}
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @else
                {{-- for showing if any problem occurs while saving data --}}
                    <div class="alert alert-danger">
                        {{ Session::get('message') }}
                        @php
                            Session::forget('message');
                        @endphp
                    </div>
                @endif
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add Blog Post</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" action="submit-post" method="post" novalidate>
                            @csrf
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="postname" placeholder="Post Name"
                                    required>
                                <div class="valid-feedback">Post Name field is valid!</div>
                                <div class="invalid-feedback">Post Name field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="postdescription"
                                    placeholder="Post Description" required>
                                <div class="valid-feedback">Description field is valid!</div>
                                <div class="invalid-feedback">Description field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="postauthor" placeholder="Post Author"
                                    required>
                                <div class="valid-feedback">Author field is valid!</div>
                                <div class="invalid-feedback">Author field cannot be blank!</div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <input class="form-control" type="date" name="postdate" placeholder="Date" required>
                                <div class="valid-feedback">Date field is valid!</div>
                                <div class="invalid-feedback">Date field cannot be blank!</div>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
