<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2><?php echo lang('create_group_title'); ?></h2>
        </div>
    </div>
    <div class="col-md-4">
        <?php if (validation_errors()): ?>
            <div class="alert alert-danger">
                <?php echo validation_errors() ?>
            </div>
        <?php endif ?>
        <form role="form" method="post">
            <div class="form-group">
                <label for="groupName">Group Name</label>
                <?php echo form_input('name',set_value('name'),'class="form-control" placeholder="Group Name" id="groupName"') ?>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <?php echo form_textarea('description',set_value('description'),'class="form-control" placeholder="Description" id="description"') ?>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
        </form>
    </div>
</div>