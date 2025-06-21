@extends('layout.master')
@section ('main')
    <div class="row">
        <div class="col-12">
            <a href="{{route('product.create')}}" class="btn btn-primary ">create Product</a>
            <br>
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Products Table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        stock</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        sub_category_id</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        create_at</thclass=>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        update_at</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)

                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$product->id}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$product->name}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$product->category_id}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{$product->created_at}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$product->updated_at}}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <a href="{{route('product.edit', $product->id)}}"
                                                class="btn btn-success">Edit</a>
                                        </td>
                                        {{-- <td class="align-middle text-center">
                                            <form action="{{ route('subcategory.destroy', $product->id) }}" method="POST">
                                                @CSRF
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ">Delete</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection