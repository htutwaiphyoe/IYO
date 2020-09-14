<?php
namespace app\config;
interface Dbfunction
{
    public function query($qry);
    public function bind($param,$value,$type='');
    public function execute();
    public function multipleSet();
    public function singleSet();
}