   <!-- SIDEBAR -->
    <div class="sidebar bg-skin-base fixed right-0 top-0 overflow-y-auto h-screen">
        <div class="h-40 relative px-2.5 py-1.5 flex items-center justify-center">
            <img src="" alt="" class="h-11 max-w-full">
            <div class="sidebar-close" id="sidebar-close"><i class="bx bx-right-arrow-alt"></i></div>
        </div>
        <div class="p-2 items-center justify-between flex flex-row-reverse">
            <div class="flex items-center">
                <img src="" alt="" class="profile-img w-11 h-11 rounded-full">
                <div class="capitalize text-xl font-bold ml-2">
                    maz develop
                </div>
            </div>
            <button class="bg-transparent grid place-items-center cursor-pointer text-blue-400 hover:bg-blue-400 hover:text-white p-2 rounded"><i class="bx bx-log-out bx-flip-horizontal text-xl "></i></button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="list-none sidebar-menu">
            <li><a href="#" class="active p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class="bx bx-home ml-3 text-2xl"></i><span class="text-sm">داشبورد</span></a></li>
            <li><a href="#" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class="bx bx-shopping-bag ml-3 text-2xl"></i><span class="text-sm">فروش</span></a></li>
            <li><a href="#" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class="bx bx-chart ml-3 text-2xl"></i><span class="text-sm">آنالیز</span></a></li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-user-circle ml-3 text-2xl"></i>
                    <span class="text-sm">کاربران</span>
                    <div class=" dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu  sidebar-menu-dropdown-content px-6">
                    <li><a href="{{ route('user.create') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">ایجاد کاربر</a></li>
                    <li><a href="{{ route('user.index') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">تنظیمات پروفایل</a></li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-category ml-3 text-2xl"></i>
                    <span class="text-sm">پست ها</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu sidebar-menu-dropdown-content px-6">
                    <li><a href="{{ route('post.index') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">فهرست</a></li>
                    <li><a href="{{ route('post.create') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">ایجاد</a></li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class='bx bxl-product-hunt ml-3 text-2xl'></i>
                    <span class="text-sm">فروشگاه</span>
                    <div class=" dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu  sidebar-menu-dropdown-content px-6">
                    <li><a href="#" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">لیست محصولات</a></li>
                    <li><a href="#" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">اضافه کردن</a></li>
                    <li><a href="#" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">صفارشات</a></li>
                </ul>
            </li>
            <li><a href="#" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class='bx bx-mail-send ml-3 text-2xl'></i><span class="text-sm">ایمیل</span></a></li>
            <li><a href="#" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class="bx bx-chat ml-3 text-2xl"></i><span class="text-sm">چت</span></a></li>
            <li><a href="#" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class='bx bxs-calendar-event ml-3 text-2xl'></i><span class="text-sm">تقویم</span></a></li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-cog ml-3 text-2xl"></i>
                    <span class="text-sm">تنظیمات</span>
                    <div class=" dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu  sidebar-menu-dropdown-content px-6">
                    <li>
                        <a href="#" class="darkmode-toggle text-sm p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"  id="darkmode-toggle" >
                            حالت مشکی
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->