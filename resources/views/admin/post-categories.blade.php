@extends('layouts.admin')





@section('admin-content')
    <div class="right-ceiling">
        <div class="right-sorting">

            <h4>NEW CATEGORY</h4>

        </div>

    </div>


    <div class="card">

        <form action="{{ route('admin-post-categories-create') }}" method="post">
            @csrf

            <div class="card-header">
                <div class="form-group">

                    <input type="text" class="form-control font-weight-lighter" name="category" id="category-name"
                        placeholder="Enter New Category" required>
                </div>
                @error('category')
                    <span class="error">{{ $message }}</span>
                @enderror



            </div>



            <div class="card-body font-weight-light">
                <div class="row justify-content-center">
                    <input class=" btn btn-primary" type="submit" value="Create New Category">

                </div>

            </div>


        </form>
    </div>





    <div class="right-ceiling">
        <div class="right-sorting">

            <h4>POST CATEGORIES</h4>

        </div>

    </div>




    @foreach ($categories as $category)
        <div class="card m-5 border-dark">
            <div class="card-header">
                <h5 class="mb-0 row justify-content-around">
                    <button class="btn btn-link font-weight-light" type="button"
                        style="color: #1ABCB6;">{{ $category->category }}
                    </button>
                    @error('category')
                        <span class="error">{{ $message }}</span>
                    @enderror


                </h5>

            </div>
            <div class=" card-body font-weight-light">

                <div class="card-body form-group row justify-content-around">

                    <div style="width: 70%">


                        <form class="row justify-center" action="{{ route('admin-post-categories-edit', $category->id) }}"
                            method="post">
                            @csrf
                            @method('put')



                            <input type="text" class=" form-control" name="category" style="max-width: 50%" value="{{ $category->category }}"
                                required>




                            <input class="btn btn-primary" type="submit" value="Edit Category">
                        </form>



                    </div>
                    <div>
                        <form action="{{ route('admin-post-categories-delete', $category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete Category"
                                onclick="return confirm('ARE YOU SURE')">

                        </form>
                    </div>
                </div>



            </div>
        </div>






      
    @endforeach
@endsection
