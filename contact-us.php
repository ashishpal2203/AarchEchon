<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];

  // Create the email content
  $email_content = "Full Name: $full_name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Phone Number: $phone_number\n";
  $email_content .= "Message: $address\n";

  // Send the email
  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    // ... (same configuration as before)

    $mail->Host       = 'md-in-51.webhostbox.net';  // For SSL/TLS
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@aarchechon.com';    // SMTP username
    $mail->Password   = 'INFO@JASMIN9';    // SMTP password
    // $mail->SMTPSecure = 'ssl';  
    $mail->Port       = 587;  // Use 465 for SSL, or 587 for TLS


    // Set the sender and recipient addresses
    $mail->setFrom($email, $full_name);
    $mail->addAddress('info@aarchechon.com', 'Jasmin');

    // Content
    $mail->isHTML(false);  // Set email format to plain text
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = $email_content;

    // Send the email
    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>

<?php include 'header.php' ?>


  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap");

    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Roboto", sans-serif;
    }

    .form-main {
      background: linear-gradient(to bottom, #00000024, #00000024), url(https://res.cloudinary.com/dqifboxk5/image/upload/v1686209968/contact-us-2_y8zzx7.jpg) no-repeat center;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .form-main .main-wrapper {
      border-radius: 10px;
      padding: 30px;
      width: 50%;
      box-shadow: 0 0 5px 5px #00000020;
      backdrop-filter: blur(5px);
      background-color: #ffffff85;
    }

    @media screen and (max-width: 991px) {
      .form-main .main-wrapper {
        width: 70%;
      }
    }

    @media screen and (max-width: 767px) {
      .form-main .main-wrapper {
        width: 90%;
      }
    }

    .form-main .main-wrapper .form-head {
      font-size: 30px;
      line-height: 40px;
      font-weight: 600;
      text-align: center;
      margin: 0px 0 25px;
    }

    .form-main .main-wrapper .form-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 15px;
    }

    .form-main .main-wrapper .form-wrapper .form-card {
      position: relative;
      width: 100%;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-input {
      padding: 6px 9px 6px;
      width: 100%;
      border: 1px solid #000;
      border-radius: 5px;
      background: transparent;
      outline: none;
      font-size: 20px;
      line-height: 30px;
      font-weight: 400;
      box-sizing: border-box;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-input:valid,
    .form-main .main-wrapper .form-wrapper .form-card .form-input:focus {
      border: 1px solid #515151;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-input:valid~.form-label,
    .form-main .main-wrapper .form-wrapper .form-card .form-input:focus~.form-label {
      color: #515151;
      top: 30%;
      transform: translateY(-70%);
      font-size: 13px;
      line-height: 23px;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-input:-webkit-autofill,
    .form-main .main-wrapper .form-wrapper .form-card .form-input:-webkit-autofill:hover,
    .form-main .main-wrapper .form-wrapper .form-card .form-input:-webkit-autofill:focus,
    .form-main .main-wrapper .form-wrapper .form-card .form-input:-webkit-autofill:active {
      transition: background-color 9999s ease-in-out 0s;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-input::-webkit-outer-spin-button,
    .form-main .main-wrapper .form-wrapper .form-card .form-input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-label {
      position: absolute;
      left: 25px;
      top: 50%;
      transform: translateY(-50%);
      pointer-events: none;
      transition: 0.3s;
      margin: 0;
      font-size: 18px;
      line-height: 28px;
      font-weight: 500;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-textarea {
      padding: 20px 25px 15px;
      width: 100%;
      border: 1px solid #000;
      border-radius: 5px;
      background: transparent;
      outline: none;
      font-size: 20px;
      line-height: 30px;
      font-weight: 400;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      resize: none;
      box-sizing: border-box;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:valid,
    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:focus {
      border: 1px solid #515151;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:valid~.form-textarea-label,
    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:focus~.form-textarea-label {
      color: #515151;
      top: 18%;
      transform: translateY(-82%);
      font-size: 13px;
      line-height: 23px;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:-webkit-autofill,
    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:-webkit-autofill:hover,
    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:-webkit-autofill:focus,
    .form-main .main-wrapper .form-wrapper .form-card .form-textarea:-webkit-autofill:active {
      transition: background-color 9999s ease-in-out 0s;
    }

    .form-main .main-wrapper .form-wrapper .form-card .form-textarea-label {
      position: absolute;
      left: 25px;
      top: 30%;
      transform: translateY(-70%);
      pointer-events: none;
      transition: 0.3s;
      margin: 0;
      font-size: 18px;
      line-height: 28px;
      font-weight: 500;
    }

    .btn-wrap {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 16px 0 0;
    }

    .btn-wrap button {
      padding: 0 32px;
      font-size: 18px;
      line-height: 48px;
      border: 1px solid transparent;
      font-weight: 600;
      border-radius: 6px;
      transition: all 0.5s ease;
      cursor: pointer;
      box-shadow: 0 0 5px 5px #00000020;
    }

    .btn-wrap button:hover {
      border: 1px solid #000;
      background: transparent;
    }
  </style>
  <section>
    <div class="form-main">
      <div class="main-wrapper">
        <h2 class="form-head">Contact From</h2>

        <div class="row">
          
          <div class="col-lg-12">
            <form class="form-wrapper" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

              <div class="form-card">
                <input class="form-input" type="text" name="full_name" required="required" />
                <label class="form-label" for="full_name">Full Name</label>
              </div>

              <div class="form-card">
                <input class="form-input" type="email" name="email" required="required" />
                <label class="form-label" for="email">Email</label>
              </div>

              <div class="form-card">
                <input class="form-input" type="number" name="phone_number" required="required" />
                <label class="form-label" for="phone_number">Phone number</label>
              </div>

              <div class="form-card">
                <textarea class="form-textarea" maxlength="420" rows="3" name="address" required="required"></textarea>
                <label class="form-textarea-label" for="phone_number">Your Message</label>
              </div>
              <div class="btn-wrap">
                <button type="submit"> Submit </button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php' ?>


</body>

</html>