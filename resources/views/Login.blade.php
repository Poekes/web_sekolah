<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Login SMK MUHAMMADIYAH PAGUYANGAN</title>
    @vite(['resources/js/app.js'])

</head>

<body class="bg-base-200 min-w-[330px]">
    <div class="min-h-screen hero ">
        @if (Session()->has('invalidAuth'))
            <div class="z-20 toast toast-bottom toast-center">
                <div class="items-center px-10 py-2 font-bold rounded-md alert alert-error">
                    <span class="text-center">Login Gagal</span>
                </div>
            </div>
        @endif
        <div class="flex-col hero-content max-w-[60rem] w-full lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-3xl font-bold sm:text-5xl">SMK MUHAMMADIYAH PAGUYANGAN</h1>
                <p class="py-6">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>
            <div class="w-full max-w-sm shadow-2xl card bg-base-100 shrink-0">
                <form class="card-body"
                      method="POST"
                      action="{{ route('auth') }}">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text"
                               placeholder="Username"
                               class="input input-bordered @error('username')
                                border-red-700
                            @enderror"
                               required
                               value="{{ old('username') }}"
                               name="username" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ">Password</span>
                        </label>
                        <input type="password"
                               placeholder="password"
                               class="input input-bordered @error('password')
                                border-red-700
                            @enderror"
                               required
                               name="password" />
                        <label class="label">
                            <a href="#"
                               class="label-text-alt link link-hover">Forgot password?</a>
                        </label>
                    </div>
                    <div class="mt-6 form-control">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>