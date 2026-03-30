<?php
// ─────────────────────────────────────────────
// HOME VISIT FORM HANDLER
// Accepts POST via fetch(), returns JSON
// ─────────────────────────────────────────────

header('Content-Type: application/json');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ── Sanitise and validate ────────────────────

$errors = [];

$name     = trim(strip_tags($_POST['name']     ?? ''));
$phone    = trim(strip_tags($_POST['phone']    ?? ''));
$email    = trim(strip_tags($_POST['email']    ?? ''));
$postcode = trim(strip_tags($_POST['postcode'] ?? ''));
$date     = trim(strip_tags($_POST['date']     ?? ''));
$time     = trim(strip_tags($_POST['time']     ?? ''));
$message  = trim(strip_tags($_POST['message']  ?? ''));

// Honeypot — bots fill this, humans do not
$honeypot = trim($_POST['website'] ?? '');
if ($honeypot !== '') {
    // Silently succeed — do not reveal the trap
    echo json_encode(['success' => true]);
    exit;
}

if ($name === '') {
    $errors[] = 'Please enter your name.';
}

if ($phone === '' && $email === '') {
    $errors[] = 'Please provide at least a phone number or email address.';
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($postcode === '') {
    $errors[] = 'Please enter your postcode so we can confirm coverage.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Build email ──────────────────────────────

$to      = 'reception@coremedica.co.uk';
$subject = 'Home Visit Request — CoreMedica Website';

$body  = "A home visit request has been submitted via the CoreMedica website.\n\n";
$body .= "─────────────────────────────\n";
$body .= "Name:              {$name}\n";
$body .= "Phone:             " . ($phone    ?: '—') . "\n";
$body .= "Email:             " . ($email    ?: '—') . "\n";
$body .= "Postcode:          {$postcode}\n";
$body .= "Preferred date:    " . ($date     ?: '—') . "\n";
$body .= "Preferred time:    " . ($time     ?: '—') . "\n";
$body .= "─────────────────────────────\n";
if ($message !== '') {
    $body .= "Additional notes:\n{$message}\n";
}
$body .= "\nThis request was submitted from: " . ($_SERVER['HTTP_REFERER'] ?? 'unknown page');

$headers  = "From: CoreMedica Website <noreply@coremedica.co.uk>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// ── Send ─────────────────────────────────────

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was a problem sending your request. Please call or email us directly.'
    ]);
}
exit;
