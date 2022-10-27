@extends('layouts.master')
@section('menu')
    @extends('sidebar.viewrecord')
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>View Record</h3>
                        <p class="text-subtitle text-muted">Bikers information list</p>

                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Staff list
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Type</th>
                                <th class="text-center">Modify</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td><img src="/images/{{ $product->image }}" width="100px"></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>{{ $product->type }}</td>


                                    <td>
                                        <form action="{{ route('destroy',$product->id) }}" method="POST">

                                            <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>

                                            <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted ">
                <div class="float-start">
                    <p>2022 &copy; wassym jaffel</p>
                </div>
                <div class="float-end">
                    <p>Crafted with<span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="">wassym jaffel</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
