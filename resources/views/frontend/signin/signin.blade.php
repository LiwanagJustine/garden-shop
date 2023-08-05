@extends('frontend.app')

@section('content')

    <div class="signin-cont bg-green-200 w-screen h-screen">
        <div class="content bg-gray-100 w-9/12 h-3/4 flex items-center relative top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] shadow-xl rounded-xl overflow-hidden">
            <div class="img w-[45%] bg-white h-full relative">
                <img src="images/personal growth-rafiki.png" alt="">
            </div>
            <div class="form-cont w-[55%] h-full border py-14 px-20">
                <h2 class="text-4xl font-bold text-green-700 drop-shadow-md">Sign in</h2>
                <p class="text-gray-400 text-sm mt-2">Welcome to <span class="text-green-700 font-bold uppercase">Simple Garden Shop</span></p>
                <p class="text-green-700 font-semibold text-md mt-2">Let's start a beautiful Day!</p>
                <form action="" method="post" class="mt-5 flex flex-col gap-7">
                    <div class="email">
                        <input class="py-3 px-3 shadow-lg rounded-md w-full outline-green-700" type="email" placeholder="Email">
                    </div>
                    <div class="password">
                        <input class="py-3 px-3 shadow-lg rounded-md w-full outline-green-700" type="password" placeholder="Password">
                    </div>
                    <div class="btn flex justify-between items-center">
                        <button type="submit" class="py-2 px-10 w-fit rounded-lg bg-green-700 font-bold text-white hover:bg-green-800">Submit</button>
                        <a href="" class="text-md font-semibold text-blue-600 hover:text-blue-700 ">Forgot password</a>
                    </div>
                </form>
                <div class="social-media w-full flex justify-center mt-5">
                    <div class="facebook w-12 h-12 flex items-center justify-center shadow-lg rounded-full mr-5 cursor-pointer">
                        <a href="">
                            <i class="fa-brands fa-facebook text-[37px] text-blue-600"></i>
                        </a>
                    </div>
                    <div class="google w-12 h-12 rounded-full shadow-lg cursor-pointer">
                        <a href="">
                            <img src="images/google.png" alt="" class="w-full h-full">
                        </a>
                    </div>
                </div>
                <div class="signup mt-2 text-center">
                    <p class="text-gray-400 font-semibold text-sm">Dont have an account?
                        <a href={{ route('signup') }}>
                            <span class="font-bold text-blue-700 cursor-pointer">Sign up</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
