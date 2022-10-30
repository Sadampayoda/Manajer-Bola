@extends('templete.html')

@section('conten')


<div class="row justify-content-center">
    <div class="col-5 ">
        @if (session()->has('failed'))
            <div class="alert alert-danger text-center" role="alert">
                {{session('failed')}}
            </div>
        @endif
        <form action="/register" method="POST">
            @csrf
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label"><i class="bi bi-person-circle pe-3"></i>Email</label>
                <input value="{{old('email')}}" name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                @error('email')
                    <div class="form-text text-danger">{{$message}}</div>        
                @enderror
            
            </div>
            <div class="mb-1">
                <label for="exampleInputName" class="form-label"><i class="bi bi-person-circle pe-3"></i>Username</label>
                <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputName" >
                @error('name')
                    <div class="form-text text-danger">{{$message}}</div>        
                @enderror
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label"><i class="bi bi-key-fill pe-3"></i>Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    <div class="form-text text-danger">{{$message}}</div>        
                @enderror
            </div>
            <div class="mb-2">
                <label for="exampleInputKonfirmasi" class="form-label"><i class="bi bi-key-fill pe-3"></i>Konfirmasi</label>
                <input name="konfirmasi" type="password" class="form-control" id="exampleInputKonfirmasi">
            </div>
            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-dark">Buat akun</button>
            </div>
            <div class="mt-4 text-center">
                <p>Sudah punya akun ? <a href="/login">Login akun disini</a></p>
            </div>
        </form>
    </div>
</div>
@endsection