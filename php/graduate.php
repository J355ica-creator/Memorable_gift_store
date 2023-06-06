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

    </head>
    <link rel="stylesheet" type="text/css" href="../css/image-grid.css">
    <body>
        <!--menu website-->
        <div>
            <a href="graduate.php"></a>
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
                    <a href="index.php">Home</a>
                    <a href="index.php">About</a>
                    <a href="index.php">Why</a>
                    <a href="index.php">Box</a>
                    <a href="index.php">Contact</a>
                    <a href="orders.php">Orders</a>
                </nav>
            <!-- navigation bar end -->

            <!-- floating button start -->
            <a href="./register.php">
            <button class="btn-float">
                <img src="../Picture/trolley.png" alt="cart" width="43px">
                <span>checkout</span>
            </button>
            </a>
            <!-- floating button end -->

            <!--banner start-->
            <section class="banner">
                <h2>Memorable Gift Store</h2>
            </section>
            <!--banner end-->
            
            <!--isi start-->
            <section class="content-area">
                <h2>Graduate Gift</h2>
                <p>Yes! This is the most awaited day, tidak terasa hari yang ditunggu sudah tiba dimana seseorang akan menyelesaikan studinya dan mendapatkan gelar.
                    gradution day yang merupakan upacara peneguhan atau pelantikan bagi seseorang yang telah menempuh pendidikan atau kelulusan mahasiswa.
                    Memorable Gift Store menyiapkan paket hampers khusus untuk kalian berikan kepada teman, keluarga ataupun partner sebagai ucapan selamat atas kerja keras mereka selama ini. 
                    <br><br>Gift box Graduation day berisi: 
                    <br>1. Boneka wisuda (cantumkan warna rekomendasi cokelat dan cream)
                    <br>2. Syal multifungsi
                    <br>3. Notebook mini
                    <br>4. Buket bunga mini
                    <br>5. Bubble candle 
                    <br>6. FREE greeting card atau kartu ucapan yang bisa dicustom sesuai dengan keinginan
                    <br>Dengan harga Rp 45.000,00. Kalian mampu membeli box berisi hadiah perayaan kelulusan 💝</p>

                    <!--gallery start-->
                    <div class="gallery">
                        <div>
                            <img src="../Picture/cotton.png" alt="">
                        </div>
                        <div>
                            <img src="../Picture/book.png" alt="">
                        </div>
                        <div class="bs">
                            <img src="../Picture/box-gr.png" alt="">
                        </div>
                        <div class="bs">
                            <img src="../Picture/gr.png" alt="">
                        </div>
                        <div>
                            <img src="../Picture/flower.png" alt="">
                        </div>
                        <div>
                            <img src="../Picture/bear.png" alt="">
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