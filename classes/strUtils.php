<?php
class strUtils {
    public function __construct(string $strr)
    {
        $this->setStr($strr);
    }

    private string $str = 'Ma chaine';

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str)
    {
        $this->str = $str;
    }

    public function bold () :void{?>
        <b><?= $this->getStr() ?></b><?php
    }


    public function italic () :void {?>
        <i><?= $this->getStr() ?></i><?php
    }

    public function underline () : void {?>
        <u><?= $this->getStr() ?></u><?php
    }


    public function capitalize () :void {?>
        <p style="text-transform: uppercase"><?= $this->getStr() ?></p><?php
    }



}