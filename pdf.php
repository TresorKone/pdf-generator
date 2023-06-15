<?php

require_once __DIR__ . '/vendor/autoload.php';


// data enter in the form.
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$text = $_POST['text'];

// mdf instance.
$mpdf = new \Mpdf\Mpdf();

// grabbing data from the user.
$data = '<h1>User Info</h1>';

// concatenating the user data to generate the pdf.
if (isset($_POST['submit'])) {
    $data .= '<b>First Name</b>' . ' ' . ' : ' . '  ' . $first_name . '<br />';
    $data .= '<b>Last Name</b>' . ' ' . ' : ' . '  ' . $last_name . '<br />';
    $data .= '<b>Email</b>' . ' ' . ': ' . '  ' . $email . '<br />';
    $data .= '<b>Contact</b>' . ' ' . ' : ' . '  ' . $contact . '<br />';
    $data .= '<b>Text</b>' . "<br />" . '<br />' . $text;
}

// and finally the data will be used by mpdf to generate the pdf.
try {
    $mpdf->writeHTML($data);

    $mpdf->Output('myPDF.pdf', 'D');
} catch (\Mpdf\MpdfException $e) {
    echo 'error when handling data by mpdf' . '<br />' . var_dump($e);
}




