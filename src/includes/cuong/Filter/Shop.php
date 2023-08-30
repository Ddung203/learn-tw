<form method="get" class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
    <h4 class="text-[14px] font-medium pb-3">Nhà phát hành</h4>
    <?php
    $sql = "select * from shop";
    $query = mysqli_query($mysqli, $sql);

    $q = isset($_GET["q"]) ? $_GET["q"] : null;
    if ($q) {
        echo "<input type=\"hidden\" name=\"q\" value=\"$q\">";
    }
    $bookTypeId = isset($_GET["booktypeid"]) ? $_GET["booktypeid"] : null;
    if ($bookTypeId) {
        echo "<input type=\"hidden\" name=\"booktypeid\" value=\"$bookTypeId\">";
    }

    $minPrice = isset($_GET["minPrice"]) ? $_GET["minPrice"] : null;
    if ($minPrice) {
        echo "<input type=\"hidden\" name=\"minPrice\" value=\"$minPrice\">";
    }

    $maxPrice = isset($_GET["maxPrice"]) ? $_GET["maxPrice"] : null;
    if ($maxPrice) {
        echo "<input type=\"hidden\" name=\"maxPrice\" value=\"$maxPrice\">";
    }
    $star = isset($_GET["star"]) ? $_GET["star"] : null;
    if ($star) {
        echo "<input type=\"hidden\" name=\"star\" value=\"$star\">";
    }
    while ($result = mysqli_fetch_assoc($query)) {
        $ShopID = $result["ShopID"];
        $checked = isset($_GET["ShopID"]) && $_GET["ShopID"] == $ShopID;
        echo " <div class=\"flex items-center gap-2 mb-3\">
              <input  onChange={form.submit()}  type=\"radio\" 
              name=\"ShopID\" 
              id=" . $result["ShopID"] . " 
              value=\"" . $result["ShopID"] . "\" 
              " . ($checked ? "checked" : "") . "
              />
              <span class=\"text-[12px] font-normal text-[#38383d]\">" . $result["NameShop"] . "</span>
              </div>";
    }

    ?>
</form>