<?php

namespace App\Controllers;
use App\Models\M_belajar;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Home extends BaseController
{
	public function index()
	{
		echo view ('header', $this->data);
		echo view ('menu');
		echo view ('dashboard');
		echo view ('footer');
	}
	public function login()
	{
		echo view('pages-login');
	}
	public function halamanutama()
	{
		if (session()->get('id')>0){
		echo view ('header', $this->data);
		echo view ('menu');
		echo view ('dashboard');
		echo view ('footer');
		}else{
			return redirect()->to('/');
		}
	}
	public function register()
	{
		echo view ('header', $this->data);
		echo view ('register');
		echo view ('footer');
	}
	public function melna()
	{
		echo"melna";
	}
    public function pagesfaq()
    {
        echo view ('header', $this->data);
        echo view ('menu');
        echo view ('pages-faq');
        echo view ('footer');
        
    }
	public function meyliana()
	{
		echo"meyliana";
	}
	public function ririn()
	{
		echo"ririn";
	}
	public function ses1()
	{
		echo view ('header', $this->data);
		echo view ('menu');
		echo view ('tables-data');
		echo view ('footer');
	}
	public function forgot_password()
{
    $Sim = new M_belajar();
    $email = $this->request->getPost('email');

    // Check if the email exists in the database
    $user = $Sim->getWhere('user', ['username' => $email]);

    if (!$user || !is_object($user)) {
        echo "No user found with this email.";
        return;
    }

    // Generate token and expiry
    $token = bin2hex(random_bytes(16));
    $token_hash = hash("sha256", $token);
    $expiry = date("Y-m-d H:i:s", strtotime("+20 minutes"));

    // Save token to the database
    $Sim->edit('user', [
        'token' => $token_hash,
        'expiry' => $expiry
    ], ['username' => $email]);

    // Reset link
    $resetLink = base_url("/home/reset_password?token=$token");

    // Create email content
    $subject = "Password Reset Request";
    $message = "
    <html>
    <head>
        <title>Password Reset Request</title>
    </head>
    <body>
        <p>Yahoo~,</p>
        <p>Seems like you have requested to reset your password. Click the link below, okay?~:</p>
        <p><a href='$resetLink' style='color: blue;'>Reset Password</a></p>
        <p>If you did not request this, ignore this email!</p>
        <p>Sincerely,</p>
        <p>Elysia <3</p>
    </body>
    </html>
    ";

    // Send the email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';   // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'YourEmail@gmail.com';  // Your email
        $mail->Password   = 'abcd efgh ijkl mnop';    // App password (NOT your real email password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587; 

        // Recipients
        $mail->setFrom('YourEmail@gmail.com', 'Elysium Hotel Website');
        $mail->addAddress($email);  

        // Content
        $mail->isHTML(true);                                
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        $data['message'] = "A password reset link has been sent to your email.";
        $data['type'] = "success";
        return view('message_view', $data);
    } catch (Exception $e) {
        $data['message'] = "Failed to send email. Error: {$mail->ErrorInfo}";
        $data['type'] = "error";
        return view('message_view', $data);
    }
}

public function reset_password()
{
    $Sim = new M_belajar();
    $token = $_GET['token'] ?? '';
    $token_hash = hash('sha256', $token); // Hash the token from the URL

    // Validate the token
    $reset = $Sim->getWhere('user', ['token' => $token_hash]);

    if (!$reset || !is_object($reset) || strtotime($reset->expiry) < time()) {
        $data['message'] = "Invalid or expired token.";
        return view('error_view', $data); // Render an error view
    }

    // Pass token to the view for the form
    $data['token'] = $token;
    return view('reset_password_view', $data); // Render the reset password view
}



public function update_password()
{
    $Sim = new M_belajar();
    $token = $_GET['token'] ?? '';
    $token_hash = hash('sha256', $token); // Ensure token is hashed consistently
    $password = $this->request->getPost('password');
    $confirmPassword = $this->request->getPost('confirm_password');

    if ($password !== $confirmPassword) {
        $data['message'] = "Passwords do not match.";
        $data['type'] = "error";
        return view('status_view', $data); // Render error view
    }

    // Set the correct timezone for comparison
    date_default_timezone_set('Asia/Jakarta');

    // Validate the token
    $reset = $Sim->getWhere('user', ['token' => $token_hash]);

    if (!$reset || !is_object($reset) || strtotime($reset->expiry) < time()) {
        $data['message'] = "Invalid or expired token.";
        $data['type'] = "error";
        return view('status_view', $data); // Render error view
    }

    // Hash the new password
    $hashedPassword = md5($password);

    // Update the user's password
    $Sim->edit('user', ['password' => $hashedPassword], ['username' => $reset->username]);

    // Delete the reset token
    $Sim->edit('user', ['token' => null, 'expiry' => null], ['username' => $reset->username]);

    $data['message'] = "Your password has been updated successfully.";
    $data['type'] = "success";
    return view('status_view', $data); // Render success view
}


}
