<?php
include "./src/php/counter.php";
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="HALU_33のプロフィール">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://halu33.net/">
        <meta property="og:site_name" content="HALU_33のプロフィール">
        <meta property="og:locale" content="ja_JP">
        <link rel="stylesheet" href="./src/css/style.css"/>
        <title>@HALU_33</title>
        <link rel="icon" href="./img/epril_icon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/epril_icon.png">
        <script src="https://kit.fontawesome.com/820bccf440.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-lyuxz5v+9Wf7TXzK7+cJRRkjxuX9+kFOR3mU06x+y/q6w3B8v4F8FbkUVOGV4FsF4dBeP2Q4TbQn3BvIF1Cx0g==" crossorigin="anonymous" />
    </head>


    <body>
        <div class="header">
            <label class="toggle-switch">
                <input type="checkbox" id="darkModeToggle">
                <span class="slider"></span>
            </label>
            <h1><strong><a href="https://halu33.net">@HALU_33</a></strong></h1>
        </div>


        <div class="sns">
            <a href="https://twitter.com/HALU_33" target="_blank">
                <i class="fab fa-twitter"></i>
                <div class="sns-name">@HALU_33</div>
            </a>
            <a href="https://discord.com/channels/@me" target="_blank">
                <i class="fab fa-discord"></i>
                <div class="sns-name">HALU_33#3333</div>
            </a>
            <a href="https://www.youtube.com/c/HALU_33" target="_blank">
                <i class="fab fa-youtube"></i>
                <div class="sns-name">@HALU_33</div>
            </a>
            <a href="https://open.spotify.com/user/i1l47xrnbi52fzlnbi8bw95f6?si=f22210590b4e477e&nd=1" target="_blank">
                <i class="fab fa-spotify"></i>
                <div class="sns-name">mna</div>
            </a>
            <a href="https://github.com/halu33" target="_blank">
                <i class="fab fa-github"></i>
                <div class="sns-name">halu33</div>
            </a>
        </div>



        <div class="details-section">
            <div class="details-content">
                <table class="detail-table">
                    <tr>
                        <th>名前</th>
                        <td>halu</td>
                    </tr>
                    <tr>
                        <th>生年月日</th>
                        <td>2005/03/03</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>日本 三重</td>
                    </tr>
                    <tr>
                        <th>学校</th>
                        <td>どこかの高専 kosen20s</td>
                    </tr>
                    <tr>
                        <th>サブ垢</th>
                        <td>公開垢<a href="https://twitter.com/MK8DX_mkmg" target="_blank">@MK8DX_mkmg</a> 野球垢<a href="https://twitter.com/Nyi516569" target="_blank">@Nyi516569</a></td>
                    </tr>
                    <tr>
                        <th>MK8DX</th>
                        <td>所属:elf Code RL<br>
                            150cc Lounge:<a href="https://www.mk8dx-lounge.com/PlayerDetails/10999" target="_blank">Villeta</a>
                        </td>
                    </tr>
                    <tr>
                        <th>白猫プロジェクト</th>
                        <td>Name: 33<i class="fa-brands fa-apple"></i> Rank: 650↑ 段位: 25↑ 21年4月頃～<br>
                            推しキャラ: ヴィレータ、エプリル
                        </td>
                    </tr>
                    <tr>
                        <th>ユメステ</th>
                        <td>親指勢 23年7月～<br> 推し: 新妻八恵、流石知冴、白丸美兎 <br> StellaFC: 40↑</td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- アクセスカウンター -->
        <div class="counter-container">
            <div class="visitor-count">
                <?php echo str_pad($total_visitor_count, 8, '0', STR_PAD_LEFT); ?>
            </div>
        </div>




    <script src="./src/js/main.js"></script>
    </body>
</html>