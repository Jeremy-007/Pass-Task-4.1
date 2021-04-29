    <?php

    // echo $_POST['input_nric'];        

    if(file_exists($_POST ['icno'] . '.txt')){
            echo '<script type="text/javascript">';
            echo ' alert("You are already registered!");';
            echo 'window.location.href = "page4.html";';
            echo '</script>';
    }
    else {
        echo '<script type="text/javascript">';
        echo ' alert("You have not been registered yet!");';
        echo 'window.location.href = "page4.html";';
        echo '</script>';
    }

    ?>
	