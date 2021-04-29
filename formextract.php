    <?php

    if (file_exists($_POST['icno'] . '.txt')) {      //Check for filename with given nric
        echo '<script type="text/javascript">';
        echo ' alert("This IC Number have been registered!");';
        echo 'window.location.href = "page4.html";';
        echo '</script>'; 
    }
    else {   //filename not found, write to file
           $content_to_write = "First Name: " . $_POST['fname'] . "\n";
           $content_to_write .= "Last Name: " . $_POST['lname'] . "\n";
           $content_to_write .= "IC Number/Passport ID : " . $_POST['icno'] . "\n";
           $content_to_write .= "Email: " . $_POST['email'] . "\n";
           $content_to_write .= "Address: " . $_POST['address'] . "\n";
           $content_to_write .= "City: " . $_POST['city'] . "\n";
           $content_to_write .= "State: " . $_POST['state'] . "\n";
           $content_to_write .= "Zip Code: " . $_POST['zipcode'] . "\n";
           $content_to_write .= "Mobile Phone: " . $_POST['nofon'] . "\n";
           $content_to_write .= "Vaccine Selected: " . $_POST['vaccine'] . "\n";
           $content_to_write .= "Gender: " . $_POST['gender'] . "\n";
           $content_to_write .= "Date Of Birth: " . $_POST['dob'] . "\n";

           file_put_contents($_POST['icno'] . '.txt', $content_to_write);

        header('Location: thank_you_page.html');
    }
    ?>