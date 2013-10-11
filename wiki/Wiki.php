<?
    class Wiki extends Application {
        public function __construct(){
            parent::__construct();
            $this->setControllers(array(
                'test'=>new Wiki_Test()
            ));
        }
    }