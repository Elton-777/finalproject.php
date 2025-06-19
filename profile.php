<!DOCTYPE html>
<html>
    <head>
        <title>Profile | My book</title>
    </head>

    <style type="text/css">
        #blue_bar{
            height:50px;
            background-color: #405d9b;
            color: #d9dfeb;
        }

        #search_box{
            width: 400px;
            height: 20px;
            border-radius: 5px;
            border: none;
            padding: 4px;
            font-size: 14px;
            background-image: url( search.jfif);
            background-repeat: no-repeat;
            background-position: right;
        }

        #profile_pic{
            width: 250px;
            margin-top: -250px;
            border-radius: 50%;
            border: solid 2px white;


        }

        #menu_buttons{
            width: 100px;
            display: inline-block;
            margin: 6px;
            
        }

        #friends_img{
            width: 75px;
            float: left;
            margin: 8px;

        }

        #friends_bar{
            background-color: white;
            min-height: 400px;
            margin-top: 20px;
            color: #aaa;
            padding: 8px;
        }

        #friends{
            clear: both;
        }
        

    </style>
    <body  style="font-family: tahoma; background-color: #d0d8e4">
        <br>
        <div id="blue_bar">
            <div style="width: 800px;margin: auto;font-size: 30px;">

            Mybook  &nbsp<input type="text" id="search_box" placeholder="Search for people">
            <img src="selfie.jfif" style="width: 88px; float: right;">


            </div>

       </div>
       <div style="width: 700px; margin: auto; min-height: 400px;">
        <div style="background-color: white; text-align: center; color: #405d9b">
            <img src="mountain.jfif" style="width:100%;">
            <img id="profile_pic" src="selfie2.jpg"><br>
            <div style=" font-size:20px;">Mary Banda</div>
            
            <br>
            <div id="menu_buttons">Timeline</div> 
            <div id="menu_buttons">About</div>
             <div id="menu_buttons">Friends</div>
             <div id="menu_buttons">Photos</div>
             <div id="menu_buttons">Settigns</div>
        </div>

        <div style="display: flex;">

        <div style="min-height:400px; flex:1;">
            <div id="friends_bar">
                Friends<br>

                <div id="friends">
                    <img id="friends_img" src="guy.jfif">
                    <br>
                    First user
                </div>

                <div id="friends">
                    <img id="friends_img" src="guy.jfif">
                    <br>
                    First user
                </div>

                <div id="friends">
                    <img id="friends_img" src="guy.jfif">
                    <br>
                    First user
                </div>

                <div id="friends">
                    <img id="friends_img" src="guy.jfif">
                    <br>
                    First user
                </div>
                


            </div>
            

        </div> 

        <div style="min-height: 400px; flex:2.5;">

        </div>
    </div>



       </div>

    </body>
</html>