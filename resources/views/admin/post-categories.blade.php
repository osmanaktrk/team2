@extends('layouts.admin')





@section('admin-content')
    <div class="right-ceiling">
        <div class="right-sorting">

            <h4>POST CATEGORIES</h4>

        </div>

    </div>



    <div class="contact-main-container">






        <div class="main-container">

            <div class="category-create">
                <form action="{{ route('admin-post-categories-create') }}" method="post">
                    @csrf
                    <label for="category-name">New Category: </label>
                    @error('category')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="text" name="category" id="category-name" required>

                    <input type="submit" value="CREATE">
                </form>
            </div>

            <div class="all-categories">
                <h4>CATEGORIES</h4>
                @foreach ($categories as $category)
                    <div>

                        <span>Category: {{ $category->category }} </span>
                        <form action="{{ route('admin-post-categories-delete', $category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="delete-btn" type="submit" value="Delete Category"
                                onclick="return confirm('ARE YOU SURE')">

                        </form>
                        <button class="category-edit-btn">Edit Category</button>
                        <div style="display: none">
                            <form class="category-edit-form"
                                action="{{ route('admin-post-categories-edit', $category->id) }}" method="post">
                                @csrf
                                @method('put')
                                <input type="text" name="category" value="{{ $category->category }}" required>
                                @error('category')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="submit" value="SUBMIT">
                            </form>
                            <button>CANCEL</button>
                        </div>




                    </div>
                @endforeach



            </div>

            

        </div>
    @endsection

 
