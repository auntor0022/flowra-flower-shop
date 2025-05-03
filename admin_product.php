<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = mysqli_real_escape_string($conn, $_POST['price']);
   $details = mysqli_real_escape_string($conn, $_POST['details']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folter = 'uploaded_img/' . $image;

   $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

   if (mysqli_num_rows($select_product_name) > 0) {
      $message[] = 'product name already exist!';
   } else {
      $insert_product = mysqli_query($conn, "INSERT INTO `products`(name, details, price, image) VALUES('$name', '$details', '$price', '$image')") or die('query failed');

      if ($insert_product) {
         if ($image_size > 2000000) {
            $message[] = 'Image size is too large!';
         } else {
            move_uploaded_file($image_tmp_name, $image_folter);
            $message[] = 'Product added successfully!';
         }
      }
   }
}

if (isset($_GET['delete'])) {

   $delete_id = $_GET['delete'];
   $select_delete_image = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($select_delete_image);
   unlink('uploaded_img/' . $fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
   // mysqli_query($conn, "DELETE FROM `wishlist` WHERE pid = '$delete_id'") or die('query failed');
   // mysqli_query($conn, "DELETE FROM `cart` WHERE pid = '$delete_id'") or die('query failed');
   header('location:admin_product.php');
}

?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>


   <!-- DaisyUi and Tailwindcss -->
   <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
      tailwind.config = {
         theme: {
            extend: {
               colors: {
                  clifford: '#da373d',
                  'border-color': '#D9D9D9',
               }
            }
         }
      }
   </script>

</head>

<body class="container mx-auto">




   <section class="my-12 border-2 border-black p-4 w-1/2 mx-auto">

      <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center">
         <h3 class="font-bold text-4xl mb-8">Add new product</h3>
         <input type="text" class="border border-black input" required placeholder="enter product name" name="name">
         <br>
         <input type="number" min="0" class="input border border-black" required placeholder="enter product price" name="price">
         <br>
         <textarea name="details" class="rounded-lg p-4 border border-black" required placeholder="enter product details" cols="30"
            rows="10"></textarea>
         <br>
         <input type="file" accept="image/jpg, image/jpeg, image/png" required class="p-3 rounded-lg cursor-pointer border border-black" name="image">
         <br>
         <input type="submit" value="Add product" name="add_product" class="btn bg-[#FF8F52] text-white">
         <br>

         <?php
         if (isset($message)) {
            foreach ($message as $msg) {
               echo '<div class="alert text-[#FF8F52] bg-white shadow-lg mb-4 w-1/2 mx-auto text-center">' . $msg . '</div>';
            }
         }
         ?>
      </form>

   </section>

   <section class="mb-20">

      <div>

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
         ?>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
               <?php
               while ($fetch_products = mysqli_fetch_assoc($select_products)) {
               ?>
                  <!-- single product card -->
                  <div class="bg-white rounded-lg p-3 md:p-4 shadow-lg">
                     <img class="mx-auto w-full object-cover rounded" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                     <h3 class="mt-3 font-semibold text-lg md:text-xl mb-3"><?php echo $fetch_products['name']; ?></h3>
                     <div class="flex justify-between items-center">
                        <p class="font-medium text-sm md:text-base text-gray-600"><?php echo $fetch_products['price']; ?> Taka</p>
                        <a href="/Flowra/admin_product.php?delete=<?php echo $fetch_products['id']; ?>"
                           class="btn bg-[#FF8F52] text-white"
                           onclick="return confirm('Are you sure you want to delete this product?');">
                           Delete
                        </a>

                     </div>
                  </div>
               <?php
               }
               ?>
            </div>
         <?php
         } else {
            echo '<p class="text-center text-gray-500 mt-8">No products added yet!</p>';
         }
         ?>
      </div>

   </section>

   <!-- <script src="js/admin_script.js"></script> -->

</body>

</html>