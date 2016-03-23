<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        set_theme();
        $this->display();
    }

    function infoAddr(){
        set_theme();
        $this->display();
    }
    function editAddr(){
        set_theme();
        $this->display();
    }
    function check(){
        set_theme();
        $this->display();
    }
}