<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trogress</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
  
    
    
    <div class="logo-container">
        <img src="saw.png" alt="Logo" class="logo">
    </div>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="https://dpt-info.univ-boumerdes.dz/" target="_blank">About Us</a>
       Email us at : <a class="nav-link"    href="mailto:umbb_fs_di_scolarite@yahoo.fr">umbb_fs_di_scolarite@yahoo.fr</a>
    </nav>
    <div class="form-container">
       
        <h2>Student Bac Information</h2>
      
        <!-- Form for matricule and Bac password -->
        
        <form action="/submit" method="POST">
            <label for="matricule">Matricule:</label>
            <input type="text" id="matricule" name="matricule" placeholder="matricule" required>

            <label for="password">Mot de passe </label>
            <input type="password" id="password" name="password" placeholder="Enter votre motpass " required>

            <input type="submit" value="login">
        </form>
    </div>
</body>
</html>