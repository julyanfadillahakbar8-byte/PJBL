<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/db.php';

header('Content-Type: application/json; charset=utf-8');

function respond(array $payload, int $status = 200): void
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(['ok' => false, 'message' => 'Method not allowed'], 405);
}

$payload = json_decode(file_get_contents('php://input') ?: '{}', true);
if (!is_array($payload)) {
    respond(['ok' => false, 'message' => 'Data tidak valid'], 422);
}

$required = ['nama', 'email', 'instansi', 'subjek', 'pesan'];
foreach ($required as $field) {
    if (trim((string)($payload[$field] ?? '')) === '') {
        respond(['ok' => false, 'message' => 'Lengkapi semua field wajib.'], 422);
    }
}

$email = trim((string)$payload['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(['ok' => false, 'message' => 'Format email tidak valid.'], 422);
}

try {
    $stmt = db()->prepare(
        'INSERT INTO contact_messages (nama, email, telepon, instansi, subjek, pesan)
         VALUES (:nama, :email, :telepon, :instansi, :subjek, :pesan)'
    );
    $stmt->execute([
        'nama' => trim((string)$payload['nama']),
        'email' => $email,
        'telepon' => trim((string)($payload['telepon'] ?? '')),
        'instansi' => trim((string)$payload['instansi']),
        'subjek' => trim((string)$payload['subjek']),
        'pesan' => trim((string)$payload['pesan']),
    ]);

    respond(['ok' => true, 'message' => 'Pesan berhasil dikirim.']);
} catch (Throwable $error) {
    respond(['ok' => false, 'message' => $error->getMessage()], 500);
}
