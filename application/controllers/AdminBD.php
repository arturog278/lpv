<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminBD extends CI_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('AdminBD', $data); // this will load the view file
    }
    public function Admin($parametro){
      switch($parametro){
      case 1:
            $this->load->view('AAdmA');
            break;
       case 2:
            $this->load->view('AAdmB');
            break;
       case 3:
            $this->load->view('AAdmE');
            break;
      case 4:
            $this->load->view('AAdmC');
            break;
      }
    }
    public function Alumnos($parametro){
      switch($parametro){
        case 1:
            $this->load->view('AAluA');
            break;
       case 2:
            $this->load->view('AAluB');
            break;
       case 3:
            $this->load->view('AAluE');
            break;
      case 4:
            $this->load->view('AAluC' );
            break;
      }
    }
    public function Anotaciones($parametro){
      switch($parametro){
        case 1:
            $this->load->view('AAnoA' );
            break;
       case 2:
            $this->load->view('AAnoB' );
            break;
       case 3:
            $this->load->view('AAnoE' );
            break;
      case 4:
            $this->load->view('AAnoC' );
            break;
      }
    }
      public function Aulas($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AAluA' );
              break;
         case 2:
              $this->load->view('AAluB' );
              break;
         case 3:
              $this->load->view('AAluE' );
              break;
        case 4:
              $this->load->view('AAluC' );
              break;
        }
      }
      public function Clases($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AClaA' );
              break;
         case 2:
              $this->load->view('AClaB' );
              break;
         case 3:
              $this->load->view('AClaE' );
              break;
        case 4:
              $this->load->view('AClaC' );
              break;
        }
      }
      public function Divisiones($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ADivA' );
              break;
         case 2:
              $this->load->view('ADivB' );
              break;
         case 3:
              $this->load->view('ADivE' );
              break;
        case 4:
              $this->load->view('ADivC' );
              break;
        }
      }
      public function Horarios($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AHorA' );
              break;
         case 2:
              $this->load->view('AHorB' );
              break;
         case 3:
              $this->load->view('AHorE' );
              break;
        case 4:
              $this->load->view('AHorC' );
              break;
        }
      }
      public function Materiales($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AMatA' );
              break;
         case 2:
              $this->load->view('AMatB' );
              break;
         case 3:
              $this->load->view('AMatE' );
              break;
        case 4:
              $this->load->view('AMatC' );
              break;
        }
      }
      public function Materias($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AMriA' );
              break;
         case 2:
              $this->load->view('AMriB' );
              break;
         case 3:
              $this->load->view('AMriE' );
              break;
        case 4:
              $this->load->view('AMriC' );
              break;
        }
      }
      public function Prestamos($parametro){
        switch($parametro){
          case 1:
              $this->load->view('APreA' );
              break;
         case 2:
              $this->load->view('APreB' );
              break;
         case 3:
              $this->load->view('APreE' );
              break;
        case 4:
              $this->load->view('APreC' );
              break;
        }
      }
      public function Profesores($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AProA' );
              break;
         case 2:
              $this->load->view('AProB' );
              break;
         case 3:
              $this->load->view('AProE' );
              break;
        case 4:
              $this->load->view('AProC' );
              break;
        }
      }
      public function RegistroAlumnos($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ARalA' );
              break;
         case 2:
              $this->load->view('ARalB' );
              break;
         case 3:
              $this->load->view('ARalE' );
              break;
        case 4:
              $this->load->view('ARalC' );
              break;
        }
      }
      public function Registros($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ARegA' );
              break;
         case 2:
              $this->load->view('ARegB' );
              break;
         case 3:
              $this->load->view('ARegE' );
              break;
        case 4:
              $this->load->view('ARegC' );
              break;
        }
      }
      public function RegistrosActivos($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ARacA' );
              break;
         case 2:
              $this->load->view('ARacB' );
              break;
         case 3:
              $this->load->view('ARacE' );
              break;
        case 4:
              $this->load->view('ARacC' );
              break;
        }
      }

}
