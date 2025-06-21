{{-- @extends('layout.master')

@section('main')
<div class="row">
    <div class="col-md-8 offset-md-2 mt-5">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4>Create New Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="product_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="product_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" name="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" name="stock" required>
                    </div>

                    <div class="mb-3">
                        <label for="sub_category_id">chose category </label>
            <select name="sub_category_id" required>
            <option value="">-- اختر التصنيف --</option>
             @foreach ($subcategories as $subcategory)
                 <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
             @endforeach
           </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Product</button>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}



 {{-- @extends('layout.master')
 @section('main')
   <form method="POST" action="{{route('product.store')}}">
        @CSRF
        <div class="form-group">
            <label for="exampleInputEmail1"> product </label>
            <input type="text"  name="product_name" required>
        </div><br>
        <div class="form-group">
            <label for="exampleInputEmail1"> description </label>
            <input type="text"  name="descriptiont_name" required>
        </div><br>
        <div class="form-group">
            <label for="exampleInputEmail1"> price </label>
            <input type="text"  name="price" required>
        </div><br>
        <div class="form-group">
            <label for="exampleInputEmail1"> stock </label>
            <input type="text"  name="stock" required>
        </div><br>
          <div class="form-group">
            <label for="subcategory_id">chose sub category </label>
            <select name="subcategory_id" required>
            <option value="">-- chose sub category  --</option>
             @foreach ($subcategories as $subcategory)
                 <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
             @endforeach
           </select>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
 @endsection --}}