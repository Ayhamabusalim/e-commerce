@extends('layout.master')
  @section('main')
    <form method="POST" action="{{route('subcategory.store')}}">
        @CSRF
        <div class="form-group">
            <label for="exampleInputEmail1">Sub Category name</label>
            <input type="text"  name="subcategory_name" required>
        </div><br>
          <div class="form-group">
            <label for="category_id">chose category </label>
            <select name="category_id" required>
            <option value="">-- اختر التصنيف --</option>
             @foreach ($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endforeach
           </select>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    @endsection