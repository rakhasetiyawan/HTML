<!doctype html>
<html>
<head>
<title>Input Data</title>
<style type="text/css">
<!--
#wrapper {
    width:450px;
    margin:0 auto;
    font-family:Verdana, sans-serif;
    }

legend {
    color:#0481b1;
    font-size:16px;
    padding:0 10px;
    background:#fff;
    -moz-border-radius:4px;
    box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
    padding:5px 10px;
    text-transform:uppercase;
    font-family:Helvetica, sans-serif;
    font-weight:bold;
    }
fieldset {
    border-radius:4px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #f9f9f9);
    background: -o-linear-gradient(#fff, #f9f9f9);
    background: -webkit-linear-gradient(#fff, #f9f9f9);
    padding:20px;
    border-color:rgba(4, 129, 177, 0.4);
}

input,
textarea {
    color: #373737;
    background: #fff;
    border: 1px solid #CCCCCC;
    color: #aaa;
    font-size: 14px;
    line-height: 1.2em;
    margin-bottom:15px;
    border-radius:4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
}

input[type="text"],
input[type="password"] {
    padding: 8px 6px;
    height: 22px;
    width:280px;
}

input[type="text"]:focus,
input[type="password"]:focus {
    background:#f5fcfe;
    text-indent: 0;
    z-index: 1;
    color: #373737;
    -webkit-transition-duration: 400ms;
    -webkit-transition-property: width, background;
    -webkit-transition-timing-function: ease;
    -moz-transition-duration: 400ms;
    -moz-transition-property: width, background;
    -moz-transition-timing-function: ease;
    -o-transition-duration: 400ms;
    -o-transition-property: width, background;
    -o-transition-timing-function: ease;
    width: 380px;

    border-color:#ccc;
    box-shadow: 0 0 5px rgba(4, 129, 177, 0.5);
    opacity:0.6;
}

input[type="submit"] {
    background: #222;
    border: none;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
    text-transform:uppercase;
    color: #eee;
    cursor: pointer;
    font-size: 15px;
    margin: 5px 0;
    padding: 5px 22px;
    border-radius: 4px;
    box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
}
   
    
    -->
    </style>
</head>
<body>
<div id="wrapper">
    <form action="aksiinput.php" method="post">
        <fieldset>
            <legend>Formulir Registrasi</legend>
            <div>
                <input type="text" name="nama_depan" placeholder="Nama Depan"/>
            </div>
            <div>
                <input type="text" name="nama_belakang" placeholder="Nama Belakang"/>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password"/>
            </div>
            <div>
                <input type="text" name="email" placeholder="Email"/>
            </div>
            <input type="submit" name="submit" value="Kirim"/>
        </fieldset>
    </form>
</div>
</body>
</html>
