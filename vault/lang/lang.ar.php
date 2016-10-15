<?php
/**
 * This file is a part of the phpMussel package, and can be downloaded for free
 * from {@link https://github.com/Maikuolan/phpMussel/ GitHub}.
 *
 * PHPMUSSEL COPYRIGHT 2013 AND BEYOND BY THE PHPMUSSEL TEAM.
 *
 * Authors:
 * @see PEOPLE.md
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: Arabic language data (last modified: 2016.10.15).
 *
 * @todo Incomplete.
 */

/** Prevents execution from outside of phpMussel. */
if (!defined('phpMussel')) {
    die('[phpMussel] This should not be accessed directly.');
}

$phpMussel['lang']['textDir'] = 'rtl';
$phpMussel['lang']['bad_command'] = 'أنا لا أفهم هذا الأمر، آسف.';
$phpMussel['lang']['cli_failed_to_complete'] = 'فشل في إكمال عملية المسح.';
$phpMussel['lang']['cli_is_not_a'] = ' ليس ملف أو مجلد.';
$phpMussel['lang']['cli_ln2'] = " Thank you for using phpMussel, a PHP script designed to detect trojans,\n viruses, malware and other threats within files uploaded to your system\n wherever the script is hooked, based on the signatures of ClamAV and others.\n\n PHPMUSSEL COPYRIGHT 2013 and beyond GNU/GPLv2 by Caleb M (Maikuolan).\n\n                                     ~ ~ ~\n\n";
$phpMussel['lang']['cli_ln3'] = " Currently running phpMussel in CLI mode (command line interface).\n\n To scan a file or directory, type 'scan', followed by the name of the file or\n directory that you want phpMussel to scan and press Enter; Type 'c' and press\n Enter for a list of CLI mode commands; Type 'q' and press Enter to quit:";
$phpMussel['lang']['cli_pe1'] = 'ليس ملف PE صالح!';
$phpMussel['lang']['cli_pe2'] = 'أقسام PE:';
$phpMussel['lang']['cli_working'] = 'في تَقَدم';
$phpMussel['lang']['controls_lockout'] = 'phpMussel controls lockout enabled.';
$phpMussel['lang']['corrupted'] = 'الكشف PE تلف';
$phpMussel['lang']['denied'] = 'رفض تحميل!';
$phpMussel['lang']['denied_other'] = 'Upload Denied! Téléchargement Refusé! Subida Denegada! Caricamento Negato! Upload verweigert! Upload Geweigerd! アップロード拒否! 上传是否认! 上傳是否認! Uppladda Nekas! Загрузка Отказана! Augšupielādēt Liegta! 업로드 거부! Sự tải lên đã bị từ chối!';
$phpMussel['lang']['denied_reason'] = 'تم حجب التحميل للأسباب الواردة أدناه:';
$phpMussel['lang']['detected'] = 'الكشف {vn}';
$phpMussel['lang']['detected_control_characters'] = 'Detected control characters';
$phpMussel['lang']['encrypted_archive'] = 'Detected encrypted archive; Encrypted archives not permitted';
$phpMussel['lang']['failed_to_access'] = 'فشل الوصول إلى ';
$phpMussel['lang']['file'] = 'ملف';
$phpMussel['lang']['filesize_limit_exceeded'] = 'Filesize limit exceeded';
$phpMussel['lang']['filetype_blacklisted'] = 'Filetype blacklisted';
$phpMussel['lang']['finished'] = 'انتهى';
$phpMussel['lang']['generated_by'] = 'الناتج';
$phpMussel['lang']['greylist_cleared'] = ' Greylist cleared.';
$phpMussel['lang']['greylist_not_updated'] = ' Greylist not updated.';
$phpMussel['lang']['greylist_updated'] = ' Greylist updated.';
$phpMussel['lang']['image'] = 'صورة';
$phpMussel['lang']['instance_already_active'] = 'Instance already active! Please double-check your hooks.';
$phpMussel['lang']['invalid_file'] = 'Invalid file';
$phpMussel['lang']['invalid_url'] = 'Invalid URL!';
$phpMussel['lang']['ok'] = 'حسنا';
$phpMussel['lang']['only_allow_images'] = 'Uploading files other than images isn\'t permitted';
$phpMussel['lang']['phpmussel_disabled'] = 'phpMussel disabled.';
$phpMussel['lang']['phpmussel_disabled_already'] = 'phpMussel already disabled.';
$phpMussel['lang']['phpmussel_enabled'] = 'phpMussel enabled.';
$phpMussel['lang']['phpmussel_enabled_already'] = 'phpMussel already enabled.';
$phpMussel['lang']['plugins_directory_nonexistent'] = 'Plugins directory doesn\'t exist!';
$phpMussel['lang']['quarantined_as'] = "الحجر الصحي بأنه \"/vault/quarantine/{QFU}.qfu\".\n";
$phpMussel['lang']['recursive'] = 'Recursion depth limit exceeded';
$phpMussel['lang']['required_variables_not_defined'] = 'Required variables aren\'t defined: لا يمكن أن يستمر.';
$phpMussel['lang']['SafeBrowseLookup_200'] = 'يحتمل أن تكون ضارة URL الكشف';
$phpMussel['lang']['SafeBrowseLookup_400'] = 'API request error';
$phpMussel['lang']['SafeBrowseLookup_401'] = 'API authorisation error';
$phpMussel['lang']['SafeBrowseLookup_503'] = 'API service unavailable';
$phpMussel['lang']['SafeBrowseLookup_999'] = 'Unknown API error';
$phpMussel['lang']['scan_aborted'] = 'Scanning aborted!';
$phpMussel['lang']['scan_chameleon'] = '{x} chameleon attack detected';
$phpMussel['lang']['scan_checking'] = 'Checking';
$phpMussel['lang']['scan_checking_contents'] = 'Success! Proceeding to check contents.';
$phpMussel['lang']['scan_command_injection'] = 'Command injection attempt detected';
$phpMussel['lang']['scan_complete'] = 'Complete';
$phpMussel['lang']['scan_extensions_missing'] = 'Failed (missing required extensions)!';
$phpMussel['lang']['scan_filename_manipulation_detected'] = 'Filename manipulation detected';
$phpMussel['lang']['scan_map_corrupted'] = 'Signature map corrupted';
$phpMussel['lang']['scan_map_missing'] = 'Signature map missing';
$phpMussel['lang']['scan_missing_filename'] = 'Missing filename';
$phpMussel['lang']['scan_not_archive'] = 'Failed (empty or not an archive)!';
$phpMussel['lang']['scan_no_problems_found'] = 'No problems found.';
$phpMussel['lang']['scan_reading'] = 'قراءة';
$phpMussel['lang']['scan_signature_file_corrupted'] = 'Signature file corrupted';
$phpMussel['lang']['scan_signature_file_missing'] = 'Signature file missing';
$phpMussel['lang']['scan_tampering'] = 'Detected potentially dangerous file tampering';
$phpMussel['lang']['scan_unauthorised_upload'] = 'Unauthorised file upload manipulation detected';
$phpMussel['lang']['scan_unauthorised_upload_or_misconfig'] = 'Unauthorised file upload manipulation or misconfiguration detected! ';
$phpMussel['lang']['started'] = 'بدأت';
$phpMussel['lang']['too_many_urls'] = 'عدد كبير جدا من عناوين المواقع';
$phpMussel['lang']['upload_error_1'] = 'Filesize exceeds the upload_max_filesize directive. ';
$phpMussel['lang']['upload_error_2'] = 'Filesize exceeds form-specified filesize limit. ';
$phpMussel['lang']['upload_error_34'] = 'Upload failure! Please contact the hostmaster for assistance! ';
$phpMussel['lang']['upload_error_6'] = 'Upload directory missing! Please contact the hostmaster for assistance! ';
$phpMussel['lang']['upload_error_7'] = 'Disc-write error! Please contact the hostmaster for assistance! ';
$phpMussel['lang']['upload_error_8'] = 'PHP misconfiguration detected! Please contact the hostmaster for assistance! ';
$phpMussel['lang']['upload_limit_exceeded'] = 'Upload limit exceeded';
$phpMussel['lang']['wrong_password'] = 'كلمة مرور خاطئة؛ رفض العمل.';
$phpMussel['lang']['x_does_not_exist'] = 'غير موجود';
$phpMussel['lang']['_exclamation'] = '! ';
$phpMussel['lang']['_exclamation_final'] = '!';
$phpMussel['lang']['_fullstop'] = '. ';
$phpMussel['lang']['_fullstop_final'] = '.';

$phpMussel['lang']['cli_commands'] = " q
 - Quit CLI.
 - Aliases: quit, exit.
 md5_file
 - Generate MD5 signatures from files [Syntax: md5_file filename].
 - Alias: m.
 md5
 - Generate MD5 signature from string [Syntax: md5 string].
 hex_encode
 - Convert binary string to hexadecimal [Syntax: hex_encode string].
 - Alias: x.
 hex_decode
 - Convert hexadecimal to binary string [Syntax: hex_decode string].
 base64_encode
 - Convert binary string to base64 string [Syntax: base64_encode string].
 - Alias: b.
 base64_decode
 - Convert base64 string to binary string [Syntax: base64_decode string].
 scan
 - Scan file or directory [Syntax: scan filename].
 - Alias: s.
 c
 - Print this command list.
";
