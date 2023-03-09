<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		

		 require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		 const HOST = 'mail.nic.ru';
		 const LOGIN = 'mimisushi@h303859220.nichost.ru';
		 const PASS = 'Ali993234';
		 const PORT = '587';

		// *** /SMTP *** //
   
    const SENDER = 'mimisushi@h303859220.nichost.ru';
    const CATCHER = 'lopesdenis@mail.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    ?>