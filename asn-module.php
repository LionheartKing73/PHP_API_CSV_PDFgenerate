<? include 'includes/head.php';
	include 'includes/nav.php';
	
?>

            
         
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="po-module.php"><i class="fa fa-home"></i> Shipping Advise</a></li>
            
              </ul>
              <div class="m-b-md">
                <h3 class="m-b-none">Shipping Advise</h3>
              </div>
              <section class="panel panel-default">
               
                <div class="table-responsive">
                  <table id="MyStretchGrid" class="table table-striped datagrid m-b-sm">
                    <thead>
                      <tr>
                        <th>
                          <div class="row">
                            <div class="col-sm-8 m-t-xs m-b-xs">
	                             <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create SA</a>
                            </div>
                            <div class="col-sm-4 m-t-xs m-b-xs">
                              <div class="input-group search datagrid-search">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                <div class="input-group-btn">
                                  <button class="btn btn-default btn-sm"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </th>
                      </tr>
                    </thead>

                    <tfoot>
                      <tr>
                        <th class="row">
                          <div class="datagrid-footer-left col-sm-6 text-center-xs m-l-n" style="display:none;">
                            <div class="grid-controls m-t-sm">
                              <span>
                                <span class="grid-start"></span> -
                                <span class="grid-end"></span> of
                                <span class="grid-count"></span>
                              </span>
                              <div class="select grid-pagesize dropup" data-resize="auto">
                                <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                  <span class="dropdown-label"></span>
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" >
                                 
                                  <li data-value="20" data-selected="true"><a href="#">20</a></li>
                                 
                                </ul>
                              </div>
                             
                            </div>
                          </div>
                          <div class="datagrid-footer-right col-sm-6 text-right text-center-xs" style="display:none;">
                            <div class="grid-pager m-r-n">
                              <button type="button" class="btn btn-sm btn-default grid-prevpage"><i class="fa fa-chevron-left"></i></button>
                              <span>Page</span>
                              <div class="inline">
                               
                                  <input class="input-sm form-control" type="text">
                                  
                                
                              </div>
                              <span>of <span class="grid-pages"></span></span>
                              <button type="button" class="btn btn-sm btn-default grid-nextpage"><i class="fa fa-chevron-right"></i></button>
                            </div>
                          </div>
                        </th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
 <? include 'includes/scripts.php';?>
  