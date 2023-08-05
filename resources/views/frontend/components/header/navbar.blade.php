
<div class="container w-full py-4 bg-white shadow-md fixed top-0 left-0 z-40 ">
    <header class="w-11/12 mx-auto flex justify-between items-center ">
        <div class="logo w-fit">
            <a href="#home">
                <img src="images/Simple_Garden__3_-removebg-preview.png" class="h-fit w-40 p-1" alt="">
            </a>
        </div>
        <nav class="navbar h-full w-1/4 flex text-lg text-gray-700 font-semibold justify-around">
            <div class="home w-fit text-center flex flex-col">
                <a class="border-b-4 hover:border-b-4 leading-5 border-green-700" href="#home">Home</a>
            </div>
            <div class="about w-fit text-center flex flex-col">
                <a class="hover:border-b-4 leading-5 border-green-700" href="#about">About</a>
            </div>
            <div class="contact w-fit text-center flex flex-col">
                <a class="hover:border-b-4 leading-5 border-green-700" href="#contact">Contact</a>
            </div>
        </nav>
        <div class="btn w-fit">
            <a href={{ route('signin')}}>
                <button class="py-2 px-8 shadow-md text-white font-semibold text-lg rounded-full mr-3 bg-green-700 hover:shadow-lg ">Sign in</button>
            </a>
            <a href={{ route('signup') }}>
                <button class="py-2 px-8 shadow-md text-green-700 font-semibold text-lg rounded-full hover:shadow-lg">Sign up</button>
            </a>
        </div>
    </header>
</div>

