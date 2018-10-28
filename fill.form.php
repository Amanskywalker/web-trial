<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Co-Ordinates please :)</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="add.php" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="connection" class="col-md-4 control-label">Co-Ordinates:</label>
                          <div class="col-md-6">
                            <textarea rows="4" cols="50" class="form-control transparent-input" name="coordinates">Co-Ordinates please :)</textarea>
                          </div>
                      </div>
                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                             <button type="submit" class="btn btn-primary">
                                 <i class="fa fa-btn fa-send"></i> save and plot
                             </button>
                         </div>
                     </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
