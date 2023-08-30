<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
    <!-- CDN font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN animate css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CDN tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- tippyCustom.css -->
    <link rel="stylesheet" href="../dist/output.css">

    <title>Admin Page</title>
</head>

<body>

    <div id="wapper" class="flex max-w-[100vw]">
        <!-- LEFT - Phần sidebar (menu bên trái) -->
        <div class="sidebar min-h-screen basis-[250px] w-[234px] px-[8px] bg-[#343a40]">
            <!-- LEFT - Logo + ADMIN PAGE -->
            <div class="user-panel flex pb-4 my-4 gap-[10px]">
                <div class="image w-[40px] rounded-full flex items-center justify-center overflow-hidden">
                    <a href="#"><img class="block w-full" src="#" alt="Nhóm 14" /></a>

                </div>
                <div class="p-[5px] pb-0 pt-[8px]">
                    <span class="text-[#c2c7d0] hover:text-[#fff]">
                        <a href="#">ADMIN PAGE</a>
                    </span>
                </div>
            </div>
            <!-- LEFT - Input Search -->
            <div class="search max-w-full flex flex-nowrap">
                <input class="block max-w-[182px] text-white outline-none border border-gray-400 border-solid border-r-0 caret-white rounded-l-lg px-[12px] py-[5px] bg-[#3f474e]" type="text" placeholder="Search" />
                <div class="basis-[40px] border border-gray-400 border-solid rounded-r-lg flex items-center justify-center overflow-hidden">
                    <button class="flex px-[10px] py-[9px] items-center justify-center overflow-hidden cursor-pointer" type="button">
                        <i class="block w-[16px] h-[16px] text-white fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
            <!-- LEFT - Bottom slidebar -->
            <nav class="mt-2 flex flex-col justify-between">
                <!-- LEFT - Danh sách các chức năng quản lý -->
                <ul class="feature flex flex-col">
                    <!-- LEFT - 1. Dashboard -->
                    <li class="nav-item flex w-full">
                        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <i class="nav-icon fas fa-house" aria-hidden="true"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <!-- LEFT - 2. Quản lý người dùng -->
                    <li class="nav-item flex w-full">
                        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <!-- <i class="nav-icon fas fa-th" aria-hidden="true"></i> -->
                            <i class="fa-solid fa-users-gear"></i>
                            <p>
                                Quản lý người dùng
                                <!-- <i class="right fas fa-angle-right"></i> -->
                            </p>
                        </a>
                    </li>

                    <!-- LEFT - 3. Quản lý danh mục -->
                    <li class="nav-item flex w-full">
                        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                            <p>
                                Quản lý danh mục
                                <!-- <i class="right fas fa-angle-right"></i> -->
                            </p>
                        </a>
                    </li>
                    <!-- LEFT - 4. Quản lý Voucher -->
                    <li class="nav-item flex w-full  flex-col">
                        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
                            <p>
                                Quản lý Voucher
                                <!-- <i class="right fas fa-angle-right"></i> -->
                            </p>
                        </a>

                        <!-- 4.1.  -->
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                                <a href="#" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tất cả Voucher</p>
                                </a>
                            </li>
                            <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                                <a href="./voucherAdd.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Voucher</p>
                                </a>
                            </li>
                            <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                                <a href="./voucherFix.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sửa Voucher</p>
                                </a>
                            </li>
                            <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                                <a href="./voucherDelete.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Xóa Voucher</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- LEFT - 5.Quản lý đơn hàng -->
                    <li class="nav-item flex w-full">
                        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <i class="nav-icon fas fa-edit" aria-hidden="true"></i>
                            <p>
                                Quản lý đơn hàng
                                <!-- <i class="right fas fa-angle-right"></i> -->
                            </p>
                        </a>
                    </li>
                </ul>

                <!-- Đăng xuất -->
                <ul class="logout">
                    <li class="nav-item flex w-full mb-[5px]">
                        <a href="../pages/logout.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                            <p>
                                Đăng xuất
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- RIGHT - Phần content (nội dung chính) -->
        <div class="basis-auto w-[100%] bg-[#f4f6f9]">
            <nav class="p-4 flex items-center justify-between bg-white">
                <ul>
                    <li>
                        <i class="fa-solid fa-bars"></i>
                    </li>
                </ul>
                <ul class="flex gap-3">
                    <li>
                        <span>Xin chào, </span>
                    </li>
                    <li><i class="fa-regular fa-bell"></i></li>
                </ul>
            </nav>
            <!--  -->
            <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
                <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
                    Dashboard
                </h1>
                <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
            </section>

            <!-- SECTION CONTENT-->
            <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
                <form action="./adminFunction/delete.php" method="post">
                    <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
                        <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                            <!--content-->
                            <div class="">
                                <!--body-->
                                <div class="text-center p-5 flex-auto justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                                        <p class="text-sm text-gray-500 px-8">Do you really want to delete the Voucher?
                                            This process cannot be undone</p>
                                </div>
                                <!--footer-->
                                <div class="p-3  mt-2 text-center space-x-4 md:block">
                                    <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                        Cancel
                                    </button>
                                    <button type="submit" class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">
                                        <input type="hidden" name="saleid" value="<?php echo $_POST['SaleID'] ?>">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

        </div>
        </section>
    </div>

</body>

</html>