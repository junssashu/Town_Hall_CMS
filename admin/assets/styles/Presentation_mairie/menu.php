<?php
header('Content-type: text/css');
$align = "center";

?>
@import url("http://fonts.googleapis.com/css?family=Poppins");
@import url("http://fonts.googleapis.com/css?family=Pacifico&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@1&family=Raleway&display=swap');
*{
    margin: 0;
    padding: 0;
    transition: all 0.5s ease;
}

body {
    font-family: 'Poppins';
    text-align: <?=$align?>;
}

.wrapper {
    width: 90%;
    margin : 0 auto;
    overflow: hidden;
}

header {
    width: 100%;
    height: 100px;
    background: #c0393b;
    position: fixed;
}

.logo {
    width: 30%;
    float: left;
    text-align: left;
    line-height:100px;
}

.logo a{
    text-decoration: none;
    font-size:30px;
    font-family: 'Pacifico';
    color: #fff;
    letter-spacing: 4px;
}

nav {
    float: right;
    line-height:100px;
}

nav a {
    text-decoration: none;
    font-weight: bold;
    font-family: Poppins;
    letter-spacing: 1px;
    font-size: 15px;
    padding: 10px;
    color: #fff;
    border-radius: 10px;
    margin: 0 1px;
    border: 2px solid #fff;
}

nav .s_inscrire{
    text-decoration: none;
    font-weight: bold;
    font-family: Poppins;
    letter-spacing: 1px;
    font-size: 15px;
    padding: 10px;
    color: #c0393b;
    border-radius: 10px;
    margin: 0 1px;
    background:#fff;
}

nav a:hover {
    background: rgb(255, 240, 240);
    color: #c0393b;
    /* border-bottom: 3px black solid; */
    border-radius: 10px;
}

nav .s_inscrire:hover {
    background:none;
    color: #fff;
    border: 2px solid #fff;
}

.banner {
    background-image: url("../content/banner_BG.jpg");
    background-position: center center;
    background-size: cover;
    top: 10%;
    width: 100vw;
    height: 60vh;
    position: fixed;
}

.banner:after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: #130f40;
    opacity: .7;
    z-index: -1;
}

.banner h2{
    padding-top: 6%;
    align-content: center;
    width: 60%;
    margin: auto;
    font-size : 40px;
    justify-content: center;
    color: #fff
}

.banner span{
    color: #fff;
}

.se_connecter a:link, .se_connecter a:visited{
    border: 2px solid #fff;
    color: #ffffff;
    padding: 10px;
    text-decoration: none;
    border-radius: 10px;
}

.se_connecter a:hover{
    background: #fff;
    color: #130f40;
    font-weight: bolder;
}

.content-area{
    width: 100%;
    position: relative;
    background: #fff;
    top: 550px;
}

.content-area h2{
    font-size: 40px;
    margin: 0;
    padding-top: 30px;
    letter-spacing: 4px;
}

.other_content{
    background: #130f40;
    width: 100%;
    height: 400px;
    padding-top: 100px;
}

.other_content p:is(:first-child){
    line-height: 30px;
    width: 50%;
    color: #fff;
    margin-left: auto;
    margin-right: auto;
    margin-top:10px;
    padding-top: 2%;
    letter-spacing: 4px;
    font-family: 'Poppins';
    text-align: center;
    font-weight: 200;
}

.other_content p{
    line-height: 30px;
    width: 50%;
    color: #fff;
    margin-left: auto;
    margin-right: auto;
    padding-top: 2%;
    letter-spacing:4px;
    font-family: 'Poppins';
    text-align: center;
    font-weight: 200;    
}

.butoon:link, .butoon:visited{
    padding: 10px;
    color :#fff;
    border: .5px solid #fff;
    border-radius: 6px;
    text-decoration: none;
    transition: all .5s ease-in;
}

.butoon:hover {
    background: #fff;
    color: #130f40;
    transition: all .5s ease-out;
}

.container{
    max-width: 1170px;
    margin: auto;

}

.row{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

ul[class=list-footer]{
    list-style:none;
}

.content {
    display: flex;
    flex-direction: column;
    position: absolute;

    text-align: center;
    justify-content: center;

    z-index: -10;
    height: 60%;
    width: 100%;
    background-image: url("../../content/mountain.jpg");
}

.nom {
    font-family: 'Pacifico';
    font-style:bold;
    font-size:300%;
    color:red;
}

.second-titre {
    font-family: 'Gentium Plus', serif;
    font-size: 200%;
    color:rgb(145, 192, 17);
}

.detail {
    font-family: 'Raleway', sans-serif;
    color: black;

}

.footer {
    background-color: rgb(31, 31, 31);
    box-sizing: border-box;
    color: white;
    font-family: 'Poppins';
    padding: 70px 0;
    margin-top: 30%;
    
}

.footer-col{
    width: 25%;
    padding: 0 15px;
}

.footer-col h4{
    font-size: 18px;
    text-transform: capitalize;
    margin-bottom: 30px;
    position: relative;
}

.footer-col h4::before{
    content: "";
    position: absolute;
    left: 10;
    bottom: -10px;
    height:4px;
    background-color:#c0393b;
    box-sizing: border-box;
    width: 50px;
}

.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}

.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight:bolder;
    color: #bbbbbb;
    display: block;   
    transition: all 0.3s ease;
}

.footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
}

.wrapper p{
    margin: auto;
}

/*  gestion du carousel */
.carousel_Presentation{
    /* overflow: hidden; */
    width: 100%;
    height: 600px;
    box-sizing: border-box;
    display: flex;
}

.image_1{
    padding: 40px;
    width: 100%;
    transition: all 0.4s ease;
}

.image_1 img{
    object-fit: contain;
    width: 100%;
    height: 100%;
}

.image_2{
    padding: 40px;
    width: 200%;
    transition: all 0.4s ease;
}

.image_2 img{
    object-fit: contain;
    width: 100%;
    height: 100%;
}

.image_3{ 
    padding: 40px;
    width: 100%;
    transition: all 0.4s ease;
}

.image_3 img{
    object-fit: contain;
    width: 100%;
    height: 100%;
}

.image_1:hover{
    width: 200%;
}

.image_2:hover{
    width: 100%;
}

.image_3:hover{
    width: 200%;
}


.wrapper p{
    background: #130f40;
    width: 100%;
    margin: 0;
    font-family: 'Poppins';
    padding: 0;
    left: 0;
    float: left;
    right: 0;
}

.under_elaborer {
    width: 100%;
    font-weight: bolder;
}

.under_elaborer a:link, .under_elaborer a:visited {
    text-decoration: none;
    font-family: 'Pacifico';
}

.under_elaborer a:hover{
    text-decoration: underline dotted ;
    line-height:5px;
    color: #4f279b
}


table {
    align-self: center;
    width: 80%;
    border-color: rgb(216, 14, 14);
    border-width: 0.3em;
    border-style:solid;
    text-align: center;
    column-rule-style: solid;
    column-rule-width: 0.3em;
    column-rule-color: rgb(216, 14, 14);
    color:white;
    background-color:#c0393b;
    margin: auto;
}

td .upd {
    text-decoration: none;
    color: rgb(110, 177, 10);
}

td .del {
    text-decoration: none;
    color: rgb(253, 164, 0);
}

a[class="upd"]:visited {
    color: rgb(110, 177, 10);
} 

a[class="del"]:visited {
    color: rgb(253, 164, 0);
}
