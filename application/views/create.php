<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Recipe</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <div class="container w-50 py-5">
        <h2 class="mt-5">Add Recipe</h2>

        <?php echo form_open_multipart('maincontroller/store'); ?>

        <div>
            <input type="text" name="name" class="form-control mb-2" placeholder="Recipe Name">
        </div>

        <div>
            <textarea name="desc" class="form-control mb-2" placeholder="desc"></textarea>
        </div>

        <div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">Image</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>

        <hr class="mt-5">

        <div>
            <h5>Ingredients</h5>
            <button class="btn btn-primary mb-2" type="button" id="add_item">Add Item</button>
        </div>

        <div id="item">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="item[]" class="form-control" placeholder="Item Name">
                </div>
                <div class="col">
                    <input type="text" name="amount[]" class="form-control" placeholder="Amount">
                </div>
                <div class="col">
                    <select class="custom-select" name="unit[]">
                        <option value="gm">gm</option>
                        <option value="ml">ml</option>
                        <option value="piece">piece</option>
                        <option value="cup">cup</option>
                        <option value="tablespoon">tablespoon</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>

        <div>
            <h5>Steps</h5>
        </div>

        <div>
            <button class="btn btn-primary mb-2" type="button" id="add_step">Add Step</button>
        </div>

        <div id="step">
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">1</span>
                        </div>
                        <input type="text" name="step[]" class="form-control" placeholder="add step">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Add Recipe</button>
        </div>

        <?php echo form_close(); ?>


    </div>


    <script>
        $(document).ready(function() {
            $('#add_item').on('click', function() {
                var item = `<div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="item[]" class="form-control" placeholder="Item Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="amount[]" class="form-control" placeholder="Amount">
                                </div>
                                <div class="col">
                                    <select class="custom-select" name="unit[]">
                                        <option value="gm">gm</option>
                                        <option value="ml">ml</option>
                                        <option value="piece">piece</option>
                                        <option value="cup">cup</option>
                                        <option value="tablespoon">tablespoon</option>
                                    </select>
                                </div>
                            </div>`;

                $('#item').append(item);
            });

            var counter = 2;
            $('#add_step').on('click', function() {
                var step = `<div class="row mb-2">
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">1</span>
                                        </div>
                                        <input type="text" name="step[]" class="form-control" placeholder="add step">
                                    </div>
                                </div>
                            </div>`;

                $('#step').append(step);
                counter++;
            });
        });
    </script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>