<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\OlogAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

OlogAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-top-wrapper">
                            <div class="header-top-info">
                                <div class="email">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.95" height="13.4" viewBox="0 0 16.95 13.4">
                                            <g id="Mail" transform="translate(0.975 0.7)">
                                                <path id="Path_1" data-name="Path 1" d="M3.5,4h12A1.5,1.5,0,0,1,17,5.5v9A1.5,1.5,0,0,1,15.5,16H3.5A1.5,1.5,0,0,1,2,14.5v-9A1.5,1.5,0,0,1,3.5,4Z" transform="translate(-2 -4)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                                <path id="Path_2" data-name="Path 2" d="M17,6,9.5,11.25,2,6" transform="translate(-2 -4.5)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <span>yadgarovaxmadbek@gmail.com</span>
                                    </div>
                                </div>
                                <div class="cta">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13.401" height="13.401" viewBox="0 0 13.401 13.401">
                                            <g id="Phone_Icon" data-name="Phone Icon" transform="translate(0.7 0.7)">
                                                <path id="Phone_Icon-2" data-name="Phone Icon" d="M14.111,10.984v1.806A1.206,1.206,0,0,1,12.8,14a11.956,11.956,0,0,1-5.207-1.849,11.754,11.754,0,0,1-3.62-3.613A11.9,11.9,0,0,1,2.117,3.313,1.205,1.205,0,0,1,3.317,2h1.81A1.206,1.206,0,0,1,6.334,3.036a7.719,7.719,0,0,0,.422,1.692A1.2,1.2,0,0,1,6.485,6l-.766.765a9.644,9.644,0,0,0,3.62,3.613l.766-.765a1.208,1.208,0,0,1,1.273-.271,7.76,7.76,0,0,0,1.7.422,1.205,1.205,0,0,1,1.038,1.222Z" transform="translate(-2.112 -2)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <span>+99897 7773119</span>
                                    </div>
                                </div>
                            </div>
                            <div class="header-top-switcher">
                                <div class="language">
                                    <select style="display: none;">
                                        <option data-display="English">English</option>
                                        <option value="1">Arabic</option>
                                        <option value="2">Aramaic</option>
                                        <option value="4">Bangla</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">English</span><ul class="list"><li data-value="English" data-display="English" class="option selected">English</li><li data-value="1" class="option">Arabic</li><li data-value="2" class="option">Aramaic</li><li data-value="4" class="option">Bangla</li></ul></div>
                                </div>
                                <div class="currency">
                                    <select style="display: none;">
                                        <option data-display="Currency">USD</option>
                                        <option value="1">BDT</option>
                                        <option value="2">SNG</option>
                                        <option value="4">ERU</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">Currency</span><ul class="list"><li data-value="USD" data-display="Currency" class="option selected">USD</li><li data-value="1" class="option">BDT</li><li data-value="2" class="option">SNG</li><li data-value="4" class="option">ERU</li></ul></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="d-none d-lg-block">
                    <?php
                    NavBar::begin([
                        'brandLabel' => 'Magazin',
                        'brandUrl' => Yii::$app->homeUrl,
                        'renderInnerContainer' => false,
                        'options' => [
                            'class' => 'menu-area d-flex align-items-center',
                        ],
                        'collapseOptions' => [
                            'tag' => false,
                            'class' => 'main-menu d-flex align-items-center',
                        ],
                    ]);
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Shop', 'url' => ['/product/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                    }

                    echo Nav::widget([
                        'options' => ['class' => 'main-menu d-flex align-items-center'],
                        'items' => $menuItems,
                    ]);
                    echo '<div class="search-bar">
                            <input type="text" placeholder="Search for product...">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414" viewBox="0 0 20.414 20.414">
                                    <g id="Search_Icon" data-name="Search Icon" transform="translate(1 1)">
                                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="8.158" cy="8" rx="8.158" ry="8" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></ellipse>
                                        <line id="Line_4" data-name="Line 4" x1="3.569" y1="3.5" transform="translate(14.431 14.5)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="menu-icon ml-auto">
                            <ul>
                                <li>
                                    <a href="wishlist.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20">
                                            <g id="Heart" transform="translate(1 1)">
                                                <path id="Heart-2" data-name="Heart" d="M20.007,4.59a5.148,5.148,0,0,0-7.444,0L11.548,5.636,10.534,4.59a5.149,5.149,0,0,0-7.444,0,5.555,5.555,0,0,0,0,7.681L4.1,13.317,11.548,21l7.444-7.681,1.014-1.047a5.553,5.553,0,0,0,0-7.681Z" transform="translate(-1.549 -2.998)" fill="#fff" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            </g>
                                        </svg>
                                        <span class="heart">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                            <g id="Icon" transform="translate(-1524 -89)">
                                                <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.909" cy="0.952" rx="0.909" ry="0.952" transform="translate(1531.364 108.095)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></ellipse>
                                                <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.909" cy="0.952" rx="0.909" ry="0.952" transform="translate(1541.364 108.095)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></ellipse>
                                                <path id="Path_3" data-name="Path 3" d="M1,1H4.636L7.073,13.752a1.84,1.84,0,0,0,1.818,1.533h8.836a1.84,1.84,0,0,0,1.818-1.533L21,5.762H5.545" transform="translate(1524 89)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            </g>
                                        </svg>
                                        <span class="cart">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="account.html"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                            <g id="Account" transform="translate(1 1)">
                                                <path id="Path_86" data-name="Path 86" d="M20,21V19a4,4,0,0,0-4-4H8a4,4,0,0,0-4,4v2" transform="translate(-4 -3)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="4" cy="4" r="4" transform="translate(4)" fill="#fff" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                            </g>
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                        ';
//                    if (Yii::$app->user->isGuest) {
//                        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
//                    } else {
//                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
//                            . Html::submitButton(
//                                'Logout (' . Yii::$app->user->identity->username . ')',
//                                ['class' => 'btn btn-link logout text-decoration-none']
//                            )
//                            . Html::endForm();
//                    }
                    NavBar::end();
                    ?>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="flex-shrink-0">
        <section class="breadcrumb-area mt-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <h5><?= Html::encode($this->title) ?></h5>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row align-items-center newsletter-area">
                <div class="col-lg-5">
                    <div class="newsletter-area-text">
                        <h4 class="text-white">Subscribe to get notification.</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="newsletter-area-button">
                        <form action="#">
                            <div class="form">
                                <input type="email" name="email" id="mail" placeholder="Enter your email address" class="form-control">
                                <button class="btn bg-secondary border text-capitalize">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row main-footer">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="main-footer-info">
                        <img src="olog/images/logo/yarnoo.png" alt="Logo" class="img-fluid">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie malesuada
                            metus, non molestie ligula laoreet vitae. Ut et fringilla risus, vel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="main-footer-quicklinks">
                        <h6>Company</h6>
                        <ul class="quicklink">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help &amp; Support</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="main-footer-quicklinks">
                        <h6>Quick links</h6>
                        <ul class="quicklink">
                            <li><a href="#">New Realease</a></li>
                            <li><a href="#">Customize</a></li>
                            <li><a href="#">Sale &amp; Discount</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="main-footer-quicklinks">
                        <h6>Account</h6>
                        <ul class="quicklink">
                            <li><a href="#">Your Bag</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Order Completed</a></li>
                            <li><a href="#">Log-out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-flex justify-content-between align-items-center">
                        <div class="copyright-text order-2 order-lg-1">
                            <p>© <?= date('Y') ?>.</p>
                        </div>
                        <div class="copyright-links order-1 order-lg-2">
                            <a href="#" class="ml-0"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
