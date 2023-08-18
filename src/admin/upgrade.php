<?php
if (isset($_GET['UserID'])) {
  $UserID = $_GET['UserID'];
  include("./user.controller.php");
  include '../database/database.php';

  $userList = getUserList($mysqli);
  $userToUpdate = null;

  foreach ($userList as $user) {
    if ($user['UserID'] == $UserID) {
      $userToUpdate = $user;
      break;
    }
  }

  // var_dump($userToUpdate);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $userToUpdate) {
  $userName = $_POST['UserName'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['isAdmin'];

  $userToUpdate['role'] = $role;

  $query = "UPDATE users SET UserName=?, phone=?, address=?, email=?, password=?, role=? WHERE UserID=?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("sssssis", $userName, $phone, $address, $email, $password, $role, $UserID);

  // echo "SQL statement: " . $userToUpdate['role'];

  if ($stmt->execute()) {
    header("Location: user_list.php");
    exit();
  } else {
    echo "Có lỗi xảy ra khi cập nhật thông tin";
    var_dump($userToUpdate);
  }

  $stmt->close();
}

?>

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
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT - Phần sidebar (menu bên trái) -->
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
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center bg-[#494e53]">
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
          Thông tin tài khoản
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="./admin.php">Home </a> / <a href="#"> Sửa thông tin người dùng</a></span>
      </section>

      <!-- SECTION CONTENT-->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white ">
          <?php if ($userToUpdate) { ?>

            <body>
              <!-- NEW -->
              <form method="POST" class="bg-white dark:bg-gray-900" autocomplete="off">
                <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
                  <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Sửa thông tin người dùng</h2>
                  <form action="#">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                      <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
                        <input type="text" name="UserName" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="<?php echo $userToUpdate['UserName']; ?>" placeholder="Type user name" required>
                      </div>
                      <div class="w-full">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone Number" required value="<?php echo $userToUpdate['phone']; ?>">
                      </div>
                      <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="address" name="address" required value="<?php echo $userToUpdate['address']; ?>">
                      </div>
                      <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="email" required value="<?php echo $userToUpdate['email']; ?>">
                      </div>
                      <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Password" name="password" required value="<?php echo $userToUpdate['password']; ?>">
                      </div>
                      <div class="sm:col-span-2">
                        <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phân quyền</label>

                        <select id="is-admin" name="isAdmin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="1" <?php echo ($userToUpdate['role'] == 1) ? 'selected' : ''; ?>>Admin</option>
                          <option value="0" <?php echo ($userToUpdate['role'] == 0) ? 'selected' : ''; ?>>User</option>
                        </select>
                      </div>
                    </div>
                    <div class="flex items-center space-x-4">
                      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lưu thay đổi
                      </button>

                    </div>
                  </form>
                </div>
                </fỏ>
            </body>

          <?php } else {
            echo "User không tồn tại";
            // var_dump($userToUpdate);
          }
          ?>
        </div>
    </div>
    </section>
  </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>