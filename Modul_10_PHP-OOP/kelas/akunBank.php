<?php

class akunBank 
{
    protected $accountNumber;
    protected $jmlUang;
    protected $uang;
    protected $nama;


    public function __construct($accountNumber, $jmlUang) 
    {
        $this->accountNumber = $accountNumber;
        $this->jmlUang = $jmlUang;
    }

     public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return ($this->nama);
    }

      public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function kurangiUang($uang)
    {
        if ($uang > 0) 
        {
            if ($uang <= $this->jmlUang) 
            {
                $this->jmlUang -= $uang;
                echo "Uang sebesar $uang berhasil dikurangi.<br>";
            } else {
                echo "Saldo tidak mencukupi untuk mengurangi $uang.<br>";
            }
        } else {
            echo "Jumlah uang harus lebih dari 0.<br>";
        }
    }

    public function tambahUang($uang)
    {
        if($uang>0){
            $this->jmlUang+=$uang;
        } 
    }

    public function hitungPajak()
    {
        return $this->jmlUang*0.11;
    }
    public function tampilkanSaldo()
    {
        return ($this->jmlUang);
    }

}