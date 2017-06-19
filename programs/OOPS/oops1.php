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
      
   }$samsung = new Mobile;
    $moto= new Mobile;
    $lenovo = new Mobile;
    $nokia=new Mobile;

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
   
    $moto->set_screen_size(5);
    $moto->set_ram(2);
    $moto->set_company(5999);
    $moto->set_processor(3);
    $moto->get_screen_size();
    $moto->get_ram();
    $moto->get_company();
    $moto->get_processor();
    echo "price of moto:";
    $samsung->set_price();

    $lenovo->set_screen_size(5.1);
    $lenovo->set_ram(2);
    $lenovo->set_company(4000);
    $lenovo->set_processor(2);
    $lenovo->get_screen_size();
    $lenovo->get_ram();
    $lenovo->get_company();
    $lenovo->get_processor();
    echo "price of lenovo:";
    $lenovo->set_price();
    
    $nokia->set_screen_size(5);
    $nokia->set_ram(3);
    $nokia->set_company(6100);
    $nokia->set_processor(3);
    $nokia->get_screen_size();
    $nokia->get_ram();
    $nokia->get_company();
    $nokia->get_processor();
    echo "price of nokia:";
    $nokia->set_price();
    

    

   
  


?>