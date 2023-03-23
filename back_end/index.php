<?php
include_once 'lib/Admin.php';
$ad = new Admin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seo1Page viva - Dashboard</title>
    <meta name="description" content="" />
    <link rel="alternate" href="" hreflang="en" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <!-- ./Open Graph / Facebook -->

    <!-- CSS Files Section -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <div class="dash-wrap">
            <div class="dash-title">
                <div class="left-col">
                    <div class="title">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        Incomplete
                    </div>
                </div>
                <div class="right-col">
                    <span class="number">0</span>
                </div>
            </div>
            <div class="dash-wrapper">
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="dash-block">
                        <div class="top-col">
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Client name
                            </div>
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Sadik Istiak
                            </div>
                        </div>
                        <div class="middle-col">
                            <div class="middle-cel">
                                <i class="fa-solid fa-file-lines"></i>
                                Lorem ipsum dolor sit amet...
                            </div>
                            <div class="middle-cel">
                                <i class="fa-solid fa-clipboard-list"></i>
                                1/2
                            </div>
                        </div>
                        <div class="bottom-col">
                            <div class="left-col">
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    12+
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-regular fa-comments"></i>
                                    15
                                </span>
                                <a href="#ex1" rel="modal:open" data-id="<?php echo $i; ?>" class="user-block file_upload">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <?php
                                    $data = $ad->showInfo($i);
                                    if ($data) {
                                        echo $data->num_rows;
                                    } else {
                                        echo "0";
                                    }
                                    ?>
                                </a>
                                <span class="user-block">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    30-12-2022
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="dash-wrap">
            <div class="dash-title">
                <div class="left-col">
                    <div class="title">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        To Do
                    </div>
                </div>
                <div class="right-col">
                    <span class="number">0</span>
                </div>
            </div>
            <div class="dash-wrapper">
                <?php for ($i = 11; $i <= 20; $i++) { ?>
                    <div class="dash-block">
                        <div class="top-col">
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Client name
                            </div>
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Sadik Istiak
                            </div>
                        </div>
                        <div class="middle-col">
                            <div class="middle-cel">
                                <i class="fa-solid fa-file-lines"></i>
                                Lorem ipsum dolor sit amet...
                            </div>
                            <div class="middle-cel">
                                <i class="fa-solid fa-clipboard-list"></i>
                                1/2
                            </div>
                        </div>
                        <div class="bottom-col">
                            <div class="left-col">
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    12+
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-regular fa-comments"></i>
                                    15
                                </span>
                                <a href="#ex1" rel="modal:open" data-id="<?php echo $i; ?>" class="user-block file_upload">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <?php
                                    $data = $ad->showInfo($i);
                                    if ($data) {
                                        echo $data->num_rows;
                                    } else {
                                        echo "0";
                                    }
                                    ?>
                                </a>
                                <span class="user-block">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    30-12-2022
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="dash-wrap">
            <div class="dash-title">
                <div class="left-col">
                    <div class="title">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        Doing
                    </div>
                </div>
                <div class="right-col">
                    <span class="number">0</span>
                </div>
            </div>
            <div class="dash-wrapper">
                <?php for ($i = 21; $i <= 30; $i++) { ?>
                    <div class="dash-block">
                        <div class="top-col">
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Client name
                            </div>
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Sadik Istiak
                            </div>
                        </div>
                        <div class="middle-col">
                            <div class="middle-cel">
                                <i class="fa-solid fa-file-lines"></i>
                                Lorem ipsum dolor sit amet...
                            </div>
                            <div class="middle-cel">
                                <i class="fa-solid fa-clipboard-list"></i>
                                1/2
                            </div>
                        </div>
                        <div class="bottom-col">
                            <div class="left-col">
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    12+
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-regular fa-comments"></i>
                                    15
                                </span>
                                <a href="#ex1" rel="modal:open" data-id="<?php echo $i; ?>" class="user-block file_upload">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <?php
                                    $data = $ad->showInfo($i);
                                    if ($data) {
                                        echo $data->num_rows;
                                    } else {
                                        echo "0";
                                    }
                                    ?>
                                </a>
                                <span class="user-block">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    30-12-2022
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="dash-wrap">
            <div class="dash-title">
                <div class="left-col">
                    <div class="title">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        Under Review
                    </div>
                </div>
                <div class="right-col">
                    <span class="number">0</span>
                </div>
            </div>
            <div class="dash-wrapper">
                <?php for ($i = 31; $i <= 40; $i++) { ?>
                    <div class="dash-block">
                        <div class="top-col">
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Client name
                            </div>
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Sadik Istiak
                            </div>
                        </div>
                        <div class="middle-col">
                            <div class="middle-cel">
                                <i class="fa-solid fa-file-lines"></i>
                                Lorem ipsum dolor sit amet...
                            </div>
                            <div class="middle-cel">
                                <i class="fa-solid fa-clipboard-list"></i>
                                1/2
                            </div>
                        </div>
                        <div class="bottom-col">
                            <div class="left-col">
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    12+
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-regular fa-comments"></i>
                                    15
                                </span>
                                <a href="#ex1" rel="modal:open" data-id="<?php echo $i; ?>" class="user-block file_upload">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <?php
                                    $data = $ad->showInfo($i);
                                    if ($data) {
                                        echo $data->num_rows;
                                    } else {
                                        echo "0";
                                    }
                                    ?>
                                </a>
                                <span class="user-block">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    30-12-2022
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="dash-wrap">
            <div class="dash-title">
                <div class="left-col">
                    <div class="title">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        Completed
                    </div>
                </div>
                <div class="right-col">
                    <span class="number">0</span>
                </div>
            </div>
            <div class="dash-wrapper">
                <?php for ($i = 41; $i <= 50; $i++) { ?>
                    <div class="dash-block">
                        <div class="top-col">
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Client name
                            </div>
                            <div class="top-cel">
                                <i class="fa-sharp fa-solid fa-user"></i>
                                Sadik Istiak
                            </div>
                        </div>
                        <div class="middle-col">
                            <div class="middle-cel">
                                <i class="fa-solid fa-file-lines"></i>
                                Lorem ipsum dolor sit amet...
                            </div>
                            <div class="middle-cel">
                                <i class="fa-solid fa-clipboard-list"></i>
                                1/2
                            </div>
                        </div>
                        <div class="bottom-col">
                            <div class="left-col">
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-solid fa-circle-user"></i>
                                </span>
                                <span class="user-block">
                                    12+
                                </span>
                                <span class="user-block">
                                    <i class="fa-sharp fa-regular fa-comments"></i>
                                    15
                                </span>
                                <a href="#ex1" rel="modal:open" data-id="<?php echo $i; ?>" class="user-block file_upload">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <?php
                                        $data = $ad->showInfo($i);
                                        if ($data) {
                                            echo $data->num_rows;
                                        } else {
                                            echo "0";
                                        }
                                    ?>
                                </a>
                                <span class="user-block">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    30-12-2022
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="ex1" class="modal">
        <form class="dash-form" id="info_form" enctype="multipart/form-data">
            <div id="msg"></div>
            <input type="text" name="name" id="name" placeholder="Task name" class="field">
            <input type="hidden" name="info_id" id="info_id">
            <input type="file" name="img" placeholder="Task img" id="img" class="field">
            <input type="submit" value="Add Task" class="btn">
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/5356aed19a.js" crossorigin="anonymous"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- <script src="assets/js/main.js"></script> -->

    <script>
        $(document).ready(function() {
            let name, file, img;
            let nameE = imgE = infoE = true;
            let infoID, infoVal;

            /* info id */
            $(".file_upload").on("click", function() {
                infoID = $(this).attr("data-id");
                $("#info_id").val(infoID);
            });

            /* name validation */
            $("#name").on("keyup", function() {
                name = $(this).val();

                if (name.length < 3 || name.length > 20) {
                    $("#msg").addClass("active").html("<b>Task name</b> minimum 3 & maximum 20 character require");
                    nameE = true;
                } else {
                    $("#msg").html("");
                    nameE = false;
                }
            });

            /* img validation */
            var _URL = window.URL || window.webkitURL;

            $("#img").change(function(e) {
                if ((file = this.files[0])) {
                    img = new Image();
                    img.onload = function() {
                        if (this.width < 200 || this.width > 2100 || this.height < 200 || this.height > 2100) {
                            $("#msg").html("Product image minimum size 200x200px & maximum size 2100x2100px");
                            imgE = true;
                        } else {
                            $("#msg").html("");
                            imgE = false;
                        }
                    };
                    img.onerror = function() {
                        $("#msg").html("Select only image");
                        imgE = true;
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });

            /* add new product */
            $("#info_form").submit(function() {
                event.preventDefault();

                if (nameE == false) {
                    $.ajax({
                        url: "add_info_code.php",
                        type: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $("#msg").html(result);
                            let nameE = imgE = true;

                            $('#info_form')[0].reset();
                        }
                    });
                } else {
                    $("#msg").html("<b>Error</b>: Fill up all form");
                }
            });
        });
    </script>
</body>

</html>