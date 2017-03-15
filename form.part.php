<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">I am having trouble, connecting to database. Can you help me out?</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="add" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="connection" class="col-md-4 control-label">database connection (eg mysql)?</label>
                          <div class="col-md-6">
                              <input id="connection" type="text" class="form-control transparent-input" name="connection" value="">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="host" class="col-md-4 control-label">database host (eg 127.0.0.1)?</label>
                          <div class="col-md-6">
                              <input id="host" type="text" class="form-control transparent-input" name="host" value="">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="port" class="col-md-4 control-label">database port (eg 3306 for mysql)?</label>
                          <div class="col-md-6">
                              <input id="port" type="text" class="form-control transparent-input" name="port" value="">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="name" class="col-md-4 control-label">database name (eg mydb)?</label>
                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control transparent-input" name="name" value="">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="username" class="col-md-4 control-label">database username (eg root)?</label>
                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control transparent-input" name="username" value="">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password" class="col-md-4 control-label">user password (eg toor)?</label>
                          <div class="col-md-6">
                              <input id="password" type="text" class="form-control transparent-input" name="password" value="">
                          </div>
                      </div>

                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                             <button type="submit" class="btn btn-primary">
                                 <i class="fa fa-btn fa-send"></i> save and connect
                             </button>
                         </div>
                     </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
