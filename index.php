<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bankswap Interface</title>
    <link rel="shortcut icon" type="image/png" href="./graph/logo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        * {
            font-family: Inter, sans-serif;
            box-sizing: border-box
        }

        @font-face {
            font-family: 'Inter custom';
            font-weight: 100 900;
            font-style: normal;
            font-display: block;
            font-named-instance: Regular;
            src: url(fonts/Inter-roman.var.woff2) format("woff2 supports variations(gvar)"), url(fonts/Inter-roman.var.woff2) format("woff2-variations"), url(fonts/Inter-roman.var.woff2) format("woff2")
        }

        @supports (font-variation-settings:normal) {
            * {
                font-family: 'Inter', sans-serif
            }
        }

        body,
        html {
            margin: 0;
            padding: 0
        }

        button {
            user-select: none
        }

        html {
            font-size: 16px;
            font-variant: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-tap-highlight-color: transparent;
            font-feature-settings: 'ss01'on, 'ss02'on, 'cv01'on, 'cv03'on
        }

        #background-radial-gradient {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            pointer-events: none;
            width: 200vw;
            height: 200vh;
            background: radial-gradient(50% 50% at 50% 50%, #fc077d10 0, rgba(255, 255, 255, 0) 100%);
            transform: translate(-50vw, -100vh);
            z-index: -1
        }

        #background-radial-gradient-black {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            pointer-events: none;
            width: 200vw;
            height: 200vh;
            background: radial-gradient(50% 50% at 50% 50%, #fc077d10 0, rgba(255, 255, 255, 0) 100%);
            transform: translate(-50vw, -100vh);
            z-index: -1;
            color: rgb(255, 255, 255);
            background-color: rgb(33, 36, 41) !important;
        }

        html {

            min-height: 100%
        }

        html {
            color: rgb(0, 0, 0);
            background-color: rgb(247, 248, 250) !important;
        }

        @media (prefers-color-scheme:dark) {
            html {
                background-color: #212429
            }
        }

        @media (prefers-color-scheme:light) {
            html {
                background-color: #f7f8fa
            }
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1039.0" data-gr-ext-installed="">
    <?php if (isset($_SESSION["Nickname"]) != null) echo "<div id='out'></div>";
    else echo "<div id='in'></div>"; ?>
    <div id="root">
        <div class="sc-1dv6j2d-0 gRkzNE">
            <div class="sc-1dv6j2d-2 bzUMEG">
                <div class="sc-pradxg-0 kcVvZu">
                    <a href="." class="sc-pradxg-8 eUPrnO">
                        <img id="logo" src="./graph/logo.png" width="30px" height="100%">
                    </a>
                    <div id="myDIV" class="sc-bdnxRM sc-nrd8cx-0 sc-pradxg-3 fzUdiI bNRzcC dYGdYB">
                        <a class="sc-pradxg-10 iuHzlU ACTIVE" href="#/swap">換匯</a>
                        <a class="sc-pradxg-10 iuHzlU" href="#/deposit">存提</a>
                        <a class="sc-pradxg-10 iuHzlU" href="#/transfer">轉帳</a>
                        <a class="sc-pradxg-10 iuHzlU" href="#/record">紀錄</a>
                    </div>
                    <div class="sc-pradxg-1 kEiBmk">
                        <?php
                        if (isset($_SESSION["Nickname"]) != null)
                            echo "<div class = 'eYKaTH'><div class = 'kecKLU'><div class = 'cYEytG'><div class = 'btNDhT jlSroa'>hi, {$_SESSION['Nickname']}</div></div></div></div>";
                        else
                            echo "<div class='sc-pradxg-2 eYKaTH'><div class='sc-w04zhs-12 kecKLU'><div class='sc-w04zhs-10 cYEytG'><img src='./graph/twd.png' class='sc-w04zhs-7 sc-w04zhs-11 hJDzIU kMKBIy'><div class='sc-w04zhs-8 sc-w04zhs-9 btNDhT jlSroa'>TWD</div></div></div></div>";
                        ?>
                        <div class="sc-pradxg-2 eYKaTH">
                            <div class="sc-pradxg-4 eKBEJz">
                                <a onclick='loginorout()' style="width:auto;" class="loginbtn sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-4 sc-m6ivbz-1 sc-m6ivbz-3 dZkESD keLaW jYJKNI jQINIO">
                                    <p class='sc-m6ivbz-5 cijhrM'>
                                        <?php if (isset($_SESSION["Nickname"]) != null) echo "登出";
                                        else echo "登入"; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div id='login-form' class='login-page'>
                            <div id="form-box" class="form-box">
                                <div class='button-box'>
                                    <div id='btn'></div>
                                    <a type='button' onclick='login()' class='toggle-btn'>登入</a>
                                    <a type='button' onclick='register()' class='toggle-btn'>註冊</a>
                                </div>
                                <form id='login' class='input-group-login' method="post" action="./php/login.php">
                                    <input type='email' name="email" class='input-field' placeholder='E-mail' required>
                                    <input type='password' name="pass" class='input-field' placeholder='Password' required>
                                    <input type='checkbox' class='check-box'>
                                    <span class="login-span">保持登入狀態</span>
                                    <button type='submit' class='submit-btn'>登 入</button>
                                </form>
                                <form id='register' class='input-group-register' method="post" action="./php/register.php">
                                    <input type='text' name="first" class='input-field' placeholder='First Name' required>
                                    <input type='text' name="last" class='input-field' placeholder='Last Name ' required>
                                    <input type='text' name="nkname" class='input-field' placeholder='Nickname' required>
                                    <input type='email' name="email" class='input-field' placeholder='E-mail' required>
                                    <input type='password' name="pass" class='input-field password' placeholder='Password' required>
                                    <input type='password' name="cpass" class='input-field confirmPassword' placeholder='Confirm Password' required>
                                    <input type='checkbox' class='check-box checkbox' required>
                                    <span class="login-span">我以閱讀並同意服務協議</span>
                                    <button type='submit' class='submit-btn rbutton'>註 冊</button>
                                </form>
                            </div>
                        </div>
                        <div id='currency' class='login-page'>
                            <div id="form-box2" class="form-box">
                                <div class="css-xy7yfl">選擇代幣</div>
                                <div style="flex:1 1 0%; position: relative;">
                                    <div style="overflow: visible; height:0px;">
                                        <div style="top: 20px; position: relative; height: 450px; width: 100%; overflow: auto; will-change: transform; direction: ltr;">
                                            <div style="height:500px; width:100%;">
                                                <div onclick="select('TWD')" id="TWD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 0px; height: 56px; width: 100%;">
                                                    <img src="./graph/twd.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">TWD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='twd' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('USD')" id="USD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 56px; height: 56px; width: 100%;">
                                                    <img src="./graph/usd.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">USD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='usd' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('HKD')" id="HKD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 112px; height: 56px; width: 100%;">
                                                    <img src="./graph/hkd.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">HKD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='hkd' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('GBP')" id="GBP" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 168px; height: 56px; width: 100%;">
                                                    <img src="./graph/gbp.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">GBP</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='gbp' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('AUD')" id="AUD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 224px; height: 56px; width: 100%;">
                                                    <img src="./graph/aud.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">AUD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='aud' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('CAD')" id="CAD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 280px; height: 56px; width: 100%;">
                                                    <img src="./graph/cad.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">CAD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='cad' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('SGD')" id="SGD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 336px; height: 56px; width: 100%;">
                                                    <img src="./graph/sgd.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">SGD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='sgd' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('CHF')" id="CHF" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 392px; height: 56px; width: 100%;">
                                                    <img src="./graph/chf.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">CHF</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='chf' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('JPY')" id="JPY" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 448px; height: 56px; width: 100%;">
                                                    <img src="./graph/jpy.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">JPY</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='jpy' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('ZAR')" id="ZAR" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 504px; height: 56px; width: 100%;">
                                                    <img src="./graph/zar.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">ZAR</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='zar' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('SEK')" id="SEK" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 560px; height: 56px; width: 100%;">
                                                    <img src="./graph/sek.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">SEK</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='sek' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('NZD')" id="NZD" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 616px; height: 56px; width: 100%;">
                                                    <img src="./graph/nzd.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">NZD</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='nzd' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('THB')" id="THB" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 672px; height: 56px; width: 100%;">
                                                    <img src="./graph/thb.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">THB</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='thb' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('PHP')" id="PHP" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 728px; height: 56px; width: 100%;">
                                                    <img src="./graph/php.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">PHP</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='php' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('IDR')" id="IDR" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 784px; height: 56px; width: 100%;">
                                                    <img src="./graph/idr.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">IDR</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='idr' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('EUR')" id="EUR" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 840px; height: 56px; width: 100%;">
                                                    <img src="./graph/eur.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">EUR</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='eur' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('KRW')" id="KRW" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 896px; height: 56px; width: 100%;">
                                                    <img src="./graph/krw.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">KRW</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='krw' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('VND')" id="VND" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 952px; height: 56px; width: 100%;">
                                                    <img src="./graph/vnd.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">VND</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='vnd' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('MYR')" id="MYR" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 1008px; height: 56px; width: 100%;">
                                                    <img src="./graph/myr.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">MYR</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='myr' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="select('CNY')" id="CNY" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 sc-1xp9ndq-3 fzUdiI bNRzcC cTqxjL fHuDfd" style="position: absolute; left: 0px; top: 1064px; height: 56px; width: 100%;">
                                                    <img src="./graph/cny.png" class="evSZVf">
                                                    <div class="lDrFz">
                                                        <div class="css-8mokm4">CNY</div>
                                                    </div>
                                                    <span></span>
                                                    <div class="fzUdiI bNRzcC hXqRIf" style="justify-self: flex-end;">
                                                        <div id='cny' class="sc-1fzrxat-0 iBtliX css-vurnku">
                                                            <?php if (isset($_SESSION["Nickname"]) == null) echo "0"; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sc-1dv6j2d-1 hIoStg">
                <div class="sc-1kykgp9-2 sc-fo3pji-2 bBlAjR kqgdcp"></div>
                <div height="0" class="sc-fo3pji-0 GPpYl">
                    <div class="sc-fo3pji-1 jEWhQd"></div>
                </div>
                <div class="sc-ebxalf-0 dGYAPL" id="swap">
                    <div class="sc-jhay2b-0 ivYrlN">
                        <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                <div class="sc-18nh1jk-0 CBHzA css-10yinq6" style="margin-right: 8px;">兌換</div>
                            </div>
                        </div>
                    </div>
                    <div id="swap-page" class="sc-11ce2lf-0 ilNpYv">
                        <div class="sc-1kykgp9-2 hVQmQD">
                            <div>
                                <div id="swap-currency-input" label="[object Object]" class="sc-33m4yg-0 dgLlAI">
                                    <div class="sc-33m4yg-2 dSgqMY">
                                        <div class="sc-33m4yg-4 hzRLOF">
                                            <button onclick="change_currency('main')" class="sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-3 sc-33m4yg-3 dZkESD dNPClX kbzXQJ open-currency-select-button"><span class="sc-33m4yg-7 iCVyUB">
                                                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                                        <img id="mbtn" src="./graph/twd.png" class="sc-1fvnadz-0 evSZVf" style="margin-right: 0.5rem;">
                                                        <span id="mname" class="sc-33m4yg-9 rqVGX token-symbol-container">TWD</span>
                                                    </div><svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-33m4yg-8 khlnVY">
                                                        <path d="M0.97168 1L6.20532 6L11.439 1" stroke="#AEAEAE"></path>
                                                    </svg>
                                                </span></button>
                                            <input id="minput" class="sc-1x3stf0-0 kjVGCt sc-33m4yg-11 jwQtAL token-amount-input" inputmode="decimal" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" value="">
                                        </div>
                                        <div class="sc-33m4yg-5 sc-33m4yg-6 kvRXYu iipmPE">
                                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                                <?php if (isset($_SESSION["Nickname"]) != null) echo "<div class='sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf' style='height: 17px;'><div class='sc-18nh1jk-0 bTfoun css-1iaqvt6' style='display: inline;'>餘額：<div id='mb' style='display: inline-block'></div></div>"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sc-11ce2lf-1 hjPA-dp" onclick="ms_switch()">
                                    <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg>
                                </div>
                                <div id="swap-currency-output" label="[object Object]" class="sc-33m4yg-0 dgLlAI">
                                    <div class="sc-33m4yg-2 dSgqMY">
                                        <div class="sc-33m4yg-4 hzRLOF"><button onclick="change_currency('sub')" class="sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-3 sc-33m4yg-3 dZkESD dNPClX kbzXQJ open-currency-select-button"><span class="sc-33m4yg-7 iCVyUB">
                                                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                                        <img id="sbtn" src="./graph/null.png" class="sc-1fvnadz-0 evSZVf" style="margin-right: 0.5rem;">
                                                        <span id="sname" class="sc-33m4yg-9 rqVGX token-symbol-container">PICK</span>
                                                    </div>
                                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-33m4yg-8 khlnVY">
                                                        <path d="M0.97168 1L6.20532 6L11.439 1" stroke="#AEAEAE"></path>
                                                    </svg>
                                                </span></button><input id="sinput" class="sc-1x3stf0-0 kjVGCt sc-33m4yg-11 jwQtAL token-amount-input" inputmode="decimal" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" value=""></div>
                                        <div class="kvRXYu iipmPE">
                                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                                <?php if (isset($_SESSION["Nickname"]) != null) echo "<div class='sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf' style='height: 17px;'><div class='sc-18nh1jk-0 bTfoun css-1iaqvt6' style='display: inline;'>餘額：<div id='sb' style='display: inline-block'></div></div>"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION["Nickname"]) == null)
                            echo "<br><button onclick='loginorout()' class='sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-2 dZkESD biggy'>登入</button>";
                        ?>
                        <div class="sc-bdnxRM sc-nrd8cx-0 fzUdiI iwJfPP">
                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf" style="position: relative;">
                                <div class="sc-d5tbhs-1 huBZrQ">
                                    <div style="display: inline-block; line-height: 0; padding: 0.25rem;">
                                        <div width="auto" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-3 bTKPDM bUODqF hlPUP">
                                            <div class="sc-u7b06n-1 EIPBx"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                <div class="EIPBx">
                                    <div class="gtdYdc">
                                        <div id="swapdetail" class="css-zzqfaj"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php
                        if (isset($_SESSION["Nickname"]) != null)
                            echo "<button id='cbtn' onclick='swap()' class='sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-2 dZkESD'>兌換</button>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-1dv6j2d-1 hoStg">
            <div class="sc-ebxalf-0 dGYAPL hide" id="deposit">
                <div id="deposit-page" class="sc-11ce2lf-0 ilNpYv">
                    <div class="sc-1kykgp9-2 hVQmQD">
                        <div>
                            <div class="sc-jhay2b-0 ivYrlN">
                                <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                        <div class="sc-18nh1jk-0 CBHzA css-10yinq6" style="margin-right: 330px;">存款</div>
                                        <button style="width:auto;" onclick="deposit()" id="dbtn" class="loginbtn sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-4 sc-m6ivbz-1 sc-m6ivbz-3 dZkESD keLaW jYJKNI jQINIO heSbaf" disabled="true">
                                            <p class="sc-m6ivbz-5 cijhrM">存入</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="swap-currency-input" label="[object Object]" class="sc-33m4yg-0 dgLlAI">
                                <div class="sc-33m4yg-2 dSgqMY">
                                    <div class="sc-33m4yg-4 hzRLOF">
                                        <button onclick="change_currency('main')" class="sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-3 sc-33m4yg-3 dZkESD dNPClX kbzXQJ open-currency-select-button"><span class="sc-33m4yg-7 iCVyUB">
                                                <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                                    <img id="Dbtn" src="./graph/twd.png" class="sc-1fvnadz-0 evSZVf" style="margin-right: 0.5rem;">
                                                    <span id="dname" class="sc-33m4yg-9 rqVGX token-symbol-container">TWD</span>
                                                </div>
                                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-33m4yg-8 khlnVY">
                                                    <path d="M0.97168 1L6.20532 6L11.439 1" stroke="#AEAEAE"></path>
                                                </svg>
                                            </span></button>
                                        <input id="dinput" class="sc-1x3stf0-0 kjVGCt sc-33m4yg-11 jwQtAL token-amount-input" inputmode="decimal" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" value="">
                                    </div>
                                    <div class="sc-33m4yg-5 sc-33m4yg-6 kvRXYu iipmPE">
                                        <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf" style="height: 17px;">
                                                <div class="sc-18nh1jk-0 bTfoun css-1iaqvt6" style="display: inline;">餘額：<div id="db" style="display: inline-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="sc-jhay2b-0 ivYrlN">
                                <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                        <div class="sc-18nh1jk-0 CBHzA css-10yinq6" style="margin-right: 330px;">提款</div>
                                        <button style="width:auto;" onclick="withdraw()" id="wdbtn" class="loginbtn sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-4 sc-m6ivbz-1 sc-m6ivbz-3 dZkESD keLaW jYJKNI jQINIO heSbaf" disabled="true">
                                            <p class="sc-m6ivbz-5 cijhrM">提領</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="swap-currency-output" label="[object Object]" class="sc-33m4yg-0 dgLlAI">
                                <div class="sc-33m4yg-2 dSgqMY">
                                    <div class="sc-33m4yg-4 hzRLOF"><button onclick="change_currency('sub')" class="sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-3 sc-33m4yg-3 dZkESD dNPClX kbzXQJ open-currency-select-button"><span class="sc-33m4yg-7 iCVyUB">
                                                <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                                    <img id="wbtn" src="./graph/twd.png" class="sc-1fvnadz-0 evSZVf" style="margin-right: 0.5rem;">
                                                    <span id="wname" class="sc-33m4yg-9 rqVGX token-symbol-container">TWD</span>
                                                </div>
                                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-33m4yg-8 khlnVY">
                                                    <path d="M0.97168 1L6.20532 6L11.439 1" stroke="#AEAEAE"></path>
                                                </svg>
                                            </span></button><input id="winput" class="sc-1x3stf0-0 kjVGCt sc-33m4yg-11 jwQtAL token-amount-input" inputmode="decimal" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" value=""></div>
                                    <div class="kvRXYu iipmPE">
                                        <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf" style="height: 17px;">
                                                <div class="sc-18nh1jk-0 bTfoun css-1iaqvt6" style="display: inline;">餘額：<div id="wb" style="display: inline-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-1dv6j2d-1 hoStg">
        <div class="sc-ebxalf-0 dGYAPL hide" id="transfer">
            <div class="sc-jhay2b-0 ivYrlN">
                <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                        <div class="sc-18nh1jk-0 CBHzA css-10yinq6" style="margin-right: 8px;">轉帳</div>
                    </div>
                </div>
            </div>
            <div id="transfer-page" class="sc-11ce2lf-0 ilNpYv">
                <div class="sc-1kykgp9-2 hVQmQD">
                    <div>
                        <div id="swap-currency-input" label="[object Object]" class="sc-33m4yg-0 dgLlAI">
                            <div class="sc-33m4yg-2 dSgqMY">
                                <div class="sc-33m4yg-4 hzRLOF">
                                    <button onclick="change_currency('main')" class="sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-3 sc-33m4yg-3 dZkESD dNPClX kbzXQJ open-currency-select-button"><span class="sc-33m4yg-7 iCVyUB">
                                            <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                                                <img id="tbtn" src="./graph/twd.png" class="sc-1fvnadz-0 evSZVf" style="margin-right: 0.5rem;">
                                                <span id="tname" class="sc-33m4yg-9 rqVGX token-symbol-container">TWD</span>
                                            </div><svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="sc-33m4yg-8 khlnVY">
                                                <path d="M0.97168 1L6.20532 6L11.439 1" stroke="#AEAEAE"></path>
                                            </svg>
                                        </span></button>
                                    <input id="tinput" class="sc-1x3stf0-0 kjVGCt sc-33m4yg-11 jwQtAL token-amount-input" inputmode="decimal" autocomplete="off" autocorrect="off" type="text" pattern="^[0-9]*[.,]?[0-9]*$" placeholder="0.0" minlength="1" maxlength="79" spellcheck="false" value="">
                                </div>
                                <div class="sc-33m4yg-5 sc-33m4yg-6 kvRXYu iipmPE">
                                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                                        <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf" style="height: 17px;">
                                            <div class="sc-18nh1jk-0 bTfoun css-1iaqvt6" style="display: inline;">餘額：<div id="tb" style="display: inline-block">0.00000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-11ce2lf-1 hjPA-dp" style="cursor:auto;">
                                <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <polyline points="19 12 12 19 5 12"></polyline>
                                </svg>
                            </div>
                            <div id="swap-currency-output" label="[object Object]" class="sc-33m4yg-0 dgLlAI">
                                <div class="sc-33m4yg-2 dSgqMY">
                                    <div class="sc-33m4yg-4 hzRLOF"><input id="Einput" class="sc-1x3stf0-0 kjVGCt sc-33m4yg-11 jwQtAL" type="email" placeholder="請輸入對方E-mail" required="" value=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc-bdnxRM sc-nrd8cx-0 fzUdiI iwJfPP">
                        <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf" style="position: relative;">
                            <div class="sc-d5tbhs-1 huBZrQ">
                                <div style="display: inline-block; line-height: 0; padding: 0.25rem;">
                                    <div width="auto" class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-3 bTKPDM bUODqF hlPUP">
                                        <div class="sc-u7b06n-1 EIPBx"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                            <div class="EIPBx">
                                <div class="gtdYdc">
                                    <div id="swapdetail" class="css-zzqfaj"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button id="Tbtn" onclick="transfer()" class="sc-bdnxRM bhVlig sc-fwrjc2-0 sc-fwrjc2-2 dZkESD heSbaf" disabled="true">輸入數額</button>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-1dv6j2d-1 hoStg">
        <div class="sc-ebxalf-0 dGYAL hide" id="record">
            <div class="sc-jhay2b-0 ivYrlN">
                <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-1 fzUdiI bNRzcC cTqxjL">
                    <div class="sc-bdnxRM sc-nrd8cx-0 sc-nrd8cx-4 fzUdiI bNRzcC hXqRIf">
                        <div class="sc-18nh1jk-0 CBHzA css-10yinq6" style="margin-right: 8px;">交易紀錄</div>
                    </div>
                </div>
            </div>
            <div class="sc-jhay2b-0 ivYrl">
                <div style="flex:1 1 0%; position: relative;">
                    <div style="overflow: visible; height:0px;">
                        <div style="position: relative; height: 450px; width: 100%; overflow: auto; will-change: transform; direction: ltr;">
                            <div style="height:500px; width:100%;" id="rd">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="background-radial-gradient" style="width: 200vw; height: 200vh; transform: translate(-50vw, -100vh);">
    </div>
    <script src="./func.js"></script>
</body>

</html>
<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == 0) echo "<script>alert('帳號或密碼錯誤');</script>";
}
?>

<script>
    <?php
    include('./php/simple_html_dom.php');
    include("./php/dbtools.inc.php");
    $data = array();
    $html = file_get_html('https://rate.bot.com.tw/xrt');
    foreach ($html->find('td[data-hide="phone"]') as $e) {
        if (trim($e->innertext) == "-")
            $e->innertext = "0";
        array_push($data, trim($e->innertext));
    }
    $link = create_connection();
    $sql = "UPDATE exchange_rate_buy SET USD = '$data[0]', HKD = '$data[2]', GBP = '$data[4]', AUD = '$data[6]', CAD = '$data[8]', SGD = '$data[10]', CHF = '$data[12]', JPY = '$data[14]', ZAR = '$data[16]', SEK = '$data[18]', NZD = '$data[20]', THB = '$data[22]', PHP = '$data[24]', IDR = '$data[26]', EUR = '$data[28]', KRW = '$data[30]', VND = '$data[32]', MYR = '$data[34]', CNY = '$data[36]'WHERE 1";
    $result = execute_sql("final", $sql, $link);
    $sql = "UPDATE exchange_rate_sell SET USD = '$data[1]', HKD = '$data[3]', GBP = '$data[5]', AUD = '$data[7]', CAD = '$data[9]', SGD = '$data[11]', CHF = '$data[13]', JPY = '$data[15]', ZAR = '$data[17]', SEK = '$data[19]', NZD = '$data[21]', THB = '$data[23]', PHP = '$data[25]', IDR = '$data[27]', EUR = '$data[29]', KRW = '$data[31]', VND = '$data[33]', MYR = '$data[35]', CNY = '$data[37]'WHERE 1";
    $result = execute_sql("final", $sql, $link);
    mysql_close($link);
    ?>
    let USD = [<?php echo $data[0] ?>, <?php echo $data[1] ?>];
    let HKD = [<?php echo $data[2] ?>, <?php echo $data[3] ?>];
    let GBP = [<?php echo $data[4] ?>, <?php echo $data[5] ?>];
    let AUD = [<?php echo $data[6] ?>, <?php echo $data[7] ?>];
    let CAD = [<?php echo $data[8] ?>, <?php echo $data[9] ?>];
    let SGD = [<?php echo $data[10] ?>, <?php echo $data[11] ?>];
    let CHF = [<?php echo $data[12] ?>, <?php echo $data[13] ?>];
    let JPY = [<?php echo $data[14] ?>, <?php echo $data[15] ?>];
    let ZAR = [<?php echo $data[16] ?>, <?php echo $data[17] ?>];
    let SEK = [<?php echo $data[18] ?>, <?php echo $data[19] ?>];
    let NZD = [<?php echo $data[20] ?>, <?php echo $data[21] ?>];
    let THB = [<?php echo $data[22] ?>, <?php echo $data[23] ?>];
    let PHP = [<?php echo $data[24] ?>, <?php echo $data[25] ?>];
    let IDR = [<?php echo $data[26] ?>, <?php echo $data[27] ?>];
    let EUR = [<?php echo $data[28] ?>, <?php echo $data[29] ?>];
    let KRW = [<?php echo $data[30] ?>, <?php echo $data[31] ?>];
    let VND = [<?php echo $data[32] ?>, <?php echo $data[33] ?>];
    let MYR = [<?php echo $data[34] ?>, <?php echo $data[35] ?>];
    let CNY = [<?php echo $data[36] ?>, <?php echo $data[37] ?>];

    var intervalID = setInterval(function() {
        var mname = document.getElementById("mname").textContent;
        var sname = document.getElementById("sname").textContent;
        var dname = document.getElementById("dname").textContent;
        var wname = document.getElementById("wname").textContent;
        var tname = document.getElementById("tname").textContent;
        var minput = document.getElementById('minput').value;
        var sinput = document.getElementById("sinput").value;
        var swapdetail = document.getElementById("swapdetail").textContent;

        if (document.getElementById('out')) {
            $.ajax({
                type: "POST",
                url: "./php/mname.php",
                data: {
                    'mname': mname,
                    'sname': sname,
                    'dname': dname,
                    'wname': wname,
                    'tname': tname
                },
                dataType: 'json',
                success: function(msg) {
                    document.getElementById("mb").textContent = msg.mname;
                    document.getElementById("db").textContent = msg.dname;
                    document.getElementById("wb").textContent = msg.wname;
                    document.getElementById("tb").textContent = msg.tname;
                    if (sname != 'PICK')
                        document.getElementById("sb").textContent = msg.sname;
                }
            });

            $.ajax({
                type: "POST",
                url: "./php/sname.php",
                data: {},
                dataType: 'json',
                success: function(msg) {
                    document.getElementById("twd").textContent = msg.TWD;
                    document.getElementById("usd").textContent = msg.USD;
                    document.getElementById("hkd").textContent = msg.HKD;
                    document.getElementById("gbp").textContent = msg.GBP;
                    document.getElementById("aud").textContent = msg.AUD;
                    document.getElementById("cad").textContent = msg.CAD;
                    document.getElementById("sgd").textContent = msg.SGD;
                    document.getElementById("chf").textContent = msg.CHF;
                    document.getElementById("jpy").textContent = msg.JPY;
                    document.getElementById("zar").textContent = msg.ZAR;
                    document.getElementById("sek").textContent = msg.SEK;
                    document.getElementById("nzd").textContent = msg.NZD;
                    document.getElementById("thb").textContent = msg.THB;
                    document.getElementById("php").textContent = msg.PHP;
                    document.getElementById("idr").textContent = msg.IDR;
                    document.getElementById("eur").textContent = msg.EUR;
                    document.getElementById("krw").textContent = msg.KRW;
                    document.getElementById("vnd").textContent = msg.VND;
                    document.getElementById("myr").textContent = msg.MYR;
                    document.getElementById("cny").textContent = msg.CNY;
                }
            });
        }

        if (mname == 'TWD' && sname == 'TWD' && minput != "") {
            document.getElementById("sinput").value = minput;
            document.getElementById("swapdetail").textContent = "1 " + mname + " = 1 " + sname;
        } else if (mname == 'TWD' && sname != 'PICK' && sname != 'TWD' && minput != "") {
            num = parseFloat(minput) / parseFloat(eval(sname + '[1]'));
            document.getElementById("sinput").value = num.toFixed(5);
            document.getElementById("swapdetail").textContent = "1 " + mname + " = " + String((1 / parseFloat(eval(sname + '[1]'))).toFixed(5)) + " " + sname;
        } else if (mname != 'TWD' && sname != 'PICK' && sname != 'TWD' && minput != "") {
            num = parseFloat(minput) * parseFloat(eval(mname + '[0]'));
            num = num / parseFloat(eval(sname + '[1]'));
            document.getElementById("sinput").value = num.toFixed(5);
            document.getElementById("swapdetail").textContent = "1 " + mname + " = " + String(eval(mname + '[0]')) + " TWD" + " -> 1 TWD = " + String((1 / parseFloat(eval(sname + '[1]'))).toFixed(5)) + " " + sname;
        } else if (mname != 'TWD' && sname != 'PICK' && sname == 'TWD' && minput != "") {
            num = parseFloat(minput) * parseFloat(eval(mname + '[0]'));
            document.getElementById("sinput").value = num.toFixed(5);
            document.getElementById("swapdetail").textContent = "1 " + mname + " = " + String((1 / parseFloat(eval(mname + '[0]'))).toFixed(5)) + " " + sname;
        }

    }, 500);


    var interval = function() {
        var table = document.getElementById("rd");
        table.innerHTML = "";
        $.ajax({
            type: "post",
            url: "./php/record.php",
            data: {},
            dataType: "json",
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    table.innerHTML += "<div class='fzUdiI bNRzcC cTqxjL HuDfd' style='position: absolute; left: 0px; top: " + i * 56 + "px; height: 56px; width: 100%;'><div class='lDrFz'><div class='css-8mokm4'>" + data[i][0] + "</div></div><div class='fzUdiI bNRzcC hXqRIf'><div class='sc-1fzrxat-0 iBtliX css-vurnku'>" + data[i][1] + "</div></div></div>";
                }
            }
        });
        return interval;
    }
    setInterval(interval(), 10000);


    function swap() {
        var mname = document.getElementById("mname").textContent;
        var sname = document.getElementById("sname").textContent;
        var minput = document.getElementById('minput').value;
        var sinput = document.getElementById("sinput").value;
        $.ajax({
            type: "POST",
            url: "./php/swap.php",
            data: {
                'mname': mname,
                'minput': minput,
                'sname': sname,
                'sinput': sinput
            },
            dataType: 'json',
            success: function(msg) {
                alert(minput + " " + mname + " 已換成 " + sinput + " " + sname);
                console.log(msg.TWD)
            }
        });
    }

    function deposit() {
        var dname = document.getElementById("dname").textContent;
        var dinput = document.getElementById('dinput').value;
        $.ajax({
            type: "POST",
            url: "./php/deposit.php",
            data: {
                'dname': dname,
                'dinput': dinput
            },
            dataType: 'json',
            success: function(msg) {
                alert("已存入 " + dinput + " " + dname)
            }
        })
    }

    function withdraw() {
        var wname = document.getElementById("wname").textContent;
        var winput = document.getElementById('winput').value;
        $.ajax({
            type: "POST",
            url: "./php/withdraw.php",
            data: {
                'wname': wname,
                'winput': winput
            },
            dataType: 'json',
            success: function(msg) {
                alert("已提領 " + winput + " " + wname)
            }
        })
    }

    function transfer() {
        var tname = document.getElementById("tname").textContent;
        var tinput = document.getElementById('tinput').value;
        var oemail = document.getElementById('Einput').value;
        $.ajax({
            type: "POST",
            url: "./php/transfer.php",
            data: {
                'tname': tname,
                'tinput': tinput,
                'oemail': oemail
            },
            dataType: 'json',
            success: function(msg) {
                if (msg == '0')
                    alert("該E-mail不存在")
                else
                    alert("已將 " + tinput + " " + tname + " 轉給 " + oemail)
            }
        })
    }

    window.addEventListener('hashchange', function(e) {
        if (e.oldURL == "http://127.0.0.1/BankSwap/#/swap" || e.oldURL == "http://127.0.0.1/BankSwap/")
            document.getElementById('swap').className += ' hide';
        else if (e.oldURL == "http://127.0.0.1/BankSwap/#/deposit")
            document.getElementById('deposit').className += ' hide';
        else if (e.oldURL == "http://127.0.0.1/BankSwap/#/transfer")
            document.getElementById('transfer').className += ' hide';
        else if (e.oldURL == "http://127.0.0.1/BankSwap/#/record")
            document.getElementById('record').className += ' hide';
        if (e.newURL == "http://127.0.0.1/BankSwap/#/deposit")
            document.getElementById('deposit').classList.remove('hide');
        else if (e.newURL == "http://127.0.0.1/BankSwap/#/swap")
            document.getElementById('swap').classList.remove('hide');
        else if (e.newURL == "http://127.0.0.1/BankSwap/#/transfer")
            document.getElementById('transfer').classList.remove('hide');
        else if (e.newURL == "http://127.0.0.1/BankSwap/#/record")
            document.getElementById('record').classList.remove('hide');
    }, false);
</script>