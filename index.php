<!DOCTYPE html>
<html lang="en">

<head>
    <title>自己紹介</title>
    <meta property="og:title" content="自己紹介" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./resources/css/reset.css" />
    <link rel="stylesheet" href="./resources/css/style.css" />
</head>

<body>
    <div id="loadContainer">
        <svg id="treeIcon" baseProfile="basic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 59">
            <path id="tree1" />
            <path id="tree2" />
        </svg>
    </div>
    <div class="wrapper" style="display: none;">
        <header class="header">
            <?php
            session_start();
            if ($_SESSION["result"] == "success") {
                echo '<p class="alert alert-success text-center my-2">お問い合わせ内容を送信しましたm(_ _)m<br>確認メールを送信しましたのでご確認ください。</p>';
            } elseif ($_SESSION["result"] == "fail") {
                echo '<p class="alert alert-danger text-center my-2">ERROR:メール送信に失敗しました</p>';
            }
            $_SESSION["result"] = "";
            ?>
            <div class="logo d-sm-block d-none" id="top">
                <a href="#">Playlist</a>
            </div>
            <div class="nav-wrapper me-sm-5 me-1">
                <nav class="navbar navbar-expand-sm w-100">
                    <!-- ナビゲーションバー（タイトル） -->
                    <a class="navbar-brand px-4 py-3 mr-5 text-black d-sm-none" href="#"><span class="h3 fw-bold">Playlist</span></a>

                    <!-- ハンバーガー -->
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- メニューリスト -->
                    <div class="collapse navbar-collapse" id="Navber">
                        <ul class="navbar-nav w-100 justify-content-end">
                            <li class="nav-item active h5 text-sm-center text-end me-3 mx-sm-0 mx-0 my-auto p-0">
                                <span class="nav-link">
                                    <a href="#about" class="nav-text facility-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">ABOUT</a>
                                </span>
                            </li>
                            <li class="nav-item active h5 text-sm-center text-end me-3 mx-sm-0 mx-0 my-auto p-0">
                                <span class="nav-link">
                                    <a href="#skills" class="nav-text charge-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">SKILLS</a>
                                </span>
                            </li>
                            <li class="nav-item active h5 text-sm-center text-end me-3 mx-sm-0 mx-0 my-auto p-0 d-none">
                                <span class="nav-link">
                                    <a href="#hobbies" class="nav-text reserve-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">HOBBIES</a>
                                </span>
                            </li>
                            <li class="nav-item active h5 text-sm-center text-end me-3 mx-sm-0 ms-0 my-auto p-0">
                                <span class="nav-link">
                                    <a href="#contact" class="nav-text reserve-btn text-black text-decoration-none d-block py-3 pl-4 px-md-0">CONTACT</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="about contents pt-4" id="about">
                <p class="ms-sm-5 mb-5 text-center text-sm-start inview fadeIn">ABOUT</p>
                <div class="container text-center h-100">
                    <div class="row h-75 justify-content-center">
                        <div class="col-sm-6 col-10 inview fadeIn">
                            <div>
                                <img class="img-fluid mx-auto top-img" src="./resources/img/top_img.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 ps-5 text-start prof-text inview fadeIn">
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
                <p class="ms-sm-5 mb-5 text-center text-sm-start inview fadeIn">SKILLS</p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-12 row">
                            <div class="col-sm-6 col-4 inview fadeIn">
                                <img class="skill-images img-fluid mx-auto mb-5" src="./resources/img/html5.png" alt="">
                            </div>
                            <div class="col-sm-6 col-4 inview fadeIn">
                                <img class="skill-images img-fluid mx-auto mb-5" src="./resources/img/js.png" alt="">
                            </div>
                            <div class="col-sm-12 col-4 inview fadeIn">
                                <img class="skill-images img-fluid mx-auto mb-5" src="./resources/img/php.png" alt="">
                            </div>
                            <div class="col-sm-6 col-6 inview fadeIn">
                                <img class="skill-images img-fluid mx-auto mb-5" src="./resources/img/mysql.png" alt="">
                            </div>
                            <div class="col-sm-6 col-6 inview fadeIn">
                                <img class="skill-images img-fluid mx-auto mb-5" src="./resources/img/bootstrap.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div id="container">
                                <p class="category-title">プログラミング言語</p>
                                <div class="graf-wrapper">
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">HTML</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="HTML" style="width: 5%;"><span>75</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">CSS</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="CSS" style="width: 5%;"><span>75</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">PHP</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="PHP" style="width: 0%;"><span>50</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">JS</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="JS" style="width: 0%;"><span>40</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Java</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Java" style="width: 0%;"><span>30</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Python</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Python" style="width: 0%;"><span>10</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Scss</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Scss" style="width: 0%;"><span>10</span></div>
                                        </div>
                                    </div>
                                    <p class="category-title ">DB</p>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">MySQL</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="MySQL" style="width: 0%;"><span>30</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Oracle</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Oracle" style="width: 0%;"><span>30</span></div>
                                        </div>
                                    </div>
                                    <p class="category-title">その他ライブラリ</p>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">Laravel</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="Laravel" style="width: 0%;"><span>50</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">SpringBoot</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="SpringBoot" style="width: 0%;"><span>40</span></div>
                                        </div>
                                    </div>
                                    <div class="graf">
                                        <div class="data-title-wrapper"><span class="data-name">bootstrap</span></div>
                                        <div class="graf-bar-bg">
                                            <div class="graf-bar" id="bootstrap" style="width: 0%;"><span>40</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hobbies contents pt-4 d-none" id="hobbies">
                <p class="ms-sm-5 mb-5 text-center text-sm-start inview fadeIn">HOBBIES</p>
            </div>
            <div class="contact contents pt-4" id="contact">
                <p class="ms-sm-5 mb-5 text-center text-sm-start inview fadeIn">CONTACT</p>
                <div class="container">
                    <div class="row justify-content-center inview fadeIn">
                        <div class="col-sm-10 col-12">
                            <form class="contact-form" action="./mail.php" method="post">
                                <div class="mb-3">
                                    <label for="inputName" class="form-label">名前</label>
                                    <input type="text" name="name" class="form-control" id="inputName" placeholder="例：山本　太郎" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">メールアドレス</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="例：name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputMessage" class="form-label">お問い合わせ内容</label>
                                    <textarea class="form-control" name="message" id="inputMessage" rows="3" placeholder="例：好きな食べ物はなんですか？" required></textarea>
                                </div>
                                <div class="text-end me-sm-4">
                                    <!-- Button trigger modal -->
                                    <button type="submit" class="btn btn-primary modal-boot d-block d-sm-inline-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>
                                        確認
                                    </button>
                                </div>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">送信内容の確認</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-name-mod">
                                                <p>
                                                    <span class="modal-text-head">氏名</span>
                                                    <span class="modal-text-colon">：</span>
                                                </p>
                                                <p class="input-name-value ms-3"></p>
                                            </div>
                                            <div class="input-email-mod">
                                                <p>
                                                    <span class="modal-text-head">メールアドレス</span>
                                                    <span class="modal-text-colon">：</span>
                                                </p>
                                                <p class="input-email-value ms-3"></p>
                                            </div>
                                            <div class="input-message-mod">
                                                <p>
                                                    <span class="modal-text-head">お問い合わせ内容</span>
                                                    <span class="modal-text-colon">：</span>
                                                </p>
                                                <p class="input-message-value ms-3"></p>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check mx-auto">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">確認しました</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                                            <button type="button" class="btn btn-primary act-submit" disabled>送信</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-btn mx-auto mb-5">
                <a href="#top"><img class="img-fluid" src="./resources/img/scroll_top2.png" alt=""></a>
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
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <!-- jquery.inview.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>

    <!-- Gsap(TweenLite) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- JS -->
    <script src="./resources/js/style.js"></script>
</body>

</html>