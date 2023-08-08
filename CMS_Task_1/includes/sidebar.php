
<style>
    .well{
        background-color :grey;
        width:500px;
        height: 40vh;
        border: 5px solid black;
        padding:20% 0px;
    }
    h4{
        text-align:center;
        color: #fff;
        font-weight: bold;
    }
    
</style>
<div class="well">
                    <h4>Login</h4>
                    <form method="POST" action="login.php">
                    <div class="">
                         <input name="user_name" type="text" class="form-control" placeholder="Enter Username" required>
                         <br>
                    </div>

                    <div class="input-group">
                        <input name="user_password" type="password" class="form-control" placeholder="Enter Passsword" required>
                        <br>
                        <!-- <br> -->
                        <span class="input-group-btn">
                            <button name="login" class="btn btn-danger" type="submit">
Submit
                        </button>
                        </span>
                    </div>
                    </form>
                </div>

               <!-- <a href="register"> <img src="image/registernow.gif" alt="HTML5 Icon" style="width:358px;height:140px;"></a> -->

