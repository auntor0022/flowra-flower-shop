<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

    <!-- icon -->
    <script src="https://kit.fontawesome.com/52f25ae168.js" crossorigin="anonymous"></script>

    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <style>
        .roboto-font {
            font-family: "Roboto", serif;
        }
    </style>
</head>

<body class="roboto-font md:bg-[#F2F2F2]">
    <!-- header -->
    <header>
        <!-- navbar -->
        <!-- <nav class="w-full bg-white py-6">
            <div class="navbar container mx-auto">
                <div class="navbar-start">
                    <a class="btn btn-ghost font-medium text-4xl">FLOW<span class="text-[#FF8F52]">RA</span></a>
                    <div class="dropdown place-items-end">
                        <div tabindex="0" role="button" class=" lg:hidden">
                            <i class="fa-solid fa-bars text-2xl"></i>
                        </div>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                            <li><a>Home</a></li>
                            <li><a>Shop</a></li>
                            <li><a>Orders</a></li>
                            <li><a>About</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a class="font-normal text-xl">Home</a></li>
                        <li><a class="font-normal text-xl">Shop</a></li>
                        <li><a class="font-normal text-xl">Orders</a></li>
                        <li><a class="font-normal text-xl">About</a></li>
                        <li><a class="font-normal text-xl">Contact</a></li>
                    </ul>
                </div>
                <div class="navbar-end space-x-4 hidden md:block">
                    <li class="list-none"><a href="" class="text-2xl text-[#FF8F52]"><i
                                class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li class="list-none"><a href="" class="text-2xl text-[#FF8F52]"><i
                                class="fa-solid fa-user"></i></a></li>
                    <li class="list-none"><a href="" class="text-2xl text-[#FF8F52]"><i
                                class="fa-solid fa-heart"></i></a></li>
                    <li class="list-none"><a href="" class="text-2xl text-[#FF8F52]"><i
                                class="fa-solid fa-cart-shopping"></i></a></li>
                </div>
            </div>
        </nav> -->
        <nav class="w-full bg-white py-3">
            <div class="navbar max-w-[1220px] mx-auto">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </div>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                            <li><a>Home</a></li>
                            <li><a>Shop</a></li>
                            <li><a>Orders</a></li>
                            <li><a>About</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>
                    <a href="index.php" class="font-medium text-3xl md:text-4xl">FLOW<span
                            class="text-[#FF8F52]">RA</span></a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="index.html" class="font-normal text-xl">Home</a></li>
                        <li><a class="font-normal text-xl">Shop</a></li>
                        <li><a class="font-normal text-xl">Orders</a></li>
                        <li><a class="font-normal text-xl">About</a></li>
                        <li><a class="font-normal text-xl">Contact</a></li>
                    </ul>
                </div>
                <div class="navbar-end">
                    <a href="login.php" class="btn bg-[#FF8F52] text-white text-xl">Login</a>
                </div>
            </div>
        </nav>

        <!-- banner -->
        <div
            class="max-w-[1220px] mx-auto flex flex-col md:flex-row justify-center md:items-center gap-6 md:gap-0 md:justify-between py-10 md:py-20 p-3">
            <div>
                <h1 class="font-normal text-5xl md:text-6xl">Flowers, 🌻<br>
                    what the world <br> needs </h1>
                <p class="mt-9 font-normal text-[#838383] text-xl">Browse between hounders of flowers</p>
                <button class="btn bg-[#FF8F52] text-white text-lg font-normal mt-11">Discorver More <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 place-items-center  items-center gap-3  md:gap-5">
                <img src="images/banner-1.png" alt="">
                <img src="images/banner-2.png" alt="">
                <img src="images/banner-3.png" alt="">
                <img src="images/banner-4.png" alt="">
                <img src="images/banner-5.png" alt="">
                <img src="images/banner-6.png" alt="">
            </div>
        </div>
    </header>

    <!-- main -->
    <main>
        <!-- best selers section -->
        <section class="max-w-[1220px] mx-auto mt-[116px] p-3">

            <div class="flex justify-center items-center gap-5 mb-14">
                <hr class="w-[80px] md:w-[165px] bg-[#D9D9D9] h-1">
                <h1 class="font-normal text-3xl md:text-4xl">Best Selers</h1>
                <hr class="w-[80px] md:w-[165px] bg-[#D9D9D9] h-1">
            </div>


            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
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
                                <p class="font-medium text-sm md:text-base text-orange-500 cursor-pointer hover:underline">
                                    <i class="fa-solid fa-cart-shopping mr-1"></i>Add to cart
                                </p>
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

        </section>

        <!-- latest post section -->
        <section class="max-w-[1220px] mx-auto mt-[116px] p-3">
            <div class="flex justify-center items-center gap-5 mb-14">
                <hr class="w-[80px] md:w-[165px] bg-[#D9D9D9] h-1">
                <h1 class="font-normal text-3xl md:text-4xl">Lateset Post</h1>
                <hr class="w-[80px] md:w-[165px] bg-[#D9D9D9] h-1">
            </div>

            <!-- cards -->
            <div class="grid grif-cols-1 md:grid-cols-3 gap-10 md:gap-8">
                <!-- card 1 -->
                <div class="bg-white rounded-sm">
                    <div class="flex items-center justify-between p-3">
                        <img src="images/dp-latest.png" alt="" class="">
                        <p class="mr-44 font-normal text-base">Emily</p>
                        <p class="font-normal text-base text-[#838383]">2022/22/8</p>
                    </div>
                    <img src="images/latest-1.png" alt="" class="max-w-full mx-auto">
                    <h3 class="px-3 my-4 font-normal text-xl">Best flowers for inside home</h3>
                    <p class="px-3 font-normal text-base text-[#838383] mb-6">All the flowers are best for your lovly house
                        just get the one you love the most 😊</p>
                    <div class="flex justify-between items-center px-3 mb-4">
                        <div class="space-x-2">
                            <i class="fa-solid fa-heart text-[#838383] text-base"></i> 15
                            <i class="fa-solid fa-eye text-[#838383] text-base"></i> 2001
                        </div>
                        <h2 class="font-normal text-lg text-[#FF8F52]">Read more</h2>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="bg-white rounded-sm">
                    <div class="flex items-center justify-between p-3">
                        <img src="images/dp-latest.png" alt="" class="">
                        <p class="mr-44 font-normal text-base">Emily</p>
                        <p class="font-normal text-base text-[#838383]">2022/22/8</p>
                    </div>
                    <img src="images/latest-2.png" alt="" class="max-w-full mx-auto">
                    <h3 class="px-3 my-4 font-normal text-xl">Best flowers for inside office</h3>
                    <p class="px-3 font-normal text-base text-[#838383] mb-6">All the flowers are best for your lovly house
                        just get the one you love the most 😊</p>
                    <div class="flex justify-between items-center px-3 mb-4">
                        <div class="space-x-2">
                            <i class="fa-solid fa-heart text-[#838383] text-base"></i> 30
                            <i class="fa-solid fa-eye text-[#838383] text-base"></i> 3333
                        </div>
                        <h2 class="font-normal text-lg text-[#FF8F52]">Read more</h2>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="bg-white rounded-sm">
                    <div class="flex items-center justify-between p-3">
                        <img src="images/dp-latest.png" alt="" class="">
                        <p class="mr-44 font-normal text-base">Emily</p>
                        <p class="font-normal text-base text-[#838383]">2022/22/8</p>
                    </div>
                    <img src="images/latest-3.png" alt="" class="max-w-full mx-auto">
                    <h3 class="px-3 my-4 font-normal text-xl">Best flowers for inside garden</h3>
                    <p class="px-3 font-normal text-base text-[#838383] mb-6">All the flowers are best for your lovly house
                        just get the one you love the most 😊</p>
                    <div class="flex justify-between items-center px-3 mb-4">
                        <div class="space-x-2">
                            <i class="fa-solid fa-heart text-[#838383] text-base"></i> 60
                            <i class="fa-solid fa-eye text-[#838383] text-base"></i> 2222
                        </div>
                        <h2 class="font-normal text-lg text-[#FF8F52]">Read more</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- comments section -->
        <section class="max-w-[1220px] mx-auto mt-[116px] p-3">
            <div class="flex justify-center items-center gap-5 mb-14">
                <hr class="w-[80px] md:w-[165px] bg-[#D9D9D9] h-1">
                <h1 class="font-normal text-3xl md:text-4xl">Comments</h1>
                <hr class="w-[80px] md:w-[165px] bg-[#D9D9D9] h-1">
            </div>

            <!-- cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- card 1 -->
                <div class="flex gap-4 bg-white py-3 px-7">
                    <div class="w-[230px]">
                        <img src="images/comments-dp-1.png" alt="" class="">
                    </div>
                    <div>
                        <h3 class="font-medium text-2xl mt-4 mb-3">Atena</h3>
                        <p class="font-normal text-xl text-[#838383] mb-4">i’m buying flower from them every weak, always fresh flowers and beutiful😍🌻... love’em so nuch..keep going 💯💯</p>
                        <div class="rating mb-7">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-100" />
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="flex gap-4 bg-white py-3 px-7">
                    <div class="w-[170px]">
                        <img src="images/comments-dp-2.png" alt="" class="">
                    </div>
                    <div>
                        <h3 class="font-medium text-2xl mt-4 mb-3">Pop Boy</h3>
                        <p class="font-normal text-xl text-[#838383] mb-4">i get flowers from them for my baby mama, she love them so much 🔥💯</p>
                        <div class="rating mb-7">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="flex gap-4 bg-white py-3 px-7">
                    <div class="w-[170px]">
                        <img src="images/comments-dp-3.png" alt="" class="">
                    </div>
                    <div>
                        <h3 class="font-medium text-2xl mt-4 mb-3">Atena</h3>
                        <p class="font-normal text-xl text-[#838383] mb-4">Drip too hard, don't stand too close
                            You gon' fuck around and drown off this wave.
                        </p>
                        <div class="rating mb-7">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-100" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-100" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <footer class="w-full bg-[#454545] mt-[116px] p-5">
        <div class="max-w-[1220px] mx-auto flex flex-col md:flex-row md:justify-between md:items-center gap-8 md:gap-0 py-14">
            <div>
                <a href="index.html" class="font-medium text-3xl md:text-4xl text-white">FLOW<span
                        class="text-[#FF8F52]">RA</span></a>
                <p class="font-normal text-base text-[#D9D9D9] mt-3">Some random stuff about flower shop and <br> some more info cuz this box had to get fill <br>
                    Some random stuff about flower shop and <br> some more info cuz this box had to get fill <br>
                    Some random stuff about flower shop and <br> some more info cuz this box had to get fill</p>
            </div>
            <div>
                <h1 class="font-normal text-xl text-white mb-5">Links</h1>
                <ul class="space-y-1">
                    <li><a href="" class="font-normal text-base text-[#D9D9D9]">Shop</a></li>
                    <li><a href="" class="font-normal text-base text-[#D9D9D9]">Home</a></li>
                    <li><a href="" class="font-normal text-base text-[#D9D9D9]">Orders</a></li>
                    <li><a href="" class="font-normal text-base text-[#D9D9D9]">About</a></li>
                    <li><a href="" class="font-normal text-base text-[#D9D9D9]">Login</a></li>
                </ul>
            </div>
            <div class="space-y-6">
                <h3 class="font-normal text-xl text-white">Contact</h3>
                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-location-dot text-xl text-[#D9D9D9]"></i>
                    <h3 class="font-normal text-sm text-[#D9D9D9]">26985 Brighton Lane, Lake Forest, CA</h3>
                </div>
                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-at text-xl text-[#D9D9D9]"></i>
                    <h3 class="font-normal text-sm text-[#D9D9D9]">support@Flowers.com</h3>
                </div>
                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-phone text-xl text-[#D9D9D9]"></i>
                    <h3 class="font-normal text-sm text-[#D9D9D9]">+1 236 5489</h3>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>