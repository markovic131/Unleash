<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2><?php echo lang('edit_user_heading'); ?></h2>
        </div>
    </div>
    <div class="col-md-4">
        <?php if (validation_errors()): ?>
            <div class="alert alert-danger">
                <?php echo validation_errors() ?>
            </div>
        <?php endif ?>
        <form role="form" method="post" action="/admin/user/edit/<?=$user->id?>">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <?php echo form_input('first_name',set_value('first_name',$user->first_name),'class="form-control" placeholder="First Name" id="firstName"') ?>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <?php echo form_input('last_name',set_value('last_name',$user->last_name),'class="form-control" placeholder="Last Name" id="lastName"') ?>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <?php echo form_input('company',set_value('company',$user->company),'class="form-control" placeholder="Company" id="company"') ?>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <?php echo form_input('phone',set_value('phone',$user->phone),'class="form-control" placeholder="Phone" id="phone"') ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <?php echo form_password('password','','class="form-control" placeholder="Password" id="password"') ?>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Password Confirmation</label>
                <?php echo form_password('password_confirm','','class="form-control" placeholder="Confirm Password" id="password_confirm"') ?>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <input type="hidden" name="id" value="<?=$user->id?>">
        </form>
    </div>
</div>