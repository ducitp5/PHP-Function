<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button#1").click(function(){
                alert($("#main").scrollTop() + " px");
            });

            $("button#2").click(function(){
                $("#main").scrollTop(20);
            });

            $("button#3").click(function(){
                $("#main").scrollTop(200);
                $("#main").scrollLeft(20);
            });
        });
    </script>
</head>
<body>

<div id="main" style="border:1px solid black;width:200px;height:150px;overflow:auto">
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
    This is some text. This is some text. This is some text</div><br>

<button id="3">add top 20</button>
<button id="1">Return the vertical position of the scrollbar</button>
<button id="2">add top 20</button>
<p>Move the scrollbar down and click the button again.</p>

</body>
</html>
