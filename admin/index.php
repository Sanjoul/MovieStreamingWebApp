<?php include 'header.php';  ?>

<div class="container-fluid">

  <div class="container">

    <div class="jumbotron">
      <h1 style="color: antiquewhite;"> Enter the Movie details</h1>
      <p> <b></b> </p> <br>

      <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

        <input type="text" class="form-control" placeholder="Movie Name" name="mname" value=""><br>
        <input type="text" class="form-control" placeholder="Year of Release" name="release" value="">
        <br>
        <select style="width: 100%;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="genre">
          <option value="none">Select Genre</option>
          <option value="Horror">Horror</option>
          <option value="Action">Action</option>
          <option value="Comedy">Comedy</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Romance">Romance</option>
          <option value="Cartoon">Cartoon</option>
        </select>
      <br>
      <select style="width: 100%;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="genre2">
          <option value="none">Select Genre</option>
          <option value="Horror">Horror</option>
          <option value="Action">Action</option>
          <option value="Comedy">Comedy</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Romance">Romance</option>
          <option value="Cartoon">Cartoon</option>
        </select>
             <br>
             <select style="width: 100%;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="genre3">
          <option value="none">Select Genre</option>
          <option value="Horror">Horror</option>
          <option value="Action">Action</option>
          <option value="Comedy">Comedy</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Romance">Romance</option>
          <option value="Cartoon">Cartoon</option>
        </select>
             <br>
             <select style="width: 100%;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="genre4">
          <option value="none">Select Genre</option>
          <option value="Horror">Horror</option>
          <option value="Action">Action</option>
          <option value="Comedy">Comedy</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Romance">Romance</option>
          <option value="Cartoon">Cartoon</option>
        </select>
             <br>
             <select style="width: 100%;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="genre5">
          <option value="none">Select Genre</option>
          <option value="Horror">Horror</option>
          <option value="Action">Action</option>
          <option value="Comedy">Comedy</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Romance">Romance</option>
          <option value="Cartoon">Cartoon</option>
        </select>
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Description" name="desc" value="">
             <br>

       

       
        <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
        <br>
        <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
        <br>
        <div class="row">
          <div class="col">
            <table>
              <tr>
                <td> <label style="color:white ;" form=""><b>Upload Image : </b></label> </td>
                <td>
                  <div class="">
                    <input type="hidden" name="size" value="100000">

                    <input type="file" name="image" value="">
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col">
            <table>
              <tr>
                <td> <label style="color:white ;" for=""><b>Upload Video : </b></label> </td>
                <td>
                  <div class="">
                    <input type="hidden" name="size" value="30000000">

                    <input type="file" name="video" value="">
                  </div>
                </td>
              </tr>
            </table>

          </div>
        </div> <br><br>
        <div class="signupbutton">
          <input type="submit" class="btn btn-danger btn-lg" name="upload" value="Submit">
        </div>


      </form>

    </div>


  </div>

</div>


</div>

<footer class="page-footer font-small blue">

  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="">bsanjoul@gmail.com</a>
  </div>

</footer>
</body>

</html>