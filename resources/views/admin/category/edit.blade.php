<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<center>
  

  <center><h2>Update Data</small></h2> </center>  
  <br>
  <form class="form-horizontal" action="{{route('category.update',$category->id)}}" method="POST" style="width: 60%">
    @csrf
  @method('PUT')
    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputSuccess3">Category Name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name" value="{{$category->name}}" id="inputSuccess3" aria-describedby="inputSuccess3Status">
      
      
      </div>
    </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Sub Category Of</label>
      <div class="col-sm-6">
      <center> <div class="input-group">
          <select name="category_id" class="form-control">
            <option value="" @if ($category->category_id==null)
              selected
            @endif>no sub categories</option>
            @foreach ($categories as $item)
            <option value="{{$item->id}}" @if ($category->category_id!=null && $category->category_id=$item->id)
                selected
            @endif>{{$item->name}}</option>
            @endforeach
          </select>
        </div>
      </center> 
        
      </div>
      
    </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Category Quantity</label>
      <div class="col-sm-9">
        <div class="input-group">
     
          <input type="number" class="form-control" name="Quantity" value="{{$category->Quantity}}" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
        </div>
        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
     
      </div>
      
    </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Price </label>
      <div class="col-sm-9">
        <div class="input-group">
          
          <input type="number" class="form-control" name="unit" value="{{$category->unit}}" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
        </div>
       
    
      </div>
      
    </div>
 
            {{-- <div class="ln_solid"></div> --}}
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               {{-- <input type="submit" value="update" class="btn btn-success"> --}}
                <button type="submit" class="btn btn-success">Update</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</center>
</body>
</html>