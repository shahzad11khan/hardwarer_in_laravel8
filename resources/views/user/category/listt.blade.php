<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
       <script src="/path/to/cdn/jquery.min.js"></script>
       <script src="/path/to/jQuery.print.js"></script>
    <title>Document</title>
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
              <a class="nav-link" href="{{url('home')}}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('listt')}}">Customer list</a>
            </li>
          </ul>
        </div>
      </nav>
      <center> <form action="{{url('listt')}}" type="get">
        <div class="row " style="justify-content: center">
          
        <input type="search" name="query" class="form-control input-group" placeholder="Search Customer Name" style="width: 20%">
        <div class="col-md-1"></div>
        <input type="submit" class="btn btn-success" id="btn" value="Search">
        </div>
        {{-- <button class="btn btn-success" id="btn" type="submit">Search</button> --}}
      </form></center>
      <br>
      <center>
        <table class="table table-hover table-fluid" style="width: 80%">
        <thead>
            <th style="text-align: center; color:black;  font-size: 30px;"  bgcolor="red" color="black" colspan="9">Customers Records</th>
          {{-- <tr>
            <th style="text-align: center; color:black;  font-size: 30px;" colspan="6" bgcolor="red" color="black"> WARNING !! Don't Delete parent Category please!!</th>
          </tr>
          <tr>
            <th style="text-align: center; color:black;  font-size: 30px;" colspan="6" bgcolor="red" color="black"> WARNING !! You Select Only That Category Which Customer Want!!</th>
          </tr> --}}
          <tr>
            {{-- <th scope="col">S.no</th> --}}
            <th scope="col">Customer Name</th>
            <th scope="col">Childs Category Name</th>
            <th scope="col">Main Category Name</th>
            <th scope="col">per Unit Price</th>
            <th scope="col">Sales Total Quantity</th>
            <th scope="col">Total Price</th>
            <th scope="col">Sales Date</th>
            <th scope="col">Print button</th>

          </tr>
        </thead>
        <tbody id="printTable">
            @foreach ($DATA as $item)
        
        <tr>
            <td>{{$item->CustomerName}}</td>
           
            <td>{{$item->name}}</td>

            <td>@if ($item->category_id)
                {{$item->parent->name}}
                @else
                     No Parent Category
              @endif
              </td>
               
              <td>{{$item->unit}}</td>
              <td>{{$item->minussq}}</td>
              <td>{{$item->salestotalprice}}</td>
              <td>{{$item->date}}</td>
              <td><button type="button" class="btn btn-success" value="{{($item->id)}}">Click to Print</button></td>
    </tr>

        </tbody>

    @endforeach
    <div>
        {{ $DATA->links() }}
    </div>

    <script>
      $('button').on('click',function(){
      printData();
})
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open('');
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

  
  // setInterval(function(){
  // document.getElementById("btn").click();	
  // window.location.reload();
  // }, 6000);
  //     </script>
</body>
</html>