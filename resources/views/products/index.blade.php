@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center">Products table</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  

<script src="{{asset('js/products.js')}}"></script>
