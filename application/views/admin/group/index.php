<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($groups as $group): ?>
                <tr>
                    <td><?=$group->name?></td>
                    <td><?=$group->description?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>