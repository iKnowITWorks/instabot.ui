				<div class="container-fluid">
					<div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
									<ul class="nav nav-pills nav-pills-primary" role="tablist">
										<!--
											color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
										-->
										<li class="active">
											<a href="#dashboard" role="tab" data-toggle="tab">
												<i class="material-icons">dashboard</i>
												Dashboard
											</a>
										</li>
										<li>
											<a href="#add-grades" role="tab" data-toggle="tab">
												<i class="material-icons">school</i>
												Grades
											</a>
										</li>
										<li>
											<a href="#add-categories" role="tab" data-toggle="tab">
												<i class="material-icons">library_books</i>
												Categories
											</a>
										</li>
										<li>
											<a href="#add-topics" role="tab" data-toggle="tab">
												<i class="material-icons">description</i>
												Topics
											</a>
										</li>
										<li>
											<a href="#add-lessons" role="tab" data-toggle="tab">
												<i class="material-icons">subject</i>
												Lessons
											</a>
										</li>
									</ul>
	                            </div>
	                            <div class="card-content table-responsive">
									<div class="tab-content">
										<div class="tab-pane active" id="dashboard">
											<h2>Dashboard</h2>
											<p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
										</div>
										<div class="tab-pane" id="add-grades">
											<h2>Grades</h2>
											<table class="table table-hover">
												<thead class="text-warning">
													<th>ID</th>
													<th>Name</th>
													<th>Short Name</th>
												</thead>
												<tbody>
													<?php
													foreach ($grades as $row) {
													?>
													<tr>
														<td><?=$row->id?></td>
														<td><?=$row->name?></td>
														<td><?=$row->grade?></td>
													</tr>
													<?php
													}
													?>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="add-categories">
											<div class="pull-right">
												<button class="btn btn-primary" data-toggle="modal" data-target="#modalCategories">Add New</button>
											</div>
											<h2>Categories</h2>
											<table class="table table-hover">
												<thead class="text-warning">
													<th>ID</th>
													<th>Grade</th>
													<th>Name</th>
													<th>Difficulty</th>
												</thead>
												<tbody>
													<?php
													foreach ($categories as $row) {
													?>
													<tr>
														<td><?=$row->id?></td>
														<td><?=$grades[$row->grade]->name?></td>
														<td><?=$row->name?></td>
														<td><?=$row->difficulty?></td>
													</tr>
													<?php
													}
													?>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="add-topics">
											<div class="pull-right">
												<button class="btn btn-primary" data-toggle="modal" data-target="#modalTopics">Add New</button>
											</div>
											<h2>Topics</h2>
											<table class="table table-hover">
												<thead class="text-warning">
													<th>ID</th>
													<th>Name</th>
													<th>Category</th>
													<th>Grade</th>
												</thead>
												<tbody>
													<?php
													foreach ($topics as $row) {
													?>
													<tr>
														<td><?=$row->id?></td>
														<td><?=$row->name?></td>
														<td><?=$categories[$row->category]->name?></td>
														<td><?=$grades[$categories[$row->category]->grade]->name?></td>
													</tr>
													<?php
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
	                            </div>
	                        </div>
	                    </div>
					</div>
					<div class="row">
						
					</div>
				</div>