<!DOCTYPE html>
<html>
<head>
    <title>Profil Pribadi</title>
</head>
<body>
    <h1>Profil Pribadi</h1>
    <form id="profileForm">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="dob">Tanggal Lahir:</label><br>
        <input type="date" id="dob" name="dob"><br><br>
        
        <label for="address">Alamat:</label><br>
        <input type="text" id="address" name="address"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="phone">No. HP:</label><br>
        <input type="tel" id="phone" name="phone"><br><br>
        
        <label for="instagram">Instagram:</label><br>
        <input type="url" id="instagram" name="instagram"><br><br>
        
        <label for="twitter">Twitter:</label><br>
        <input type="url" id="twitter" name="twitter"><br><br>
        
        <input type="button" value="Submit" onclick="displayProfile()">
    </form>

    <h1>Profil Pribadi</h1>
    <p><strong>Nama:</strong> <span id="displayName"></span></p>
    <p><strong>Tanggal Lahir:</strong> <span id="displayDob"></span></p>
    <p><strong>Alamat:</strong> <span id="displayAddress"></span></p>
    <p><strong>Email:</strong> <span id="displayEmail"></span></p>
    <p><strong>No. HP:</strong> <span id="displayPhone"></span></p>
    <p><strong>Sosial Media:</strong> <a id="displayInstagram" href="" target="_blank">Instagram</a>, <a id="displayTwitter" href="" target="_blank">Twitter</a></p>

    <script>
        function displayProfile() {
            document.getElementById('displayName').innerText = document.getElementById('name').value;
            document.getElementById('displayDob').innerText = document.getElementById('dob').value;
            document.getElementById('displayAddress').innerText = document.getElementById('address').value;
            document.getElementById('displayEmail').innerText = document.getElementById('email').value;
            document.getElementById('displayPhone').innerText = document.getElementById('phone').value;
            document.getElementById('displayInstagram').href = document.getElementById('instagram').value;
            document.getElementById('displayTwitter').href = document.getElementById('twitter').value;
        }
    </script>
</body>
</html>