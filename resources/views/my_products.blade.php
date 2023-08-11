<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           My Products 
        </h2>
    </x-slot>
    <div class="p-6 text-gray-900 dark:text-gray-100">
    <div class="py-12">
    @foreach ($products as $product)
    <div class="card">
  <h5 class="card-header">Product Id {{ $product->id }}</h5>
  <div class="card-body">
    <h5 class="card-title">product_name :{{$product->product_name}}</h5>
    <p class="card-text">user_id :{{$product->user_id}}</p>
    <a href="http://127.0.0.1:8000/delete_products/{{ $product->id }}" class="btn btn-danger">Delete Product</a>
    <a href="http://127.0.0.1:8000/view_update/{{ $product->id }}" class="btn btn-warning">update Product</a>
  </div>
</div>
@endforeach
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>