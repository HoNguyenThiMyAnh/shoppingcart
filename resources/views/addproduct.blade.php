@extends('layout')
@section('content')
<form action="{{route('save_product')}}" method="post">
    @csrf
    
    <div class="form-group">
        <label for="Product_name">Ten san pham</label>
        <input type="text" name="product_name" class="form-control" id="Product_name"  placeholder="Ten san pham">
        <small id="emailHelp" class="form-text text-muted">Hien thi san pham can chon</small>
      </div>
      <div class="form-group">
        <label for="Product_description">Mo ta san pham </label>
        <input type="text" name="product_description" class="form-control" id="Product_description"  placeholder="Mo ta san pham">
        <small id="emailHelp" class="form-text text-muted">San pham co nhung gi</small>
      </div>
      <div class="form-group">
        <label for="Photo">Hinh anh</label>
        <input type="text" name="photo" class="form-control" id="Photo"  placeholder="Hinh anh">
        <small id="emailHelp" class="form-text text-muted">Hinh anh san pham</small>
      </div>
      <div class="form-group">
        <label for="Price">Gia san pham</label>
        <input type="number" name="price" class="form-control" id="Price"  placeholder="Gia san pham">
        <small id="emailHelp" class="form-text text-muted">Gia san pham</small>
      </div>


      <button type="submit" class="btn btn-primary">Luu san pham</button>
    
</form>
@endsection