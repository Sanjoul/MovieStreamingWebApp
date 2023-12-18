<?php include 'header.php';  ?>
<?php include '../dbh.php';  ?>
<style>
    table{
        background-color: #f7f7f9 !important;
    }
</style>
<div class="container-fluid">

    <div class="container">

        <div class="jumbotron">
            <h1 style="color: white;">Movie Lists:</h1>
            <br>

            <table class="table table-striped">>
                <thead>
                    <tr>
                        <th scope="col">Mid</th>
                        <th scope="col">Name</th>
                        <th scope="col">Genre</th>
                        <th scope="col">R-Date</th>
                        <th scope="col">Runtime</th>
                        <th scope="col">Decription</th>
                        <th scope="col">Viewers</th>
                        <th scope="col">Imgpath</th>
                        <th scope="col">Videopath</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
<?php


            $im = "SELECT * FROM movies ORDER BY name ASC" ;
            $records = mysqli_query($conn,$im);



            while($result = mysqli_fetch_assoc($records)){
                ?>
                <tr>
                    <td scope="row"><?php echo $result['mid'] ?></td>
                    <td><?php echo $result['name'] ?></td>
                    <td><?php echo $result['genre'] ?></td>
                    <td><?php echo $result['rdate'] ?></td>
                    <td><?php echo $result['runtime'] ?></td>
                    <td><?php echo $result['decription'] ?></td>
                    <td><?php echo $result['viewers'] ?></td>
                    <td><img height="100px" width="100px" src="../images/<?php echo $result['imgpath'] ?>"/></td>
                    <td><?php echo $result['videopath'] ?></td>
                    <td>
                        <a href="deleteMovie.php?id=<?php echo $result['mid'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    
                    </a>
                    </td>
                </tr>
                <?php
            }
?>
                </tbody>
            </table>
        </div>


    </div>

</div>


</div>

<footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="">sanjoul@gmail.com</a>
    </div>

</footer>
</body>

</html>