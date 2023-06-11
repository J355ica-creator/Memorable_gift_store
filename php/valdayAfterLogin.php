<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Picture/awan.png" class="icon" type="images" sizes="32x32">
        <title>Memorable Gift Store</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans+TC&family=PT+Serif&family=Roboto:wght@300&family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <link rel="stylesheet" type="text/css" href="../css/image-grid.css">
    <body>
        <!--menu website-->
        <div>
            <a href="valday.php"></a>
        </div>
        <!--loading-->
        <div class="loader">
            <div></div>
        </div>
        <!-- navigation bar -->
        <div class="main">
        <!-- navigation bar -->
            <div class="up">
                <nav class="navbar">
                    <a href="afterLogin.php">Home</a>
                    <a href="afterLogin.php">About</a>
                    <a href="afterLogin.php">Why</a>
                    <a href="afterLogin.php">Box</a>
                    <a href="afterLogin.php">Contact</a>
                    <a href="orders.php">Orders</a>
                    <a href="stuff.php"><i class="fa fa-user" style="color:#fff;"></i></a>
                </nav>
            <!-- navigation bar end -->

            <!-- floating button start -->
            <a href="./og.php">
            <button class="btn-float">
                <img src="../Picture/trolley.png" alt="cart" width="43px">
                <span>checkout</span>
            </button>
            </a>
            <!-- floating button end -->

            <!--banner start-->
            <section class="banner-3">
                <h2>Memorable Gift Store</h2>
            </section>
            <!--banner end-->
            
            <!--isi start-->
            <section class="content-area">
                <h2>Valentine Gift</h2>
                    <p>Memorable Gift Store telah menyiapkan beberapa paket hampers khusus untuk kalian berikan pada orang tersayang pada moment Valentine!  
                    Setiap tahun Memorable Gift Store selalu mencari sesuatu yang baru untuk menyambut moment besar, salah satunya adalah Valentine day yang diperingati setiap 14 Februari.
                    <br><br>Gift box Valentine day berisi:
                    <br>1. Cokelat batang
                    <br>2. Boneka
                    <br>3. Syal multifungsi
                    <br>4. Notebook mini
                    <br>5. Buket bunga mini
                    <br>6. Bubble candle
                    <br>7. FREE greeting card atau kartu ucapan yang bisa dicustom sesuai dengan keinginan
                    <br>Dengan harga Rp 58.000,00. Kalian mampu membeli box berisi hadiah perayaan kasih sayang 💝</p>
                
                <!--gallery start-->
                <div class="gallery">
                    <div>
                        <img src="../Picture/book.png" alt="">
                    </div>
                    <div>
                        <img src="../Picture/doll.png" alt="">
                    </div>
                    <div class="bs">
                        <img src="../Picture/box.png" alt="">
                    </div>
                    <div class="bs">
                        <img src="../Picture/kotak.jpeg" alt="">
                    </div>
                    <div>
                        <img src="../Picture/flower.png" alt="">
                    </div>
                    <div>
                        <img src="../Picture/cotton.png" alt="">
                    </div>
                <!--gallery end-->
            </section>
            <!--isi section end-->
            
            <!--footer start-->
            <section>
                <footer class="footer">
                    <div class="footer-content">
                         <div class="footer-section">
                             <h2>Follow & ask us in</h2>  
                              
                             <div class="socials">
                                 <a href="https://wa.me/6289624082060" target="_blank"><i class="fa whatsapp"><ion-icon name="logo-whatsapp"></ion-icon></i></a>
                                 <a href="https://instagram.com/memorablegift_store?igshid=ZDdkNTZiNTM=" target="_blank"><i class="fa instagram"><ion-icon name="logo-instagram"></ion-icon></i></a>
                                 <a href="https://www.facebook.com/people/Memorable-Gift-Store/100084152802214/" target="_blank"><i class="fa facebook"><ion-icon name="logo-facebook"></ion-icon></i></a>
                             </div>
                             <div class="links">
                                 <a href="index.php">Home</a>
                                 <a href="index.php">About</a>
                                 <a href="index.php">Why</a>
                                 <a href="index.php">Box</a>
                                 <a href="index.php">contact</a>
                                 <a href="orders.php">Orders</a>
                                 <a href="stuff.php"><i class="fa fa-user" style="color:#fff;"></i></a>
                             </div>
                             <div class="credit">
                                 <p>Created by <a href="">keltmh</a> | &copy; 2023</p>
                             </div>   
                         </div>
                     </div>   
                 </footer>
            </section>
            <!--footer end-->
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- footer end -->
        <script>
            $(window).on('load',function(){
                $(".loader").fadeOut(1000);
                $(".main").fadeIn(1000);
            })
        </script>
    </body>
</html>