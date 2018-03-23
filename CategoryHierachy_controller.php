// category tree
protected function getCategoryTree($level = 0, $prefix = '') {
    $rows = $this->db
        ->select('id,parent_id,name')
        ->where('parent_id', $level)
        ->order_by('name','asc')
        ->get('categories')
        ->result();
        
    $category = '';
    
    if (count($rows) > 0) {
        foreach ($rows as $row) {
          $category .= $prefix.$row->name;
          // Append subcategories
            $category .= $this->getCategoryTree($row->id, $prefix . '-');
          }
    }
    return $category;
}

public function printCategoryTree() {
    echo $this->getCategoryTree();
}
