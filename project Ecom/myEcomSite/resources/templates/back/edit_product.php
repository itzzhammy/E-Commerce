
<?php


if(isset($_GET['id'])) {


$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$product_title          = escape_string($row['product_title']);
$product_category_id    = escape_string($row['cat_id']);
$product_brand_id       = escape_string($row['brand_id']);
$product_price          = escape_string($row['product_price']);
$product_quantity       = escape_string($row['product_quantity']);
$product_description    = escape_string($row['product_description']);
$product_image          = escape_string($row['product_image']);
$product_img_s1         = escape_string($row['product_img_s1']);
$product_img_s2         = escape_string($row['product_img_s2']);




$product_image = display_image($row['product_image']);

$product_img_s1  = display_image($row['product_img_s1']);

$product_img_s2  = display_image($row['product_img_s2']);



    }


update_product();



}





 ?>




<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Edit Product
</h1>
</div>



<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">

    </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control" size="60" value="<?php echo $product_price; ?>">
      </div>
    </div>



  <!--  <div class="form-group">
           <label for="product-title">Product Short Description</label>
      <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"><?php// echo $short_desc; ?></textarea>
    </div>
-->



</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">


     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>

        <select name="cat_id" id="" class="form-control">


            <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>

            <?php show_categories_add_product_page(); ?>

        </select>


</div>





    <!-- Product Brands-->
    <div class="form-group">
         <label for="product-title">Product Brand</label>

        <select name="brand_id" id="" class="form-control">


            <option value="<?php echo $product_brand_id; ?>"><?php echo show_product_brand_title($product_brand_id); ?></option>

            <?php show_brands_add_product_page(); ?>

        </select>


  </div>



    <div class="form-group">
      <label for="product-title">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
    </div>


<!-- Product Tags -->


   <!--  <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div>
 -->
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file"> <br>

        <img width='200' src="../../resources/<?php echo $product_image; ?>" alt="">

    </div>

    <div class="form-group">
        <label for="product-title">Product Slider Image 1</label>
        <input type="file" name="file2"> <br>

        <img width='200' src="../../resources/<?php echo $product_img_s1; ?>" alt="">

    </div>
         <div class="form-group">
          <label for="product-title">Product Slider Image 2</label>
          <input type="file" name="file3"> <br>

          <img width='200' src="../../resources/<?php echo $product_img_s2; ?>" alt="">

      </div>

</aside><!--SIDEBAR-->



</form>
