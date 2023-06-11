<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Picture/awan.png" class="icon" type="images" sizes="32x32">
        <title>Memorable Gift Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans+TC&family=PT+Serif&family=Roboto:wght@300&family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <link rel="stylesheet" href="../css/style.css">
    <body>

        <!-- navigation bar -->
        <div class="up">
            <nav class="navbar">
                <a href="#home">Home</a> &emsp; &ensp; &nbsp; &nbsp;
                <a href="#about">About</a> &emsp; &ensp; &nbsp; &nbsp;
                <a href="#why">Why</a> &emsp; &ensp; &nbsp; &nbsp;
                <a href="#item">Box</a> &emsp; &ensp; &nbsp; &nbsp;
                <a href="#contact">Contact</a> &emsp; &ensp; &nbsp; &nbsp;
                <a href="orders.php">Orders</a> &emsp; &ensp; &nbsp; &nbsp;
                <a href="stuff.php"><i class="fa fa-user" style="color:#fff;"></i></a>
            </nav>
        </div>
        <!-- navigation bar end -->

        <!-- floating button start -->
        <a href="./cart.php">
            <button class="btn-float">
                <img src="../Picture/trolley.png" alt="cart" width="43px">
                <span>checkout</span>
            </button>
        </a>
        <!-- floating button end -->

        <!--hero section start-->
        <section class="hero" id="home">
            <main class="content">
                <img class="heros" src="../Picture/home.png" alt="">
                <button><a href="https://wa.me/6289624082060" target="_blank" class="cta">Buy Now</a></button>
            </main>
        </section>
        <!--hero section end-->

        <!--pop up start-->
        <div class="popup">
            <div class="contentbox">
                <div class="close"></div>
                <div class="imgbx">
                    <img src="../Picture/gift.png" alt="">
                </div>
                <div class="konten">
                    <div>
                        <h3>Buruan</h3>
                        <h2>FREE<span> ongkir</span></h2>
                        <p>Hanya untuk 10 orang tercepat</p>
                        <a href="https://shopee.co.id/memorablegiftstor3" target="_blank">Get set</a>
                    </div>
                </div>
            </div>
        </div>

        <!--automatic show popup after 5s of page load-->
        <script>
            const popup = document.querySelector('.popup');
            const close = document.querySelector('.close');
            
            window.onload = function(){
                setTimeout(function(){
                    popup.style.display = "block";

                    //add some time delay to show page
                }, 5000)
            }

            close.addEventListener('click', () => {
                popup.style.display = "none";
            })
        </script>
        <!--pop up end-->

        <!--about section start-->
        <section id="about" class="about">
            <h2>Siapakah kami?</h2>

            <div class="row">
                <div class="about-img">
                    <img src="../Picture/awan.png" alt="" width="400px" height="350px">
                </div>
                <div class="content">
                    <p>Memorable Gift Store adalah penyedia hampers atau hadiah untuk diberikan kepada teman, keluarga ataupun pacar dan mempunyai kesan meninggalkan memory bagi orang-orang yang diberi hadiah dari Memorable Gift Store.</p>
                    <p>Di memorable gift store tidak hanya ada hadiah untuk ulang tahun namun juga ada hadiah celebration bahkan ada hadiah valentine juga loh! Selain itu, kalian dapat memilih custom warna dan membuat kartu ucapan. Yuk lihat selengkapnya ke Memorable Gift Store🤩
                </div>
            </div>
        </section>
        <!--about section end-->

        <!--why section start-->
        <section id="why" class="why">
            <h2>Mengapa harus memilih memorable gift?</h2>

            <div class="row">
                <div class="why-img">
                    <img src="../Picture/why.png" alt="" width="400px" height="350px" float="left">
                </div>
            <div class="ct">
                <p>Kalau pilih kami, sudah pasti ramah dikantong apalagi terjangkau & berkualitas lagi. Kami akan memberikan Harga terbaik kepada kalian.</p>
                <p>Waktu udah kepepet, panik belum siapin hadiah? Jangan khawatir. Layanan kami selalu tepat waktu. kalian bisa mengandalkan kami sebagai partner bisnis.</p>
                <p>Tenang saja Pengiriman kami cepat, luas, serta menjangkau seluruh pelosok nusantara. Kabar baiknya, kalau Anda di wilayah Pontianak kami beri ONGKIR GRATIS</p>
            </div>
        </section>
        <!--why section end-->
        
        <!--item section start-->
        <section id="item" class="item">
            <h2>Hampers choices</h2>

            <div class="card">
                <figure class="content1">
                    <div class="image"><img src ="../Picture/graduation.png" /></div>
                    <figcaption class="fig">
                        <h3>Graduation Gift</h3>
                        <p>Make your friends, family, or partner happy by giving them graduation's gift 🎓</p>
                    </figcaption>
                    <a href="graduateAfterLogin.php">read more</a>
                </figure>
                <figure class="content1">
                    <div class="image"><img src ="../Picture/hbday.png" /></div>
                    <figcaption class="fig">
                        <h3>Birthday Gift</h3>
                        <p>Are you confused about giving gifts to your beloved ones? 😘</p>
                    </figcaption>
                    <a href="hbdayAfterLogin.php">read more</a>
                </figure>
                <figure class="content1">
                    <div class="image"><img src ="../Picture/valday.png" /></div>
                    <figcaption class="fig">
                        <h3>Valentine Gift</h3>
                        <p>Surprise for loved ones by giving sweet gifts like chocolates ❤️</p>
                    </figcaption>
                    <a href="valdayAfterLogin.php">read more</a>
                </figure>
            </div>
        </section>
        <!--item section end-->

        <!--contact section start-->
        <section id="contact" class="contact">
            <h2>Hubungi kami</h2>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8138737287436!2d109.37174251355768!3d-0.08554129993758756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5a0ba26f7d89%3A0xd0a0e0812a60ffc3!2s12b%2C%20Jl.%20Pd.%20Indah%20Lestari%20Jl.%20Dahlia%202%20No.D8%2C%20RW.4%2C%20Sungai%20Raya%2C%20Kec.%20Sungai%20Raya%2C%20Kabupaten%20Kubu%20Raya%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1679326616892!5m2!1sid!2sid" height="500" width="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                <form action="">
                <div class="input-group">
                    <ul class="info-detail">
                        <li>
                            <i class="wa"><ion-icon name="logo-whatsapp"></ion-icon></i><a href="https://wa.me/6289624082060" target="_blank">&emsp; &emsp;089624082060</a>
                        </li>
                        <li>
                            <i class="insta"><ion-icon name="logo-instagram"></ion-icon></i><a href="https://instagram.com/memorablegift_store?igshid=ZDdkNTZiNTM=" target="_blank">&emsp; &emsp;Memorablegift_store</a>
                        </li>
                        <li>
                            <i class="fb"><ion-icon name="logo-facebook"></ion-icon></i><a href="https://www.facebook.com/people/Memorable-Gift-Store/100084152802214/" target="_blank">&emsp; &emsp;Memorable Gift Store</a>
                        </li>
                     </ul>
                </div>
            </form>
            </div>
        </section>
        <!--contact section end-->
        
        <!-- footer -->
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
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#why">Why</a>
                        <a href="#item">Box</a>
                        <a href="#contact">contact</a>
                        <a href="orders.php">Orders</a>
                    </div>
                    <div class="credit">
                        <p>Created by <a href="">keltmh</a> | &copy; 2023</p>
                    </div>   
                </div>
            </div>   
        </footer>
        <!-- footer end -->

        <!--icon-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!--icon end-->

    </body>
</html>