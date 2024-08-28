<?php include('./inc/config.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Dashboard with Data Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">

            <!-- Main Content -->
            <main class="col-12">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-3 mb-2 border-bottom">
                    <h1 class="h2">Dashboard</h1>

                    <!-- Range Slider -->
                    <div class="me-3 ms-5">
                        <input type="text" id="age" readonly class="form-control-plaintext" />
                        <div id="slider-range"></div>
                    </div>

                    <!-- Search and Add Button -->
                    <div class="d-flex search-container">
                        <input type="text" class="form-control me-2 flex-grow-1" id="searchInput"
                            placeholder="Search...">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#formModal">Add New</button>
                    </div>
                </div>

                <button type="button" class="btn btn-danger mb-2" id="deleteBtn">Delete</button>
                <!-- Data Table -->
                <div id="tableData">

                </div>
            </main>
        </div>
    </div>

    <!-- Modal with Form in Tabular Layout -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Add New Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="InsertForm">
                        <table class="table table-bordered table-form">
                            <tbody>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td>
                                        <input type="text" class="form-control" id="nameInput" placeholder="Enter name">
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Gender</strong></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genderOptions"
                                                id="genderMale" value="Male">
                                            <label class="form-check-label" for="genderMale">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genderOptions"
                                                id="genderFemale" value="Female">
                                            <label class="form-check-label" for="genderFemale">Female</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Age</strong></td>
                                    <td>
                                        <input type="number" class="form-control" id="ageInput" placeholder="Enter age"
                                            max="100">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Languages</strong></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="languageEnglish"
                                                value="English">
                                            <label class="form-check-label" for="languageEnglish">English</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="languageBengali"
                                                value="Bengali">
                                            <label class="form-check-label" for="languageBengali">Bengali</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="languageHindi"
                                                value="Hindi">
                                            <label class="form-check-label" for="languageHindi">Hindi</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Country</strong></td>
                                    <td>
                                        <?php 
                                    $select = "SELECT * FROM `country`";
                                    $query = mysqli_query($conn,$select);
                                    if(mysqli_num_rows($query)>0) {
                                    ?>
                                        <select class="form-select" id="countrySelect">
                                            <option selected disabled>Select a country</option>
                                            <?php while($row = mysqli_fetch_assoc($query)) {?>
                                            <option value="<?php echo $row['country_id'];?>">
                                                <?php echo $row['country_name'];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td><strong>City</strong></td>
                                    <td id="cityData">
                                        <!-- City List Load By Ajax Request -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="button" id="submitBtn" class="btn btn-primary" value="Save Data">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <script src="./assets/script.js"></script>
    <script src="./ajax-script.js"></script>
</body>

</html>