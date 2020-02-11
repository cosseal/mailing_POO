<?php


class mailing
{
    private $email;
    private $from;
    private $CC =[];
    private $to=[];
    private $objet;
    private $contenu;
    private $pj;



    public function __construct($from, $CC,$to,$objet,$contenu,$pj)
    {
        $this->setFrom($from);
        $this->CC = $CC;
        $this->setTo($to);
        $this->setObjet($objet);
        $this->setContenu($contenu);
        $this->pj = $pj;


    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }



    public function sendmail ()
    {
        $header = "From: $this->from.\r\n" . "CC:".implode(",",$this->CC);

        $this->email = mail("$this->to",$this->objet, $this->contenu, $this->pj, $header);
        return $this->email;
    }


}
