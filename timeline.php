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
            text-align:center;
            font-size: 20px;
            color: #405d9b;
        }

        #friends{
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
        }

        textarea{
            width: 100%;
            border:none;
            font-family:tahoma;
            font-size:14px;
            height: 60px;

        }

        #post_button{
            float:right;
            background-color:  #405d9b;
            border: none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius:2px;
            width: 50px;
        }

        #post_bar{
            margin-top: 20px;
            background-color: white;
            padding: 10px;
        }

        #post{
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom:20px;

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
        

        <div style="display: flex;">

        <div style="min-height:400px; flex:1;">
            <div id="friends_bar">
                
                <img src="selfie2.jpg" id="profile_pic" ><br>
                Mary Banda


            </div>
            

        </div> 

        <div style="min-height: 400px; flex:2.5; padding:20px; padding-right:0px;">

        <div style="border:solid 1px #aaa; padding:10px; background-color:white;">
            <textarea placeholder="Whats on your mind"></textarea>
            <input id="post_button" type="submit" value="Post">
            <br>

        </div>
        <div>

        </div id="post_bar">

        <div id="post">
                      </div>
            <div>
  <div>
                <img src="girl1.jfif" style="width: 75px; margin-right: 6px;">

                <div style="font-weight: bold; color: #405d9b;">First user</div>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookf type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                <br/><br/>
                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
            </div>
        </div>

        <div id="post">
                      </div>
            <div>
  <div>
                <img src="girl2.jfif" style="width: 75px; margin-right: 4px;">

                <div style="font-weight: bold; color: #405d9b;">First user</div>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookf type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                <br/><br/>
                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
            </div>
        </div>


        </div>
    </div>



       </div>

    </body>
</html>