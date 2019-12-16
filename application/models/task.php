<?php   

class task extends CI_Model {
    public $id;
    public $task_name;
    public $complete;

    public function agregar()
    {
        $this->task_name = $_POST['task_name']; // please read the below note
        $this->complete = $_POST['complete'];
        $this->id="";

        $this->load->database();

        echo $this->complete;
        echo $this->task_name;

        $this->db->insert('tasks', $this);
        $this->db->close();
    }

    public function consultar_tareas(){
        $this->load->database();
        $query = $this->db->get('tasks');
        $this->db->close();
        return $query;
    }

}

?>