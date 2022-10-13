<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="/path/to/jQuery.print.js"></script>
<script>



</script>

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
          <a class="nav-link" href="{{url('listt')}}">Customer list</a>
        </li>
       
      </ul>
    </div>
  </nav>
<center>
  

  <center><h2>Sales Data</small></h2> </center>  
  <br>
  <form class="form-horizontal"  name="form" action="{{route('category.uupdate',$category->id)}}" method="POST" style="width: 60%">
  {{-- <form class="form-horizontal" action="{{route('category.uupdate')}}" method="POST" style="width: 60%"> --}}
    @csrf
  @method('PUT')
  <div id="printTable">
   <div class="form-group has-success has-feedback">
    <label class="control-label col-sm-3" for="inputSuccess3">Customer Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="CustomerName" id="CustomerName">
        </div>
    </div>

    <div class="form-group has-success has-feedback">
    <label class="control-label col-sm-3" for="inputGroupSuccess2">Sales Quantity</label>
    <div class="col-sm-9">
      <div class="input-group">
        
        <input type="number" class="form-control" name="minussq"   id="squan" >
      </div>
     
  
    </div>
    
    </div>

    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputSuccess3">Category Name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name"  id="name"value="{{$category->name}}"  aria-describedby="inputSuccess3Status" readonly>
      
      
      </div>
    </div>
    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Sub Category Of</label>
      <div class="col-sm-6">
      <center> <div class="input-group">
          <select name="category_id" id="category_id" class="form-control" disabled>
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
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Total Quantity</label>
      <div class="col-sm-9">
        <div class="input-group">
          <input type="number" name="Quantity" class="form-control"  value="{{$category->Quantity}}" id="total" disabled/>
        </div>
          </div>
      
    </div>

    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">per Unit Price </label>
      <div class="col-sm-9">
        <div class="input-group">
          
          <input type="number" class="form-control" name="unit" value="{{$category->unit}}" id="perunit"  disabled>
        </div>
       
    
      </div>
      
    </div>

    
    <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Sales Price * per Unit Price:</label>
      <div class="col-sm-9">
        <div class="input-group">
          <input type="number" class="form-control" name="salestotalprice" value="" id="mul"  disabled>
        </div>
       
      </div>

      <div class="form-group has-success has-feedback">
      <label class="control-label col-sm-3" for="inputGroupSuccess2">Sales Date:</label>
      <div class="col-sm-9">
        <div class="input-group">
          
          <input type="date" class="form-control" name="date" id="date" onmouseover="subt()" />
        </div>
        <div class="alert alert-success d-none" id="msg_div">
          <span id="res_message"></span>
         </div>
      </div>
    
    </div>
    </div>
 
            <div class="form-group">
              <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-3">
               
                   <button type="submit" class="btn btn-success">Click to Submit</button>
             
                </div>
              
                
              </div>
            </div>

            


          </form>

        </div>
      </div>
    </div>
  </div>
</center>
<center>

  </tr>

  </table> 
</form>
</center>
<script >
  // $(function() {
  //     $("#total,#perunit").on("focus", sum);
  //   function sum() {
  //   $("#total").val(Number($("#total").val()) - Number($("#squan").val()));
  //   $("#mul").val(Number($("#perunit").val()) * Number($("#squan").val()));
  //   // $("#sub").val(Number($("total").val(Number($("#total").val()) - Number($("#squan").val())));

  //   }
  // });
  function subt()
    {
      num1 = document.getElementById(
        "total").value;
      num2 = document.getElementById(
        "squan").value;
      document.getElementById(
        "total").value = num1 - num2;

        num11 = document.getElementById(
        "perunit").value;
      num22 = document.getElementById(
        "squan").value;
      document.getElementById(
        "mul").value = num11 * num22;
    }
 
  // {{-- // <script> --}}

//

</script>




  </script>
</body>


</html>