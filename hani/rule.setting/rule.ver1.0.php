<?php


 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="./rule_module.ver1.0.js"></script>
     <script src="./lib/jquery-3.2.1.min.js"></script>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   </head>
   <body>
     <h1>Hello, world!</h1>
     <!--S1 Button trigger Modal -->
     <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
       Rule setting
     </button>
     <!--S1_C1 Modal -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Rule Settings</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--S1_C1_C1 radiobox-->
            <div class="modal-body">
              <!-- Collapse
                  <div class="row">
                      <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                        </div>
                      </div>
                  </div>
                -->
                  <div class="row">
                      <div class="col-4">
                        <!-- S1-C1-C2-->
                        <div id="accordion" role="tablist">
                              <div class="card">
                                <div class="card-header" role="tab" id="headingOne">  <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      categories1
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="card-body">
                                    <!-- radio list -->
                                      <div class="row">
                                          <div class="col-lg-2">
                                            <div class="input-group">
                                              <span class="input-group-addon">
                                                rules1<input type="checkbox" name="rules" id="rules1" aria-label="Radio button for following rules" value="DuplicatePropertyName">
                                              </span>
                                            </div>
                                          </div>
                                          <div class="col-lg-2">
                                            <div class="input-group">
                                              <span class="input-group-addon">
                                                rules2<input type="checkbox" name="rules" id="rules2" aria-label="Radio button for following rules" value="EmptyBlock">
                                              </span>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                  <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      categories2
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    Not Yet
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                  <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      categories3
                                  </a>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                  <div class="card-body">
                                    Not Yet </div>
                                </div>
                              </div>
                            </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="makeRule()">Save changes</button>
            </div>
          </div>
        </div>
      </div>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   </body>
 </html>
