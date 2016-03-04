<?php 
   /**
     * Fun class function for fun
     *
     * @class     FunClass
     * @category FunCategory
     * @package  FunPackage
     * @author   Purushothaman K <purushoth.krishna@aspiresys.com>
     * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
     * @link     https://www.about.me/purushkrish
     *
     */   
class Fun
{
    /**
      * Creates a Money object from a string such as "12.34"     
      *
      * @param string $welcome this displays welcome message
      *
      * @return static static message is displayed
      */
    public function __construct($welcome)
    {
        $this->welcome = 'welcome';
    }    
    /**
      * Function to set Details for the object
      *
      * @param string $place place is expected here
      * @param string $age   place is expected here
      *
      * @return static value is returned
      */
    public function setDetails($place, $age)
    {
        $this->welcomemsg = 'Hi '.$this->welcome.'We welcome to beautiful Day';
        $this->place = $place;
        $this->age = $age;
    }
    /**
       * This is the function responsible for displaying result view
       *
       * @return static static result is displayed based on the input
       */
    public function view()
    {
        $str = 'Here comes the welcome message<b>'.$this->welcomemsg.'</b>';
        $str .= '<br>'.$this->place;
        $str.= '<br/>'.$this->age;
        echo  $str;
    }
}	
$funda = new Fun("Mighty Bruce ;)");
$funda->setDetails("Chennai", "26");
$funda->view();
