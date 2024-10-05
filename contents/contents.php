<?php

?>

<?php
class contents{
    public function RegisterForm(){
?>
<div class="container d-flex flex-column align-items-center justify-content-center text-center">
    <div class="col-4 bg-secondary p-5 rounded">
        <h2 class="text-white">User Registration</h2>
        <form method="post" action="processes.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
                <label for="username"><i class="fas fa-user"></i> Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                <label for="email"><i class="fas fa-envelope"></i> Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                <label for="password"><i class="fas fa-lock"></i> Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="confirm_password" required>
                <label for="confirmPassword"><i class="fas fa-lock"></i> Confirm Password</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg" name="reg-user">Register</button>
            </div>
        </form>
    </div>
</div>
        <?php
    }
    public function table(){
        ?>
        <?php include 'pdo.php';?>
        <table class="table table-striped">
            <thead>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
            </thead>
            <tbody>
            <?php while ($row = $result_users->fetch_assoc()) { ?>
                <?php 
                $state = "inactive";
                $color = "";
                    if ($row['Status'] = 1) {
                        $state = "active";
                        $color = "";
                    } else {
                        $state = "inactive";
                        $color = "bg-danger";
                    }
                } else {
                    // No rows found
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }
            } catch (PDOException $e) {
                // Catch and display any PDO errors
                echo 'Query failed: ' . $e->getMessage();
                die();
            }
                
            ?>
            </tbody>
        </table>
        <?php
    }
    public function LoginForm(){
        ?>
        <div class="container d-flex flex-column align-items-center justify-content-center text-center">
            <div class="col-4 bg-secondary p-5 rounded">
                <h2 class="text-white">User Login</h2>
                <form method="post" action="processes.php">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                        <label for="email"><i class="fas fa-envelope"></i>Enter your Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                        <label for="password"><i class="fas fa-lock"></i>Enter your Password</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg" name="login-user">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
    public function TwoFAForm(){
        ?>
        <div class="container d-flex flex-column align-items-center justify-content-center text-center">
            <div class="col-4 bg-secondary p-5 rounded">
                <h2 class="text-white">Two-Factor Authentication</h2>
                <form method="post" action="processes.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="code" placeholder="Enter your 6-digit code" name="code" required>
                        <label for="code"><i class="fas fa-key"></i> Enter your 6-digit code</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg" name="2fa-user">Verify</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
}
