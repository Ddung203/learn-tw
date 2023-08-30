<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi voucher</title>
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
                <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#">
                        Dashboard</a></span>
            </section>

            <!-- SECTION CONTENT-->

            <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
                <!-- component -->
                <div class="flex items-center justify-center bg-gray-100">
                    <div class=" w-full p-6 bg-white ">
                        <form action="./adminFunction/fixmain.php" method="POST">
                            <!-- <div class="mb-6">
                                <label for="confirmPassword" class="block mb-2 text-sm text-gray-600">SaleID</label>
                                <input type="text" id="confirmPassword" name="confirmPassword" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div> -->
                            <div class="mb-4">
                                <label for="nombre" class="block mb-2 text-sm text-gray-600">Voucher Code</label>
                                <input type="text" id="nombre" name="vouchercode" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="apellido" class="block mb-2 text-sm text-gray-600">Voucher Count</label>
                                <input type="text" id="apellido" name="vouchercount" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600">Voucher Discount</label>
                                <input type="text" id="email" name="voucherdiscount" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block mb-2 text-sm text-gray-600">VoucherTime</label>
                                <input type="text" id="password" name="vouchertime" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                                Fix
                                <input type="hidden" name="saleid" value="<?php echo $_POST['SaleID']; ?>">
                            </button>
                        </form>

                    </div>
                </div>
        </div>
        </section>
    </div>

</body>

</html>