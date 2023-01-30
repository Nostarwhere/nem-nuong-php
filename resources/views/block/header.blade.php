<nav class="">
    <div class=" flex justify-between bg-red-600 text-white font-semibold py-2 px-9 relative">
        <div class="social"></div>
        <div class=" signIn-option ">
            <button onclick="showModal()" class=" cursor-pointer">Đăng nhập</button>
        </div>
        <div id="logIn-form"
            class="hidden absolute top-0 left-0 w-full overflow-auto ease-in-out transition-all duration-300 z-50 h-[1000px] bg-black bg-opacity-30">
            <form method="POST" action="{{ route('login') }}"
                class="bg-white mx-auto shadow-md rounded px-8 pt-6 pb-8 mt-10 mb-4 max-w-[500px]">
                <div class="flex justify-end">
                    <img onclick="hideModal()" src="{{ asset('assets/images/icon_close_tab.svg') }}" alt=""
                        class="h-5 cursor-pointer">
                </div>
                <h1 class="font-bold text-center text-black">ĐĂNG NHẬP</h1>
                <div class="my-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Tên đăng nhập
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Emaiil address">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Mật khẩu
                    </label>
                    <input
                        class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="******************">

                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Đăng nhập
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="#">
                        Quên mật khẩu?
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="flex list-none mx-auto py-4 font-bold text-white items-center justify-center ">
        <div class="header-left flex justify-end">
            <a href="" class="block bg-red-500 rounded-[30px] mr-2 px-3 py-3">
                <li>TRANG CHỦ</li>
            </a>
            <a href="" class="block bg-red-500 rounded-[30px] mr-2 px-3 py-3">
                <li>GIỚI THIỆU</li>
            </a>
            <a href="" class="block bg-red-500 rounded-[30px] mr-2 px-3 py-3">
                <li>ĐẠI LÝ</li>
            </a>
            <a href="" class="block bg-red-500 rounded-[30px] mr-2 px-3 py-3">
                <li>SẢN PHẨM</li>
            </a>
        </div>
        <div class="logo h-[102px] w-[102px]">
            <img src="../../assets/images/logo-hungviet.png" alt="logo" class="h-[102px] w-[102px]">
        </div>
        <div class="header-right flex justify-start">
            <a href="" class="block bg-red-500 rounded-[30px] ml-2 px-3 py-3">
                <li>TIN TỨC</li>
            </a>
            <a href="" class="block bg-red-500 rounded-[30px] ml-2 px-3 py-3">
                <li>KIẾN THỨC KINH DOANH</li>
            </a>
            <a href="" class="block bg-red-500 rounded-[30px] ml-2 px-3 py-3">
                <li>HỖ TRỢ</li>
            </a>
            <a href="" class="block bg-red-500 rounded-[30px] ml-2 px-3 py-3">
                <li>LIÊN HỆ</li>
            </a>
        </div>
    </div>
</nav>

<script>
    function showModal() {
        let formLogin = document.getElementById("logIn-form");
        formLogin.classList.remove("hidden");
    }

    function hideModal() {
        let formLogin = document.getElementById("logIn-form");
        formLogin.classList.add("hidden");
    }
</script>
