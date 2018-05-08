<?php
class File_model extends MY_Model
{
    public $table = 'File';
    public $primary_key = 'id';
    public $fillable = array(
        'name', 'title', 'size', 'tags', 'keywords', 'created_at', 'updated_at', 'deleted_at', 'restored_at'
    );
    
    public function __construct()
    {
        parent::__construct();
        
        $this->timestamps = TRUE;
        $this->return_as = 'array';
        $this->soft_deletes = TRUE;
        
    }
    
    public function insert_data($arr)
    {
        $this->insert(array(
            'name' => $arr['name'],
            'title' => $arr['title'],
            'size' => $arr['size'],
            'tags' => $arr['tags'],
            'keywords' => json_encode($arr),
            'created_at' => date('Y-m-d H:i:s'),
        ));
    }
    
    public function show_page($page_num = 1, $items_per_page = 9, $pagination_delimiters = array('<li class="page-item">','</li>')){
        $this->pagination_delimiters = $pagination_delimiters;
        $total_posts = $this->count_rows();
           
        $this->data = array(
            'data' => $this->paginate($items_per_page, $total_posts, $page_num), 
            'all_pages' => $this->all_pages 
        );
            
        return $this->data;
    }
    
    public function search($keyword)
    {
        $this->db->like('keywords',$keyword);
        $query = $this->db->get($this->table);
        
        $this->data = array(
            'data' => $query->result_array(), 
            'all_pages' => null 
        );
        
        return $this->data;
    }
    
}