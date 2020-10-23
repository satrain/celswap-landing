<?php 
    $user = "root";
    $pass = "";
    $conn = new PDO("mysql:host=localhost;dbname=celswap;", $user, $pass);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
    <title>CelSwap</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/burger.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".vote-form").submit(function(event) {
                event.preventDefault();
                var voteBtn = $(".input-vote-btn").val();

                $(".num-votes").load("inc/vote-form.inc.php", {
                    voteBtn: voteBtn
                });
            });
        });
    </script>
</head>

<body>
    <header>
        <div class="celswap-logo celswap-logo-mobile"></div>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#">How it works</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#">Developers</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#">Community</a></li>
                <li><button class="header-btn">Connect Wallet</button></li>
            </ul>
        </nav>

        <!-- Hamburger (burger) for the navigation beyond 1024px - Mobile and Tablet -->
        <div style="display: none;" id="hamburger">
            <div class="burger burger-squeeze">
                <div class="burger-lines"></div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation -- toggles on hamburger click -->
    <div class="nav-mobile-modal">
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#">How it works</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#">Developers</a></li>
                <li>
                    <div class="bullet"></div>
                </li>
                <li><a href="#">Community</a></li>
                <li><button class="header-btn">Connect Wallet</button></li>
            </ul>
        </nav>
    </div>

    <div id="hero">
        <div class="bubble1"></div>
        <div class="bubble2"></div>
        <div class="bubble3"></div>

        <div class="heading-section">
            <h1>Seamless way
                <br>
                <span>to swap CEL</span></h1>

            <h4>One of the fastest-growing tokens on the market</h4>

            <button class="btn">Launch CelSwap</button>

            <div class="cel-market-price">
                <p>CEL Market Price</p>
                <h3>1.29 USD</h3>
                <span>+0.78%</span>
            </div>
        </div>
    </div>

    <div id="availability">
        <div class="available">
            <h1>Available for<br><span>Metamask</span></h1>
            <img src="assets/images/logo-metamask-fox.svg" alt="Metamask Fox">
        </div>
        <div class="coming-soon">
            <h1>Coming soon for<br><span>Celsius Wallet</span></h1>
            <img src="assets/images/logo-cel-standalone.svg" alt="Celsius Wallet">
            <h4>(as well as Coinbase, Wallet Connect, Fortmatic...)</h4>
        </div>
    </div>

    <div id="about">
        <span class="about-typography">about</span>

        <h1>By the community
            <br>
            <span>for the community</span>
        </h1>
        <h3>Swap coins via CEL coin
            <br>
            pairs trustlessly</h3>
        <p>Cel swap is the community effort to make swapping CEL tokens easy for everyone. Increasing your loyalty level
            and getting the best reward rates has never been this easy.</p>
    </div>

    <div id="what-is">
        <div class="outside-small-bubble"></div>
        <div class="medium-bubble"></div>
        <div class="what-is-content">
            <div class="small-bubble"></div>
            <div class="large-bubble"></div>
            <div class="big-bubble"></div>
            <h1>What is
                <br>
                <span>CelSwap?</span>
            </h1>
            <p>There is no order book or a centralized entity determining the price of assets. Instead CelSwap
                <strong>utilizes
                    smart contracts to create liquidity pools and enable swapping tokens.</strong>
                <br><br>
                Each pool is defined by a smart
                contract that includes a few functions to enable swapping tokens, adding liquidity and more.</p>
        </div>
    </div>

    <div id="prices">
        <div class="prices-container">
            <div class="prices-heading">
                <h1>How are prices
                    <br>
                    <span>determined?</span>
                </h1>
                <p>Liquidity pools are routed through CEL tokens meaning one of the coins in the pair has to be CEL. In
                    essence each pool is a simple function x*y=k. The function maintains the price in which the trade
                    can
                    happen.</p>
            </div>
            <div class="prices-function">
                <span>x*y=k</span>
            </div>
        </div>

        <div class="splide splide-container splide-1">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="slide slide1">
                            <h3>Anyone can add <span>liquidity</span></h3>

                            <div class="icon1"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide2">
                            <h3>Prices are determined by <span>smart contracts</span></h3>

                            <div class="icon2"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide3">
                            <h3>Connect your <span>wallet</span></h3>

                            <div class="icon3"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide4">
                            <h3>Swap coins <span>trustlessly</span></h3>

                            <div class="icon4"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide5">
                            <h3>Get <span>rewarded</span> for providing liquidity</h3>

                            <div class="icon5"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slide slide6">
                            <h3>Contribute to the <span>community</span></h3>

                            <div class="icon6"></div>
                            <div class="circle"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="why-build">
        <div class="upper-container">
            <div class="upper-heading-box">
                <h1>Why did we <br><span>build CelSwap?</span></h1>

                <p>Celsius is the modern way of managing your finances. Celsians enjoy best reward (interest) rates on
                    their
                    assets. Have easy access to loans backed by crypto and can send assets in seconds with zero fees to
                    other Celsisans.</p>
            </div>
            <div class="upper-image-box"></div>
        </div>
        <div class="down-container">
            <div class="down-heading-box">
                <h3>Mission of Celsius is to bring unprecedented financial freedom to its users by giving back
                    <strong>80% of the earnings</strong> to the community every week.</h3>
                <p>As a result, Celsians can earn some of the best rates in industry on their crypto transfers to the
                    app. Should you choose to earn in CEL tokens the rates increase up to 30% based on the percentage of
                    CEL tokens in your wallet.</p>
            </div>
            <div class="down-image-box"></div>
        </div>
        <div class="circles-container">
            <div class="small-circle"></div>
            <div class="small-circle circle-position2"></div>
            <div class="medium-circle"></div>
            <div class="large-circle"></div>
            <div class="transition-circle">
                <h1>CelSwap is the community effort to make CEL more accessible to the community</h1>
            </div>
        </div>
    </div>

    <div id="testimonials">

        <div class="scroll-area">
            <div class="wrapper">
                <div class="testimonial">
                    <div class="quote">
                        <p>I have been using Celsius for over a year, and keep getting my interest in CEL token every
                            week, which grew A LOT over that time! The interest of 15%+ APY on stablecoins is so much
                            better than what you can get in any bank, and you can also take a loan, using your crypto as
                            collateral…</p>
                    </div>
                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="WebTrading">

                        <div class="details">
                            <strong>WebTrading</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="quote">
                        <p>I have been using Celsius for over a year, and keep getting my interest in CEL token every
                            week, which grew A LOT over that time! The interest of 15%+ APY on stablecoins is so much
                            better than what you can get in any bank, and you can also take a loan, using your crypto as
                            collateral…</p>
                    </div>
                    <div class="person person-petars">
                        <img src="assets/images/testimonials-profile.jpg" alt="WebTrading">

                        <div class="details">
                            <strong>WebTrading</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial current">
                    <div class="quote">
                        <p>Celsius Network may be one of the best projects in crypto with a top notch team. You could
                            not ask for a better founder than Alex Mashinsky. Always puts the customer first straight
                            out of Sir Richard Branson playbook. Would
                            recommend to everyone…</p>
                    </div>
                    <div class="person">
                        <img src="assets/images/random-person.jpg" alt="Jimmy Z">

                        <div class="details">
                            <strong>Jimmy Z</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="quote">
                        <p>I have been using Celsius for over a year, and keep getting my interest in CEL token every
                            week, which grew A LOT over that time! The interest of 15%+ APY on stablecoins is so much
                            better than what you can get in any bank, and you can also take a loan, using your crypto as
                            collateral…</p>
                    </div>
                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="WebTrading">

                        <div class="details">
                            <strong>WebTrading</strong>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="quote">
                        <p>I have been using Celsius for over a year, and keep getting my interest in CEL token every
                            week, which grew A LOT over that time! The interest of 15%+ APY on stablecoins is so much
                            better than what you can get in any bank, and you can also take a loan, using your crypto as
                            collateral…</p>
                    </div>
                    <div class="person">
                        <img src="assets/images/testimonials-profile.jpg" alt="WebTrading">

                        <div class="details">
                            <strong>WebTrading</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: TESTIMONIALS -->

    </div>

    <div id="developers">
        <span class="developers-typography">developers</span>
        <h1>Celsians
            <br>
            <span>to Celsians</span>
        </h1>
        <h3>We are a small team of Celsians dedicated to giving back to the community!</h3>
        <p>We are always looking for more like-minded developers to give back to the community. Join us and help give
            back at <span>weare@celswap.org</span></p>
        <div class="developers-links">
            <button class="btn btn-documentation"><span class="icon-doc"></span>Documentation</button>
            <button class="btn btn-github-repo"><span class="icon-github"></span> GitHub Repo</button>
        </div>
    </div>

    <div id="vote">
        <h1>Would you like to see
            <br>
            <span>CelSwap in-app?</span>
        </h1>
        <h3>Press the big button below to make your vote count. We'll make sure this idea reaches Celsius developers!
        </h3>
        <form class="vote-form" action="inc/vote-form.inc.php" method="post">
            <button class="input-vote-btn" name="vote">
                <div class="votes">
                    <div class="voted">+1</div>
                    <div class="num-votes">
                        <?php
                            $sql = "SELECT vote_id FROM votes ORDER BY vote_id DESC";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            echo $result[0]['vote_id']; 
                        ?>
                    </div>
                    <div class="vote-btn">
                        <h3>hell yeah!</h3>
                        <div class="vote-btn-fire"></div>
                    </div>
                </div>
            </button>
        </form>
        <div class="notification-box"></div>
    </div>
    <div id="rates">
        <h1>Download Celsius app
            <br>
            <span>to earn the best reward rates!</span>
        </h1>


        <div class="splide splide-2">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading"></span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading"></span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading"></span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading"></span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading">Matic</span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading">Uniswap</span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading">BUSD</span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rates-slide">
                            <div class="rates-slide-logo">
                                <div class="btc-logo"></div>
                                <span class="rates-slide-heading btc-heading">Dai</span>
                            </div>
                            <div class="rates-slide-value">
                                <div class="rates-value-cel">
                                    <span class="rates-value-cel-percentage">9.65%</span>
                                    <span class="in-cel">in CEL</span>
                                </div>
                                <div class="rates-value-in-kind">
                                    <span class="rates-value-in-kind-percentage">7.06%</span>
                                    <span class="in-kind">in-kind</span>
                                </div>
                            </div>
                        </div>
                    </li> 
                </ul>
            </div>
        </div>


    </div>


    <script src="assets/js/splideSlider.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/testimonials-slider.js"></script>
</body>

</html>