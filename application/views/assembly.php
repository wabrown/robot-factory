<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function changeHeadImage(element) {
                document.getElementById("HeadImage").src = "../assets/images/parts/" + element.id;
            }
            function changeBodyImage(element) {
                document.getElementById("BodyImage").src = "../assets/images/parts/" + element.id;
            }
            function changeFeetImage(element) {
                document.getElementById("FeetImage").src = "../assets/images/parts/" + element.id;
            }
        </script>
    </head>
    <body>
        <style type="text/css">         
            #HeadContainer {
                border:2px solid #ccc; 
                width:300px; height: 100px; 
                overflow-y: scroll; 
            }
            #BodyContainer {
                border:2px solid #ccc; 
                width:300px; height: 100px; 
                overflow-y: scroll; 
            }
            #FootContainer {
                border:2px solid #ccc; 
                width:300px; height: 100px; 
                overflow-y: scroll; 
            }
        </style>
        <h1> Robot: </h1>
        <div id="Robot">
            <img src="../assets/images/parts/{head1}" id="HeadImage" /> </br>
            <img src="../assets/images/parts/{body1}" id="BodyImage" /> </br>
            <img src="../assets/images/parts/{feet1}" id="FeetImage" />
        </div>
        <h1> Head: </h1>
        <div class="container" id="HeadContainer">
            <input type="radio" name="head" id="{head1}" onchange="changeHeadImage(this)" />A<br />
            <input type="radio" name="head" id="{head2}" onchange="changeHeadImage(this)" />B<br />
            <input type="radio" name="head" id="{head3}" onchange="changeHeadImage(this)" />C<br />
            <input type="radio" name="head" id="{head4}" onchange="changeHeadImage(this)" />M<br />
            <input type="radio" name="head" id="{head5}" onchange="changeHeadImage(this)" />R<br />
            <input type="radio" name="head" id="{head6}" onchange="changeHeadImage(this)" />W<br />
        </div>
        <h1> Body: </h1>
        <div class="container" id="BodyContainer">
            <input type="radio" name="body" id="{body1}" onchange="changeBodyImage(this)" />A<br />
            <input type="radio" name="body" id="{body2}" onchange="changeBodyImage(this)" />B<br />
            <input type="radio" name="body" id="{body3}" onchange="changeBodyImage(this)" />C<br />
            <input type="radio" name="body" id="{body4}" onchange="changeBodyImage(this)" />M<br />
            <input type="radio" name="body" id="{body5}" onchange="changeBodyImage(this)" />R<br />
            <input type="radio" name="body" id="{body6}" onchange="changeBodyImage(this)" />W<br />
        </div>
        <h1> Feet: </h1>
        <div class="container" id="FootContainer">
            <input type="radio" name="feet" id="{feet1}" onchange="changeFeetImage(this)" />A<br />
            <input type="radio" name="feet" id="{feet2}" onchange="changeFeetImage(this)" />B<br />
            <input type="radio" name="feet" id="{feet3}" onchange="changeFeetImage(this)" />C<br />
            <input type="radio" name="feet" id="{feet4}" onchange="changeFeetImage(this)" />M<br />
            <input type="radio" name="feet" id="{feet5}" onchange="changeFeetImage(this)" />R<br />
            <input type="radio" name="feet" id="{feet6}" onchange="changeFeetImage(this)" />W<br />
        </div>
        <input type="button" value="Build it"></input>
        <input type="button" value="Return to Head Office"></input> 
    </body>
</html>
