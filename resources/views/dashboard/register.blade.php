@extends('layout')

@section('content')

<div class="container my-5 d-flex justify-content-center align-items-center">
    <form method="POST" action="{{route('register.post')}}" class="card py-4 px-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="text-center logo ml-3">
            <i class="fas fa-user-plus"></i>
        </div>
        <div class="text-center mt-3">
            
        <span class="info-text">silahkan buat akun baru</span>
        
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Email</label>
            <input class="form-control" type="email" name="email">
           
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Nama Lengkap</label>
            <input class="form-control" type="text" name="name">
            
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Username</label>
            <input class="form-control" type="text" name="username">
            
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Password</label>
            <input class="form-control" type="password" name="password">
            
        </div>
        
        
        <div class=" mt-5 d-flex justify-content-between align-items-center">
            <span><a href="/" style=>Login</a></span>
            <button type="submit" class="btn btn-primary">buat akun </button>
        </div>
    </form>
</div>
@endsection

    