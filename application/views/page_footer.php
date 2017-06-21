			</div>

			<footer class="footer hidden">
				<div class="container-fluid">
					<p class="copyright pull-left">
						&copy;<?=date("Y")?> <i class="material-icons text-danger" style="font-size: 12px; top: 1px;">favorite</i> <a href="http://www.iknowitworks.org">I Know IT Works!</a>
					</p>
					<nav class="pull-right" style="margin-right: 34px;">
						<ul>
							<li>
								<a rel="tooltip" title="Follow us on Twitter" data-placement="top" href="https://twitter.com/iKnowITWorks" target="_blank" class="btn btn-darkgray btn-simple btn-just-icon">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a rel="tooltip" title="Like us on Facebook" data-placement="top" href="https://facebook.com/iKnowITWorks" target="_blank" class="btn btn-darkgray btn-simple btn-just-icon">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</footer>
		</div>
	</div>
	
	<div id="advance-settings" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Advance Settings</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="advance-bot_id" name="bot_id" value="" />
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<label class="control-label">Tag List</label>
								<textarea id="advance-tag_list" name="tag_list" class="settings"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<label class="control-label">Tag Blacklist</label>
								<textarea id="advance-tag_blacklist" name="tag_blacklist" class="settings"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<label class="control-label">User Blacklist</label>
								<textarea id="advance-user_blacklist" name="user_blacklist" class="settings"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Logging</label>
								<select id="advance-log_mod" name="log_mod" class="form-control settings">
									<option value="2">Disabled</option>
									<option value="1">Enabled</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Password</label>
								<input id="advance-password" name="password" type="password" maxlength="50" class="form-control settings" value="" placeholder="Type new password or else leave it blank." >
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button id="advance-save" type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<div id="add-account" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add an Account</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group label-floating">
								<label class="control-label">Username</label>
								<input id="account-login" name="login" type="text" maxlength="50" class="form-control addnew" value="" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group label-floating">
								<label class="control-label">Password</label>
								<input id="account-password" name="password" type="password" maxlength="50" class="form-control addnew" value="" >
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group label-floating">
								<label class="control-label">Logging</label>
								<select id="account-log_mod" name="log_mod" class="form-control addnew">
									<option value="2">Disabled</option>
									<option value="1">Enabled</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="account-create" type="button" class="btn btn-primary">Add</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</body>

	<!--   Core JS Files   -->
	<script src="<?=base_url('assets/js/jquery-3.1.0.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/jquery.validate.min.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/material.min.js')?>" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url('assets/js/chartist.min.js')?>"></script>

	<!--  Notifications Plugin    -->
	<script src="<?=base_url('assets/js/bootstrap-notify.js')?>"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?=base_url('assets/js/material-dashboard.js')?>"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?=base_url('assets/js/demo.js')?>"></script>
	
	<!-- SweetAlert 2 -->
	<script src="<?=base_url('assets/js/sweetalert2.js')?>"></script>
	
	<!-- Steps -->
	<script src="<?=base_url('assets/js/jquery.steps.js')?>"></script>
	
	<!-- Tag Editor -->
	<script src="<?=base_url('assets/js/jquery.caret.min.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.tag-editor.js')?>"></script>
	
	<script src="<?=base_url('assets/js/select2.js')?>"></script>
	<script src="<?=base_url('assets/js/itworks.js')?>"></script>

	<script type="text/javascript">
    	$(document).ready(function() {

			// Javascript method's body can be found in assets/js/demos.js
        	//demo.initDashboardPageCharts();
			<?php
			$filtered_link = str_replace('page_', '', $page_content);
			if ($filtered_link == 'dashboard') {
				$filtered_link = base_url();
			}
			?>
			$('.sidebar-wrapper').find("li a[href$='<?=$filtered_link?>']").parent('li').addClass('active');
			$('.select2').select2({
				theme: 'bootstrap'
			});

			$("button[id^='settings-']").on('click', function() {
				//console.log($(this).attr('id'));
				$("[class^='"+$(this).attr('id')+"']").slideToggle();
			});
			
			$("button[id^='delete-']").on('click', function() {
				var bot_id = $(this).data('bot-id');
				swal({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then(function () {
					$.post('<?=base_url('delete_bot')?>/'+bot_id, function(data) {
						var result = $.parseJSON(data);
						if (result.result == 'success') {
							swal({
								title: 'Deleted!',
								text: "The bot and it's settings has been deleted.",
								type: 'success'
							}).then(function () {
								location.reload();
							});
						}
					});
				});
			});
			
			$("button[id^='bot_status-']").on('click', function() {
				var botStatus = $(this).text().toLowerCase();
				var botID = $(this).data('bot-id');
				if (botStatus === 'online') {
					swal({
						title: 'Are you sure?',
						text: "This will stop the bot from running in the background.",
						type: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Yes, stop it!'
					}).then(function () {
						$.post('<?=base_url('stop_bot/')?>'+botID, function(status) {
							console.log(status);
							realtime_status();
						});
					});
				} else if (botStatus === 'offline') {
					swal({
						title: 'Are you sure?',
						text: "This will start to run the bot from the background.",
						type: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Yes, run it!'
					}).then(function () {
						$.post('<?=base_url('start_bot/')?>'+botID, function(status) {
							console.log(status);
							realtime_status();
						});
					});
				}
			});
			
			$("button[class^='save-']").on('click', function() {
				var thisButton = $(this);
				var thisBot = thisButton.data('bot-login');
				var botID = thisButton.data('bot-id');
				var thisSettings = $("[id^='bot-"+thisBot+"']").find(".settings-"+thisBot+" input").serialize();
				thisButton.text('Saving...');
				
				$.post('<?=base_url('update_bot/')?>'+botID, thisSettings, function(result) {
					var thisBot = $.parseJSON(result);
					var thisTitle = 'Not Updated!';
					var thisMessage = 'You did NOT modify any settings.';
					var thisType = 'info';
					if (thisBot.result == 'success') {
						thisTitle = 'Updated!';
						thisMessage = thisBot.message;
						thisType = 'success';
					}
					
					thisButton.text('Save');
					
					swal(
						thisTitle,
						thisMessage,
						thisType
					);
				});
			});
			
			$('#advance-settings').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var bot_login = button.data('bot_login');
				var bot_id = button.data('bot_id');
				
				var modal = $(this);
				modal.find('.modal-title').text('Advance Settings: @' + bot_login);
				
				$("#advance-password").val('');
				$.post('<?=base_url('bot_settings')?>/'+bot_id, function(data) {
					var settings = $.parseJSON(data);
					$.each(settings, function(key, val) {
						if (/tag_list|tag_blacklist|user_blacklist/.test(key)) {
							if (val !== null) {
								$("#advance-"+key).tagEditor({
									initialTags: val.split(','),
									delimiter: ',; '
								});
							} else {
								$("#advance-"+key).tagEditor({
									delimiter: ',; '
								});
							}
						} else if (/bot_id|log_mod/.test(key)) {
							$("#advance-"+key).val(val);
						}
					});
				});
			});
			
			$('#advance-settings').on('hide.bs.modal', function () {
				$("#advance-tag_list,#advance-tag_blacklist,#advance-user_blacklist").tagEditor('destroy');
				$("#advance-tag_list,#advance-tag_blacklist,#advance-user_blacklist").val('');
			});
			
			$("#advance-save").on('click', function() {
				var bot_id = $("#advance-bot_id").val();
				var thisSettings = $("#advance-settings").find(".settings").serialize();
				
				$.post('<?=base_url('update_bot')?>/'+bot_id, thisSettings, function(data) {
					var thisData = $.parseJSON(data);
					if (thisData.result == 'success') {
						$.notify({
							message: thisData.message
						},{
							type: 'success',
							placement: {
								from: "bottom",
								align: "left"
							},
						});
					}
				});
			});
			
			$("#account-create").on('click', function() {
				var initialSettings = $("#add-account").find(".addnew").serialize();
				
				$.post('<?=base_url('add_bot')?>', initialSettings, function(data) {
					var thisData = $.parseJSON(data);
					if (thisData.result == 'success') {
						swal({
							title: 'Success!',
							text: thisData.message,
							type: 'success'
						}).then(function () {
							location.reload();
						});
					} else {
						swal(
							'ERROR',
							thisData.message,
							'warning'
						);
					}
				});
			});
    	});
		
		$(window).on('load', function() {
			
		});
		
		function check_status(botid) {
			$.post('<?=base_url('check_bot/')?>'+botid, function(status) {
				//console.log(status);
			});
		}
		
		var reload_cnt = 0;
		function realtime_status() {
			$.post('<?=base_url('check_all')?>', function(result) {
				var bot_list = $.parseJSON(result);
				
				$.each(bot_list, function(idx, bot) {
					if (bot.online) {
						$("#bot_status-"+bot.login).removeClass('btn-danger').addClass('btn-success');
						$("#bot_status-"+bot.login).text('<?=$this->lang->line('online')?>');
					} else {
						$("#bot_status-"+bot.login).removeClass('btn-success').addClass('btn-danger');
						$("#bot_status-"+bot.login).text('<?=$this->lang->line('offline')?>');
					}
					$("#uptime-"+bot.login).html(bot.uptime+' <small>HOUR(S)</small>');
					
					if (reload_cnt === 0) {
						fetch_user_data(bot.login);
					}
				});
				
				reload_cnt++;
				if (reload_cnt > 24) {
					reload_cnt = 0;
				}
			});
		}
		
		function fetch_user_data(login) {
			$.ajax({
				url: 'http://23.111.147.123/instabot/get_bot_stats/'+login,
				dataType: "json",
			})
			.done(function (data) {
				var userData = data.user;
				$("#follows-"+login).text(userData.follows.count);
				$("#followers-"+login).text(userData.followed_by.count);
				$("#instapic-"+login).html("<img src='"+userData.profile_pic_url.replace('https','http')+"' class='img-circle img-raised img-responsive' style='height: 80px; width: 80px;' alt='"+userData.full_name+"' />");
			});
		}
		
		realtime_status();
		setInterval(realtime_status, 5000);
	</script>

</html>
<?php
function excelColumnRange($lower, $upper) {
    ++$upper;
    for ($i = $lower; $i !== $upper; ++$i) {
        yield $i;
    }
}
?>