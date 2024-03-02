<?php $render('header'); ?>


<h2>Store New User</h2>

<form action="<?=$base?>/user/<?= $user['id'] ?>/edit" method="POST">

  <label>
    Name:<br />
    <input type="text" name="name" value="<?= $user['name'] ?>" />
  </label><br /><br />

  <label>
    E-mail:<br />
    <input type="email" name="email" value="<?=  $user['email']?>" />
  </label><br /><br />

  <input type="button" value="Back" onclick="history.back();" />
  <input type="submit" value="Submit" />
</form>


<?php $render('footer'); ?>