<?php $render('header'); ?>

<a href="<?php echo $base; ?>/new">
  <button>
    + User
  </button>
</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Actions</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td>
            <a href="<?php echo $base; ?>/user/<?php echo $user['id']; ?>/edit" title="Edit"><img src="<?=$base?>/assets/images/document.png" width="15" /></a>
            <a href="<?php echo $base; ?>/user/<?php echo $user['id']; ?>/delete" title="Delete" onclick="return confirm('Are you sure?')"><img src="<?=$base?>/assets/images/trash.png" width="15" /></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<?php $render('footer'); ?>