<?php

namespace Unialfa;

class EmailService {
    //proriedades

    public function sendEmail($to, $subject, $menssage) {
        echo "Enviando menssagem para: $to, Titulo: $subject, Menssagem: $menssage";
    }
}