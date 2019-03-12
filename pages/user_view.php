<table class="usersTable table table-dark" style="margin-top: 2em;">
    <button class="btn btn-primary" id="addUser">AJOUTER UN UTILISATEUR</button>
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Date de naissance</Sa></th>
        <th scope="col">Dernière connexion</Sa></th>
        <th scope="col">Action</Sa></th>
    </tr>
    </thead>
    <tbody>
    <?php include_once './core/getUsers.php'; ?>
</table>