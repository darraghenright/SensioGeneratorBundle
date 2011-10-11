
    /**
     * Add pagination for {{ entity }} list view
     *
     * @param \Doctrine\ORM\Query\QueryBuilder $qb
     * @param int $maxResults
     *
     * @return int
     */
    protected function paginateQuery($qb, $maxResults) 
    {
        $page = (int) $this->getRequest()->get('page');
        
        if ($page > 0) {
            $page--;
        }
        
        $pages = ceil($this->getNumberOfEntities() / $maxResults);
        
        if ($page > $pages) {
            throw new \UnexpectedValueException('The requested page number does not exist.');
        }
        
        $qb->setFirstResult($page * $maxResults)
           ->setMaxResults($maxResults);
            
        return $pages;
    }
    
    /**
     * Return number of Entities
     *
     * @return int
     */
    protected function getNumberOfEntities()
    {
        $qb = $this->getDoctrine()
            ->getEntityManager()
            ->createQueryBuilder();
        
        $query = $qb->select('COUNT(q)')
            ->from('{{ bundle }}:{{ entity }}', 'q')
            ->getQuery();
        
        return $query->getSingleScalarResult();
    }
