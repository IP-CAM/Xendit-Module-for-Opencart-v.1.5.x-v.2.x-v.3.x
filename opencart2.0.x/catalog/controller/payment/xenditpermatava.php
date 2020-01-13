<?php

class Controllerpaymentxenditpermatava extends Controller {
    public function index() {
        $this->load->language('payment/xendit');

        $data['environment'] = $this->config->get('xendit_environment');
        $data['text_instructions'] = $this->language->get('text_instructions');
        $data['text_test_instructions'] = $this->language->get('text_test_instructions');
        $data['invoice_hash'] = 'permata';
        $data['button_confirm'] = $this->language->get('button_confirm');
        $data['text_loading'] = $this->language->get('text_loading');
        
        return $this->load->view('payment/xendit.tpl', $data);
    }
}