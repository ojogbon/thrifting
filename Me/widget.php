<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-primary p-48">
												<i class="ti-cup"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Total Income</div>
												<?php
                                                    $user_id =1;
                                                $sql = "SELECT sum(`amount_paid`) as total FROM `thrifttransaction` where user_id='".$user_id."'";
                                                $allTransactions = $transaction->getAllTransactionBySql($sql);

                        ?>
												<div class="stat-digit"><?php echo $allTransactions[0]["total"];?></div>
												<?php
					  //}
					  ?>
											</div>

										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-warning p-48">
												<i class="ti-bag"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Marked </div>
												<?php
                                                $sql = "SELECT count(id) as marked FROM `thrifttransaction` where status = 'marked' and  user_id='".$user_id."'";
                                                $markedTransactions = $transaction->getAllTransactionBySql($sql);
                        ?>
												<div class="stat-digit"><?php echo $markedTransactions[0]["marked"];?></div>
												<?php

					  ?>
											</div>

										</div>
									</div>
								</div>

                                <div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-primary p-48">
												<i class="ti-star"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Pending</div>
												<?php
                                                $sql = "SELECT count(id) as marked FROM `thrifttransaction` where status = 'pending' and user_id='".$user_id."'";
                                                $pendingTransactions = $transaction->getAllTransactionBySql($sql);

                        ?>
												<div class="stat-digit"><?php echo $pendingTransactions[0]["marked"];?></div>
												<?php
					 // }
					  ?>
											</div>

										</div>
									</div>
                                </div>

								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-warning p-48">
												<i class="ti-user"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Issues</div>
												<?php

                        ?>
												<div class="stat-digit"><?php echo "0";?></div>
												<?php
					 // }
					  ?>
											</div>

										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card bg-success">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-up"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Savings</div>
												<div class="stat-text">Loading</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card bg-danger">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-down"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Readings</div>
												<div class="stat-text">Loading</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /# column -->
                    </div>
