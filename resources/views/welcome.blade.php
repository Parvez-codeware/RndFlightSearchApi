<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Flight Search </h2>
                </div>
                <div class="card-body">
                    <form action="/search" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="from" placeholder="From ">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="to" placeholder="To ">
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="journey_date">
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="return_date">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="traveller" placeholder="Traveller ">
                        </div>
                        {{-- <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="search from where">
                        </div> --}}
                        <div class="col-md-2">
                            <button type="submit" class="btn  btn-success form-control">Search </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
           </div>
        </div>
    </div>
    
</body>
</html>