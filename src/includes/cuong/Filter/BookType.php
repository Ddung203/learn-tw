<?php


$sql = "select * from booktype";
$query = mysqli_query($mysqli, $sql);
$param = null;


$q = isset($_GET["q"]) ? $_GET["q"] : null;
if (!is_null($q)) {
    $param .= "&q=$q";
}
$ShopID = isset($_GET["ShopID"]) ? $_GET["ShopID"] : null;
if (!is_null($ShopID)) {
    $param .= "&ShopID=$ShopID";
}
$minPrice = isset($_GET["minPrice"]) ? $_GET["minPrice"] : null;
if (!is_null($minPrice)) {
    $param .= "&minPrice=$minPrice";
}
$maxPrice = isset($_GET["maxPrice"]) ? $_GET["maxPrice"] : null;
if (!is_null($maxPrice)) {
    $param .= "&maxPrice=$maxPrice";
}
$star = isset($_GET["star"]) ? $_GET["star"] : null;
if (!is_null($star)) {
    $param .= "&star=$star";
}

echo "<div class=\"border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3\">
<h4 class=\"text-[14px] font-medium pb-3\">Danh Mục Sản Phẩm</h4>";
echo " <a href=\"index.php\" class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> Trang Chủ </a>";

while ($result = mysqli_fetch_assoc($query)) {
    echo " <a href=\"index.php?booktypeid=" . $result["BookTypeID"] . "$param" . "\"
     class=\"text-[12px] font-normal flex text-[#38383d] pb-3\"> " . $result["BookTypeName"] . "</a>";
}
echo "</div>";
