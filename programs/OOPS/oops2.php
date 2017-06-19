<?php

class Mobile {
      var $screen_size;
      var $ram;
      var $company;
      var $processor;
      var $ss;
      var $r;
      var $pr;
      var $proc;
      
      function set_screen_size($par){
         $this->screen_size = $par;
       
      }
      
      function get_screen_size(){
         $s= $this->screen_size ."\n";
         echo $s;
         
      }
      
      function set_ram($par){
         $this->ram = $par;
        
      }
      
      function get_ram(){
         $r= $this->ram ."\n";
         echo $r;

       
      }
      function set_company($par){
         $this->company = $par;
      }
      
      function get_company(){
         $pr= $this->company ."\n";
         echo $pr;
      }
      function set_processor($par){
         $this->processor = $par;
      }
      
      function get_processor(){
         $proc= $this->processor ."\n";
         echo $proc;
      }
      function set_price()
      {
         $s=$this->screen_size;
         $r=$this->ram;
         $pr=$this->company;
         $proc=$this->processor;
         $cost=$pr*($s/4.0)+$pr*($r/1.0)+$pr*($proc/1.0)+0.05*$pr;
         echo $cost."\n";
      }
      
   }

class Bill extends Mobile
{
    //child class
}$samsung = new Bill;

    $samsung->set_screen_size(4.5);
    $samsung->set_ram(3);
    $samsung->set_company(7000);
    $samsung->set_processor(5);
    $samsung->get_screen_size();
    $samsung->get_ram();
    $samsung->get_company();
    $samsung->get_processor();
    echo "price of samsung:";
    $samsung->set_price();

?>