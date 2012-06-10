<!-- 
Workaround to refresh a page. You can build a login with JS that just sets the $_SESSION value to log in and have the change in real time by getting the value
with get_session and hack some JS code into it to refresh the site :-)
-->
<?php session_start();
if(isset($_GET['f']))
{
    echo $_SESSION['var'];
    exit();
    //Don't display the other parts
}
if(isset($_GET['a']))
{
    $_SESSION['var'] = $_GET['a'];
    //refresh the SESSION[var] with value
}
?>
<html onmousemove="get_session()">
    <head>
        <script type="text/javascript" src="dyn_session.js"></script>
    </head>
    <body>
        <div id="session_div">No session value</div>
        <div id="active_div"></div>     
    </body>
</html>