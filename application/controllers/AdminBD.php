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
            $this->load->view('AAdmA', $data);
            break;
       case 2:
            $this->load->view('AAdmB', $data);
            break;
       case 3:
            $this->load->view('AAdmE', $data);
            break;
      case 4:
            $this->load->view('AAdmC', $data);
            break;
      }
    }
    public function Alumnos($parametro){
      switch($parametro){
        case 1:
            $this->load->view('AAluA', $data);
            break;
       case 2:
            $this->load->view('AAluB', $data);
            break;
       case 3:
            $this->load->view('AAluE', $data);
            break;
      case 4:
            $this->load->view('AAluC', $data);
            break;
      }
    }
    public function Anotaciones($parametro){
      switch($parametro){
        case 1:
            $this->load->view('AAnoA', $data);
            break;
       case 2:
            $this->load->view('AAnoB', $data);
            break;
       case 3:
            $this->load->view('AAnoE', $data);
            break;
      case 4:
            $this->load->view('AAnoC', $data);
            break;
      }
    }
      public function Aulas($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AAluA', $data);
              break;
         case 2:
              $this->load->view('AAluB', $data);
              break;
         case 3:
              $this->load->view('AAluE', $data);
              break;
        case 4:
              $this->load->view('AAluC', $data);
              break;
        }
      }
      public function Clases($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AClaA', $data);
              break;
         case 2:
              $this->load->view('AClaB', $data);
              break;
         case 3:
              $this->load->view('AClaE', $data);
              break;
        case 4:
              $this->load->view('AClaC', $data);
              break;
        }
      }
      public function Divisiones($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ADivA', $data);
              break;
         case 2:
              $this->load->view('ADivB', $data);
              break;
         case 3:
              $this->load->view('ADivE', $data);
              break;
        case 4:
              $this->load->view('ADivC', $data);
              break;
        }
      }
      public function Horarios($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AHorA', $data);
              break;
         case 2:
              $this->load->view('AHorB', $data);
              break;
         case 3:
              $this->load->view('AHorE', $data);
              break;
        case 4:
              $this->load->view('AHorC', $data);
              break;
        }
      }
      public function Materiales($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AMatA', $data);
              break;
         case 2:
              $this->load->view('AMatB', $data);
              break;
         case 3:
              $this->load->view('AMatE', $data);
              break;
        case 4:
              $this->load->view('AMatC', $data);
              break;
        }
      }
      public function Materias($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AMriA', $data);
              break;
         case 2:
              $this->load->view('AMriB', $data);
              break;
         case 3:
              $this->load->view('AMriE', $data);
              break;
        case 4:
              $this->load->view('AMriC', $data);
              break;
        }
      }
      public function Prestamos($parametro){
        switch($parametro){
          case 1:
              $this->load->view('APreA', $data);
              break;
         case 2:
              $this->load->view('APreB', $data);
              break;
         case 3:
              $this->load->view('APreE', $data);
              break;
        case 4:
              $this->load->view('APreC', $data);
              break;
        }
      }
      public function Profesores($parametro){
        switch($parametro){
          case 1:
              $this->load->view('AProA', $data);
              break;
         case 2:
              $this->load->view('AProB', $data);
              break;
         case 3:
              $this->load->view('AProE', $data);
              break;
        case 4:
              $this->load->view('AProC', $data);
              break;
        }
      }
      public function RegistroAlumnos($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ARalA', $data);
              break;
         case 2:
              $this->load->view('ARalB', $data);
              break;
         case 3:
              $this->load->view('ARalE', $data);
              break;
        case 4:
              $this->load->view('ARalC', $data);
              break;
        }
      }
      public function Registros($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ARegA', $data);
              break;
         case 2:
              $this->load->view('ARegB', $data);
              break;
         case 3:
              $this->load->view('ARegE', $data);
              break;
        case 4:
              $this->load->view('ARegC', $data);
              break;
        }
      }
      public function RegistrosActivos($parametro){
        switch($parametro){
          case 1:
              $this->load->view('ARacA', $data);
              break;
         case 2:
              $this->load->view('ARacB', $data);
              break;
         case 3:
              $this->load->view('ARacE', $data);
              break;
        case 4:
              $this->load->view('ARacC', $data);
              break;
        }
      }

}
