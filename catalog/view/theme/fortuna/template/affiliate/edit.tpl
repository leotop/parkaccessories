<?php echo $header; ?>

	<?php echo $content_top; ?>

	<div class="breadcrumb">
		<?php foreach ($breadcrumbs as $breadcrumb) { ?>
			<?php echo $breadcrumb['separator']; ?>
			<a href="<?php echo $breadcrumb['href']; ?>">
				<?php echo $breadcrumb['text']; ?>
			</a>
		<?php } ?>
	</div>
	
	<?php 
	
	if ($column_left || $column_right) { $main = "span9"; } 
	else { 	$main = "span12"; } 

	?>

	<div class="row">

		<?php echo $column_left; ?>

		<section id="maincontent" class="<?php echo $main; ?>" role="main">

			<div class="mainborder">

				<?php if ($column_left) { ?>
					<div id="toggle_sidebar"></div>
				<?php } ?>
				
				<header class="heading">

					<h1 class="page-header"><?php echo $heading_title; ?></h1>

					<?php if ($error_warning) { ?>
						<div class="alert warning"><?php echo $error_warning; ?></div>
					<?php } ?>

				</header>

				<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="edit-account" class="form-horizontal">
				
					<fieldset class="subheading">
						
						<legend><?php echo $text_your_details; ?></legend>

						<div class="control-group">
							<label for="firstname" class="control-label"><span class="req_mark">*</span> <?php echo $entry_firstname; ?></label>
							<div class="controls">
								<input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" title="<?php echo $this->language->get('error_firstname'); ?>" class="required span3" required />
								<?php if ($error_firstname) { ?>
								<span class="error"><?php echo $error_firstname; ?></span>
								<?php } ?>
							</div>
						</div>
						
						<div class="control-group">
							<label for="lastname" class="control-label"><span class="req_mark">*</span> <?php echo $entry_lastname; ?>
							</label>
							<div class="controls">
								<input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" title="<?php echo $this->language->get('error_lastname'); ?>" class="required span3" required />
								<?php if ($error_lastname) { ?>
								<span class="error"><?php echo $error_lastname; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="email" class="control-label"><span class="req_mark">*</span> <?php echo $entry_email; ?></label>
							<div class="controls">
								<input type="email" name="email" id="email" value="<?php echo $email; ?>"  title="<?php echo $this->language->get('error_email'); ?>" class="required email span3" required />
								<?php if ($error_email) { ?>
								<span class="error"><?php echo $error_email; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="telephone" class="control-label"><span class="req_mark">*</span> <?php echo $entry_telephone; ?></label>
							<div class="controls">
								<input type="text" name="telephone" id="telephone" value="<?php echo $telephone; ?>" title="<?php echo $this->language->get('error_telephone'); ?>" class="required span3" required />
								<?php if ($error_telephone) { ?>
								<span class="error"><?php echo $error_telephone; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="fax" class="control-label"><?php echo $entry_fax; ?></label>
							<div class="controls">
								<input type="text" name="fax" id="fax" value="<?php echo $fax; ?>" class="span3" />
							</div>
						</div>
						
					</fieldset>

					<fieldset class="subheading">

						<legend><?php echo $text_your_address; ?></legend>

						<div class="control-group">
							<label for="company" class="control-label"><?php echo $entry_company; ?></label>
							<div class="controls">
								<input type="text" name="company" id="company" value="<?php echo $company; ?>" class="span3" />
							</div>
						</div>

						<div class="control-group">
							<label for="website" class="control-label"><?php echo $entry_website; ?></label>
							<div class="controls">
								<input type="text" name="website" id="website" value="<?php echo $website; ?>" class="span3" />
							</div>
						</div>

						<div class="control-group">
							<label for="address_1" class="control-label"><span class="req_mark">*</span> <?php echo $entry_address_1; ?></label>
							<div class="controls">
								<input type="text" name="address_1" id="address_1" value="<?php echo $address_1; ?>" title="<?php echo $this->language->get('error_address_1'); ?>" class="required span3" required />
								<?php if ($error_address_1) { ?>
								<span class="error"><?php echo $error_address_1; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="address_2" class="control-label"><?php echo $entry_address_2; ?></label>
							<div class="controls">
								<input type="text" name="address_2" id="address_2" value="<?php echo $address_2; ?>" class="span3" />
							</div>
						</div>

						<div class="control-group">
							<label for="city" class="control-label"><span class="req_mark">*</span> <?php echo $entry_city; ?></label>
							<div class="controls">
								<input type="text" name="city" id="city" value="<?php echo $city; ?>" title="<?php echo $this->language->get('error_city'); ?>" class="required span3" required />
								<?php if ($error_city) { ?>
								<span class="error"><?php echo $error_city; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="postcode" class="control-label"><span id="postcode-required" class="req_mark">*</span> <?php echo $entry_postcode; ?></label>
							<div class="controls">
								<input type="text" name="postcode" id="postcode" value="<?php echo $postcode; ?>" title="<?php echo $this->language->get('error_postcode'); ?>" class="required span3" required />
								<?php if ($error_postcode) { ?>
								<span class="error"><?php echo $error_postcode; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="country_id" class="control-label"><span class="req_mark">*</span> <?php echo $entry_country; ?></label>
							<div class="controls">
								<select name="country_id" id="country_id" onchange="$('select[name=\'zone_id\']').load('index.php?route=affiliate/edit/zone&country_id=' + this.value + '&zone_id=<?php echo $zone_id; ?>');" title="<?php echo $this->language->get('error_country'); ?>" class="required span3" required >
									<option value="false"><?php echo $text_select; ?></option>
									<?php foreach ($countries as $country) { ?>
									<?php if ($country['country_id'] == $country_id) { ?>
									<option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
									<?php } else { ?>
									<option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
									<?php } ?>
									<?php } ?>
								</select>
								<?php if ($error_country) { ?>
								<span class="error"><?php echo $error_country; ?></span>
								<?php } ?>
							</div>
						</div>

						<div class="control-group">
							<label for="zone_id" class="control-label"><span class="req_mark">*</span> <?php echo $entry_zone; ?></label>
							<div class="controls">
								<select name="zone_id" id="zone_id" title="<?php echo $this->language->get('error_zone'); ?>" class="required span3" required >
								</select>
								<?php if ($error_zone) { ?>
								<span class="error"><?php echo $error_zone; ?></span>
								<?php } ?>
							</div>
						</div>

					</fieldset>

					<div class="form-actions">
						<a href="<?php echo $back; ?>" class="btn"><span><?php echo $button_back; ?></span></a>
						<input type="submit" value="<?php echo $button_continue; ?>" class="btn btn-inverse" />
					</div>

				</form>

			</div>

		</section> <!-- #maincontent -->

		<?php echo $column_right; ?>

	</div> <!-- .row -->

	<?php echo $content_bottom; ?>

	<script type="text/javascript"><!--
		$('select[name=\'country_id\']').bind('change', function() {
			$.ajax({
				url: 'index.php?route=affiliate/edit/country&country_id=' + this.value,
				dataType: 'json',
				beforeSend: function() {
					$('select[name=\'country_id\']').after('<span class="wait">&nbsp;<img src="catalog/view/theme/default/image/loading.gif" alt="" /></span>');
				},
				complete: function() {
					$('.wait').remove();
				},			
				success: function(json) {
					if (json['postcode_required'] == '1') {
						$('#postcode-required').show();
					} else {
						$('#postcode-required').hide();
					}
					
					html = '<option value=""><?php echo $text_select; ?></option>';
					
					if (json['zone'] != '') {
						for (i = 0; i < json['zone'].length; i++) {
		        			html += '<option value="' + json['zone'][i]['zone_id'] + '"';
			    			
							if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
			      				html += ' selected="selected"';
			    			}
			
			    			html += '>' + json['zone'][i]['name'] + '</option>';
						}
					} else {
						html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
					}
					
					$('select[name=\'zone_id\']').html(html);
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		});

		$('select[name=\'country_id\']').trigger('change');
//--></script>
<?php echo $footer; ?>