<?php
class Test extends MY_Controller{
    
    public function Test(){
        parent::__construct();

        //load all model for testing

        
        //load variable for header/footer/title
        $data['header'] = $this::_getHeader();
        $data['footer'] = $this::_getFooter();
        $data['title']  = $this::_getTitle();
        $this->load->vars($data);     
    }
    
    public function index(){
        echo 'test page';
    }
    
    /*
     * controller for selected product id (route from product/$id to this method view($id))
     */
    public function view($id){
		echo('id: '.$id);
    }
    
    public function viewall(){
        $this->load->model('ProductModel');
        
        // ******** prefer array as I think we can use some useful array functionallity **********
        echo 'using result as array<br>';
        foreach($this->ProductModel->getCategoryListArray() as $category){
            echo $category['id'].' - '.$category['name'].'<br>';
        }
        
        
        echo 'using result as object<br>';
        foreach($this->ProductModel->getCategoryListObject() as $category){
            echo $category->id.' - '.$category->name.'<br>';
        }
        
    }
    
    
    public function cache_save(){
    	$this->load->driver('cache');
    	
    	$value = array(
    	 				'hello-world' => 'test/view/1',
    					'i-miss-you'  => 'test/view/2',
    					'i-want-you'  => 'test/view/3',
    					);
    	
    	$this->cache->file->save('mykey', $value, 100);
    	echo('cache saved');
    }
    
    public function cache_get($key){
    	$this->load->driver('cache');
    	$value = $this->cache->file->get($key);
    	echo('key: '.$key.'<br>');
    	
    	if ($value){
	    	var_dump($value);
	    	
	    	while (list($key, $val) = each($value))
	    	{
	    		echo "$key => $val<br />";
	    	}
    	}
    }
    
    public function cache_info(){
    	$this->load->driver('cache');
    	var_dump($this->cache->file->cache_info());
    }
    
    public function cache_clean(){
    	$this->load->driver('cache');
    	$this->cache->file->clean();
    }
    
    
    /***********************************
     *
     * private function for
     * - header
     * - footer
     * - title
     * 
     ***********************************/
    private function _getHeader(){
        return array(
                    'first'  => '1. first',
                    'second' => '2. second'
                    );
    }
    
    private function _getFooter(){
        return array(
                    'third'  => '3. third',
                    'fourth' => '4. fourth'
                    );        
    }
    
    private function _getTitle(){
        return ;
    }    
}

