@extends('layouts.app') <!--layout is folder, app is name-->

@section('content') <!--connected to the yield in the app file-->
<x-product-list :products="$products" :admin="$admin">
    @if($admin)
    <a href="/shop/add">
        <button class="btn-dark-green text-white text-uppercase border-0 py-2 px-4">Add Product</button>
    </a>
    @endif
</x-product-list>
@endsection
