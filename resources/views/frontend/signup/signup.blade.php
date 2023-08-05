
@extends('frontend.app')

@section('content')
    <div class="signup-container bg-green-200 w-screen h-screen">
        <div class="content bg-gray-100 w-9/12 h-[85%] flex items-center relative top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] shadow-xl rounded-xl overflow-hidden">
            <div class="img w-[45%] bg-white h-full relative">
                <img src="images/personal growth-amico.png" alt="">
            </div>
            <div class="form-cont w-[55%] h-full border py-5 px-10">
                <h2 class="text-4xl font-bold text-green-700 drop-shadow-md">Sign up</h2>
                <p class="text-gray-400 text-sm mt-2">Welcome to <span class="text-green-700 font-bold uppercase">Simple Garden Shop</span></p>
                <p class="text-green-700 font-semibold text-md mt-2">Let's start create a beautiful Day!</p>

                <form action="" method="post" class="mt-5 flex flex-col gap-5">
                    <div class="name flex justify-between gap-3">
                        <div class="fname w-1/2">
                            <input class="py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="text" placeholder="First name">
                        </div>
                        <div class="lname w-1/2">
                            <input class="py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="text" placeholder="Last name">
                        </div>
                    </div>

                    <div class="email">
                        <input class="py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="email" placeholder="Email">
                    </div>

                    <div class="ad-info flex justify-between gap-3">
                        <div class="birthday w-1/2">
                            <input class="py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="date" >
                        </div>
                        <div class="gender w-1/2">
                            <select name="gender" id="gender" class="py-2 px-3 shadow-md rounded-md w-full outline-green-700">
                                <option value="" selected disabled class="">Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="address flex justify-between gap-3">
                        <div class="street">
                            <label for="" class=" text-gray-500 font-bold">Address</label>
                            <input class="mt-1 py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="text" placeholder="Street">
                        </div>
                        <div class="city">
                            <label for="" class="opacity-0">City</label>
                            <input class="mt-1 py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="text" placeholder="City">
                        </div>
                        <div class="province">
                            <label for="" class="opacity-0">Province</label>
                            <input class="mt-1 py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="text" placeholder="Province">
                        </div>
                    </div>

                    <div class="password flex justify-between gap-3">
                        <div class="pass w-1/2">
                            <input class="py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="password" placeholder="Password">
                        </div>
                        <div class="conf-pass w-1/2">
                            <input class="py-2 px-3 shadow-md rounded-md w-full outline-green-700" type="password" placeholder="Confirm password">
                        </div>
                    </div>

                    <div class="btn flex justify-between items-center">
                        <button type="submit" class="py-2 px-10 w-full rounded-lg bg-green-700 font-bold text-white hover:bg-green-800">Submit</button>
                    </div>
                </form>

                {{-- <div class="social-media w-full flex justify-center mt-3">
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
                </div> --}}
                <div class="signup mt-8 text-center">
                    <p class="text-gray-400 font-semibold text-sm">Already have an account?
                        <a href={{ route('signin') }}>
                            <span class="font-bold text-blue-700 cursor-pointer">Sign in</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

