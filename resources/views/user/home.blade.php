<x-app-layout>



    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Hello, world!</title>
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
                <a class="nav-link" href="{{url('listt')}}">Customer list <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        <center> <form action="{{url('home')}}" type="get">
          <div class="row " style="justify-content: center">
          
            <input type="search" name="query" class="form-control input-group" placeholder="Search Customer Name" style="width: 20%">
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
          <tr>
            <th style="text-align: center; color:black;  font-size: 30px;" colspan="6" bgcolor="red" color="black"> WARNING !! Don't Delete parent Category please!!</th>
          </tr>
          <tr>
            <th style="text-align: center; color:black;  font-size: 30px;" colspan="6" bgcolor="red" color="black"> WARNING !! You Select Only That Category Which Customer Want!!</th>
          </tr>
          <tr>
            {{-- <th scope="col">S.no</th> --}}
            <th scope="col">Parant Category Name</th>
            <th scope="col">Total  Quantity Parant Category</th>
            <th scope="col">Childs Category Name</th>
            <th scope="col">per Unit Price</th>
            {{-- <th scope="col">Sales Quantity</th> --}}
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
    
           <td>@if ($item->category_id)
              {{$item->parent->name}}
              @else
                   No Parent Category
            @endif
            </td>
             <td>{{$item->Quantity}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->unit}}</td>
            {{-- <td>{{$item->minussq}}</td> --}}

           
           
            
            <td><a href="{{route('category.uedit', $item->id)}}" style="font-size:17px;padding:5px;"><i class="fa fa-edit"></a></td>
           {{-- <td><i class="fa fa-trash" style="font-size:17px;padding:5px;"></a> --}}
          <td>
           
          </td>
          </tr>
            @endforeach
        </tbody>
      </table>
      {{-- {{ $categories->links() }} --}}
    </center>
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
//           <script type="text/javascript">
//             setTimeout(function(){
//    window.location.reload();
// }, 5000);

// setInterval(function(){
// document.getElementById("button_id").click();	
// window.location.reload();
// }, 6000);
//     </script>
        </script>
      </body>
    </html>

</x-app-layout>