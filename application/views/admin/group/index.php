<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Groups <a href="/admin/group/create" class="btn btn-primary pull-right">Create Group</a></h1>
        </div>
    </div>
    <div class="col-md-12">
        <?=$this->flash->display()?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($groups as $group): ?>
                <tr>
                    <td><?=$group->name?></td>
                    <td><?=$group->description?></td>
                <?php if($group->name != $this->ion_auth->get_config('admin_group')): ?>
                    <td><a href="/admin/group/edit/<?=$group->id?>">Edit</a></td>
                    <td><a href="/admin/group/delete/<?=$group->id?>" onclick="return confirmDelete();">Delete</a></td>
                <?php else: ?>
                    <td colspan="2">&nbsp;</td>
                <?php endif; ?>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>