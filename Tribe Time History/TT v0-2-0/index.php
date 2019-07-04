<!DOCTYPE html>
<html>
    <head>
        <title>Tribe Time Portal</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body id="loginpage">
        <div id="titlebar"><img id="logo" src="WVLogo.png" alt="WVHS Logo">
            <div id="text">Tribe Time Scheduling Portal</div>
        </div>
        
            <div id="redirect">
                <p style="font-size: 20px;">Redirecting to IPSD 204 SSO Login...</p>
                <p>Click <a href="sso.php?test=self" style="color: gray;">here</a> to manually redirect</p>
            </div>
        
        <div id = "footer"> Property of Waubonsie Valley High School | <a href="wvhs.ipsd.org">wvhs.ipsd.org</a> | email@domain.com</div>
    </body>
    <script type="text/javascript">setTimeout(function(){
    window.location.href = "sso.php?test=auto";
    },1000)</script>
    
</html>