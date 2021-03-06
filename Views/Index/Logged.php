<!-- tabs -->
                <div class="tabs_framed styled">
                    <div class="inner">
                        <ul class="tabs clearfix active_bookmark1 tab_id1 bookmarks4" id="tabsMenu">
                            <li class="active"><a style="outline: medium none;" hidefocus="true" href="#console" data-toggle="tab">Console</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#users" data-toggle="tab">Utilisateurs</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#roles" data-toggle="tab">Rôles</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#profils" data-toggle="tab">Profils</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#groupesRessources" data-toggle="tab">Groupes de ressources</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Vues" data-toggle="tab">Vues</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Vuematérialisées" data-toggle="tab">Vues matérialisées</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Procedure" data-toggle="tab">Procédures</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Fonction" data-toggle="tab">Fonctions</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Trigger" data-toggle="tab">Triggers</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Tablespace" data-toggle="tab">Tablespaces</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Tables" data-toggle="tab">Tables</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Importer" data-toggle="tab">Importer</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#Exporter" data-toggle="tab">Exporter</a></li>
                            <li><a style="outline: medium none;" hidefocus="true" href="#deconnexion" data-toggle="tab">Déconnexion</a></li>
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
                            		include(ROOT_DIR.DS.'Views'.DS.'User'.DS.'index.php');
                            	?>
                            </div>
                            <div class="tab-pane fade" id="roles">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Role'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="profils">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Profil'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="groupesRessources">
                                <h4>Groupes de ressources</h4>
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'groupesRessources'.DS.'index.php');
                                ?>
                            </div>
                             <div class="tab-pane fade" id="Vues">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Vue'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Vuematérialisées">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'VueMaterialisees'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Procedure">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Procedure'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Fonction">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Fonction'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Trigger">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Triger'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Tablespace">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Tablespace'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Tables">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Table'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Importer">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Importer'.DS.'index.php');
                                ?>
                            </div>
                            <div class="tab-pane fade" id="Exporter">
                                <?php
                                    include(ROOT_DIR.DS.'Views'.DS.'Exporter'.DS.'index.php');
                                ?>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!--/ tabs -->