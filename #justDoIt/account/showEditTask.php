<section id="editTask">
        <h1> Edit Profile </h1>

        <p id = "errorMessage"> </p>

        <form id = "editorForm" action="profileEditor.php" method = "POST" onkeypress="return keyListener(event)">
            <label for="UsernameLabel">Username:</label> <br>
            <input id = "usernameInput" type = "text" placeholder = "Username" name = "username" value = "<?= $user['username'] ?>"> <br>
            <label for="EmailLabel">Email:</label> <br>
            <input id = "emailInput" type = "email" placeholder = "Email" name = "email" value = "<?= $user['email'] ?>"> <br>
            <label for="NameLabel">Name:</label> <br>
            <input id = "nameInput" type = "text" placeholder = "Name" name = "name" value = "<?= $user['name'] ?>"> <br>
            <label for="LocationLabel">Location:</label> <br>
            <input id = "locationInput" type = "text" placeholder = "Location" name = "location" value = "<?= $user['location'] ?>"> <br>
            <input id = "sendForm" type = "submit" class = "hidden"> <br>
            <button id = "editProfileSubmit" type = "button"> Submit </button>
        </form>

</section>