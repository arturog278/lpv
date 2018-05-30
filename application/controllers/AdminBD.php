<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminBD extends CI_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to templates
        $this->load->template('AdminBD', $data); // this will load the template file
    }
    public function Admin($parametro){
      switch($parametro){
      case 1:
            $this->load->template('AAdmA');
            redirect(base_url().'AdminBD/Admin/1');
            break;
       case 2:
            $this->load->template('AAdmB');
            redirect(base_url().'AdminBD/Admin/2');
            break;
       case 3:
            $this->load->template('AAdmE');
            redirect(base_url().'AdminBD/Admin/3');

            break;
      case 4:
            $this->load->template('AAdmC');
            redirect(base_url().'AdminBD/Admin/4');

            break;
      }
    }
    public function Alumnos($parametro){
      switch($parametro){
        case 1:
            $this->load->template('AAluA');
            redirect(base_url().'AdminBD/Alumnos/1');
            break;
       case 2:
            $this->load->template('AAluB');
            redirect(base_url().'AdminBD/Alumnos/2');
            break;
       case 3:
            $this->load->template('AAluE');
            redirect(base_url().'AdminBD/Alumnos/3');
            break;
      case 4:
            $this->load->model('Alumno_model');
            $data['alumnos'] = $this->Alumno_model->getall('','','','','');
            $this->load->template('AAluC',$data);
          //  redirect(base_url().'AdminBD/Alumnos/4');
            break;
      }
    }
    public function Anotaciones($parametro){
      switch($parametro){
        case 1:
            $this->load->template('AAnoA' );
            redirect(base_url().'AdminBD/Anotaciones/1');
            break;
       case 2:
            $this->load->template('AAnoB' );
            redirect(base_url().'AdminBD/Anotaciones/2');
            break;
       case 3:
            $this->load->template('AAnoE' );
            redirect(base_url().'AdminBD/Anotaciones/3');
            break;
      case 4:
            $this->load->template('AAnoC' );
            redirect(base_url().'AdminBD/Anotaciones/4');
            break;
      }
    }
      public function Aulas($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AAulA' );
              redirect(base_url().'AdminBD/Aulas/1');
              break;
         case 2:
              $this->load->template('AAulB' );
              redirect(base_url().'AdminBD/Aulas/2');
              break;
         case 3:
              $this->load->template('AAulE' );
              redirect(base_url().'AdminBD/Aulas/3');
              break;
        case 4:
              $this->load->template('AAulC' );
              redirect(base_url().'AdminBD/Aulas/4');
              break;
        }
      }
      public function Clases($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AClaA' );
              redirect(base_url().'AdminBD/Clases/1');
              break;
         case 2:
              $this->load->template('AClaB' );
              redirect(base_url().'AdminBD/Clases/2');
              break;
         case 3:
              $this->load->template('AClaE' );
              redirect(base_url().'AdminBD/Clases/3');
              break;
        case 4:
              $this->load->template('AClaC' );
              redirect(base_url().'AdminBD/Clases/4');
              break;
        }
      }
      public function Divisiones($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ADivA' );
              redirect(base_url().'AdminBD/Divisiones/1');
              break;
         case 2:
              $this->load->template('ADivB' );
              redirect(base_url().'AdminBD/Divisiones/2');
              break;
         case 3:
              $this->load->template('ADivE' );
              redirect(base_url().'AdminBD/Divisiones/3');
              break;
        case 4:
              $this->load->template('ADivC' );
              redirect(base_url().'AdminBD/Divisiones/4');
              break;
        }
      }
      public function Horarios($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AHorA' );
              redirect(base_url().'AdminBD/Horarios/1');
              break;
         case 2:
              $this->load->template('AHorB' );
              redirect(base_url().'AdminBD/Horarios/2');
              break;
         case 3:
              $this->load->template('AHorE' );
              redirect(base_url().'AdminBD/Horarios/3');
              break;
        case 4:
              $this->load->template('AHorC' );
              redirect(base_url().'AdminBD/Horarios/4');
              break;
        }
      }
      public function Materiales($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AMatA' );
              redirect(base_url().'AdminBD/Materiales/1');
              break;
         case 2:
              $this->load->template('AMatB' );
              redirect(base_url().'AdminBD/Materiales/2');
              break;
         case 3:
              $this->load->template('AMatE' );
              redirect(base_url().'AdminBD/Materiales/3');
              break;
        case 4:
              $this->load->template('AMatC' );
              redirect(base_url().'AdminBD/Materiales/4');
              break;
        }
      }
      public function Materias($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AMriA' );
              redirect(base_url().'AdminBD/Materias/1');
              break;
         case 2:
              $this->load->template('AMriB' );
              redirect(base_url().'AdminBD/Materias/2');
              break;
         case 3:
              $this->load->template('AMriE' );
              redirect(base_url().'AdminBD/Materias/3');
              break;
        case 4:
              $this->load->template('AMriC' );
              redirect(base_url().'AdminBD/Materias/4');
              break;
        }
      }
      public function Prestamos($parametro){
        switch($parametro){
          case 1:
              $this->load->template('APreA' );
              redirect(base_url().'AdminBD/Prestamos/1');
              break;
         case 2:
              $this->load->template('APreB' );
              redirect(base_url().'AdminBD/Prestamos/2');
              break;
         case 3:
              $this->load->template('APreE' );
              redirect(base_url().'AdminBD/Prestamos/3');
              break;
        case 4:
              $this->load->template('APreC' );
              redirect(base_url().'AdminBD/Prestamos/4');
              break;
        }
      }
      public function Profesores($parametro){
        switch($parametro){
          case 1:
              $this->load->template('AProA' );
              redirect(base_url().'AdminBD/Profesores/1');
              break;
         case 2:
              $this->load->template('AProB' );
              redirect(base_url().'AdminBD/Profesores/2');
              break;
         case 3:
              $this->load->template('AProE' );
              redirect(base_url().'AdminBD/Profesores/3');
              break;
        case 4:
              $this->load->template('AProC' );
              redirect(base_url().'AdminBD/Profesores/4');
              break;
        }
      }
      public function RegistroAlumnos($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ARalA' );
              redirect(base_url().'AdminBD/RegistroAlumnos/1');
              break;
         case 2:
              $this->load->template('ARalB' );
              redirect(base_url().'AdminBD/RegistroAlumnos/2');
              break;
         case 3:
              $this->load->template('ARalE' );
              redirect(base_url().'AdminBD/RegistroAlumnos/3');
              break;
        case 4:
              $this->load->template('ARalC' );
              redirect(base_url().'AdminBD/RegistroAlumnos/4');
              break;
        }
      }
      public function Registros($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ARegA' );
              redirect(base_url().'AdminBD/Registros/1');
              break;
         case 2:
              $this->load->template('ARegB' );
              redirect(base_url().'AdminBD/Registros/2');
              break;
         case 3:
              $this->load->template('ARegE' );
              redirect(base_url().'AdminBD/Registros/3');
              break;
        case 4:
              $this->load->template('ARegC' );
              redirect(base_url().'AdminBD/Registros/4');
              break;
        }
      }
      public function RegistrosActivos($parametro){
        switch($parametro){
          case 1:
              $this->load->template('ARacA' );
              redirect(base_url().'AdminBD/RegistrosActivos/1');
              break;
         case 2:
              $this->load->template('ARacB' );
              redirect(base_url().'AdminBD/RegistrosActivos/2');
              break;
         case 3:
              $this->load->template('ARacE' );
              redirect(base_url().'AdminBD/RegistrosActivos/3');
              break;
        case 4:
              $this->load->template('ARacC' );
              redirect(base_url().'AdminBD/RegistrosActivos/4');
              break;
        }
      }

}
