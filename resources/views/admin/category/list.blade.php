<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('home')}}">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('list')}}">Item list</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('listt')}}">Customer list</a>
            </li>
           
          </ul>
        </div>
      </nav>
      <center> <form action="{{url('list')}}" type="get">
        <div class="row " style="justify-content: center">
        
          <input type="search" name="query" class="form-control input-group" placeholder="Category Name" style="width: 20%">
          <div class="col-md-1"></div>
          <input type="submit" class="btn btn-success" id="btn" value="Search">
          </div>
          {{-- <button class="btn btn-success" id="btn" type="submit">Search</button> --}}
        </form>
      </center>
        <br>
      <center>
          <table class="table table-hover table-fluid" style="width: 80%">
          <thead>
            <tr><th style="text-align: center; color:black;  font-size: 30px;" colspan="6" bgcolor="red" color="black"> WARNING !! Don't Delete parent Category please!!</th></tr>
            <tr>
              {{-- <th scope="col">S.no</th> --}}
              <th scope="col">id</th>
              <th scope="col">Category Name</th>
              <th scope="col">Parant Category Name</th>
              <th scope="col">Category Quantity</th>
              <th scope="col">per Unit Price</th>
              <th scope="col">Created Date</th>
              <th scope="col" style="text-align: center">Actions</th>
            </tr>
          </thead>
          <tbody>
                  {{-- @php
                      $i=0;
                  @endphp --}}
              @foreach ($categories as $item)
              {{-- for serial number  --}}
                   <tr>
                    {{-- <th>{{++$i}}</th> --}}
      
              <th>{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>@if ($item->category_id)
                {{$item->parent->name}}
                @else
                     No Parent Category
              @endif
              </td>
              <td>{{$item->Quantity}}</td>
              <td>{{$item->unit}}</td>
              <td>{{$item->created_at}}</td>
              
              
              <td><a href="{{route('category.edit', $item->id)}}" style="font-size:17px;padding:5px;"><i class="fa fa-edit"></a></td>
             {{-- <td><i class="fa fa-trash" style="font-size:17px;padding:5px;"></a> --}}
            <td>
              <form method="post" action="{{route('category.destroy',$item->id)}}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        
        {{ $categories->links() }}
      </center>
</body>
</html>
      
      