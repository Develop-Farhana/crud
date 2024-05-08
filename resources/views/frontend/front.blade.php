<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Sri</title>
  

</head>
<body>



     
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <style type="text/css">
        /* Code/Modify CSS code to have your own style. --!> */

@import url("https://fonts.googleapis.com/icon?family=Material+Icons");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.header > input, 
.header > label 
{
  display: none;
}
.header {
  display: block;
  width: 100%;
  background-color: #3b0eb5;
}
.header > .nav {
  display: inline-block;
  width: 100%;
  padding: 16px;
}
.header > .nav > .quick-access {
 display: inline-block; 
  width: 15%;
  margin-right: -4px;
}
.header > .nav > .user-group {
  display: inline-block;  
  width: 60%;
  margin-right: -4px;
  text-align: right;
}
.header > .nav li {
  display: inline-block;
  padding-left: 4px;
  padding-right: 4px;
  padding-bottom: 4px;
}
.header > .nav li > a{
  color: white;
  font-family: sans-serif;
  font-size: 75%;
  text-transform: uppercase;
  text-decoration: none;
}
.header > .nav > .quick-access a{
    color: white;
    text-transform: uppercase;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 25px;
}
.search{
    display: inline-block;
    width: 15%;
}
.ecom-group li{
    color: white;
}
.ecom-group{
    display: inline-block;
    width: 25%;
    text-align: end;
}
.age #up-arrow, .brand #up-arrow{
    display: none;
}
.age:hover #up-arrow, .brand:hover #up-arrow{
    display: inline-block;
}
.age:hover #down-arrow, .brand:hover #down-arrow{
    display: none;
}
.slideshow {
    display: block;
    width: 100%;
    height: auto;
    position: relative;
    overflow: hidden;
}
.slide {
    display: none;
    width: 100%;
    height: auto;
    overflow: hidden;
}
.slideshow > input {
    display: none;
}
.slideshow > input:checked + label + .slide {
    display: block
}
.slideshow > label {
    display: inline-block;
    width:8px;
    height:8px;
    position: absolute;
    bottom: 15%;
    z-index: 100;
    background-color: lightgrey;
}
.slideshow > input:checked + label {
    background-color: white;
}
.slideshow > label:nth-of-type(1) {
    left: 60px;
}
.slideshow > label:nth-of-type(2) {
    left: 80px;
}
.slideshow > label:nth-of-type(3) {
    left: 100px;
}
.slide video, .slide img {
    height: auto;
    overflow: hidden;
    width: 100%;
}
.slide > span {
    width: 400px;
    position: absolute;
    bottom: 65%;
    left: 60px;
    color: white;
    font-size: 280%;
}
.slide > a {
    display: block;
    width: auto;
    height: auto;
    padding: 14px;
    border: solid 5px white;
    position: absolute;
    bottom: 25%;
    left: 60px;
    color: white;
    font-family: sans-serif;
    font-size: 120%;
    text-decoration: none;
}
.brand-names{
    display: none;
    position: absolute;
    background: #360da6;
    z-index: 9;
    top: 28px;
    right: 0;
    gap: 15px;
    padding: 15px;
}
.brand:hover .brand-names{
    display: grid;
    grid-template-columns: auto auto auto auto auto;
}
.user-group{
    position: relative;
}
.brand-names img{
    width: 80px;
}
.header .brand-names li{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 10px;
    background: #F3E8FF;
    cursor: pointer;
}
.brand span, .age span{
    position: relative;
    top: 8px;
}
.age-numbers{
    display: none;
    background: #360da6;
}
.age:hover .age-numbers{
    position: absolute;
    z-index: 9;
    display: grid;
    top: 28px;
    right: 62px;
}
.age:hover{
    background-color: #9673f5;
}
.age .age-numbers li{
    color: white;
    padding: 0px 25px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.age .age-numbers li:hover{
    background: #9673f5;
    cursor: pointer;
}
.brand:hover{
    background: #360da6;
}
.header .brand-names li:hover{
    background-color: white;
}
.slide > a:hover{
    background: white;
    color: black;
}
.slide span{
    color: #4f36a8;
    background: white;
    padding-left: 10px;
}
.slide a{
    border-color: #4f36a8;
    background: #4f36a8;
}
.fav-cat h2{
    text-align: center;
}
.cat-row{
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    text-align: center;
    padding: 25px 0px;
}
.fav-cat{
    max-width: 1440px;
    margin: auto;
}
.fav-cat h2{
    text-align: center;
    padding: 20px 0px;
}
.box img{
    width: 100%;
    text-align: center;
}
.cat-row .box h3{
    padding: 20px 0px;
    font-size: 25px;
}
.cat-row .box{
    padding: 10px;
}
.cat-row .box .shop a{
    border: solid 1px black;
    padding: 10px 15px;
    border-radius: 25px;
}
.newsletter{
    text-align: center;
    background-color: #3b0eb5;
    color: white;
    padding: 20px 0px;
    margin-top: 20px;
}
.newsletter h1{
    margin: 15px 0;
}
.newsletter p{
    margin: 10px 0;
}
.newsletter input{
    margin: 10px 0;
    width: 500px;
    padding: 15px;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    border-color: white;
}
.newsletter button{
    margin: 10px 0;
    height: 50px;
    background: white;
    border-color: white;
    padding: 0px 10px;
    border: solid 1px white;
    cursor: pointer;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    background: #7c6bc2;
    color: white;
}
.news-mail{
    display: flex;
    justify-content: center;
    align-content: center;
}
.footer{
    background-color: #2e2e2e;
    color: #D0D0D0;
}
.footer .container{
    max-width: 1440px;
    margin: auto;
    padding: 50px 0;
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
}
.footer ul li{
    list-style: none;
}
.footer h4{
    padding-bottom: 15px;
}
.footer .container div{
    padding: 0 20px;
}
.footer .container h4{
    border-top: solid;
    font-size: 20px;
}
.footer ul li{
    list-style: none;
    margin: 10px 0px;
}
.footer .title{
    font-size: 50px !important;
    font-family: sans-serif;
    border-top: none !important;
}
.copyright{
    font-family: sans-serif;
    text-align: center;
}
.ecom-group .material-symbols-outlined{
    position: relative;
    top: 6px;
}
.shop a{
    cursor: pointer;
}
.ecom-group-mobile{
    display: none;
}


@media all and (max-width: 1200px){
    .slide > span{
        font-size: 240%
    }
    .cat-row .box h3{
        font-size: 20px;
    }
}
@media all and (max-width: 992px){
    .header > .nav > .user-group{
        width: 50%;
    }
    .ecom-group{
        width: 35%;
    }
    .slide > span{
        font-size: 200%;
    }
    .slide > span{
        bottom: 60%;
    }
    .slide > a{
        font-size: 80%;
        padding: 10px;
    }
    .cat-row .box h3{
        font-size: 18px;
    }
}
@media all and (max-width: 767px){
    .header > .nav > .user-group{
        width: 40%;
    }
    .header > .nav > .quick-access{
        width: 25%;
    }
    .header > #nav + label + .nav{
        display: none;
        width: 320px;
        padding: 16px;
        background-color: lightgrey;
    }
    .header > #nav:checked + label + .nav{
        display: block;
    }
    .header > .nav > .quick-access{
        display: block;
        width: 100%;
        text-align: center;
        border: 1px dotted grey;
        border-width: 0 0 1px 0;
    }
    .header > .nav > .quick-access > li{
        display: inline-block;
        margin-top:0;
        margin-right:4px;
        margin-bottom: 16px;
        margin-left: 4px;
    }
    .header > .nav > .user-group{
        display: block;
        width: 100%;
        text-align: left;
    }
    .header > .nav > .user-group > li {
        display: block;
        margin-top: 16px;
        margin-right: 4px;
        margin-bottom: 0;
        margin-left: 15px;
        font-size: 130%;
    }
    .header > .nav {
        position: absolute;
        top: 48px;
        left: 0px;
        z-index: 999;
        text-align: left;
    }
    .header > label {
        display: inline-block;
        width: 48px;
        height: 48px;
        padding: 16px;
        color: white;
    }
    .header > .nav > .quick-access > li > a,
    .header > .nav > .user-group > li > a 
    {
        color: black;
    }
    .ecom-group .material-symbols-outlined{
        display: none !important;
    }
    .ecom-group-mobile{
        display: inline-block;
    }
    .ecom-group-mobile{
        float: right;
        margin-top: 16px;
        display: flex;
        width: 150px;
        justify-content: space-around;
        color: white;
    }
    .age:hover{
        background-color: unset;
    }
    .age:hover .age-numbers{
        position: unset;
    }
    .brand:hover .brand-names{
        position: unset;
        grid-template-columns: auto auto;
    }
    .brand:hover{
        background: unset;
    }
    .ecom-group{
        text-align: left;
    }
    .header > .nav li > a{
        color: black;
    }
    ul.ecom-group li{
        margin-top: 16px;
        margin-right: 4px;
        margin-bottom: 0;
        margin-left: 15px;
    }
    .slide > span{
        font-size: 150%;
        width: 220px;
    }
    .slide > a{
        font-size: 70%;
        padding: 7px;
    }
    .slideshow > label{
        bottom: 10%;
    }
    .cat-row{
        grid-template-columns: auto auto;
    }
    .box img{
        width: 220px;
    }
    .footer .container{
        grid-template-columns: auto;
    }
}
    </style>
    <body>
        <div class="header">
            <input type="checkbox" id="nav" />
            <label for="nav" class="material-icons">dehaze</label>
            
            <div class="nav">
                <div class="quick-access">
                    <h3>
                    <a href="#">DOLLKART</a>
                    </h3>
                </div>
                <ul class="user-group">
                    <li>
                        <a href="#">Shop Toys</a>
                    </li>
                    <li class="age">
                        <a>By Age <span class="material-symbols-outlined" id="down-arrow">expand_more</span><span class="material-symbols-outlined" id="up-arrow">expand_less</span></a>
                        <ul class="age-numbers">
                            <li>0-12 years</li>
                            <li>1-2 years</li>
                            <li>3-4 years</li>
                            <li>5-6 years</li>
                            <li>7-9 years</li>
                            <li>10+ years</li>
                        </ul>
                    </li>
                    <li class="brand">
                        <a>By Brand <span class="material-symbols-outlined" id="down-arrow">expand_more</span><span class="material-symbols-outlined" id="up-arrow">expand_less</span></a>
                        <ul class="brand-names">
                            <li><img src="https://i.imgur.com/eccYhEd.png" ></li>
                            <li><img src="https://i.imgur.com/riokx3a.png" ></li>
                            <li><img src="https://i.imgur.com/91CIoGU.png" ></li>
                            <li><img src="https://i.imgur.com/qm3NqMv.png" ></li>
                            <li><img src="https://i.imgur.com/fmxHvrN.png" ></li>
                            <li><img src="https://i.imgur.com/vrsaI2y.png" ></li>
                            <li><img src="https://i.imgur.com/zAUipwD.png" ></li>
                            <li><img src="https://i.imgur.com/rzBzIQl.png" ></li>
                            <li>All Categories</li>
                        </ul>
                    </li>
                </ul>
                <ul class="ecom-group">
                    <li class="material-symbols-outlined">
                        search
                    </li>
                    <li>
                        <a>Sign In </a>
                    </li>
                    <li>
                        <a>Sign Up</a>
                    </li>
                    <li class="material-symbols-outlined">
                        favorite
                    </li>
                    <li class="material-symbols-outlined">
                        shopping_cart
                    </li>
                </ul>
            </div>
            <ul class="ecom-group-mobile">
                <li class="material-symbols-outlined">
                    search
                </li>
                <li class="material-symbols-outlined">
                    favorite
                </li>
                <li class="material-symbols-outlined">
                    shopping_cart
                </li>
            </ul>
        </div>
        <div class="slideshow">
          @foreach ($banners as  $banner)
            <input type="radio" checked id="s1" name="slide" />
            <label for="s1"></label>
            <div class="slide">
                <span>The Finest Toy Shop in the World.</span>
                <a href="https://www.youtube.com/embed/_8HxXDIt7Sg?rel=0&" target="_blank">Buy Now</a>
                <img src="{{ asset($banner->image)}}" alt="sci school building">
            </div>
            @endforeach
            <!-- slide #2 -->
            
          
        </div>
        <div class="fav-cat">
            <h2>Favourite Categories</h2>
            @foreach (  $customers as $customer ) 
            <div class="cat-row">
                <div class="box">
                    <div>
                    <img src="{{ asset( $customer->image )}}" alt="sci school building">
                </div>
                    <h3>{{$customer['name']}}</h3>
                    <p>
                        {{$customer['description']}}
                   </p>
                   <h1>{{$customer['city']}}</h1>
                </div>
               
        </div>
        @endforeach

         <div class="fav-cat">
            <h2>Favourite Categories</h2>
            <div class="cat-row">
                <div class="box">
                    <div><img src="https://i.imgur.com/oXvRmTm.jpg" /></div>
                    <h3>Outdoor Toys</h3>
                    <p> I recently purchased a property in Chhindwara through BHK99.com, and I must say, their professionalism and dedication exceeded my expectations. From helping me find the perfect home to guiding me through the entire process, their team provided exceptional service. I'm extremely satisfied with my purchase and highly recommend BHK99.com to anyone in search of their dream homeChhindwara</p>
                   
                </div>
                <div class="box">
                    <div><img src="https://i.imgur.com/3SkYE4c.jpg" /></div>
                    <h3>Construction</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
                <div class="box">
                    <div><img src="https://i.imgur.com/wDkJLN8.jpg" /></div>
                    <h3>Soft Toys</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
                <div class="box">
                    <div><img src="https://i.imgur.com/B06hjtn.jpg" /></div>
                    <h3>PreSchool</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
            </div>
            <div class="cat-row">
                <div class="box">
                    <div><img src="https://i.imgur.com/oFePKfN.jpg" /></div>
                    <h3>Games & Puzzles</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
                <div class="box">
                    <div><img src="https://i.imgur.com/jJhE8Hf.jpg" /></div>
                    <h3>Dolls</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
                <div class="box">
                    <div><img src="https://i.imgur.com/QGZ3Thu.jpg" /></div>
                    <h3>Action Toys & Vehicles</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
                <div class="box">
                    <div><img src="https://i.imgur.com/q8mSFXl.jpg" /></div>
                    <h3>Arts & Crafts</h3>
                    <div class="shop"><a>Shop Now</a></div>
                </div>
            </div>
        </div>
        <div class="newsletter">
            <h1>DOLLKART</h1>
            <p>Our newsletters are packed full of special offers, new toys, events, competitions and all the latest in the magical world of toys.</p>
            <div class="news-mail"><input type="email" placeholder="Email Address"><button class="material-symbols-outlined">arrow_right_alt</button></div>
            <p>*By submitting your email address, you agree to receive marketing emails from DOLLKART.</p>
        </div>
        <footer class="footer">
            <div class="container">
                <div>
                    <h4>Quick Links</h4>
                    <ul>
                        <li>Home</li>
                        <li>Shop</li>
                        <li>Dolls</li>
                        <li>Bears</li>
                        <li>Contact Us</li>
                        <li>Sitemap</li>
                    </ul>
                </div>
                <div>

                </div>
                <div>
                    <h4>My Account</h4>
                    <ul>
                        <li>My Account</li>
                        <li>Checkout</li>
                        <li>Cart</li>
                        <li>Orders</li>
                        <li>Company Policies</li>
                        <li>Privacy Policies</li>
                        <li>Blog</li>
                    </ul>
                </div>
                <div>
                    <h4 class="title">DOLLKART</h4>
                    <p>737 Toy Avenue, Wonder,
                        New Jersey – 07730, USA</p>
                    <p>E-mail: support@dollkart.co</p>
                </div>
            </div>
<!-- Adding fake copyright was recomended -->
            <p class="copyright">© 2023 DOLLKART. All Rights Reserved.</p>
        </footer>
    </body>
</html>
<!-- partial -->
  
</body>
</html>
