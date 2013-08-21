<div class="row">
    <div class="col-md-12">
        <h1>Users <a href="/admin/user/create" class="btn btn-primary pull-right">Create User</a></h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Group</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?=$user->first_name?></td>
                    <td><?=$user->last_name?></td>
                    <td><?=$user->company?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->group_description?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>