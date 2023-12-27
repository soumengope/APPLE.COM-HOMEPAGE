<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link rel="icon" href="/myImages/title_logo.png" type="image/x-icon">
    <style type="text/css"> 
        body{padding:0;margin:0;width:100%;height:100%;}
        #text_one{display:block;}
        #text_two{display:none;}
        #text_three{display:none;}
        #prev{float:left;margin-left:60px;width:40px;height:40px;cursor: pointer;}
        #next{float:right;margin-right:60px;width:40px;height:40px;cursor: pointer;}
        #text_click{text-align:center;padding-top:50px;}
        #btn_click_main{position:relative; bottom:35px;padding-bottom:30px;}

        #storeHeader_main{display:grid;grid-template-columns:repeat(2,1fr);padding-top:20px;gap:50px;}
        #storeHeader_rightControl{position:relative;left:300px;}
        #storeHeader_leftControl{font-size:32px;font-weight:600;color:gray;}
        #storeHeader_rightTop,#storeHeader_rightBottom{display:flex;gap:10px;font-size:15px;
        padding-top:5px;}
        #top_content,#bot_content{position:relative;bottom:15px;}

        @media screen and (min-width:0px) and (max-width:768px){
            #text_click{padding-bottom:10px;height:60px;padding-left:10px; padding-right:10px;}
            #btn_click_main{position:relative;bottom:-15px;padding-bottom:50px;}
            #storeHeader_main{grid-template-columns:repeat(1,1fr)}
            #storeHeader_rightControl{left:0px;padding-left:20px;}
            #storeHeader_leftControl{font-size:25px;font-weight:600;color:gray;padding-left:10px;
            padding-right:10px;text-align:center;}

        }
    </style>
</head>
<body>
    <?php include("../header01.php") ?>

    <div id="text_click">
        <div id="text_one">Get $200-$650 in credit toward iPhone 15 or iPhone 15 Pro when you trade in an iPhone 11 or higher.<a>Shop iPhone ></a></div>
        <div id="text_two">Pay monthly at 0% APR when you choose to check out with Apple Card Monthly Installments.</div>
        <div id="text_three">For in-stock items, order by noon on Dec. 21 for delivery by Dec. 24.<a>See best dates to order other items ></a></div>
    </div>
    <div id="btn_click_main">
        <div id="btn_click">
            <button id="prev" onclick="prev()"><<</button>
            <button id="next" onclick="next()">>></button>
        </div>
    </div>

    <div id="storeHeader_main">
        <div id="storeHeader_leftControl">
            <p>Store. Finish off your list with</p>
            <p>great gifts. Wonder awaits.</p>
        </div>
        <div id="storeHeader_rightControl">
            <div id="storeHeader_rightTop">
                <div id="storeHeader_topImg"><img src="/myImages/profile.png" alt="" width="50px" height="50px"></div>
                <div id="top_content">
                    <p>Need shoping help ?</p>
                    <p>Ask a Specialist</p>
                </div>
            </div>
            <div id="storeHeader_rightBottom">
                <div id="storeHeader_bottomImg"><img src="/myImages/location.png" alt="" width="50px" height="50px"></div>
                <div id="bot_content">
                    <p>Visit an Apple Store</p>
                    <p>Find one near you ></p>
                </div>
            </div>
        </div>
    </div>

    <?php include("../footer.php") ?>

    <script type="text/javascript">
        var txt1 = document.getElementById("text_one");
        var txt2 = document.getElementById("text_two");
        var txt3 = document.getElementById("text_three");
        var nextBtn = document.getElementById("next");
        var prevBtn= document.getElementById("prev");
        var control = 0;
        function next(){
            control = control + 1;
            if(control > 1){
                control = 2;
            }
            //console.log(control)
            if(control==1){
                txt1.style.display="none";
                txt2.style.display="block";
                txt3.style.display="none";
            }else if(control==2){
                txt1.style.display="none";
                txt2.style.display="none";
                txt3.style.display="block";
            }
        }
        function prev(){
            control = control - 1;
            if(control < 0){
                control = 0;
            }
            if(control==1){
                txt1.style.display="none";
                txt2.style.display="block";
                txt3.style.display="none";
            }else if(control==0){
                txt1.style.display="block";
                txt2.style.display="none";
                txt3.style.display="none";
            }
        }
    </script>
</body>
</html>