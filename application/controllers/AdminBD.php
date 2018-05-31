<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminBD extends Auth_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to templates
        $this->load->template('AdminBD', $data); // this will load the template file
    }
    public function Admin($parametro){
      switch($parametro){
      case 1:
            $this->load->template('AAdmA');
            break;
       case 2:
            $this->load->template('AAdmB');
            break;
       case 3:
            $this->load->template('AAdmE');
            break;
      case 4:
            $this->load->template('AAdmC');
            break;
      }
    }
    public function Alumnos($parametro){
      switch($parametro){
        case 1:
            $this->load->template('AAluA');
            break;
       case 2:
            $this->load->template('AAluB');
            break;
       case 3:
            $this->load->template('AAluE');
            break;
      case 4:
            $this->load->model('Alumno_model');
            $data['alumnos'] = $this->Alumno_model->getall('','','','','');
            $this->load->template('AAluC',$data);
            break;
      }
    }
    public function Anotaciones($parametro){
      switch($parametro){
        case 1:
            $this->load->template('AAnoA' );
            break;
       case 2:
            $this->load->template('AAnoB' );
            break;
       case 3:
            $this->load->template('AAnoE' );
            break;
      case 4:
            $this->load->template('AAnoC' );
            break;
      }
    }
      public function Aulas($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AAulA' );
              break;
         case 2:
              $this->load->template('AAulB' );
              break;
         case 3:
              $this->load->template('AAulE' );
              break;
        case 4:
              $this->load->template('AAulC' );
              break;
        }
      }
      public function Clases($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AClaA' );
              break;
         case 2:
              $this->load->template('AClaB' );
              break;
         case 3:
              $this->load->template('AClaE' );
              break;
        case 4:
              $this->load->template('AClaC' );
              break;
        }
      }
      public function Divisiones($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ADivA' );
              break;
         case 2:
              $this->load->template('ADivB' );
              break;
         case 3:
              $this->load->template('ADivE' );
              break;
        case 4:
              $this->load->template('ADivC' );
              break;
        }
      }
      public function Horarios($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AHorA' );
              break;
         case 2:
              $this->load->template('AHorB' );
              break;
         case 3:
              $this->load->template('AHorE' );
              break;
        case 4:
              $this->load->template('AHorC' );
              break;
        }
      }
      public function Materiales($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AMatA' );
              break;
         case 2:
              $this->load->template('AMatB' );
              break;
         case 3:
              $this->load->template('AMatE' );
              break;
        case 4:
              $this->load->template('AMatC' );
              break;
        }
      }
      public function Materias($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AMriA' );
              break;
         case 2:
              $this->load->template('AMriB' );
              break;
         case 3:
              $this->load->template('AMriE' );
              break;
        case 4:
              $this->load->template('AMriC' );
              break;
        }
      }
      public function Prestamos($parametro){
        switch($parametro){
          case 1:
              $this->load->template('APreA' );
              break;
         case 2:
              $this->load->template('APreB' );
              break;
         case 3:
              $this->load->template('APreE' );
              break;
        case 4:
              $this->load->template('APreC' );
              break;
        }
      }
      public function Profesores($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AProA' );
              break;
         case 2:
              $this->load->template('AProB' );
              break;
         case 3:
              $this->load->template('AProE' );
              break;
        case 4:
              $this->load->template('AProC' );
              break;
        }
      }
      public function RegistroAlumnos($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ARalA' );
              break;
         case 2:
              $this->load->template('ARalB' );
              break;
         case 3:
              $this->load->template('ARalE' );
              break;
        case 4:
              $this->load->template('ARalC' );
              break;
        }
      }
      public function Registros($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ARegA' );
              break;
         case 2:
              $this->load->template('ARegB' );
              break;
         case 3:
              $this->load->template('ARegE' );
              break;
        case 4:
              $this->load->template('ARegC' );
              break;
        }
      }
      public function RegistrosActivos($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ARacA' );
              break;
         case 2:
              $this->load->template('ARacB' );
              break;
         case 3:
              $this->load->template('ARacE' );
              break;
        case 4:
              $this->load->template('ARacC' );
              break;
        }
      }

}
