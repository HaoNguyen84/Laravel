@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">


            <!-- <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{$user->id}}">
                <div class="form-group mb-3">
                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email_address" class="form-control" value="{{ $user->email }}" name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                </div>
            </form> -->


            <div class="card text-center" style="padding:15px;">
                <h4 class="text-primary">UPDATE</h4>
            </div><br><br>

            <div class="container">

                <div class="container">
                    <form action="{{ route('user.postUpdateUser') }}" method="POST">
                        @csrf
                        <input name="id" type="hidden" value="{{$user->id}}">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input name="name" type="text" class="form-control" placeholder="nhap ma sinh vien" value="{{ $user->name }}" id="name" required autofocus>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" placeholder="Email" id="email_address" class="form-control" value="{{ $user->email }}" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">nhập password</label>
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">nhập phone</label>
                            <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone" required>
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">nhập image</label>
                            <input type="text" placeholder="Image" id="image" class="form-control" name="image" required>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-primary" style="float:left;" value="Edit">
                    </form>

                </div>
                <br><br><br><br>
            </div>
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Lập trình web @ 01/2024</p>
                </div>
            </footer>



        </div>
    </div>
</main>
@endsection