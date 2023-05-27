<?php

class Encryptor {
    private $cipher;
    private $ivlen;
    private $options;
    private $encryption_iv;
    private $key;
    private $tag;

    public function __construct(){

        $this->cipher = "aes-128-gcm";
        $this->ivlen = openssl_cipher_iv_length($this->cipher);
        $this->options = 0;
        $this->encryption_iv = '1234567891011121';
        $this->key = 'key';
        $this->tag = null;
    }

    public function encrypt($id){
        $encryptedID = openssl_encrypt($id, $this->cipher, $this->key, $this->options, $this->encryption_iv, $this->tag);
        return $encryptedID;
    }

    public function decrypt($encryptedID){
        $decryptedID = openssl_decrypt($encryptedID, $this->cipher, $this->key, $this->options, $this->encryption_iv, $this->tag);
        return $decryptedID;
    }
}
