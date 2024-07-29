<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/wallpaper1.jpg') no-repeat center center fixed;
            margin: 0;
            padding: 0;
            background-color: #cd9cc0;
        }

        .outer-container {
            position: absolute; /* Changed from relative to absolute */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Offset by 50% of width/height */
            width: 80%; /* Adjust as needed */
            max-width: 600px; /* Max width for responsiveness */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav img {
            cursor: pointer;
            width: 150px; /* Adjust size as needed */
            height: 60px;
            margin-right: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: #fff;
            transition: width 0.3s ease;
            -webkit-transition: width 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
            left: 0;
            background-color: #fff;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }

        .profile-icon {
            margin-left: 15px;
            margin-right: 20px;
            cursor: pointer;
        }

        .profile-icon img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .container {
            width: 100%;
            background-color: #e6cbdc;
            padding: 20px;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .profile-info-left {
            display: flex;
            align-items: center;
        }

        .profile-info-right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 50%; /* Adjust as needed */
        }

        .profile-info label {
            font-weight: bold;
            margin-right: 20px;
            min-width: 150px;
            white-space: nowrap;
        }

        .profile-info p, .profile-info input, .profile-info select {
            margin: 0;
            padding: 5px;
            background-color: #f1f1f1;
            border-radius: 5px;
            width: 50%;
            height: 30px;
            box-sizing: border-box;
        }

        .profile-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: block;
            margin-right: 20px;
        }

        .edit-icon {
            position: absolute;
            top: 60px;
            left: 10px; /* Adjust to position next to profile image */
            width: 30px;
            height: 30px;
            background-color: #333;
            color: #fff;
            border: none; /* Remove border if not needed */
            border-radius: 50%; /* Make the button circular */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .edit-icon:hover {
            background-color: #7c347d;
        }

        .profile-info button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px; /* Space between buttons */
            transition: background-color 0.3s ease;
        }

        .profile-info-logout button {
            background-color: #e57373;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-info button:hover {
            background-color: #7c347d;
        }

        .profile-info-logout button:hover {
            background-color: #d32f2f;
        }

        .scrollable-container {
            max-height: 200px;
            overflow-y: auto;
            margin-bottom: 20px;
        }

        .modal-content {
            background-color: #ccb9c5;
            margin: 50px auto;
            padding: 20px;
            width: 50%;
            border-radius: 10px;
            position: relative;
            max-height: 80vh;
            overflow-y: auto;
        }

        .modal-content span {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
          
        }

       
    </style>
</head>
<body>
<header>
        <nav>
            <img src="images/logo.png" alt="Logo" onclick="location.href='/dashboard'"> <!-- Replace 'logo.png' with your logo image path -->
            <ul>
                <li><a href="#">Restaurants</a></li>
                <li><a href="#">Reservations</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <div class="profile-icon" onclick="location.href='/profile'">
                <img src="images/profile.jpg" alt="Profile">
            </div>
        </div>
    </header>
<div class="black-transparent-card">
    <div class="outer-container">
     
        <div class="container">
        <button class="edit-icon" onclick="document.getElementById('editModal').style.display='block'">✎</button>
        <div class="profile-info">
    <div class="profile-info-left">
        <img src="images/profile.jpg" alt="Profile Image">
        
    </div>
    <div class="profile-info-right">
        <button onclick="document.getElementById('editModal').style.display='block'">Payments</button>
        <div class="profile-info-logout">
<button onclick="logout()">Logout</button>
</div> 
    </div>
</div>

            <div class="profile-info">
                <label for="name">Name:</label>
                <p id="name">{{ $user->name }}</p>
            </div>
            <div class="profile-info">
                <label for="email">Email:</label>
                <p id="email">{{ $user->email }}</p>
            </div>
           
            <div class="profile-info">
                <label for="contactNumber">Contact Number:</label>
                <p id="contactNumber">{{ $user->contact_number }}</p>
            </div>
            <div class="profile-info">
                <label for="allergies">Allergies:</label>
                <p id="allergies">{{ implode(', ', $user->allergies ?? []) }}</p>
            </div>
            <div class="profile-info">
                <label for="preferences">Dietary Preferences:</label>
                <p id="preferences">{{ implode(', ', $user->preferences ?? []) }}</p>
            </div>
            
        </div>
    </div></div>

    <div id="editModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5);">
        <div class="modal-content">
            <span onclick="document.getElementById('editModal').style.display='none'">&times;</span>
            <h2>Edit Profile</h2>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="profile-info">
                    <label for="editName">Name:</label>
                    <input type="text" id="editName" name="name" value="{{ $user->name }}">
                </div>
                
                <div class="profile-info">
                    <label for="editContactNumber">Contact Number:</label>
                    <input type="text" id="editContactNumber" name="contact_number" value="{{ $user->contact_number }}">
                </div>
                <div class="profile-info">
                    <label for="editEmail">Email:</label>
                    <input type="email" id="editEmail" name="email" value="{{ $user->email }}">
                </div>
                <div class="profile-info">
                    <label for="editProfileImage">Profile Image:</label>
                    <input type="file" id="editProfileImage" name="profile_image">
                </div>
                <div class="profile-info">
                    <label>Allergies:</label>
                    <div class="scrollable-container">
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="allergies[]" value="None" {{ in_array('None', $user->allergies ?? []) ? 'checked' : '' }}> None</label>
                            <label><input type="checkbox" name="allergies[]" value="Peanuts" {{ in_array('Peanuts', $user->allergies ?? []) ? 'checked' : '' }}> Peanuts</label>
                            <label><input type="checkbox" name="allergies[]" value="Tree nuts" {{ in_array('Tree nuts', $user->allergies ?? []) ? 'checked' : '' }}> Tree nuts</label>
                            <label><input type="checkbox" name="allergies[]" value="Milk" {{ in_array('Milk', $user->allergies ?? []) ? 'checked' : '' }}> Milk</label>
                            <label><input type="checkbox" name="allergies[]" value="Eggs" {{ in_array('Eggs', $user->allergies ?? []) ? 'checked' : '' }}> Eggs</label>
                            <label><input type="checkbox" name="allergies[]" value="Wheat" {{ in_array('Wheat', $user->allergies ?? []) ? 'checked' : '' }}> Wheat</label>
                            <label><input type="checkbox" name="allergies[]" value="Soy" {{ in_array('Soy', $user->allergies ?? []) ? 'checked' : '' }}> Soy</label>
                            <label><input type="checkbox" name="allergies[]" value="Fish" {{ in_array('Fish', $user->allergies ?? []) ? 'checked' : '' }}> Fish</label>
                            <label><input type="checkbox" name="allergies[]" value="Shellfish" {{ in_array('Shellfish', $user->allergies ?? []) ? 'checked' : '' }}> Shellfish</label>
                            <label><input type="checkbox" name="allergies[]" value="Sesame" {{ in_array('Sesame', $user->allergies ?? []) ? 'checked' : '' }}> Sesame</label>
                            <label><input type="checkbox" name="allergies[]" value="Mustard" {{ in_array('Mustard', $user->allergies ?? []) ? 'checked' : '' }}> Mustard</label>
                            <label><input type="checkbox" name="allergies[]" value="Sulfites" {{ in_array('Sulfites', $user->allergies ?? []) ? 'checked' : '' }}> Sulfites</label>
                            <label><input type="checkbox" name="allergies[]" value="Lupin" {{ in_array('Lupin', $user->allergies ?? []) ? 'checked' : '' }}> Lupin</label>
                            <label><input type="checkbox" name="allergies[]" value="Gluten" {{ in_array('Gluten', $user->allergies ?? []) ? 'checked' : '' }}> Gluten</label>
                            <label><input type="checkbox" name="allergies[]" value="Other" {{ in_array('Other', $user->allergies ?? []) ? 'checked' : '' }}> Other</label>
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <label>Dietary Preferences:</label>
                    <div class="scrollable-container">
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="preferences[]" value="Vegetarian" {{ in_array('Vegetarian', $user->preferences ?? []) ? 'checked' : '' }}> Vegetarian</label>
                            <label><input type="checkbox" name="preferences[]" value="Vegan" {{ in_array('Vegan', $user->preferences ?? []) ? 'checked' : '' }}> Vegan</label>
                            <label><input type="checkbox" name="preferences[]" value="Gluten-free" {{ in_array('Gluten-free', $user->preferences ?? []) ? 'checked' : '' }}> Gluten-free</label>
                            <label><input type="checkbox" name="preferences[]" value="Dairy-free" {{ in_array('Dairy-free', $user->preferences ?? []) ? 'checked' : '' }}> Dairy-free</label>
                            <label><input type="checkbox" name="preferences[]" value="Low-carb" {{ in_array('Low-carb', $user->preferences ?? []) ? 'checked' : '' }}> Low-carb</label>
                            <label><input type="checkbox" name="preferences[]" value="Halal" {{ in_array('Halal', $user->preferences ?? []) ? 'checked' : '' }}> Halal</label>
                            <label><input type="checkbox" name="preferences[]" value="Kosher" {{ in_array('Kosher', $user->preferences ?? []) ? 'checked' : '' }}> Kosher</label>
                            <label><input type="checkbox" name="preferences[]" value="Other" {{ in_array('Other', $user->preferences ?? []) ? 'checked' : '' }}> Other</label>
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <button type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function logout() {
        if (confirm("Are you sure you want to logout?")) {
            fetch('/logout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => {
                if (response.ok) {
                    window.location.href = "/";
                } else {
                    alert('Logout failed. Please try again.');
                }
            }).catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    }
</script>
</body>
</html>

