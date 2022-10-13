<x-app-layout>



    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
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
                 <a class="nav-link" href="{{url('list')}}">Item list</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{url('listt')}}">Customer list</a>
              </li>
            </ul>
          </div>
        </nav>
        <center>
            <h1>Admin, world!</h1>
            <form action="{{route('category.store')}}" class="form-horizontal form-label-left" method="POST">
              @csrf 
              <div class="form-control col-md-7 col-xs-12 row">
                <div class="col form-group">
                    <label for="exampleFormControlSelect1">Main Categories</label>
                    <input type="text" name="name"  class="form-control col-md-7 col-xs-12" placeholder="Enter Main Category" >
                </div>
                <div class="col form-group">
                                         <br>
                                         <label for="exampleFormControlSelect1">Sub Categories</label>
                                         <select class="form-control col-md-7 col-xs-12" name="category_id" id="exampleFormControlSelect1" >
                                          <option value="">No Sub Catories</option>
                                           @foreach ($categories as $item)

                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                            </select>
                                          </div>                  
                                           <br>
                                           <br>
                                                              <div class="row form-control col-md-7 col-xs-12">
                                                                <div class="col">
                                                                <label for="exampleFormControlSelect1">Enter Quantity</label>
                                                              <input type="number" name="Quantity" class="form-control" placeholder="Enter Quantity">
                                         
                                                                </div>
                                                                <div class="col">
                                                                    <label for="exampleFormControlSelect1">Enter Per Unit Price</label>
                                                                    <input type="number " name="unit"  class="form-control" placeholder="Price">
                                               
                                                                </div>
                                                              </div>
                                                              <br><div class="form-group">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                 <input type="submit" value="Submit" class="btn btn-success">
                                                                  {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                                                                </div>
                                                              </div>
              </form>
        </center>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>

</x-app-layout>