<?php include 'header.php'?>
  

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php include 'sidebar.php' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'navbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">JOBS</h1>

                </div>
                <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="text-right m-3"><button class="btn btn-primary" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Add Jobs</button></div>

    <div class="card-header py-3">
     
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="http://" class="text-danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Job Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter job title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Job Description</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <label for="">Salary</label>
            <input type="text" class="form-control" id=""  placeholder="Enter Amount">
        </div>
       
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<?php include 'footer.php' ?>