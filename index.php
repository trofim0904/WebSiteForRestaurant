<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/nonstyle.css" />
    <link rel="stylesheet" type="text/css" href="style/header.css" />
    <link rel="stylesheet" type="text/css" href="style/about.css" />
    <link rel="stylesheet" type="text/css" href="style/footer.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Ресторан Sopilka</title>
</head>
<body>
    <header>
        <nav>
        <ul>
                <li><a href="index.php" class="active">Про Нас</a></li>
                <li><a href="menu.php#menutitle">Меню</a></li>
                <li><a href="gallery.php">Галерея</a></li>
                <li><a href="reserv.php#reserv-table">Резервування</a></li>
                <li><a href="JavaScript:alert('На даний момент сторінка КОНТАКТИ не доступна');">Контакти</a></li>
         
            
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <div class="center-text">
            
            <h1><p>ресторан</p>Sopilka</h1>
            <div class="center-button">
                <a href="JavaScript: let isGo = confirm('Ви дійсно хочете замовити столик?'); if(isGo){window.location.href = 'reserv.php#reserv-table';}">Замовити столик</a>
            </div>
        </div>
    </header>
    <main>
        <div class="about-us container">
            <h2>Про Нас</h2>
            <div class="about-section">
                <div class="about-text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
                <img src="img/about_first.jpg" alt="About us picture" title="About us picture">
            </div>
            <div class="about-section">
                <div class="about-text" style="order: 2;"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
                <img src="img/about_second.jpg" style="order: 1;" alt="About us picture" title="About us picture">
            </div>
            <div class="about-section">
                <div class="about-text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
                <img src="img/about_third.jpg" alt="About us picture" title="About us picture">
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="first-level">
            <div class="footer-block" style="text-align: left;">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="footer-block">
                <h5>Контакти</h5>
                <div class="phone-number">
                    <a href="tel:0999999999">0 (99) 999 99 99</a>
                </div>
                <div class="phone-number">
                    <a href="tel:0999999999">0 (99) 999 99 99</a>
                </div>
                <div class="phone-number">
                    <a href="tel:0999999999">0 (99) 999 99 99</a>
                </div>
            </div>
    </div>
    <div class="informers-block">
        <h5>Інформери</h5>
        <div style="display: flex; color: #fff; justify-content: space-between;">
            <!-- weather widget start --><a target="_blank" href="https://hotelmix.com.ua/weather/kiev-18881"><img src="https://w.bookcdn.com/weather/picture/32_18881_1_29_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=966&anc_id=53644"  alt="booked.net"/></a><!-- weather widget end -->
            <!-- clock widget start -->
            <script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-100x100.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_4_1449149266"><div style="width:100px; height:100px; margin: 0 auto;"><a href="https://hotelmix.com.ua/time/kiev-18881">Київ</a><br/></div></div> <script type="text/javascript"> function setWidgetData_1449149266(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_1449149266 = -1; </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=966&type=4&id=1449149266&scode=124&city_id=18881&wlangid=29&mode=0&details=0&background=000000&color=ffffff&add_background=ffffff&add_color=c9207b&head_color=ffffff&border=1&transparent=0"></script>
            <!-- clock widget end -->
            <!-- Minfin.com.ua currency informer 150x120 grey-->
            <div id="minfin-informer-m1Fn-currency">Завантажуємо <a href="https://minfin.com.ua/ua/currency/" target="_blank">курси валют</a> від minfin.com.ua</a></div><script>var iframe = '<ifra'+'me width="150" height="120" fram'+'eborder="0" src="https://informer.minfin.com.ua/ua/gen/course/?color=grey" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:150px;height:120px;ove'+'rflow:hidden;"></iframe>';var cl = 'minfin-informer-m1Fn-currency';document.getElementById(cl).innerHTML = iframe; </script><noscript><img src="https://informer.minfin.com.ua/gen/img.png" width="1" height="1" alt="minfin.com.ua: курси валют" title="Курс валют" border="0" /></noscript>
            <!-- Minfin.com.ua currency informer 150x120 grey-->
        </div>
    </div>
    
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>

    
</body>
</html>