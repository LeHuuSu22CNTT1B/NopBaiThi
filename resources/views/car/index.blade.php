<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4" style="color: red; text-align: center;">Danh sách các xe</h1>
    <form action="{{ route('cars.index') }}" method="GET" class="form-inline mb-3">
        <div class="form-group">
            <input type="text" class="form-control" name="input" placeholder="Nhập từ khóa tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary ml-2">Tìm kiếm</button>
    </form>
    <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Tạo mới xe</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <p>
        <?php
        $i=0;
        ?>
        <h4>Tổng số xe có trong danh sách : {{$totalCar}}</h4>
        <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th  class="text-center" scope="col">STT</th>
            <th  class="text-center" scope="col">ID</th>
            <th  class="text-center" scope="col">Image</th>
            <th  class="text-center" scope="col">Description</th>
            <th  class="text-center" scope="col">Model</th>
            <th  class="text-center" scope="col">Produced On</th>
            <th  class="text-center" scope="col">Mf_Name</th>
            <th  class="text-center" scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
          
        @isset($cars) 
            @foreach($cars as $car) <?php $i++; ?>
                <tr>
                    <td style="padding-top: 33px" class="text-center">{{ $i }}</td>
                    <td style="padding-top: 33px" class="text-center">{{ $car->id }}</td>
                    <td  class="text-center"><img style="width: 100px;height: 70px;" src="../images/{{$car->image}}"></td>
                    <td style="padding-top: 33px" class="text-center">{{ $car->description }}</td>
                    <td style="padding-top: 33px" class="text-center">{{ $car->model }}</td>
                    <td style="padding-top: 33px" class="text-center">{{ $car->produced_on }}</td>
                    <td style="padding-top: 33px" class="text-center">{{ $car->mf->mf_name }}</td>
                   
                    <td style="padding-top: 33px" class="text-center">
                        <a href="{{ route('cars.show',['car'=>$car->id] ) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('cars.edit', ['car'=>$car->id] ) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form class="d-inline" action="{{ route('cars.destroy',['car'=>$car->id] ) }}" method="POST" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa xe này không?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
    {{ $cars->links() }}
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
