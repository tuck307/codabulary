

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">Codabulary</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            
          <ul class="nav navbar-nav">
            <li>
              <a href="../help/">Help</a>
            </li>
            <li>
              <a href="http://news.bootswatch.com">Blog</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Download <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a tabindex="-1" href="./bootstrap.min.css">bootstrap.min.css</a></li>
                <li><a tabindex="-1" href="./bootstrap.css">bootstrap.css</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="./variables.less">variables.less</a></li>
                <li><a tabindex="-1" href="./bootswatch.less">bootswatch.less</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right col-sm-5 col-lg-4">
            <li>
                <form id='searchForm' class="navbar-form navbar-left" style='padding:0;'>
                    <span class="input-group ">
                      <input type="text" id='searchInput' class="form-control col-lg-8" placeholder="Search">
                      <span class="input-group-btn">
                         <button id='searchBtn' class="btn btn-default" type="submit">Go!</button>
                      </span>
                    </span>
                </form>
            </li>
          </ul>

        </div>
      </div>
    </div>

 <!-- Button trigger modal -->
<!--  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Login info</h4>
        </div>
          <form role="form" >
                <div class="modal-body">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Passcode</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passcode">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
          </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->