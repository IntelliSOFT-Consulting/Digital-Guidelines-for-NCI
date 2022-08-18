<style>
  #exampleModal {
    top: 50%;
    left: 50%;
  }
  @media screen and (max-width: 1440px) {
  .social{
    margin-left: 0px;
    margin-top: 80px;
}
}
.social{
    margin-top: 50px;
}
.footer {
    flex-shrink: 0;
    padding: 1rem 1rem 2rem 1rem;
    /* text-align: center; */
}
</style>

    <div class="col-md-12 social footer" style=" bottom: 0;background:white;">
      <h4 class="card-title management">
        <h5 style="margin-left:30%">Contact Information</h5>
        <h5 style="margin-left:30%">Tel: +254712345678, +254733112233</h5>

        <div style="margin-left:30%" >
          <h5 class="fa" style="font-size: 1.4em;">Social media:</h5>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-whatsapp"></a>
        </div>
        <!-- <button class="btn btn-info btn-circle" style="float:right;height: 45px;
    width: 130px;border-radius:40px;margin-right:0px;margin-top:0px;box-shadow: none; background-color:#D820C5">Nedd help</button> -->
        <!-- <button type="submit" style="float:right;height: 45px;
    width: 130px;background-color: #D820C5;border-radius:100px;margin-top: 30px;" value="Submit">Nedd help</button> -->
        <button style="float: right;
    height: 30px;
    width: 100px;
    background-color: #D820C5;
    border-radius: 20px; 
    color:white;" data-toggle="modal" data-target="#exampleModal">
          Need Help?</a> </button>
      </h4>
    </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Sender Email:</label>
              <input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" style="background:#D820C5" class="btn btn-primary">Send message</button>
            </div>
          </form>
        </div> 
      </div>
    </div>
  </div>