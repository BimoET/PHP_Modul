
<?php

class Manusia
{
    protected $name;
    protected $nik = "123212121243243";
    protected $umur;
    
    

    public function getNama()
    {
        return $this->name;
    }
    public function setNama($name)
    {
        $this->name = $name;
    }
    
    public function getNIK()
    {
        return " NIK : {$this->nik}";
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
    public function getUmur()
    {
        return "Umur : {$this->umur}";
    }

}
