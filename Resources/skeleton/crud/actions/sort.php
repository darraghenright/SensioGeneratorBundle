
    /**
     * Add sorting for {{ entity }} list view.
     *
    *  @param \Doctrine\ORM\Query\QueryBuilder $qb
     * @return array|false
     */
    protected function addSorting($qb)
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
            $qb->add('orderBy', sprintf('q.%s %s', $column, $order));
        }
        
        return $sort;
    } 
