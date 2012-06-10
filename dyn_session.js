function get_session()
{
    document.getElementById("active_div").innerHTML += "--Active--";
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
        if(x.readyState == 4)
        {
            document.getElementById("session_div").innerHTML = x.responseText;
        }
    }
    var link = "dyn_session.php?f=true";
    x.open("GET", link, true);
    x.send();
}