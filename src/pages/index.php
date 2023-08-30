<?php
include "../database/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="./dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/css/tippyCustom.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div>
    <?php
    include "../includes/header.php"
    ?>

  </div>
  <div class="bg-[#efefef] py-4">
    <div class="w-[1270px] m-auto">
      <div class="grid grid-cols-5 gap-3">
        <!-- ben trai -->
        <div class="bg-white">
          <!-- Danh mục sản phẩm -->
          <?php
          include_once "./../includes/cuong/Filter/BookType.php"
          ?>
          <!-- kết thúc danh mục sản phẩm -->
          <!-- Bắt đầu đánh giá -->
          <?php
          include_once "./../includes/cuong/Filter/Rating.php"
          ?>
          <!-- kết thúc đánh giá -->

          <!-- Bắt đầu  giá -->
          <?php
          include_once "./../includes/cuong/Filter/Price.php"
          ?>

          <!-- kết thúc  giá -->

          <!-- Bắt đầu shop  -->
          <?php
          include_once "./../includes/cuong/Filter/Shop.php"
          ?>
          <!-- kết thúc  shop  -->

        </div>

        <!--  bên phải -->
        <div class="col-span-4">
          <div class="bg-white">
            <div class="px-4 py-3 inline  text-gray-700 text-[20px] font-bold">
              Nhà Sách Tiki
            </div>


          </div>

          <!-- Bắt đầu product -->
          <!-- 1 item -->
          <?php
          include "./productList.php"
          ?>


          <!-- pagination -->

        </div>
      </div>
    </div>
  </div>
</body>

</html>