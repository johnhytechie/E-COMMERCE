@extends('admin.maindesign')


@section('add_category')

    @if(session('category_message'))
         <div style="margin-bottom: 1rem; background-color: green; border-width: 1px; border-style: solid; border-color: rgb(37, 37, 240); color: #f2f2f2; padding-left: 1rem; padding-right: 1rem; padding-top: 0.75rem; padding-bottom: 0.75rem; border-radius: 0.25rem; position: relative;.
">
            {{ session('category_message') }}
         </div>
    @endif
     <div class="container-fluid">
        <form action="{{route('admin.postaddcategory')}}" method="POST">
            @csrf
            <input type="text" name="category" placeholder="Enter Category Name!">
            <input type="submit" name="submit" value="Add Category">
        </form>
     </div>

@endsection