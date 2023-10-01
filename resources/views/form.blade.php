<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="position-absolute translate-middle bg-warning bg-gradient rounded">
            <form method="POST" action="/form" class="p-3" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="Your Name" name="Name">
                    @error('Name')
                    <div class="alert alert-danger text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="IPS">IPS</label>
                    <input type="text" class="form-control" id="IPS" placeholder="3.45" name="IPS">
                    @error('IPS')
                    <div class="alert alert-danger text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Telephone">Telephone</label>
                    <input type="text" class="form-control" id="Telephone" placeholder="081234567890" name="Telephone">
                    @error('Telephone')
                    <div class="alert alert-danger text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" placeholder="abcd1234@mail.com" name="Email">
                    @error('Email')
                    <div class="alert alert-danger text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="file" class="form-control-file" id="Image" name="Image" accept="image/">
                    @error('Image')
                    <div class="alert alert-danger text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>            
        </div>
    </div>
</body>
</html>
