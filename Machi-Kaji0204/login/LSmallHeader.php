<?php
session_start();
//１．関数群の読み込み
require_once('../funcs.php');
// 必ずrequire_once('funcs.php');の下に作成したfunctionを記述する
loginCheck();

?>


<!DOCTYPE html>
<html lang="en">
<header class="">
  <!-- <div class="site-header__top">
    <div style="text-align: left;">
        <a href="index.php"><img class="headerSmallLogo" src="../img/logo.png"></a> 
    </div> -->
  </div>
  <div class="site-header__bottom">
    <div class="wrapper site-header__wrapper">
      <div class="site-header__start">
        <!-- <div class="search">
          <button class="search__toggle" aria-label="Open search"><span class="mgr-20">Search</span></button>
          <form class="search__form" action="">
            <label class="sr-only" for="search">Search</label>
            <input
              type="search"
              name=""
              id="search"
              placeholder="何をお探しですか？"
            />
          </form>
        </div> -->
      </div>
      
        <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button">
              menu
            </button>
            <div>
                <ul class="nav__wrapper">
                    <a href="LIndex.php"><img class="headerSmallLogo" src="../img/machikajismall.png"></a> 
                    <li class="nav__item"><a href="LSupporter.php">サポーター/一覧</a></li>
                    <li class="nav__item"><a href="LQandA.php">よくあるご質問</a></li>
                    <li class="nav__item"><a href="LInformation.php">お知らせ</a></li>
                    <li class="nav__item"><a href="LToiawase.php">お問い合わせ</a></li>
                    <li class="nav__item"><a href="logout.php">ログアウト</a></li>
                </ul>
                <h6>♫<?= $_SESSION['name'];?>さん♫</h6>
            </div>
          </nav>
      <!-- <div class="site-header__end">
          <a href="logout.php">ログアウト</a>
      </div> -->
      </div>
    </div>
  </div>
</header>
