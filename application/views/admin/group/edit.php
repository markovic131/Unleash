<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Edit Group</h2>
        </div>
    </div>
    <div class="col-md-4">
        <?php if (validation_errors()): ?>
            <div class="alert alert-danger">
                <?php echo validation_errors() ?>
            </div>
        <?php endif ?>
        <form role="form" method="post" action="/admin/group/edit/<?=$group->id?>">
            <div class="form-group">
                <label for="groupName">Group Name</label>
                <?php echo form_input('name',set_value('name', $group->name),'class="form-control" placeholder="Group Name" id="groupName"') ?>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <?php echo form_textarea('description',set_value('description', $group->description),'class="form-control" placeholder="Description" id="description"') ?>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="id" value="<?=$group->id?>">
        </form>
    </div>
</div>