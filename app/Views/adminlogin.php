<div class="containner">
    <h1>Login for admin</h1>
</div>

<div class="container">

    <form method="post" action="<?=site_url("adminlogin")?>">
        
        <div class="mb-3">
            <label for="adminemail" class="form-label">Admin Email</label>
            <input type="email" class="form-control" id="adminemail" name="adminemail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="adminpassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="adminpassword" name="adminpassword">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    
</div>