<?phpnamespace app\Repositories;use app\Models\CityModel;class CityRepository{    private $model;    public function __construct()    {        $this->model = new CityModel();    }    public function getAll()    {        return $this->model->get_all();    }    public function getSingle($id)    {        return $this->model->get_single($id);    }    public function add($data)    {        return $this->model->add($data);    }    public function update($name , $city_id)    {        return $this->model->update( $name ,$city_id);    }    public function delete($id)    {        return $this->model->delete($id);    }}