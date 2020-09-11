<?php require_once '../../app.php'; ?>

<?php include ADMIN . 'inc/header.php'; ?>

<?php 

if(isset($_GET['city_id']) and is_numeric($_GET['city_id'])) {

    $city_id = $_GET['city_id'];
    $row = getOne("cities", "city_id = '$city_id'");

    if(empty($row)) {
        abort();
    }
} else {
    aredirect("city/view.php");
}

?>

<div class="container">
    <div class="row">
<!-- task  -->
<!-- confirm password -->
<!-- validate type in array -->

    <div class="col-8 mx-auto my-5">
        <div class="card-header">
            <h3 class="text-center">Edit Info About City</h3>
           
            <div>
                <form class="border p-5 my-3 " method="POST" action="">
                    <div class="form-group">
                        <label for="name"  class="text-dark "> Name</label>
                        <input type="hidden" name="id">
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>


</div>
</div>

<?php include ADMIN . 'inc/footer.php'; ?>
