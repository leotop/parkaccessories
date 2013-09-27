<?php echo $header; ?>
<div id="content">
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <?php if ($error_warning) { ?>
  <div class="warning"><?php echo $error_warning; ?></div>
  <?php } ?>
  <?php if ($success) { ?>
  <div class="success"><?php echo $success; ?></div>
  <?php } ?>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/order.png" alt="" /> <?php echo $heading_title; ?></h1>
      <div class="buttons"><a href="<?php echo $insert; ?>" class="button"><?php echo $button_insert; ?></a><a onclick="$('form').submit();" class="button"><?php echo $button_delete; ?></a></div>
    </div>
    <div class="content">
      <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form">
        <table class="list">
          <thead>
            <tr>
              <td width="1" style="text-align: center;"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></td>
              <td class="left"><?php if ($sort == 'ad.name') { ?>
                <a href="<?php echo $sort_name; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_name; ?></a>
                <?php } else { ?>
                <a href="<?php echo $sort_name; ?>"><?php echo $column_name; ?></a>
                <?php } ?></td>
              <td class="left"><?php if ($sort == 'date') { ?>
                <a href="<?php echo $sort_date; ?>" class="<?php echo strtolower($order); ?>">Date</a>
                <?php } else { ?>
                <a href="<?php echo $sort_date; ?>">Date</a>
                <?php } ?></td>
              <td class="right"><?php if ($sort == 'status_name') { ?>
                <a href="<?php echo $sort_status; ?>" class="<?php echo strtolower($order); ?>">Status</a>
                <?php } else { ?>
                <a href="<?php echo $sort_status; ?>">Status</a>
                <?php } ?></td>
              <td class="right"><?php echo $column_action; ?></td>
            </tr>
          </thead>
          <tbody>
            <?php if ($events) { ?>
            <?php foreach ($events as $event) { ?>
            <tr>
              <td style="text-align: center;"><?php if ($event['selected']) { ?>
                <input type="checkbox" name="selected[]" value="<?php echo $event['event_id']; ?>" checked="checked" />
                <?php } else { ?>
                <input type="checkbox" name="selected[]" value="<?php echo $event['event_id']; ?>" />
                <?php } ?></td>
              <td class="left"><?php echo $event['title']; ?></td>
              <td class="left"><?php echo $event['date']; ?></td>
              <td class="right"><?php echo $event['status'] == 1 ? 'Enable' : 'Disabled'; ?></td>
              <td class="right"><?php foreach ($event['action'] as $action) { ?>
                [ <a href="<?php echo $action['href']; ?>"><?php echo $action['text']; ?></a> ]
                <?php } ?></td>
            </tr>
            <?php } ?>
            <?php } else { ?>
            <tr>
              <td class="center" colspan="5"><?php echo $text_no_results; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </form>
      <div class="pagination"><?php echo $pagination; ?></div>
    </div>
  </div>
</div>
<?php echo $footer; ?>