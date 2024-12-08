<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet">href=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <section class="container">
        <div vlass="row">
            <div class="col-md-6 offset-md-3 my-3">
                <div class="card">
                    <div class="card-header">
                        <h1>login</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('login.submit')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">email:</label>
                                <input type="email" nema="email" id="email" class="form-controll">

                            </div>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="123456">

                                </div>
                                <button type="submit" class="btn btn-primary mt-3">submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>   
    </section>
</body>
</html>