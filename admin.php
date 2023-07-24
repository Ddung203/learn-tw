<?php
include("auth_admin.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/de7be06a7c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT -->
    <div class="sidebar min-h-screen basis-[250px] w-[234px] px-[8px] bg-[#343a40]">
      <div class="user-panel flex pb-4 my-4 gap-[10px]">
        <div class="image w-[40px] rounded-full flex items-center justify-center overflow-hidden">
          <a href="admin.php"><img class="block w-full" src="https://upload.wikimedia.org/wikipedia/commons/4/45/IOS_14_Logo.png" alt="Nhóm 14" /></a>

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
        <!-- List -->
        <!-- Dashboard -->
        <ul class="feature flex flex-col">
          <li class="nav-item flex w-full">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-house" aria-hidden="true"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>

          <!-- Quản lý danh mục -->
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
          <li class="nav-item flex w-full">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
              <p>
                Quản lý sản phẩm
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
          <!-- Quản lý đơn hàng -->
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
            <a href="logout.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
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
            <span>Xin chào, <?php echo $_SESSION["hoten"] ?></span>
          </li>
          <li><i class="fa-regular fa-bell"></i></li>
        </ul>
      </nav>

      <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
          Dashboard
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="#">Home</a> / <a href="#">Dashboard</a></span>
      </section>
      <section class="content flex flex-col gap-3">
        <div class="card bg-white p-8">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            Start creating your amazing application!
          </div>
          <!-- /.card-body -->
          <div class="card-footer">Footer</div>
          <!-- /.card-footer-->
        </div>
        <div class="card bg-white p-8">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            Start creating your amazing application!
          </div>
          <!-- /.card-body -->
          <div class="card-footer">Footer</div>
          <!-- /.card-footer-->
        </div>
        <div class="card bg-white p-8">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            Start creating your amazing application!
          </div>
          <!-- /.card-body -->
          <div class="card-footer">Footer</div>
          <!-- /.card-footer-->
        </div>
        <div class="card bg-white p-8">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            Start creating your amazing application!
          </div>
          <!-- /.card-body -->
          <div class="card-footer">Footer</div>
          <!-- /.card-footer-->
        </div>
        <div class="card bg-white p-8">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="card-body">Start creating your amazik</div>
          <!-- /.card-body -->
          <div class="card-footer">Footer</div>
          <!-- /.card-footer-->
        </div>
        <div class="card bg-white p-8">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            Start creating your amazing application!Start creating your
            amazing application!Start creating your amazing application!Start
            creating your amazing application!Start creating your amazing
            application!Start creating your amazing application!Start creating
            your amazing application!Start creating your amazing
            application!Start creating your amazing application!Start creating
            your amazing application!Start creating your amazing
            application!Start creating your amazing application!Start creating
            your amazing application!
          </div>
          <!-- /.card-body -->
          <div class="card-footer">Footer</div>
          <!-- /.card-footer-->
        </div>
      </section>
    </div>
  </div>
</body>

</html>