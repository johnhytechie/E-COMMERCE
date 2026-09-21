@extends('admin.maindesign')

<base href="/public">
@section('update_product')

    @if(session('update_message'))
         <div style="border: 1px solid blue; color: white; border-radius:4px rounded; padding: 10px; background-color: blue; margin-bottom: 10px;">
            {{ session('update_message') }}
         </div>
    @endif
     <div class="container-fluid" style="margin-left: 100px;">
        <form action="{{route('admin.postupdateproduct', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="product_title" value="{{$product->product_title}}"> <br><br>
            <textarea name="product_description" style="width: 300px; height: 200px;">
                   {{$product->product_description}}
            </textarea><br><br>   
            <input type="number" name="product_quantity" value="{{$product->product_quantity}}"><br><br>
            <input type="number" name="product_price" value="{{$product->product_price}}"><br><br>
            <img style="width: 100px;" src="{{asset('products/'.$product->product_image)}}"><label>Old Image</label>
            <input type="file" name="product_image"><label>Add New Image Here</label><br><br>
            <select name="product_category"> 
                <option value="{{ $product->product_category }}">
                    {{ $product->product_category }}
                </option>
                @foreach($categories as $category)
                <option value="{{ $category->category }}">{{ $category->category }}</option>
                @endforeach
            </select><label>Select A Category</label><br><br>
            <input type="submit" name="submit" value="Add Product"><br><br>
        </form>
     </div>

@endsection