				<div class="container-fluid">
					<div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header row" data-background-color="green">
									<div class="col-lg-6">
										<h3 class="title"><?=$topic['name']?></h3>
										<p class="sub-title"><?=$topic['grade']?></p>
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2">
										<div class="questions-answered">
											<p>Questions Answered</p>
											<span class="answered-questions">0</span>
										</div>
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2">
										<div class="elapsed-time">
											<p>Elapsed Time</p>
											<span class="test-timer">00:00:00</span>
										</div>
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2">
										<div class="total-score">
											<p>Score (out of 100)</p>
											<span class="test-score">0</span>
										</div>
									</div>
	                            </div>
	                            <div class="card-content table-responsive">
									<div class="tab-content">
										<div id="test-questions">
											<h5>Introduction</h5>
											<section data-mode="async" data-url="<?=base_url()?>page_math/load_intro/<?=$topic['grade']?>/<?=$topic['category']?>"></section>
										</div>
										<div id="review-answer" class="card card-stats">
											<div class="card-header" data-background-color="orange">
												<strong>Review</strong>
											</div>
											<section></section>
											<p class="answer-header">And you answered:</p>
											<h3 class="answer text-danger"></h3>
										</div>
										<div id="remember-answer" class="card card-stats">
											<div class="card-header" data-background-color="red">
												<strong>Remember</strong>
											</div>
											<section></section>
										</div>
										<div id="solve-answer" class="card card-stats" style="margin-bottom: 65px;">
											<div class="card-header" data-background-color="blue">
												<strong>Solve</strong>
											</div>
											<p class="solve1"></p>
											<section></section>
											<p class="solve2"></p>
										</div>
										<button id="got-it" type='submit' class='btn btn-warning' onclick='itworks.nextQuestion();' style='position: absolute; bottom: 10px; right: 2.5%; display: none;'>Got it!</button>
									</div>
	                            </div>
	                        </div>
	                    </div>
					</div>
				</div>