<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>login guys</title>
<style type="text/css">
<!--
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
    display: block;
}

body {
    line-height: 1;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

body {
    font: 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #404040;
    background: #2d4259;
}
.register-judul {
    width: 270px;
    line-height: 43px;
    margin: 50px auto 20px;
    font-size: 19px;
    font-weight: 500;
    color: white;
    color: rgba(255, 255, 255, 0.95);
    text-align: center;
    text-shadow: 0 1px rgba(0, 0, 0, 0.3);
    background: #d7604b;
    border-radius: 3px;
    box-shadow: inset 0 0 1px rgba(255, 255, 255, 0.1), 
                0 0 1px 1px rgba(0, 0, 0, 0.1), 
                0 1px 3px rgba(0, 0, 0, 0.3);
}

.register {
    margin: 0 auto;
    width: 230px;
    padding: 20px;
    background: #f4f4f4;
    border-radius: 3px;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 
                0 1px 3px rgba(0, 0, 0, 0.3);
}

input {
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.register-masukan {
    display: block;
    width: 100%;
    height: 38px;
    margin-top: 2px;
    font-weight: 500;
    background: none;
    border: 0;
    border-bottom: 1px solid #d8d8d8;
}

.register-masukan:focus {
    border-color: #1e9ce6;
    outline: 0;
}

.register-tombol {
    display: block;
    width: 100%;
    height: 42px;
    margin-top: 25px;
    font-size: 16px;
    font-weight: bold;
    color: #494d59;
    text-align: center;
    text-shadow: 0 1px rgba(255, 255, 255, 0.5);
    background: #fcfcfc;
    border: 1px solid;
    border-color: #d8d8d8 #d1d1d1 #c3c3c3;
    border-radius: 2px;
    cursor: pointer;
    background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
    background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
    background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
    background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
    box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
}

.register-tombol:active {
    background: #eee;
    border-color: #c3c3c3 #d1d1d1 #d8d8d8;
    background-image: -webkit-linear-gradient(top, #eeeeee, #fcfcfc);
    background-image: -moz-linear-gradient(top, #eeeeee, #fcfcfc);
    background-image: -o-linear-gradient(top, #eeeeee, #fcfcfc);
    background-image: linear-gradient(to bottom, #eeeeee, #fcfcfc);
    box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
}

.register-tombol:focus {
    outline: 0;
}

.register-tukar {
    height: 32px;
    margin-bottom: 15px;
    padding: 4px;
    background: #6db244;
    border-radius: 2px;
    background-image: -webkit-linear-gradient(top, #60a83a, #7dbe52);
    background-image: -moz-linear-gradient(top, #60a83a, #7dbe52);
    background-image: -o-linear-gradient(top, #60a83a, #7dbe52);
    background-image: linear-gradient(to bottom, #60a83a, #7dbe52);
    box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
}

.register-tukar-input {
    display: none;
}

.register-tukar-label {
    float: left;
    width: 50%;

    line-height: 32px;
    color: white;
    text-align: center;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.register-tukar-input:checked + .register-tukar-label {
    font-weight: 500;
    color: #434248;
    text-shadow: 0 1px rgba(255, 255, 255, 0.5);
    background: white;
    border-radius: 2px;
    background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
    background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
    background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
    background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.1);
}

:-moz-placeholder {
    color: #aaa;
    font-weight: 300;
}

::-moz-placeholder {
    color: #aaa;
    font-weight: 300;
    opacity: 1;
}

::-webkit-input-placeholder {
    color: #aaa;
    font-weight: 300;
}

:-ms-input-placeholder {
    color: #aaa;
    font-weight: 300;
}

::-moz-focus-inner {
    border: 0;
    padding: 0;
}
-->
</style>
</head>
<body>
<h1 class="register-judul">Selamat Datang</h1>
<form class="register" action="aksilogin.php" method="post">
        <input type="text" name="username" class="register-masukan" placeholder="username">
        <input type="password" name="password" class="register-masukan" placeholder="password">
        <input type="submit" value="Login" class="register-tombol">
    </form>
</body>
</html>
