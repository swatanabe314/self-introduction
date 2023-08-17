$(function () {
    $('a[href^="#"]').click(function () {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });
});



let data = [
    { name: 'HTML', value: 75 },
    { name: 'CSS', value: 75 },
    { name: 'PHP', value: 50 },
    { name: 'JS', value: 40 },
    { name: 'Java', value: 30 },
    { name: 'Python', value: 10 },
    { name: 'Scss', value: 10 },
    { name: 'SQL', value: 40 },
    { name: 'Laravel', value: 50 },
    { name: 'SpringBoot', value: 40 },
    { name: 'bootstrap', value: 40 }
];

// しきい値
let threshold = 100;

for (var variable of data) {

    // しきい値からパーセンテージを計算
    variable.percentage = Math.round(variable.value / threshold * 100);

    variable.view_width = 0;
    variable.view_value = 0;
}


// update
function update(timestamp) {
    for (var variable of data) {
        // widthと値を更新
        if (variable.view_width < variable.percentage) {
            variable.view_width = variable.view_width + 2;
            // 一定値以上で減速
            if (variable.view_width > (variable.percentage * 0.8)) {
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
    if (timestamp <= 5000) {
        window.requestAnimationFrame(update);
    }

}

// updateを実行
window.requestAnimationFrame(update);