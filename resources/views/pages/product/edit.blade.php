{{-- @extends('layout.master')

@section('main')
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ route('subcategory.update', $subcategory->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name">Sub Category Name</label>
                    <input type="text" name="category_name" class="form-control" value="{{ $subcategory->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="category_id">Parent Category</label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update SubCategory</button>
            </form>
        </div>
    </div>
@endsection
 --}}