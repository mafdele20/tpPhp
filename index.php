<html>
<head>
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"/> 
    <script type="text/javascript" src="scrip.js"></script> 
    
<body>

    <div class="loginbox" id ="loginbox">
    <img src="avatar.png" class="avatar"/>
        <h1>login</h1>
        <p id ="error"></p>
        <form>
            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Entrer votre email"/>
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Entrer votre Password"/>
            <input type="button" name="" value="Login" id ="login" onclick="testLogin()">
            <a href="#">mot de passe oublié</a><br>
        </form>
    </div>

</body>
</head>
</html>