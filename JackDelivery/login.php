 <?php 
 include 'header.php';
 ?>
    <html>  
    <head>  
        <title>PHP login system</title>  
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 10px; }
    </style>    </head>  
    <body  style=" background: #eee; align:center;"  >  
        <div   style="border: solid black 3px;width:20%;  
        border-radius: 2px;
        margin: 10px auto;  
        background: light;  
        padding: 10px; "  
        >  
            <h3>Admin Login Form</h3>
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> <b>UserName:</b> </label><br>
                    <input type = "text" id ="user" name  = "user" />  
                </p>  
                <p>  
                    <label> <b>Password:</b> </label><br>
                    <input type = "password" id ="pass" name  = "pass" />  
                </p>  
                <p><div>
                    <input type =  "submit" id = "btn" value = "Submit" />  
                    </div> 
                </p>  
            </form>  
        </div>  
        <script style=" color: #fff;  
        background: #337ab7;  
        padding: 7px;  
        margin-left: 50px;  ">  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("User Name and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("User Name is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    }                             
                }  
            </script>  
    </body>     
    </html>  