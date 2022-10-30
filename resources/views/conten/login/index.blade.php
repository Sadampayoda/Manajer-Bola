@extends('templete.html')

@section('conten')
    <div class="row justify-content-center">
        <div class="col-5  ">
            @if (session()->has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <div class="mb-1">
                    <label for="exampleInputName" class="form-label"><i class="bi bi-person-circle pe-3"></i>Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label"><i class="bi bi-key-fill pe-3"></i>Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
                <div class="mt-4 text-center">
                    <p>Belum punya akun ? <a href="/register">Buat akun disini</a></p>
                </div>
               
            </form>
        </div>
    </div>
@endsection