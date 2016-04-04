<div class="container">

<h1 class="page-header"><?php echo lang('deactivate_heading');?></h1>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" checked="checked" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

<p>
  	<?php echo form_submit('submit', 'Deactivate', 'class="btn btn-danger"');?>
	<a href="<?php echo base_url('auth/index'); ?>" class="btn btn-primary">Cancel</a>
</p>

<?php echo form_close();?>

</div>