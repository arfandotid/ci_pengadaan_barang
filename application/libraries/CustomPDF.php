<?php

class CustomPDF
{
    public function __construct()
    {
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
}
