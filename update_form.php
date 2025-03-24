<!DOCTYPE html>
<html>

<head>
    <title>Edit Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .color-palette {
            display: flex;
        }

        .color-option {
            width: 30px;
            height: 30px;
            border: 2px solid #EAEDED;
            margin-right: 20px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .selected-color {
            border: 2px solid gray;
            /* Highlight the selected color with a black border */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Notes</h2>
        <?php
        include 'db_1.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM notes where id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

        ?>
                <style>
                    body {
                        background-color: <?php echo $row['color']; ?>;
                    }
                </style>
                <form method="post" action="update_process.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <textarea name="content" class="form-control" rows="15" required><?php echo $row['content']; ?></textarea>
                    </div>
                    <div class="color-palette">
                        <div class="color-option" style="background-color: #F2D7D5;"></div>
                        <div class="color-option" style="background-color: #F6DDCC;"></div>
                        <div class="color-option" style="background-color: #FDEBD0;"></div>
                        <div class="color-option" style="background-color: #D5F5E3;"></div>
                        <div class="color-option" style="background-color: #D4E6F1;"></div>
                        <div class="color-option" style="background-color: #E8DAEF;"></div>
                        <div class="color-option" style="background-color: #D5D8DC;"></div>
                    </div>
                    <input type="hidden" name="color" id="selected_color" value="">
                    <script>
                        const colorOptions = document.querySelectorAll('.color-option');
                        const selectedColorInput = document.getElementById('selected_color');

                        colorOptions.forEach(option => {
                            option.addEventListener('click', function() {
                                const selectedColor = getComputedStyle(option).backgroundColor;

                                // Remove the 'selected-color' class from all options
                                colorOptions.forEach(opt => opt.classList.remove('selected-color'));

                                // Add the 'selected-color' class to the clicked option
                                option.classList.add('selected-color');

                                // Update the hidden input field with the selected color
                                selectedColorInput.value = selectedColor;

                                // Set the background color of the body
                                document.body.style.backgroundColor = selectedColor;
                            });
                        });

                        // Highlight the initially selected color option
                        colorOptions.forEach(option => {
                            if (selectedColorInput.value === getComputedStyle(option).backgroundColor) {
                                option.classList.add('selected-color');
                            }
                        });
                    </script>
                    <button type="submit" class="btn btn-outline-dark">Update</button>
                </form>
        <?php
            } else {
                echo "Notes not found.";
            }
        } else {
            echo "Invalid request.";
        }
        $conn->close();
        ?>

    </div>

</body>

</html>