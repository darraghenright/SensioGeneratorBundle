

    /**
     * Get sort data for {{ entity }} list view.
     *
     * @return array|false
     */
    protected function getSortInfo()
    {
        $sort = false;
        
        $column = $this->getRequest()->get('sort');
        $order  = $this->getRequest()->get('sort_order'); 
        
        if ($column && $order) {
            
            $sort = array(    
{% for field, metadata in fields %}
                '{{ field }}' => 'asc',
{% endfor %}
                'column' => $column,
                'order'  => $order,
            );
            
            $sort[$column] = 'asc' == $order ? 'desc' : 'asc';
        }
        
        return $sort;
    } 
