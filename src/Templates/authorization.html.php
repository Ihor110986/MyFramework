<div class="row">
  <div class="col-3"></div>
  <div class="col-md-offset-3 col-md-6">
    <form class="form-horizontal" action="#" method="post">
      <span class="heading">Authorization</span>
      <!--            <small style="color: red;"><i>--><?//= $_SESSION['error']; ?><!--</i></small> <br>-->
      <div class="form-group">
        <input type="text" class="form-control" id="text" placeholder="Login" name="login">
        <i class="fa fa-user"></i>
      </div>
      <div class="form-group help">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        <i class="fa fa-lock"></i>
      </div>
      <div class="form-group" style="margin-bottom: 60px;">
        <span class="text"><a href="/registeration">Registration</a></span>
        <button type="submit" class="btn btn-secondary">Send</button>
      </div>
    </form>
  </div>
  <div class="col-3"></div>
</div>