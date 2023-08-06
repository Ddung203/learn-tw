<?php
include("./user.controller.php");
include '../database/database.php';
$userList = getUserList($mysqli);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>User List - Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw] ">
    <!-- LEFT -->
    <div class="sidebar min-h-screen basis-[250px] w-[234px] px-[8px] bg-[#343a40]">
      <div class="user-panel flex pb-4 my-4 gap-[10px]">
        <div class="image w-[40px] rounded-full flex items-center justify-center overflow-hidden">
          <a href="admin.php"><img class="block w-full" src="../assets/img/Nhom_14_Logo.png" alt="Nhóm 14" /></a>

        </div>
        <div class="p-[5px] pb-0 pt-[8px]">
          <span class="text-[#c2c7d0] hover:text-[#fff]">
            <a href="admin.php">ADMIN PAGE</a>
          </span>
        </div>
      </div>
      <!-- Input Search -->
      <div class="search max-w-full flex flex-nowrap">
        <input class="block max-w-[182px] text-white outline-none border border-gray-400 border-solid border-r-0 caret-white rounded-l-lg px-[12px] py-[5px] bg-[#3f474e]" type="text" placeholder="Search" />
        <div class="basis-[40px] border border-gray-400 border-solid rounded-r-lg flex items-center justify-center overflow-hidden">
          <button class="flex px-[10px] py-[9px] items-center justify-center overflow-hidden cursor-pointer" type="button">
            <i class="block w-[16px] h-[16px] text-white fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </div>
      <!-- Bottom slidebar -->
      <nav class="mt-2 flex flex-col justify-between">
        <!-- Dashboard -->
        <ul class="feature flex flex-col">
          <li class="nav-item flex w-full">
            <a href="./admin.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-house" aria-hidden="true"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>

          <!-- 1. Quản lý người dùng -->
          <li class="nav-item flex w-full  flex-col">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="fa-solid fa-users-gear"></i>
              <p>
                Quản lý người dùng
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>

            <!-- UL CHỨC NĂNG QUẢN LÝ NGƯỜI DÙNG -->
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="./user_list.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách người dùng</p>
                  <!-- GET ALL PRODUCTS -->
                </a>
              </li>
            </ul>
          </li>
          <!-- 2. Quản lý danh mục -->
          <li class="nav-item flex w-full">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-th" aria-hidden="true"></i>
              <p>
                Quản lý danh mục
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
          <!-- 3. Quản lý sản phẩm -->
          <li class="nav-item flex w-full  flex-col">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
              <p>
                Quản lý sản phẩm
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>

            <!-- UL CHỨC NĂNG QUẢN LÝ -->

          </li>
          <!-- 4. Quản lý đơn hàng -->
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
        <ul class="logout">
          <li class="nav-item flex w-full mb-[5px]">
            <a href="../pages/logout.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Đăng xuất
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- RIGHT -->
    <div class="basis-auto w-[100%] bg-[#f4f6f9]">
      <nav class="p-4 flex items-center justify-between bg-white">
        <ul>
          <li>
            <i class="fa-solid fa-bars"></i>
          </li>
        </ul>
        <ul class="flex gap-3">
          <li>
            <span>Xin chào, <?php echo $_SESSION["UserName"] ?></span>
          </li>
          <li><i class="fa-regular fa-bell"></i></li>
        </ul>
      </nav>

      <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
          Quản lý người dùng
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="./admin.php">Home </a> / <a href="./user_list.php">Danh sách người dùng</a></span>
      </section>
      <!-- SECTION CONTENT 1 -->
      <section class="content  max-w-full  px-6 py-4 flex flex-col gap-3 bg-white">
        <!-- Users Table -->
        <div class="w-full p-5 bg-white flex flex-col justify-between gap-[20px] items-start">
          <h1 class="text-2xl font-bold mb-4">Danh sách người dùng</h1>
          <!-- <form method="POST"> -->
          <table class="w-full max-w-full border-collapse border border-gray-300">
            <thead>
              <tr class="bg-gray-100 w-full ">
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">User ID</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Cart ID</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">User Name</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Phone</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Address</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Email</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Password</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Is Admin</th>
                <th class="px-4 py-2 font-bold border border-gray-300 grow break-all">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($userList as $row) {
              ?>
                <tr class="bg-gray-200 hover:bg-gray-300 flexbreak-normal">
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['UserID']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['CartID']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['UserName']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['phone']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['address']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['email']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all"><?php echo $row['password']; ?></td>
                  <td class="px-4 py-2 border border-gray-300 break-all">
                    <?php
                    $isAdmin = $row['role'] == 1 ? 'YES' : 'NO';
                    echo $isAdmin;
                    ?>
                  </td>
                  <td class="px-4 py-2 border border-gray-300 flex gap-[10px] justify-center">
                    <!-- Edit -->
                    <a href="./update_user.php?UserID=<?php echo $row['UserID']; ?>">
                      <i class="fa-solid fa-edit"></i>
                    </a>

                    <!-- DEL -->
                    <form action="./user.controller.php" method="GET">
                      <a href="user.controller.php?action=delete&userID=<?php echo $row['UserID']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                    </form>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          <!-- </form> -->
        </div>
      </section>
    </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>