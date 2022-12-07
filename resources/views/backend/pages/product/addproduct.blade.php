@extends('backend.master_template.template')
 @section('content')
 <div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Blank page</h4>
    <p class="mg-b-0">Page description.</p>
  </div>
</div> 

      <div class="br-pagebody"> 
        <form action="{{ route('insert') }}" method="post">
         @csrf
        <div class="row ">
          <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Product Name" class="form-control" value="{{ old('name')}}">
                <span class="text-danger">
                  @error('name')
                    {{$message}}
                  @enderror  
                </span>
              </div>

              <div class="form-group">
                <label for="description">Product Description</label>
                <textarea name="description" id="description"
                placeholder="description" class="form-control" value="{{old('description')}}"></textarea>
                <span class="text-danger">
                  @error('description')
                    {{$message}}
                  @enderror  
                </span>
              </div>

              <div class="form-group">
                <label for="catagory">Product Catagory</label>
                <select name="catagory" id="catagory" class="form-control">
                  <option value="">---Select catagory---</option>
                  <option value="Man" @if  (old('Catagory') == 'Man' ) selected @endif>---Man---</option>
                  <option value="Women" @if  (old('Catagory') == 'Women' ) selected @endif>---women---</option>
                <option value="Children" @if  (old('Catagory') == 'Children' ) selected @endif>---Children---</option>
                </select>    
              </div> 

              <div class="form-group">
                <label for="catagory">Product Size</label>
                <select name="size" id="size" class="form-control">
                  <option value="">---Select Size---</option>
                  <option value="xxl">---Large---</option>
                  <option value="xl">---Medium---</option>
                <option value="x">---small---</option>
                </select>  
              </div> 


            </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="costPrice">Cost Price</label>
              <input type="text" name="costPrice" id="costPrice" placeholder="Enter Cost-Price" 
              class="form-control">
              <span class="text-danger">
                  @error('costPrice')
                    {{$message}}
                  @enderror  
              </span>
            </div>

            <div class="form-group">
              <label for="salePrice">Sell Price</label>
              <input type="text" name="salePrice" id="salePrice" placeholder="Enter Sale-Price" 
              class="form-control">
               <span class="text-danger">
                  @error('salePrice')
                    {{$message}}
                  @enderror  
              </span>
            </div>

            <div class="form-group">
              <label for="quantity">Enter Quantity</label>
              <input type="text" name="quantity" id="quantity" placeholder="Enter quantity" class="form-control">
              <span class="text-danger">
                  @error('quantity')
                    {{$message}}
                  @enderror  
              </span>
            </div>

            <div class="form-group">
                <label for="status">Status </label>
                <select name="status" id="status" class="form-control">
                  <option value="">---Select catagory---</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>    
            </div> 

            <div class="form-group">
             <button class="form-control btn btn-info">Add Product</button> 
            </div>  
              


          </div><!-- col-3 -->
        </div><!-- row -->
      </form>
      </div><!-- br-pagebody -->
@endsection