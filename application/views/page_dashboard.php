				<div class="container-fluid">
					<div class="row">
						<?php
						foreach ($bot_list as $bot) {
							$uptime = 0;
							if (!is_null($bot->pid)) {
								$start_time = strtotime($bot->start_time);
								$now_time = strtotime(date("Y-m-d H:i:s"));
								$uptime = floatval(number_format(($now_time - $start_time) / 3600, 2));
							}
							$bg_color = array('orange', 'green', 'blue', 'red', 'purple');
							$rand_num = array_rand($bg_color);
						?>
						<div id="bot-<?=$bot->login?>" class="col-md-4">
							<input id="bot_id" name="bot_id" type="hidden" value="<?=$bot->bot_id?>" />
							<input id="pid" name="pid" type="hidden" value="<?=$bot->pid?>" />
							<div class="card card-stats">
								<div id="instapic-<?=$bot->login?>" class="card-header" style="padding: 5px !important;" data-background-color="<?=$bg_color[$rand_num]?>">
									<i class="fa fa-instagram"></i>
								</div>
								<div class="card-content">
									<p class="category">@<?=$bot->login?><br />(Follows: <span id="follows-<?=$bot->login?>">0</span> / Followers: <span id="followers-<?=$bot->login?>">0</span>)</p>
									<h3 id="uptime-<?=$bot->login?>" class="title"><?=$uptime?> <small>HOUR(S)</small></h3>
								</div>
								<div class="card-footer row">
									<div class="col-md-12">
										<button id="bot_status-<?=$bot->login?>" data-bot-login="<?=$bot->login?>" data-bot-id="<?=$bot->bot_id?>" class="btn btn-danger btn-sm">Offline</button>
										<div class="pull-right">
											<button id="delete-<?=$bot->login?>" data-bot-id="<?=$bot->bot_id?>" class="btn btn-default btn-fab btn-fab-mini btn-simple btn-sm" title="Delete"><i class="material-icons">delete</i> </button>
											<button id="settings-<?=$bot->login?>" class="btn btn-default btn-fab btn-fab-mini btn-simple btn-sm" title="Settings"><i class="material-icons">settings</i> </button>
										</div>
									</div>
								</div>
								<div class="settings-<?=$bot->login?> row" style="display: none;">
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Likes Per Day</label>
											<input id="like_per_day" name="like_per_day" type="number" min="0" max="100000" class="form-control" value="<?=$bot->like_per_day?>" >
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Comments Per Day</label>
											<input id="comments_per_day" name="comments_per_day" type="number" min="0" max="100000" class="form-control" value="<?=$bot->comments_per_day?>" >
										</div>
									</div>
								</div>
								<div class="settings-<?=$bot->login?> row" style="display: none;">
									<div class="col-md-5 col-md-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Follow Per Day</label>
											<input id="follow_per_day" name="follow_per_day" type="number" min="0" max="100000" class="form-control" value="<?=$bot->follow_per_day?>" >
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group label-floating">
											<label class="control-label">Unfollow Per Day</label>
											<input id="unfollow_per_day" name="unfollow_per_day" type="number" min="0" max="100000" class="form-control" value="<?=$bot->unfollow_per_day?>" >
										</div>
									</div>
								</div>
								<div class="settings-<?=$bot->login?> row" style="display: none;">
									<div class="col-md-5 col-md-offset-1">
										<button class="save-<?=$bot->login?> btn btn-primary btn-sm" data-bot-login="<?=$bot->login?>" data-bot-id="<?=$bot->bot_id?>">Save</button>
									</div>
									<div class="col-md-5 text-right">
										<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#advance-settings" data-bot_login="<?=$bot->login?>" data-bot_id="<?=$bot->bot_id?>">Advance</button>
									</div>
								</div>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>