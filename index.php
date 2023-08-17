<!DOCTYPE html>
<html lang="en">
    <head>
        <title>自己紹介</title>
        <meta property="og:title" content="自己紹介" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />

        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="./resources/css/reset.css" />
        <link rel="stylesheet" href="./resources/css/style.css" />
    </head>
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="logo d-sm-block d-none" id="top">
                    <a href="#">Playlist</a>
                </div>
                <div class="nav-wrapper me-sm-5 me-1">
                    <nav class="navbar navbar-expand-sm w-100">
                        <!-- ナビゲーションバー（タイトル） -->
                        <a class="navbar-brand px-4 py-3 mr-5 text-black d-sm-none" href="#"><span class="h3">Playlist</span></a>
                    
                        <!-- ハンバーガー -->
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber"
                            aria-expanded="false" aria-label="ナビゲーションの切替">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <!-- メニューリスト -->
                        <div class="collapse navbar-collapse" id="Navber">
                            <ul class="navbar-nav w-100 justify-content-end">
                                <li class="nav-item active text-sm-center mx-0 my-auto h5 p-0">
                                    <span class="nav-link">
                                        <a href="#about"
                                            class="nav-text facility-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">ABOUT</a>
                                    </span>
                                </li>
                                <li class="nav-item active text-sm-center mx-0 my-auto h5 p-0">
                                    <span class="nav-link">
                                        <a href="#skills"
                                            class="nav-text charge-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">SKILLS</a>
                                    </span>
                                </li>
                                <li class="nav-item active text-sm-center mx-0 my-auto h5 p-0">
                                    <span class="nav-link">
                                        <a href="#hobbies"
                                            class="nav-text reserve-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">HOBBIES</a>
                                    </span>
                                </li>
                                <li class="nav-item active text-sm-center ms-0 my-auto h5 p-0">
                                    <span class="nav-link">
                                        <a href="#contact"
                                            class="nav-text reserve-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">CONTACT</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <main>
                <div class="about contents pt-4" id="about">
                    <p class="ms-sm-5 mb-5 text-center text-sm-start">ABOUT</p>
                    <div class="container text-center h-100">
                        <div class="row h-75 justify-content-center">
                            <div class="col-sm-6 col-10">
                                <div>
                                    <img class="img-fluid mx-auto top-img" src="./resources/img/top_img.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 ps-5 text-start prof-text">
                                <p>
                                    <span class="prof-text-head">氏名</span><span class="prof-text-colon">：</span>渡辺　秀二<br>
                                    <span class="prof-text-head">年齢</span><span class="prof-text-colon">：</span>25歳<br>
                                    <span class="prof-text-head">趣味</span><span class="prof-text-colon">：</span>ゲーム(スプラ等)<br>
                                    <span class="prof-text-head">問い合わせ</span><span class="prof-text-colon">：</span>shuji.watanabe.pl@gmail.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills contents pt-4" id="skills">
                    <p class="ms-sm-5 mb-5 text-center text-sm-start">SKILLS</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div>
                                    <img class="img-fluid w-25 mx-auto mb-5" src="./resources/img/css_app_application_smartphone_icon_233881.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div id="container">
                                    <p class="category-title">プログラミング言語</p>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">HTML</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="HTML" style="width: 75%;"><span>75</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">CSS</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="CSS" style="width: 75%;"><span>75</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">PHP</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="PHP" style="width: 50%;"><span>50</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">JS</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="JS" style="width: 40%;"><span>40</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Java</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Java" style="width: 30%;"><span>30</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Python</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Python" style="width: 10%;"><span>10</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Scss</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Scss" style="width: 10%;"><span>10</span></div>
                                        </div>
                                    </div>
                                    <p class="category-title ">DB</p>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">SQL</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="SQL" style="width: 40%;"><span>40</span></div>
                                        </div>
                                    </div>
                                    <p class="category-title">その他ライブラリ</p>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Laravel</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Laravel" style="width: 50%;"><span>50</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">SpringBoot</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="SpringBoot" style="width: 40%;"><span>40</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">bootstrap</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="bootstrap" style="width: 40%;"><span>40</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbies contents pt-4" id="hobbies">
                    <p class="ms-sm-5 mb-5 text-center text-sm-start">HOBBIES</p>
                </div>
                <div class="contact contents pt-4" id="contact">
                    <p class="ms-sm-5 mb-5 text-center text-sm-start">CONTACT</p>
                    <div class="container">
                        <div class="row">
                            <div class="">
                                <form>
                                    <div class="mb-3">
                                        <label for="inputName" class="form-label">名前</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="例：山本　太郎" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmail" class="form-label">メールアドレス</label>
                                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="例：name@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputText" class="form-label">お問い合わせ内容</label>
                                        <textarea class="form-control" id="inputText" rows="3" placeholder="例：好きな食べ物はなんですか？" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">確認</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-btn">
                    <!-- <a href="#top">トップにジャンプ！</a> -->
                </div>
            </main>
            <footer>
                <div class="text-start mx-5 mt-4">
                    <p class="footer-nav"><a href="#about">ABOUT</a></p>
                    <p class="footer-nav"><a href="#skills">SKILLS</a></p>
                    <p class="footer-nav"><a href="#hobbies">HOBBIES</a></p>
                    <p class="footer-nav"><a href="#contact">CONTACT</a></p>
                </div>
            </footer>
        </div>
        <!-- Jquery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <!-- jquery.inview.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>

        <!-- JS -->
        <script src="./resources/js/style.js"></script>
    </body>

</html>