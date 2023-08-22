// aタグの[href=#~]で指定クラスまでスクロール
$(function () {
    $('a[href^="#"]').click(function () {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });


    // 問い合わせ内容入力チェック
    $(".form-control").on("input", function () {
        var inputName = $('#inputName').val();
        var inputEmail = $('#inputEmail').val();
        var inputMessage = $('#inputMessage').val();

        // 文字が全て入っていれば確認ボタンをactiveに
        if (inputName && inputEmail && inputMessage) {
            $(".modal-boot").prop('disabled', false);
        } else {
            $(".modal-boot").prop('disabled', true); 
        }

        // 入力内容に誤りがなければmodalを起動できるようにする
        var invalidText = $(".form-control:invalid").val();
        if (invalidText) {
            $(".modal-boot").attr('data-bs-toggle', '');
        } else {
            $(".modal-boot").attr('data-bs-toggle', 'modal');
        }
    });

    // inputの内容をモーダルに表示
    $(".modal-boot").on("click", function () {
        $('.input-name-value').text($('#inputName').val());
        $('.input-email-value').text($('#inputEmail').val());
        $('.input-message-value').text($('#inputMessage').val());
    });

    // モーダル内の送信ボタンにsubmit機能を持たせる
    $(".act-submit").on("click", function () {
        $('.contact-form').submit();
    });

    // フォーム送信時押下した送信ボタンによってsubmitするか分ける
    $('.contact-form').submit(function () {
        var focused = $(':focus');
        if (focused.hasClass('modal-boot')) {
            return false;
        } else if (focused.hasClass('act-submit')) {
            return true;
        }
    });

    // 内容確認のチェックボックスにチェックが入るまで送信ボタンをdisabled
    $('.form-check input').change(function () {
        if ($(this).prop("checked")) {
            $(".act-submit").prop('disabled', false);
        } else {
            $(".act-submit").prop('disabled', true); 
        }
    })

    // スクロール時、要素のフェードイン
    $(function () {
        $(".inview").on("inview", function (event, isInView) {
            if (isInView) {
                $(this).stop().addClass("is-show");
            } else {
                $(this).stop().removeClass("is-show");
            }
        });
    });

    // 横棒グラフのアニメーションの実行
    var grafShowFlag = false;
    $(".graf-wrapper").on("inview", function (event, isInView) {
        if (isInView) {
            if (!grafShowFlag) {
                update();
                grafShowFlag = true;
            }
        } else {
            downgrade();
            grafShowFlag = false;
            createTime = 0;
        }
    });

    // 横棒グラフのアニメーション
    var data = [];
    var dgraf_bar;

    $('.graf-bar').each(function () {
        dgraf_bar = { name: $(this).attr("id"), value: $(this).text() };
        data.push(dgraf_bar);
    });

    // しきい値
    let threshold = 100;

    for (var variable of data) {
        variable.view_width = 0;
        variable.view_value = 0;
    }


    // update
    var createTime = 0;
    function update() {
        for (var variable of data) {
            // widthと値を更新
            if (variable.view_width < variable.value) {
                variable.view_width = variable.view_width + 2;
                // 一定値以上で減速
                if (variable.view_width > (variable.value * 0.8)) {
                    variable.view_width = variable.view_width - 1.5;
                }
                // 値を更新
                variable.view_value = variable.view_width * threshold / 100;
            }
            // 値を再描画
            document.querySelector(`#${variable.name} span`).innerHTML = variable.view_value;
            // グラフを再描画
            document.querySelector(`#${variable.name}`).style.width = variable.view_width + '%';
        }

        // 5000以内はupdateを繰り返す
        if (createTime <= 5000) {
            window.requestAnimationFrame(update);
            createTime += 50;
        }
    }
    function downgrade() {
        // グラフを初期化
        for (var variable of data) {
            variable.view_width = 0;
            variable.view_value = 0;
            document.querySelector(`#${variable.name}`).style.width = '0%';
        }
    }




    var pathStart = "M 28 2 L 17 16 L 23 16 L 9 34 L 17 34 L 3 52 L 19 52 L 19 57 ";
    var ptsDynamic = [
        [[19, 37], 57],
        [[19, 37], 52],
        [[3, 53], 52],
        [[17, 39], 34],
        [[9, 47], 34],
        [[23, 33], 16],
        [[17, 39], 16]
    ];

    var colors = ["#636567", "#90b8a6"];
    var tweenPos = { path1: 0, path2: 0, currCol: 0, dur: 0.75 };

    var svgTreeContainer = document.getElementById('treeIcon'),
        path1 = document.getElementById('tree1'),
        path2 = document.getElementById('tree2');

    function bringIn() {
        path1.setAttribute('fill', colors[0]);
        TweenLite.to(tweenPos, tweenPos.dur, {
            path1: 1, ease: Power2.easeOut, onComplete: nextColor, onUpdate: function () {
                updateTree(path1, tweenPos.path1);
            }, delay: 0.5
        });
    };

    function nextColor() {
        tweenPos.currCol++;
        path1.setAttribute('fill', colors[(tweenPos.currCol + 1) % 2]);
        path2.setAttribute('fill', colors[(tweenPos.currCol) % 2]);
        tweenPos.path2 = 0;
        updateTree(path2, 0);
        TweenLite.to(tweenPos, tweenPos.dur, {
            path2: 1, ease: Linear.easeInOut, onComplete: nextColor, onUpdate: function () {
                updateTree(path2, tweenPos.path2);
            }
        });
    }

    function updateTree(pathObj, perc) {
        var path = pathStart;
        for (var i = 0; i < ptsDynamic.length; i++) {
            path += "L " + (ptsDynamic[i][0][0] + (ptsDynamic[i][0][1] - ptsDynamic[i][0][0]) * perc) + " " + ptsDynamic[i][1];
        }
        path += " z";
        pathObj.setAttribute('d', path);
    }

    //buildTree();
    //updateTree(path1, 1);
    bringIn();
    setTimeout(function () {
        $('#loadContainer').fadeOut();
        $('.wrapper').fadeIn();
    }, 3000);
});