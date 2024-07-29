<?php

class PHP_Email_Enquiry_Form
{
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $phone;
    public $date;
    public $message;
    public $headers;
    public $smtp;

    public function __construct()
    {
        $this->message = '';
        $this->headers = '';
        $this->smtp = array();
    }

    public function add_message($content, $label, $priority = 5)
    {
        $this->message .= "<p><strong>{$label}:</strong> {$content}</p>\n";
    }

    public function send()
    {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: {$this->from_name} <{$this->from_email}>" . "\r\n";

        if (!empty($this->smtp)) {
            ini_set('SMTP', $this->smtp['host']);
            ini_set('smtp_port', $this->smtp['port']);
            ini_set('sendmail_from', $this->from_email);
        }

        $success = mail($this->to, $this->subject, $this->message, $headers);

        header('Content-Type: application/json');
        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
        } else {
            echo json_encode(['success' => false, 'message' => "Oops! Something went wrong, and we couldn't send your message."]);
        }
    }
}

$receiving_email_address = 'admin@stalinauditors.tnnet.in';
$contact = new PHP_Email_Enquiry_Form;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $contact->to = $receiving_email_address;
    $contact->from_name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
    $contact->from_email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $contact->phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') : '';
    $contact->subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8') : '';
    $contact->message = isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : '';

    // Check if any field is empty
    if (empty($contact->from_name) || empty($contact->from_email) || empty($contact->phone) || empty($_POST['message'])) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    // SMTP settings
    $contact->smtp = array(
        'host' => 'smtp.tnnet.in', // Corrected SMTP host
        'username' => 'info@stalinauditors.tnnet.in',
        'password' => '1time@p!',
        'port' => '465'
    );

    // Add messages
    $contact->add_message($contact->from_name, 'From');
    $contact->add_message($contact->from_email, 'Email');
    $contact->add_message($contact->phone, 'Phone');
    $contact->add_message(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8'), 'Message', 10);

    // Send the email
    try {
        $contact->send();
    } catch (Exception $e) {
        // Log the detailed error message to the error log
        error_log($e->getMessage());

        // Return a generic error response
        echo json_encode(['success' => false, 'message' => 'There was a problem with your submission. Please try again.']);
    }
}

?>
