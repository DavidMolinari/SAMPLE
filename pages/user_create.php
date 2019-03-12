
<article class="card-body mx-auto" style="max-width: 400px;" id="createUserContainer" style="display: none;">
	<form method="POST" action="core/addUser.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="prenom" class="form-control" placeholder="Prénom" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nom" class="form-control" placeholder="Nom" type="text">
    </div> <!-- form-group// -->


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email" type="email">
    </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="password" class="form-control" placeholder="password" type="password">
        </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
		 </div>
        <input name="DDN" class="form-control" type="date" value="2011-08-19">
    </div> <!-- form-group// -->

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create User  </button>
    </div> <!-- form-group// -->
</form>
</article>
