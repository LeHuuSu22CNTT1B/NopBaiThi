<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết xe</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            width: 50%;
            margin: 0 auto;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @isset($car)  
    <div class="container">
        <h2 class="text-center my-4">Thông tin chi tiết xe</h2>
        <div class="card">
            <div class="card-body">
                <img style="width: 100px;height: 70px;" src="../images/{{$car->image}}">
                <h5 class="card-title text-center">{{ $car->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $car->description }}</p>
                <p class="card-text"><strong>Model:</strong> {{ $car->model }}</p>
                <p class="card-text"><strong>Produced On:</strong> {{ $car->produced_on }}</p>
                <!-- Thêm các trường thông tin khác của xe nếu cần -->
                <a href="{{ route('cars.index') }}" class="btn btn-primary btn-back btn-block">Quay lại danh sách</a>
            </div>
        </div>
    </div>
    @endisset
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
