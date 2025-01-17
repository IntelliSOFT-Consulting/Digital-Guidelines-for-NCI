<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Ushbu ma\'lumotlar, bizdagi ma\'lumotlarga mos kelmadi.',
    'throttle' => 'Kirishga juda ko\'p urinishlar qilindi. Iltimos :seconds soniyadan so\'ng urinib ko\'ring.',

    // Login & Register
    'sign_up' => 'Ro\'yxatdan o\'tish',
    'log_in' => 'Kirish',
    'log_in_with' => ':socialDriver orqali kirish',
    'sign_up_with' => ':socialDriver orqali ro\'yxatdan o\'tish',
    'logout' => 'Chiqish',

    'name' => 'Ism',
    'username' => 'Foydalanuvchi nomi',
    'email' => 'Email',
    'password' => 'Parol',
    'password_confirm' => 'Parolni tasdiqlash',
    'password_hint' => 'Kamida 8 belgi bo\'lishi kerak',
    'forgot_password' => 'Parolni unutdingizmi?',
    'remember_me' => 'Meni eslab qoling',
    'ldap_email_hint' => 'Ushbu hisob bilan foydalanish uchun emailni kiriting.',
    'create_account' => 'Hisob yaratish',
    'already_have_account' => 'Hisobingiz bormi?',
    'dont_have_account' => 'Hisobingiz yo\'qmi?',
    'social_login' => 'Ijtimoiy tarmoqlar orqali kirish',
    'social_registration' => 'Ijtimoiy tarmoqlar orqali ro\'yxatdan o\'tish',
    'social_registration_text' => 'Boshqa xizmatdan foydalanib ro\'yxatdan o\'ting va kiring.',

    'register_thanks' => 'Ro\'yxatdan o\'tganingiz uchun rahmat!',
    'register_confirm' => ':appName dan foydalnish uchun iltimos emailingizga yuborilgan xatni ochib, tasdiqlovchi link orqali o\'ting.',
    'registrations_disabled' => 'Hozirda ro\'yxatdan o\'tish yopilgan',
    'registration_email_domain_invalid' => 'Ushbu domendagi email bilan ro\'yxatdan o\'tib bo\'lmaydi',
    'register_success' => 'Ro\'yxatdan o\'tganingiz uchun rahmat! Endi siz ushbu hisob bilan saytga kirishingiz mumkin.',

    // Login auto-initiation
    'auto_init_starting' => 'Attempting Login',
    'auto_init_starting_desc' => 'We\'re contacting your authentication system to start the login process. If there\'s no progress after 5 seconds you can try clicking the link below.',
    'auto_init_start_link' => 'Proceed with authentication',

    // Password Reset
    'reset_password' => 'Parolni tiklash',
    'reset_password_send_instructions' => 'Parolni tiklash manzilini olish uchun emailingizni quyidagi maydonga kiriting.',
    'reset_password_send_button' => 'Tiklash manzilini yuborish',
    'reset_password_sent' => 'A password reset link will be sent to :email if that email address is found in the system.',
    'reset_password_success' => 'Your password has been successfully reset.',
    'email_reset_subject' => 'Reset your :appName password',
    'email_reset_text' => 'You are receiving this email because we received a password reset request for your account.',
    'email_reset_not_requested' => 'If you did not request a password reset, no further action is required.',

    // Email Confirmation
    'email_confirm_subject' => 'Confirm your email on :appName',
    'email_confirm_greeting' => 'Thak you for Registering to The National Guidelines for Establishment of Cancer Management Centers in Kenya',
    'email_confirm_text' => 'Please confirm your email address by clicking the button below:',
    'email_confirm_action' => 'Confirm Email',
    'email_confirm_send_error' => 'Email confirmation required but the system could not send the email. Contact the admin to ensure email is set up correctly.',
    'email_confirm_success' => 'Your email has been confirmed! You should now be able to login using this email address.',
    'email_confirm_resent' => 'Confirmation email resent, Please check your inbox.',

    'email_not_confirmed' => 'Email Address Not Confirmed',
    'email_not_confirmed_text' => 'Your email address has not yet been confirmed.',
    'email_not_confirmed_click_link' => 'Please click the link in the email that was sent shortly after you registered.',
    'email_not_confirmed_resend' => 'If you cannot find the email you can re-send the confirmation email by submitting the form below.',
    'email_not_confirmed_resend_button' => 'Resend Confirmation Email',

    // User Invite
    'user_invite_email_subject' => 'You have been invited to join :appName!',
    'user_invite_email_greeting' => 'An account has been created for you on :appName.',
    'user_invite_email_text' => 'Click the button below to set an account password and gain access:',
    'user_invite_email_action' => 'Set Account Password',
    'user_invite_page_welcome' => 'Welcome to :appName!',
    'user_invite_page_text' => 'To finalise your account and gain access you need to set a password which will be used to log-in to :appName on future visits.',
    'user_invite_page_confirm_button' => 'Confirm Password',
    'user_invite_success_login' => 'Password set, you should now be able to login using your set password to access :appName!',

    // Multi-factor Authentication
    'mfa_setup' => 'Setup Multi-Factor Authentication',
    'mfa_setup_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'mfa_setup_configured' => 'Already configured',
    'mfa_setup_reconfigure' => 'Reconfigure',
    'mfa_setup_remove_confirmation' => 'Are you sure you want to remove this multi-factor authentication method?',
    'mfa_setup_action' => 'Setup',
    'mfa_backup_codes_usage_limit_warning' => 'You have less than 5 backup codes remaining, Please generate and store a new set before you run out of codes to prevent being locked out of your account.',
    'mfa_option_totp_title' => 'Mobile App',
    'mfa_option_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Backup Codes',
    'mfa_option_backup_codes_desc' => 'Securely store a set of one-time-use backup codes which you can enter to verify your identity.',
    'mfa_gen_confirm_and_enable' => 'Confirm and Enable',
    'mfa_gen_backup_codes_title' => 'Backup Codes Setup',
    'mfa_gen_backup_codes_desc' => 'Store the below list of codes in a safe place. When accessing the system you\'ll be able to use one of the codes as a second authentication mechanism.',
    'mfa_gen_backup_codes_download' => 'Download Codes',
    'mfa_gen_backup_codes_usage_warning' => 'Each code can only be used once',
    'mfa_gen_totp_title' => 'Mobile App Setup',
    'mfa_gen_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Scan the QR code below using your preferred authentication app to get started.',
    'mfa_gen_totp_verify_setup' => 'Verify Setup',
    'mfa_gen_totp_verify_setup_desc' => 'Verify that all is working by entering a code, generated within your authentication app, in the input box below:',
    'mfa_gen_totp_provide_code_here' => 'Provide your app generated code here',
    'mfa_verify_access' => 'Verify Access',
    'mfa_verify_access_desc' => 'Your user account requires you to confirm your identity via an additional level of verification before you\'re granted access. Verify using one of your configured methods to continue.',
    'mfa_verify_no_methods' => 'No Methods Configured',
    'mfa_verify_no_methods_desc' => 'No multi-factor authentication methods could be found for your account. You\'ll need to set up at least one method before you gain access.',
    'mfa_verify_use_totp' => 'Verify using a mobile app',
    'mfa_verify_use_backup_codes' => 'Verify using a backup code',
    'mfa_verify_backup_code' => 'Backup Code',
    'mfa_verify_backup_code_desc' => 'Enter one of your remaining backup codes below:',
    'mfa_verify_backup_code_enter_here' => 'Enter backup code here',
    'mfa_verify_totp_desc' => 'Enter the code, generated using your mobile app, below:',
    'mfa_setup_login_notification' => 'Multi-factor method configured, Please now login again using the configured method.',
];
