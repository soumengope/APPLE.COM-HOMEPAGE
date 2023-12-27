<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
    <style type="text/css">
        .main_Header_Section{display:grid;grid-template-columns:repeat(9,1fr);height:15px;padding:15px;
            background:rgb(36, 36, 36);color:rgb(243, 236, 236);}
        .main_Header_Section img{filter:invert(80%);}
        .main_Header_Section div{gap:20px;}
        .main_Header_Section img{cursor:pointer;}
        #apple_logo{grid-column:2/3;justify-content: right;margin-left:45%;margin-top:-1px;}
        .main_Search_Bag{grid-column: 8/9;display:flex;margin-left:15%;}
        #bag{margin-left:10px;margin-top:-1px;}
        .main_Categories{gap:20px;font-size:12px;grid-column:3/8;display:flex;}
        .main_Categories div{cursor:pointer;}
        .main_Categories div a{text-decoration:none;color:white;}
        #mob_Categories{display:none;}
        #main_dropdown_header{display:none;}

        @media screen and (min-width:0px) and (max-width:768px){
    
            body{margin:0;padding:0;box-sizing:border-box;width:100%;height:100%;
            }
            #apple_logo{display:none;}
            .main_Search_Bag div img{display:none;}
            .main_Header_Section{display:none;}
            .main_Categories{display:none;}
            #dropdown_main_div{display:block;margin:0;padding:0;}
            .dropdown_main_div{display:flex;height:80px;}
            #mob_dropdown_show{display:block;padding-top:5px;margin-left:10px;cursor:pointer;}
            #mob_dropdown_show div{width:60px;height:10px;background:white;margin-top:10px;border-radius:10px;}
            #mob_dropdown_hide{display:none;padding-top:5px;margin-left:10px;cursor:pointer;}
            #mob_dropdown_hide div{width:60px;height:10px;background:white;margin-top:10px;border-radius:10px;}
            #top_hide_div{position:relative;top:20px;rotate:45deg;}
            #bottom_hide_div{position:relative;rotate:-45deg;}
            #mob_Categories{display:none;flex-direction:column;gap:12px;text-align:center;
                padding-top:20px;padding-bottom:20px;}
            #mob_Categories a{color:black;}
            #main_dropdown_header{display:flex;background:#686868;justify-content:space-between;}
            #dropdown_img img{padding-right:15px;padding-top:1px;filter:invert(100%);}
        }
    </style>
</head>
<body>
<div id="main_dropdown_header">
        <div class="dropdown_main_div">
            <div id="mob_dropdown_show" onClick="showAction();">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div id="mob_dropdown_hide" onClick="hideAction();">
                <div id="top_hide_div"></div>
                <div id="bottom_hide_div"></div>
            </div>
        </div>
        <div id="dropdown_img"><img src="/myImages/apple_logo.png" width="70px" height="70px"></div>
</div>
<div id="mob_Categories">
        <div id="home"><a href="/">Homepage</a></div>
        <div id="Store"><a href="/additionalResources0/store.php">Store</a></div>
        <div id="Mac"><a href="/additionalResources0/mac.php">MacBook</a></div>
        <div id="iPad"><a href="/additionalResources0/mac.php">IPad</a></div>
        <div id="iPhone"><a href="/additionalResources0/mac.php">Iphone</a></div>
        <div id="Watch"><a href="/additionalResources0/mac.php">Watch</a></div>
        <div id="Vision"><a href="/additionalResources0/mac.php">Vision</a></div>
        <div id="AirPods"><a href="/additionalResources0/mac.php">Airpods</a></div>
        <div id="TVHome"><a href="/additionalResources0/mac.php">TV & Home</a></div>
        <div id="Accessories"><a href="/additionalResources0/mac.php">Accessories</a></div>
        <div id="Support"><a href="/additionalResources0/mac.php">Support</a></div>
    </div>
<div class="main_Header_Section">
    <div id="apple_logo"><img src="/myImages/apple_logo.png" alt="" width="15px" height="15px"></div>
    <div class="main_Categories">
        <div id="home"><a href="/">Homepage</a></div>
        <div id="Store"><a href="/additionalResources0/store.php">Store</a></div>
        <div id="Mac"><a href="/additionalResources0/mac.php">MacBook</a></div>
        <div id="iPad"><a href="/additionalResources0/mac.php">IPad</a></div>
        <div id="iPhone"><a href="/additionalResources0/mac.php">Iphone</a></div>
        <div id="Watch"><a href="/additionalResources0/mac.php">Watch</a></div>
        <div id="Vision"><a href="/additionalResources0/mac.php">Vision</a></div>
        <div id="AirPods"><a href="/additionalResources0/mac.php">Airpods</a></div>
        <div id="TVHome"><a href="/additionalResources0/mac.php">TV & Home</a></div>
        <div id="Accessories"><a href="/additionalResources0/mac.php">Accessories</a></div>
        <div id="Support"><a href="/additionalResources0/mac.php">Support</a></div>
    </div>
    <div class="main_Search_Bag">
        <div id="search"><img src="/myImages/search.png" alt="" width="15px" height="15px"></div>
        <div id="bag"><img src="/myImages/shopping_bag.png" alt="" width="15px" height="15px"></div>
    </div>
</div>
<script type="text/javascript">
        const show_btn = document.getElementById("mob_dropdown_show");
        const hide_btn = document.getElementById("mob_dropdown_hide");
        var dropMenus = document.querySelector("#mob_Categories");

        function showAction(){
            hide_btn.style.display="block";
            show_btn.style.display="none";
            dropMenus.style.display="flex";
        }
        function hideAction(){
            show_btn.style.display="block";
            hide_btn.style.display="none";
            dropMenus.style.display="none";
        }
</script>
</body>
</html>
