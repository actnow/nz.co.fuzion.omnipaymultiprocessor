<?php
/**
 * Created by IntelliJ IDEA.
 * User: emcnaughton
 * Date: 11/6/17
 * Time: 3:18 PM
 */
return array(
  array(
    'name' => 'OmniPay - PayPal_Express',
    'entity' => 'payment_processor_type',
    'metadata' => array(
      'client_side_scripts' => array(
        array(
          'script_url' => 'https://secure.ewaypayments.com/scripts/eCrypt.js',
        ),
      ),
    ),
    'params' =>
      array(
        'version' => 3,
        'title' => 'OmniPay - PayPal Express',
        'name' => 'omnipay_PayPal_Express',
        'description' => 'PayPal_Express Payment Processor',
        'user_name_label' => 'Username',
        'password_label' => 'Password',
        'class_name' => 'Payment_OmnipayMultiProcessor',
        'url_site_default' => 'http://unused.com',
        'url_api_default' => 'http://unused.com',
        'url_recur_default' => 'http://unused.com',
        'url_site_test_default' => 'http://unused.com',
        'url_recur_test_default' => 'http://unused.com',
        'url_api_test_default' => 'http://unused.com',
        'billing_mode' => 4,
        'payment_type' => 1,
      ),
  )
);