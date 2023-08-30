<?php
require "./dung_user.controller.php";
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

  <!-- CDN tailwind  -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT -->

    <?php
    include "./layout/navbar.php"
    ?>

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
          Dashboard
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
      </section>

      <!-- SECTION CONTENT 1 -->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
          <!-- Item 1 -->
          <div class="card animate__animated animate__fadeInDown bg-[#1f2937] rounded-[10px] overflow-hidden">
            <div class="card-body flex justify-between p-4 m-[10px]">
              <div class="basis-2/3 text-[#bec8d5] ">
                <p class="text-[32px] font-bold pt-[3px]"><?php echo getDataForDashboard($mysqli, "users");  ?></p>
                <p class="pr-[15px]">Số lượng <br> tài khoản</p>
              </div>
              <div class="basis-1/3 ">
                <button class="p-4 px-[17px] bg-[#253041] rounded-3xl">
                  <a href="./user_list.php"><i class="fa-solid fa-users-gear text-[32px] text-[#bec8d5]"></i></a>
                </button>
              </div>
            </div>
            <div class="card-footer bg-[#253041] text-[#bec8d5] py-[10px] px-[20px]">
              <a href="./user_list.php">View all <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
          </div>
          <div class="card animate__animated animate__fadeInDown bg-[#1f2937] rounded-[10px] overflow-hidden">
            <div class="card-body flex justify-between p-4 m-[10px]">
              <div class="basis-2/3 text-[#bec8d5] ">
                <p class="text-[32px] font-bold pt-[3px]">32</p>
                <p class="pr-[15px]">Pending Order</p>
              </div>
              <div class="basis-1/3 ">
                <button class="p-4 px-[17px] bg-[#253041] rounded-3xl">
                  <a href="#"><i class="fa-regular fa-gem text-[32px] text-[#bec8d5]"></i></a>
                </button>
              </div>
            </div>
            <div class="card-footer bg-[#253041] text-[#bec8d5] py-[10px] px-[20px]">
              <a href="#">View all <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
          </div>
          <div class="card animate__animated animate__fadeInDown bg-[#1f2937] rounded-[10px] overflow-hidden">
            <div class="card-body flex justify-between p-4 m-[10px]">
              <div class="basis-2/3 text-[#bec8d5] ">
                <p class="text-[32px] font-bold pt-[3px]">32</p>
                <p class="pr-[15px]">Pending Order</p>
              </div>
              <div class="basis-1/3 ">
                <button class="p-4 px-[17px] bg-[#253041] rounded-3xl">
                  <a href="#"><i class="fa-regular fa-gem text-[32px] text-[#bec8d5]"></i></a>
                </button>
              </div>
            </div>
            <div class="card-footer bg-[#253041] text-[#bec8d5] py-[10px] px-[20px]">
              <a href="#">View all <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
          </div>
          <div class="card animate__animated animate__fadeInDown bg-[#1f2937] rounded-[10px] overflow-hidden">
            <div class="card-body flex justify-between p-4 m-[10px]">
              <div class="basis-2/3 text-[#bec8d5] ">
                <p class="text-[32px] font-bold pt-[3px]">32</p>
                <p class="pr-[15px]">Pending Order</p>
              </div>
              <div class="basis-1/3 ">
                <button class="p-4 px-[17px] bg-[#253041] rounded-3xl">
                  <a href="#"><i class="fa-regular fa-gem text-[32px] text-[#bec8d5]"></i></a>
                </button>
              </div>
            </div>
            <div class="card-footer bg-[#253041] text-[#bec8d5] py-[10px] px-[20px]">
              <a href="#">View all <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./Item1 -->
        </div>
      </section>

      <section>
        <div class="grid grid-cols-12 gap-6 mt-5">
          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
              <div class="p-5 box">
                <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-[28px] h-[28px] text-primary">
                    <circle cx="8" cy="21" r="1"></circle>
                    <circle cx="19" cy="21" r="1"></circle>
                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                  </svg>
                  <div class="ml-auto">
                    <div class="cursor-pointer   bg-success py-[3px] flex rounded-full text-white text-xs pl-2 pr-1 items-center font-medium"> 33% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-4 h-4 ml-0.5">
                        <polyline points="18 15 12 9 6 15"></polyline>
                      </svg></div>
                  </div>
                </div>
                <div class="mt-6 text-3xl font-medium leading-8">4.710</div>
                <div class="mt-1 text-base text-slate-500">Item Sales</div>
              </div>
            </div>
          </div>
          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
              <div class="p-5 box">
                <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-[28px] h-[28px] text-pending">
                    <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                    <line x1="2" y1="10" x2="22" y2="10"></line>
                  </svg>
                  <div class="ml-auto">
                    <div class="cursor-pointer bg-danger py-[3px] flex rounded-full text-white text-xs pl-2 pr-1 items-center font-medium"> 2% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-4 h-4 ml-0.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                      </svg></div>
                  </div>
                </div>
                <div class="mt-6 text-3xl font-medium leading-8">3.721</div>
                <div class="mt-1 text-base text-slate-500">New Orders</div>
              </div>
            </div>
          </div>
          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
              <div class="p-5 box">
                <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-[28px] h-[28px] text-warning">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                  <div class="ml-auto">
                    <div class="cursor-pointer  bg-success py-[3px] flex rounded-full text-white text-xs pl-2 pr-1 items-center font-medium"> 12% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-4 h-4 ml-0.5">
                        <polyline points="18 15 12 9 6 15"></polyline>
                      </svg></div>
                  </div>
                </div>
                <div class="mt-6 text-3xl font-medium leading-8">2.149</div>
                <div class="mt-1 text-base text-slate-500"> Total Products </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="relative zoom-in before:content-[''] before:w-[90%] before:shadow-[0px_3px_20px_#0000000b] before:bg-slate-50 before:h-full before:mt-3 before:absolute before:rounded-md before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/70">
              <div class="p-5 box">
                <div class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-[28px] h-[28px] text-success">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <div class="ml-auto">
                    <div class="cursor-pointer  bg-success py-[3px] flex rounded-full text-white text-xs pl-2 pr-1 items-center font-medium"> 22% <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-1.5 w-4 h-4 ml-0.5">
                        <polyline points="18 15 12 9 6 15"></polyline>
                      </svg></div>
                  </div>
                </div>
                <div class="mt-6 text-3xl font-medium leading-8">152.040</div>
                <div class="mt-1 text-base text-slate-500"> Unique Visitor </div>
              </div>
            </div>
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