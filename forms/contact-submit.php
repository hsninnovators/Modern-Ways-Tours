<?php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !verify_csrf($_POST['csrf_token'] ?? null)) { http_response_code(403); die('Invalid request.'); }
$full=post_value('full_name');$phone=post_value('phone');$city=post_value('city');$pkg=post_value('interested_package');$msg=post_value('message');$time=post_value('preferred_contact_time');
if (!$full || !$phone || !$city || !$pkg || !$msg || !$time) { die('Please complete all required fields.'); }
$wa="New Contact Query%0AName: ".rawurlencode($full)."%0APhone: ".rawurlencode($phone)."%0ACity: ".rawurlencode($city)."%0APackage: ".rawurlencode($pkg)."%0ATime: ".rawurlencode($time)."%0AMessage: ".rawurlencode($msg);
$stmt=db()->prepare('INSERT INTO contact_queries (full_name,phone,city,interested_package,message,preferred_contact_time,whatsapp_message) VALUES (?,?,?,?,?,?,?)');
$stmt->execute([$full,$phone,$city,$pkg,$msg,$time,urldecode(str_replace('%0A',"\n",$wa))]);
$url='https://wa.me/'.WHATSAPP_NUMBER.'?text='.$wa;
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Contact Sent</title><script src="https://cdn.tailwindcss.com"></script><meta http-equiv="refresh" content="2;url=<?= e($url) ?>"></head><body class="bg-slate-100"><div class="mx-auto mt-24 max-w-xl rounded-2xl bg-white p-8 text-center shadow"><h1 class="text-2xl font-black text-green-700">Thank you. Your contact request has been saved.</h1><p class="mt-3">Opening WhatsApp with your message...</p><a class="mt-6 inline-block rounded-full bg-green-600 px-5 py-3 font-bold text-white" href="<?= e($url) ?>">Open WhatsApp Now</a></div></body></html>
