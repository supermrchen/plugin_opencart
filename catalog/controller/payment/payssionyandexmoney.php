<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionYandexmoney extends ControllerPaymentPayssion {
	protected $pm_id = 'yamoney';
}