<?php $render('header'); ?>

<h2>Store New User</h2>

<form action="<?=$base?>/new" method="POST">

  <label>
    Name:<br />
    <input type="text" name="name" />
  </label><br /><br />

  <label>
    E-mail:<br />
    <input type="email" name="email" />
  </label><br /><br />

  <input type="button" value="Back" onclick="history.back();" />
  <input type="submit" value="Submit" />
</form>


<?php $render('footer'); ?>