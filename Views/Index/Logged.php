<!-- tabs -->
                <div class="tabs_framed styled">
                    <div class="inner">
                        <ul class="tabs clearfix active_bookmark1 tab_id1 bookmarks4">
                            <li class="active"><a style="outline: medium none;" hidefocus="true" href="#console" data-toggle="tab">Console</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#users" data-toggle="tab">Utilisateurs</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#starred" data-toggle="tab">Starred</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#archive" data-toggle="tab">Archive</a></li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane fade in active" id="console">
								<div class="console">
									<p>
										Entrez le code SQL, PL/SQL puis appuyez sur Exécuter.
									</p>
									<form action="<?php echo ROOT_URL.'/Console/execute'; ?>" method="post">
										<textarea style="width: 100%; height:300px;" name="query"></textarea><br/>
										<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="send" value="Executer" type="submit"></span>
									</form>

								</div>
                            </div>
                            <div class="tab-pane fade" id="users">
                            	<?php
                            		include(ROOT_DIR.DS.'Views'.DS.'Users'.DS.'index.php');
                            	?>
                            </div>
                            <div class="tab-pane fade" id="starred">
                                <div class="tab_image"><img src="images/temp/tabimage7.png" alt=""></div>
                                <h4>11 October</h4>
                                <p>He made his film debut with a mirror part in Black to the Future Part II</p>
                                <a style="outline: medium none;" hidefocus="true" href="#" class="see-more"><span>See more</span></a>
                            </div>
                            <div class="tab-pane fade" id="archive">
                                <div class="tab_image"><img src="images/temp/tabimage5.png" alt=""></div>
                                <h4>14 September</h4>
                                <p>He made his film debut with a mirror part in Black to the Future Part II</p>
                                <a style="outline: medium none;" hidefocus="true" href="#" class="see-more"><span>See more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ tabs -->