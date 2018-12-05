<?php $__env->startSection('title', 'Devbox Systems Corp'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contact'); ?>
		
		<!-- CONTACT INFO -->
	<div class="contact_form_sub_container col-9 col-sm-7 col-md-4 col-lg-3">
		<table class="contact_table">
			<tr>
			    <td><img class="contact_icon_mail" src="/images/icon_contact_mail.png"></td>
			    <td>info@devblox.co</td>
			</tr>
			<tr>
			    <td><img class="contact_icon_location" src="/images/icon_contact_location.png"></td>
			    <td>512 Summerspell Bldg. Ortigas Center, Pasig</td>
			</tr>
			<tr>
			    <td><img class="contact_icon_telephone" src="/images/icon_contact_telephone.png"></td>
			    <td>1-455-512-6556</td>
			</tr>
		</table>
	</div>
                            
	<div class="contact_form_sub_container col-9 col-sm-7 col-md-5 col-lg-4">
            
            <?php echo Form::open(['route' => 'contact.store']); ?>


			<div class="form-group">
			    <?php echo Form::text('name', null, ['class' => 'form-control form-control-sm curved_form', 'placeholder' => 'Name']); ?>

			</div>

			<div class="form-group">
			    <?php echo Form::text('email', null, ['class' => 'form-control form-control-sm curved_form', 'placeholder' => 'Email Address']); ?>

			</div>

			<div class="form-group">
			    <?php echo Form::text('subject', null, ['class' => 'form-control form-control-sm curved_form', 'placeholder' => '--Inquiry--']); ?>

			</div>

			<div class="form-group">
			    <?php echo Form::textarea('msg', null, ['class' => 'form-control form-control-sm curved_area', 'placeholder' => 'Message']); ?>

			</div>

			<?php echo Form::submit('Submit', ['class' => 'btn btn-info']); ?>


			<?php echo Form::close(); ?>

   	</div>

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>