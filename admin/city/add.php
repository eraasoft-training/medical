<?php require_once '../../app.php'; ?>

<?php include ADMIN . 'inc/header.php'; ?>

<div class="container">
    <div class="row">

    <div class="col-8 mx-auto my-5">
        <div class="card-header">
            <h3 class="text-center">Add New City</h3>
            <div>

            <?php 
            if(isset($_POST['submit'])) {
                // decomposing and preparation
                foreach ($_POST as $key => $value) {
                    $$key = prepareInput($value);
                }

                // validation
                // name: required, string, max:100
                if(! isRequired($name)) {
                    $errors['name'] = "required";
                } elseif(! isString($name)) {
                    $errors['name'] = "must be string";
                } elseif(! isNotMoreThan($name, 100)) {
                    $errors['name'] = "must be <= 100";
                }

                // if validation passes
                if(empty($errors)) {
                    
                    // insert new row in db 
                    $data = [
                        'city_name' => $name
                    ];

                    $is_inserted = insert("cities", $data);

                    if($is_inserted) 
                        $success = "city added successfully";
                }
            }
            ?>

                <?php if(!empty($success)) echo "<div class='alert alert-success'>$success</div>";   ?>
                <form class="border p-5 my-3 " method="POST" action="">
                    <div class="form-group">
                    <label for="name"  class="text-dark ">City Name <?php getError('name');  ?></label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Add</button>
                </form>
            </div>
        </div>
    </div>


    </div>
    </div>

<?php include ADMIN . 'inc/footer.php'; ?>
