<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <? $this->load->view('title', $title) ?>
    </head>
    <body>
        <? $this->load->view('header', $header) ?>
        
        
        <? $this->load->view($page, $main) ?>
        

        <? $this->load->view('footer', $footer) ?>
    </body>
</html>
